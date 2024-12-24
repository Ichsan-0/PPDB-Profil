<div class="recent_event_area section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">PENGUMUMAN SEKOLAH</h3>
                    </div>
                    <form action="<?php echo site_url('pengumuman/search');?>" method="get">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="text" name="keyword" class="form-control" placeholder='Cari Pengumuman'
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Cari Pengumuman'" autocomplete="off" required>
                            <div class="input-group-append">
                                <button class="btn" type="submit"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
                <?php echo $this->session->flashdata('msg');?>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    
                    
                                    
                    
                    
                    <?php foreach($data->result() as $row):?>
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span><?php echo date("d", strtotime($row->pengumuman_tanggal));?></span>
                            <p><?php echo date("M Y", strtotime($row->pengumuman_tanggal));?></p>
                        </div>
                        <div class="event_info">
                            <a class="d-inline-block" href="<?php echo site_url('pengumuman/detail/'.$row->pengumuman_slug);?>">
                                <h4><?php echo $row->pengumuman_judul;?></h4>
                             </a>
                            <p><?php echo $row->pengumuman_deskripsi;?></p>
                        </div>
                    </div>
                    
                    <?php endforeach;?>
                    
                </div>
                <div class="col-md-12 text-center">
                <nav class="blog-pagination justify-content-center d-flex">
                    <?php error_reporting(0); echo $page;?>
                </nav>
    </div>
        </div>
    </div>
</div>