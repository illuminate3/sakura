@extends('layouts.module')


@section('content')
<div class='container-fluid'>
    <br/>
    <br/>
    <div class='panel panel-default'>
        <div class='panel-heading'> Upload History</div>
        <div id='pane' class='panel-body'>
            <table id="uploads-table" class="display dtable">
                <thead>
                    <tr>
                        <td hidden="hidden"></td>
                        <th>Filename</th>
                        <th>Tablename</th>
                        <th>Field Delimiter</th>
                        <th>Field Enclosed</th>
                        <th>Field Escaped</th>
                        <th>Line Delimiter</th>
                        <th>Ignore Lines</th>
                        <th>Created</th>
                        <th>Updated</th>
                    </tr>
                    
                </thead>
                <tbody>
            @if($uploads!==null)
            @foreach($uploads as $upload)
            <tr>
            <td hidden="hidden">{{$upload->id}}</td>
            <td>{{$upload->filename}}       </td>
            <td>{{$upload->tablename}}      </td>
            <td>{{$upload->fieldDelimiter}} </td>
            <td>{{$upload->fieldEnclosed}}  </td>
            <td>{{$upload->fieldEscaped}}   </td>
            <td>{{$upload->lineDelimiter}}  </td>
            <td>{{$upload->ignoreLines}}    </td>
            <td>{{$upload->created_at}}     </td>
            <td>{{$upload->updated_at}}     </td>
            </tr>
            @endforeach
            @endif
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