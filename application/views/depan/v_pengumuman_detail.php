<?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>

<section class="blog_area single-post-area section-padding">
      <div class="container">
      
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <!--<img class="img-fluid" src="<?php echo base_url().'assets/agenda/'.$agenda_file?>" alt="<?php echo $agenda_nama;?>">-->
                  </div>
                  <div class="blog_details">
                    <h2 class="blog-title"><?php echo $pengumuman_judul;?></h2>
                    <ul class="blog-info-link mt-3 mb-4">
                        <li><i class="fa fa-user"></i> Oleh : <?php echo $pengguna_nama;?></li>
                        <li><i class="fa fa-calendar"></i> Post : <?php echo $tanggal;?></li>
                    </ul>
                    <?php if (!empty($pengumuman_deskripsi)): ?>
                        <div class="mb-4"><?php echo $pengumuman_deskripsi; ?></div>
                    <?php endif; ?>
                    <?php if (!empty($tanggal)): ?>
                        <p style="font-weight: bold;">Tanggal : <?php echo $tanggal; ?></p>
                    <?php endif; ?>

                </div>
                <?php if (!empty($pengumuman_file)): ?>
                <p><strong>
                    Info Selengkapnya : <a href="<?php echo base_url().'assets/pengumuman/'.$pengumuman_file?>" data-lightbox="gallery" data-title="Preview Pengumuman" class="btn btn-sm btn-light">
                        Dapat dilihat, pada file berikut ini "Klik Disini"
                    </a>
                    </strong></p>
                <?php endif; ?>
               </div>

            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                            
                            
                                
                            <h3 class="widget_title">Cari Pengumuman</h3>
                            
                            <form action="<?php echo site_url('pengumuman/search');?>" method="get">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" name="keyword" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'" autocomplete="off" required>
                                        <div class="input-group-append">
                                            <button class="btn" type="submit"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button>
                            </form>
                            
                        </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Pengumuman Lainnya</h3>

                            <?php foreach ($populer->result() as $row) :?>
                            <div class="media post_item">
                                <div class="media-body">
                                    <a href="<?php echo site_url('pengumuman/detail/'.$row->pengumuman_slug);?>">
                                        <h3><?php echo limit_words($row->pengumuman_judul,2).'...';?></h3>
                                    </a>
                                    <p><?php echo limit_words($row->tanggal,5).'...';?></p>
                                </div>
                            </div>
                            <?php endforeach;?>
                            
                            
                        </aside>
                   
               </div>
            </div>
         </div>
      </div>
    </div>
</section>