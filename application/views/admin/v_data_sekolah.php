<div id="content">

        
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          
          

        </nav>
        
        <div class="container-fluid">

    <!-- Informasi Halaman Sekolah -->
    
    <!-- Form Edit Data Sekolah -->
    <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><?php echo isset($breadcrumb) ? $breadcrumb : 'Edit Data Sekolah'; ?></h6>
                </div>
                <div class="card-body">
                
                <form action="<?php echo base_url('admin/data_sekolah/edit'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama_sekolah">Nama Sekolah</label>
                            <input type="text" class="form-control" id="name" name="nama_sekolah" value="<?php echo set_value('nama_sekolah', get_settings('nama_sekolah')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="situs_web">Situs Web</label>
                            <input type="url" class="form-control" id="situs_web" name="situs_web" value="<?php echo set_value('situs_web', get_settings('situs_web')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="nomor_telepon">Nomor Telepon</label>
                            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="<?php echo set_value('nomor_telepon', get_settings('nomor_telepon')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo set_value('email', get_settings('email')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo set_value('alamat', get_settings('alamat')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="link_gmaps">Link Google Maps</label>
                            <input type="text" class="form-control" id="gmaps" name="gmaps" value="<?php echo set_value('gmaps', get_settings('gmaps')); ?>">
                            <small class="form-text text-muted"><a href="<?php echo base_url('assets/files/TUTORIAL MENYALIN LINK GOOGLE MAPS.pdf'); ?>" target="_blank">Klik di sini untuk melihat tutorial, input link gmaps</a></small>
                        </div>
                        <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input type="text" class="form-control" id="instagram" name="instagram" value="<?php echo set_value('instagram', get_settings('instagram')); ?>">
                        <label for="instagram">Facebook</label>
                        <input type="text" class="form-control" id="facebook" name="facebook" value="<?php echo set_value('facebook', get_settings('facebook')); ?>">
                        <label for="instagram">Twitter</label>
                        <input type="text" class="form-control" id="twitter" name="twitter" value="<?php echo set_value('twitter', get_settings('twitter')); ?>">
                        <label for="instagram">Youtube</label>
                        <input type="text" class="form-control" id="youtube" name="youtube" value="<?php echo set_value('youtube', get_settings('youtube')); ?>">
                    </div>
                    <div class="form-group">
                        <label class="m-0 font-weight-bold text-primary">Informasi halaman depan Website</label>
                        <textarea class="ckeditor" id="ckeditor" name="deskripsi" rows="3"><?php echo set_value('deskripsi', get_settings('deskripsi')); ?></textarea>
                    </div>
                
                    
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">logo Sekolah</h6>
                </div>
                <div class="card-body">
                        <div class="form-group">
                            <label class="m-0 font-weight-bold text-primary">Ganti Logo</label>
                            <input type="file" class="form-control" id="school_logo" name="school_logo">
                            <div style="margin: 20px 0;">
                                <img src="<?php echo get_school_logo(); ?>" class="img-fluid" alt="Preview Logo" style="width: 200px;">
                            </div>
                        </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Kop Surat Formulir Pendaftaran</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="m-0 font-weight-bold text-primary">Ganti Kop Surat</label>
                        <input type="file" class="form-control" id="kop_surat" name="kop_surat">
                        <div style="margin: 20px 0;">
                            <img src="<?php echo get_kop_surat(); ?>" class="img-fluid" alt="Preview Logo" style="width: 300px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Informasi Rekening Bank</h6>
                </div>
                <div class="card-body">
                        <div class="form-group">
                        <label for="instagram">Nama Bank</label>
                        <input type="text" class="form-control" id="nama_bank" name="nama_bank" value="<?php echo set_value('nama_bank', get_settings('nama_bank')); ?>">
                            <div class="row">
                                <div class="col-12">
                                    <label for="nomor_rekening">Nomor Rekening</label>
                                    <input type="text" class="form-control" id="no_rekening" name="no_rekening" value="<?php echo set_value('no_rekening', get_settings('no_rekening')); ?>">
                                </div>
                                <div class="col-12">
                                    <label for="nama_pemilik">Nama Pemilik</label>
                                    <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" value="<?php echo set_value('nama_pemilik', get_settings('nama_pemilik')); ?>">
                                </div>
                            </div>
                        </div>
                        
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan semua data</button>
                </div>
    </form>
            </div>
        </div>
        
    </div>
    