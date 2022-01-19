@extends('layouts.admin')
@section('title','Düzenleme Kategorisi')

@section('content')

<div class="page-heading">
    <h1 class="page-title">Düzenleme</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
        <li class="breadcrumb-item">Düzenleme formu</li>
    </ol>
</div>
<div class="col-md-12">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">
                Düzenle
            </div>
        </div>

        <div class="ibox-body">
            <form role="form" action="{{route('admin_category_update', ['id'=>$data->id])}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Parent</label>
                        <select class="form-control select2_demo_2" name="parent_id">
                            <option value="0">Ana Kategori</option>
                            @foreach($datalist as $rs)
                            <option value="{{$rs->id}}" @if($rs->id == $data->parent_id) selected="selected" @endif> 
                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Title</label>
                        <input class="form-control" type="text" name="title" value="{{$data->title}}">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Keywords</label>
                        <input class="form-control" type="text" name="keywords" value="{{$data->keywords}}">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Description</label>
                        <input class="form-control" type="text" name="description" value="{{$data->description}}">
                    </div>


                    <div class="form-group">
                        <label class="form-control-label">Status</label>
                        <select class="form-control select2_demo_2" name="status" value="{{$data->status}}">
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