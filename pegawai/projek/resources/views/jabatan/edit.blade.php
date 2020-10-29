@extends('template')

@section('main')
    <div id="jabatan">
    <center>
    <h2>Edit Data Jabatan</h2>
    </center>
    {!! Form::model($jabatan, ['method' => 'PATCH', 'files' => true, 'action' => ['JabatanController@update', $jabatan->id]]) !!}
        @include('jabatan/form', ['submitButtonText'=>'Update'])
    {!! Form::close() !!}
</div>
</div>
@stop
