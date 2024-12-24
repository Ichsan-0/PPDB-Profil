
<div id="content">

        
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          
          

        </nav>
<div class="container-fluid">

         
<div class="row">
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><?php echo isset($breadcrumb2) ? $breadcrumb2 : ''; ?> <?php echo get_nama_sekolah(); ?></h6>
                    </div>
                    <div class="card-body">
                        <div class="box-header">
                            <?php foreach ($brosur as $row): ?>
                                <a href="<?php echo base_url('./assets/images/') . $row['gambar']; ?>" data-lightbox="gallery" data-title="Preview Brosur" class="btn btn-primary btn-flat"><span class="fa fa-eye"></span> Lihat Brosur</a>
                            <?php endforeach; ?>
                            <a href="#" class="btn btn-warning btn-icon-split" data-toggle="modal" data-target="#EditBrosur">
                                <span class="icon text-white-50">
                                    <i class="fas fa-info-circle"></i>
                                </span>
                                <span class="text">Ganti / Upload Brosur Pendaftaran</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><?php echo isset($breadcrumb3) ? $breadcrumb3 : ''; ?> <?php echo get_nama_sekolah(); ?></h6>
                    </div>
                    <div class="card-body">
                        <div class="box-header">
                            <?php foreach ($biaya as $row): ?>
                                <a href="<?php echo base_url('./assets/images/') . $row['gambar']; ?>" data-lightbox="gallery" data-title="Preview Brosur" class="btn btn-primary btn-flat"><span class="fa fa-eye"></span> Lihat Brosur</a>
                            <?php endforeach; ?>
                            <a href="#" class="btn btn-warning btn-icon-split" data-toggle="modal" data-target="#EditBiaya">
                                <span class="icon text-white-50">
                                    <i class="fas fa-info-circle"></i>
                                </span>
                                <span class="text">Ganti / Upload Biaya Pendidikan</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">

         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?php echo isset($breadcrumb) ? $breadcrumb : ''; ?></h6>
            </div>
            <div class="card-body">
                
            <div class="box-header">
              <a href="" class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Tambah Slider</a>
            </div>
                
                <br>
                
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Tanggal Input</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php
					$no=0;
  					foreach ($data->result_array() as $i) :
  					   $no++;
                       $id=$i['id'];
                       $gambar=$i['gambar'];
                       $judul=$i['judul'];
                       $tanggal=$i['tanggal'];
                       $deskripsi=$i['deskripsi'];
                    ?>
                <tr>
                  <td><img src="<?php echo base_url().'assets/images/'.$gambar;?>" style="width:150px;"></td>
                  <td><?php echo $judul;?></td>
                  <td><?php echo $tanggal;?></td>
                  <td><?php echo $deskripsi;?></td>
                  <td style="width:200px;">
                      
                      <a href="#" class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#ModalEdit<?php echo $id;?>">
                        <span class="icon text-white-50">
                          <i class="fas fa-info-circle"></i>
                        </span>
                        <span class="text">Edit</span>
                      </a>
                      
                      <a href="#" class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#ModalHapus<?php echo $id;?>">
                        <span class="icon text-white-50">
                          <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Hapus</span>
                      </a>
                      
                      
                        
                  </td>
                </tr>
				<?php endforeach;?>
                </tbody>
              </table>
                
                  
              </div>
            </div>
          </div>

        </div>
   
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Slider</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/Slider/simpan_slider'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Judul</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="xjudul" class="form-control" id="inputUserName" placeholder="Judul" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                                        <div class="col-sm-12">
                                            <input type="file" name="filefoto" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="inputUserName" class="col-sm-4 control-label">Deskripsi</label>
                                      <div class="col-sm-12">
                                        <textarea class="form-control" rows="3" name="xdeskripsi" placeholder="Deskripsi ..." ></textarea>
                                      </div>
                                  </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


		<?php foreach ($data->result_array() as $i) :
              $id=$i['id'];
              $gambar=$i['gambar'];
              $judul=$i['judul'];
              $deskripsi=$i['deskripsi'];
            ?>
	<!--Modal Edit Pengguna-->
        <div class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Slider</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/slider/update_slider'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Judul</label>
                                <div class="col-sm-12">
                                  <input type="hidden" name="id" value="<?php echo $id;?>">
                                  <input type="text" name="xjudul" class="form-control" value="<?php echo $judul;?>" id="inputUserName" placeholder="Judul">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Deskripsi</label>
                                <div class="col-sm-12">
                                  <textarea class="form-control" rows="3" name="xdeskripsi" placeholder="Deskripsi ..." ><?php echo $deskripsi;?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-6 control-label">Gambar Sebelumnya</label>
                                <div class="col-sm-12">
                                <?php if (!empty($gambar)): ?>
                                      <img src="<?php echo base_url().'assets/images/'.$gambar; ?>" alt="Foto Sebelumnya" class="img-thumbnail" style="max-width: 300px;">
                                  <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="inputUserName" class="col-sm-4 control-label">Ganti Gambar</label>
                                <div class="col-sm-7">
                                  <input type="file" name="filefoto"/>
                                </div>
                            </div>
                            <!-- /.form group -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php endforeach;?>

  <?php foreach ($data->result_array() as $i) :
              $id=$i['id'];
              $gambar=$i['gambar'];
              $judul=$i['judul'];
              $deskripsi=$i['deskripsi'];
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Photo</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/slider/hapus_slider'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							       <input type="hidden" name="id" value="<?php echo $id;?>"/>
                     <input type="hidden" value="<?php echo $gambar;?>" name="gambar">
                     <input type="hidden" value="<?php echo $deskripsi;?>" name="deskripsi">
                            <p>Apakah Anda yakin mau menghapus Posting <b><?php echo $judul;?></b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php endforeach;?>
	
  <!-- HTML Modal Code -->
