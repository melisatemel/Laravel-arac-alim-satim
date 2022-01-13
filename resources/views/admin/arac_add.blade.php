@extends('layouts.admin')
@section('title','İlan Ekle')

@section('content')

    <div class="page-heading">
        <h1 class="page-title">İlan Ekleme</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html"><i class="la la-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">İlan ekleme formu</li>
        </ol>
    </div>
    <div class="col-md-6">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">
                    İlan ekle
                </div>
            </div>

            <div class="ibox-body">
                <form role="form" action="{{route('admin_arac_create')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Parent</label>
                            <select class="form-control select2_demo_2" name="category_id">
                                        <option></option>
                                            <option value="0">Ana İlan</option>
                                            @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}">{{$rs->title}}</option>
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

                        <div class="form-group">
                                    <label class="form-control-label">Status</label>
                                    <select class="form-control select2_demo_2" name="status">
                                        <option>Seçiniz</option>
                                            <option>False</option>
                                            <option>True</option>
                                    </select>
                                </div>                        
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default" type="submit">Kategori ekle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection