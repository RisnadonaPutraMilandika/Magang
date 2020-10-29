@extends('template')

@section('main')
<center>
<h2>List Pegawai</h2>
</center>
@include('_partial/flash_message')
<div id="pegawai">

@if (Auth::check())
        <div class="tombol-nav">
        <div>
                <a href="{{ url('pegawai/create') }}" class="btn btn-info ">Tambah</a>
                <a href="cetak_pdf" class="btn btn-danger" target="_blank">CETAK PDF</a>
                <a href="export_excel" class="btn btn-success my-3" target="_blank">CETAK EXCEL</a>
        </div>
        </div>
@endif
        @if(!empty($pegawai_list))
        <table class="table table-striped table-hover">
        <thead>
        <tr>
                <th>Nomor Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Foto</th>
                <th>Jabatan</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($pegawai_list as $pegawai):?>
        <tr>
                <td>{{ $pegawai->nip }}</td>
                <td>{{ $pegawai->nama }}</td>
                <td>@if($pegawai->foto)
                                <img src=" {{ asset('/public/fotoupload/'.$pegawai->foto ) }}" width="50px" height="50px">    
                        @else 
                                @if($pegawai->jenis_kelamin == 'L')
                                        <img src="{{ asset('/public/fotoupload/male.png') }}" width="50px" height="50px">
                                @else
                                        <img src="{{ asset('/public/fotoupload/female.png') }}" width="50px" height="50px">
                                @endif
                                @endif</td>
                <td>{{ $pegawai->jabatan['nama_jabatan'] }}</td>
                <td>{{ $pegawai->tanggal_lahir->format('d-m-Y') }}</td>
                <td>{{ $pegawai->jenis_kelamin }}</td>
                <td>{{ $pegawai->alamat }}</td>
                <td>
                <div class="box-button">{{ link_to('pegawai/'.$pegawai->id, 'Detail', ['class' => 'btn btn-success btn-sm'])}}</div>
                @if (Auth::check())
                <div class="box-button">{{ link_to('pegawai/'.$pegawai->id.'/edit', 'Edit', ['class' => 'btn btn-warning btn-sm'])}}</div>
                <div class="box-button">        
                {!! Form::open(['method' => 'DELETE', 'action' => ['PegawaiController@destroy', $pegawai->id]]) !!} 
                {!! Form::submit('Delete', ['class' => 'btn btn-secondary btn-sm']) !!} 
                {!! Form::close() !!} 
                </div>
                @endif
                </td>
                <?php endforeach ?>
         </tbody>
         </table>
        @else
        <p>DATA pegawai KOSONG</p>
        @endif

        <div class="table-nav">
                <div class="jumlah-data">
                        <strong>
                                Jumlah Pegawai : {{ $jumlah_pegawai }}
                        </strong>
                </div>
        <div class="paging">
               {{ $pegawai_list->links() }}
        </div>
        </div>

       
        </div>
@stop
