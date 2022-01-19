@extends('layouts.admin')
@section('title','İlan Düzenle')
@section('javascript')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection
@section('content')

<div class="page-heading">
    <h1 class="page-title">İlan Düzenleme</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
        <li class="breadcrumb-item">İlan güncelleme formu</li>
    </ol>
</div>
<div class="col-md-12">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">
                İlan güncelle
            </div>
        </div>

        <div class="ibox-body">
            <form role="form" action="{{route('admin_arac_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Kategori</label>
                        <select class="form-control select2_demo_2" name="category_id">
                            <option></option>
                            <option value="0" disabled>Seçiniz</option>
                            @foreach($datalist as $rs)
                             <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif >
                                {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                             </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Title</label>
                        <input class="form-control" type="text" value="{{$data->title}}" name="title">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Keywords</label>
                        <input class="form-control" type="text" value="{{$data->keywords}}" name="keywords">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Description</label>
                        <input class="form-control" type="text" value="{{$data->description}}" name="description">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Price</label>
                        <input class="form-control" type="number" value="{{$data->price}}" name="price" step="any">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Detail</label>
                        <textarea id="summernote" name="detail">{{$data->detail}}</textarea>
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
                    <div class="col-sm-6 form-group">
                        <label>Yıl</label>
                        <input class="form-control" type="number" value="{{$data->year}}" name="year">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Marka</label>
                        <input class="form-control" type="text" value="{{$data->brand_id}}" name="brand_id">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Seri</label>
                        <input class="form-control" type="text" value="{{$data->serial}}" name="serial">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Model</label>
                        <input class="form-control" type="text" value="{{$data->model}}" name="model">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Şehir</label>
                        <input class="form-control" type="text" value="{{$data->city}}" name="city">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>KM</label>
                        <input class="form-control" type="number" value="{{$data->km}}" name="km" step="any">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Motor Gücü</label>
                        <input class="form-control" type="text" value="{{$data->motor_power}}" name="motor_power">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Motor Hacmi</label>
                        <input class="form-control" type="text" value="{{$data->engine_capacity}}" name="engine_capacity">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Çekiş Tipi</label>
                        <input class="form-control" type="text" value="{{$data->traction_type}}" name="traction_type">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Durum</label>
                        <input class="form-control" type="text" value="{{$data->case}}" name="case">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Kimden</label>
                        <input class="form-control" type="text" value="{{$data->from_who}}" name="from_who">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>İletişim</label>
                        <input class="form-control" type="text" value="{{$data->contact}}" name="contact">
                    </div>

                    <div class="col-sm-6 form-group">
                        <label class="form-control-label">Vites Tipi</label>
                        <select class="form-control select2_demo_2" name="gear_type">
                            <option selected="selected">{{$data->gear_type}} </option>
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
                            <option selected="selected">{{$data->fuel_type}} </option>
                            <option>Dizel</option>
                            <option>Benzin</option>
                            <option>LPG</option>
                            <option>Elektrik</option>
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Resim</label>
                        <input class="form-control" type="file" value="{{$data->image}}" name="image">

                        @if($data->image)
                        <img src="{{Storage::url($data->image)}}" height="100" alt="">
                        @endif
                    </div>
                    <div class="col-sm-6 form-group">
                        <label class="form-control-label">Status</label>
                        <select class="form-control select2_demo_2" name="status">
                            <option selected="selected">{{$data->status}} </option>
                            <option>False</option>
                            <option>True</option>
                        </select>
                    </div>

                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">İlanı güncelle</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection