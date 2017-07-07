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

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <!-- <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
   <!-- <link href="theme.css" rel="stylesheet">-->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
   <!-- <script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


    <![endif]-->

    </head>

  <body>

      <!--Fixed Navigation bar started-->
<div class="navbar navbar-default navbar-inverse navbar-fixed-top">

    <div class="container">

      <a class="navbar-brand" href="#"><img src="Rajshahi-University-logo.jpg" width="35px" height="35px"/></a>
      <a class="navbar-brand" href="#">RU Guest House </a>

      <ul class="nav navbar-nav navbar-right">

    <li > <a href={{('/check')}}>Main Page</a></li>
    <li> <a href={{('/index')}}>LogOut</a> </li>


    </ul>
    </div>

</div>

      <!--Fixed Navigation bar ended-->

      <div class="container">
      
   <div class="jumbotron">
  
<form class="form-inline">
  <div class="form-group">
    <label >Arriving Date</label>
    <input type="date" class="form-control" id="exampleInputEmail3" placeholder="Arriving Date">
  </div>
  <div class="form-group">
    <label class="">Leaving Date</label>
    <input type="date" class="form-control" id="exampleInputPassword3" placeholder="Leaving Date">
  </div>

  <div class="form-group">
<div class="dropdown">
 <!--  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> -->
   
 <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">-->
    <select name="Room" class="btn btn-md">
    <option value="" selected="">Select room</option>
      <option value="Small" >SMALL</option>
      <option value="Medium" >MEDIUM</option>
      <option value="Large">LARGE</option>
      <option value="Extra Large">Extra Large</option>
    </select>

  <!--/ul-->
</div>
</div>
    <a href={{('details')}} class="btn btn-lg btn-primary"/>Check Validity</a>
 <!--  <a href="main_frame.html"/>  <button type="submit" class="btn btn-primary">check Validity</button></a>-->
</form>
  
   </div>
            

       </div> 


       <!--Start of Paragraph container-->

      

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>