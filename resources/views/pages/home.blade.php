@extends('layouts.app')
@section('home')
<style>
  .merch {
    padding-top: 5%;
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
    color: #0d8df0;
  }
  @media (min-width: 1200px) {
    .clothing, .nutrition, .workouts {
      float: left;
      width: 500px;
      height: 200px;
      margin-left: 5%;
      margin-bottom: 5%;
    }
  }
</style>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/cover_new_1.jpg" alt="Image" class="img-responsive" id="cover_1">
        <div class="carousel-caption">
          <!---Tekstas karuselėje-->
        </div>
      </div>
    <div class="item">
        <img src="images/cover_new_1_blurred.jpg" alt="Image" class="img-responsive" id="cover_2">
        <div class="carousel-caption">
          <!---Tekstas karuselėje-->
        </div>
      </div>

      <div class="item">
        <img src="images/cover_new_2.jpg" alt="Image" class="img-responsive" id="cover_3">
        <div class="carousel-caption">
          <!---Tekstas karuselėje-->
        </div>
      </div>
    </div>

    <!-- <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a> -->
</div>
<div class="merch .container-fluid">
  <div "row">
    <a class="nutrition .col-lg-4" href="mityba"><div><center>Mityba<center></div></a>
    <a class="workouts .col-lg-4" href="sporto-programos"><div><center>Sporto programos<center></div></a>
    <a class="clothing .col-lg-4" href="apranga"><div><center>Apranga<center></div></a>
  </div>
</div>

<div class="container text-center instagram">
  <h3 id="insta_text">Instagram feed naujienos</h3>
  <div class="alignPost">
    <a id="instafeed"></a>
  </div>
</div>
<!-- @include('pages/instafeed')  -->
<script type="text/javascript" src="{{ URL::asset('js/instafeed.min.js') }}"></script>
<script type="text/javascript">
  var userFeed = new Instafeed({
      get: 'user',
      userId: '286388958',
      accessToken: '286388958.1677ed0.113bca76ca1044dfa23d70a8de95c16a',
      limit: '4',
      resolution: 'low_resolution'
  });
 userFeed.run();
</script>
@stop
