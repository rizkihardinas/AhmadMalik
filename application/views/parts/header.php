<?php 
function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Smart Vape</title>

  <link rel="icon" type="image/png" href="<?php echo base_url('assets/') ?>img/favicon.ico">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/adminlte.min.css">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/ekko-lightbox/ekko-lightbox.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
  
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <?php 

          $notif = $this->db->query("SELECT COUNT(idJenis) as jenis FROM notifikasi")->row_array();

           ?>
          <span class="badge badge-warning navbar-badge"><?php echo $notif['jenis'] ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"><?php echo $notif['jenis'] ?> Notifikasi</span>
          <div class="dropdown-divider"></div>
          <?php 
          $query = $this->db->query("SELECT *,COUNT(idJenis) as jenis FROM notifikasi GROUP BY idJenis");
          if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $data) {
              if ($data['idJenis'] == 2) {
                $link = "merchants/rating";
                $icon = "fa-star";
              }else{
                $link = "user";
                $icon ="fa-users";
              }
            
          
           ?>
           <a href="<?php echo base_url($link) ?>" class="dropdown-item">
              <i class="fas <?php echo $icon ?> mr-2"></i> <?php echo $data['jenis'] ?> <?php echo $data['description'] ?>
              <span class="float-right text-muted text-sm">
                <?php echo time_elapsed_string($data['dateCreated']) ?>
              </span>
            </a>
            <div class="dropdown-divider"></div>
           <?php 
           }
          }
            ?>
          
          
          <div class="dropdown-divider"></div>
          <a href="<?php echo base_url() ?>dashboard/clear_notif" class="dropdown-item dropdown-footer">Clear Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="<?php echo base_url() ?>login/logout">
          <i class="fas fa-power-off"></i></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
