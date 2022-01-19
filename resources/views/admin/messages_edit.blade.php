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
    <h1 class="page-title">Mesaj Detayı</h1>
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
            <form role="form" action="{{route('admin_message_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf

                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <td>{{ $data->id }}</td>
                        </tr>
                        <tr>
                            <th>İsim</th>
                            <td>{{ $data->name }}</td>
                        </tr>
                        <tr>
                            <th>E-Mail</th>
                            <td>{{ $data->email }}</td>
                        </tr>
                        <tr>
                            <th>Telefon</th>
                            <td>{{ $data->phone }}</td>
                        </tr>
                        <tr>
                            <th>Konu</th>
                            <td>{{ $data->subject }}</td>
                        </tr>
                        <tr>
                            <th>Mesaj</th>
                            <td>{{ $data->message }}</td>
                        </tr>
                        <tr>
                            <th>Admin Notu</th>
                            <td>
                                <textarea  name="note">{{ $data->note }}</textarea>
                            </td>
                        <tr>
                            <td></td>
                            <td>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Mesajı güncelle</button>
                                </div>
                            </td>
                        </tr>

                        </tr>
                    </thead>
                </table>

        </div>

    </div>
</div>