<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="{{ asset('assets')}}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/mediaelementplayer.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/fl-bigmug-line.css">
    
  
    <link rel="stylesheet" href="{{ asset('assets')}}/css/aos.css">

    <link rel="stylesheet" href="{{ asset('assets')}}/css/style.css">

<div class="page-heading">
    <h1 class="page-title">Kullanıcı Rolleri</h1>
    @include('home.message')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
    </ol>
</div>
<div class="col-md-12">
    <div class="ibox">

        <div class="ibox-body">

                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                    <thead>
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
                    </thead>
                </table>

        </div>

    </div>
</div>