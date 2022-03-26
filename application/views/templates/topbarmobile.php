<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title><?= $title;?></title>
    <link href="<?=base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="apple-touch-icon" sizes="57x57" href="<?=base_url('assets/picture/'); ?>apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=base_url('assets/picture/'); ?>apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=base_url('assets/picture/'); ?>apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url('assets/picture/'); ?>apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=base_url('assets/picture/'); ?>apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=base_url('assets/picture/'); ?>apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=base_url('assets/picture/'); ?>apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=base_url('assets/picture/'); ?>apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url('assets/picture/'); ?>apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?=base_url('assets/picture/'); ?>android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url('assets/picture/'); ?>favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=base_url('assets/picture/'); ?>favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/picture/'); ?>favicon-16x16.png">

    <!-- Bootstrap core CSS -->
<!-- <link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


<style>
    .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    }

    @media (min-width: 768px) {
    .bd-placeholder-img-lg {
        font-size: 3.5rem;
    }
    }
</style>


    <!-- Custom styles for this template -->
    <!-- <link href="offcanvas.css" rel="stylesheet"> -->
    <link href="<?=base_url('assets/'); ?>css/offcanvas.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
  <a class="navbar-brand mr-auto mr-lg-0" href="#"><i class="fas fa-church"></i> SIE MUSIK HKBP JATINEGARA</a>
  <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('user/index'); ?>">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('user/profilsaya'); ?>">Profil Saya</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('user/jadwal'); ?>">Jadwal Pelayanan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('user/riwayatabsen'); ?>">Riwayat Absensi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('user/gantipassword'); ?>">Ganti Password</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('auth/logout'); ?>">Log Out</a>
      </li>
    </ul>
  </div>
</nav>
