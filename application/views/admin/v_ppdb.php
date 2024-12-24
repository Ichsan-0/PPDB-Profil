<div id="content">
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>
    </nav>
    <div class="container-fluid">
        <!-- Form untuk memilih tahun ajaran -->
        <form method="GET" action="<?php echo base_url('admin/ppdb'); ?>">
            <div class="form-group">
                <label class="m-0 font-weight-bold text-primary" for="tahun_ajaran">Pilih Tahun Ajaran:</label>
                <select name="tahun_ajaran" id="tahun_ajaran" class="form-control" onchange="this.form.submit()">
                    <option value="">Semua Tahun Ajaran</option>
                    <?php foreach ($tahun->result() as $row) : ?>
                        <option value="<?php echo $row->id; ?>" <?php echo isset($selected_tahun) && $selected_tahun == $row->id ? 'selected' : ''; ?>>
                            <?php echo $row->tahun_ajaran; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </form>
        
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo isset($breadcrumb) ? $breadcrumb : ''; ?></h6>
            </div>
            <div class="card-body">
                <div class="box-header"></div>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>No.Pendaftaran</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Status</th>
                                <th style="text-align:center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data->result_array() as $i) :
                                $id = $i['id'];
                                $foto = $i['foto'];
                                $no_pendaftaran = $i['no_pendaftaran'];
                                $nama = $i['nama'];
                                $jk = $i['jk'];
                                $ortu_id = $i['ortu_id'];
                                $status = $i['status'];
                            ?>
                            <tr>
                                <td><img width="40" height="40" class="img-circle" src="<?php echo base_url().'assets/berkas/'.$foto;?>"></td>
                                <td><?php echo $no_pendaftaran;?></td>
                                <td><?php echo $nama;?></td>
                                <?php if($jk=='L'): ?>
                                    <td>Laki-Laki</td>
                                <?php else: ?>
                                    <td>Perempuan</td>
                                <?php endif; ?>
                                <td>
                                    <?php
                                        if ($status === null || trim($status) === '') {
                                            echo '<span style="color: blue;">Sedang Diperiksa</span>';
                                        } elseif ($status == 1) {
                                            echo '<span style="color: green;">Sudah Diverifikasi</span>';
                                        } elseif ($status == 2) {
                                            echo '<span style="color: red;">Ditolak</span>';
                                        } else {
                                            echo 'Status Tidak Valid';
                                        }
                                    ?>
                                </td>
                                <td style="text-align:right;">
                                    <a href="<?php echo base_url().'admin/ppdb/detail/'.$id;?>" class="btn btn-info btn-sm btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-info-circle"></i>
                                        </span>
                                        <span class="text">detail</span>
                                    </a>
                                    <?php if ($ortu_id !== null && $ortu_id !== 0): ?>
                                        <a href="<?php echo base_url().'admin/ppdb/cetak/'.$id;?>" id="downloadButton" class="btn btn-primary btn-sm btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-download"></i>
                                            </span>
                                            <span class="text">Unduh</span>
                                        </a>
                                    <?php endif; ?>
                                    <a href="#" class="btn btn-danger btn-sm btn-icon-split" data-toggle="modal"  data-target="#ModalHapus<?php echo $id;?>">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Hapus</span>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>   
                </div>
            </div>
        </div>
    </div>
</div>

<?php foreach ($data->result_array() as $i) :
    $id = $i['id'];
    $foto = $i['foto'];
    $no_pendaftaran = $i['no_pendaftaran'];
    $nama = $i['nama'];
    $jk = $i['jk'];
    $status = $i['status'];
?>
<!-- Modal Hapus Pengguna -->
<div class="modal fade" id="ModalHapus<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                <h4 class="modal-title" id="myModalLabel">Hapus Data Pendaftar <b><?php echo $nama; ?></b> </h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url() . 'admin/ppdb/hapus_pendaftar' ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <p>Apakah Anda yakin menghapus data peserta, termasuk data berkas yang mungkin telah diupload ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-flat" id="btnHapus">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
