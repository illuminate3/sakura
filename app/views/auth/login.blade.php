@extends('layouts.auth')

@section('title')
@parent
:: User Login
@stop

@section('styles')
@parent
{{ HTML::style('css/signin.css') }}
@stop

@section('content')
	{{ Form::open([
		'route'	=>	'login',
		'class'	=>	'form-signin',
		'role'	=>	'users login',
		'url'	=>	'login'
	])	}}
		{{-- Heading --}}
		<h2 class="form-signin-heading">FullCircle Supports</h2>

		<!-- Username -->
		<div class="form-group">
			{{ Form::label('email', 'E-Mail', [
				'class'	=>	'col-lg-2 control-label sr-only'
			]) }}
			{{ Form::text('email', Input::old('email'), [
				'placeholder' => 'jdoe@fcsinc.me',
				'class'		  => 'form-control',
				'tabindex'	  => 1,
				'autofocus'
			])	}}
		
			<!-- Password -->
			{{ Form::label('password', 'Password', [
				'class'	=>	'col-lg-2 control-label sr-only'
			]) }}
			{{ Form::password('password', [
				'placeholder' => '●●●●●●●●●●',
				'class'		  => 'form-control',
				'tabindex'	  => 2
			])	}}
		</div>
		<div class="description">
			<span class="help-block">Don't know how you ended up here? Have a chat with your IT staff.</span>
		</div>
		{{ Form::submit('Sign in', [
			'class'	=>	'btn btn-lg btn-primary btn-block'
		]) }}
	{{ Form::close() }}
@stop