<div class="modal fade" id="EditBrosur" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Ganti / Upload Brosur Pendaftaran Baru!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" id="uploadForm" action="<?php echo base_url().'admin/slider/ganti_brosur'?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-8 control-label">Ganti Gambar / File</label>
                        <div class="col-sm-7">
                            <input type="file" name="filebrosur" id="filebrosur" onchange="handleFileUpload(this, '.previewImage')"/>
                            <span id="fileError" style="color: red;"></span>
                            <img src="#" alt="Preview" class="previewImage" style="display: none; max-width: 200px; max-height: 200px; padding-top: 20px;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="EditBiaya" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Ganti / Upload Brosur Pendaftaran Baru!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" id="uploadForm" action="<?php echo base_url().'admin/slider/ganti_biaya'?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-8 control-label">Ganti Gambar / File</label>
                        <div class="col-sm-7">
                            <input type="file" name="filebiaya" id="filebiaya" onchange="handleFileUpload(this, '.previewImage')"/>
                            <span id="fileError" style="color: red;"></span>
                            <img src="#" alt="Preview" class="previewImage" style="display: none; max-width: 200px; max-height: 200px; padding-top: 20px;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Fungsi untuk menangani upload file dan menampilkan preview gambar
        function handleFileUpload(input, previewClass) {
            var file = input.files[0];

            if (file) {
                var maxFileSize = 10 * 1024 * 1024; // 1 MB
                var allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'application/pdf']; // Jenis file yang diperbolehkan

                if (allowedTypes.indexOf(file.type) === -1 || file.size > maxFileSize) {
                    // Tampilkan peringatan jika jenis file tidak sesuai atau ukuran file melebihi batas
                    alert('File Wajib Gambar! (.jpg / .png / .jepg / .pdf), Maksimum Ukuran (10 MB).');
                    // Kosongkan input file
                    $(input).val('');
                    // Hapus preview
                    clearPreview(previewClass);
                } else {
                    // Jika ukuran file dan jenis file valid, tampilkan preview (jika diperlukan)
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $(previewClass).attr('src', e.target.result).show();
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        }

        // Memanggil handleFileUpload saat input file berubah
        $('#filebrosur').change(function () {
            handleFileUpload(this, '.previewImage');
        });
        $('#filebiaya').change(function () {
            handleFileUpload(this, '.previewImage');
        });
    });
</script>
