<div id="content">

        
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          
          

        </nav>
        <div class="container-fluid"> 

        <div class="row">
            
            <div class="col-lg-12">

                <!-- Circle Buttons -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Formulir Pendaftaran </h6>
                        <div class="mb-2"></div>
                        <p class="text-muted">NOTE : * Silahkan download formulir pendaftaran setelah mengisi semua formulir dan mengupload berkas.* </p>
                    </div>
                    <div class="card-body">
                    <div class="form-container">
                    <form class="form-horizontal" id="formulir" 
                        action="<?php echo ($data_peserta->ortu_id && $data_peserta->ortu_id !== '0') 
                            ? base_url().'pendaftar/bukti_daftar/cetak' 
                            : 'javascript:void(0);'; ?>" 
                        method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Preview Pas Photo</div>
                                    </div>
                                    <div class="preview-foto">
                                        <?php if (!empty($foto)): ?>
                                            <img src="<?php echo base_url('assets/berkas/'.$foto); ?>" alt="Foto Sebelumnya" class="img-thumbnail" style="max-width: 200px;">
                                        <?php endif; ?>
                                    </div>
                                    <div class="mt-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">
                                            <?php
                                                if ($data_peserta->status === null) {
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
                                <button type="submit" class="btn btn-primary" onclick="checkOrtu()">Download Formulir Pendaftaran</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>

            </div>
            

        </div>     

</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formulir Pendaftaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Isi modal disini, seperti pesan informasi atau formulir untuk diisi -->
                Silahkan isi dan lengkapi formulir pendaftaran terlebih dahulu.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <!-- Jika diperlukan, Anda dapat menambahkan tombol atau tautan lain di sini -->
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Skrip JavaScript -->
<script>
   function checkOrtu() {
    var ortuId = '<?php echo $data_peserta->ortu_id; ?>';
    var modalId = 'myModal';

    // Check if ortuId is null or 0
    if (!ortuId || ortuId === '0') {
        $('#' + modalId).modal('show');
    } else {
        document.getElementById('formulir').submit();
    }
}

    // Attach the click event to the button
    $('#downloadButton').on('click', function (e) {
        e.preventDefault(); // Prevent the form from submitting directly
        checkOrtu(); // Call your checkOrtu function
    });
</script>
