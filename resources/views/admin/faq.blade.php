@extends('layouts.admin')
@section('title','Sık Sorulan Sorular Listesi')

@section('content')

<div class="page-heading">
                <h1 class="page-title">Sorular</h1>
                <a class="btn btn-primary" href="{{route('admin_faq_add')}}">Soru ekleme</a>
                @include('home.message')
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Soru</th>
                                    <th>Cevap</th>                  
                                    <th>Status</th>      
                                    <th colspan="2">Düzenle / Sil</th>                              
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Soru</th>
                                    <th>Cevap</th>                  
                                    <th>Status</th> 
                                    <th colspan="2">Düzenle / Sil</th> 
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($datalist as $rs)
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>{{ $rs->question }}</td>
                                    <td>{!! $rs->answer !!}</td>
                                    <td>{!! $rs->status !!}</td>
                                    <td style="text-align: center;"><a href="{{route('admin_faq_edit',['id'=> $rs->id])}}"> <i class="fa fa-edit fa-lg"></i></a></td>
                                    <td><a href="{{route('admin_faq_delete',['id'=> $rs->id])}}" onclick="return confirm ('Silmek istediğinize emin misiniz?')" ><i class="fa fa-trash fa-lg"></i>
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