@extends('layouts.home')

@section('title', 'User Profile')
@section('content')


<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{asset('assets')}}/images/car2.jpg')" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-10">
        <h1 class="mb-2" style="font-size: 47px;">Profil</h1>
        <p class="mb-5"><strong class="h2 text-success font-weight-bold"></strong></p>
      </div>
    </div>
  </div>
</div>

<div id="breadcrumb" style="margin-top: 20px;">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="{{route('home')}}">Home </a></li>
      <li style="margin-left: 5px;"> | Profil</li>
    </ul>
  </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
        <div class="col-lg-4">
                    @include('home.usermenu')
                </div>
            
                <div class="col-lg-8">
                    @include('profile.show')
                </div>
        </div>
    </div>
    </div>
</div>


@endsection