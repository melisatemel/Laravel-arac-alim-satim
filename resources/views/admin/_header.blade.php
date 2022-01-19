
 <!-- START HEADER-->
<header class="header">
    <div class="page-brand">
        <a class="link" href="{{ route('admin_home')}}">
            <span class="brand">Admin
                <span class="brand-tip">Paneli</span>
            </span>
        </a>
    </div>
    
    <div class="flexbox flex-1">
        <!-- START TOP-LEFT TOOLBAR-->
        <ul class="nav navbar-toolbar">
            <li>
                <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
            </li>
        </ul>
        @include('home.message')
        <!-- END TOP-LEFT TOOLBAR-->
        <!-- START TOP-RIGHT TOOLBAR-->
        <ul class="nav navbar-toolbar">
    
            <li class="dropdown dropdown-user">
                <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                    <img src="{{ asset('assets')}}/admin/assets/img/admin-avatar.png" />
                    @auth
                    <div class="font-strong">{{ Auth::user()->name }}</div><i class="fa fa-chevron-down" style="margin-left: 5px;"></i>
                    @endauth
                    
                <ul class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html"><i class="fa fa-user"></i>Profile</a>
                    <a class="dropdown-item" href="profile.html"><i class="fa fa-cog"></i>Settings</a>
                    <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>Support</a>
                    <li class="dropdown-divider"></li>
                    <a class="dropdown-item" href="{{route('logout')}}"><i class="fa fa-power-off"></i>Logout</a>
                </ul>
            </li>
        </ul>
        <!-- END TOP-RIGHT TOOLBAR-->
    </div>
</header>