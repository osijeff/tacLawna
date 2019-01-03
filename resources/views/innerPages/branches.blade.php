@extends('layouts.navbar')
@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-uppercase">Here are our branches</h1>
    <p class="lead">We will be glad to meet you</p>
  </div>
</div>
<div class="container shadow-sm p-3 mb-5 bg-white rounded">
    <div class="row">
        <div class="col-md-4">
            basic information
        </div>
        <div class="col-md-8">
          details information
        </div>
    </div>
</div>
@include('partials.foot')
@endsection