@extends('layout')

@section('title')
@parent
:: {{ $item->serviceTag }}
@stop

@section('content')
<div class="page-header">
    <h2>FCS::AIM :: {{ ($item->isModem ? 'Modem' : ($item->isKeyboard ? 'Keyboard' : ($item->isMouse ? 'Mouse' : ( $item->isBag ? 'Bag' : 'Laptop' )) ) ) }}</h2>
</div>
<h3>Service Tag: {{ $item->serviceTag }}</h3>
<h3>Setup Tech: {{ $item->setupTech }}</h3>
<h3>Local Administrator: {{ $item->adminName }}</h3>
<h3>LAdministrator Pass: {{ $item->adminPass }}</h3>
<h3>Maker: {{ $item->modelMaker }}</h3>
<h3>Make: {{ $item->modelMake }}</h3>
<h3>Line: {{ $item->modelLine }}</h3>
<h3>HDD Pass: {{ $item->hddPass }}</h3>
<h3>Bios Pass: {{ $item->biosPass }}</h3>
<h3>Added By: {{ $item->addedBy }}</h3>
<h3>New Asset Tag: {{ $item->newAssetTag }}</h3>
<h3>Signed Out To: {{ $item->signedOutTo }}</h3>
<h3>Purchase Date: {{ $item->purchaseDate }}</h3>
<h3>Assigned On: {{ $item->assignedDate }}</h3>
<h3>Date of Arrival(DoA): {{ $item->arrivedDDate }}</h3>
@stop
