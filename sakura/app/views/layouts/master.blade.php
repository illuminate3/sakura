<html>
    <head>
    <title>
    @section('title')
    @show
    </title>
        
        <link href="css/bootstrap.min.css" rel="stylesheet"> 
       
       
      
       
        
    </head> 
    <body>
        
        @section('navbar')
        @show
        @yield('content')
        @section('scripts')
        <script src="js/jquery-2.1.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="sceditor/jquery.sceditor.js"></script>
        <script src="sceditor/jquery.sceditor.bbcode.js"></script>
        <script src="sceditor/plugins/bbcode.js"></script>
        
        @show
    </body>
</html>

