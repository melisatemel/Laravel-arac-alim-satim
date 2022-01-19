@php
$setting=\App\Http\Controllers\HomeController::getsetting()
@endphp

@extends('layouts.home')

@section('title','İletişim - ' .$setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords', $setting->keywords)

@section('content')


<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{asset('assets')}}/images/car4.jpg')" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-10">
        <h1 class="mb-2">İletişim</h1>
        <p class="mb-5"><strong class="h2 text-success font-weight-bold"></strong></p>
      </div>
    </div>
  </div>
</div>

<div id="breadcrumb" style="margin-top: 20px;">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="{{route('home')}}">Home </a></li>
      <li style="margin-left: 5px;"> | İletişim</li>
    </ul>
  </div>
</div>

<div class="section" style="margin-bottom: 20px ;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <h3 class="h4 text-black widget-title mb-3">İletişim Bilgileri</h3>
            {!! $setting->contact !!}
            </div>
            <div class="col-md-6">
            <h3 class="h4 text-black widget-title mb-3">İletişim Formu</h3>
            <div class="col-md-12">
            @include('home.message')
          <form action="{{route('sendmessage')}}" class="p-5 bg-white border" method="post">
          
            @csrf
            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">İsim ve Soyisim</label>
                <input type="text" id="fullname" class="form-control" placeholder="İsim & Soyisim" name="name">
              </div>
            </div>

              <div class="row form-group">
                <div class="col-md-12">
                    <label class="font-weight-bold" for="phone">Telefon</label>
                    <input type="text" name="phone" class="form-control" placeholder="Telefon numarası">
                </div>
              </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="email">E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="E-Mail Adresi">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="email">Konu</label>
                <input type="text" name="subject" class="form-control" placeholder="Konuyu Girin">
              </div>
            </div>
            
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="message">Message</label> 
                <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Masajınızı Yazın"></textarea>
              </div>
            </div>

           
            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Mesaj Gönder" class="btn btn-primary  py-2 px-4 rounded-0" style="float: right; margin-top:20px; ">
              </div>
            </div>

            </div>
           
          </form>
          
        </div>
            </div>
        </div>
    </div>
</div>




@endsection