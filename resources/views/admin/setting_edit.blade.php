@extends('layouts.admin')
@section('title','İlan Düzenle')
@section('javascript')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection
@section('content')

<div class="page-heading">
    <h1 class="page-title">Ayar Düzenleme</h1>
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
                Ayarları güncelle
            </div>
        </div>

        <div class="ibox-body">
            <form role="form" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input class="form-control" type="hidden" value="{{$data->id}}" name="id">

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
                        <label>Şirket</label>
                        <input class="form-control" type="text" value="{{$data->company}}" name="company">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Adres</label>
                        <input class="form-control" type="text" value="{{$data->address}}" name="address">
                    </div>

                    <div class="col-sm-6 form-group">
                        <label>Telefon</label>
                        <input class="form-control" type="text" value="{{$data->phone}}" name="phone">
                    </div>

                    <div class="col-sm-6 form-group">
                        <label>Fax</label>
                        <input class="form-control" type="text" value="{{$data->fax}}" name="fax">
                    </div>

                    <div class="col-sm-6 form-group">
                        <label>E-mail</label>
                        <input class="form-control" type="text" value="{{$data->email}}" name="email">
                    </div>

                    <div class="col-sm-6 form-group">
                        <label>Smtp Server</label>
                        <input class="form-control" type="text" value="{{$data->smtpserver}}" name="smtpserver">
                    </div>

                    <div class="col-sm-6 form-group">
                        <label>Smtp E-mail</label>
                        <input class="form-control" type="text" value="{{$data->smtpemail}}" name="smtpemail">
                    </div>

                    <div class="col-sm-6 form-group">
                        <label>Smtp Password</label>
                        <input class="form-control" type="password" value="{{$data->smtppassword}}" name="smtppassword">
                    </div>

                    <div class="col-sm-6 form-group">
                        <label>Smtp Port</label>
                        <input class="form-control" type="number" value="{{$data->smtpport}}" name="smtpport">
                    </div>

                    <div class="col-sm-6 form-group">
                        <label>Facebook</label>
                        <input class="form-control" type="text" value="{{$data->facebook}}" name="facebook">
                    </div>

                    <div class="col-sm-6 form-group">
                        <label>İnstagram</label>
                        <input class="form-control" type="text" value="{{$data->instagram}}" name="instagram">
                    </div>

                    <div class="col-sm-6 form-group">
                        <label>Twitter</label>
                        <input class="form-control" type="text" value="{{$data->twitter}}" name="twitter">
                    </div>

                    <div class="col-sm-6 form-group">
                        <label>Pinterest</label>
                        <input class="form-control" type="text" value="{{$data->pinterest}}" name="pinterest">
                    </div>



                    <div class="col-sm-6 form-group">
                        <label>Hakkımızda</label>
                        <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>        
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Referanslar</label>
                        <textarea id="references" name="references">{{$data->references}}</textarea>        
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>İletişim</label>
                        <textarea id="contact" name="contact">{{$data->contact}}</textarea>        
                    </div>
                    <script>
                            $('#references').summernote({
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
                            $('#aboutus').summernote({
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
                            $('#contact').summernote({
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
                    <button class="btn btn-primary" type="submit">Ayarları güncelle</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection