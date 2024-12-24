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
                    <h6 class="m-0 font-weight-bold text-primary">Silahkan Mengisi Formulir Data Alamat Siswa Baru Dibawah ini!</h6>
                </div>
                <div class="card-body">
                    <a href="<?= site_url('pendaftar/formulir');?>" id="btnDataDiri" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-user-alt"></i>
                        </span>
                        <span class="text">Data Diri</span>
                    </a>
                    <a href="<?php echo site_url('pendaftar/formulir/alamat');?>" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                        <i class="fas fa-map"></i>
                        </span>
                        <span class="text">Data Alamat</span>
                    </a>
                    <a href="<?php echo site_url('pendaftar/formulir/data_ortu');?>" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                        <i class="fas fa-user-friends"></i>
                        </span>
                        <span class="text">Data Orang tua</span>
                    </a>
                    <a href="<?php echo site_url('pendaftar/formulir/data_wali');?>" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-flag"></i>
                        </span>
                        <span class="text">Data Wali Siswa</span>
                    </a>
                    <div class="mb-2"></div>
                        <p class="text-muted">NOTE : * Jangan lupa untuk menekan tombol <b>Simpan Data</b> di bagian bawah setelah mengisi formulir , pada setiap bagian formulir. * </p>
                    
                </div>
            </div>

            </div>
            </div>

            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">

            
                        <div class="col-lg-12">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Formulir Pendaftaran Siswa Baru (Data Alamat) </h6>
                                </div>
                                <div class="card-body">
                                <div class="form-container">
                                <form class="form-horizontal" id="formulir" action="<?php echo base_url().'pendaftar/formulir/simpan_alamat'?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                    <div class="mb-2">
                                    <div class="mb-0 font-weight-bold text-gray-800">Status Tempat Tinggal</div>
                                    </div>
                                    <select name="status_tt" class="form-control">
                                            <option value="1" <?php echo ($data_peserta->status_tt == '1') ? 'selected' : ''; ?>>Tinggal dengan Orangtua/Wali</option>
                                            <option value="2" <?php echo ($data_peserta->status_tt == '2') ? 'selected' : ''; ?>>Ikut Saudara/Kerabat</option>
                                            <option value="3" <?php echo ($data_peserta->status_tt == '3') ? 'selected' : ''; ?>>Asrama Madrasah</option>
                                            <option value="4" <?php echo ($data_peserta->status_tt == '4') ? 'selected' : ''; ?>>Kontrak/Kost</option>
                                            <option value="5" <?php echo ($data_peserta->status_tt == '5') ? 'selected' : ''; ?>>Tinggal di Asrama Pesantren</option>
                                            <option value="6" <?php echo ($data_peserta->status_tt == '6') ? 'selected' : ''; ?>>Panti Asuhan</option>
                                            <option value="7" <?php echo ($data_peserta->status_tt == '7') ? 'selected' : ''; ?>>Rumah Singgah</option>
                                            <option value="8" <?php echo ($data_peserta->status_tt == '8') ? 'selected' : ''; ?>>Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                    <div class="mb-2">
                                        <div class="mb-0 font-weight-bold text-gray-800">RT / RW</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" class="form-control form-control-user" name="rt" placeholder="Masukkan RT..." value="<?php echo $data_peserta->rt; ?>">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" class="form-control form-control-user" name="rw" placeholder="Masukkan RW..." value="<?php echo $data_peserta->rw; ?>">
                                        </div>
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Desa</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="desa" placeholder="Masukkan Desa..." value="<?=$data_peserta->desa;?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Kecamatan</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="kecamatan" placeholder="No. Kecamatan..." value="<?=$data_peserta->kecamatan;?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">kabupaten / Kota</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="kabupaten_kota" placeholder="No. Kabupaten / Kota..." value="<?=$data_peserta->kabupaten_kota;?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Provinsi</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="provinsi" placeholder="Provinsi..." value="<?= $data_peserta->provinsi;?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Kode Pos</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="kode_pos" placeholder="Kode Pos..." value="<?= $data_peserta->kode_pos;?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Transportasi</div>
                                        </div>
                                        <select name="transportasi" class="form-control">
                                            <option value="1" <?php echo ($data_peserta->transportasi == '1') ? 'selected' : ''; ?>>Sepeda</option>
                                            <option value="2" <?php echo ($data_peserta->transportasi == '2') ? 'selected' : ''; ?>>Sepeda Motor</option>
                                            <option value="3" <?php echo ($data_peserta->transportasi == '3') ? 'selected' : ''; ?>>Mobil Pribadi</option>
                                            <option value="4" <?php echo ($data_peserta->transportasi == '4') ? 'selected' : ''; ?>>Antar Jemput Sekolah</option>
                                            <option value="5" <?php echo ($data_peserta->transportasi == '5') ? 'selected' : ''; ?>>Angkutan Umum</option>
                                            <option value="6" <?php echo ($data_peserta->transportasi == '6') ? 'selected' : ''; ?>>Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Jarak Rumah Ke Sekolah</div>
                                        </div>
                                        <select name="jarak" class="form-control">
                                            <option value="1" <?php echo ($data_peserta->jarak == '1') ? 'selected' : ''; ?>>Kurang dari 5 km</option>
                                            <option value="2" <?php echo ($data_peserta->jarak == '2') ? 'selected' : ''; ?>>Antara 5-10 km</option>
                                            <option value="3" <?php echo ($data_peserta->jarak == '3') ? 'selected' : ''; ?>>Antara 11-20 km</option>
                                            <option value="4" <?php echo ($data_peserta->jarak == '4') ? 'selected' : ''; ?>>Antara 21-30</option>
                                            <option value="5" <?php echo ($data_peserta->jarak == '5') ? 'selected' : ''; ?>>Lebih dari 30 km</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Waktu Tempuh</div>
                                        </div>
                                        <select name="waktu_tempuh" class="form-control">
                                            <option value="1" <?php echo ($data_peserta->waktu_tempuh == '1') ? 'selected' : ''; ?>>1 - 10 menit</option>
                                            <option value="2" <?php echo ($data_peserta->waktu_tempuh == '2') ? 'selected' : ''; ?>>10 - 20 menit</option>
                                            <option value="3" <?php echo ($data_peserta->waktu_tempuh == '3') ? 'selected' : ''; ?>>20 - 40 menit</option>
                                            <option value="4" <?php echo ($data_peserta->waktu_tempuh == '4') ? 'selected' : ''; ?>>1 - 2 Jam</option>
                                            <option value="5" <?php echo ($data_peserta->waktu_tempuh == '5') ? 'selected' : ''; ?>>> 2 jam</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary" id="btnDaftar">Simpan Data</button>
                                    <a href="<?php echo site_url('pendaftar/dashboard');?>" class="btn btn-secondary">Cancel</a>
                                    </form>
                                </div>
                                </div>
                            </div>

                        </div>
                        
                        

                    </div>     
          

          </div>

          <!-- Content Row -->
          <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="successModalLabel">Sukses! Data Berhasil disimpan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <H5>Data Alamat (<?php echo $data_peserta->nama;?>), Berhasil Disimpan</H5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <a href="<?php echo site_url('pendaftar/formulir/data_ortu');?>" class="btn btn-primary">Selanjutnya, Data Orang Tua</a>
                                </div>
                            </div>
                        </div>
                    </div>     

        </div>
        <!-- /.container-fluid -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {
    $("#formulir").submit(function(event) {
        // Prevent the default form submission
        event.preventDefault();

        // Ambil URL dari atribut action formulir
        var url = $(this).attr("action");

        // Ambil data formulir
        var formData = $(this).serialize();

        // Kirim formulir ke server menggunakan AJAX
        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            success: function(response) {
                // Tampilkan modal jika respons dari server sukses
                $("#successModal").modal("show");
            },
            error: function(error) {
                // Handle error jika ada masalah dengan pengiriman formulir
                console.log(error);
            }
        });
    });
});
</script>