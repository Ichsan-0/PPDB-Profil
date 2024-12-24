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
                        
                        <a href="<?php echo site_url('admin/ppdb/detail_wali/' . $data_peserta->id);?>" class="btn btn-success btn-icon-split">
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
                        <h6 class="m-0 font-weight-bold text-primary">Formulir Pendaftaran Siswa Baru (Data Wali) </h6>
                    </div>
                    <div class="card-body">
                        <div class="form-container">
                            <table class="table"  style="word-break: break-all; overflow-wrap: break-word;">
                                <tbody>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Nama Wali</th>
                                        <td class="text-gray-800"> <?php echo $data_ortu->nama_wali ?? ''; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Status wali</th>
                                        <td class="text-gray-800"> <?php 
                                        $status_a = $data_ortu->status_wali ?? '';
                                        if($status_a === 'null'){
                                            echo 'Belum dipilih';
                                        } elseif($status_a == '1'){
                                            echo 'Masih Hidup';
                                        } elseif($status_a == '2'){
                                            echo 'Sudah Meninggal';
                                        } elseif($status_a == '3') {
                                            echo 'Tidak diketahui';
                                        } else {

                                        }
                                        ?> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">NIK wali</th>
                                        <td class="text-gray-800"> <?php echo $data_ortu->nik_wali ?? ''; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Alamat wali</th>
                                        <td class="text-gray-800 "> <?php echo $data_ortu->tinggal_wali ?? ''; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Tempat Lahir wali</th>
                                        <td class="text-gray-800"> <?php echo $data_ortu->tempat_wali ?? ''; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Tanggal Lahir wali</th>
                                        <td class="text-gray-800"> <?php echo $data_ortu->tgl_wali ?? ''; ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Pendidikan wali</th>
                                        <td class="text-gray-800"> <?php $pa = $data_ortu->pendidikan_wali ??'';
                                            if($pa === 'null'){
                                                echo 'Belum Dipilih';
                                            } elseif ($pa == '1'){
                                                echo 'SD / Sederajat';
                                            } elseif ($pa == '2'){
                                                echo 'SMP / Sederajat';
                                            } elseif ($pa == '3'){
                                                echo 'SMA / Sederajat';
                                            } elseif ($pa == '4'){
                                                echo 'D1 / D2 / D3';
                                            } elseif ($pa == '5'){
                                                echo 'D4 / S1';
                                            } elseif($pa == '6'){
                                                echo 'S2 / S3';
                                            } else {
                                                echo 'Tidak Bersekolah';
                                            }
                                        ?> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Pekerjaan wali</th>
                                        <td class="text-gray-800"> 
                                            <?php
                                            $pekerjaan_id_wali = $data_ortu->pekerjaan_wali_id ?? '';
                                            foreach ($kerja as $pekerjaan) {
                                                if ($pekerjaan['id'] == $pekerjaan_id_wali) {
                                                    echo $pekerjaan['nama_pekerjaan'];
                                                    break;
                                                }
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">Penghasilan wali</th>
                                        <td class="text-gray-800"> <?php 
                                        $penghasilan_wali = $data_ortu->penghasilan_wali ?? '';
                                        if ($penghasilan_wali === 'null'){
                                            echo 'Belum Dipilih';
                                        }elseif ($penghasilan_wali == '1'){
                                            echo 'Kurang dari 500.000';
                                        } elseif ($penghasilan_wali == '2'){
                                            echo '500.000 - 1.000.000';
                                        } elseif ($penghasilan_wali == '3'){
                                            echo '1.000.000 - 3.000.000';
                                        } elseif ($penghasilan_wali == '4'){
                                            echo '3.000.000 - 5.000.000';
                                        } elseif ($penghasilan_wali == '5'){
                                            echo '5.000.000 - 7.000.000';
                                        } elseif ($penghasilan_wali == '6'){
                                            echo 'Lebih dari 7.000.000';
                                        } else { echo 'Tidak ada Penghasilan';}
                                        ?> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-gray-800" scope="row">No. Hp wali</th>
                                        <td class="text-gray-800"> <?php echo $data_ortu->no_hp_wali ?? ''; ?> </td>
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