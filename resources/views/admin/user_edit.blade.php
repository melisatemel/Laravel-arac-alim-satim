@extends('layouts.admin')
@section('title','Kullanıcı Düzenleme')
@section('javascript')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection
@section('content')

<div class="page-heading">
    <h1 class="page-title">Kullanıcı Düzenleme</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
    </ol>
</div>
<div class="col-md-12">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">
            Kullanıcıyı Güncelle
            </div>
        </div>

        <div class="ibox-body">
            <form role="form" action="{{route('admin_user_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
       
                    <div class="col-sm-6 form-group">
                        <label>İsim</label>
                        <input class="form-control" type="text" value="{{$data->name}}" name="name">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>E-mail</label>
                        <input class="form-control" type="text" value="{{$data->email}}" name="email">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Telefon</label>
                        <input class="form-control" type="text" value="{{$data->phone}}" name="phone">
                    </div>
                    
                    <div class="col-sm-6 form-group">
                        <label>Resim</label>
                        <input class="form-control" type="file" value="{{$data->image}}" name="image">

                        @if($data->profile_photo_path)
                        <img src="{{Storage::url($data->profile_photo_path)}}" height="200" style="border-radius: 10px;" alt="">
                        @endif
                    </div>
                  

                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Kullanıcıyı güncelle</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection