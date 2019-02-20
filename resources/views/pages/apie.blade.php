@extends('layouts.app')
@section('apie')
<style>
  .content {
    margin-top: 6%;
    padding-left: 10%;
    padding-right: 10%;
  }

  #img_me {
    padding-right: 10px;
  }
</style>
<div class="content paragraphs">
  <div class="row">
    <div class="span4">
      <img id="img_me" style="float:left" src="images/instaprogress.jpg" height="420" width="420"/>
      <div class="content-heading"><h3>Experience &nbsp </h3></div>
      <p style="clear:both float:right">Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
    </div>
  </div>
</div>
@stop
