@extends('layouts.backend')
@section('content')
<div class="row">
<div class="col-md-7">
        <div class="card">

                <canvas id="myChart" width="200" height="200"></canvas>
       </div>
</div>

<div class="col-md-4">
    <div class="card">
     <a href="{{ route('laporan') }}" class="btn btn-info">Cetak laporan</a>
    </div>
</div>
</div>
<?php foreach($penilaian as $p)
{
        $name[]=$p->siswa->nama;
        $pelanggaran[]=$p->pelanggaran->bobot;
}
 ?>

@endsection
@section('card')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels:<?php echo json_encode($name) ?>,
                datasets: [{
                    label: '# of Votes',
                    data: <?php echo json_encode($pelanggaran) ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
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
@endsection
