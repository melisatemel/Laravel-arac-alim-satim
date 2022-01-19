@extends('layouts.home')

@section('title', 'İlan Ekle')


<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

@section('content')

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{asset('assets')}}/images/car2.jpg')" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-10">
        <h1 class="mb-2">İlan Ekle</h1>
        <p class="mb-5"><strong class="h2 text-success font-weight-bold"></strong></p>
      </div>
    </div>
  </div>
</div>

<div id="breadcrumb" style="margin-top: 20px;">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="{{route('home')}}">Home </a></li>
      <li style="margin-left: 5px;"> | İlan Ekle</li>
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
        <form role="form" action="{{route('user_arac_store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-sm-6 form-group">
              <label>Kategori</label>
              <select class="form-control select2_demo_2" name="category_id">
                <option></option>
                <option value="0">Ana İlan</option>
                @foreach($datalist as $rs)
                <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-sm-6 form-group">
              <label>Title</label>
              <input class="form-control" type="text" name="title">
            </div>
            <div class="col-sm-6 form-group">
              <label>Keywords</label>
              <input class="form-control" type="text" name="keywords">
            </div>
            <div class="col-sm-6 form-group">
              <label>Description</label>
              <input class="form-control" type="text" name="description">
            </div>
            <div class="col-sm-6 form-group">
              <label>Price</label>
              <input class="form-control" type="number" value="0" name="price" step="any">
            </div>

            <div class="col-sm-6 form-group">
              <label>Yıl</label>
              <input class="form-control" type="number" name="year">
            </div>
            <div class="col-sm-6 form-group">
              <label>Marka</label>
              <input class="form-control" type="text" name="brand_id">
            </div>
            <div class="col-sm-6 form-group">
              <label>Seri</label>
              <input class="form-control" type="text" name="serial">
            </div>
            <div class="col-sm-6 form-group">
              <label>Model</label>
              <input class="form-control" type="text" name="model">
            </div>
            <div class="col-sm-6 form-group">
              <label>KM</label>
              <input class="form-control" type="number" value="0" name="km" step="any">
            </div>
            <div class="col-sm-6 form-group">
              <label>Motor Gücü</label>
              <input class="form-control" type="text" value="0" name="motor_power">
            </div>
            <div class="col-sm-6 form-group">
              <label>Motor Hacmi</label>
              <input class="form-control" type="text" value="0" name="engine_capacity">
            </div>
            <div class="col-sm-6 form-group">
              <label>Çekiş Tipi</label>
              <input class="form-control" type="text" name="traction_type">
            </div>
            <div class="col-sm-6 form-group">
              <label>Durum</label>
              <input class="form-control" type="text" name="case">
            </div>
            <div class="col-sm-6 form-group">
              <label>Kimden</label>
              <input class="form-control" type="text" name="from_who">
            </div>
            <div class="col-sm-6 form-group">
              <label>İletişim</label>
              <input class="form-control" type="text" name="contact">
            </div>

            <div class="col-sm-6 form-group">
              <label>Şehir</label>
              <input class="form-control" type="text" name="city">
            </div>
            <div class="col-sm-6 form-group">
              <label class="form-control-label">Vites Tipi</label>
              <select class="form-control select2_demo_2" name="gear_type">
                <option>Manuel</option>
                <option>Otomatik</option>
                <option>Yarı Otomatik</option>
                <option>CVT</option>
                <option>Vitessiz</option>
              </select>
            </div>
            <div class="col-sm-6 form-group">
              <label class="form-control-label">Yakıt Türü</label>
              <select class="form-control select2_demo_2" name="fuel_type">
                <option>Dizel</option>
                <option>Benzin</option>
                <option>LPG</option>
                <option>Elektrik</option>
              </select>
            </div>

            <div class="col-sm-6 form-group">
              <label>Resim</label>
              <input class="form-control" type="file" name="image">
            </div>

            <div class="col-sm-6 form-group">
              <label class="form-control-label">Status</label>
              <select class="form-control select2_demo_2" name="status">
                <option>Seçiniz</option>
                <option>False</option>
                <option>True</option>
              </select>
            </div>
            <div class="col-sm-6 form-group">
              <label>Detail</label>
              <textarea id="detail" name="detail"></textarea>
              <script>
                  CKEDITOR.replace( 'detail' );
              </script>
            </div>
          </div>
          <div class="form-group">
            <button class="btn btn-primary" type="submit">İlan ekle</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>


@endsection