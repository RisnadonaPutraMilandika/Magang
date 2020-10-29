@extends('template')

@section('main')
<!DOCTYPE html>
<html>
<head>
	<title>Grafik Pegawai Laki-laki dan perempuan</title>
	<script type="text/javascript" src="projek/js/Chart.js"></script>
</head>
<body>
	
 <center>
	<p>Grafik Pegawai Laki-laki dan perempuan<p>
	<div style="width: 750px;height: 750px">
		<canvas id="myChart"></canvas>
		<p> Laki-laki : {{ $jumlah_pegawai_laki }}</p>
		<p> Perempuan : {{ $jumlah_pegawai_cewek }}</p>
	<p> Total Pegawai : {{ $jumlah }}</p>
		<div class="box-button">{{ link_to('jabatan', 'Detail Jumlah Pegawai Berdasarkan Jabatan', ['class' => 'btn btn-success btn-sm'])}}</div>
	</div>
    </center>
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ["Laki-Laki", "Perempuan"],
				datasets: [{
					label: '# of Votes',
					data: [{{ $jumlah_pegawai_laki }},{{ $jumlah_pegawai_cewek }}],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)'
					],
					borderWidth: 3
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>

</body>

</html>
@endsection
