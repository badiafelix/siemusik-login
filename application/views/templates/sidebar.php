 
 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('user/index'); ?>">
    <div class="sidebar-brand-icon">
        <i class="fas fa-church"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SIE MUSIK</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Menu
</div>

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('user/index'); ?>">
        <i class="fas fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Nav Item - Profil -->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('user/profilsaya'); ?>">
        <i class="far fa-user"></i>
        <span>Profil Saya</span></a>
</li>

<!-- Nav Item - Jadwal -->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('user/jadwal'); ?>">
        <i class="fas fa-calendar-alt"></i>
        <span>Jadwal Pelayanan</span></a>
</li>

<!-- Nav Item - Riwayat Absen -->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('user/riwayatabsen'); ?>">
    <i class="fas fa-history"></i>
        <span>Riwayat Absensi</span></a>
</li>

<!-- Nav Item - Ganti Password -->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('user/gantipassword'); ?>">
    <i class="fas fa-key"></i>
        <span>Ganti Password</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

