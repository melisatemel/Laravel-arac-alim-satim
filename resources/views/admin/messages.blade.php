@extends('layouts.admin')
@section('title','İletişim Mesajları Listesi')

@section('content')

<div class="page-heading">
    <h1 class="page-title">Mesajlar</h1>
    @include('home.message')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
    </ol>
</div>
<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Mesajlar Tablosu</div>
        </div>
        <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>İsim</th>
                        <th>E-Mail</th>
                        <th>Telefon</th>
                        <th>Konu</th>
                        <th>Mesaj</th>
                        <th>Admin Notu</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>İsim</th>
                        <th>E-Mail</th>
                        <th>Telefon</th>
                        <th>Konu</th>
                        <th>Mesaj</th>
                        <th>Admin Notu</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($datalist as $rs)
                    <tr>
                        <td>{{ $rs->id }}</td>
                        <td>{{ $rs->name }}</td>
                        <td>{{ $rs->email }}</td>
                        <td>{{ $rs->phone }}</td>
                        <td>{{ $rs->subject }}</td>
                        <td>{{ $rs->message }}</td>
                        <td>{{ $rs->note }}</td>
                        <td>{{ $rs->status }}</td>

                        <td>
                            @if($rs->image)
                            <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                            @endif
                        </td>
                        <td><a href="{{route('admin_message_edit',['id'=> $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600')"> Mesajı Görüntüle</a></td>


                        <td><a href="{{route('admin_message_delete',['id'=> $rs->id])}}" onclick="return confirm ('Silmek istediğinize emin misiniz?')"><i class="fa fa-trash fa-lg"></i>
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