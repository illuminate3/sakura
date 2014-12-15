


<html>






    <?php
    $table = 'death';
    $delimiter = '/,/';
    $primaries = null;
    $primary = "mug_id";

    $data = "PRODUCTID	PRODUCTNDC	PRODUCTTYPENAME	PROPRIETARYNAME	PROPRIETARYNAMESUFFIX	NONPROPRIETARYNAME	DOSAGEFORMNAME ROUTENAME	STARTMARKETINGDATE	ENDMARKETINGDATE	MARKETINGCATEGORYNAME	APPLICATIONNUMBER	LABELERNAME	SUBSTANCENAME ACTIVE_NUMERATOR_STRENGTH	ACTIVE_INGRED_UNIT	PHARM_CLASSES	DEASCHEDULE";
    $primary = $table . "_id";

    $data = trim(preg_replace('/\t+/', ',', $data));

    $multiPrimary = 0;
    if ($primaries != null) {
        $primary.="," . $primaries;
        $multiPrimary = 1;
    }
    $schema = " create table IF NOT EXISTS " . $table . " (`" . $primary . "` int NOT NULL AUTO_INCREMENT,";

    $columns = preg_split($delimiter, $data);
    $tcol = [];
    foreach ($columns as $column) {
        $column = '`' . $column . '`';
        $column = preg_replace('/\s/', '_', $column);
        $tcol[] = preg_replace('/\-/', '_', $column);
    }
    $columns = $tcol;

    $columns = array_flatten($columns);
    $schema .= implode(' text, ', $columns);


    $schema .= ' text,PRIMARY KEY(' . $primary . ')) ENGINE=MYISAM;';

    echo $schema;

    echo "<br /><br /><br /><br /><br /><br /><br /><br />";

    $data = "PRODUCTID	PRODUCTNDC	PRODUCTTYPENAME	PROPRIETARYNAME	PROPRIETARYNAMESUFFIX	NONPROPRIETARYNAME	DOSAGEFORMNAME	ROUTENAME	STARTMARKETINGDATE	ENDMARKETINGDATE	MARKETINGCATEGORYNAME	APPLICATIONNUMBER	LABELERNAME	SUBSTANCENAME	ACTIVE_NUMERATOR_STRENGTH	ACTIVE_INGRED_UNIT	PHARM_CLASSES	DEASCHEDULE";
    $primary = $table . "_id";
    $data = trim(preg_replace('/\t+/', ',', $data));
    $data = trim(preg_replace('/\s\s+/', ' ', $data));
    $columns = preg_split($delimiter, $data);
    //array_pop($columns);
    $tcol = [];
    foreach ($columns as $column) {

        $column = '`' . $column . '`';
        $column = preg_replace('/\s/', '_', $column);
        $tcol[] = preg_replace('/\-/', '_', $column);
    }
    $columns = $tcol;
    $columns = array_flatten($columns);
    $columns = implode(' , ', $columns);

    echo $columns;
    ?>
</html>
