<div id="content">
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>
    </nav>
    <div class="container-fluid">
        <form action="<?php echo base_url().'admin/ppdb/update_tahun'?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $tahun->id; ?>">
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
                                            <input type="text" name="tahun_ajaran" class="form-control" id="tahun_ajaran" placeholder="Masukkan Tahun Ajaran. cth : 2024/2025" value="<?php echo $tahun->tahun_ajaran;?>" required>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="m-0 font-weight-bold text-primary">Aktif</p>
                                            <?php if($tahun->is_aktif == 'Y' || $this->m_ppdb->check_is_aktif() == 0) { ?>
                                                <select name="is_aktif" class="form-control" required>
                                                    <option value="Y" selected>Aktif</option>
                                                    <option value="N">Tidak Aktif</option>
                                                </select>
                                            <?php } else { ?>
                                                <select name="is_aktif" class="form-control" required>
                                                    <option value="N">Tidak Aktif</option>
                                                </select>
                                                <p class="text-warning">Note : Silahkan menonaktifkan tahun ajaran yang sedang aktif terlebih dahulu, agar dapat mengaktifkan opsi ini.</p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <p class="m-0 font-weight-bold text-primary">Informasi terkait PPDB</p>
                                    <div class="chart-area">
                                        <textarea class="ckeditor" id="ckeditor" name="info_ppdb" required><?php echo $tahun->info_ppdb; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p class="m-0 font-weight-bold text-primary">Tanggal Mulai</p>
                                    <input type="text" class="form-control datepicker1" name="tanggal_mulai" placeholder="Hari / Bulan / Tahun" value="<?php echo $tahun->tgl_mulai; ?>" required>
                                </div>
                                <div class="form-group">
                                    <p class="m-0 font-weight-bold text-primary">Tanggal Akhir</p>
                                    <input type="text" class="form-control datepicker1" name="tanggal_akhir" placeholder="Hari / Bulan / Tahun" value="<?php echo $tahun->tgl_akhir; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p class="m-0 font-weight-bold text-primary">Jadwal Ujian</p>
                                    <input type="text" class="form-control datepicker1" name="jadwal_ujian" placeholder="Hari / Bulan / Tahun" value="<?php echo $tahun->tgl_ujian; ?>" required>
                                </div>
                                <div class="form-group">
                                    <p class="m-0 font-weight-bold text-primary">Biaya Pendaftaran</p>
                                    <input type="text" id="biaya_pendaftaran" name="biaya_pendaftaran" class="form-control" placeholder="Biaya Pendaftaran" value="<?php echo $tahun->biaya_pendaftaran; ?>" required>
                                    <p style="font-size:13px;">Note : <strong>tidak perlu menambahkan tanda "," </strong>sebagai pemisah nominal pada biaya pendaftaran </p>
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-primary btn-flat"><span class="fa fa-pencil"></span> Simpan data</button>
                                    <a href="<?php echo base_url('admin/ppdb/tahun_ajaran'); ?>" class="btn btn-secondary">Batal</a>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script>

<!-- Initialize datepicker and format input -->
<script>
  $(document).ready(function() {
    // Initialize datepicker
    $('.datepicker1').datepicker({
        format: 'dd-mm-yyyy',
        todayHighlight: true,
        autoclose: true
    });

    // Format biaya pendaftaran input
    $('#biaya_pendaftaran').on('input', function() {
        var value = $(this).val();
        value = value.replace(/[^,\d]/g, '');
        var parts = value.split(',');
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        $(this).val(parts.join(','));
    });
  });
</script>