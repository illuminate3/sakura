<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            @section('title')
            FullCircle Supports
            @show
        </title>

        {{-- CSS Containment goes here --}}
        @section('styles')

        {{-- HTML::style('css/layout.css') --}}
        {{ HTML::style('css/bootstrap.min.css') }}
        {{ HTML::style('js/jquery-ui/jquery-ui.min.css') }}
        {{ HTML::style('js/jquery-ui/jquery-ui.structure.min.css') }}
        {{ HTML::style('js/jquery-ui/jquery-ui.theme.min.css') }}
        {{ HTML::style('css/jquery.dataTables.css') }}
        {{ HTML::style('css/jquery.dataTables_themeroller.css') }}
        {{ HTML::style('js/extensions/TableTools/css/dataTables.tableTools.min.css')}}
        {{ HTML::style('css/magnific-popup.css') }}
        @show

    </head>
    <body>
        <nav class="navbar navbar-default navbar-inverse" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class ="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class ="sr-only">Toggle navigation</span>
                    <span class ="icon-bar"></span>
                    <span class ="icon-bar"></span>
                    <span class ="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ URL::to('') }}">FCS</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class ="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('/') }}">Home</a></li>
                    <li>{{-- link_to_route('clients.index', 'Clients') --}}</li>
                    <li>{{ link_to_route('schedule', 'Schedule') }}</li>
                    <li><a href ='{{URL::Action("ClientsController@dashboard")}}'>Clients</a></li>
                    <li><a href ='{{URL::Action("OrganizationController@dashboard")}}'>Organizations</a></li>
                    <li><a href ='{{URL::Action("DataimportController@postFile")}}'>Uploads Panel</a></li>
                    <li class   ="dropdown">
                        <a href   ="#" class="dropdown-toggle" data-toggle="dropdown">Forms <b class="caret"></b></a>
                        <ul class ="dropdown-menu">
                            <li><a href ="#">Intake</a></li>
                            <li><a href ="#">ISP</a></li>
                            <li><a href ="#">Full Comp</a></li>
                            <li><a href ="#">MTK</a></li>

                            {{--<li class   ="divider"></li>
          <li><a href ="#">Separated link</a></li>
          <li class   ="divider"></li>
          <li><a href ="#">One more separated link</a></li>--}}
                        </ul>
                    </li>
                    <li class   ="dropdown">
                        <a href   ="#" class="dropdown-toggle" data-toggle="dropdown">HR <b class="caret"></b></a>
                        <ul class ="dropdown-menu">
                            <li><a href ="#">HR Home</a></li>
                            <li>{{ link_to_route('staff.index', 'Staff') }}</li>
                            <li><a href ="#">Clients</a></li>
                            <li><a href ="#">Vehicles</a></li>
                            <li><a href ="#">Dunno Maybe?</a></li>
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
                    <li><p class="navbar-text">Signed in as: {{ \Sentry::getUser()->email }}{{-- link_to_route('staff.edit', \Staff::getUser()->username, \Staff::getUser()->id) --}}</p></li>
                    @if (false)//((\Sentry::getUser()->inGroup(\Sentry::findGroupByName('admin'))) or (\Sentry::getUser()->isSuperUser()))
                    <li class   ="dropdown">
                        <a href   ="#" class="dropdown-toggle" data-toggle="dropdown">Administration <b class="caret"></b></a>
                        <ul class ="dropdown-menu">
                            <li>{{ link_to_route('admin.staff.index', 'Users') }}</li>
                            <li><a href ="#">Logs</a></li>
                            <li><a href ="#">Control Panel</a></li>
                            <li><a href ='{{URL::Action("DataimportController@getIndex")}}'>Uploads Panel</a></li>

                            {{--<li class   ="divider"></li>
          <li><a href ="#">Separated link</a></li>
          <li class   ="divider"></li>
          <li><a href ="#">One more separated link</a></li>--}}
                        </ul>
                    </li>
                    @endif
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>{{ link_to_route('logout', 'Logout') }}</li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        <div class="container-fluid">
            {{ Notification::showAll() }}
            @yield('content')
        </div>


        @section('scripts')
        {{ HTML::script('js/jquery-2.1.1.min.js') }}
        {{ HTML::script('js/jquery-ui/jquery-ui.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/jquery.dataTables.js')}}  
        {{ HTML::script('js/extensions/TableTools/js/dataTables.tableTools.js')}}  
        @show
        <script>
        @section('panel-scripts')
        @show
        </script>
    </body>
</html>
