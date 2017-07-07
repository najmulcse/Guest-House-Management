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

   <link href="css/stylee.css" rel="stylesheet">
   <link rel="stylesheet" href="login_style.css"/>

    </head>

  <body>

      <!--Fixed Navigation bar started-->
<div class="navbar navbar-default navbar-inverse navbar-fixed-top">

    <div class="container">

      <a class="navbar-brand" href="#"><img src="Rajshahi-University-logo.jpg" width="35px" height="35px"/></a>
      <a class="navbar-brand" href="#">RU Guest House </a>

      <ul class="nav navbar-nav navbar-right">

    <li > <a href="index.html">Home </a> </li>
    <li class="active"> <a href="Login.html">Sign in</a> </li>
    <li> <a href="#">Gallary</a></li>
    <li> <a href="#">Direction</a></li>
    <li> <a href="#">Contract Us</a></li>

    </ul>
    </div>

</div>

      <!--Fixed Navigation bar ended-->

	<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
         <!--   <img id="profile-img" class="profile-img-card" src="images.jpg" />-->
			<img src="login.png" class="img-responsive img-circle"/>
            <p id="profile-name" class="profile-name-card"></p>
              <form class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
               <!-- <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>-->


                <a href={{url('/check')}} class="btn btn-lg btn-primary btn-block">Sign in</a>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->


       <!--Start of Paragraph container-->

      

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"> </script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="login_script.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>