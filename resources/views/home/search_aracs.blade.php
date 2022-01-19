@extends('layouts.home')

@section('title',$search."Araçların Listesi")

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
      <li style="margin-left: 5px;"> | {{$data->title}}</li>
    </ul>
  </div>
</div>
<!-- Arama filtreleme motoru-->

<div class="site-section site-section-sm pb-0">
    <div class="container">
        <div class="row">
            <form class="form-search col-md-12" style="margin-top: -100px;">
                <div class="row  align-items-end">
                    <div class="col-md-3">
                        <label for="list-types">Listing Types</label>
                        <div class="select-wrap">
                            <span class="icon icon-arrow_drop_down"></span>
                            <select name="list-types" id="list-types" class="form-control d-block rounded-0">
                                <option value="">Condo</option>
                                <option value="">Commercial Building</option>
                                <option value="">Land Property</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="offer-types">Offer Type</label>
                        <div class="select-wrap">
                            <span class="icon icon-arrow_drop_down"></span>
                            <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                                <option value="">For Sale</option>
                                <option value="">For Rent</option>
                                <option value="">For Lease</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="select-city">Select City</label>
                        <div class="select-wrap">
                            <span class="icon icon-arrow_drop_down"></span>
                            <select name="select-city" id="select-city" class="form-control d-block rounded-0">
                                <option value="">New York</option>
                                <option value="">Brooklyn</option>
                                <option value="">London</option>
                                <option value="">Japan</option>
                                <option value="">Philippines</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input type="submit" class="btn btn-success text-white btn-block rounded-0" value="Search">
                    </div>
                </div>
            </form>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="view-options bg-white py-3 px-3 d-md-flex align-items-center">
                    <div class="mr-auto">
                        <a href="index.html" class="icon-view view-module active"><span class="icon-view_module"></span></a>
                        <a href="view-list.html" class="icon-view view-list"><span class="icon-view_list"></span></a>

                    </div>
                    <div class="ml-auto d-flex align-items-center">
                        <div>
                            <a href="#" class="view-list px-3 border-right active">All</a>
                            <a href="#" class="view-list px-3 border-right">Rent</a>
                            <a href="#" class="view-list px-3">Sale</a>
                        </div>


                        <div class="select-wrap">
                            <span class="icon icon-arrow_drop_down"></span>
                            <select class="form-control form-control-sm d-block rounded-0">
                                <option value="">Sort by</option>
                                <option value="">Price Ascending</option>
                                <option value="">Price Descending</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- Araçların başladığı yer -->


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
<div class="row">
    <div class="col-md-12 text-center">
        <div class="site-pagination">
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <span>...</span>
            <a href="#">10</a>
        </div>
    </div>
</div>

@endsection