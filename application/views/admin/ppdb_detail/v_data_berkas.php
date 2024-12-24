<div id="content">

        
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          
          

        </nav>
        

          <!-- Content Row -->
          <div class="container-fluid">

          <div class="row">
            <div class="col-lg-12">
                    
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Formulir Siswa Baru (Pendaftar) Data Orang tua, <strong><?php echo $data_peserta->nama;?></strong></h6>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo site_url('admin/ppdb/detail/' . $data_peserta->id); ?>" id="btnDataDiri" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-user-alt"></i>
                            </span>
                            <span class="text">Data Diri</span>
                        </a>
                        
                        <a href="<?php echo site_url('admin/ppdb/detail_alamat/' . $data_peserta->id); ?>" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-map"></i>
                            </span>
                            <span class="text">Data Alamat</span>
                        </a>
                        
                        <a href="<?php echo site_url('admin/ppdb/detail_ortu/' . $data_peserta->id);?>" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-user-friends"></i>
                            </span>
                            <span class="text">Data Orang tua</span>
                        </a>
                        
                        <a href="<?php echo site_url('admin/ppdb/detail_wali/' . $data_peserta->id);?>" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-flag"></i>
                            </span>
                            <span class="text">Data Wali Siswa</span>
                        </a>
                        <a href="<?php echo site_url('admin/ppdb/detail_berkas/' . $data_peserta->id);?>" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-file"></i>
                            </span>
                            <span class="text">Berkas Siswa</span>
                        </a>
                        <a href="<?php echo site_url('admin/ppdb/konfirmasi/' . $data_peserta->id);?>" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">konfirmasi</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            
            <div class="col-lg-12">

                <!-- Circle Buttons -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Semua Berkas yang di upload Peserta </h6>
                        
                    </div>
                    <div class="card-body">
                    <div class="form-container">
                    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Preview Biaya Pendaftaran</div>
                                    </div>
                                    <div class="preview-foto">
                                        <a href="<?php echo base_url('assets/berkas/' . $data_peserta->b_pendaftaran); ?>" data-lightbox="gallery" data-title="Preview Biaya Pendaftaran">
                                            <img src="<?php echo base_url('assets/berkas/' . $data_peserta->b_pendaftaran); ?>" class="img-fluid" alt="Preview Biaya Pendaftaran" style="width: 200px;">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Preview Pas Photo</div>
                                    </div>
                                    <div class="preview-foto">
                                        <a href="<?php echo base_url('assets/berkas/' . $data_peserta->foto); ?>" data-lightbox="gallery" data-title="Preview Pas Photo">
                                            <img src="<?php echo base_url('assets/berkas/' . $data_peserta->foto); ?>" class="img-fluid" alt="Preview Pas Photo" style="width: 200px;">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Preview Kartu Keluarga</div>
                                    </div>
                                    <div class="preview-foto">
                                        <a href="<?php echo base_url('assets/berkas/' . $data_peserta->kk); ?>" data-lightbox="gallery" data-title="Preview Kartu Keluarga">
                                            <img src="<?php echo base_url('assets/berkas/' . $data_peserta->kk); ?>" class="img-fluid" alt="Preview Kartu Keluarga" style="width: 200px;">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Preview Akte Lahir</div>
                                    </div>
                                    <div class="preview-foto">
                                        <a href="<?php echo base_url('assets/berkas/' . $data_peserta->akte); ?>" data-lightbox="gallery" data-title="Preview Akte Lahir">
                                            <img src="<?php echo base_url('assets/berkas/' . $data_peserta->akte); ?>" class="img-fluid" alt="Preview Akte Lahir" style="width: 200px;">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Preview Ijazah / SKL</div>
                                    </div>
                                    <div class="preview-foto">
                                        <a href="<?php echo base_url('assets/berkas/' . $data_peserta->ijazah); ?>" data-lightbox="gallery" data-title="Preview Ijazah / SKL">
                                            <img src="<?php echo base_url('assets/berkas/' . $data_peserta->ijazah); ?>" class="img-fluid" alt="Preview Ijazah / SKL" style="width: 200px;">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">Preview Kartu Indonesia Pintar (KIP)</div>
                                    </div>
                                    <div class="preview-foto">
                                        <a href="<?php echo base_url('assets/berkas/' . $data_peserta->kip); ?>" data-lightbox="gallery" data-title="Preview KIP">
                                            <img src="<?php echo base_url('assets/berkas/' . $data_peserta->kip); ?>" class="img-fluid" alt="Preview KIP" style="width: 200px;">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                        </div>
                        </div>
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
