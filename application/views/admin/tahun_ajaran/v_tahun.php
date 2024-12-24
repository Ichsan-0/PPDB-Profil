
<div id="content">

        
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          
          

        </nav>

        
<div class="container-fluid">

         
            <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="succesAlert">
                        <?php echo $this->session->flashdata('success'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            <?php endif; ?>
            <script>
                setTimeout(function() {
                $('#succesAlert').fadeOut('fast');
                }, 2000); // menghilangkan alert setelah 5 detik
            </script>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?php echo isset($breadcrumb) ? $breadcrumb : ''; ?></h6>
            </div>
            <div class="card-body">
                
            <div class="box-header">
            <a class="btn btn-success btn-flat" href="<?php echo base_url().'admin/ppdb/add_tahun'?>"><span class="fa fa-plus"></span> Tambah Tahun Ajaran</a>
            </div>

                <br>
                <div class="alert alert-info" role="alert" id="infoAlert">
                  Note: Baris Tabel Yang berwarna hijau adalah tahun ajaran yang sedang aktif.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <script>
                  setTimeout(function() {
                    $('#infoAlert').fadeOut('fast');
                  }, 5000); // menghilangkan alert setelah 5 detik
                </script>
                
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
					<th>Tahun Ajaran</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Akhir</th>
                    <th>Jadwal Ujian</th>
                    <th>Biaya Pendaftaran</th>
                    <th style="text-align:center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php foreach ($data->result_array() as $i) :
                    $id=$i['id'];
                    $tahun_ajaran=$i['tahun_ajaran'];
                    $info_ppdb=$i['info_ppdb'];
                    $tgl_mulai=$i['tgl_mulai'];
                    $tgl_akhir=$i['tgl_akhir'];
                    $tgl_ujian=$i['tgl_ujian'];
                    $biaya_pendaftaran=$i['biaya_pendaftaran'];
                    $is_aktif = $i['is_aktif'];
                ?>
                <tr <?php if($is_aktif == 'Y') echo 'style="background-color: lightgreen;"'; ?>>
                    <td><?php echo $tahun_ajaran;?></td>
                    <td><?php echo $tgl_mulai;?></td>
                    <td><?php echo $tgl_akhir;?></td>
                    <td><?php echo $tgl_ujian;?></td>
                    <td><?php echo "Rp. ".$biaya_pendaftaran;?></td>
                <td style="text-align:right;">
                    <a href="<?php echo base_url().'admin/ppdb/edit_tahun/'.$id;?>" class="btn btn-info btn-sm btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-info-circle"></i>
                        </span>
                        <span class="text">edit</span>
                    </a>

                    <?php if($this->m_ppdb->count_tahun($id) == 0) : ?>
                        <a href="#" class="btn btn-danger btn-sm btn-icon-split" data-toggle="modal"  data-target="#ModalHapus<?php echo $id;?>">
                            <span class="icon text-white-50">
                                <i class="fas fa-trash"></i>
                            </span>
                            <span class="text">Hapus</span>
                        </a>
                    <?php else : ?>
                        <a href="#" class="btn btn-danger btn-sm btn-icon-split" data-toggle="modal"  data-target="#ModalPeringatan<?php echo $id;?>">
                            <span class="icon text-white-50">
                                <i class="fas fa-exclamation-triangle"></i>
                            </span>
                            <span class="text">Hapus</span>
                        </a>
                    <?php endif; ?>
                  </td>
                </tr>
				<?php endforeach;?>
                </tbody>
              </table>   
              </div>
            </div>
          </div>

        </div>
    </div>
    <?php foreach ($data->result_array() as $i) :
                    $id=$i['id'];
                    $tahun_ajaran=$i['tahun_ajaran'];
                    $info_ppdb=$i['info_ppdb'];
                    $tgl_mulai=$i['tgl_mulai'];
                    $tgl_akhir=$i['tgl_akhir'];
                    $tgl_ujian=$i['tgl_ujian'];
                    $biaya_pendaftaran=$i['biaya_pendaftaran'];
                ?>
    <!-- Modal Hapus Pengguna -->
    <div class="modal fade" id="ModalHapus<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                <h4 class="modal-title" id="myModalLabel">Hapus Data Tahun Ajaran <b><?php echo $tahun_ajaran; ?></b> </h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('admin/ppdb/hapus_tahun'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <p>Apakah Anda yakin menghapus Tahun Ajaran, termasuk data penting yang mungkin telah disimpan?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-flat" id="btnHapus">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
    <!-- Modal Peringatan -->
    <div class="modal fade" id="ModalPeringatan<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Peringatan</h4>
                </div>
                <div class="modal-body">
                    <p>Data tidak bisa dihapus, karena terdapat data pendaftar didalamnya.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

    <!-- Tambahkan ini sebelum tag penutup </body> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "order": [[0, "desc"]] // Mengubah urutan default kolom tahun_ajaran menjadi descending
        });
    });
    </script>


