
<div id="content">

        
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          
          

        </nav>
        
        <div class="container-fluid">

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
                    <h6 class="m-0 font-weight-bold text-primary"><?php echo($breadcrumb) ; ?></h6>
                </div>
                <form action="<?php echo base_url('admin/profil_sekolah/edit_sambutan'); ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <textarea class="ckeditor" id="ckeditor" name="isi_tulisan" required><?php echo $data_sekolah['isi_tulisan']; ?></textarea>
                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Foto Kepala Sekolah</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="file_foto">Ganti Foto</label>
                        <input type="file" class="form-control" id="file_foto" name="file_foto">
                        <div style="margin: 20px 0;">
                            <img src="<?php echo base_url('style/img/' . $data_sekolah['file_foto']); ?>" class="img-fluid" alt="Preview Foto" style="width: 200px;">
                        </div>
                    </div>
                </div>
        </div>
        
    </div>
</div>
