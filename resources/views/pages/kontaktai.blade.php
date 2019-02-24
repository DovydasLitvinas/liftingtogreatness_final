@extends('layouts.app')
@section('kontaktai')
<style>

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
  margin-bottom: 6%;
  color: white;
}
#emailHelp {
  color: white;
}
footer {
  margin-top: 1px;
  box-shadow: inset 0 1px 10px #000000;
  background-color: #565656;
  padding: 25px;
}
</style>
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
<script>
$(function() {
  var loc = window.location.href; // returns the full URL
  if(/kontaktai/.test(loc)) {
    $('.left-menu li').removeClass('active');
    $('#kontaktai').addClass('active');
  }
});
</script>
@stop
