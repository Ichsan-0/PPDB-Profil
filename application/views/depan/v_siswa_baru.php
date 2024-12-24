<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Pendaftaran Siswa Baru</title>
</head>
<body>

<div class="recent_event_area section__padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10">
                <div class="section_title text-center mb-30">
                    <h3 class="mb-20">DAFTAR PENERIMAAN PESERTA DIDIK BARU (PPDB)</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <!-- Formulir Pendaftaran -->
                <div class="form-container">
                  <form id="formPendaftaran">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap:</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nisn">NISN:</label>
                            <input type="text" name="nisn" class="form-control">
                        </div>

                      <div class="form-group">
                          <label for="mapel">Sekolah Asal:</label>
                          <input type="text" name="sekolah" class="form-control" required>
                      </div>

                      <div class="form-group">
                          <label for="alamat">Alamat / Domisili:</label>
                          <textarea name="alamat_ktp" class="form-control" required></textarea>
                      </div>

                      <div class="form-group">
                          <label for="username">Username Akun:</label>
                          <input required type="text" name="username" class="form-control" >
                      </div>

                      <div class="form-group">
                          <label for="pass">Password Akun:</label>
                          <input type="password" name="password" class="form-control" required>
                      </div>
                        <button type="submit" class="btn btn-primary" id="btnDaftar">Daftar</button>
                        <a href="<?php echo site_url('login');?>" class="btn btn-success">Sudah ada Akun</a>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Tata Cara Pendaftaran Sekolah -->
                <div class="form-container">
                    <!-- Isi tata cara pendaftaran sekolah disini -->
                    <img src="<?php echo base_url().'./style/img/banner/alur1.jpg';?>" class="img-fluid" alt="Alur Pendaftaran">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
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
                <p>Username: <span id="userModal"></span></p>
                <p>Password: <span id="passwordModal"></span></p>
                <p>Silahkan Catat, username & Password anda!!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <a href="<?php echo site_url('login');?>" class="btn btn-primary">Selanjutnya</a>
            </div>
        </div>
    </div>
</div>
<!-- Error Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Error! Data Gagal disimpan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="errorMessage"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
    // Tampilkan modal saat tombol "Daftar" ditekan
    $('#btnDaftar').click(function(e) {
        e.preventDefault(); // Prevent the default form submission behavior

        // Validasi input
        var username = $('input[name="username"]').val();
        var password = $('input[name="password"]').val();

        if (username === '' || password === '') {
            alert('Username dan password harus diisi');
            return;
        }

        // Kirim data ke server menggunakan AJAX
        $.ajax({
            type: 'POST',
            url: '<?php echo site_url('siswa_baru/simpan');?>',
            data: $('#formPendaftaran').serialize(),
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // Tampilkan modal dengan data yang diterima
                    $('#successModal').modal('show');
                    $('#userModal').text(response.username);
                    $('#passwordModal').text(response.password);
                } else {
                    // Display error message in the modal
                    $('#errorModal').modal('show');
                    $('#errorMessage').text(response.message);
                }
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
});
</script>

</body>
</html>
