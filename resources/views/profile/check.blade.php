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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
   <link href="css/bootstrap-theme.min.css" rel="stylesheet">

   <link href="css/style.css" rel="stylesheet">


    </head>

  <body>

      <!--Fixed Navigation bar started-->
<div class="navbar navbar-default navbar-inverse navbar-fixed-top">

    <div class="container">

      <a class="navbar-brand" href="#"><img src="Rajshahi-University-logo.jpg" width="35px" height="35px"/></a>
      <a class="navbar-brand" href="#">RU Guest House </a>

      <ul class="nav navbar-nav navbar-right">

      <li class="active"> <a href={{url('/room_booking')}}>Room Booking</a></li>
      <li> <a href={{url('/index')}}>LogOut</a></li>
   
    </ul>
    </div>

</div>

      <!--Fixed Navigation bar ended-->

      <div class="container">
        <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h1 class="title">Booking Information</h1>
                  
                  </div>
              </div> 
      
   <div class="jumbotron">
  
<div class="row">


                 <div class="col-sm-12">
                       <div style="height: 400px; overflow: auto;">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Arriving Date</th> 
                                <th>Leaving Date</th>
                                <th>Details</th>
                                <th>Extend</th>
                                <th>Delete</th> 
                            </tr>
                            </thead>
                        </table>


                        </div>
                    </div>
                 </div>
  
   </div>
            

       </div> 

<hr>

       <!--Start of Paragraph container-->

      

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>