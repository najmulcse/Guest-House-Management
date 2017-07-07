<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Ru Guest house website</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Bootstrap theme -->
   <link href="{{asset('css/bootstrap-theme.min.css')}}" rel="stylesheet">

   <link href="{{asset('css/style.css')}}" rel="stylesheet">

   <link rel="stylesheet" href="{{asset('css/login_style.css')}}">
   <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
 

    </head>

  <body>

        @include('top_nav')

      <div class="container">

             @yield('body-content')
      
      </div> 

   

       <!--Start of Paragraph container-->

       <div class="container">
              @yield('text-content')
       </div>

            <div class="container">
                @yield('footer-content')
             </div>

           
     </body>
</html>