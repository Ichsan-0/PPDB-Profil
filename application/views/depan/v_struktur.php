<div class="event_details_area section__padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single_event">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="event_details_info">
                                <div class="event_info" style="text-align: center;">
                                    <a href="#">
                                        <h4>Struktur <?php echo get_nama_sekolah(); ?></h4>
                                    </a>
                                    <p><span> <i class="flaticon-clock"></i> 10:30 pm</span> <span> <i class="flaticon-calendar"></i> 21 Nov 2020 </span> <span> <i class="flaticon-placeholder"></i> AH Oditoriam</span> </p>
                                </div>
                                <div class="thumb" style="text-align: center; margin-bottom: 20px;">
                                    <img src="<?php echo base_url('style/img/' . $profil_sekolah['file_foto']); ?>" alt="kepala sekolah" style="width: 400px; height: auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php 
                        $full_text = htmlspecialchars_decode($profil_sekolah['isi_tulisan']); // Decode HTML entities
                        $char_limit = 600;
                        
                        if (strlen($full_text) <= $char_limit) {
                            // Jika panjang teks kurang dari atau sama dengan 600 karakter, gunakan col-md-12
                            echo '<div class="col-md-12">';
                            echo '<div class="event_description">';
                            echo $full_text;
                            echo '</div>';
                            echo '</div>';
                        } else {
                            // Jika panjang teks lebih dari 600 karakter, bagi menjadi dua kolom
                            $first_half = substr($full_text, 0, $char_limit);
                            $second_half = substr($full_text, $char_limit);
                            // Mencari posisi tag <p> terdekat setelah batas karakter
                            $pos_p = strpos($second_half, "<p>");
                            if ($pos_p !== false) {
                                $first_half .= substr($second_half, 0, $pos_p);
                                $second_half = substr($second_half, $pos_p);
                            }
                            echo '<div class="col-md-6">';
                            echo '<div class="event_description">';
                            echo $first_half;
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="col-md-6">';
                            echo '<div class="event_description">';
                            echo $second_half;
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>
                    </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
