@extends('template')

@section('main')
    <div id="jabatan">
    <h2>Tambah Jabatan</h2>

    {!! Form::open(['url' => 'jabatan']) !!}
           @include('jabatan/form', ['submitButtonText'=>'Simpan'])
        {!! Form::close() !!}
        </div>
    @stop

  