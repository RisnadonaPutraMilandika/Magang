@extends('template')

@section('main')
    <div id="pegawai">
    <h2>Edit Data Pegawai</h2>
    
    {!! Form::model($pegawai, ['method' => 'PATCH', 'files' => true, 'action' => ['PegawaiController@update', $pegawai->id]]) !!}
        @include('pegawai/form', ['submitButtonText'=>'Update'])
    {!! Form::close() !!}
</div>
</div>
@stop
@section('footer')
    <div id="footer">
        <p>&copy; Data Pegawai 2020 </p>
    </div>
@stop