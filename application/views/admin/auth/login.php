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
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/backend.css">
   <!-- jQuery -->
   <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
   
</head>
<body class="login">

   <div class="form">
      <div class="row">

         <?php if ($this->session->flashdata('pesan')) : ?>
            <div class="col s12 input-field pesan-login">
               <?php echo $this->session->flashdata('pesan'); ?>
            </div>
         <?php endif; ?>

         <?php echo form_open(base_url('akses09')); ?>

         <div class="col s12 input-field">
            <input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>">
            <label for="username">Username</label>
            <?php echo form_error('username', '<span class="alert red-text">', '</span>'); ?>
         </div>

         <div class="col s12 input-field">
            <input type="password" name="password" id="password" value="<?php echo set_value('password'); ?>">
            <label for="password">Password</label>
            <?php echo form_error('password', '<span class="alert red-text">', '</span>'); ?>
         </div>

         <div class="col s12 input-field">
            <button type="submit" class="btn waves-effect btn-login">Masuk</button>
         </div>

         <?php echo form_close(); ?>

      </div>
   </div>

   <!-- Materialize JS -->
   <script src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
   <!-- Script JS -->
   <script src="<?php echo base_url(); ?>assets/js/script.js"></script>
</body>
</html>