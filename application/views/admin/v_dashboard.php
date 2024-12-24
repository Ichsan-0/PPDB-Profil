<?php
        /* Mengambil query report*/
        foreach($visitor as $result){
            $bulan[] = $result->tgl; //ambil bulan
            $value[] = (float) $result->jumlah; //ambil nilai
        }
        /* end mengambil query*/

    ?>
    
<div id="content">

        
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          
          

        </nav>
        
        <div class="container-fluid">

          
          <!-- Content Row -->
          <div class="row justify-content-center">

          <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Jumlah Pendaftar PPDB</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $ppdb;?> Orang</div>
                    </div>
                </div>
                <div class="col-mb-4">
                <a href="<?php echo site_url('admin/ppdb');?>" class="btn btn-primary">
                <i class="fas fa-copy"></i> Detail</a>
              </div>
            </div>
        </div>
        
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 text-xs font-weight-bold text-success text-uppercase mb-1">
                            Berita Sekolah</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Total: <?php echo $berita; ?> </div>
                    </div>
                </div>
                <div class="col-mb-4">
                <a href="<?php echo site_url('admin/tulisan');?>" class="btn btn-success">
                <i class="fas fa-check"></i> Detail</a>
              </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Agenda Sekolah</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Total:<?php echo $agenda; ?> | Bulan ini:<?php echo $agenda_bulan; ?> </div>
                    </div>
                </div>
                <div class="col-mb-4">
                <a href="<?php echo site_url('admin/agenda');?>" class="btn btn-warning">
                <i class="fas fa-check"></i> Detail</a>
              </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 text-xs font-weight-bold text-info text-uppercase mb-1">
                            Pengumuman Sekolah</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Total: <?php echo $pengumuman; ?> | Bulan Ini: <?php echo $pengumuman_bulan;?></div>
                    </div>
                </div>
                <div class="col-mb-4">
                <a href="<?php echo site_url('admin/pengumuman');?>" class="btn btn-info">
                <i class="fas fa-check"></i> Detail</a>
              </div>
            </div>
        </div>
    </div>

</div>

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Statistik Pengunjung</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="canvas" width="1000" height="300"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            
          </div>

          <!-- Content Row -->
          

        </div>
        <!-- /.container-fluid -->

   


<script src="<?php echo base_url().'assets/plugins/chartjs/Chart.min.js'?>"></script>



    
<script>

            var lineChartData = {
                labels : <?php echo json_encode($bulan);?>,
                datasets : [

                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($value);?>
                    }

                ]

            }

        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);

        var canvas = new Chart(myLine).Line(lineChartData, {
            scaleShowGridLines : true,
            scaleGridLineColor : "rgba(0,0,0,.005)",
            scaleGridLineWidth : 0,
            scaleShowHorizontalLines: true,
            scaleShowVerticalLines: true,
            bezierCurve : true,
            bezierCurveTension : 0.4,
            pointDot : true,
            pointDotRadius : 4,
            pointDotStrokeWidth : 1,
            pointHitDetectionRadius : 2,
            datasetStroke : true,
            tooltipCornerRadius: 2,
            datasetStrokeWidth : 2,
            datasetFill : true,
            legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
            responsive: true
        });

        </script>      