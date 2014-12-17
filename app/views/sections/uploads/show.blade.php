@extends('layouts.module')


@section('content')
<div class='container-fluid'>
    <br/>
    <br/>
    <div class='panel panel-default'>
        <div class='panel-heading'> Dataset Viewer
            <div class='navbar-form form-group-sm'>
                
                <span>First Row</span>
                <input type='number' min="0" max='{{$count}}' id='minrow' class='form-control' />                  
              
                <span>Row Count</span>
                <input type='number' min="0" max='{{$count}}' id='maxrow' class='form-control'/>                  
                
                
                <button class='btn btn-info' id='refreshtable'>Pull Data</button>
                
                
            </div>
        
        
        </div>
        <div id='pane' class='panel-body'>

            <table class='dtable display'>
                <thead>
                    @foreach($columns as $column)

                <th>{{$column}}</th>


                @endforeach

                </thead>
                <tbody>
                    @while($cursor = $query->fetch())

                    <tr>
                        @foreach($columns as $column)


                        <td>{{$cursor[$column]}}</td>

                        @endforeach

                    </tr>
                    @endwhile
                </tbody>
            </table>


        </div>


    </div>



</div>
{{--
$table->increments('id');
                    $table->string('filename',256);
                    $table->string('tablename', 256);
                    $table->string('columns');
                    $table->string('fieldDelimiter');
                    $table->string('fieldEnclosed');
                    $table->string('fieldEscaped');
                    $table->string('lineDelimiter');
                    $table->string('ignoreLines');
                    $table->timestamps();

--}}
@stop