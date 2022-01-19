@extends('layouts.home')

@section('title', $data->title ."Araçlar Listesi")
@section('description'){{$data->description}}@endsection
@section('keywords', $data->keywords)
@section('content')

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{asset('assets')}}/images/car2.jpg')" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-10">
        <h1 class="mb-2">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->title)}} </h1>
        <p class="mb-5"><strong class="h2 text-success font-weight-bold"></strong></p>
      </div>
    </div>
  </div>
</div>

<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb" style="margin-top: 20px; margin-bottom:50px ">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class ="active" style="margin-left: 5px;" > <a href="{{route('home')}}">| Araçlar Listesi </a></li>
            <li class="active" style="margin-left: 5px ;">| {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->title)}} </li>

        </ul>

    </div>
</div>

<div class="site-section site-section-sm bg-light">
    <div class="container">

        <div class="row mb-5">

            @foreach($datalist as $rs)



            <div class="col-md-6 col-lg-4 mb-4">
                <div class="property-entry h-100">
                    <a href="{{route('arac',['id'=>$rs->id])}}" class="property-thumbnail">
                        <div class="offer-type-wrap">
                            <span class="offer-type bg-success">Rent</span>
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
                                <span class="property-specs" style="margin-left: 15px;" >KM</span>
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

@endsection