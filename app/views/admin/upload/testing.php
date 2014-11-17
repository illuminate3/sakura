


<html>
    

    
    
    
    
    <?php
    $table = 'death';
    $delimiter = '/,/';
    $primaries = null;
    $primary = "mug_id";
$data =  " Rank order,Group,Year,Cause of death,Flag,Deaths";
     $primary = $table . "_id";
        
        //return $delimiter;
        //$data = str_replace('&#13;&#10;','',$data);
        //$data = str_replace('\\r\\n','',$data);
        //if ($delimiter == "TAB" or $delimiter == "/\t+/") {
            $data = trim(preg_replace('/\t+/', ',', $data));
       // } else {
         //   $data = trim(preg_replace('/\s\s+/', ' ', $data));
       // }
        //$delimiter = "/,/";
        //return $data;
        $multiPrimary = 0;
        if ($primaries != null) {
            $primary.="," . $primaries;
            $multiPrimary = 1;
        }
        $schema = " create table IF NOT EXISTS " . $table . " (`" . $primary . "` int NOT NULL AUTO_INCREMENT,";
        //return $data;
        //$data.=',';
        $columns = preg_split($delimiter, $data);
        $tcol = [];
        foreach($columns as $column)
        {
            $column = "`".$column."`";
            $column = preg_replace('/\s/', '_', $column);
            $tcol[] = preg_replace('/\-/', '_', $column);
            
            
        }
        $columns = $tcol;
        //return $columns;
        //array_pop($columns);
        $columns = array_flatten($columns);
        $schema .= implode(' text, ', $columns);
        /* if($multiPrimary > 0){ 
          $schema .= ' text, PRIMARY KEY(' . $primary . ')) ENGINE=MYISAM;';
          }else
          { */

        $schema .= ' text,PRIMARY KEY(`' . $primary . '`)) ENGINE=MYISAM;';

        //}
        echo $schema;
        
        ?>
</html>
