                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Seluruh Pelayan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $dash_semua[0]->jumlah; ?> Orang</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
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
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Pemandu</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $dash_pemandu[0]->jumlah; ?> Orang</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-microphone fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Total Pemusik</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $dash_pemusik[0]->jumlah; ?> Orang</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-music fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Total Operator</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $dash_operator[0]->jumlah; ?> Orang</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-laptop fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                      <!-- Content Row -->

                      <div class="row">

<!-- Area Chart -->
<!-- <div class="col-xl-8 col-lg-7"> -->
<div class="col-xl-6 col-lg-6">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
                       <!-- Project Card Example -->
                       <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Kehadiran dari semua jadwal</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Kehadiran pemandu <span
                                            class="float-right"><?= $dash_hadir_pemandu; ?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: <?= $dash_hadir_pemandu; ?>%"
                                            aria-valuenow="<?= $dash_hadir_pemandu; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Kehadiran pemusik <span
                                            class="float-right"><?= $dash_hadir_pemusik; ?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: <?= $dash_hadir_pemusik; ?>%"
                                            aria-valuenow="<?= $dash_hadir_pemusik; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Kehadiran operator <span
                                            class="float-right"><?= $dash_hadir_operator; ?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: <?= $dash_hadir_operator; ?>%"
                                            aria-valuenow="<?= $dash_hadir_operator; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Kehadiran keseluruhan <span
                                            class="float-right"><?= $dash_hadir_all; ?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $dash_hadir_all; ?>%"
                                            aria-valuenow="<?= $dash_hadir_all; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Kehadiran digantikan <span
                                            class="float-right"><?= $dash_hadir_digantikan; ?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: <?= $dash_hadir_digantikan; ?>%"
                                            aria-valuenow="<?= $dash_hadir_digantikan; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
    </div>
</div>

<!-- Pie Chart -->
<div class="col-xl-6 col-lg-2">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
                <!-- Bar Chart -->
                <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Kehadiran per bulan</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-bar">
                                        <canvas id="myBarChart"></canvas>
                                    </div>

                                </div>
                            </div>
    </div>
</div>
</div>