<div class="recent_event_area section__padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section_title text-center mb-70">
                    <h3 class="mb-45">AGENDA SEKOLAH</h3>
                </div>
                <form action="<?php echo site_url('agenda/search');?>" method="get">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="text" name="keyword" class="form-control" placeholder='Cari Agenda'
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Cari Agenda'" autocomplete="off" required>
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
            <!-- Bagian Kanan (Form Pencarian) -->
                

            <!-- Bagian Kiri (List Agenda) -->
            <div class="col-lg-10">
                
                <?php foreach($data->result() as $row):?>
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span><?php echo date("d", strtotime($row->agenda_mulai));?></span>
                            <p><?php echo date("M Y", strtotime($row->agenda_mulai));?></p>
                        </div>
                        <div class="event_info">
                            <a class="d-inline-block" href="<?php echo site_url('agenda/detail/'.$row->agenda_slug);?>">
                                <h4><?php echo $row->agenda_nama;?></h4>
                            </a>
                            <p><?php echo $row->agenda_deskripsi;?></p>
                            <p><span> <i class="flaticon-clock"></i> <?php echo $row->agenda_waktu;?></span> </p>
                        </div>
                    </div>
                <?php endforeach;?>
                <nav class="blog-pagination justify-content-center d-flex">
                    <?php error_reporting(0); echo $page;?>
                </nav>
            </div>
        </div>
    </div>
</div>
