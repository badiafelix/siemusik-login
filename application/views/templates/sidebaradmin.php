 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('admin/index'); ?>">
    <div class="sidebar-brand-icon">
        <i class="fas fa-church"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SIE MUSIK</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Divider -->
<hr class="sidebar-divider">
<!-- 
<div class="sidebar-heading">
    <?=date("l jS \of F Y"); ?>
</div> -->
<!-- Heading -->
<div class="sidebar-heading">
    Menu Admin
</div>


<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('admin/index'); ?>">
        <i class="fas fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Nav Item - Informasi Pelayan -->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('admin/informasipelayan'); ?>">
        <i class="fas fa-users"></i>
        <span>Informasi Pelayan</span></a>
</li>

<!-- Nav Item - Pendaftaran pelayan -->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('admin/pendaftaranpelayan'); ?>">
        <i class="fas fa-plus-square"></i>
        <span>Pendaftaran Pelayan</span></a>
</li>

<!-- Nav Item - Unggah jadwal -->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('admin/unggahjadwal'); ?>">
        <i class="fas fa-file-upload"></i>
        <span>Unggah Jadwal</span></a>
</li>

<!-- Nav Item - Jadwal Pelayan -->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('admin/jadwalpelayan'); ?>">
    <i class="fas fa-calendar-alt"></i>
        <span>Jadwal Pelayan</span></a>
</li>

<!-- Nav Item - Lupa Absen -->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('admin/lupaabsen'); ?>">
    <i class="fas fa-user-times"></i>
        <span>Lupa Absen</span></a>
</li>

<!-- Nav Item - Ganti Jadwal -->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('admin/gantijadwal'); ?>">
    <i class="fas fa-exchange-alt"></i>
        <span>Ganti Jadwal</span></a>
</li>

<!-- Nav Item - Riwayat Absensi -->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('admin/riwayatabsenall'); ?>">
    <i class="fas fa-history"></i>
        <span>Riwayat Absensi</span></a>
</li>

<!-- Nav Item - Riwayat Absen -->
<!-- <li class="nav-item">
    <a class="nav-link" href="<?=base_url('admin/riwayatabsen'); ?>">
    <i class="fas fa-check"></i>
        <span>Riwayat Absensi</span></a>
</li> -->

<!-- Nav Item - Ganti Password -->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('admin/resetpassword'); ?>">
    <i class="fas fa-key"></i>
        <span>Reset Password</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
