@extends('layouts.admin')
@section('title','Yorumlar')


@section('content')

<div class="page-heading">
                <h1 class="page-title">Yorumlar</h1>
            
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Veri Tablosu</div>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Kitap</th>
                            <th>Subject</th>
                            <th>Review</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th colspan="3">Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Kitap</th>
                            <th>Subject</th>
                            <th>Review</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th colspan="3">Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($datalist as $rs)
                        <tr>
                        
                            <td>{{ $rs->id }}</td>
                            
                            <td>
                                <a href="{{route('admin_user_show', ['id'=> $rs->user->id])}}" onclick="return !window.open(this.href,'', 'top=50 left=100 width=800 height=700')">
                                    {{ $rs->user->name }}
                                </td>
                            <td>
                                <a href="{{route('arac', ['id'=>$rs->arac->id])}}">
                                    {{ $rs->arac->title }}</a>
                            </td>
                            <td>{{ $rs->subject }}</td>
                            <td>{{ $rs->review }}</td>
                            <td>{{ $rs->rate }}</td>
                            <td>{{ $rs->status }}</td>
                            <td>{{ $rs->created_at }}</td>
                            <td>
                            <a href="{{route('admin_review_show', ['id'=> $rs->id])}}" onclick="return !window.open(this.href,'', 'top=50 left=100 width=800 height=700')">
                            <i class="fa fa-edit"></i></a>
                                <a href="{{route('admin_review_delete', ['id'=> $rs->id])}}" onclick="return confirm('Are you sure?')">
                                <i class="fa fa-trash"></i>
                                </a>
                            </td>
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