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
                        <a href="<?php echo site_url('admin/ppdb/detail/' . $data_peserta->id); ?>" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-user-alt"></i>
                            </span>
                            <span class="text">Data Diri</span>
                        </a>
                        
                        <a href="<?php echo site_url('admin/ppdb/detail_alamat/' . $data_peserta->id); ?>" class="btn btn-success btn-icon-split">
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
            <div class="col-lg-12">
        <!-- Horizontal Table -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Formulir Pendaftaran Siswa Baru (Data diri) </h6>
                    </div>
                    <div class="card-body">
                        <div class="form-container" >
                            <table class="table" style="word-break: break-all; overflow-wrap: break-word;">
                                <tbody>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Status Tempat Tinggal</th>
                                        <td class="text-gray-800"><?php
                                            $status_tt = $data_peserta->status_tt;

                                            if ($status_tt === null) {
                                                echo '-';
                                            } elseif ($status_tt == '1') {
                                                echo 'Tinggal dengan Orang tua / Wali';
                                            } elseif ($status_tt == '2') {
                                                echo 'Ikut Saudara / Kerabat';
                                            } elseif ($status_tt == '3') {
                                                echo 'Asrama Madrasah';
                                            } elseif ($status_tt == '4') {
                                                echo 'Kontrak / Kost';
                                            } elseif ($status_tt == '5') {
                                                echo 'Tinggal di Asrama Pesantren';
                                            } elseif ($status_tt == '6') {
                                                echo 'Panti Asuhan';
                                            } elseif ($status_tt == '7') {
                                                echo 'Rumah Singgah';
                                            } else {
                                                echo 'Lainnya';
                                            }
                                            ?>
                                            </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Alamat Domisili</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->alamat_domisili; ?> </td>
                                    </tr>
                                    <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                                    <!-- Contoh Baris -->
                                    <tr>
                                        <th class="text-gray-800" scope="row">RT</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->rt; ?> </td>
                                        
                                    </tr>
                                    <tr>
                                    <th class="text-gray-800" scope="row">RW</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->rw; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Desa</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->desa; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Kecamatan</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->kecamatan; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Kabupaten / Kota</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->kabupaten_kota; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Provinsi</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->provinsi; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Kode Pos</th>
                                        <td class="text-gray-800"> <?php echo $data_peserta->kode_pos; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Transportasi</th>
                                        <td class="text-gray-800"> 
                                            <?php
                                                $trans = $data_peserta->transportasi;
                                                if ($trans === 'null'){
                                                    echo '-';
                                                } elseif($trans == '1' ){
                                                    echo 'Sepeda';
                                                } elseif($trans == '2'){
                                                    echo 'Sepeda Motor';
                                                } elseif($trans == '3'){
                                                    echo 'Mobil Pribadi';
                                                } elseif($trans == '4'){
                                                    echo 'Antar Jemput Sekolah';
                                                } elseif($trans == '5'){
                                                    echo ' Angkutan Umum';
                                                } else{
                                                    echo 'Lainnya';
                                                }
                                            ?> 
                                        </td>
                                    </tr>
                                    <tr>
                                    <th class="text-gray-800" scope="row">Jarak</th>
                                        <td class="text-gray-800"> 
                                            <?php
                                                $jarak = $data_peserta->jarak;
                                                if ($jarak === 'null'){
                                                    echo '-';
                                                } elseif($jarak == '1' ){
                                                    echo 'Kurang dari 5 km';
                                                } elseif($jarak == '2'){
                                                    echo 'Antara 5 - 10 km';
                                                } elseif($jarak == '3'){
                                                    echo 'Antara 10 - 20 km';
                                                } elseif($jarak == '4'){
                                                    echo 'Antara 21 - 30 km';
                                                } elseif($jarak == '5'){
                                                    echo ' Lebih dari 30 km';
                                                } else{
                                                    echo 'Lainnya';
                                                }
                                            ?> 
                                        </td>
                                    </tr>
                                    <tr>
                                    <th class="text-gray-800" scope="row">Waktu Tempuh</th>
                                        <td class="text-gray-800"> 
                                            <?php
                                                $waktu = $data_peserta->waktu_tempuh;
                                                if ($waktu === 'null'){
                                                    echo '-';
                                                } elseif($waktu == '1' ){
                                                    echo '1 - 10 menit';
                                                } elseif($waktu == '2'){
                                                    echo '10 - 20 menit';
                                                } elseif($waktu == '3'){
                                                    echo '20 - 40 menit';
                                                } elseif($waktu == '4'){
                                                    echo '1- 2 Jam ';
                                                } elseif($waktu == '5'){
                                                    echo ' Lebih dari 2 Jam';
                                                } else{
                                                    echo 'Lainnya';
                                                }
                                            ?> 
                                        </td>
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