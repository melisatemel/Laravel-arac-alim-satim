<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar" style="position:fixed;">
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
                <a href="{{route('admin_arac')}}">
                    <span class="nav-label">İlanlar</span></a>
            
            </li>
            <li>
                <a href="{{route('admin_message')}}">
                    <span class="nav-label">İletişim Mesajları</span></a>
            
            </li>

            <li>
                <a href="{{route('admin_faq')}}">
                    <span class="nav-label">Sık Sorulan Sorular</span></a>
            
            </li>


            <li>
                <a href="{{route('admin_users')}}">
                    <span class="nav-label">Kullanıcılar</span></a>
            
            </li>
            
            <li>
                <a href="{{route('admin_setting')}}">
                    <span class="nav-label">Ayarlar</span></a>
            
            </li>

            <li>
                <a href="{{route('admin_review')}}">
                    <span class="nav-label">Yorumlar</span></a>
            
            </li>


         
        </ul>
    </div>
</nav>
<!-- END SIDEBAR-->