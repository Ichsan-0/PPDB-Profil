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
                                        <h4>Kontak / Informasi <?php echo get_nama_sekolah(); ?></h4>
                                    </a>
                                </div>
                                <a href="#">
                                    <h4>Alamat : <?php echo get_alamat(); ?></h4>
                                </a>
                                <p>
                                    <?php if(get_email() != ""): ?>
                                        <span> <i class="fa fa-envelope"></i> <?php echo get_email(); ?></span> 
                                    <?php endif; ?>
                                    <?php if(get_phone() != ""): ?>
                                        <span> <i class="fa fa-phone"></i> <?php echo get_phone(); ?> </span> 
                                    <?php endif; ?>
                                    <?php if(get_instagram() != ""): ?>
                                        <span> <i class="fa fa-instagram"></i> <?php echo get_instagram(); ?></span>
                                    <?php endif; ?>
                                    <?php if(get_facebook() != ""): ?>
                                        <span> <i class="fa fa-facebook-official"></i> <?php echo get_facebook(); ?></span>
                                    <?php endif; ?>
                                    <?php if(get_twitter() != ""): ?>
                                        <span> <i class="fa fa-twitter"></i> <?php echo get_twitter(); ?></span>
                                    <?php endif; ?>
                                    <?php if(get_youtube() != ""): ?>
                                        <span> <i class="fa fa-youtube"></i> <?php echo get_youtube(); ?></span>
                                    <?php endif; ?>
                                </p>
                                <div class="event_description">
                                    <div class="map_container mb-5 pb-4">
                                        <?php echo get_maps(); ?>
                                    </div>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            var iframe = document.querySelector('.map_container iframe');
                                            if (iframe) {
                                                iframe.style.width = '100%';
                                                iframe.style.height = '450px';
                                                iframe.frameBorder = '0';
                                                iframe.style.border = '0';
                                                iframe.allowFullscreen = true;
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>