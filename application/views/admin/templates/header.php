<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$beranda = ''; $web_konten = ''; $profil = ''; $user = '';
$page = $this->uri->segment(2);
if ($page == 'web-konten') $web_konten = 'active';
if ($page == 'profil') $profil         = 'active';
if ($page == 'user') $user         = 'active';

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>LTI PEKANBARU</title>
   <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo/<?php echo $row_profil['logo']; ?>">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
   <!-- Google Icon Font -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <!-- Materialize CSS -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css">
   <!-- Summernote CSS -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/summernote/summernote-lite.css">
   <!-- Style CSS -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/backend.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/b-landing-page.css">
   <!-- jQuery -->
   <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
   <!-- Summernote JS -->
   <script src="<?php echo base_url(); ?>assets/summernote/summernote-lite.js"></script>
   
</head>
<body>

   <div class="hide-on-large-only pesan-mode">
      <div class="container">
         <div class="row">
            <div class="col s12 center-align">
               <i class="material-icons">all_inclusive</i>
               <h5>Gunakan browser desktop untuk melakukan akses edit</h5>
            </div>
         </div>
      </div>
   </div>
   
   <!-- Container -->
   <div class="container hide-on-med-and-down">
      
      <!-- Navbar -->
      <div class="row">
         <div class="col s12 menu-list">
         
            <!-- Web Konten -->
            <a href="<?php echo site_url('akses09/web-konten'); ?>" class="waves-effect <?php echo $web_konten; ?>">
               <i class="material-icons">web</i>
               <span>Web Konten</span>
            </a>

            <!-- Profil -->
            <a href="<?php echo site_url('akses09/profil'); ?>" class="waves-effect <?php echo $profil; ?>">
               <i class="material-icons">domain</i>
               <span>Profil</span>
            </a>

            <!-- User -->
            <a href="<?php echo site_url('akses09/user'); ?>" class="waves-effect <?php echo $user; ?>">
               <i class="material-icons">person</i>
               <span>Akses</span>
            </a>

            <!-- Keluar -->
            <a href="#modal-keluar" class="waves-effect modal-trigger">
               <i class="material-icons">meeting_room</i>
               <span>Keluar</span>
            </a>
         </div>
      </div>      
      <!-- End Navbar -->





      <!-- Main Content -->
      <main>