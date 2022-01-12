@extends('layouts.admin')
@section('title','Kategori Listesi')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Kategoriler</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Kategori</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <h3 class="card-title">Kategori Listesi</h3>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-striped table-bordered table-hover dataTable" id="example-table" cellspacing="0" width="100%" role="grid" aria-describedby="example-table_info" style="width: 100%;">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc"rowspan="1" colspan="1" aria-sort="ascending">Id</th>
                            <th class="sorting" rowspan="1" colspan="1" >Parent Id</th>
                            <th class="sorting" rowspan="1" colspan="1" >Title</th>
                            <th class="sorting" rowspan="1" colspan="1" >Keywords</th>
                            <th class="sorting" rowspan="1" colspan="1" >Description</th>
                            <th class="sorting" rowspan="1" colspan="1" >Image</th>
                            <th class="sorting" rowspan="1" colspan="1" >Slug</th>
                            <th class="sorting" rowspan="1" colspan="1" >Status</th>
                            <th class="sorting" rowspan="1" colspan="1" >Düzenle</th>
                            <th class="sorting" rowspan="1" colspan="1" >Sil</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">Id</th>
                            <th rowspan="1" colspan="1">Parent Id</th>
                            <th rowspan="1" colspan="1">Title</th>
                            <th rowspan="1" colspan="1">Keywords</th>
                            <th rowspan="1" colspan="1">Description</th>
                            <th rowspan="1" colspan="1">Image</th>
                            <th rowspan="1" colspan="1">Slug</th>
                            <th rowspan="1" colspan="1">Status</th>
                            <th rowspan="1" colspan="1">Düzenle</th>
                            <th rowspan="1" colspan="1">Sil</th>
                        </tr>
                    </tfoot>
                    <tbody>          
                        @foreach($datalist as $rs)
                        <tr role="row" class="odd">
                            <td class="sorting_1">{{ $rs->id }}</td>
                            <td>{{ $rs->title }}</td>
                            <td>{{ $rs->parent_id }}</td>
                            <td>{{ $rs->status }}</td>
                            <td>Edit</td>
                            <td>Delete</td>
                            <td>$163,500</td>
                        </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
        </div>

    </section>




</div>
@endsection

@section('footer')
<script src="./assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="./assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.min.js" type="text/javascript"></script>
<script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
    </script>
@endsection