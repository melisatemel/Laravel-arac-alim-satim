@php
$setting=\App\Http\Controllers\HomeController::getsetting()
@endphp

@extends('layouts.home')

@section('title','Referanslar - ' .$setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords', $setting->keywords)

@section('content')

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{asset('assets')}}/images/car2.jpg')" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-10">
        <h1 class="mb-2">Referanslar</h1>
        <p class="mb-5"><strong class="h2 text-success font-weight-bold"></strong></p>
      </div>
    </div>
  </div>
</div>

<div id="breadcrumb" style="margin-top: 20px;">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="{{route('home')}}">Home </a></li>
      <li style="margin-left: 5px;"> | Referanslar</li>
    </ul>
  </div>
</div>


<div class="section">
    <div class="container">
        <div class="row">
            {!! $setting->references !!}
        </div>
    </div>
</div>




@endsection