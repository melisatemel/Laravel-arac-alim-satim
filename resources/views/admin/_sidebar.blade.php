<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="{{ asset('assets')}}/admin/assets/img/admin-avatar.png" width="45px" />
            </div>
            <div class="admin-info">
                @auth
                <div class="font-strong">{{ Auth::user()->name }}</div><small>Yönetici</small>
                @endauth
            </div>
        </div>
        <ul class="side-menu metismenu">
            <li class="heading">Menü</li>
            <li>
                <a href="{{route('admin_home')}}">
                    <span class="nav-label">Anasayfa</span></a>
            </li>
            <li>
                <a href="{{route('admin_category')}}">
                    <span class="nav-label">Kategoriler</span></a>
            
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-table"></i>
                    <span class="nav-label">Tables</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="datatables.html">Datatables</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-file-text"></i>
                    <span class="nav-label">Ürünler</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="form_basic.html">Basic Forms</a>
                    </li>
                    <li>
                        <a href="form_advanced.html">Advanced Plugins</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<!-- END SIDEBAR-->