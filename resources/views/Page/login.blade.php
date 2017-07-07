@extends('layout')

@section('body-content')
   <div class="card card-container">
            
      <img src="img/login.png" class="img-responsive img-circle"/>
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
@endsection

