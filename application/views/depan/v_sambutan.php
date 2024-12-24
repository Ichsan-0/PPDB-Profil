<div class="event_details_area section__padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_event">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="thumb">
                                    <img src="<?php echo base_url('style/img/' . $profil_sekolah['file_foto']); ?>" alt="kepala sekolah" style="width: 400px; height: auto; display: block; margin: 0 auto;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="event_details_info">
                                    <div class="event_info">
                                        <a href="#">
                                            <h4>SAMBUTAN KEPALA SEKOLAH</h4>
                                        </a>
                                        <p><span> <i class="flaticon-clock"></i> 10:30 pm</span> <span> <i class="flaticon-calendar"></i> 21 Nov 2020 </span> <span> <i class="flaticon-placeholder"></i> AH Oditoriam</span> </p>
                                    </div>
                                    <div class="event_description">
                                        <?php 
                                        $full_text = $profil_sekolah['isi_tulisan'];
                                        $char_limit = 600;
                                        $first_half = substr($full_text, 0, $char_limit);
                                        $second_half = substr($full_text, $char_limit);
                                        // Mencari posisi tag <p> terdekat setelah batas karakter
                                        $pos_p = strpos($second_half, "<p>");
                                        if ($pos_p !== false) {
                                            $first_half .= substr($second_half, 0, $pos_p);
                                            $second_half = substr($second_half, $pos_p);
                                        }
                                        echo "<p>" . $first_half . "</p>";
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="event_description">
                                    <?php echo "<p>" . $second_half . "</p>"; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>