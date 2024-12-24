<div id="content">

        
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          
          

        </nav>
        

          <!-- Content Row -->
          <div class="container-fluid">

<div class="row justify-content-center">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Tahap 1</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Lengkapi Formulir</div>
                    </div>
                </div>
                <div class="col-mb-4">
                <a href="<?php echo site_url('pendaftar/formulir');?>" class="btn btn-primary">
                <i class="fas fa-copy"></i> Lengkapi</a>
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
                            Tahap 2</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Upload</div>
                    </div>
                    
                </div>
                <div class="col-mb-4">
                <a href="<?php echo site_url('pendaftar/upload');?>" class="btn btn-success">
                        <i class="fas fa-upload"></i> Upload</a>
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
                        <div class="h5 text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Tahap Ke 3</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Bukti Pendaftaran</div>
                    </div>
                </div>
                <div class="col-mb-4">
                <a href="<?php echo site_url('pendaftar/bukti_daftar');?>" class="btn btn-warning">
                <i class="fas fa-check"></i> Bukti Daftar</a>
              </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 text-xs font-weight-bold text-info text-uppercase mb-1">
                            Tahap Ke 3</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Biaya Pendidikan</div>
                    </div>
                </div>
                <div class="col-mb-4">
                <?php foreach ($brosur as $row): ?>
            <a href="<?php echo base_url() . 'assets/images/' . $row['gambar']; ?>" data-lightbox="gallery" data-title="Preview Brosur" class="btn btn-info"><i class="fas fa-book"></i> Lihat Brosur</a>
            <?php endforeach; ?>
              </div>
            </div>
        </div>
    </div>

</div>


          <div class="row">

                        <div class="col-lg-6">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Selamat Datang! <?php echo $nama; ?></h6>
                                </div>
                                <div class="card-body">
                                <p>Selamat Datang di Website Penerimaan Peserta Didik Baru <?php echo get_nama_sekolah(); ?></p>
                                    <!-- Circle Buttons (Default) -->
                                    <div class="mb-2">
                                    <div class="mb-0 font-weight-bold text-gray-800"><?php if (isset($tahun) && !empty($tahun->tahun_ajaran)) : ?>
                                        INFO PPDB <?= $tahun->tahun_ajaran; ?>
                                    <?php else : ?>
                                        Silahkan mengisi dan melengkapi Formulir Pendaftaran Peserta Didik baru
                                    <?php endif; ?>
                                    
                                    </div>
                                    </div>

                                    <?php if (isset($tahun) && !empty($tahun->info_ppdb)) : ?>
                                        <?= $tahun->info_ppdb; ?>
                                    <?php endif; ?>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Kontak Kami</h6>
                                </div>
                                <div class="card-body">
                                  <div class="my-2">Call Center / Whatsapp</div>
                                    <a href="#" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                        <i class="fab fa-whatsapp-square"></i>
                                        </span>
                                        <span class="text"><?php echo get_phone(); ?></span>
                                    </a>
                                    <div class="my-2">Instagram</div>
                                    <a href="#" class="btn btn-danger btn-icon-split">
                                        <span class="icon text-white-50">
                                        <i class="fab fa-instagram"></i>
                                        </span>
                                        <span class="text"><?php echo get_instagram(); ?></span>
                                    </a>
                                    <div class="my-2">E-mail Sekolah</div>
                                    <a href="#" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-envelope"></i>
                                        </span>
                                        <span class="text"><?php echo get_email(); ?></span>
                                    </a>
                                    
                                </div>
                            </div>

                        </div>

                    </div>
          
          

          </div>

          <!-- Content Row -->
          

        </div>
        <!-- /.container-fluid -->

       