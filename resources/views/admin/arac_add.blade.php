@extends('layouts.admin')
@section('title','İlan Ekle')
@section('javascript')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection
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
<div class="col-md-12">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">
                İlan ekle
            </div>
        </div>

        <div class="ibox-body">
            <form role="form" action="{{route('admin_arac_store')}}" method="post" enctype="multipart/form-data">
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
                        <textarea id="summernote" name="detail"></textarea>
                        <script>
                            $('#summernote').summernote({
                                placeholder: 'Hello stand alone ui',
                                tabsize: 2,
                                height: 120,
                                toolbar: [
                                    ['style', ['style']],
                                    ['font', ['bold', 'underline', 'clear']],
                                    ['color', ['color']],
                                    ['para', ['ul', 'ol', 'paragraph']],
                                    ['table', ['table']],
                                    ['insert', ['link', 'picture', 'video']],
                                    ['view', ['fullscreen', 'codeview', 'help']]
                                ]
                            });
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

@endsection