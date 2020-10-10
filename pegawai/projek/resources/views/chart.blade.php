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
	</div>
    </center>
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
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
@section('footer')
                <div id="footer">
                <p>&copy; Data Pegawai 2020</p>
                </div>
        @stop