<div class="event_details_area section__padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single_event">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="event_info" style="text-align: center;">
                                <a href="#">
                                    <h4>Struktur <?php echo get_nama_sekolah(); ?></h4>
                                </a>
                                <p><span> <i class="flaticon-clock"></i> 10:30 pm</span> <span> <i class="flaticon-calendar"></i> 21 Nov 2020 </span> <span> <i class="flaticon-placeholder"></i> AH Oditoriam</span> </p>
                            </div>
                            <div class="thumb">
                                <img src="<?php echo base_url('style/img/' . $profil_sekolah['file_foto']); ?>" alt="kepala sekolah" style="width: 400px; height: auto; display: block; margin: 0 auto;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php 
                        $full_text = htmlspecialchars_decode($profil_sekolah['isi_tulisan']); // Decode HTML entities

                        // Bagi tulisan menjadi dua bagian yang sama panjang
                        $half_text_length = strlen($full_text) / 2;
                        $first_half = substr($full_text, 0, $half_text_length);
                        $second_half = substr($full_text, $half_text_length);
                        
                        // Mencari posisi tag <p> terdekat sebelum dan sesudah setengah teks
                        $pos_p_before = strrpos($first_half, "<p>");
                        $pos_p_after = strpos($second_half, "<p>");
                        
                        if ($pos_p_before !== false && $pos_p_before > 0) {
                            $first_half = substr($first_half, 0, $pos_p_before);
                            $second_half = substr($full_text, $pos_p_before);
                        } elseif ($pos_p_after !== false) {
                            $first_half .= substr($second_half, 0, $pos_p_after);
                            $second_half = substr($second_half, $pos_p_after);
                        }

                        // Tampilkan dalam dua kolom atau satu kolom jika teks lebih pendek dari 600 karakter
                        if (strlen($full_text) <= 600) {
                            echo '<div class="col-md-12">';
                            echo '<div class="event_description">';
                            echo $full_text; // Display full text
                            echo '</div>';
                            echo '</div>';
                        } else {
                            echo '<div class="col-md-6">';
                            echo '<div class="event_description">';
                            echo $first_half; // Display first half
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="col-md-6">';
                            echo '<div class="event_description">';
                            echo $second_half; // Display second half
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
