<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Cetak</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fff;
        }

        .container {
            margin-top: 40px;
        }

        .logo-container img {
            max-width: 100%;
            height: auto;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .header h2 {
            color: #343a40;
        }

        .content {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: none; /* Remove border */
        }

        .label-colon {
            width: 250px; /* Adjust the width as needed */
            display: inline-block;
            text-align: left;
            margin-right: 10px;
            font-weight: normal; /* Non-bold */
        }

        .data-value {
            display: inline-block;
            margin-bottom: 10px; /* Add some space between rows */
        }

        /* Additional Style for Header */
        .table-header {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <!-- Container untuk Grid System -->
    <div class="container">

        <!-- Logo Yayasan dan Nama Yayasan dalam satu row -->
        <div class="row header">
            <!-- Logo Yayasan -->
            <div class="logo-container col">
                <img src="<?php echo base_url('style/img/kop_surat.jpg'); ?>" alt="Logo Yayasan" class="img-fluid">
            </div>
        </div>

        <!-- Content -->
        <div class="row content">
            <div class="col">
                
                <table>
                    <!-- Header Row -->
                    <tr class="table-header">
                        <td colspan="2"><strong>I. Calon Siswa</strong></td>
                    </tr>

                    <!-- Data Rows -->
                    <tr>
                        <td class="label-colon">No. Pendaftaran</td>
                        <td class="data-value">: <?php echo $data_peserta->no_pendaftaran; ?></td>
                    </tr>
                    <tr>
                        <td class="label-colon">Nama Lengkap</td>
                        <td class="data-value">: <?php echo $data_peserta->nama; ?></td>
                    </tr>
                    <tr>
                        <td class="label-colon">Nomor Induk Siswa (NISN)</td>
                        <td class="data-value">: <?php echo $data_peserta->nisn; ?></td>
                    </tr>
                    <tr>
                        <td class="label-colon">Tempat, Tanggal Lahir</td>
                        <td class="data-value">: <?php echo $data_peserta->tempat_tanggal_lahir; ?></td>
                    </tr>
                    <tr>
                        <td class="label-colon">Alamat</td>
                        <td class="data-value">: <?php echo $data_peserta->alamat_ktp; ?></td>
                    </tr>
                    <tr>
                        <td class="label-colon">Sekolah Asal</td>
                        <td class="data-value">: <?php echo $data_peserta->sekolah_asal; ?></td>
                    </tr>
                    <tr>
                        <td class="label-colon">Email</td>
                        <td class="data-value">: <?php echo $data_peserta->email; ?></td>
                    </tr>
                    <tr>
                        <td class="label-colon">No HP</td>
                        <td class="data-value">: <?php echo $data_peserta->no_hp; ?></td>
                    </tr>
                    <!-- Add more rows for additional fields -->
                    <tr class="table-header">
                    <td colspan="2"><strong>II. Orang Tua / Ayah</strong></td>
                    </tr>
                    <tr>
                        <td class="label-colon">Nama Ayah</td>
                        <td class="data-value">: <?php echo $data_peserta->nama_ayah; ?></td>
                    </tr>
                    <tr>
                        <td class="label-colon">Alamat Ayah</td>
                        <td class="data-value">: <?php echo $data_peserta->tinggal_ayah; ?></td>
                    </tr>
                    <tr>
                        <td class="label-colon">No. Telp / HP Ayah</td>
                        <td class="data-value">: <?php echo $data_peserta->no_hp_ayah; ?></td>
                    </tr>
                    <tr>
                        <td class="label-colon">Pekerjaan Ayah</td>
                        <td class="data-value">: 
                            <?php 
                             foreach ($pekerjaan as $kerjaan) {
                                if ($kerjaan->id == $data_peserta->pekerjaan_ayah_id) {
                                    echo $kerjaan->nama_pekerjaan;
                                    break;
                                }
                            }
                            ?>
                        </td>

                    </tr>
                    <tr>
                        <td class="label-colon">Penghasilan Perbulan Ayah</td>
                        <td class="data-value">: <?php
                            $penghasilan_ayah = $data_peserta->penghasilan_ayah;

                            if ($penghasilan_ayah == 1) {
                                echo 'Kurang dari 500.000';
                            } elseif ($penghasilan_ayah == 2) {
                                echo '500.000 - 1.000.000';
                            } elseif ($penghasilan_ayah == 3) {
                                echo '1.000.000 - 3.000.000';
                            } elseif ($penghasilan_ayah == 4) {
                                echo '3.000.000 - 5.000.000';
                            } elseif ($penghasilan_ayah == 5) {
                                echo '5.000.000 - 7.000.000';
                            } elseif ($penghasilan_ayah == 6) {
                                echo 'Lebih dari 7.000.000';
                            } elseif ($penghasilan_ayah == 7) {
                                echo 'Tidak Ada Penghasilan';
                            } else {
                                // Handle other cases or provide a default value
                                echo 'Tidak diketahui';
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="table-header">
                    <td colspan="2"><strong>III. Orang Tua / Ibu</strong></td>
                    </tr>
                    <tr>
                        <td class="label-colon">Nama Ibu</td>
                        <td class="data-value">: <?php echo $data_peserta->nama_ibu; ?></td>
                    </tr>
                    <tr>
                        <td class="label-colon">Alamat Ibu</td>
                        <td class="data-value">: <?php echo $data_peserta->tinggal_ibu; ?></td>
                    </tr>
                    <tr>
                        <td class="label-colon">No. Telp / HP Ibu</td>
                        <td class="data-value">: <?php echo $data_peserta->no_hp_ibu; ?></td>
                    </tr>
                    <tr>
                        <td class="label-colon">Pekerjaan Ibu</td>
                        <td class="data-value">:
                        <?php 
                             foreach ($pekerjaan as $kerjaan) {
                                if ($kerjaan->id == $data_peserta->pekerjaan_ibu_id) {
                                    echo $kerjaan->nama_pekerjaan;
                                    break;
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-colon">Penghasilan Perbulan Ibu</td>
                        <td class="data-value">:
                            <?php 
                            $penghasilan_ibu = $data_peserta->penghasilan_ibu;
                            if ($penghasilan_ibu == 1) {
                                echo 'Kurang dari 500.000';
                            } elseif ($penghasilan_ibu == 2) {
                                echo '500.000 - 1.000.000';
                            } elseif ($penghasilan_ibu == 3) {
                                echo '1.000.000 - 3.000.000';
                            } elseif ($penghasilan_ibu == 4) {
                                echo '3.000.000 - 5.000.000';
                            } elseif ($penghasilan_ibu == 5) {
                                echo '5.000.000 - 7.000.000';
                            } elseif ($penghasilan_ibu == 6) {
                                echo 'Lebih dari 7.000.000';
                            } elseif ($penghasilan_ibu == 7) {
                                echo 'Tidak Ada Penghasilan';
                            } else {
                                // Handle other cases or provide a default value
                                echo 'Tidak diketahui';
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="table-header">
                        <td colspan="2"><strong>IV. Wali Siswa</strong></td>
                    </tr>
                    <tr>
                        <td class="label-colon">Nama Wali</td>
                        <td class="data-value">: <?php echo $data_peserta->nama_wali; ?></td>
                    </tr>
                    <tr>
                        <td class="label-colon">Alamat Wali</td>
                        <td class="data-value">: <?php echo $data_peserta->tinggal_wali; ?></td>
                    </tr>
                    <tr>
                        <td class="label-colon">No. Telp / HP Wali</td>
                        <td class="data-value">: <?php echo $data_peserta->no_hp_wali; ?></td>
                    </tr>
                    <tr>
                        <td class="label-colon">Pekerjaan Wali</td>
                        <td class="data-value">:
                            <?php 
                             foreach ($pekerjaan as $kerjaan) {
                                if ($kerjaan->id == $data_peserta->pekerjaan_wali_id) {
                                    echo $kerjaan->nama_pekerjaan;
                                    break;
                                }
                            }
                            ?>
                            </td>
                    </tr>
                    <tr>
                        <td class="label-colon">Penghasilan Wali</td>
                        <td class="data-value">:<?php 
                            $penghasilan_wali = $data_peserta->penghasilan_wali;
                            if ($penghasilan_wali == 1) {
                                echo 'Kurang dari 500.000';
                            } elseif ($penghasilan_wali == 2) {
                                echo '500.000 - 1.000.000';
                            } elseif ($penghasilan_wali == 3) {
                                echo '1.000.000 - 3.000.000';
                            } elseif ($penghasilan_wali == 4) {
                                echo '3.000.000 - 5.000.000';
                            } elseif ($penghasilan_wali == 5) {
                                echo '5.000.000 - 7.000.000';
                            } elseif ($penghasilan_wali == 6) {
                                echo 'Lebih dari 7.000.000';
                            } elseif ($penghasilan_wali == 7) {
                                echo 'Tidak Ada Penghasilan';
                            } else {
                                // Handle other cases or provide a default value
                                echo 'Tidak diketahui';
                            }
                            ?>
                            </td>
                    </tr>
                    <tr class="table-header">
                        <td colspan="2"><strong>VI. Kelengkapan Berkas</strong></td>
                    </tr>
                    <tr>
                        <td class="label-colon">Biaya Pendaftaran</td>
                        <td class="data-value">
                        <input type="checkbox" <?php echo (!empty($data_peserta->b_pendaftaran) ? 'checked="checked"' : ''); ?> disabled>
                        <?php echo (!empty($data_peserta->b_pendaftaran) ? '<label for="checkbox">Sudah diupload di website</label>' : '<label for="checkbox">Tidak diupload di website</label>'); ?>
                        </td>
                    </tr>
                    <tr>
                    <td class="label-colon">Kartu Keluarga</td>
                        <td class="data-value">
                        <input type="checkbox" <?php echo (!empty($data_peserta->kk) ? 'checked="checked"' : ''); ?> disabled>
                        <?php echo (!empty($data_peserta->kk) ? '<label for="checkbox">Sudah diupload di website</label>' : '<label for="checkbox">Tidak diupload di website</label>'); ?>
                        </td>
                    </tr>
                    <tr>
                    <td class="label-colon">Akte Lahir</td>
                        <td class="data-value">
                        <input type="checkbox" <?php echo (!empty($data_peserta->akte) ? 'checked="checked"' : ''); ?> disabled>
                        <?php echo (!empty($data_peserta->akte) ? '<label for="checkbox">Sudah diupload di website</label>' : '<label for="checkbox">Tidak diupload di website</label>'); ?>
                        </td>
                    </tr>
                    <tr>
                    <td class="label-colon">Ijazah / SKL</td>
                        <td class="data-value">
                        <input type="checkbox" <?php echo (!empty($data_peserta->ijazah) ? 'checked="checked"' : ''); ?> disabled>
                        <?php echo (!empty($data_peserta->ijazah) ? '<label for="checkbox">Sudah diupload di website</label>' : '<label for="checkbox">Tidak diupload di website</label>'); ?>
                        </td>
                    </tr>
                    <tr>
                    <td class="label-colon">KIP (Kartu Indonesia Pintar)</td>
                        <td class="data-value">
                        <input type="checkbox" <?php echo (!empty($data_peserta->kip) ? 'checked="checked"' : ''); ?> disabled>
                        <?php echo (!empty($data_peserta->kip) ? '<label for="checkbox">Sudah diupload di website</label>' : '<label for="checkbox">Tidak diupload di website</label>'); ?>
                        </td>
                    </tr>
                    <tr class="table-header">
                        <td colspan="2" style="font-weight: bold;">
                        <?php
                            if ($data_peserta->status === null) {
                                echo '<span style="color: blue;">Status Peserta : Sedang diperiksa</span>';
                            } elseif ($data_peserta->status == 1) {
                                echo '<span style="color: green;">Status Peserta : Diverifikasi oleh admin</span>';
                            } elseif ($data_peserta->status == 2) {
                                echo '<span style="color: red;">Status Peserta : Data ditolak</span>';
                            }
                        ?>

                        </td>
                    </tr>

                </table>
            </div>
                <table style="width: 100%; height: 100vh;">
                <tr>
                    <!-- Bagian pertama dengan latar belakang putih -->
                    <td style="width: 30%; "><?php $foto_url = base_url('assets/berkas/' . $data_peserta->foto); ?>
                    <img style="width: 150px;" src="<?php echo $foto_url; ?>" alt="Foto Siswa"></td>

                    <!-- Bagian kedua dengan latar belakang hitam -->
                    <td style="width: 30%;"></td>

                    <!-- Bagian ketiga dengan latar belakang putih -->
                    <td style="width: 40%;">
                    <div style="display: flex; justify-content: space-between;">
                    <div><?php echo 'Banda Aceh, ' . date('d F Y'); ?></div>
                    <div>(Orang Tua / Wali)</div><br><br><br><br><br><br>
                    <div >...........................................</div>
                </div>
                </td>
                </tr>
                </table>
        </div>

    </div>

</body>
</html>
