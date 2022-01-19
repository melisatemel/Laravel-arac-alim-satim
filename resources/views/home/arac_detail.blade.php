@extends('layouts.home')

@section('title', $data->title)
@section('description'){{$data->description}}@endsection
@section('keywords', $data->keywords)
@section('content')

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{Storage::url($data->image)}}');" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-10">
        <span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded">{{$data->city}}</span>
        <h1 class="mb-2">{{$data->title}}</h1>
        <p class="mb-5"><strong class="h2 text-success font-weight-bold">{{$data->price}} TL</strong></p>
      </div>
    </div>
  </div>
</div>

<!-- home | otomobil > audi  -->

<div id="breadcrumb" style="margin-top: 20px; ">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="{{route('home')}}">Home </a></li>
      <a href="{{route('categoryaracs', ['id'=>$data->category_id])}}">
        <li class="aktive" style="margin-left: 5px;"> | {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category,$data->category->title)}}</li>
      </a>
      <li class="active" style="margin-left: 5px;"> ><a href="{{route('arac',['id'=>$data->id])}}"> {{$data->title}} </a></li>
    </ul>
  </div>
</div>


<div class="site-section site-section-sm">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div>
          <div class="slide-one-item home-slider owl-carousel">
            <div><img src="{{Storage::url($data->image)}}" alt="Image" class="img-fluid"></div>
            @foreach($datalist as $rs)
            <div><img src="{{Storage::url($rs->image)}}" alt="Image" class="img-fluid"></div>

            @endforeach
          </div>

          <div class="row no-gutters mt-5">
            <div class="col-12">
              <h2 class="h4 text-black mb-3">Fotoğraf Galerisi</h2>
            </div>

            <!-- Mini galeri -->
            @foreach($datalist as $rs)

            <div class="col-sm-6 col-md-4 col-lg-3">
              <a href="{{Storage::url($rs->image)}}" class="image-popup gal-item"><img src="{{Storage::url($rs->image)}}" alt="Image" class="img-fluid"></a>
            </div>
            @endforeach
          </div>
          <div class="row mb-5">
            <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
            </div>
            <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
            </div>
            <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">

            </div>
          </div>

        </div>
        <div class="bg-white property-body border-bottom border-left border-right">
          <div class="row mb-5">
            <div class="col-md-6">
              <strong class="text-success h1 mb-3">{{$data->price}} ₺</strong>
            </div>
            <div class="col-md-6">
              <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">

                <li>
                  <span class="property-specs">İlan Tarihi</span>
                  <span class="property-specs-number">{{$data->listing_date}}</span>
                </li>
              </ul>
            </div>
          </div>

          <div class="row mb-5">
            <div class="col-md-6 col-lg-3 text-center border-bottom border-top py-3">
              <span class="d-inline-block text-black mb-0 caption-text">Marka</span>
              <strong class="d-block">{{$data->brand_id}}</strong>
            </div>
            <div class="col-md-6 col-lg-3 text-center border-bottom border-top py-3">
              <span class="d-inline-block text-black mb-0 caption-text">Seri</span>
              <strong class="d-block">{{$data->serial}}</strong>
            </div>
            <div class="col-md-6 col-lg-3 text-center border-bottom border-top py-3">
              <span class="d-inline-block text-black mb-0 caption-text">Model</span>
              <strong class="d-block">{{$data->model}}</strong>
            </div>
            <div class="col-md-6 col-lg-3 text-center border-bottom border-top py-3">
              <span class="d-inline-block text-black mb-0 caption-text">Şehir</span>
              <strong class="d-block">{{$data->city}}</strong>
            </div>
          </div>


          <h2 class="h4 text-black">İlan Detayı</h2>
          <p>
            {!! $data->detail !!}
          </p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="bg-white widget border rounded">

          <div style="float:right; margin-top: -1px">
            <span class="property-specs">İlan Tarihi</span>
            <span class="property-specs-number">{{$data->listing_date}}</span>
          </div>

          <h3 class="h4 text-black widget-title mb-3" style="text-decoration-line: underline; font-size:large">Özellikler</h3>
          <p><b>Şehir : </b>{{$data->city}}</p>
          <p><b>Marka : </b>{{$data->brand_id}}</p>
          <p><b>Seri : </b>{{$data->serial}}</p>
          <p><b>Model : </b>{{$data->model}}</p>
          <p><b>Yıl : </b>{{$data->year}}</p>
          <p><b>Yakıt : </b>{{$data->fuel_type}}</p>
          <p><b>Vites Tipi : </b>{{$data->gear_type}}</p>
          <p><b>KM : </b>{{$data->km}}</p>
          <p><b>Motor Gücü : </b>{{$data->motor_power}}</p>
          <p><b>Çekiş Gücü : </b>{{$data->traction_type}}</p>
          <p><b>Kimden : </b>{{$data->from_who}}</p>
          <p><b>Durumu : </b>{{$data->case}}</p>


          <div class="bg-white widget border rounded" style="margin-top: 50px">

            <h3 class="h4 text-black widget-title mb-3">Satıcıya Ulaş</h3>

            <div class="form-group">
              <span class="property-specs-number">Tel no: {{$data->contact}}</span>
            </div>

          </div>


        </div>

      </div>
      <div class="container" style="margin-top: 30px;">
      <div class="row">
                                    <div class="col-6">
                                        <ul>
                                            <div class="product_detailstab_desc">
                                                @foreach($reviews as $rs)
                                                @if($rs->status == 'True')
                                                <h6><a href="#">{{$rs->subject}}</a></h6>
                                                    <small><span>{{$rs->user->name}} tarafından </span>{{$rs->created_at}}'da yazıldı.</small>
                                                    <div class="review-txt">{{$rs->review}}</div>
                                                @endif
                                                @endforeach
                                            </div>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <div class="product_detailstab_desc">
                                            <h6>Reviews</h6>
                                            <p>Yorumun nedir ?</p>
                                            @livewireScripts
                                            <p>@livewire('review',['id'=>$data->id])</p>
                                        </div>
                                    </div>
                                </div>
      </div>

    </div>
  </div>
</div>




@endsection