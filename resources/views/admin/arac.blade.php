@extends('layouts.admin')
@section('title','İlan Listesi')

@section('content')

<div class="page-heading">
                <h1 class="page-title">İlanlar</h1>
                <a class="btn btn-primary" href="{{route('admin_arac_add')}}">İlan ekleme</a>

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">İlan Tablosu</div>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>İlan Tarihi</th>
                                    <th>Image</th>
                                    <th>Marka</th>
                                    <th>Seri</th>
                                    <th>Model</th>
                                    <th>Yıl</th>
                                    <th>Vites Tipi</th>
                                    <th>KM</th>
                                    <th>Durumu</th>
                                    <th>Status</th>
                                    <th>Fiyat</th>
                                    <th>Düzenle</th>
                                    <th>Sil</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>İlan Tarihi</th>
                                    <th>Image</th>
                                    <th>Marka</th>
                                    <th>Seri</th>
                                    <th>Model</th>
                                    <th>Yıl</th>
                                    <th>Vites Tipi</th>
                                    <th>KM</th>
                                    <th>Durumu</th>
                                    <th>Status</th>
                                    <th>Fiyat</th>
                                    <th>Düzenle</th>
                                    <th>Sil</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($datalist as $rs)
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>{{ $rs->title }}</td>
                                    <td>{{ $rs->ilan_tarihi }}</td>
                                    <td>{{ $rs->image }}</td>
                                    <td>{{ $rs->brand_id }}</td>
                                    <td>{{ $rs->seri }}</td>
                                    <td>{{ $rs->model }}</td>
                                    <td>{{ $rs->yil }}</td>
                                    <td>{{ $rs->vites_tipi }}</td>
                                    <td>{{ $rs->km }}</td>
                                    <td>{{ $rs->durum }}</td>
                                    <td>{{ $rs->status }}</td>
                                    <td>{{ $rs->price }}</td>
                                    <td><a href="{{route('admin_arac_edit',['id'=> $rs->id])}}">Düzenle</a></td>
                                    <td><a href="{{route('admin_arac_delete',['id'=> $rs->id])}}" onclick="return confirm ('Silmek istediğinize emin misiniz?')" > Sil</a></td>
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