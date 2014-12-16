@extends('layouts.module')


@section('content')
<div class='container-fluid'>
    <br/>
    <br/>
    <div class='panel panel-default'>
        <div class='panel-heading'> Upload History</div>
        <div id='pane' class='panel-body'>

            <table border='1'>
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