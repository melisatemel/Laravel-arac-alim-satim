@extends('layouts.admin')
@section('title','Üyeler')

@section('content')

<div class="page-heading">
                <h1 class="page-title">Üyeler</h1>
            

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Üyeler Tablosu</div>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Resim</th>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Telefon</th>
                                    <th>Adres</th>
                                    <th>Roles</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Resim</th>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Telefon</th>
                                    <th>Adres</th>
                                    <th>Roles</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($datalist as $rs)
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>
                                        @if($rs->profile_photo_path)
                                            <img src="{{ Storage::url($rs->profile_photo_path) }}" height="50" style="border-radius: 10px;" alt="">
                                        @endif
                                    </td>
                                    <td>{{ $rs->name }}</td>
                                    <td>{{ $rs->email }}</td>
                                    <td>{{ $rs->phone }}</td>
                                    <td>{{ $rs->address }}</td>
                                    <td> @foreach($rs->roles as $row)
                                        {{$row->name}},
                                @endforeach
                                   <a href="{{route('admin_user_roles',['id'=>$rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=800, height=600')">
                                   <strong>+</strong>
                                    </a>
                                </td>
                                   

                                    <td style="text-align: center;"><a href="{{route('admin_user_edit',['id'=> $rs->id])}}"> <i class="fa fa-edit fa-lg"></i></a></td>
                                    <td><a href="{{route('admin_user_delete',['id'=> $rs->id])}}" onclick="return confirm ('Silmek istediğinize emin misiniz?')" ><i class="fa fa-trash fa-lg"></i>
</a></td>
                                </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            
    
@endsection

@section('footer')
<script src="{{ asset('assets')}}/admin/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets')}}/admin/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets')}}/admin/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets')}}/admin/assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets')}}/admin/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="{{ asset('assets')}}/admin/assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="{{ asset('assets')}}/admin/assets/js/app.min.js" type="text/javascript"></script>
<script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
            });
        })
    </script>
@endsection