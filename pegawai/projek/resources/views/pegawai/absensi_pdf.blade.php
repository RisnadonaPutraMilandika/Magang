<!DOCTYPE html>
<html>
<head>
        <title>Membuat Laporan PDF dengan DOMPDF Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<style type="text/css">
        table tr td,
        table tr th{
                font-size: 9pt;
        }
</style>
<center>
        <h5></h5>
</center>

<table class='table table-bordered'>
        <thead >
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
        @foreach($pegawai_list as $pegawai)
        <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $pegawai->nip }}</td>
        <td>{{ $pegawai->nama }}</td>
        <td>{{ $pegawai->jabatan['nama_jabatan'] }}</td>
        <td>{{ $pegawai->jenis_kelamin }}</td>
        <td>{{ Form::checkbox('name', 'yes', null) }}</td>
        </tr>
        @endforeach
        </tbody>
        </table>

</body>
</html>