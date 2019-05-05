@extends('layouts.app')
@section('mityba')
<style>
  .merch {
    padding-top: 4.7%;
  }
  .clothing {
    background-image: url('images/shirt_stockimage.jpg');
    transition: transform .2s;
  }
  .nutrition {
    background-image: url('images/nutrition.jpg');
    transition: transform .2s;
  }
  .workouts {
    background-image: url('images/workouts.jpg');
    transition: transform .2s;
  }
  .clothing, .nutrition, .workouts {
    font-family: ltg_menu;
    color: black;
    font-size: 30px;
    padding: 50px;
    background-size: cover;
    cursor: default;
    text-decoration: none;
  }
  .clothing:hover, .nutrition:hover, .workouts:hover {
    opacity: 0.7;
    color: #0d8df0;
  }
  footer {
    margin-top: 1px;
    box-shadow: inset 0 1px 10px #000000;
    background-color: #565656;
    padding: 25px;
  }
  @media (max-width: 497px){
    .merch {
      padding-top: 18%;
    }
  }
  @media (min-width: 498px) and (max-width: 768px){
    .merch {
      padding-top: calc(1vw + 82px);
    }
  }
  @media (min-width: 769px) and (max-width: 992px) {
    .merch {
      padding-top: calc(1vw + 80px);
    }
  }
  @media (min-width: 993px) and (max-width: 1200px) {
    .merch {
      padding-top: calc(1vw + 78px);
    }
  }
  @media (min-width: 1200px) {
    .clothing, .nutrition, .workouts {
      float: left;
      width: 33.33%;
      height: 200px;
    }
    .merch {
      padding-top: calc(1vw + 71px);
      padding-left: 0;
    }
    .firstColumnText{
      height: 62vh;
    }
    .secondColumnText {
      height: 64.2vh;
    }
  }
  .merchContainer {
    padding-left: 0;
    padding-right: 0;
  }
  .steak, .nutritionIMG2 {
    background-color: #a8a6a6;
  }
  .firstColumnText, .secondColumnText {
    font-family: Verdana;
    background-color: #a8a6a6;
  }
  .header {
    color: #1c5e88;
    font-family: ltg_menu;
  }
  .secondColumnText {
    float: left;
  }
  /* Cool button */
  button{
    margin-top: 5%;
    background:#4d5052;
    color:#fff;
    border:none;
    position:relative;
    height:60px;
    font-size:1.6em;
    padding:0 2em;
    cursor:pointer;
    transition:800ms ease all;
    outline:none;
  }
  button:hover{
    background:#fff;
    color:#4d5052;
  }
  button:before,button:after{
    content:'';
    position:absolute;
    top:0;
    right:0;
    height:2px;
    width:0;
    background: #4d5052;
    transition:400ms ease all;
  }
  button:after{
    right:inherit;
    top:inherit;
    left:0;
    bottom:0;
  }
  button:hover:before,button:hover:after{
    width:100%;
    transition:800ms ease all;
  }
  li {display: list-item ;}
</style>
<div class="merch .container-fluid">
  <div class="row">
    <a class="nutrition .col-lg-4" href="mityba"><div><center>Mityba<center></div></a>
    <a class="workouts .col-lg-4" href="sporto-programos"><div><center>Sporto programos<center></div></a>
    <a class="clothing .col-lg-4" href="apranga"><div><center>Apranga<center></div></a>
  </div>
</div>
<div class="container-fluid">
<div class="container-fluid merchContainer">
  <div clas="row contentBox1">
    <img class="col-lg-6 steak" src="images/steak2.jpg"></img>
    <div class="col-lg-6 firstColumnText">
      <br><center class="header"><h3><b>Invidualus mitybos planas, vyrams ir moterims!</b></h3></center><br>
      <span class="paragraph1"<h4>Savęs paklausk šių klausimų:
      <ul style="list-style-type:circle;">
        <li>Nori numesti svorio, bet nežinai nuo ko pradėti?</li>
        <li>Nori priaugti raumenines masės su minimaliu kiekiu riebalų?</li>
        <li>Nori atrodyti geriau veidrodyje, jaustis sveikesniu ir kupinas jėgų kiekvieną rytą?</li>
        <li>Išbandei begales įvairių dietų ir programų salėje, bet nesiseka pasiekti akivaizdžių rezultatų?</li>
      </ul></h4></span>
      Jei atsakei į bent vieną iš šių klausimų - TAIP! Tada šis invidualios mitybos planas kaip tik TAU!
    </div>
  </div>
</div>
  <div clas="row contentBox2">
    <div class="col-lg-6 secondColumnText">
      <br><center class="header"><h3><b>Invidualus mitybos planas, vyrams ir moterims!</b></h3></center><br>
      <span class="paragraph2"<h4>Savęs paklausk šių klausimų:
      <ul style="list-style-type:circle;">
        <li>Nori numesti svorio, bet nežinai nuo ko pradėti?</li>
        <li>Nori priaugti raumenines masės su minimaliu kiekiu riebalų?</li>
        <li>Nori atrodyti geriau veidrodyje, jaustis sveikesniu ir kupinas jėgų kiekvieną rytą?</li>
        <li>Išbandei begales įvairių dietų ir programų salėje, bet nesiseka pasiekti akivaizdžių rezultatų?</li>
      </ul></h4></span>
      Jei atsakei į bent vieną iš šių klausimų - TAIP! Tada šis invidualios mitybos planas kaip tik TAU!<br>
      @auth
      <center><button method="post" onClick="window.location='mityba-survey'">Užsakyti dabar!</button></center>
      @endauth
      @guest
      <br>
      <center><h2>Norėdami užsisakyti prisijunkite/užsiregistruokite.</h2></center>
      <center><button method="post" onClick="window.location='login2'">Prisijungti/užsiregistruoti!</button></center>
      @endguest
    </div>
    <img class="col-lg-6 nutritionIMG2" src="images/nutrition2Stock.jpg"></img>
  </div>
</div>
</div>
<script>
$(function() {
  var loc = window.location.href; // returns the full URL
  if(/mityba/.test(loc)) {
    $('.left-menu li').removeClass('active');
    $('#paslaugos').addClass('active');
  }
});
</script>
@stop
