<div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_wrap d-flex justify-content-between align-items-center">
                                <div class="header_left">
                                    <div class="logo-mini">
                                        <a href="<?php echo base_url('');?>">
                                        <img src="<?php echo get_school_logo(); ?>" alt="" style="width: 90px; height: 90px;">
                                        <span style="font-size: 20px;"><strong><?php echo strtoupper(get_nama_sekolah()); ?></strong></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="header_right d-flex align-items-center">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a  href="<?php echo base_url('');?>">home</a></li>                                                
                                                <li><a href="#">Profile <i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="<?php echo site_url('about/sambutan');?>">Tentang</a></li>
                                                        <li><a href="<?php echo site_url('about/visi_misi');?>">Visi & Misi</a></li>
                                                        <li><a href="<?php echo site_url('about/struktur');?>">Struktur Organisasi</a></li>
                                                        <li><a href="<?php echo site_url('guru');?>">Daftar Guru</a></li>
                                                        <li><a href="<?php echo site_url('contact');?>">Kontak Kami</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Akademik <i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="<?php echo site_url('pengumuman');?>">Pengumuman</a></li>
                                                        
                                                        <li><a href="<?php echo site_url('agenda');?>">Agenda</a></li>
                                                        <li><a href="<?php echo site_url('galeri');?>">Galeri</a></li>
                                                    </ul>
                                                </li>
                                                
                                                
                                                
                                                <li><a href="<?php echo site_url('download');?>">Download</a></li>
                                                <li><a href="<?php echo site_url('blog');?>">Berita</a></li>
                                                <li><a href="<?php echo site_url('video');?>">Video Belajar</a></li>
                                                <li><a href="<?php echo site_url('Siswa_baru');?>">Siswa Baru(PPDB)</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>