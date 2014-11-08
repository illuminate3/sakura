@extends('layouts.panel')


@section('panel')

{{ Former::horizontal_open()
            ->id('basic-info')
            ->method('POST')
}}
<div class='panel panel-default'>
{{ Former::group('Name:')}}
<br />
{{ Former::label('First','firstname')}}
{{ Former::text('firstname')}}
{{Former::label('Middle')}}
{{ Former::text('middlename')}}
{{ Former::label('Last')}}
{{ Former::text('lastname')}}

<br />
{{Former::group('Address:')}}
<br/>
{{Former::label('Street')}}
{{ Former::text('address1')}}
{{Former::label('Apt/Unit')}}
{{ Former::text('address2')}}
<br /><br/>

{{Former::label('City')}}
{{ Former::text('city')}}
{{Former::label('State')}}
{{ Former::text('state')}}
{{Former::label('Zipcode')}}
{{ Former::text('zipcode')}}
<br/>
{{Former::group('Phone Number')}}
<br/>
{{Former::label('Personal')}}
{{ Former::text('phone1')}}
{{Former::label('Secondary')}}
{{ Former::text('phone2')}}
<h3>
    
    Emergency Contact
    
</h3>

</div>


{{ Former::close() }}

@stop
