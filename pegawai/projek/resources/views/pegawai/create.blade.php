@extends('template')

@section('main')
    <div id="input_pegawai">
    <h2>Tambah Data Pegawai</h2>
    {!! Form::open(['url'=>'pegawai', 'files'=>'true'])!!}
           @include('pegawai/form', ['submitButtonText'=>'Simpan'])
        {!! Form::close() !!}
        </div>
        </div>
    @stop

    @section('footer')
        <div id="footer">
            <p>&copy; Data Pegawai 2020 </p>
        </div>
        @stop