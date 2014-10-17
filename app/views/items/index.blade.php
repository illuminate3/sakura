@extends('layouts.base')

@section('title')
@parent
:: AIM
@stop

@section('content')
<div class="page-header">
	<h1>FullCircle Supports IMS</h1>
</div>
	<table class="table table-striped table-responsive">
		<thead>
			<tr>
				<th>#</th>
				<th>Service Tag</th>
				<th>Type</th>
				<th>Signed Out To</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($items as $item)
				<tr>
					<td>{{ $item->id }}</td>
					<td>{{ link_to_route('items.show', $item->serviceTag, $item->id) }}</td>
					<td>{{-- HTML::link( URL::route('items.show', $item->id), $item->serviceTag ) --}}</td>
					<td>{{ $item->type }}</td>
					<td>{{ $item->signedOutTo }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop