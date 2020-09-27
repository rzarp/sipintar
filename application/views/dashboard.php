<?php $this->load->view("templates/sidebar") ?>
<?php $this->load->view("templates/navbar") ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard Administrator</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Chat Order dan Biaya Pengiriman</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-bar">
                        <canvas id="myBarChart"></canvas>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-4 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Order</div>
                            <i class="fas fa-fw fa fa-tag"></i> 
                                <span class="h6 mb-x0 font-weight-bold text-gray-800">1000</span>
                            <hr>
                            <i class="fas fa-fw fa fa-calendar"></i> 
                                <span class="h6 mb-x0 font-weight-bold text-gray-800">aug</span>
                            <br>
                            <br>
                            <p class="text-center">Lihat semua 
                                <a href="#">
                                    <i class="fas fa-fw fa fa-plus"></i> 
                                </a>
                            </p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-4 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Terkirim</div>
                            <i class="fas fa-fw fa fa-tag"></i> 
                                <span class="h6 mb-x0 font-weight-bold text-gray-800">1000</span>
                            <hr>
                            <i class="fas fa-fw fa fa-calendar"></i> 
                                <span class="h6 mb-x0 font-weight-bold text-gray-800">aug</span>
                            <br>
                            <br>
                            <p class="text-center">Lihat semua 
                                <a href="#">
                                    <i class="fas fa-fw fa fa-plus"></i> 
                                </a>
                            </p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-4 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Selesai</div>
                                <i class="fas fa-fw fa fa-tag"></i> 
                                    <span class="h6 mb-x0 font-weight-bold text-gray-800">1000</span>
                                <hr>
                                <i class="fas fa-fw fa fa-calendar"></i> 
                                    <span class="h6 mb-x0 font-weight-bold text-gray-800">aug</span>
                                <br>
                                <br>
                                <p class="text-center">Lihat semua 
                                <a href="#">
                                    <i class="fas fa-fw fa fa-plus"></i> 
                                </a>
                            </p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>



</div>