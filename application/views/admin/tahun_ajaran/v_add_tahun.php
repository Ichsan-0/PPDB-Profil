<div id="content">
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>
    </nav>
    <div class="container-fluid">
        <form action="<?php echo base_url().'admin/ppdb/simpan_tahun'?>" method="post" enctype="multipart/form-data">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><?php echo isset($breadcrumb) ? $breadcrumb : ''; ?></h6>
                </div>
                <div class="card-body">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="m-0 font-weight-bold text-primary">Tahun Ajaran</p>
                                            <input type="text" name="tahun_ajaran" class="form-control" id="tahun_ajaran" placeholder="Masukkan Tahun Ajaran. cth : 2024/2025" required>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="m-0 font-weight-bold text-primary">Tahun Ajaran Aktif</p>
                                            <?php if($this->m_ppdb->check_is_aktif() > 0) { ?>
                                                <select name="is_aktif" class="form-control" required>
                                                    <option value="N">Tidak Aktif</option>
                                                </select>
                                                <p class="text-warning">Note : Silahkan menonaktifkan tahun ajaran yang sedang aktif terlebih dahulu, agar dapat mengaktifkan opsi ini.</p>
                                            <?php } else { ?>
                                                <select name="is_aktif" class="form-control" required>
                                                    <option value="Y">Aktif</option>
                                                    <option value="N">Tidak Aktif</option>
                                                </select>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <p class="m-0 font-weight-bold text-primary">Informasi terkait PPDB</p>
                                    <div class="chart-area">
                                        <textarea class="ckeditor" id="ckeditor" name="info_ppdb" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                
                                <div class="form-group">
                                    <p class="m-0 font-weight-bold text-primary">Tanggal Mulai</p>
                                    <input type="text" id="m_datepicker_1" name="tanggal_mulai" class="form-control" placeholder="Hari / Bulan / Tahun" required>
                                </div>
                                <div class="form-group">
                                    <p class="m-0 font-weight-bold text-primary">Tanggal Akhir</p>
                                    <input type="text" id="m_datepicker_2" name="tanggal_akhir" class="form-control" placeholder="Hari / Bulan / Tahun" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p class="m-0 font-weight-bold text-primary">Jadwal Ujian</p>
                                    <input type="text" id="m_datepicker_3" name="jadwal_ujian" class="form-control" placeholder="Hari / Bulan / Tahun" required>
                                </div>
                                <div class="form-group">
                                    <p class="m-0 font-weight-bold text-primary">Biaya Pendaftaran</p>
                                    <input type="text" id="biaya_pendaftaran" name="biaya_pendaftaran" class="form-control" placeholder="Biaya Pendaftaran" required>
                                    <p style="font-size:13px;">Note : <strong>tidak perlu menambahkan tanda "," </strong>sebagai pemisah nominal pada biaya pendaftaran </p>
                                </div>

                                <script>
                                document.getElementById('biaya_pendaftaran').addEventListener('input', function (e) {
                                    var value = e.target.value;
                                    value = value.replace(/[^,\d]/g, '');
                                    var parts = value.split(',');
                                    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                                    e.target.value = parts.join(',');
                                });
                                </script>
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-primary btn-flat"><span class="fa fa-pencil"></span> Simpan data</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
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
    
    $('#m_datepicker_2').datepicker({
      format: 'dd-mm-yyyy', // Sesuaikan dengan format yang diinginkan
      todayHighlight: true,
      autoclose: true
    });
    
    $('#m_datepicker_3').datepicker({
      format: 'dd-mm-yyyy', // Sesuaikan dengan format yang diinginkan
      todayHighlight: true,
      autoclose: true
    });
   
  });
</script>
