
@auth

<div class="bg-white widget border rounded">

    <h3 class="h4 text-black widget-title mb-3">User Panel</h3>
        <div>
            <a href="{{route('myprofile')}}">Profilim</a>

        </div>
        <div>
            <a href="{{route('user_arac')}}">İlanlarım</a>

        </div>
        <div>
            <a href="{{route('myreviews')}}">Yorumlarım</a>
        </div>

        @php
            $userRoles=Auth::user()->roles->pluck('name');
        @endphp
        @if($userRoles->contains('admin'))
             <a href="{{route('admin_home')}}">Admin Paneli</a>
        @endif


        <div>
            <a href="{{route('logout')}}">Çıkış</a>

        </div>
        
</div>
@endauth