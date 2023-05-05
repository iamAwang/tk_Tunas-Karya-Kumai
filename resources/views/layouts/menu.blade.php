<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
    {{-- @auth
        @php
            $menus = Auth::user()->role->role_feature;
        @endphp
        @foreach ($menus as $menu)
            <a href="{{route($menu->feature->name)}}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
                <i class="nav-icon fas fa-home"></i>
                <p>{{$menu->feature->name}}</p>
            </a>
        @endforeach
    @endauth --}}

    <a href="{{ route('Developer') }}" class="nav-link {{ Request::is('developer') ? 'active' : '' }}">
        <i class="nav-icon fas fa-code"></i>
        <p>Developer</p>
    </a>

    <a href="{{ route('indexSekolah') }}" class="nav-link {{ Request::is('sekolah') ? 'active' : '' }}">
        <i class="nav-icon fas fa-school"></i>
        <p>Profil Sekolah</p>
    </a>

    <a href="{{ route('indexPegawai') }}" class="nav-link {{ Request::is('pegawai') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-tie"></i>
        <p>Data Pegawai</p>
    </a>

    <a href="{{ route('indexSiswa') }}" class="nav-link {{ Request::is('siswa') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users"></i>
        <p>Data Siswa</p>
    </a>
</li>
