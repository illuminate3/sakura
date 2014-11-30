@extends('layouts.module')

@section('title')
@parent

@stop

@section('content')

<div class='container-fluid'>
    <h4>Organizations Roster</h4>

    <div class='col-12 col-8'>

        <table id='allOrganizations' class='display dtable'> 
            <thead>
                <tr>
                    <th hidden='hidden'></th>
                    <th>Organization Name</th>
                    <th>Street Address</th>
                    <th>Unit</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip Code</th>
                    <th>Phone</th>
                    <th>Toll-Free</th>
                    <th>Fax</th>
                </tr>

            </thead>
            <tbody>
                @foreach($organizations as $organization)
                <tr>
                    <td hidden="hidden">{{$organization->org_id}}</td>

                    <td>{{$organization->title}}</td>
                    <td>{{$organization->address->address->address1}}</td>
                    <td>{{$organization->address->address->address2}}</td>
                    <td>{{$organization->address->address->zipcode->City}}</td>
                    <td>{{$organization->address->address->zipcode->State}}</td>
                    <td>{{$organization->address->address->zipcode->ZIPCode}}</td>
                    <td>{{$organization->phone->local}}</td>
                    <td>{{$organization->phone->tollfree}}</td>
                    <td>{{$organization->phone->fax}}</td>    

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>


</div>