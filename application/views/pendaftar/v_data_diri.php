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
                        <h6 class="m-0 font-weight-bold text-primary">Silahkan Mengisi Formulir Siswa Baru Dibawah ini!</h6>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo site_url('pendaftar/formulir');?>" id="btnDataDiri" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-user-alt"></i>
                            </span>
                            <span class="text">Data Diri</span>
                        </a>
                        
                        <a href="<?php echo site_url('pendaftar/formulir/alamat');?>" class="btn btn-primary btn-icon-split">
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

          <div class="row">
            
                        <div class="col-lg-6">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Formulir Pendaftaran Siswa Baru (Data diri) </h6>
                                </div>
                                <div class="card-body">
                                <div class="form-container">
                                <form class="form-horizontal" id="formulir" action="<?php echo base_url().'pendaftar/formulir/simpan_diri'?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                    <div class="mb-2">
                                    <div class="mb-0 font-weight-bold text-gray-800">Nama Lengkap</div>
                                    </div>
                                        <input type="text" class="form-control form-control-user" name="nama"  placeholder="Nama Lengkap Peserta..." value="<?php echo $data_peserta->nama; ?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">NISN</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="nisn" placeholder="Masukkan NISN..." value="<?php echo $data_peserta->nisn; ?>" >
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">No. KTP</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="no_ktp" placeholder="No. KTP..." value="<?=$data_peserta->no_ktp;?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">No. KK</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="no_kk" placeholder="No. KK..." value="<?=$data_peserta->no_kk;?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Nama Kepala Keluarga</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="nama_kk" placeholder="No. KK..." value="<?=$data_peserta->nama_kk;?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Asal Sekolah</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="sekolah_asal" placeholder="Asal Sekolah..." value="<?= $data_peserta->sekolah_asal;?>">
                                    </div>
                                    <!-- Edit dulu ini nanti <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Pilihan Jurusan</div>
                                        </div>
                                        <select name="kelas_id" class="form-control">
                                            <?php foreach($kelas->result_array() as $i):
                                                $id = $i['kelas_id'];
                                                $nama = $i['kelas_nama'];
                                                $selected = ($id == $data_peserta->kelas_id) ? 'selected' : '';
                                            ?>
                                                <option value="<?php echo $id; ?>"><?php echo $nama; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div> -->

                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Kewarganegaraan</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="kewarganegaraan" placeholder="Kewarganegaraan..." value="<?= $data_peserta->kewarganegaraan;?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Tempat Lahir</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="tempat_lahir" placeholder="Tempat Lahir..." value="<?=$data_peserta->tempat_lahir;?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Tanggal Lahir</div>
                                        </div>
                                        <input type="text" class="form-control" id="m_datepicker_1" name="tanggal_lahir" placeholder="Hari / Bulan / Tahun" value="<?=$data_peserta->tanggal_lahir;?>">
                                    </div>
                                </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Formulir Pendaftaran Siswa Baru (Data Diri) </h6>
                                </div>
                                <div class="card-body">
                                <div class="form-container">
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Alamat di KTP</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="alamat_ktp" placeholder="Alamat KTP..." value="<?= $data_peserta->alamat_ktp;?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Jenis Kelamin</div>
                                        </div>
                                        <select name="jk" class="form-control">
                                            <option value="P" <?php echo ($data_peserta->jk == 'P') ? 'selected' : ''; ?>>Perempuan</option>
                                            <option value="L" <?php echo ($data_peserta->jk == 'L') ? 'selected' : ''; ?>>Laki-laki</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Anak Ke</div>
                                        </div>
                                        <input type="number" class="form-control form-control-user" name="anak_ke" placeholder="Anak ke..." value="<?=$data_peserta->anak_ke;?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Jumlah Saudara</div>
                                        </div>
                                        <input type="number" class="form-control form-control-user" name="jumlah_saudara" placeholder="Jumlah Saudara..." value="<?=$data_peserta->jumlah_saudara;?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Agama</div>
                                        </div>
                                        <select name="agama" class="form-control">
                                            <option value="1" <?php echo ($data_peserta->agama == '1') ? 'selected' : ''; ?>>Islam</option>
                                            <option value="2" <?php echo ($data_peserta->agama == '2') ? 'selected' : ''; ?>>Kristen</option>
                                            <option value="3" <?php echo ($data_peserta->agama == '3') ? 'selected' : ''; ?>>Katolik</option>
                                            <option value="4" <?php echo ($data_peserta->agama == '4') ? 'selected' : ''; ?>>Hindu</option>
                                            <option value="5" <?php echo ($data_peserta->agama == '5') ? 'selected' : ''; ?>>Budha</option>
                                            <option value="6" <?php echo ($data_peserta->agama == '6') ? 'selected' : ''; ?>>Khonghucu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Cita-Cita</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="cita_cita" placeholder="Cita-cita..." value="<?=$data_peserta->cita_cita;?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Hobi</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="hobi" placeholder="Hobi..." value="<?=$data_peserta->hobi;?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Email</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="email" placeholder="Email..." value="<?= $data_peserta->email;?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">No. HP</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="no_hp" placeholder="No.HP..." value="<?=$data_peserta->no_hp;?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Yang Membiayai Sekolah</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="yang_biaya_sekolah" placeholder="Yang Membiayai Sekolah..." value="<?=$data_peserta->yang_biaya_sekolah;?>">
                                    </div>
                                    <button type="submit" class="btn btn-primary" id="btnDaftar" data-toggle="modal" data-target="#successModal">Simpan Data</button>
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
                                    <H5>Data Diri (<?php echo $data_peserta->nama;?>), Berhasil Disimpan</H5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <a href="<?php echo site_url('pendaftar/formulir/alamat');?>" class="btn btn-primary">Selanjutnya, Data Alamat</a>
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
    // Submit form using AJAX
    $('#m_datepicker_1').datepicker({
    format: 'dd-mm-yyyy', // Sesuaikan dengan format yang diinginkan
    todayHighlight: true,
    autoclose: true
});
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