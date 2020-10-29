@extends('template')

@section('main')
    <div id="pegawai">
    <center>
    <h2>Edit Data Pegawai</h2>
    </center>
    {!! Form::model($pegawai, ['method' => 'PATCH', 'files' => true, 'action' => ['PegawaiController@update', $pegawai->id]]) !!}
        @include('pegawai/form', ['submitButtonText'=>'Update'])
    {!! Form::close() !!}
</div>
</div>
@stop
