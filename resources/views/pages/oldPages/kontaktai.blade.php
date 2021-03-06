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
  max-width: 300px;
  float: right;
  margin-right: 40%;
  margin-top: 15%;
  margin-bottom: 10%;
  color: white;
}
#emailHelp {
  color: white;
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
  <div class="row">
    <div class="span4">
      <div class="col-sm-12 contact_menu">
        <form action="mailto:liftinggreatness@gmail.com" method="post" enctype="text/plain">
          <div class="form-group">
            <label for="contactName">Vardas</label>
            <input type="text" class="form-control" id="contactName" aria-describedby="name" placeholder="Vardas">
          </div>
          <div class="form-group">
            <label for="contactEmail">El. paštas</label>
            <input type="email" class="form-control" id="contactEmail" aria-describedby="email" placeholder="Įveskite savo el. pašto adresą">
          </div>
          <div class="form-group">
            <label for="contactPhone">Telefono numeris</label>
            <input type="number" class="form-control" id="phoneNumber2" aria-describedby="number" placeholder="Įveskite savo telefono numerį">
          </div>
          <div class="form-group">
            <label for="userLetter">Jūsų laiškas:</label>
            <textarea class="form-control" id="userLetter" rows="7"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Siųsti</button>
        </form>
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
      <a href="login2" class="glyphicon glyphicon-user right_menu_item"></a>
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
</script>
</html>
