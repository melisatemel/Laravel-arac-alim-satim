@php
$parentCategories = \App\Http\Controllers\HomeController::categorylist()
@endphp


<div class="site-mobile-menu">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>

<!-- Menü -->

<div class="site-navbar mt-4">
  <div class="container py-1">
    <div class="row align-items-center">
      <div class="col-8 col-md-8 col-lg-4">
        <h1 class="mb-0"><a href="{{route('home')}}" class="text-white h2 mb-0"><strong>Carland<span class="text-danger">.</span></strong></a></h1>
      </div>
      <div class="col-4 col-md-4 col-lg-8">
        <nav class="site-navigation text-right text-md-right" role="navigation">


          <ul class="site-menu js-clone-nav d-none d-lg-block">
            <li class="active">
              <a href="{{route('home')}}">Anasayfa</a>
            </li>

            <li class="has-children">
              
              <a href="#">İlanlar</a>
              <ul class="dropdown arrow-top">
                @foreach($parentCategories as $rs)
                <li class="has-children"><a href="#">{{$rs->title}}</a></li>
                
                @if(count($rs->children))
                  @include('home.categorytree', ['children'=>$rs->children])
                @endif
                
                @endforeach
              </ul>
              
            </li>
          

            <li class="active">
              <a href="{{route('aboutus')}}">Hakkımızda</a>
            </li>
            <li class="active">
              <a href="{{route('references')}}">Referans</a>
            </li>
            <li class="active">
              <a href="{{route('faq')}}">SSS</a>
            </li>
            <li class="active">
              <a href="{{route('contact')}}">Contact</a>
            </li>
            @auth
            <li class="active">
              <a href="{{route('myprofile')}}">{{Auth::user()->name}}   {{Auth::user()->roles->pluck('name')}}</a>
            </li>
            <li class="active">
              <a href="{{route('logout')}}">Çıkış Yap</a>
            </li>
            @endauth
            @guest
            <li class="active">
              <a href="/register">Üye ol</a>
            </li>
            <li class="active">
              <a href="/login">Giriş Yap</a>
            </li>
            @endguest
            <li class="active">
              <a href="{{route('user_arac_add')}}">İlan Ver</a>
            </li>

          </ul>
        </nav>
      </div>


    </div>
  </div>
</div>