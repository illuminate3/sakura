@extends('layouts.module')

@section('content')
<span id='busy-icon'></span>
<br/>
<div class='col-md-3'>
<div class='panel panel-default '>
    <div class='panel-heading'>
        <h3>Upload New DataSet</h3>
        
    </div>
    <div class='panel-body'>
        {{ Former::open()
    ->files(true)
    ->id('file-form')
    ->enctype('multipart/form-data')
    ->method('POST')
        }}

        {{ Former::text('primaryKey')
            ->label('Primary Key (required)')
            ->class('form-control col-md-3')
            ->id('primaryKey')
        }}
        </br>

        </br>

        {{ Former::text('fieldDelimiter')
            ->label('Field Delimiter (Optional)')
            ->class('form-control col-md-3')
            ->id('fieldDelimiter')
        }}
        </br>
        {{"Enter t for TAB, , for comma, ETC..."}}



        {{ Former::text('fieldEscape')
            ->label('Field Escape (Optional)')
            ->class('form-control col-md-3')
            ->id('fieldEscape')
        }}


        {{ Former::text('table',null, null,array('required'=>'required')) 
            ->label('Table Name (Required)') 
            ->class('form-control col-md-3')
            ->id('table')
        }}
        </br>

        {{ Former::file('filename') 
            ->label('Load File')
            ->class('form-control btn btn-default col-md-3')
            ->id('filename')

        }}
        </br>
        {{ Former::button('Upload File')
            ->class('form-control btn btn-default')
            ->id('upload-file')
        }}
        {{Former::close()}}
        <div id="debug">

        </div>

    </div>
</div>
    
</div>
@stop
@section('scripts')


@parent

@stop
