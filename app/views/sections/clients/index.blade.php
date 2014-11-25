@extends('layouts.module')

@section('title')
@parent

@stop

@section('content')




<div class="page-header">
	<h4>Client Roster</h4>
</div>
	<table id='allClient' class='display dtable'>
            <thead>
                <tr>
                    <th>MTK</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Street Address</th>
                    <th>Apt./Unit</th>
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
                
		<td>{{ $client->address->address->address1 }}</td>
		<td>{{ $client->address->address->address2 }}</td>
		<td>{{ $client->address->address->zipcode->City }}</td>
		<td>{{ $client->address->address->zipcode->State }}</td>
                <td>{{ $client->address->address->zipcode->ZIPCode }}</td>
               
		</tr>
                @endforeach
            </tbody>
           
    </table>
@stop

