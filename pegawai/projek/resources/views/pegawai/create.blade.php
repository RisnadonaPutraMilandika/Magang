@extends('template')

@section('main')
    <div id="input_pegawai">
    <center>
    <h2>Tambah Data Pegawai</h2>
    </center>
    {!! Form::open(['url'=>'pegawai', 'files'=>'true'])!!}
           @include('pegawai/form', ['submitButtonText'=>'Simpan'])
        {!! Form::close() !!}
        </div>
        </div>
    @stop

 