@extends('template')

@section('main')
    <div id="pegawai">
    <center>
    <h2>Data Pegawai</h2>
    </center>
        <table class="table">
        <tr>
        @if($pegawai->foto)
                                <img src=" {{ asset('/public/fotoupload/'.$pegawai->foto) }}"width="250px" height="250px">    
                        @else 
                                @if($pegawai->jenis_kelamin == 'L')
                                        <img src="{{ asset('/public/fotoupload/male.png') }}"width="250px" height="250px">
                                @else
                                        <img src="{{ asset('/public/fotoupload/female.png') }}"width="250px" height="250px">
                                @endif
                                @endif
                                </tr>
                               <p></p>
        <tr>
                <th>Nomor Pegawai</th>
                <td>{{ $pegawai -> nip }}</td>
        </tr>
        <tr>
                <th>Nama Lengkap</th>
                <td>{{ $pegawai -> nama }}</td>
        </tr>
        <tr>
                <th>Jabatan</th>
                <td>{{ $pegawai -> jabatan['nama_jabatan'] }}</td>
        </tr>
        <tr>
                <th>Tanggal Lahir</th>
                <td>{{ $pegawai -> tanggal_lahir->format('d-m-Y') }}</td>
        </tr>
        <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $pegawai -> jenis_kelamin }}</td>
        </tr>
        <tr>
                <th>Alamat </th>
                <td>{{ $pegawai -> alamat }}</td>
        </tr>
        <tr>
                <th>Nomor Telepon</th>
                <td>{{ !empty($pegawai->telepon['nomor_telepon'])?
                                $pegawai->telepon['nomor_telepon'] : '-' }}
                </td>
        </tr>
        <tr>
                <th>Gaji</th>
                <td>{{ $pegawai -> jabatan['jabatan_gaji'] }}</td>
        </tr>
        </table>
    </div>
       
@stop

