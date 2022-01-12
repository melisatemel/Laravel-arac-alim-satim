@extends('layouts.admin')

@section('content')

<div class="content"style="margin-left:auto; margin-right:auto; margin-top: 5%; width:50%;">
    <div class="brand">
        <a class="link" routerLink="/index">AdminCAST</a>
    </div>
    <form action="{{ route('admin_logincheck') }}" method="post">
        @csrf <!-- Güvenlik kontrolü// sadece bu web sitesinden form kontrolünü alıyor-->
        <h2 class="login-title">Giriş</h2>
        <div class="form-group">
            <div class="input-group-icon right">
                <div class="input-icon"><i class="fa fa-envelope"></i></div>
                <input class="form-control" type="email" name="email" placeholder="Email" autocomplete="off">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group-icon right">
                <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
        </div>
        <div class="form-group d-flex justify-content-between">
            <label class="ui-checkbox ui-checkbox-info">
                <input type="checkbox">
                <span class="input-span"></span>Beni hatırla</label>
            <a routerLink="/forgot_password">Şifrenizi mi unuttunuz?</a>
        </div>
        <div class="form-group">
            <button class="btn btn-info btn-block" type="submit">Giriş</button>
        </div>
        <div class="social-auth-hr">
            <span>Or login with</span>
        </div>
        <div class="text-center social-auth m-b-20">
            <a class="btn btn-social-icon btn-twitter m-r-5" href="javascript:;"><i class="fa fa-twitter"></i></a>
            <a class="btn btn-social-icon btn-facebook m-r-5" href="javascript:;"><i class="fa fa-facebook"></i></a>
            <a class="btn btn-social-icon btn-google m-r-5" href="javascript:;"><i class="fa fa-google-plus"></i></a>
            <a class="btn btn-social-icon btn-linkedin m-r-5" href="javascript:;"><i class="fa fa-linkedin"></i></a>
            <a class="btn btn-social-icon btn-vk" href="javascript:;"><i class="fa fa-vk"></i></a>
        </div>
        <div class="text-center">Hatırlamıyor musunuz?
            <a class="color-blue" routerLink="/register">Hesap oluştur</a>
        </div>
    </form>
</div>
@endsection