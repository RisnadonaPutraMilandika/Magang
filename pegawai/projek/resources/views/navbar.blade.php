<nav class="navbar navbar-expand navbar-light" style="background-color: #68f3f8;">

<div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="{{ url('chart') }}">HOME</a>
    </div>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto">
            @if (!empty($halaman) && $halaman == 'lihat_data_pegawai')
                <li class="nav-item active"><a class="nav-link" href="{{ url('lihat_data_pegawai') }}">Data Pegawai<span class="sr-only">(current)</span></a></li>
            @else
                <li><a class="nav-link" href="{{ url('lihat_data_pegawai') }}">Data Pegawai</a></li>
            @endif

            {{-- Jabatan --}}
            @if (Auth::check())
            @if (!empty($halaman) && $halaman == 'jabatan')
                <li class="nav-item active"><a href="{{ url('jabatan') }}">Jabatan<span class="sr-only">(current)</span></a></li>
            @else
                <li><a class="nav-link" href="{{ url('jabatan') }}">Jabatan</a></li>
            @endif
            @endif

            {{-- Input --}}
            @if (Auth::check())
            @if (!empty($halaman) && $halaman == 'create')
                <li class="nav-item active"><a href="{{ url('pegawai/create') }}">Input Data pegawai<span class="sr-only">(current)</span></a></li>
            @else
                <li><a class="nav-link" href="{{ url('pegawai/create') }}">Input Data Pegawai</a></li>
            @endif
            @endif

            {{-- Absensi --}}
            @if (Auth::check())
            @if (!empty($halaman) && $halaman == 'chart')
                <li class="nav-item active"><a href="{{ url('absensi') }}">Absensi<span class="sr-only">(current)</span></a></li>
            @else
                <li><a class="nav-link" href="{{ url('absensi') }}">Absensi</a></li>
            @endif
            @endif

            {{-- User --}}
            @if (Auth::check() && Auth::user()->level == "admin")
            @if (!empty($halaman) && $halaman == 'user')
                <li class="nav-item active"><a href="{{ url('user') }}">User<span class="sr-only">(current)</span></a></li>
            @else
                <li><a class="nav-link" href="{{ url('user') }}">User</a></li>
            @endif
            @endif
            
        </ul>
       
        <ul class="nav navbar-nav navbar-right">
            @if (Auth::check())
            <li>{{ 'Hai '. Auth::user()->name }}
                <div class="box-button">
                        {!! Form::open(['method' => 'POST', 'url' => 'logout']) !!}
                        {!! Form::submit('LOGOUT', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                        </div>
                </li>
            @else
                <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif
        </ul>
    </div>
</div>
</nav>