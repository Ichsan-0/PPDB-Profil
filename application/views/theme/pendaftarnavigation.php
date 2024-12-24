<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
    </div>
    <div class="sidebar-brand-text mx-3">SMA CUT MEUTIA</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item <?php if ($this->uri->segment(2) == 'dashboard'): ?>active<?php endif; ?>">
    <a class="nav-link" href="<?php echo base_url() . 'pendaftar/dashboard' ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <li class="nav-item <?php if ($this->uri->segment(2) == 'formulir'): ?>active<?php endif; ?>">
    <a class="nav-link" href="<?php echo base_url() . 'pendaftar/formulir' ?>">
      <i class="fas fa-fw fa-address-book"></i>
      <span>Formulir</span></a>
  </li>
  <li class="nav-item <?php if ($this->uri->segment(2) == 'upload'): ?>active<?php endif; ?>">
    <a class="nav-link" href="<?php echo base_url() . 'pendaftar/upload' ?>">
      <i class="fas fa-upload"></i>
      <span>Upload Berkas</span></a>
  </li>
  <li class="nav-item <?php if ($this->uri->segment(2) == 'bukti_daftar'): ?>active<?php endif; ?>">
    <a class="nav-link" href="<?php echo base_url() . 'pendaftar/bukti_daftar' ?>">
    <i class="fas fa-check"></i> </i>
      <span>Bukti Pendaftaran</span></a>
  </li>

  


  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url() . 'login/logout' ?>">
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