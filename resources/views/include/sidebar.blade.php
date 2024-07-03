<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="{{ route('dashboard.index') }}">
                        <span style="font-size: 1.3rem; font-weight: bold;">PPDB - SMKASY</span>
                    </a>
                </div>
                <div class="sidebar-toggler x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu Master</li>
                
                <li class="sidebar-item active">
                    <a href={{route('dashboard.index')}} class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                

                <li class="sidebar-item">
                    <a href="{{route('siswa.index')}}" class='sidebar-link'>
                        <i class="bi bi-collection-fill"></i>
                        <span>Data Siswa</span>
                    </a>
                </li>

                <li class="sidebar-item">
    <a href="{{route('ortu.index')}}" class='sidebar-link'>
        <i class="bi bi-collection-fill"></i>
        <span>Data Orang Tua</span>
    </a>
</li>

<li class="sidebar-item">
    <a href="#" class='sidebar-link'>
        <i class="bi bi-collection-fill"></i>
        <span>Cetak Kartu Pendaftaran</span>
    </a>
</li>
                
                <li class="sidebar-item">
                    @auth
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="btn btn-danger">Logout</button>
                    </form>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</div>
