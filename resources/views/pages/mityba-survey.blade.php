@extends('layouts.app')
@section('mitybaCheckout')
<style>
.questionaire {
    margin-top: 8%;
}
@media (max-width: 497px){

}
@media (min-width: 498px) and (max-width: 768px){

}
@media (min-width: 769px) and (max-width: 992px) {

}
@media (min-width: 993px) and (max-width: 1200px) {

}
@media (min-width: 1200px) {
    .formLabel {
        padding-left: 40%;
    }
    .formInput {
        width: 150px;
    }
    .kaina {
        padding-top: 3%;
        padding-left: 80%;
    }
    .buyButton {
        padding-top: 1%;
        padding-right: 30%;
    }
}
/* Cool button */
button{
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
<div class="container-fluid questionaire">
@csrf
    <div class="row col-lg-12">
      <center><p> Norėdami užsisakyti mitybos planą pirmiausia užpildykite žemiau esančius laukus ir spauskite mygtuką "Pirkti". </p></center> <br>
    </div>
    <div class="row col-lg-12 form-group">
        <form method="POST" action="">
            <label for="typeOfWork" class="col-lg-6 formLabel">{{__('Darbo pobūdis:')}}</label>
            <select name="typeOfWork" class="col-lg-6 formInput form-control" required>
                <option value="sedetary">Sėdimas</option>
                <option value="standing">Stovimas</option>
                <option value="active">Aktyvus</option>
            </select>
        </form>
    </div>
    <div class="row col-lg-12 form-group">
        <form method="POST" action="">
            <label for="workoutDuration" class="col-lg-6 formLabel">{{__('Kiek laiko per dieną sportuoji?')}}</label>
            <input type="number" class="col-lg-6 formInput form-control" required>
        </form>
    </div>
    <div class="row col-lg-12 form-group">
        <form method="POST" action="">
            <label for="workoutsPerWeek" class="col-lg-6 formLabel">{{__('Kiek kartų per savaitę sportuoji?')}}</label>
            <input type="number" class="col-lg-6 formInput form-control" required>
        </form>
    </div>
    <div class="row col-lg-12 form-group">
        <form method="POST" action="">
            <label for="workoutsPerWeek" class="col-lg-6 formLabel">{{__('Tikslas (mitybos/sporto):')}}</label>
            <select name="typeOfWork" class="col-lg-6 formInput form-control" required>
                <option value="nutritionGoal">Mitybos</option>
                <option value="workoutGoal">Sporto</option>
            </select>
        </form>
    </div>
    <div class="row col-lg-12 form-group">
        <form method="POST" action="">
            <label for="workoutsPerWeek" class="col-lg-6 formLabel">{{__('Nori numesti ar priaugti svorio?')}}</label>
            <select name="typeOfWork" class="col-lg-6 formInput form-control" required>
                <option value="loseWeight">Numesti</option>
                <option value="gainWeight">Priaugti</option>
            </select>
        </form>
    </div>
    <div class="row col-lg-6">
        <h3 class="kaina">Kaina: 20 Eur.</h3>
    </div>
    <div class="row col-lg-6 buyButton">
        <center><button method="post" onClick="window.location='checkout'">Pirkti!</button></center>
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
