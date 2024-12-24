<div id="content">

        
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          
          

        </nav>
        

          <!-- Content Row -->
          <div class="container-fluid">

          <div class="row">
            <div class="col-lg-12">
                    
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Formulir Siswa Baru (Pendaftar) <strong><?php echo $data_peserta->nama;?></strong></h6>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo site_url('admin/ppdb/detail/' . $data_peserta->id); ?>" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-user-alt"></i>
                            </span>
                            <span class="text">Data Diri</span>
                        </a>
                        
                        <a href="<?php echo site_url('admin/ppdb/detail_alamat/' . $data_peserta->id); ?>" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-map"></i>
                            </span>
                            <span class="text">Data Alamat</span>
                        </a>
                        
                        <a href="<?php echo site_url('admin/ppdb/detail_ortu/' . $data_peserta->id);?>" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-user-friends"></i>
                            </span>
                            <span class="text">Data Orang tua</span>
                        </a>
                        
                        <a href="<?php echo site_url('admin/ppdb/detail_wali/' . $data_peserta->id);?>" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-flag"></i>
                            </span>
                            <span class="text">Data Wali Siswa</span>
                        </a>
                        <a href="<?php echo site_url('admin/ppdb/detail_berkas/' . $data_peserta->id);?>" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-file"></i>
                            </span>
                            <span class="text">Berkas Siswa</span>
                        </a>
                        <a href="<?php echo site_url('admin/ppdb/konfirmasi/' . $data_peserta->id);?>" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">konfirmasi</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>

          <div class="row">
            <div class="col-lg-12">
        <!-- Horizontal Table -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Formulir Pendaftaran Siswa Baru (Data diri) </h6>
                    </div>
                    <div class="card-body">
                    <div class="form-container">
                    <form class="form-horizontal" id="formulir" action="<?php echo base_url().'admin/ppdb/simpan_status'?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $data_peserta->id; ?>">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Preview Pas Photo</div>
                                    </div>
                                    <div class="preview-foto">
                                        <a href="<?php echo base_url('assets/berkas/' . $data_peserta->foto); ?>" data-lightbox="gallery" data-title="Preview Pas Photo">
                                            <img src="<?php echo base_url('assets/berkas/' . $data_peserta->foto); ?>" class="img-fluid" alt="Preview Pas Photo" style="width: 200px;">
                                        </a>
                                    </div>
                                    <div class="mt-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">
                                            <?php
                                               if ($data_peserta->status === null || trim($data_peserta->status) === '') {
                                                echo '<span style="color: blue;">Status Peserta : Sedang diperiksa</span>';
                                            } elseif ($data_peserta->status == 1) {
                                                echo '<span style="color: green;">Status Peserta : Diverifikasi oleh admin</span>';
                                            } elseif ($data_peserta->status == 2) {
                                                echo '<span style="color: red;">Status Peserta : Data ditolak</span>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Status Peserta</div>
                                        <select name="status" class="form-control">
                                            <option value="" <?php echo ($data_peserta->status === null) ? 'selected' : ''; ?>>Sedang diperiksa</option>
                                            <option value="1" <?php echo ($data_peserta->status == 1 ) ? 'selected' : ''; ?>>Diverivikasi oleh admin</option>
                                            <option value="2" <?php echo ($data_peserta->status == 2 ) ? 'selected' : ''; ?>>Data Ditolak</option>
                                            <!-- Tambahkan opsi-opsi lain di sini -->
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Nomor Pendaftaran</div>
                                    </div>
                                    <input type="text" class="form-control form-control-user" name="no_pendaftaran" readonly  value="<?php echo $data_peserta->no_pendaftaran; ?>">
                                </div>
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Nama Lengkap</div>
                                    </div>
                                    <input type="text" class="form-control form-control-user" name="nama" readonly value="<?= $data_peserta->nama; ?>" >
                                </div>
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Nomor Induk Siswa Nasional (NISN)</div>
                                    </div>
                                    <input type="text" class="form-control form-control-user" name="nisn" readonly value="<?= $data_peserta->nisn; ?>" >
                                </div>
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Tempat, Tanggal Lahir</div>
                                    </div>
                                    <input type="text" class="form-control form-control-user" readonly value="<?php echo $data_peserta->tempat_tanggal_lahir; ?>">
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan Status</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
            
        </div>     
    </div>

        <!-- /.container-fluid -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {
    // Submit form using AJAX
        $('#m_datepicker_1').datepicker({
        format: 'dd-mm-yyyy', // Sesuaikan dengan format yang diinginkan
        todayHighlight: true,
        autoclose: true
    });
  
});
</script>