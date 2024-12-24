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
                    <h6 class="m-0 font-weight-bold text-primary">Silahkan Mengisi Formulir Data Orang Tua Siswa Baru Dibawah ini!</h6>
                </div>
                <div class="card-body">
                    <a href="<?php echo site_url('pendaftar/formulir');?>" id="btnDataDiri" class="btn btn-primary btn-icon-split">
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
                    <a href="<?php echo site_url('pendaftar/formulir/data_ortu');?>" class="btn btn-success btn-icon-split">
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
                                    <h6 class="m-0 font-weight-bold text-primary">Formulir Pendaftaran Siswa Baru (Data Ayah) </h6>
                                </div>
                                <div class="card-body">
                                <div class="form-container">
                                <form class="form-horizontal" id="formulir" action="<?php echo base_url().'pendaftar/formulir/simpan_ortu'?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                    <div class="mb-2">
                                    <div class="mb-0 font-weight-bold text-gray-800">Nama Ayah</div>
                                    </div>
                                        <input type="text" class="form-control form-control-user" name="nama_ayah"  placeholder="Nama Ayah..." value="<?php echo $data_ortu->nama_ayah ?? ''; ?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Status Ayah</div>
                                        </div>
                                        <select name="status_ayah" class="form-control">
                                            <option value="1" <?php echo (!empty($data_ortu) && $data_ortu->status_ayah == '1') ? 'selected' : ''; ?>>Masih Hidup</option>
                                            <option value="2" <?php echo (!empty($data_ortu) && $data_ortu->status_ayah == '2') ? 'selected' : ''; ?>>Sudah Meninggal</option>
                                            <option value="3" <?php echo (!empty($data_ortu) && $data_ortu->status_ayah == '3') ? 'selected' : ''; ?>>Tidak diketahui</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">NIK Ayah</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="nik_ayah" placeholder="No.KTP Ayah..." value="<?=$data_ortu->nik_ayah ?? '';?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Alamat / Tempat Tinggal Ayah</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="tinggal_ayah" placeholder="Alamat Ayah..." value="<?=$data_ortu->tinggal_ayah ?? '';?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Tempat Lahir Ayah</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="tempat_ayah" placeholder="Tempat Lahir..." value="<?=$data_ortu->tempat_ayah ?? '';?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Tanggal Lahir Ayah</div>
                                        </div>
											<input type="text" class="form-control" name="tanggal_ayah" id="m_datepicker_1" placeholder="Hari - Bulan - Tahun"value="<?=$data_ortu->tanggal_ayh ?? '';?>">
                                    </div>
                                    <div class="form-group">
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Pendidikan Terakhir Ayah</div>
                                        </div>
                                        <select name="pendidikan_ayah" class="form-control">
                                            <option value="1" <?php echo (!empty($data_ortu) && $data_ortu->pendidikan_ayah == '1') ? 'selected' : ''; ?>>SD / Sederajat</option>
                                            <option value="2" <?php echo (!empty($data_ortu) && $data_ortu->pendidikan_ayah == '2') ? 'selected' : ''; ?>>SMP / Sederajat</option>
                                            <option value="3" <?php echo (!empty($data_ortu) && $data_ortu->pendidikan_ayah == '3') ? 'selected' : ''; ?>>SMA / Sederajat</option>
                                            <option value="4" <?php echo (!empty($data_ortu) && $data_ortu->pendidikan_ayah == '4') ? 'selected' : ''; ?>>D1 / D2 / D3</option>
                                            <option value="5" <?php echo (!empty($data_ortu) && $data_ortu->pendidikan_ayah == '5') ? 'selected' : ''; ?>>D4 / S1</option>
                                            <option value="6" <?php echo (!empty($data_ortu) && $data_ortu->pendidikan_ayah == '6') ? 'selected' : ''; ?>>S2 / S3</option>
                                            <option value="7" <?php echo (!empty($data_ortu) && $data_ortu->pendidikan_ayah == '7') ? 'selected' : ''; ?>>Tidak Bersekolah</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Pekerjaan Ayah</div>
                                        </div>
                                        <select name="pekerjaan_ayah_id" class="form-control">
                                            <?php foreach($pekerjaan->result_array() as $i): 
                                                $id = $i['id'];
                                                $nama = $i['nama_pekerjaan'];
                                                $selected = ($id == $data_ortu->pekerjaan_ayah_id) ? 'selected' : '';
                                            ?>
                                                <option value="<?php echo $id; ?>" <?php echo $selected; ?>><?php echo $nama; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Penghasilan Ayah</div>
                                        </div>
                                        <select name="penghasilan_ayah" class="form-control">
                                            <option value="1" <?php echo (!empty($data_ortu) && $data_ortu->penghasilan_ayah == '1') ? 'selected' : ''; ?>>Kurang dari 500.000</option>
                                            <option value="2" <?php echo (!empty($data_ortu) && $data_ortu->penghasilan_ayah == '2') ? 'selected' : ''; ?>>500.000 - 1.000.000</option>
                                            <option value="3" <?php echo (!empty($data_ortu) && $data_ortu->penghasilan_ayah == '3') ? 'selected' : ''; ?>>1.000.000 - 3.000.000</option>
                                            <option value="4" <?php echo (!empty($data_ortu) && $data_ortu->penghasilan_ayah == '4') ? 'selected' : ''; ?>>3.000.000 - 5.000.000</option>
                                            <option value="5" <?php echo (!empty($data_ortu) && $data_ortu->penghasilan_ayah == '5') ? 'selected' : ''; ?>>5.000.000 - 7.000.000</option>
                                            <option value="6" <?php echo (!empty($data_ortu) && $data_ortu->penghasilan_ayah == '6') ? 'selected' : ''; ?>>Lebih dari 7.000.000</option>
                                            <option value="7" <?php echo (!empty($data_ortu) && $data_ortu->penghasilan_ayah == '7') ? 'selected' : ''; ?>>Tidak Ada Penghasilan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">No. HP Ayah</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="no_hp_ayah" placeholder="No HP Ayah..." value="<?=$data_ortu->no_hp_ayah ?? '';?>">
                                    </div>
                                </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Formulir Pendaftaran Siswa Baru (Data Ibu) </h6>
                                </div>
                                <div class="card-body">
                                <div class="form-container">
                                <div class="form-group">
                                    <div class="mb-2">
                                    <div class="mb-0 font-weight-bold text-gray-800">Nama Ibu</div>
                                    </div>
                                        <input type="text" class="form-control form-control-user" name="nama_ibu"  placeholder="Nama Ibu..." value="<?php echo $data_ortu->nama_ibu ?? ''; ?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Status Ibu</div>
                                        </div>
                                        <select name="status_ibu" class="form-control">
                                            <option value="1" <?php echo (!empty($data_ortu) && $data_ortu->status_ibu == '1') ? 'selected' : ''; ?>>Masih Hidup</option>
                                            <option value="2" <?php echo (!empty($data_ortu) && $data_ortu->status_ibu == '2') ? 'selected' : ''; ?>>Sudah Meninggal</option>
                                            <option value="3" <?php echo (!empty($data_ortu) && $data_ortu->status_ibu == '3') ? 'selected' : ''; ?>>Tidak diketahui</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">NIK Ibu</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="nik_ibu" placeholder="No. KTP Ibu..." value="<?php echo $data_ortu->nik_ibu ?? ''; ?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Alamat / Tempat Tinggal Ibu</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="tinggal_ibu" placeholder="Alamat Ibu..." value="<?php echo $data_ortu->tinggal_ibu ?? ''; ?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Tempat Lahir Ibu</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="tempat_ibu" placeholder="Tempat Lahir..." value="<?=$data_ortu->tempat_ibu ?? '';?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Tanggal Lahir Ibu</div>
                                        </div>
											<input type="text" class="form-control" name="tanggal_ibu" id="m_datepicker_2" placeholder="Hari - Bulan - Tahun"value="<?=$data_ortu->tanggal_ib ?? '';?>">
                                    </div>
                                    <div class="form-group">
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Pendidikan Terakhir Ibu</div>
                                        </div>
                                        <select name="pendidikan_ibu" class="form-control">
                                            <option value="1" <?php echo (!empty($data_ortu) && $data_ortu->pendidikan_ibu == '1') ? 'selected' : ''; ?>>SD / Sederajat</option>
                                            <option value="2" <?php echo (!empty($data_ortu) && $data_ortu->pendidikan_ibu == '2') ? 'selected' : ''; ?>>SMP / Sederajat</option>
                                            <option value="3" <?php echo (!empty($data_ortu) && $data_ortu->pendidikan_ibu == '3') ? 'selected' : ''; ?>>SMA / Sederajat</option>
                                            <option value="4" <?php echo (!empty($data_ortu) && $data_ortu->pendidikan_ibu == '4') ? 'selected' : ''; ?>>D1 / D2 / D3</option>
                                            <option value="5" <?php echo (!empty($data_ortu) && $data_ortu->pendidikan_ibu == '5') ? 'selected' : ''; ?>>D4 / S1</option>
                                            <option value="6" <?php echo (!empty($data_ortu) && $data_ortu->pendidikan_ibu == '6') ? 'selected' : ''; ?>>S2 / S3</option>
                                            <option value="7" <?php echo (!empty($data_ortu) && $data_ortu->pendidikan_ibu == '7') ? 'selected' : ''; ?>>Tidak Bersekolah</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Pekerjaan Ibu</div>
                                        </div>
                                        <select name="pekerjaan_ibu_id" class="form-control">
                                            <?php foreach($pekerjaan->result_array() as $i): 
                                                $id = $i['id'];
                                                $nama = $i['nama_pekerjaan'];
                                                $selected = ($id == $data_ortu->pekerjaan_ibu_id) ? 'selected' : '';
                                            ?>
                                                <option value="<?php echo $id; ?>" <?php echo $selected; ?>><?php echo $nama; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">Penghasilan Ibu</div>
                                        </div>
                                        <select name="penghasilan_ibu" class="form-control">
                                            <option value="1" <?php echo (!empty($data_ortu) && $data_ortu->penghasilan_ibu == '1') ? 'selected' : ''; ?>>Kurang dari 500.000</option>
                                            <option value="2" <?php echo (!empty($data_ortu) && $data_ortu->penghasilan_ibu == '2') ? 'selected' : ''; ?>>500.000 - 1.000.000</option>
                                            <option value="3" <?php echo (!empty($data_ortu) && $data_ortu->penghasilan_ibu == '3') ? 'selected' : ''; ?>>1.000.000 - 3.000.000</option>
                                            <option value="4" <?php echo (!empty($data_ortu) && $data_ortu->penghasilan_ibu == '4') ? 'selected' : ''; ?>>3.000.000 - 5.000.000</option>
                                            <option value="5" <?php echo (!empty($data_ortu) && $data_ortu->penghasilan_ibu == '5') ? 'selected' : ''; ?>>5.000.000 - 7.000.000</option>
                                            <option value="6" <?php echo (!empty($data_ortu) && $data_ortu->penghasilan_ibu == '6') ? 'selected' : ''; ?>>Lebih dari 7.000.000</option>
                                            <option value="7" <?php echo (!empty($data_ortu) && $data_ortu->penghasilan_ibu == '7') ? 'selected' : ''; ?>>Tidak Ada Penghasilan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <div class="mb-0 font-weight-bold text-gray-800">No. HP Ibu</div>
                                        </div>
                                        <input type="text" class="form-control form-control-user" name="no_hp_ibu" placeholder="No HP Ibu..." value="<?=$data_ortu->no_hp_ibu ?? '';?>">
                                    </div>
                                    <button type="submit" class="btn btn-primary" id="btnDaftar">Simpan Data</button>
                                    <a href="<?php echo site_url('pendaftar/formulir');?>" class="btn btn-secondary">Cancel</a>
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
                                    <H5>Data Orang Tua (<?php echo $data_peserta->nama;?>), Berhasil Disimpan</H5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <a href="<?php echo site_url('pendaftar/formulir/data_wali');?>" class="btn btn-primary">Selanjutnya, Data Wali</a>
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
    $('#m_datepicker_2').datepicker({
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
