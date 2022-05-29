<?php $this->load->view('backend/layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>
            
            <!-- Content Row -->
            <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">materi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_materi ?></div>
                            </div>
                            <div class="col-auto">
                            <i class="fas fa-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Submateri</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_submateri ?></div>
                            </div>
                            <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Soal</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_soal ?></div>
                                </div>
                                <div class="col-auto">
                                <i class="fas fa-question fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">User/Pelajar</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_user ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Row -->

            <div class="row">
                <div class="col-6 ">
                    <div class="card mb-3">
                        <div class="card-header bg-success text-white text-center">
                            <strong>Diagram Nilai</strong>
                        </div>
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="myPieChart"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                                <span class="mr-2">
                                    <i class="fas fa-circle text-success"></i> 90-100
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-info"></i> 80-90
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-secondary"></i> 70-80
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-warning"></i> 60-70
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-danger"></i> < 60
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mb-3">
                        <div class="card-header bg-success text-white text-center">
                            <strong>Jumlah Soal</strong>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    Soal Aktif
                                    <div class="float-right"><?= $soal_aktif ?></div>
                                </li>
                                <li class="list-group-item">
                                    Soal Tidak Aktif
                                    <div class="float-right"><?= $soal_tidak_aktif ?></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
     <!-- End of Main Content -->

<?php $this->load->view('backend/layouts/footer') ?>

<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Pie Chart Example
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["90-100", "80-90", "70-80", "60-70", "< 60"],
        datasets: [{
            data: <?= json_encode($diagram) ?>,
            backgroundColor: ['#1cc88a', '#36b9cc', '#858796', '#f6c23e', '#e74a3b'],
            hoverBackgroundColor: ['#1cc88a', '#36b9cc', '#858796', '#f6c23e', '#e74a3b'],
            hoverBorderColor: "rgba(234, 236, 244, 1)",
        }],
    },
    options: {
        maintainAspectRatio: false,
        tooltips: {
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        caretPadding: 10,
        },
        legend: {
        display: false
        },
        cutoutPercentage: 80,
    },
    });
</script>

</body></html>