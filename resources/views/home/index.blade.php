@php
$setting = \App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')

@section('title', $setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords', $setting->keywords)

@section('content')
@include('home._slider')
<div class="site-section site-section-sm pb-0">
  <div class="container">
    <div class="row">
      <form class="form-search col-md-12" style="margin-top: -100px; height:120px">
        <div class="row  align-items-end">
          <div class="col-md-12">
            <div class="input-group" style="display: contents;">
              <div class="form-outline">
              
              <form action="{{route('getarac')}}" method="post">
                <div class="row">
                        <div class="col-lg-9" style="width: 100%;">
                        @csrf
                        @livewire('search')
                        </div>
                        <div class="col-lg-3">
                        <button type="submit" class="site-btn">Ara</button>
                        </div>
                    </form>
                    @section('footerjs')
                        @livewireScripts
                    @endsection
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--Günün Araçları Listesi -->

        <div class="site-section bg-light">
          <div class="container">
            <div class="row justify-content-center mb-5">
              <div class="col-md-7 text-center">
                <div class="site-section-title">
                  <h2>Günün Araçları</h2>
                </div>
              </div>
            </div>

            <div class="row mb-5">

              @foreach($daily as $rs)
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="property-entry h-100">
                  <a href="{{route('arac',['id'=>$rs->id])}}" class="property-thumbnail">
                    <div class="offer-type-wrap">
                      <span class="offer-type bg-danger">Satılık</span>
                    </div>
                    <img src="{{Storage::url($rs->image)}}" alt="Image" class="img-fluid">
                  </a>
                  <div class="p-4 property-body">

                    <h2 class="property-title"><a href="{{route('arac',['id'=>$rs->id])}}">{{$rs->title}}</a></h2>
                    <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>{{$rs->city}}</span>
                    <strong class="property-price text-primary mb-3 d-block text-success">{{$rs->price}} TL</strong>
                    <ul class="property-specs-wrap mb-3 mb-lg-0">
                      <li>
                        <span class="property-specs">Yıl</span>
                        <span class="property-specs-number">{{$rs->year}}</span>

                      </li>
                      <li>
                        <span class="property-specs" style="margin-left: 15px;">KM</span>
                        <span class="property-specs-number" style="margin-left: 15px;">{{$rs->km}}</span>

                      </li>
                      <li>
                        <span class="property-specs" style="margin-left: 20px;">İlan Tarihi</span>
                        <span class="property-specs-number" style="margin-left: 20px;">{{$rs->listing_date}}</span>

                      </li>
                    </ul>

                  </div>
                </div>
              </div>
              @endforeach
            </div>

          </div>
        </div>




        <!-- Son Eklenen Araçlar Listesi -->

        <div class="site-section bg-light">
          <div class="container">
            <div class="row justify-content-center mb-5">
              <div class="col-md-7 text-center">
                <div class="site-section-title">
                  <h2>Son Eklenen Araçlar</h2>
                </div>
              </div>
            </div>
            <div class="row mb-5">
              @foreach($last as $rs)
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="property-entry h-100">
                  <a href="{{route('arac',['id'=>$rs->id])}}" class="property-thumbnail">
                    <div class="offer-type-wrap">
                      <span class="offer-type bg-danger">Satılık</span>
                    </div>
                    <img src="{{Storage::url($rs->image)}}" alt="Image" class="img-fluid">
                  </a>
                  <div class="p-4 property-body">

                    <h2 class="property-title"><a href="{{route('arac',['id'=>$rs->id])}}">{{$rs->title}}</a></h2>
                    <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> {{$rs->city}}</span>
                    <strong class="property-price text-primary mb-3 d-block text-success">{{$rs->price}} TL</strong>
                    <ul class="property-specs-wrap mb-3 mb-lg-0">
                      <li>
                        <span class="property-specs">Yıl</span>
                        <span class="property-specs-number">{{$rs->year}}</span>

                      </li>
                      <li>
                        <span class="property-specs" style="margin-left: 15px;">KM</span>
                        <span class="property-specs-number" style="margin-left: 15px;">{{$rs->km}}</span>

                      </li>
                      <li>
                        <span class="property-specs" style="margin-left: 20px;">İlan Tarihi</span>
                        <span class="property-specs-number" style="margin-left: 20px;">{{$rs->listing_date}}</span>

                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <!-- Vitrindeki Araçlar Listesi -->
        <div class="site-section site-section-sm bg-light">
          <div class="container">
            <div class="row justify-content-center mb-5">
              <div class="col-md-7 text-center">
                <div class="site-section-title">
                  <h2>Vitrin Araçları</h2>
                </div>
              </div>
            </div>
            <div class="row mb-5">
              @foreach($showcase as $rs)
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="property-entry h-100">
                  <a href="{{route('arac',['id'=>$rs->id])}}" class="property-thumbnail">
                    <div class="offer-type-wrap">
                      <span class="offer-type bg-danger">Satılık</span>
                    </div>
                    <img src="{{Storage::url($rs->image)}}" alt="Image" class="img-fluid">
                  </a>
                  <div class="p-4 property-body">

                    <h2 class="property-title"><a href="{{route('arac',['id'=>$rs->id])}}">{{$rs->title}}</a></h2>
                    <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> {{$rs->city}}</span>
                    <strong class="property-price text-primary mb-3 d-block text-success">{{$rs->price}} TL</strong>
                    <ul class="property-specs-wrap mb-3 mb-lg-0">
                      <li>
                        <span class="property-specs">Yıl</span>
                        <span class="property-specs-number">{{$rs->year}}</span>

                      </li>
                      <li>
                        <span class="property-specs" style="margin-left: 15px;">KM</span>
                        <span class="property-specs-number" style="margin-left: 15px;">{{$rs->km}}</span>

                      </li>
                      <li>
                        <span class="property-specs" style="margin-left: 20px;">İlan Tarihi</span>
                        <span class="property-specs-number" style="margin-left: 20px;">{{$rs->listing_date}}</span>

                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
    </div>
  </div>

  @endsection