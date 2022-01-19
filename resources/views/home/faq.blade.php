@extends('layouts.home')

@section('title','Sıkça Sorulan Sorular')

@section('headerjs')

@endsection

@section('content')

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{asset('assets')}}/images/car3.jpg')" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-10">
        <h1 class="mb-2">Sıkça Sorulan Sorular</h1>
        <p class="mb-5"><strong class="h2 text-success font-weight-bold"></strong></p>
      </div>
    </div>
  </div>
</div>

<div id="breadcrumb" style="margin-top: 20px;">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="{{route('home')}}">Home </a></li>
      <li style="margin-left: 5px;"> | SSS</li>
    </ul>
  </div>
</div>

<div class="section">
<div class="container">
    <div class="row" style="display:inline;">
        <div id="accordion">
            @foreach($datalist as $rs)
            <h3>{{$rs->question}}</h3>
            <div>
                <p>{!!$rs->answer!!}</p>
            </div>
            @endforeach
        </div>


    </div>
</div>
</div>




@endsection