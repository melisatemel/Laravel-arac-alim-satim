@extends('layouts.admin')
@section('title','Kategori Ekle')

@section('content')

<div class="page-heading">
    <h1 class="page-title">Kategori Ekleme</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
        <li class="breadcrumb-item">Kategori ekleme formu</li>
    </ol>
</div>
<div class="col-md-12">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">
                Kategori ekle
            </div>
        </div>

        <div class="ibox-body">
            <form role="form" action="{{route('admin_category_create')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Katagori</label>
                        <select class="form-control select2_demo_2" name="parent_id">
                            <option value="0">Seçiniz</option>
                            @foreach($datalist as $rs)
                                <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Başlık</label>
                        <input class="form-control" type="text" name="title">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Keywords</label>
                        <input class="form-control" type="text" name="keywords">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Tanım</label>
                        <input class="form-control" type="text" name="description">
                    </div>

                    <div class="col-sm-6 form-group">
                        <label class="form-control-label">Status</label>
                        <select class="form-control select2_demo_2" name="status">
                            <option disabled>Seçiniz</option>
                            <option>False</option>
                            <option>True</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Kategori ekle</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection