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
                        <h6 class="m-0 font-weight-bold text-primary">Formulir Siswa Baru (Pendaftar) <strong><?php echo $data_peserta->nama;?></strong></h6>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo site_url('admin/ppdb/detail/' . $data_peserta->id); ?>" id="btnDataDiri" class="btn btn-success btn-icon-split">
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
                        <a href="<?php echo site_url('admin/ppdb/detail_berkas/' . $data_peserta->id);?>" class="btn btn-primary btn-icon-split">
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
            <div class="col-lg-6">
        <!-- Horizontal Table -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Formulir Pendaftaran Siswa Baru (Data diri) </h6>
                    </div>
                    <div class="card-body">
                        <div class="form-container">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Nama Lengkap</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->nama; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">NISN</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->nisn; ?> </td>
                                    </tr>
                                    <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                                    <!-- Contoh Baris -->
                                    <tr>
                                        <th class="text-gray-800" scope="row">No. KTP</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->no_ktp; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">No. KK</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->no_kk; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Nama Kepala Keluarga</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->nama_kk; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Sekolah Asal</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->sekolah_asal; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Kewarganegaraan</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->kewarganegaraan; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Tempat Lahir</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->tempat_lahir; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Tanggal Lahir</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->tgl_lahir; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Alamat KTP</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->alamat_ktp; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Jenis Kelamin</th>
                                        <td class="text-gray-800">
                                            <?php
                                                if ($data_peserta->jk == 'L') {
                                                    echo 'Laki-laki';
                                                } elseif ($data_peserta->jk == 'P') {
                                                    echo 'Perempuan';
                                                } else {
                                                    echo 'Tidak Diketahui';
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Anak Ke</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->anak_ke; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Jumlah Saudara</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->jumlah_saudara; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Agama</th>
                                        <td class="text-gray-800"> 
                                            <?php if ($data_peserta->agama == '1') {
                                                echo 'Islam'; 
                                                } elseif ($data_peserta->agama == '2') {
                                                    echo 'Kristen';
                                                } elseif ($data_peserta->agama == '3') {
                                                    echo 'Katolik';
                                                } elseif ($data_peserta->agama == '4') {
                                                    echo 'Hindu';
                                                } else if ($data_peserta->agama == '5') {
                                                    echo 'Budha';
                                                } elseif ($data_peserta->agama == '6') {
                                                    echo 'Khonghucu';
                                                } else {
                                                    echo 'Tidak Diketahui';
                                                }
                                                ; ?> 
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
        <!-- Horizontal Table -->
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Formulir Pendaftaran Siswa Baru (Data Diri) </h6>
                    </div>
                    <div class="card-body">
                        <div class="form-container">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Cita-Cita</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->cita_cita; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Hobi</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->hobi; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Email</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->email; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">No HP</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->no_hp; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Yang Membiayai Sekolah</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->yang_biaya_sekolah; ?> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Foto & Akun Siswa </h6>
                    </div>
                    <div class="card-body">
                        <div class="form-container" style="text-align: center;">
                            <img style="width: 200px; margin: 0 auto;" src="<?php echo base_url('assets/berkas/' . $data_peserta->foto); ?>" alt="Foto Siswa">
                        </div>
                        <div class="mb-2"></div>
                        <div class="form-container">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Username</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->username; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Password</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->password; ?> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
  
});
</script>