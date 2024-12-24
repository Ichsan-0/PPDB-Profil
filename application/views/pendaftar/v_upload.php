<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

    <!-- Link JavaScript Lightbox2 dari CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<div id="content">

        
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          
          

        </nav>
        <div class="container-fluid"> 

        <div class="row">
            
            <div class="col-lg-12">
            <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            <i class="fas fa-exclamation-triangle text-warning"></i> Penting: Konfirmasi Biaya Pendaftaran
        </h6>
    </div>
    <div class="card-body">
    <?php if (isset($tahun) && !empty($tahun->biaya_pendaftaran)) : ?>
        <p>
            <i class="fas fa-info-circle"></i> Harap diperhatikan bahwa Anda diharapkan untuk melakukan biaya pendaftaran sebesar <strong>Rp. <?= $tahun->biaya_pendaftaran; ?></strong> melalui transfer bank ke nomor rekening yang telah ditentukan <strong>bank <?= get_nama_bank(); ?> ke nomor rekening : <?= get_rekening(); ?> Atas nama : <?= get_atas_nama(); ?></strong>
        </p>
        <p>Kami mengajak Anda untuk mengisi formulir dengan teliti dan melakukan biaya pendaftaran tepat waktu.</p>
        <p style="font-size: 13px;">
            Abaikan pemberitahuan ini jika telah melakukan pembayaran biaya pendaftaran.
        </p>
    <?php else : ?>
        <p>Silahkan mengisi dan melengkapi formulir pendaftaran.</p>
    <?php endif; ?>
    </div>
</div>


                <!-- Circle Buttons -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Silahkan Lengkapi Semua Berkas </h6>
                        <div class="mb-2"></div>
                        <p class="text-muted">NOTE : * Jangan lupa untuk menekan tombol <b>Simpan Data</b> di bagian bawah setelah mengupload gambar. * </p>
                    </div>
                    <div class="card-body">
                    <div class="form-container">
                    <form class="form-horizontal" id="formulir" action="<?php echo base_url().'pendaftar/upload/simpan_upload'?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Pas Photo</div>
                                    </div>
                                    <input type="file" class="form-control form-control-user" name="foto" >
                                    <div class="mt-1">
                                        <p>File Wajib Gambar! (.jpg / .png / .jepg), Maksimum 1 mb</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Preview Pas Photo</div>
                                    </div>
                                    <div class="preview-foto">
                                    <?php if (!empty($file_data['foto'])) : ?>
                                        <a href="<?php echo base_url('/assets/berkas/' . $file_data['foto']); ?>" data-lightbox="gallery" data-title="Preview Pas Photo">
                                            <img src="<?php echo base_url('/assets/berkas/' . $file_data['foto']); ?>" class="img-fluid" alt="Preview Pas Photo" style="width: 150px;">
                                        </a>
                                    <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Biaya Pendaftaran</div>
                                    </div>
                                    <input type="file" class="form-control form-control-user" name="b_pendaftaran" >
                                    <div class="mt-1">
                                        <p>File Wajib Gambar! (.jpg / .png / .jepg), Maksimum 1 mb</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Preview Biaya Pendaftaran</div>
                                    </div>
                                    <div class="preview-biaya">
                                    <?php if (!empty($file_data['b_pendaftaran'])) : ?>
                                        <a href="<?php echo base_url('/assets/berkas/' . $file_data['b_pendaftaran']); ?>" data-lightbox="gallery" data-title="Preview Biaya Pendaftaran">
                                            <img src="<?php echo base_url('/assets/berkas/' . $file_data['b_pendaftaran']); ?>" class="img-fluid" alt="Preview Biaya Pendaftaran" style="width: 150px;">
                                        </a>
                                    <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Kartu Keluarga(KK)</div>
                                    </div>
                                    <input type="file" class="form-control form-control-user" name="kk" >
                                    <div class="mt-1">
                                        <p>File Wajib Gambar! (.jpg / .png / .jepg), Maksimum 1 mb</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Preview Kartu Keluarga(KK)</div>
                                    </div>
                                    <div class="preview-kk"></div>
                                    <?php if (!empty($file_data['kk'])) : ?>
                                        <a href="<?php echo base_url('/assets/berkas/' . $file_data['kk']); ?>" data-lightbox="gallery" data-title="Preview Kartu Keluarga">
                                        <img src="<?php echo base_url('/assets/berkas/' . $file_data['kk']); ?>" class="img-fluid" alt="Preview Kartu Keluarga" style="width: 150px;">
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Akte Lahir</div>
                                    </div>
                                    <input type="file" class="form-control form-control-user" name="akte" >
                                    <div class="mt-1">
                                        <p>File Wajib Gambar! (.jpg / .png / .jepg), Maksimum 1 mb</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Preview Akte Lahir</div>
                                    </div>
                                    <div class="preview-akte"></div>
                                    <?php if (!empty($file_data['akte'])) : ?>
                                        <a href="<?php echo base_url('/assets/berkas/' . $file_data['akte']); ?>" data-lightbox="gallery" data-title="Preview Kartu Akte Lahir">
                                        <img src="<?php echo base_url('/assets/berkas/' . $file_data['akte']); ?>" class="img-fluid" alt="Preview Akte Lahir" style="width: 150px;">
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Ijazah / SKL</div>
                                    </div>
                                    <input type="file" class="form-control form-control-user" name="ijazah" >
                                    <div class="mt-1">
                                        <p>File Wajib Gambar! (.jpg / .png / .jepg), Maksimum 1 mb</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Preview Ijazah / SKL</div>
                                    </div>
                                    <div class="preview-ijazah"></div>
                                    <?php if (!empty($file_data['ijazah'])) : ?>
                                        <a href="<?php echo base_url('/assets/berkas/' . $file_data['ijazah']); ?>" data-lightbox="gallery" data-title="Preview Ijazah / SKL">
                                        <img src="<?php echo base_url('/assets/berkas/' . $file_data['ijazah']); ?>" class="img-fluid" alt="Preview Ijazah / SKL" style="width: 150px;">
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Kartu Indonesia Pintar(KIP)</div>
                                    </div>
                                    <input type="file" class="form-control form-control-user" name="kip" >
                                    <div class="mt-1">
                                        <p>File Wajib Gambar! (.jpg / .png / .jepg), Maksimum 1 mb</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Preview Kartu Indonesia Pintar(KIP)</div>
                                    </div>
                                    <div class="preview-kip"></div>
                                    <?php if (!empty($file_data['kip'])) : ?>
                                        <a href="<?php echo base_url('/assets/berkas/' . $file_data['kip']); ?>" data-lightbox="gallery" data-title="Preview Kartu Indonesia Pintar">
                                        <img src="<?php echo base_url('/assets/berkas/' . $file_data['kip']); ?>" class="img-fluid" alt="Preview KIP" style="width: 150px;">
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" id="btnDaftar">Simpan Data</button>
                        <a href="<?php echo site_url('pendaftar/upload');?>" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                    </div>
                </div>

            </div>
            

        </div>     


