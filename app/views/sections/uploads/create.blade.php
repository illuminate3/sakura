@extends('layouts.module')

@section('content')
<span id='busy-icon'></span>
<div class='col-md-3'>
<div class='panel panel-default '>
    <div class='panel-heading'>
        <h3>Upload new DataSet</h3>
        
    </div>
    <div class='panel-body'>
        {{ Former::open()
    ->files(true)
    ->id('form')
    ->enctype('multipart/form-data')
    ->method('POST')
        }}

        {{ Former::text('primaryKey')
            ->label('Primary Key (required)')
            ->class('form-control col-md-3')
        }}
        </br>

        </br>

        {{ Former::text('fieldDelimiter')
            ->label('Field Delimiter (Optional)')
            ->class('form-control col-md-3')
        }}
        </br>
        {{"Enter t for TAB, , for comma, ETC..."}}



        {{ Former::text('fieldEscape')
            ->label('Field Escape (Optional)')
            ->class('form-control col-md-3')
        }}


        {{ Former::text('table',null, null,array('required'=>'required')) 
            ->label('Table Name (Required)') 
            ->class('form-control col-md-3')
        }}
        </br>

        {{ Former::file('filename',null, null,array('required'=>'required')) 
            ->label('Load File')
            ->class('form-control btn btn-default col-md-3')

        }}
        </br>
        {{ Former::button('Upload File')
            ->class('form-control btn btn-default')
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
<script type="text/javascript">
    $(document).ready(function ($) {
        console.log('im ready');

    });
</script>
@stop
