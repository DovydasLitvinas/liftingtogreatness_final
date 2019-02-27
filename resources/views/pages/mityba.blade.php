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
    transform: scale(1.1);
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
  }
  .merchContainer {
    padding-left: 0;
    padding-right: 0;
  }
  .steak div {
    word-wrap: break-word;
  }
  .contentBox {
    background-color: grey;
  }
</style>
<div class="merch .container-fluid">
  <div "row">
    <a class="nutrition .col-lg-4" href="mityba"><div><center>Mityba<center></div></a>
    <a class="workouts .col-lg-4" href="sporto-programos"><div><center>Sporto programos<center></div></a>
    <a class="clothing .col-lg-4" href="apranga"><div><center>Apranga<center></div></a>
  </div>
</div>
<div class="container-fluid merchContainer">
  <div class=".container-fluid mitybaContent">
    <div clas="row contentBox">
      <img class="col-lg-6" class="steak" src="images/steak.jpg"></img>
      <div class="col-lg-6 firstColumnText"> TEXXXXXXXXXXXXXXXXXXXXXXXXXXT </div>
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
