<?php
function limit_words($string, $word_limit)
{
    $words = explode(" ", $string);
    return implode(" ", array_splice($words, 0, $word_limit));
}
?>
<style>
   /* Gaya umum untuk container slider */
.slider-container {
    padding: 10%;
}

/* Gaya umum untuk slide */
.swiper-container {
    width: 100%;
    height: 100%;
    margin: auto;
}

.swiper-slide {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.swiper-slide img {
    padding : 5%;
    max-width: 100%;
    max-height: 100%;
    width: auto;
    height: auto;
    object-fit: contain; /* Sesuaikan dengan proporsi gambar */
}

</style>

<div class="container">
    <div class="row align-items-center">
        <div class="col-md-6">
            <!-- Teks atau konten yang ingin ditampilkan di sebelah kiri -->
            <h1 class="m-0 font-weight-bold text-primary"><?= get_nama_sekolah(); ?></h1>
            <p class="d-flex align-items-center">
                <?= get_deskripsi(); ?>
            </p>
            <a href="<?php echo site_url('siswa_baru');?>" class="btn btn-success">Daftar Sekarang</a>
            <?php foreach ($brosur as $row): ?>
            <a href="<?php echo base_url() . 'assets/images/' . $row['gambar']; ?>" data-lightbox="gallery" data-title="Preview Brosur" class="btn btn-primary">Lihat Brosur</a>
            <?php endforeach; ?>
        </div>
        <div class="col-md-6" style="overflow: hidden;">
            <!-- Slider yang ingin ditampilkan di sebelah kanan -->
            <div class="swiper-container">
                <ul class="swiper-wrapper">
                    <!-- Tambahkan slide untuk setiap gambar -->
                    <?php foreach ($slider->result_array() as $i) : $gambar = $i['gambar']; ?>
                        <li class="swiper-slide">
                            <img src="<?php echo base_url() . 'assets/images/' . $gambar; ?>">
                        </li>
                    <?php endforeach; ?>
                </ul>
                <!-- Tambahkan navigasi slide jika diperlukan -->
            </div>
        </div>
    </div>
</div>


<div class="recent_news_area section__padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section_title text-center mb-70">
                    <h3 class="mb-45">Berita Sekolah</h3>

                </div>
            </div>
        </div>
        <div class="row">



            <?php foreach ($berita->result() as $row) : ?>
                <div class="col-md-6">
                    <div class="single__news">
                        <div class="thumb">
                            <a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>">
                                <img src="<?php echo base_url() . 'assets/images/' . $row->tulisan_gambar; ?>" alt="<?php echo $row->tulisan_judul; ?>">
                            </a>
                            <span class="badge"><?php echo $row->tulisan_kategori_nama; ?></span>
                        </div>
                        <div class="news_info">
                            <a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>">
                                <h4><?php echo $row->tulisan_judul; ?></h4>
                            </a>
                            <p><?php echo limit_words($row->tulisan_isi, 10) . '...'; ?></p>
                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> <?php echo $row->tanggal; ?></span>

                                <span> <i class="flaticon-comment"></i> 01 comments</span>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<!--/ service_area_start  -->

<!-- popular_program_area_start  -->
<div class="popular_program_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center">
                    <h3>Pengumuman Sekolah</h3>
                </div>
            </div>
        </div>

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">




                    <?php foreach ($pengumuman->result() as $row) : ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/program/1.png" alt="">
                                </div>
                                <div class="program__content">
                                    <span><?php echo $row->tanggal; ?></span>
                                    <h4><a href="<?php echo site_url('pengumuman'); ?>"><?php echo $row->pengumuman_judul; ?></a></h4>
                                    <p><?php echo limit_words($row->pengumuman_deskripsi, 10) . '...'; ?></p>
                                    <a href="<?php echo site_url('pengumuman'); ?>" class="boxed-btn5">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>



                </div>
            </div>



        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="course_all_btn text-center">
                    <a href="<?php echo site_url('pengumuman'); ?>" class="boxed-btn4">Lihat Semua Pengumuman</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- popular_program_area_end -->

<!-- latest_coures_area_start  -->

<!--/ latest_coures_area_end -->

<!-- recent_event_area_strat  -->
<div class="recent_event_area section__padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section_title text-center mb-70">
                    <h3 class="mb-45">Agenda Sekolah</h3>

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">


                <?php foreach ($agenda->result() as $row) : ?>
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span><?php echo date("d", strtotime($row->agenda_tanggal)); ?></span>
                            <p><?php echo date("M. y", strtotime($row->agenda_tanggal)); ?></p>
                        </div>
                        <div class="event_info">
                            <a href="<?php echo site_url('agenda'); ?>">
                                <h4><?php echo $row->agenda_nama; ?></h4>
                            </a>
                            <p><?php echo limit_words($row->agenda_deskripsi, 10) . '...'; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 2000, // Set delay dalam milidetik (3 detik)
            disableOnInteraction: false, // Biarkan autoplay berlanjut setelah interaksi pengguna
        },
    });
</script>