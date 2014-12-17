
<?php
$table = Upload::find(1)->take(1)->get();//\
$table = Input::get('data');
var_dump($table);
//$selection = $table;
 //       $table = Upload::where('tablename', '=', $selection)->get();
 //           var_dump($table);    

    //    $columns = Schema::connection('codes')->getColumnListing($table);
     //   var_dump($columns);
        //$sql = DB::connection('codes')->table($table)->toSql();

//        $db = DB::connection('codes')->getPDO();

 //       $query = $db->prepare($sql);

        //$query->execute();
        
       // echo $query;
        ?>
        
        