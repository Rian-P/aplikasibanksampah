@extends('dashboard.layouts.app')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg">
                    <div class="card-people mt-auto">
                        <img src="images/dashboard/people.svg" alt="people">
                        <div class="weather-info">
                            <div class="d-flex">
                                <div>
                                    <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                                </div>
                                <div class="ml-2">
                                    <h4 class="location font-weight-normal">Kota Tegal</h4>
                                    <h6 class="font-weight-normal">Indonesia</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 grid-margin transparent">
                <div class="row">
                    <div class="col-md stretch-card transparent">
                        <div class="card ">
                            <div class="card-body">
                                <div>
                                    <canvas id="myChart"></canvas>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var labels = @json($labels); // Menggunakan Blade directive untuk mengonversi array PHP menjadi JSON
        var data = @json($totals); // Menggunakan Blade directive untuk mengonversi array PHP menjadi JSON

        // Generate warna yang berbeda untuk setiap dataset
        var backgroundColors = generateRandomColors(labels.length);

        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Total Data per Kategori',
                    data: data,
                    backgroundColor: backgroundColors,
                    borderColor: backgroundColors,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Fungsi untuk menghasilkan warna acak
        function generateRandomColors(numColors) {
            var colors = [];
            for (var i = 0; i < numColors; i++) {
                var randomColor = '#' + (Math.random().toString(16) + '000000').slice(2, 8);
                colors.push(randomColor);
            }
            return colors;
        }
    </script>
            @endsection