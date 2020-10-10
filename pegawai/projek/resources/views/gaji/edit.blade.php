@extends('template')

@section('main')
    <div id="gaji">
    <h2>Edit Data Gaji</h2>
    
    {!! Form::model($gaji, ['method' => 'PATCH', 'files' => true, 'action' => ['GajiController@update', $gaji->id]]) !!}
        @include('gaji/form', ['submitButtonText'=>'Update'])
    {!! Form::close() !!}
</div>
@stop
@section('footer')
    <div id="footer">
        <p>&copy; Data Pegawai 2020 </p>
    </div>
@stop