
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
              <a href="" class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Tambah Agenda</a>
            </div>
                
                <br>
                
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
					          <th>#</th>
                    <th>Agenda</th>
                    <th>Tanggal</th>
                    <th>Tempat</th>
                    <th>Waktu</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php
					$no=0;
  					foreach ($data->result_array() as $i) :
  					   $no++;
                       $agenda_id=$i['agenda_id'];
                       $agenda_nama=$i['agenda_nama'];
                       $agenda_deskripsi=$i['agenda_deskripsi'];
                       $tanggal_mulai=$i['tanggal_mulai'];
                       $tanggal_selesai=$i['tanggal_selesai'];
                       $agenda_tempat=$i['agenda_tempat'];
                       $agenda_waktu=$i['agenda_waktu'];
                       $agenda_keterangan=$i['agenda_keterangan'];
                       $agenda_file=$i['agenda_file'];
                       $agenda_author=$i['agenda_author'];
                       $tanggal=$i['tanggal'];

                    ?>
                <tr>
                  <td><?php echo $tanggal;?></td>
                  <td>
                      <?php if (!empty($agenda_file)): ?>
                          <a href="<?php echo base_url().'admin/agenda/download/'.$agenda_id;?>"><?php echo $agenda_nama;?></a>
                      <?php else: ?>
                          <?php echo $agenda_nama; ?>
                      <?php endif; ?>
                  </td>
                  <td><?php echo $tanggal_mulai.' s/d '.$tanggal_selesai;?></td>
                  <td><?php echo $agenda_tempat;?></td>
                  <td><?php echo $agenda_waktu;?></td>
                  <td style="text-align:right;">
                      
                      <a href="#" class="btn btn-info btn-sm btn-icon-split" data-toggle="modal" data-target="#ModalEdit<?php echo $agenda_id;?>">
                        <span class="icon text-white-50">
                          <i class="fas fa-info-circle"></i>
                        </span>
                        <span class="text">Edit</span>
                      </a>
                      <?php if ($agenda_file !== null && $agenda_file !== ''): ?>
                      <a href="<?php echo base_url().'admin/agenda/download/'.$agenda_id;?>" class="btn btn-primary btn-sm btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-download"></i>
                            </span>
                            <span class="text">File</span>
                        </a>
                      <?php endif; ?>
                      <a href="#" class="btn btn-danger btn-sm btn-icon-split" data-toggle="modal" data-target="#ModalHapus<?php echo $agenda_id;?>">
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
                        <h4 class="modal-title" id="myModalLabel">Add Agenda</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/agenda/simpan_agenda'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama Agenda</label>
                                <div class="col-sm-12">
                                  <input type="text" name="xnama_agenda" class="form-control" id="inputUserName" placeholder="Nama Agenda" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Deskripsi</label>
                                <div class="col-sm-12">
                                  <textarea class="form-control" rows="4" name="xdeskripsi" placeholder="Deskripsi ..." ></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                              <label for="inputUserName" class="col-sm-4 control-label">Tanggal Mulai</label>
                              <div class="col-sm-12">
                                <div class="input-group date">
                                  <input type="text" class="form-control" id="m_datepicker_1" name="xmulai" placeholder="Hari / Bulan / Tahun" >
                                </div>
                              </div>
                              <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- Date range -->
                            <div class="form-group">
                             <label for="inputUserName" class="col-sm-4 control-label">Tanggal Selesai</label>
                              <div class="col-sm-12">
                                <div class="input-group date">
                                  
                                <input type="text" class="form-control" id="m_datepicker_2" name="xselesai" placeholder="Hari / Bulan / Tahun" >
                                </div>
                              </div>
                              <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Tempat</label>
                                <div class="col-sm-12">
                                  <input type="text" name="xtempat" class="form-control" id="inputUserName" placeholder="Tempat" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Waktu</label>
                                <div class="col-sm-12">
                                    <input type="text" name="xwaktu" class="form-control" id="inputUserName" placeholder="Contoh: 10.30-11.00 WIB" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Keterangan</label>
                                <div class="col-sm-12">
                                  <textarea class="form-control" name="xketerangan" rows="2" placeholder="Keterangan ..."></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">File</label>
                                <div class="col-sm-12">
                                  <input type="file" name="fileagenda" accept=".pdf, .jpg, .jpeg, .png">
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
              $agenda_id=$i['agenda_id'];
              $agenda_nama=$i['agenda_nama'];
              $agenda_deskripsi=$i['agenda_deskripsi'];
              $tanggal_mulai=$i['tanggal_mulai'];
              $tanggal_selesai=$i['tanggal_selesai'];
              $agenda_tempat=$i['agenda_tempat'];
              $agenda_waktu=$i['agenda_waktu'];
              $agenda_keterangan=$i['agenda_keterangan'];
              $agenda_author=$i['agenda_author'];
              $agenda_file=$i['agenda_file'];
              $tangal=$i['tanggal'];
            ?>
	<!--Modal Edit Pengguna-->
        <div class="modal fade" id="ModalEdit<?php echo $agenda_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Agenda</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/agenda/update_agenda'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama Agenda</label>
                                <div class="col-sm-12">
                                  <input type="hidden" name="agenda_id" value="<?php echo $agenda_id;?>">
                                  <input type="text" name="xnama_agenda" class="form-control" value="<?php echo $agenda_nama;?>" id="inputUserName" placeholder="Nama Agenda" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Deskripsi</label>
                                <div class="col-sm-12">
                                  <textarea class="form-control" rows="4" name="xdeskripsi" placeholder="Deskripsi ..." ><?php echo $agenda_deskripsi;?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                              <label for="inputUserName" class="col-sm-4 control-label">Tanggal Mulai</label>
                              <div class="col-sm-12">
                                  <div class="input-group date">
                                      <input type="text" class="form-control" id="edit_mulai_<?php echo $agenda_id; ?>" name="xmulai" placeholder="Hari / Bulan / Tahun" value="<?php echo $tanggal_mulai; ?>">
                                  </div>
                              </div>
                              <!-- /.input group -->
                          </div>
                          <!-- /.form group -->

                          <!-- Date range -->
                          <div class="form-group">
                              <label for="inputUserName" class="col-sm-4 control-label">Selesai</label>
                              <div class="col-sm-12">
                                  <div class="input-group date">
                                      <input type="text" class="form-control" id="edit_selesai_<?php echo $agenda_id; ?>" name="xselesai" placeholder="Hari / Bulan / Tahun" value="<?php echo $tanggal_selesai; ?>">
                                  </div>
                              </div>
                              <!-- /.input group -->
                          </div>
                            <!-- /.form group -->
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Tempat</label>
                                <div class="col-sm-12">
                                  <input type="text" name="xtempat" class="form-control" value="<?php echo $agenda_tempat;?>" id="inputUserName" placeholder="Tempat" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Waktu</label>
                                <div class="col-sm-12">
                                    <input type="text" name="xwaktu" class="form-control" value="<?php echo $agenda_waktu;?>" id="inputUserName" placeholder="Contoh: 10.30-11.00 WIB" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Keterangan</label>
                                <div class="col-sm-12">
                                  <textarea class="form-control" name="xketerangan" rows="2" placeholder="Keterangan ..."><?php echo $agenda_keterangan;?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="inputUserName" class="col-sm-4 control-label">
                                  <?php if (!empty($agenda_file)): ?>
                                      <strong>Ganti File</strong>
                                  <?php else: ?>
                                      Upload File
                                  <?php endif; ?>
                              </label>
                                <div class="col-sm-12">
                                  <input type="file" name="agenda_file" accept=".pdf, .jpg, .jpeg, .png">
                                  <p><?php if (!empty($agenda_file)): ?>
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
              $agenda_id=$i['agenda_id'];
              $agenda_nama=$i['agenda_nama'];
              $agenda_deskripsi=$i['agenda_deskripsi'];
              $agenda_mulai=$i['agenda_mulai'];
              $agenda_selesai=$i['agenda_selesai'];
              $agenda_tempat=$i['agenda_tempat'];
              $agenda_waktu=$i['agenda_waktu'];
              $agenda_keterangan=$i['agenda_keterangan'];
              $agenda_author=$i['agenda_author'];
              $agenda_file=$i['agenda_file'];
              $tangal=$i['tanggal'];
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $agenda_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Agenda</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/agenda/hapus_agenda'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							<input type="hidden" name="agenda_id" value="<?php echo $agenda_id;?>"/>
                            <p>Apakah Anda yakin mau menghapus Pengguna <b><?php echo $agenda_nama;?></b> ?</p>

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
    $('#m_datepicker_2').datepicker({
        format: 'dd-mm-yyyy', // Sesuaikan dengan format yang diinginkan
        todayHighlight: true,
        autoclose: true
    });

    <?php foreach ($data->result_array() as $i) : ?>
        $('#edit_mulai_<?php echo $i['agenda_id']; ?>').datepicker({
            format: 'dd-mm-yyyy',
            todayHighlight: true,
            autoclose: true
        });

        $('#edit_selesai_<?php echo $i['agenda_id']; ?>').datepicker({
            format: 'dd-mm-yyyy',
            todayHighlight: true,
            autoclose: true
        });
    <?php endforeach; ?>

    // Menggunakan event onchange untuk memeriksa file setelah dipilih
    document.querySelectorAll('input[name="agenda_file"], input[name="fileagenda"]').forEach(function(input) {
        input.addEventListener('change', function() {
            var allowedTypes = ['application/pdf', 'image/jpeg', 'image/png'];

            // Memeriksa tipe file
            if (this.files.length > 0 && allowedTypes.indexOf(this.files[0].type) === -1) {
                alert('Tipe file tidak diizinkan. Pilih file dengan tipe .pdf, .jpg, atau .png.');
                // Menghapus nilai file yang dipilih (opsional)
                this.value = '';
            }
        });
    });
  });
</script>
