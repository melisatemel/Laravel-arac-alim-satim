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
                <th rowspan="10">
                    <td>
                        @if( $data->profile_photo_path )
                            <img src="{{ Storage::url($data->profile_photo_path) }}" height="300" style="border-radius:50px " alt="">
                        @endif
                    </td>
                    </th>
                    <tr>
                        <th scope="col">ID</th><td>{{$data->id}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Name</th><td>{{$data->name}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Email</th><td>{{$data->email}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Phone</th><td>{{$data->phone}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Address</th><td>{{$data->adress}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Date</th><td>{{$data->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Roles</th>
                        <td>
                            <table>
                                @foreach($data->roles as $row)
                                    <tr>
                                        <td>{{$row->name}} <a href="{{ route('admin_user_role_delete', ['userid' => $data->id,'roleid' => $row->id]) }}" onclick="return confirm('Delete. Are you sure?')">Delete</a></td>
                                    </tr>
                                @endforeach
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <th>Add Role</th>
                        <td>
                            <form role="form" action="{{ route('admin_user_role_add',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <select class="form-control" id="formGroupDefaultSelect" name="roleid">
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}">{{$rs->name}}</option>
                                    @endforeach
                                </select>
                                <br>
                                <button type="submit" class="btn btn-success">Add Role</button>
                            </form>
                        </td>
                    </tr>
                <th>
            </table>
    </div>
</div>

@endsection