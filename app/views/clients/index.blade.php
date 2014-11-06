@extends('layouts.module')

@section('title')
@parent
 User Details
@stop

@section('content')




<div class="page-header">
	<h4>All Clients</h4>
</div>
	<table id='allClient' class='display dtable'>
            <thead>
                <tr>
                    <th>MTK</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>address 1</th>
                    <th>address 2</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip Code</th>
                </tr>
                
            </thead>
            <tbody>
                @foreach($clients as $client)
                <tr>
                <td>{{ $client->mtk }}</td>
		<td>{{ $client->name->first }}</td>
		<td>{{ $client->name->middle }}</td>
		<td>{{ $client->name->last }}</td>
                
		<td>{{ $client->address->address_1 }}</td>
		<td>{{ $client->address->address_2 }}</td>
		<td>{{ $client->address->zipcode->City }}</td>
		<td>{{ $client->address->zipcode->State }}</td>
                <td>{{ $client->address->zipcode->ZIPCode }}</td>
             
		</tr>
                @endforeach
            </tbody>
           
    </table>
@stop



@section('scripts')

@parent

<script>
$('.dtable').ready(function(){
    $('.dtable').dataTable();
    alert('running');
});
</script>
@stop