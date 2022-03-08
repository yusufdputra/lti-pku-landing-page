<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
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
   <!-- Style CSS -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
   <!-- jQuery -->
   <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
</head>
<body id="home">

   <!-- Top Bar -->
   <div class="top-bar">
      <span><i class="fas fa-phone"></i><?php echo $row_profil['nomor_telp']; ?></span>
		<span class="hide-on-med-and-down">
         <a href="mailto:<?php echo $row_profil['email']; ?>" target="_blank" class="grey-text text-lighten-3"><i class="fas fa-envelope"></i><?php echo $row_profil['email']; ?></a>
      </span>
      <span>
      	<a href="<?php echo base_url('#schedule'); ?>" class="link-schedule-toefl"><i class="fas fa-calendar-alt"></i>TOEFL ITP Schedule</a>
      </span>
   </div>

   <!-- Navbar -->
   <div class="navbar">
		<nav class="z-depth-0">
			<div class="nav-wrapper white">
				<div class="container">
					<a href="<?php echo base_url(); ?>" class="brand-logo link-home"><img src="<?php echo base_url(); ?>assets/img/logo/<?php echo $row_profil['logo']; ?>" alt="logo-lti"></a>
					<a href="#" data-target="sidenav" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
					<ul class="right hide-on-med-and-down">
			        	<li><a class="link link-home" href="<?php echo base_url(); ?>">Home</a></li>
			        	<li><a class="link" href="<?php echo base_url('about-lti'); ?>">About LTI</a></li>
			        	<li><a class="dropdown-trigger link" href="#!" data-target="programs" data-target="programs">Programs<i class="material-icons right">arrow_drop_down</i></a></li>
			        	<li><a class="link" href="<?php echo base_url('partnerships'); ?>">Partnerships</a></li>
			        	<li><a class="link" href="<?php echo base_url('careers'); ?>">Gallery</a></li>
			        	<li><a class="link" href="">Event</a></li>
			      </ul>
				</div>
			</div>
		</nav>
   </div>

   <!-- Dropdown programs -->
   <ul id="programs" class="dropdown-content dropdown-hover">
	  	<li><a class='dropdown-trigger2' href='#' data-target='preparations'>Preparations <span>&#9656;</span></a></li>
	  	<li><a href="<?php echo base_url('programs-conver'); ?>">Conversation</a></li>
	  	<li><a href="<?php echo base_url('programs-general'); ?>">General</a></li>
	   <li><a href="<?php echo base_url('preparations-toeic'); ?>">ESP</a></li>
	  	<li><a href="<?php echo base_url('programs-testing'); ?>">TPO</a></li>
   </ul>
   
   <!-- Dropdown preparations -->
   <ul id='preparations' class='dropdown-content2'>
	    <li><a href="<?php echo base_url('preparations-toefl'); ?>">TOEFL</a></li>
	    <!--<li><a href="<?php echo base_url('preparations-toeic'); ?>">TOEIC</a></li>-->
	    <li><a href="<?php echo base_url('preparations-ielts'); ?>">IELTS</a></li>
	    <li><a href="<?php echo base_url('preparations-ibt'); ?>">TOEIC</a></li>
   </ul>
   
   <!-- Sidenav mobile device -->
   <div id="sidenav" class="sidenav">
      <div class="row">
         <div class="col s12 center-align">
            <img src="<?php echo base_url(); ?>assets/img/logo/<?php echo $row_profil['logo']; ?>" alt="logo-lti">
         </div>
      </div>
      <ul class="collapsible collapsible-1">
         <li>
            <a href="<?php echo base_url(); ?>" class="collapsible-header waves-effect link-home">Home</a>
         </li>
         <li>
            <a href="<?php echo base_url('about-lti'); ?>" class="collapsible-header waves-effect">About LTI</a>
         </li>
         <li>
            <div class="collapsible-header waves-effect">Programs <i class="material-icons right">arrow_drop_down</i></div>
            <div class="collapsible-body">
               <ul class="collapsible collapsible-2">
                  <li>
                     <div class="collapsible-header waves-effect">Preparations <i class="material-icons right">arrow_drop_down</i></div>

                     <div class="collapsible-body">
                        <ul class="collapsible collapsible-3">
                           <li>
                              <a href="<?php echo base_url('preparations-toefl'); ?>" class="collapsible-header waves-effect">TOEFL</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url('preparations-toeic'); ?>" class="collapsible-header waves-effect">TOEIC</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url('preparations-ielts'); ?>" class="collapsible-header waves-effect">IELTS</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url('preparations-ibt'); ?>" class="collapsible-header waves-effect">IBT</a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li>
                     <a href="<?php echo base_url('programs-conver'); ?>" class="collapsible-header waves-effect">Conver</a>
                  </li>
                  <li>
                     <a href="<?php echo base_url('programs-general'); ?>" class="collapsible-header waves-effect">General</a>
                  </li>
				   <li>
                     <a href="<?php echo base_url('programs-esp'); ?>" class="collapsible-header waves-effect">General</a>
                  </li>
                  <li>
                     <a href="<?php echo base_url('programs-testing'); ?>" class="collapsible-header waves-effect">Testing</a>
                  </li>
               </ul>
            </div>
         </li>
         <li>
            <a href="<?php echo base_url('partnerships'); ?>" class="collapsible-header waves-effect">Partnerships</a>
         </li>
         <li>
            <a href="<?php echo base_url('careers'); ?>" class="collapsible-header waves-effect">Career</a>
         </li>
          <li>
            <a href="<?php echo base_url('event'); ?>" class="collapsible-header waves-effect">Event</a>
         </li>
      </ul>
   </div>


   <!-- Content -->
   <main>
      