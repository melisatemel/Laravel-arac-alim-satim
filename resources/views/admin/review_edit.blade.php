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
            <table  class="table table-striped table-bordered table-hover"> 
            <tr>
            <th>ID</th>
            <td>{{ $data->id }}</td>
            
            </tr>
            <tr>
            <th>Name</th>
            <td>
                {{ $data->user->name }}
            </td>
            
            </tr>

            <tr>
            
            <th>Subject</th>
            <td>{{ $data->subject }}</td>
            </tr>
            <tr>
            <th>Review</th>
            <td>{!! $data->review !!}</td>
            
            </tr>
            <tr>
                <th>IP</th><td>{{ $data->IP }}</td>
            </tr>
            <tr>
                <th>Created date</th><td>{{ $data->created_at }}</td>
          
            </tr>
            <tr>
                <th>Updated date</th><td>{{ $data->updated_at }}</td>
            </tr>
            <tr>
            <th>Status</th>
            <td>
                
            </td>
            </tr>
            <tr>
                        <th>Status</th>
                        <td>
                            <form role="form" action="{{ route('admin_review_update',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <select name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                                <br>
                                <button type="submit" class="btn btn-success">Güncelle</button>
                            </form>
                        </td>
                    </tr>
                <th>
            </table>
    </div>
</div>

@endsection