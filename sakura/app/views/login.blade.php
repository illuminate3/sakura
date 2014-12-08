@extends('layouts.master')

@section('title')
hello chickens
@stop
@section('navbar')


    <div class="container">

      <!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Menu</a></li>
                  
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#">Default</a></li>
              <li><a href="#">Static top</a></li>
              <li><a href="#">Fixed top</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>

      

    </div> <!-- /container -->
@stop

@section('content')
<!-- Main component for a primary marketing message or call to action -->
     <div class='container'>
          <div class="jumbotron form-group">
              <label > Userrname {{Form::text('username')}}</label>
              <label > Password {{Form::password('password')}}</label>
              {{ Form::submit('Login') }}
      </div>
         
<div class='panel'>
    <div class='panel-body'>
welcome to my website
    </div>
</div>
     </div>
@stop