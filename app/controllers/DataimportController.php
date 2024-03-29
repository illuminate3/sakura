<?php

use Illuminate\Database\Migrations\Migration;

//use jleach\dataimport\models\Upload as Upload;
class DataimportController extends \BaseController {

    public function __construct() {
        $this->input = "";
        $this->file = "";
        $this->columns = "";
        $this->table = "";
        $this->query = "";
    }

    public function getIndex() {
        return \View::make('panels.upload.index');
    }

    public static function postFile() {

        return \View::make('panels.uploads.dataimport');
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
    public static function toLoadData($fullPath, $columns, $tableName, $fieldDelimiter = ",", $fieldEnclosed = "\"", $fieldEscaped = "\"", $lineDelimiter = "\r\n", $ignoreLines = 0) {
        $query = "";
        // if ($fieldDelimiter !== 'TAB') {
        $query .= sprintf("LOAD DATA INFILE '%s' INTO TABLE " . $tableName . " FIELDS TERMINATED BY '" . $fieldDelimiter . "' OPTIONALLY ENCLOSED BY '" . $fieldEnclosed . "' ESCAPED BY '" . $fieldEscaped . "' LINES TERMINATED BY '" . $lineDelimiter . "' IGNORE " . $ignoreLines . " LINES (" . $columns . ");", $fullPath);
        //} else {
        //  $query = sprintf("LOAD DATA INFILE '%s' INTO TABLE " . $tableName . " IGNORE " . $ignoreLines . " LINES (" . $columns. ");", $fullPath);
        //}
        return $query;
    }

    /**
     * 
     * @param string $fullPath
     * @return string
     * 
     * Returns the top line of a text file
     */
    public static function topLine($fullPath) {
        return fgets(fopen($fullPath, "r"));
    }

    /**
     * 
     * @param string $data
     * @param string $delimiter
     * @return string
     * Takes a single tab delimited line from the top of a textfile,
     * and returns a string listing 
     */
    public static function prepareColumns($data, $delimiter) {
        $data = trim(preg_replace('/\t+/', ',', $data));
        $data = trim(preg_replace('/\s\s+/', ' ', $data));
        $delimiter = "/\,/";
        $columns = preg_split($delimiter, $data);
        //array_pop($columns);
        $tcol = [];
        foreach ($columns as $column) {
            if ($column != '') {
                $column = '`' . $column . '`';
                $column = preg_replace('/\s/', '_', $column);
                $tcol[] = preg_replace('/\-/', '_', $column);
            }
        }
        $columns = $tcol;
        $columns = array_flatten($columns);
        $columns = implode(' , ', $columns);

        return $columns;
    }

    /**
     * 
     * @param string $data
     * @return string
     * 
     * Creates a drop table and create table mySQL statement 
     * $delimiter must be a regular expression compatible with preg_split(regex $pattern, string $subject).
     * $data must be a delimited string.
     * $table must be a valid table name.
     * $primaries must be a comma delimited list.
     */
    public static function prepareTable($delimiter, $data, $table, $primaries = null) {
        $primary = $table . "_id";
        $data = trim(preg_replace('/\s\s+/', ' ', $data));
        $data = trim(preg_replace('/\t+/', ',', $data));
        //return $data;
        $multiPrimary = 0;
        if ($primaries != null) {
            $primary.="," . $primaries;
            $multiPrimary = 1;
        }

        $delimiter = "/\,/";

        $schema = " create table IF NOT EXISTS " . $table . " (`" . $primary . "` int NOT NULL AUTO_INCREMENT,";

        $columns = preg_split($delimiter, $data);

        $tcol = [];
        foreach ($columns as $column) {

            $column = '`' . $column . '`';
            $column = preg_replace('/\s+/', '_', $column);
            $tcol[] = preg_replace('/\-/', '_', $column);
        }
        $columns = $tcol;

        $columns = array_flatten($columns);
        $schema .= implode(' text, ', $columns);
        //return $columns;

        $schema .= ' text,PRIMARY KEY(' . $primary . ')) ENGINE=MYISAM;';
        return $schema;
    }

    /**
     * 
     * @param file $file
     * @param regex $delimiter
     * @param string $table
     * 
     * 
     * Recieves the file, gets filname from it, gets regex to split colnames, and table name, then create a table.
     */
    public static function createTable($file, $delimiter, $table) {
        if ($file !== null) {
            $filename = $file->getClientOriginalName();
            $directory = DataimportController::folder();
            $topLine = DataimportController::topLine($directory . $filename);
            $create = DataimportController::prepareTable($delimiter, $topLine, $table);
            //return var_dump($create);
            return \DB::connection('codes')->getpdo()->exec($create);
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
    public static function addPrimary($table, $primary, $database) {
        \DB::Connection($database)->getpdo()->
                exec('alter table ' . $table . ' modify column ' . $primary . ' varchar(99)');
        \DB::Connection($database)->getpdo()->
                exec('alter table ' . $table . ' add primary key (' . $primary . ');');
    }

    /**
     * 
     * @param string $table
     * @param array  $primary
     * @param string $database
     * 
     *  Using the name of the database, table, and array of primary keys,
     * this function executes an alter table, alter column statement.
     */
    public static function addPrimaries($table, $primary, $database) {
        $primaries = "";
        $count = count($primary);

        $c = 0;
        foreach ($primary as $primekey) {
            \DB::Connection($database)->getpdo()->
                    exec('alter table ' . $table . ' modify column ' . $primekey . ' varchar(99)');
            if ($c < $count - 1) {
                $primaries.=$primekey . ',';
                $c++;
            } else {
                $primaries.=$primekey;
            }
        }
        \DB::Connection($database)->getpdo()->
                exec('alter table ' . $table . ' add primary key (' . $primaries . ');');
    }

    public static function folder() {
        $directory = \public_path() . '/uploads/';
        //$directory =  'public/uploads/';
        //return \str_replace('\\', '/', $directory);
        return $directory;
    }

    /**
     * 
     * @return string
     * 
     * Recieves 'data' and 'table' from HTML Form, returns create table statement.
     */
    public function upload() {
        $dataResult = '';
        $upload = new \Upload();
        $file = \Input::file('filename');
        $input = \Input::all();
        return var_dump($file);
        if ($file !== null) {
            $dataResult.='file loaded';
            $directory = self::folder();
            $tableName = \Input::get('table');
            $upload->tablename = $tableName;
            $dataResult.='file loaded';
            $delimiter = "/\\" . Input::get('fieldDelimiter') . '/';
            
            $upload->fieldDelimiter = $delimiter;
            $filename = $file->getClientOriginalName();
            return $filename;
            $upload->filename = $filename;
            $dataResult.=$filename;
            $uploadSuccess = $file->move($directory, $filename);
            
            if ($uploadSuccess) {
                self::createTable($file, $delimiter, $tableName);
                $topLine = self::topLine($directory . $filename);
                $columns = self::prepareColumns($topLine, $delimiter);
                $upload->columns = $columns;
                if ($input['fieldDelimiter'] == ',') {
                    $loaddata = self::toLoadData($directory . $filename, $columns, $tableName, "\\,", '\"', '\"', '\r\n', 1);
                } else {
                    $loaddata = self::toLoadData($directory . $filename, $columns, $tableName, "\\t", "\"", '\"', '\r\n', 1);
                }
                
                $upload->filename = $filename;
                $upload->fieldDelimiter = $delimiter;
                $upload->push();
                \DB::connection('codes')->getpdo()->exec($loaddata);
            }
            $primaries = preg_split('/\,+/', \Input::get('primaryKey'));
            
            return \Response::json("Results:" . $loaddata);
        } else {
            return \Response::json(var_dump($_FILES));
        }
    }

    public function importData() {
        $index = Input::get('upload');
        $upload = \Upload::find($index);
    }

}
