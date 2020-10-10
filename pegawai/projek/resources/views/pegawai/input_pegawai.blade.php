@extends('template')

@section('main')
    <div id="input_pegawai">
    <h2>Tambah Data Pegawai</h2>
    {!!Form::open(['url' => 'pegawai']) !!}
    <div class="form-group">
        {!! Form::label('nip', 'NIP:', ['class'=> 'control-label'])!!}
        {!! Form::text('nip', null, ['class'=> 'form-control'])!!}    
    </div>
    <div class="form-group">
        {!! Form::label('nama', 'Nama Pegawai:', ['class'=> 'control-label'])!!}
        {!! Form::text('nama', null, ['class'=> 'form-control'])!!}
    </div>   
    <div class="form-group">
        {!! Form::label('tanggal_lahir', 'Tanggal Lahir:', ['class'=> 'control-label'])!!}
        {!! Form::date('tanggal_lahir', null, ['class'=> 'form-control', 'id'=>'tanggal lahir'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('jenis_kelamin', 'Jenis Kelamin:', ['class'=> 'control-label'])!!}
        <div class="radio">
            <label>{!! Form::radio('jenis_kelamin','L')!!}Laki-laki</label>
        </div>
        <div class="radio">
            <label>{!! Form::radio('jenis_kelamin','P')!!}Perempuan</label>
        </div>
    <div class="form-group">
        {!! Form::label('nomor_telepon', 'Nomor Telepon:', ['class'=> 'control-label'])!!}
        {!! Form::text('nomor_telepon', null, ['class'=> 'form-control'])!!}
    </div>   
        <div class="form-group">
        {!! Form::submit('Simpan', ['class'=> 'btn btn-primary form-control'])!!}
        {!!Form::close()!!}
        </div>
        </div>
    @stop
    @section('footer')
    <div id="footer">
        <p>&copy; Polines 2020 </p>
    </div>
@stop