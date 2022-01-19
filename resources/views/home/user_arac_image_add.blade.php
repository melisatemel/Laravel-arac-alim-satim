<html>
 <head>
    <title>Resim Galerisi</title>
    <link href="{{ asset('assets')}}/admin/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('assets')}}/admin/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{ asset('assets')}}/admin/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="{{ asset('assets')}}/admin/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{ asset('assets')}}/admin/assets/css/main.min.css" rel="stylesheet" />
 </head>
<body


<div class="col-md-12">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">
                {{$data->title}}
            </div>
        </div>

        <div class="ibox-body">
            <form role="form" action="{{route('user_image_store',['arac_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-sm-6 form-group">
                        <label>Title</label>
                        <input class="form-control" type="text" name="title">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Resim</label>
                        <input class="form-control" type="file" name="image">
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Resim ekle</button>

                </div>
            </form>
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Resim</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($images as $rs)
                    <tr>
                        <td>{{ $rs->id }}</td>
                        <td>{{ $rs->title }}</td>
                        <td>
                            @if($rs->image)
                            <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                            @endif
                        </td>
                        <td><a href="{{route('user_image_delete',['id'=> $rs->id,'arac_id'=>$data->id])}}" onclick="return confirm ('Silmek istediğinize emin misiniz?')"> Sil</a></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
</body>
</html>