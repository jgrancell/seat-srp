@extends('web::layouts.grids.4-4-4')

@section('title', trans('srp::srp.about'))
@section('page_header', trans('srp::srp.srp'))
@section('page_description', trans('srp::srp.about'))

@section('left')

  <div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Functionality</h3>
    </div>
    <div class="card-body">

     <p>This plugin provides a very simple yet powerful functionality to coordinate an SRP (Ship Replacement Program).</p>

     <p> TODO: Fill this out with some more marketing schpeel </p>
    </div>
  </div>
@stop

@section('center')

  <div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Dumb Shit</h3>
    </div>
    <div class="card-body">
      <div class="box-body"></div>
    </div>
  </div>

@stop
@section('right')

  <div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Info</h3>
    </div>
    <div class="card-body"></div>
  </div>

@stop