@extends('template')

@section('main')
    <div id="gaji">
    <h2>Tambah gaji</h2>

    {!! Form::open(['url' => 'gaji']) !!}
           @include('gaji/form', ['submitButtonText'=>'Simpan'])
        {!! Form::close() !!}
        </div>
    @stop

    @section('footer')
        <div id="footer">
            <p>&copy; Data Pegawai 2020 </p>
        </div>
        @stop