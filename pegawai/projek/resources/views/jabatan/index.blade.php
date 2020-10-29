@extends('template')

@section('main')
    <div id="jabatan">
    <center>
    <h2>Jabatan</h2>
    </center>
    @include('_partial.flash_message')

    @if (count($jabatan_list) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Jabatan</th>
                <th>Gaji</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 0;?>
            <?php foreach($jabatan_list as $jabatan):?>
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $jabatan->nama_jabatan }}</td>
                <td>{{ $jabatan->jabatan_gaji }}</td>
                <td>
    <div class="box-button">
        {{ link_to('jabatan/' . $jabatan->id .'/edit', 'Edit', ['class'=>'btn btn-warning btn-sm']) }}
    </div>
    <div class="box-button">
                    {!! Form::open(['method'=>'DELETE','action'=>['JabatanController@destroy',$jabatan->id]]) !!}
                    {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                    </div>
                </td>
            </tr>
            
        </tbody>
        <?php endforeach ?>
    </table>
    @else
    <p>Tidak ada data Jabatan</p>
    @endif
    </div>

    <div class="tombol-nav">
                <div>
                    <a href="{{ url('jabatan/create') }}" class="btn btn-primary">Tambah Jabatan</a>
                </div>
    </div>
<center>
    <strong>Data Jabatan Pegawai</strong>
     <div></div>
     
    <div>{{ $nama_j1 }} = {{ $jumlah_jabatan_1 }} </div>
    <div>{{ $nama_j2 }} = {{ $jumlah_jabatan_2 }} </div>
    <div>{{ $nama_j3 }} = {{ $jumlah_jabatan_3 }} </div>
    <div>{{ $nama_j5 }} = {{ $jumlah_jabatan_5 }} </div>
    <div></div>
    <div>Total Pegawai = {{ $jumlah_jabatan }}</div>
    </center>
@stop