</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    
    $(document).ready(function () {
        // Meng-handle peristiwa pemilihan file untuk input biaya
        $('input[name="foto"]').change(function () {
            handleFileUpload(this, '.preview-foto');
        });

        $('input[name="b_pendaftaran"]').change(function () {
            handleFileUpload(this, '.preview-biaya');
        });

        // Meng-handle peristiwa pemilihan file untuk input kk
        $('input[name="kk"]').change(function () {
            handleFileUpload(this, '.preview-kk');
        });

        // Meng-handle peristiwa pemilihan file untuk input akte
        $('input[name="akte"]').change(function () {
            handleFileUpload(this, '.preview-akte');
        });

        // Meng-handle peristiwa pemilihan file untuk input ijazah
        $('input[name="ijazah"]').change(function () {
            handleFileUpload(this, '.preview-ijazah');
        });

        // Meng-handle peristiwa pemilihan file untuk input kip
        $('input[name="kip"]').change(function () {
            handleFileUpload(this, '.preview-kip');
        });

        // Fungsi untuk menangani upload file dan menampilkan preview gambar
        function handleFileUpload(input, previewClass) {
            var file = input.files[0];

            if (file) {
                var maxFileSize = 1024 * 1024; // 1 MB

                if (file.size > maxFileSize) {
                    // Tampilkan peringatan jika ukuran file melebihi batas
                    alert('File Wajib Gambar! (.jpg / .png / .jepg), Maksimum Ukuran (1 MB).');
                    // Kosongkan input file
                    $(input).val('');
                    // Hapus preview
                    clearPreview(previewClass);
                } else {
                    // Jika ukuran file valid, tampilkan preview (jika diperlukan)
                    previewImage(input, previewClass);
                }
            }
        }

        // Fungsi untuk menampilkan preview gambar
        function previewImage(input, previewClass) {
            var file = input.files[0];

            if (file) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    // Menampilkan gambar di bagian preview dengan batasan ukuran
                    var previewImage = '<a href="' + e.target.result + '" data-lightbox="gallery" data-title="Preview Kartu Akte Lahir">' +
                        '<img src="' + e.target.result + '" class="img-fluid" alt="Preview Akte Lahir" style="width: 150px;"></a>';
                    
                    // Sembunyikan file lama dan tampilkan file baru
                    $(previewClass).html(previewImage);
                }

                reader.readAsDataURL(file);
            }
        }

        // Fungsi untuk menghapus preview
        function clearPreview(previewClass) {
            $(previewClass).html('');
        }
    });
</script>
