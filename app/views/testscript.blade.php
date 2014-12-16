<?php
$columns = Schema::connection('codes')->getColumnListing('product');
$sql = DB::connection('codes')->table('product')->toSql();

$db = DB::connection('codes')->getPDO();

$query = $db->prepare($sql);

$query->execute();
?>
<table border='1'>
<thead>
@foreach($columns as $column)

<th>{{$column}}</th>
    
    
@endforeach

</thead>
<tbody>
@while($product = $query->fetch())

<tr>
    @foreach($columns as $column)
    
        
     <td>{{$product[$column]}}</td>
        
    @endforeach
    
</tr>
@endwhile
</tbody>
</table>
