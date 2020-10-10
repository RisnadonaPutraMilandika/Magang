@extends('template')

@section('main')
    <div id="jabatan">
    <h2>Edit Data Jabatan</h2>
    
    {!! Form::model($jabatan, ['method' => 'PATCH', 'files' => true, 'action' => ['JabatanController@update', $jabatan->id]]) !!}
        @include('jabatan/form', ['submitButtonText'=>'Update'])
    {!! Form::close() !!}
</div>
</div>
@stop
@section('footer')
    <div id="footer">
        <p>&copy; Data Pegawai 2020 </p>
    </div>
@stop