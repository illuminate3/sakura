<!DOCTYPE html>
<html lang="en">
<head>
  <title>
    @section('title')
      FullCircle Supports
    @show
  </title>
{{ HTML::style('css/bootstrap.min.css') }}
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class ="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class ="sr-only">Toggle navigation</span>
      <span class ="icon-bar"></span>
      <span class ="icon-bar"></span>
      <span class ="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ URL::to('/') }}">FCS</a>
  </div>
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class ="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li class   ="active"><a href="{{-- URL::route('items.index') --}}">Home</a></li>
      <li>{{-- HTML::link(--URL::route('clients.index'), 'Clients') --}}</li>
      <li class   ="dropdown">
        <a href   ="#" class="dropdown-toggle" data-toggle="dropdown">Forms <b class="caret"></b></a>
        <ul class ="dropdown-menu">
          <li><a href ="#">Intake</a></li>
          <li><a href ="#">Full Comp</a></li>
          <li><a href ="#">MTK</a></li>
          <li class   ="divider"></li>
          {{--<li><a href ="#">Separated link</a></li>
          <li class   ="divider"></li>
          <li><a href ="#">One more separated link</a></li>--}}
            </ul>
      </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
      <div class ="form-group">
            <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type ="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      	<li><p class="navbar-text">Signed in as: {{-- $user->firstName . $user->lastName --}}</p></li>
      <li><a href ="#">Link</a></li>
      <li class   ="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
          <li><a href ="#">Profile</a></li>
          <li><a href ="#">Logout</a></li>
          {{--<li><a href ="#">Something</a></li>
          <li class   ="divider"></li>
          <li><a href ="#">Separated link</a></li>--}}
        </ul>
      </li>
      </ul>
  </div><!-- /.navbar-collapse -->
  <div class="container">
    @yield('content')
  </div>
</nav>
{{ HTML::script('js/jquery2.1.min.js') }}
{{ HTML::script('js/bootstrap.min.js') }}
</body>
</html>
