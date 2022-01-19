@extends('layouts.home')

@section('title', 'User Profile')
@section('content')


<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{asset('assets')}}/images/car2.jpg')" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-10">
        <h1 class="mb-2">İlanlarım</h1>
        <p class="mb-5"><strong class="h2 text-success font-weight-bold"></strong></p>
      </div>
    </div>
  </div>
</div>

<div id="breadcrumb" style="margin-top: 20px;">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="{{route('home')}}">Home </a></li>
      <li style="margin-left: 5px;"> | İlanlarım</li>
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
      <a class="btn btn-primary" href="{{route('user_arac_add')}}" style="margin-bottom: 20px;">Hemen İlan Ekle</a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Category</th>
              <th>Type</th>
              <th>Available</th>
              <th>Status </th>
              <th>Image</th>
              <th>Gallery</th>
              <th colspan="2">Actions</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Category</th>
              <th>Type</th>
              <th>Available</th>
              <th>Status </th>
              <th>Image</th>
              <th>Gallery</th>
              <th colspan="2">Actions</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach($datalist as $rs )
            <tr>
              <td>{{ $rs->id }}</td>
              <td>{{ $rs->title }}</td>
              <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
              <td>{{ $rs->price }}</td>
              <td>{{ $rs->km }}</td>
              <td>{{ $rs->year }}</td>
              <td>
                @if ($rs->image)
                <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                @endif
              </td>
              <td>
                <a href="{{route('user_image_add', ['arac_id'=> $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')"><i class="fa fa-image"></i>Galeri</a>
              </td>
              <td>
                <a href="{{route('user_arac_edit', ['id'=> $rs->id])}}"><i class="fa fa-edit"></i>Düzenle</a>
                <a href="{{route('user_arac_delete', ['id'=> $rs->id])}}" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i>Sil</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>


@endsection