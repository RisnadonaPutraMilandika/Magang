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
        <h5>Laporan Data Pegawai</h5>
</center>

<table class='table table-bordered'>
        <thead >
                <tr>
                <th>Nomor Pegawai</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                </tr>
        </thead>
<tbody>
        @php $i=1 @endphp
        @foreach($pegawai_list as $pegawai)
        <tr>
        <td>{{ $pegawai->nip }}</td>
        <td>{{ $pegawai->nama }}</td>
        <td>{{ $pegawai->jabatan['nama_jabatan'] }}</td>
        <td>{{ $pegawai->tanggal_lahir->format('d-m-Y') }}</td>
        <td>{{ $pegawai->jenis_kelamin }}</td>
        <td>{{ $pegawai->alamat }}</td>
        <td>{{ !empty($pegawai->telepon['nomor_telepon'])?
                        $pegawai->telepon['nomor_telepon'] : '-'}}</td>
        </tr>
        @endforeach
        </tbody>
        </table>

</body>
</html>