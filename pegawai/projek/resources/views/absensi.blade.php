@extends('template')

@section('main')
                <a href="cetak_pdf_absensi" class="btn btn-danger" target="_blank">CETAK PDF</a>
                <a href="export_excel" class="btn btn-success my-3" target="_blank">CETAK EXCEL</a>  
<center>
<h2>Data Absensi Pegawai </h2>
</center>
@include('_partial/flash_message')
<div id="pegawai">
        <table class="table table-striped table-hover">
        <thead>
		
        <tr>
				<th>No</th>
                <th>Nomor Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Jabatan</th>
                <th>Jenis Kelamin</th>
                <th>Absen</th>
        </tr>
        </thead>
        <tbody>
		<?php $i = 0;?>
		<?php foreach($pegawai_list as $pegawai):?>
        <tr>
				<td>{{ ++$i }}</td>
                <td>{{ $pegawai->nip }}</td>
                <td>{{ $pegawai->nama }}</td>
                <td>{{ $pegawai->jabatan['nama_jabatan'] }}</td>
				<td>{{ $pegawai->jenis_kelamin }}</td>
                <td>{{ Form::checkbox('name', 'yes') }}</td>
                <td>
				<?php endforeach ?>
                 
@stop


