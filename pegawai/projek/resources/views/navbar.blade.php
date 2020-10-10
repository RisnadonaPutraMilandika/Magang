<nav class="navbar navbar-light" style="background-color: #00ff00;">
<div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed"
            data-toggle="colapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{ url('/') }}">HOME</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            @if (!empty($halaman) && $halaman == 'lihat_data_pegawai')
                <li class="active"><a href="{{ url('lihat_data_pegawai') }}">Data Pegawai<span class="sr-only">(current)</span></a></li>
            @else
                <li><a href="{{ url('lihat_data_pegawai') }}">Data Pegawai</a></li>
            @endif
            
            {{-- Jabatan --}}
            @if (Auth::check())
            @if (!empty($halaman) && $halaman == 'jabatan')
                <li class="active"><a href="{{ url('jabatan') }}">Jabatan<span class="sr-only">(current)</span></a></li>
            @else
                <li><a href="{{ url('jabatan') }}">Jabatan</a></li>
            @endif
            @endif

            {{-- Input --}}
            @if (Auth::check())
            @if (!empty($halaman) && $halaman == 'create')
                <li class="active"><a href="{{ url('pegawai/create') }}">Input Data pegawai<span class="sr-only">(current)</span></a></li>
            @else
                <li><a href="{{ url('pegawai/create') }}">Input Data Pegawai</a></li>
            @endif
            @endif

            {{-- User --}}
            @if (Auth::check() && Auth::user()->level == "admin")
            @if (!empty($halaman) && $halaman == 'user')
                <li class="active"><a href="{{ url('user') }}">User<span class="sr-only">(current)</span></a></li>
            @else
                <li><a href="{{ url('user') }}">User</a></li>
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