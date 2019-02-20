<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lifting to Greatness</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="bootstrap-social-gh-pages/bootstrap-social.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script language="javascript"> 
      
    </script>
  <style>
  /* Remove the navbar's default margin-bottom and rounded borders */

    /*social media stuff
    @media (min-width: 1200px) {*/
    @font-face {
        font-family: instagram;
        src: url(Billabong.ttf);
    }
    @font-face {
        font-family: ltg_menu;
        src: url(hemi_head_bd_it.ttf);
    }
    #insta_text {
      font-family: 'instagram';
      font-size: 40px;
      color: #0B2161;
    }
    #social_box {
      position: fixed;
      right: 5%;
      bottom: 0;
      width: 150px;
      opacity: 0.9;
      background-color: #848484;
      border-top:10px solid #848484;
      border-bottom:10px solid #848484;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }
    /*-------------------------------------------------*
    /* Add a gray background color and some padding to the footer */
    footer {
      margin-top: 1px;
      box-shadow: inset 0 1px 10px #000000;
      background-color: #565656;
      padding: 25px;
    }
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 836px, max-height: 400px) {
    .carousel-caption {
      display: none;
    }
  }
  img {
    max-width: 100%;
    height: auto;
  }
  .menu {
    top: 0;
    background-color: none;
    width: 100%;
    position: fixed;
    font-weight: bold;
    font-family: 'ltg_menu';
    font-size: 20px;
  }
  #ltg_title {
    padding: 0;
    padding-right: 5px;
  }
  .left-menu {
    list-style-type: none;
    float: left;
    margin-top: 20px;
    overflow: hidden;
  }
  .right-menu {
    list-style-type: none;
    float: right;
    margin: 0;
    padding: 0;
    overflow: hidden;
  }

  .left_menu_item {
      float: left;
  }
  a:link, a:visited, a:active{
    color: white;
    text-decoration: none;
  }
  li, a {
      display: block;
      padding: 8px;
      color: white;
      background-color: none;
      opacity: 1.0;
  }
   .left_menu_item.active, .right_menu_item.active {
    opacity: 0.4;
    background-color: #292929;
    border-radius: 5px;
    text-decoration: none;
  }
  .right_menu_item{
    margin-top: 30px;
    float: right;
    overflow: hidden;
  }
  .left-menu .left_menu_item:hover, .right-menu .right_menu_item:hover, .dropbtn-mobile:hover, .dropbtn-mobile:focus  {
      background-color: #ddd;
      color: black;
      border-radius: 5px;
      text-decoration: none;
  }
  .left-menu .left_menu_item:visited, .left_menu_item:link, .left_menu_item:active, .right-menu .left_menu_item:visited, .left_menu_item:link, .left_menu_item:active {
    text-decoration: none;
  }

.dropbtn {
    background-color: none;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    float: right;
    position: relative;
    display: inline-block;

}

.dropdown-content {
    display: none;
    position: fixed;
    background-color: #3A3A3A;
    opacity: 0.8;
    min-width: 140px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    border-radius: 0px 0px 5px 5px;
    top: 10%;
    right: 0;
}

.glyphicon.glyphicon-user{
  margin-top: 35px;
}

.follow_me {
  margin-top: 1%;
  margin-bottom: 1%;
  color: #cdcdcd;
}

.atsiskaitymas {
  margin-top: 1%;
  margin-bottom: 1%;
  color: #cdcdcd;
}
.contact_info {
	margin-top: 5%;
  margin-left: 2%;
  color: #cdcdcd;
}

 .menu_bg {
    top: 0;
    background-color: #565656;
    opacity: 0.5;
    width: 100%;
    display: block;
    position: fixed;
    font-weight: bold;
    font-family: 'ltg_menu';
    font-size: 20px;
    min-height: 90px;
    max-height: 90px;
  }
/*******************************/
/*          MOBILE CSS         */
/*******************************/
.dropbtn-mobile {
    background-color: none;
    color: white;
    font-size: 16px;
    border: none;
    cursor: pointer;
    margin-top: 5%;
    height: 19px;
}

.dropdown-content-mobile {
    display: none;
    position: absolute;
    background-color: #3A3A3A;
    opacity: 0.8;
    min-width: 100px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    border-radius: 0px 0px 5px 5px;
    margin-top: 90px;
    float: right;
    right: 0;
}

.header span {
    color: white;
    text-decoration: none;
    display: block;
    right: 0;
    float: right;
}

.dropdown-mobile a:hover {
  background-color: #f1f1f1;
  color: black;
}

.insta_img {
	position: static;
}
.content {
  padding-left: 10%;
  padding-right: 10%;
  background-image: url('images/dumbbells.jpg');
  background-repeat: no-repeat;
}

#img_me {
  padding-right: 10px;
}
.contact_menu {
  max-width: 200px;
}
.menu_register {
  float: right;
}
.panel-login {
	border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
	color: #00415d;
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-login>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #029f5b;
	font-size: 18px;
}
.panel-login>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.btn-login {
	background-color: #59B2E0;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
	color: #fff;
	background-color: #53A3CD;
	border-color: #53A3CD;
}
.forgot-password {
	text-decoration: underline;
	color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
	text-decoration: underline;
	color: #666;
}

.btn-register {
	background-color: #1CB94E;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
	color: #fff;
	background-color: #1CA347;
	border-color: #1CA347;
}
.loginview {
  margin-top: 20%;
  margin-bottom: 20%;
}
/*******************************/
/*******************************/
/*******************************/
</style>
</head>
<body onclick="dropdownClose()">
<!---->
<!---------------------------------------------------------------------------------->
<!--                           Menu for desktops                                  -->
<!---------------------------------------------------------------------------------->

