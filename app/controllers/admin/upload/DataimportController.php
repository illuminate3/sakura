<?php 
//use jleach\dataimport\models\Upload as Upload;
class DataimportController extends \BaseController
{
    public function __construct() {
        $this->input = "";
        $this->file = "";
        $this->columns = "";
        $this->table = "";
        $this->query = "";     
    }
    public static function index()
    {
        return \View::make('dataimport::index')->with('route_name', 'This is called from dataimport controller');
    }
    
    public $input;
    public $file;
    public $columns;
    public $primaryKey;
    public $table;
    public $query;
    
    /**
     * 
     * @param string $fullPath
     * @param string $columns
     * @param string $tableName
     * @return string $query
     * 
     * Takes the path of the csv source file, and a string from the prepareColumns function
     * or, in the form "col1, col2, col3" 
     */
    public static function toLoadData($fullPath, $columns, $tableName, $fieldDelimiter='\t', $fieldEnclosed='\"', $fieldEscaped='\"', $lineDelimiter = '\r\n', $ignoreLines = 0)
    {
        $query = "";
        $query .= sprintf("LOAD DATA INFILE '%s' INTO TABLE ".$tableName." FIELDS TERMINATED BY '".$fieldDelimiter."' OPTIONALLY ENCLOSED BY '".$fieldEnclosed."' ESCAPED BY '".$fieldEscaped."' LINES TERMINATED BY '".$lineDelimiter."' IGNORE ".$ignoreLines." LINES (".$columns.");", $fullPath);
        return $query;   
    }
    
    /**
     * 
     * @param string $fullPath
     * @return string
     * 
     * Returns the top line of a text file
     */
    public static function topLine($fullPath)
    {
        return fgets(fopen($fullPath,"r"));
    }
    /**
     * 
     * @param string $data
     * @return string
     * Takes a single tab delimited line from the top of a textfile,
     * and returns a string listing 
     */
    public static function prepareColumns($data)
    {
       $columns = preg_split('/\s+/',$data); 
       array_pop($columns);
       $columns = array_flatten($columns);
       $mynewstring = '`'.implode('` , `',$columns).'`';
       return $mynewstring;
    }
    /**
     * 
     * @param string $data
     * @return string
     * 
     * Creates a drop table and create table mySQL statement 
     * $data must be a tab delimited string
     * $table must be a valid table name.
     */
    public static function prepareTable($data, $table)
    {   
       $schema = "drop table IF EXISTS ".$table."; create table  ".$table." (";
       $columns = preg_split('/\s+/',$data); 
       array_pop($columns);
       $columns = array_flatten($columns);     
       $schema .= implode(' text, ',$columns);
       $schema .= ' text) ENGINE=MYISAM;';
       return $schema;
    }
    /**
     * 
     * @param type $file
     * @param type $table
     * 
     * Recieves the filename, and table name, create a table.
     */
    public static function createTable($file, $table)
    {
        if($file!==null)
            {
                $tableName = $table;
                $filename = $file->getClientOriginalName();
                $directory = DataimportController::folder();
                $topLine = DataimportController::topLine($directory.$filename);
                $create = DataimportController::prepareTable($topLine, $tableName);
                \DB::connection('codes')->getpdo()->exec($create);
            }            
    }
    /**
     * 
     * @param string $table
     * @param string $primary
     * @param string $database
     * 
     *  Using the name of the database, table, and primary key,
     * this function executes an alter table, alter column statement.
     */
    public static function addPrimary($table, $primary, $database)
    {
        \DB::Connection($database)->getpdo()->
                exec('alter table '.$table.' modify column '.$primary.' varchar(99)');
        \DB::Connection($database)->getpdo()->
                exec('alter table '.$table.' add primary key ('.$primary.');');
    }
    public static function addPrimaries($table, $primary, $database)
    {
        $primaries = "";
        $count = count($primary);
       
        $c = 0;
        foreach($primary as $primekey)
            {
            \DB::Connection($database)->getpdo()->
                exec('alter table '.$table.' modify column '.$primekey.' varchar(99)');
            if ($c < $count-1)
            {
            $primaries.=$primekey.',';
            $c+=1;
            }
            else
            {
                $primaries.=$primekey;
            }
            }
        \DB::Connection($database)->getpdo()->
                exec('alter table '.$table.' add primary key ('.$primaries.');');
    }
    public static function folder()
    {
        $directory = \public_path().'/uploads/';
        return \str_replace('\\','/',$directory);
    }
    /**
     * 
     * @return string
     * 
     * Recieves 'data' and 'table' from HTML Form, returns create table statement.
     */
    public static function upload()
    {
        $upload = new \Upload();
        $file = \Input::file('data');
        if($file!==null)
            {
                $tableName = \Input::get('table');
                $filename = $file->getClientOriginalName();
                $upload->filename = $filename;
                $directory = self::folder();
                $uploadSuccess = $file->move($directory, $filename);
                if($uploadSuccess)
                {
                    $topLine = self::topLine($directory.$filename);
                    $columns = self::prepareColumns($topLine);
                    $upload->columns = $columns;
                    $loaddata= self::toLoadData($directory.$filename, $columns, $tableName, '\t','\"','\"','\r\n',1);
                    \DB::connection('codes');
                    $upload->save();
                    self::createTable($file,$tableName);
                    \DB::connection('codes')->getpdo()->exec($loaddata);}
                    $primaries = preg_split('/\s+/', \Input::get('primaryKey')); 
                    self::addPrimaries(\Input::get('table'),$primaries,'codes');
                    echo \Response::json("Transaction Completed :</br> Created Table and Populated With Data ".$columns);
            }
        else
        {
            return \Response::json("Failed to open file, try again");
        }    
    }
}   