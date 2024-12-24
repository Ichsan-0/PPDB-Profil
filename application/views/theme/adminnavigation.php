<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
    </div>
    <div class="sidebar-brand-text mx-3">Admin Cut Meutia</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <?php if ($this->session->userdata('pengguna_level') == '1') : ?>
  <!-- Nav Item - Dashboard -->
  <li class="nav-item <?php if ($this->uri->segment(2) == 'dashboard'): ?>active<?php endif; ?>">
    <a class="nav-link" href="<?php echo base_url() . 'admin/dashboard' ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
    </li> 
    <?php 
  $segment2 = $this->uri->segment(2);
  $segment3 = $this->uri->segment(3);
  $uri_string = $this->uri->uri_string();
  ?>

  <li class="nav-item <?php if ($segment2 == 'data_sekolah'  || $segment2 == 'slider' || $segment2 == 'profil_sekolah' ): ?>active<?php endif; ?>">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProfil" aria-expanded="true" aria-controls="collapseProfil">
          <i class="fas fa-fw fa-school"></i>
          <span>Profil Sekolah</span>
      </a>
      <div id="collapseProfil" class="collapse <?php if ($segment2 == 'data_sekolah' || $segment2 == 'slider' || $segment2 == 'profil_sekolah' || $segment3 == 'visi_misi' || $segment3 == 'struktur'): echo 'show'; endif; ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item <?php echo ($segment2 == 'data_sekolah') ? 'active' : ''; ?>" href="<?php echo base_url('admin/data_sekolah'); ?>">Data Sekolah</a>
              <a class="collapse-item <?php echo ($uri_string == 'admin/slider') ? 'active' : ''; ?>" href="<?php echo base_url('admin/slider'); ?>">Foto Slider & Brosur</a>
              <a class="collapse-item <?php echo ($segment2 == 'profil_sekolah' && $segment3 == '') ? 'active' : ''; ?>" href="<?php echo base_url('admin/profil_sekolah'); ?>">Sambutan Kepsek</a>
              <a class="collapse-item <?php echo ($segment3 == 'visi_misi') ? 'active' : ''; ?>" href="<?php echo base_url('admin/profil_sekolah/visi_misi'); ?>">Visi & Misi</a>
              <a class="collapse-item <?php echo ($segment3 == 'struktur') ? 'active' : ''; ?>" href="<?php echo base_url('admin/profil_sekolah/struktur'); ?>">Struktur Organisasi</a>
          </div>
      </div>
  </li>

  <li class="nav-item <?php if ($segment2 == 'ppdb' || $segment3 == 'tahun_ajaran'): ?>active<?php endif; ?>">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseppdb" aria-expanded="true" aria-controls="collapseppdb">
        <i class="fas fa-user-edit"></i>
        <span>Data PPDB</span></a>
      </a>
      <div id="collapseppdb" class="collapse <?php if ($segment2 == 'ppdb'  || $segment3 == 'tahun_ajaran'): echo 'show'; endif; ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item <?php if ($segment3 == 'tahun_ajaran' || $uri_string == 'admin/ppdb/add_tahun' || strpos($uri_string, 'admin/ppdb/edit_tahun') !== false): echo 'active'; endif; ?>" href="<?php echo base_url('admin/ppdb/tahun_ajaran'); ?>">Data Tahun Ajaran</a>
          <a class="collapse-item <?php if ($uri_string == 'admin/ppdb' || strpos($uri_string, 'admin/ppdb/detail') !== false || strpos($uri_string, 'admin/ppdb/konfirmasi') !== false): echo 'active'; endif; ?>" href="<?php echo base_url('admin/ppdb'); ?>">Data Pendaftar</a>
          </div>
      </div>
  </li>
    <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item <?php if ($this->uri->segment(2) == 'tulisan' || $this->uri->segment(2) == 'kategori'): ?>active<?php endif; ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSiji" aria-expanded="true" aria-controls="collapseSiji">
      <i class="fas fa-fw fa-cog"></i>
      <span>Berita Sekolah</span>
    </a>
    <div id="collapseSiji" class="collapse <?php if ($this->uri->segment(2) == 'tulisan' || $this->uri->segment(2) == 'kategori'): ?>show<?php endif; ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item <?php if (current_url() == base_url('admin/tulisan') || $this->uri->segment(3) == 'get_edit'): ?>active<?php endif; ?>" href="<?php echo base_url() . 'admin/tulisan' ?>">List Data</a>
        <a class="collapse-item <?php if ($this->uri->segment(3) == 'add_tulisan'): ?>active<?php endif; ?>" href="<?php echo base_url() . 'admin/tulisan/add_tulisan' ?>">Tambah Data</a>
        <a class="collapse-item <?php if ($this->uri->segment(2) == 'kategori'): ?>active<?php endif; ?>" href="<?php echo base_url() . 'admin/kategori' ?>">Kategori Data</a>
      </div>
    </div>
  </li>
  <li class="nav-item <?php if ($this->uri->segment(2) == 'guru'): ?>active<?php endif; ?>">
    <a class="nav-link" href="<?php echo base_url() . 'admin/guru' ?>">
      <i class="fas fa-fw fa-address-book"></i>
      <span>Data Guru</span></a>
  </li>
  <li class="nav-item <?php if ($segment2 == 'agenda' || $segment2 == 'pengumuman'): ?>active<?php endif; ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKegiatan" aria-expanded="true" aria-controls="collapseSiji">
      <i class="fas fa-fw fa-cog"></i>
      <span>Kegiatan Sekolah</span>
    </a>
    <div id="collapseKegiatan" class="collapse <?php if ($segment2 == 'agenda' || $segment2 == 'pengumuman'): ?>show<?php endif; ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item <?php if ($segment2 == 'agenda'): ?>active<?php endif; ?>" href="<?php echo base_url() . 'admin/agenda' ?>">Agenda Sekolah</a>
        <a class="collapse-item <?php if ($segment2 == 'pengumuman'): ?>active<?php endif; ?>" href="<?php echo base_url() . 'admin/pengumuman' ?>">Pengumuman Sekolah</a>
      </div>
    </div>
  </li>

  <li class="nav-item <?php if ($this->uri->segment(2) == 'files'): ?>active<?php endif; ?>">
    <a class="nav-link" href="<?php echo base_url() . 'admin/files' ?>">
      <i class="fas fa-fw fa-download"></i>
      <span>Data Download</span></a>
  </li>
  <li class="nav-item <?php if ($this->uri->segment(2) == 'mapel'): ?>active<?php endif; ?>">
    <a class="nav-link" href="<?php echo base_url() . 'admin/mapel' ?>">
      <i class="fas fa-fw fa-address-book"></i>
      <span>Data Kelas & Mapel</span></a>
  </li>
  <li class="nav-item <?php if ($this->uri->segment(2) == 'video'): ?>active<?php endif; ?>">
    <a class="nav-link" href="<?php echo base_url() . 'admin/video' ?>">
      <i class="fas fa-fw fa-download"></i>
      <span>Data Video</span></a>
  </li>
  <li class="nav-item <?php if ($this->uri->segment(2) == 'pengguna'): ?>active<?php endif; ?>">
    <a class="nav-link" href="<?php echo base_url() . 'admin/pengguna' ?>">
      <i class="fas fa-fw fa-users"></i>
      <span>Data User</span></a>
  </li>
  <!-- Divider -->
  


  <li class="nav-item <?php if ($this->uri->segment(2) == 'album' || $this->uri->segment(2) == 'galeri'): ?>active<?php endif; ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Album Galeri</span>
    </a>
    <div id="collapseTwo" class="collapse <?php if ($this->uri->segment(2) == 'album' || $this->uri->segment(2) == 'galeri'): ?>show<?php endif; ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item <?php if ($this->uri->segment(2) == 'album'): ?>active<?php endif; ?>" href="<?php echo base_url() . 'admin/album' ?>">Kategori Galeri</a>
        <a class="collapse-item <?php if ($this->uri->segment(2) == 'galeri'): ?>active<?php endif; ?>" href="<?php echo base_url() . 'admin/galeri' ?>">Foto Galeri</a>
      </div>
    </div>
  </li>
  <?php endif; ?>

  <?php if ($this->session->userdata('pengguna_level') == '3') : ?>
  <!-- Nav Item - Dashboard -->
  <li class="nav-item <?php if ($this->uri->segment(2) == 'dashboard'): ?>active<?php endif; ?>">
    <a class="nav-link" href="<?php echo base_url() . 'admin/dashboard' ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  <li class="nav-item <?php if ($this->uri->segment(2) == 'ppdb'): ?>active<?php endif; ?>">
    <a class="nav-link" href="<?php echo base_url() . 'admin/ppdb' ?>">
    <i class="fas fa-user-edit"></i>
      <span>Data PPDB</span></a>
  </li>

  <li class="nav-item <?php if ($this->uri->segment(2) == 'files'): ?>active<?php endif; ?>">
    <a class="nav-link" href="<?php echo base_url() . 'admin/files' ?>">
      <i class="fas fa-fw fa-download"></i>
      <span>Data Download</span></a>
  </li>
  <li class="nav-item <?php if ($this->uri->segment(2) == 'mapel'): ?>active<?php endif; ?>">
    <a class="nav-link" href="<?php echo base_url() . 'admin/mapel' ?>">
      <i class="fas fa-fw fa-address-book"></i>
      <span>Data Mapel</span></a>
  </li>
  <li class="nav-item <?php if ($this->uri->segment(2) == 'video'): ?>active<?php endif; ?>">
    <a class="nav-link" href="<?php echo base_url() . 'admin/video' ?>">
      <i class="fas fa-fw fa-download"></i>
      <span>Data Video</span></a>
  </li>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item <?php if ($this->uri->segment(2) == 'tulisan' || $this->uri->segment(2) == 'kategori'): ?>active<?php endif; ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSiji" aria-expanded="true" aria-controls="collapseSiji">
      <i class="fas fa-fw fa-cog"></i>
      <span>Berita</span>
    </a>
    <div id="collapseSiji" class="collapse <?php if ($this->uri->segment(2) == 'tulisan' || $this->uri->segment(2) == 'kategori'): ?>show<?php endif; ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item <?php if (current_url() == base_url('admin/tulisan')): ?>active<?php endif; ?>" href="<?php echo base_url() . 'admin/tulisan' ?>">List Berita</a>
        <a class="collapse-item <?php if ($this->uri->segment(3) == 'add_tulisan'): ?>active<?php endif; ?>" href="<?php echo base_url() . 'admin/tulisan/add_tulisan' ?>">Pos Berita</a>
        <a class="collapse-item <?php if ($this->uri->segment(2) == 'kategori'): ?>active<?php endif; ?>" href="<?php echo base_url() . 'admin/kategori' ?>">Kategori Berita</a>
      </div>
    </div>
  </li>
  <?php endif; ?>

  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url() . 'login' ?>">
      <i class="fas fa-fw fa-power-off"></i>
      <span>Logout</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>