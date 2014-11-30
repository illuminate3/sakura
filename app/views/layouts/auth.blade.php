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
        {{ HTML::style('css/layout.css') }}
        {{ HTML::style('css/bootstrap.min.css') }}
        {{-- HTML::style('css/magnific-popup.css') --}}
        @show

    </head>
    <body>
        <nav class="navbar navbar-default navbar-inverse" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class ="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
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
                    <!--li><a href="{{ URL::to('/') }}">Home</a></li-->
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        <div class="container">
            {{ Notification::showAll() }}
            @yield('content')
        </div>
        {{ HTML::script('js/jquery-2.1.1.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
    </body>
</html>