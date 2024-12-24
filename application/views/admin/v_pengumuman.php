
<div id="content">

        
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          
          

        </nav>
        
<div class="container-fluid">

         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?php echo isset($breadcrumb) ? $breadcrumb : ''; ?></h6>
            </div>
            <div class="card-body">
                
            <div class="box-header">
              <a href="" class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Tambah Pengumuman</a>
            </div>
                
                <br>
                
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
					          <th style="width:70px;">#</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th style="width: 100px;">Tanggal Post</th>
                    <th>Author</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
            <?php
              $no=0;
                foreach ($data->result_array() as $i) :
  					   $no++;
                       $id=$i['pengumuman_id'];
                       $judul=$i['pengumuman_judul'];
                       $deskripsi=$i['pengumuman_deskripsi'];
                       $author=$i['pengguna_nama'];
                       $tanggal=$i['tanggal'];
                       $file=$i['pengumuman_file'];

                    ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td>
                    <?php if (!empty($file)): ?>
                      <a href="<?php echo base_url().'admin/pengumuman/download/'.$id;?>"><?php echo $judul;?></a>
                    <?php else : ?>
                      <?= $judul; ?>
                    <?php endif; ?>
                  </td>
                  <td><?php echo $deskripsi;?></td>
                  <td><?php echo $tanggal;?></td>
                  <td><?php echo $author;?></td>
                  <td style="text-align:right;">
                      
                      <a href="#" class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#ModalEdit<?php echo $id;?>">
                        <span class="icon text-white-50">
                          <i class="fas fa-info-circle"></i>
                        </span>
                        <span class="text">Edit</span>
                      </a>
                      <?php if ($file !== null && $file !== ''): ?>
                          <a href="<?php echo base_url('admin/pengumuman/download/'.$id);?>" class="btn btn-primary btn-sm btn-icon-split">
                              <span class="icon text-white-50">
                                  <i class="fas fa-download"></i>
                              </span>
                              <span class="text">File</span>
                          </a>
                      <?php endif; ?>

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
                        <h4 class="modal-title" id="myModalLabel">Add Pengumuman</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/pengumuman/simpan_pengumuman'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Judul</label>
                                <div class="col-sm-12">
                                  <input type="text" name="xjudul" class="form-control" id="inputUserName" placeholder="Judul" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Deskripsi</label>
                                <div class="col-sm-12">
                                  <textarea class="form-control" rows="3" name="xdeskripsi" placeholder="Deskripsi ..." required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="inputUserName" class="col-sm-8 control-label">Tanggal Pengumuman</label>
                              <div class="col-sm-12">
                                <div class="input-group date">
                                  <input type="text" class="form-control" id="m_datepicker_1" name="xtanggal" placeholder="Hari / Bulan / Tahun" required>
                                </div>
                              </div>
                              <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">File</label>
                                <div class="col-sm-12">
                                  <input type="file" name="filepengumuman" accept=".pdf, .jpg, .jpeg, .png">
                                  <p>Note: file harus bertype pdf, jpg atau png ukuran maksimal 2 MB.</p>
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
                $id=$i['pengumuman_id'];
                $judul=$i['pengumuman_judul'];
                $deskripsi=$i['pengumuman_deskripsi'];
                $author=$i['pengguna_nama'];
                $file=$i['pengumuman_file'];
                $tanggal=$i['tanggal'];
            ?>
	<!--Modal Edit Pengguna-->
        <div class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Pengumuman</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/pengumuman/update_pengumuman'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Judul</label>
                                <div class="col-sm-12">
                                  <input type="hidden" name="pengumuman_id" value="<?php echo $id;?>">
                                  <input type="text" name="xjudul" class="form-control" value="<?php echo $judul;?>" id="inputUserName" placeholder="Judul" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Deskripsi</label>
                                <div class="col-sm-12">
                                  <textarea class="form-control" rows="3" name="xdeskripsi" placeholder="Deskripsi ..." required><?php echo $deskripsi;?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="inputUserName" class="col-sm-8 control-label">Tanggal Pengumuman</label>
                              <div class="col-sm-12">
                                <div class="input-group date">
                                  <input type="text" class="form-control" id="edit_tanggal_<?= $id;?>" name="xtanggal" placeholder="Hari / Bulan / Tahun"  value="<?php echo $tanggal;?>">
                                </div>
                              </div>
                              <!-- /.input group -->
                            </div>
                            <div class="form-group">
                              <label for="inputUserName" class="col-sm-4 control-label">
                                  <?php if (!empty($file)): ?>
                                      <strong>Ganti File</strong>
                                  <?php else: ?>
                                      Upload File
                                  <?php endif; ?>
                              </label>
                                <div class="col-sm-12">
                                  <input type="file" name="filepengumuman" accept=".pdf, .jpg, .jpeg, .png">
                                  <p><?php if (!empty($file)): ?>
                                      <strong>Note: file Sudah ada</strong> jika diganti,harus bertipe pdf. ukuran maksimal 2 MB.
                                  <?php else: ?>
                                    Note: file harus bertipe pdf. ukuran maksimal 2 MB.
                                  <?php endif; ?></p>
                                </div>
                            </div>
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
                $id=$i['pengumuman_id'];
                $judul=$i['pengumuman_judul'];
                $deskripsi=$i['pengumuman_deskripsi'];
                $author=$i['pengumuman_author'];
                $tanggal=$i['tanggal'];
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Pengumuman</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/pengumuman/hapus_pengumuman'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							<input type="hidden" name="pengumuman_id" value="<?php echo $id;?>"/>
                            <p>Apakah Anda yakin mau menghapus pengumuman <b><?php echo $judul;?></b> ?</p>

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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script>
  <script>
     $(document).ready(function() {
      // Submit form using AJAX
      $('#dataTable').DataTable({
        "order": [[0, 'desc']] // Mengurutkan kolom pertama secara descending
      });

      $('#m_datepicker_1').datepicker({
      format: 'dd-mm-yyyy', // Sesuaikan dengan format yang diinginkan
      todayHighlight: true,
      autoclose: true
    });

    <?php foreach ($data->result_array() as $i) : ?>
      $('#edit_tanggal_<?php echo $i['pengumuman_id']; ?>').datepicker({
          format: 'dd-mm-yyyy',
          todayHighlight: true,
          autoclose: true
      }).on('change', function() {
          var selectedDate = $(this).datepicker('getDate');
          if (selectedDate === null) {
              alert('Format tanggal tidak valid. Gunakan format dd-mm-yyyy.');
              $(this).val(''); // Reset nilai input jika format tidak valid
          }
      });
    <?php endforeach; ?>
    // Menggunakan event onchange untuk memeriksa file setelah dipilih
    function validateFileType(input) {
        var allowedTypes = ['application/pdf', 'image/jpeg', 'image/png'];

        // Memeriksa tipe file
        if (input.files.length > 0 && allowedTypes.indexOf(input.files[0].type) === -1) {
            alert('Tipe file tidak diizinkan. Pilih file dengan tipe .pdf, .jpg, atau .png.');
            // Menghapus nilai file yang dipilih (opsional)
            input.value = '';
        }
    }

    document.querySelectorAll('input[name="filepengumuman"]').forEach(function(input) {
        input.addEventListener('change', function() {
            validateFileType(this);
        });
    });
  });
</script>