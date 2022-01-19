@extends('layouts.admin')
@section('title','Soruları Düzenle')
@section('javascript')
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"> </script>
@endsection
@section('content')

<div class="page-heading">
    <h1 class="page-title">Soru Düzenle</h1>
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
                Soruyu güncelle
            </div>
        </div>

        <div class="ibox-body">
            <form role="form" action="{{route('admin_faq_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                <div class="col-sm-6 form-group">
                        <label>Soru</label>
                        <input class="form-control" type="text" value="{{$data->question}}" name="question">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Cevap</label>
                        <textarea id="answer" name="answer">{{$data->answer}}</textarea>
                        <script>
                            CKEDITOR.replace('answer');
                        </script>
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
                    <button class="btn btn-primary" type="submit">Soruyu güncelle</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection