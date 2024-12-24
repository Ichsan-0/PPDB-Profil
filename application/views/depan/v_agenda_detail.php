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
                    <h2 class="blog-title"><?php echo $agenda_nama;?></h2>
                    <ul class="blog-info-link mt-3 mb-4">
                        <li><i class="fa fa-user"></i> Oleh : <?php echo $pengguna_nama;?></li>
                        <li><i class="fa fa-calendar"></i> Post : <?php echo $tanggal;?></li>
                    </ul>
                    <?php if (!empty($agenda_deskripsi)): ?>
                        <div class="mb-4">Deskripsi : <?php echo $agenda_deskripsi; ?></div>
                    <?php endif; ?>
                    <?php if (!empty($agenda_tempat)): ?>
                        <p style="font-weight: bold;">Tempat : <?php echo $agenda_tempat; ?></p>
                    <?php endif; ?>

                    <p style="font-weight: bold;">Pelaksanaan : <?php echo $mulai; ?><?php if (!empty($selesai) && $selesai !== '00/00/0000'): ?> s/d <?php echo $selesai; ?><?php endif; ?></p>

                    <?php if (!empty($agenda_waktu)): ?>
                        <p style="font-weight: bold;">Waktu : <?php echo $agenda_waktu; ?></p>
                    <?php endif; ?>

                    <?php if (!empty($agenda_keterangan)): ?>
                        <p style="font-weight: bold;">Keterangan / note : <?= $agenda_keterangan; ?></p>
                    <?php endif; ?>

                </div>
                <?php if (!empty($agenda_file)): ?>
                <p><strong>
                    Info Selengkapnya : <a href="<?php echo base_url().'assets/agenda/'.$agenda_file?>" data-lightbox="gallery" data-title="Preview Agenda" class="btn btn-sm btn-light">
                        Dapat dilihat, pada file berikut ini "Klik Disini"
                    </a>
                    </strong></p>
                <?php endif; ?>
               </div>

            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                            
                            
                                
                            <h3 class="widget_title">Cari Agenda</h3>
                            
                            <form action="<?php echo site_url('agenda/search');?>" method="get">
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
                            <h3 class="widget_title">Agenda Lainnya</h3>

                            <?php foreach ($populer->result() as $row) :?>
                            <div class="media post_item">
                                <div class="media-body">
                                    <a href="<?php echo site_url('agenda/detail/'.$row->agenda_slug);?>">
                                        <h3><?php echo limit_words($row->agenda_nama,2).'...';?></h3>
                                    </a>
                                    <p><?php echo limit_words($row->mulai,5).'...';?></p>
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