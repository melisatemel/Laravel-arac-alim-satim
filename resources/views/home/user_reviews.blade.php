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
                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Araç</th>
                            <th>Subject</th>
                            <th>Review</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th colspan="3">Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Arac</th>
                            <th>Subject</th>
                            <th>Review</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th colspan="3">Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($datalist as $rs)
                        <tr>
                        
                            <td>{{ $rs->id }}</td>
                            
                            <td>
                                <a href="{{route('admin_user_show', ['id'=> $rs->user->id])}}" onclick="return !window.open(this.href,'', 'top=50 left=100 width=800 height=700')">
                                    {{ $rs->user->name }}
                                </td>
                            <td>
                                <a href="{{route('arac', ['id'=>$rs->arac->id])}}">
                                    {{ $rs->arac->title }}</a>
                            </td>
                            <td>{{ $rs->subject }}</td>
                            <td>{{ $rs->review }}</td>
                            <td>{{ $rs->status }}</td>
                            <td>{{ $rs->created_at }}</td>
                            <td>
                                <a href="{{route('user_review_delete', ['id'=> $rs->id])}}" onclick="return confirm('Are you sure?')">
                                Sil
                                </a>
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