<!---------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------->
<!--                           Menu for mobiles and tablets                       -->
<!---------------------------------------------------------------------------------->
<div class="header menu col-xs-12 col-sm-12 hidden-lg hidden-xl hidden-md">
<li class="left_menu_item"><a id="ltg_title" href="/"><img src="images/ltg_logo.png" alt="Image" class="img-responsive left_menu_item" id="ltg_title"></a></li>
  <span onclick="mobileDropdown()" class="dropbtn-mobile glyphicon glyphicon-menu-hamburger"></span>
  <div id="myDropdown-mobile" class="dropdown-content-mobile">
  	<a href="/">Pagrindinis</a>
    <a href="paslaugos">Paslaugos</a>
    <a href="http://facebook.com/liftingtogreatness">Straipsniai</a>
    <a href="kontaktai">Kontaktai</a>
    <a href="apie">Apie</a>
  </div>
</div>

<!---------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------->


<div class="content paragraphs">
    <div class="container">
        <div class="row loginview">
        <div class="col-md-6 col-md-offset-3">
          <div class="panel panel-login">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-6">
                  <a href="#" class="active" id="login-form-link">Prisijungti</a>
                </div>
                <div class="col-xs-6">
                  <a href="#" id="register-form-link">Registracija</a>
                </div>
              </div>
              <hr>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <form method="POST" action="{{ route('login') }}" id="login-form">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('El. pašo adresas') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Slaptažodis') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Prisiminti mane') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Prisijungti') }}
                                </button>

                                <a class="btn btn-link" style="color: grey" href="{{ route('password.request') }}">
                                    {{ __('Užmiršai slaptažodį?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                    <form method="POST" action="{{ route('register') }}" style="display: none;" id="register-form">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Vardas') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('El. pašto adresas') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('Telefono numeris') }}</label>

                            <div class="col-md-6">
                                <input id="phoneNumber" type="number" class="form-control{{ $errors->has('phoneNumber') ? ' is-invalid' : '' }}" name="phoneNumber" value="{{ old('phoneNumber') }}" required>

                                @if ($errors->has('phoneNumber'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phoneNumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Slaptažodis') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Patvirtinti slaptažodį') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registruotis') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
 
<footer class="container-fluid">
<div class="row">
  <div class="col-sm-6 col-xs-12">
    <div class="row contact_info">
      Asmeninis certifikuotas treneris - Dovydas Litvinas, <br>
      <b> +37061221415, dovydas.litvinas@gmail.com </b><br><br>
    </div>
    <div class="col-sm-12 center-text contact_info">
      <b> Mane galite sekti: </b><br>
      <a href="http://facebook.com/liftingtogreatness" class="btn btn-social-icon btn-facebook">
        <span class="fa fa-facebook"></span>
      </a>
      <a href="http://instagram.com/le.dovis" class="btn btn-social-icon btn-instagram">
        <span class="fa fa-instagram"></span>
      </a>
      <a class="btn btn-social-icon btn-twitter">
        <span class="fa fa-twitter"></span>
      </a>
    </div>
  </div>
  <div class="col-sm-6 col-xs-12 atsiskaitymas">
    <br>
    <b> Atsiskaitymo būdai:</b>
    <div class="row">
      <img src="images/banks.png"></img>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 text-center">
    <br>
    <b>"Lifting to Greatness" @ Visos teisės saugomos, 2017<b><br>
      <b>Svetainę sukūrė - Dovydas Litvinas</b>
  </div>
</div>
</footer>
<div class="menu_bg"></div>
<div class="header menu hidden-xs hidden-sm">
  <div class="container-fluid header_grey">
    <ul class="left-menu">
      <li class="left_menu_item"><a id="ltg_title" href="/"><img src="images/ltg_logo.png" alt="Image" class="img-responsive left_menu_item" id="ltg_title"></a></li>
      <li class="active left_menu_item"><a href="/">Pagrindinis</a></li>
      <li class="left_menu_item"><a href="paslaugos">Paslaugos</a></li>
      <li class="left_menu_item"><a class="left_menu_item" href="http://facebook.com/liftingtogreatness">Straipsniai</a></li>
      <li class="left_menu_item"><a class="left_menu_item" href="kontaktai">Kontaktai</a></li>
      <li class="left_menu_item"><a class="left_menu_item" href="apie">Apie</a></li>
    </ul>
    <ul class="right-menu">
      <div class="dropdown">
        <a onclick="desktopDropdown()" class="dropbtn glyphicon glyphicon-menu-hamburger right_menu_item"></a>
          <div id="myDropdown" class="dropdown-content">
            <a href="/">Pagrindinis</a>
            <a href="apie">Apie</a>
            <a href="kontaktai">Kontaktai</a>
          </div>
      </div>
    </ul>
  </div>
</div>
<div class="container text-center" id="social_box">
    <div class="row" id="social_icons">
      <a href="http://facebook.com/liftingtogreatness" class="btn btn-social-icon btn-facebook">
        <span class="fa fa-facebook"></span>
      </a>
      <a href="http://instagram.com/le.dovis" class="btn btn-social-icon btn-instagram">
        <span class="fa fa-instagram"></span>
      </a>
      <a class="btn btn-social-icon btn-twitter">
        <span class="fa fa-twitter"></span>
      </a>
    </div>
</div>
</body>
<script language="javascript">

function desktopDropdown() {
    document.getElementById("myDropdown").classList.toggle("show");
}
function dropdownClose() {
	document.getElementById("myDropdown").classList.toggle("hide");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function mobileDropdown() {
    document.getElementById("myDropdown-mobile").classList.toggle("show");
}
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn-mobile')) {

    var dropdowns = document.getElementsByClassName("dropdown-content-mobile");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
//Register and login
$(function() {
    
    $('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
     $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
     $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
    });
    
});
/////////
</script>
</html>
