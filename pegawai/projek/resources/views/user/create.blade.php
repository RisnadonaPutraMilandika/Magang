@extends('template')

@section('main')
    <div id="user">
    <h2>Tambah User</h2>

    {!! Form::open(['url' => 'user']) !!}
    @include('user/form', ['submitButtonText'=>'Simpan'])
        {!! Form::close() !!}
        </div>
    @stop

    @section('footer')
        <div id="footer">
            <p>&copy; Data Pegawai 2020 </p>
        </div>
        @stop