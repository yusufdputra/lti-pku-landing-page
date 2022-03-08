<div class="row">
   <div class="col l4 offset-l2">

      <div class="card form">
         <div class="row">

            <div class="col s12 title-form">
               <i class="material-icons left">how_to_reg</i><h5>Edit Profil</h5>
            </div>

            <?php 
               $hidden = array(
                  'id_akses' => $row_user['id_akses'],
                  'username_lama' => $row_user['username']
               );
               echo form_open(base_url('akses09/user/edit-profil'), '', $hidden);
            ?>

            <!-- Username -->
            <div class="col s12 input-field">
               <input type="text" name="username" id="username" value="<?php echo set_value('username') ? set_value('username') : $row_user['username']; ?>">
               <label for="username">
                  Username <span class="red-text">*</span>
               </label>
               <?php echo form_error('username', '<span class="alert red-text">', '</span>'); ?>
            </div>

            <!-- Nama -->
            <div class="col s12 input-field">
               <input type="text" name="nama" id="nama" value="<?php echo set_value('nama') ? set_value('nama') : $row_user['nama']; ?>">
               <label for="nama">
                  Nama <span class="red-text">*</span>
               </label>
               <?php echo form_error('nama', '<span class="alert red-text">', '</span>'); ?>
            </div>

            <!-- Konfirmasi password -->
            <div class="col s12 input-field">
               <input type="password" name="konfirmasi_password" id="konfirmasi-password" value="<?php echo set_value('konfirmasi_password'); ?>">
               <label for="konfirmasi-password">
                  Konfirmasi password <span class="red-text">*</span>
               </label>
               <?php echo form_error('konfirmasi_password', '<span class="alert red-text">', '</span>'); ?>
            </div>

            

            <!-- Button Submit -->
            <div class="col s12 input-field right-align">
               <button type="submit" class="btn btn-submit waves-effect">Simpan Perubahan <i class="material-icons right">send</i></button>
            </div>

            <?php 
               echo form_close(); 
            ?>

         </div>
      </div>

   </div>





   <div class="col l4">

      <div class="card form">
         <div class="row">

            <div class="col s12 title-form">
               <i class="material-icons left">lock</i><h5>Set Password</h5>
            </div>

            <?php 
               $hidden = array(
                  'id_akses' => $row_user['id_akses']
               );
               echo form_open(base_url('akses09/user/edit-password'), '', $hidden);
            ?>


            <!-- Password baru -->
            <div class="col s12 input-field">
               <input type="password" name="password_baru" id="password-baru" value="<?php echo set_value('password_baru'); ?>">
               <label for="password-baru">
                  Password baru <span class="red-text">*</span>
               </label>
               <?php echo form_error('password_baru', '<span class="alert red-text">', '</span>'); ?>
            </div>

            <!-- Ulangi password -->
            <div class="col s12 input-field">
               <input type="password" name="ulangi_password" id="ulangi-password" value="<?php echo set_value('ulangi_password'); ?>">
               <label for="ulangi-password">
                  Ulangi password <span class="red-text">*</span>
               </label>
               <?php echo form_error('ulangi_password', '<span class="alert red-text">', '</span>'); ?>
            </div>

            <!-- konfirmasi password lama -->
            <div class="col s12 input-field">
               <input type="password" name="konfirmasi_password_lama" id="konfirmasi-password-lama" value="<?php echo set_value('konfirmasi_password_lama'); ?>">
               <label for="konfirmasi-password-lama">
                  Konfirmasi password lama <span class="red-text">*</span>
               </label>
               <?php echo form_error('konfirmasi_password_lama', '<span class="alert red-text">', '</span>'); ?>
            </div>

            

            <!-- Button Submit -->
            <div class="col s12 input-field right-align">
               <button type="submit" class="btn btn-submit waves-effect">Simpan Perubahan <i class="material-icons right">send</i></button>
            </div>

            <?php 
               echo form_close(); 
            ?>

         </div>
      </div>

   </div>
</div>



<script>

   window.onload = function() {
      const pesan = '<?php echo $this->session->flashdata('pesan'); ?>';

      if (pesan)
      {
         M.toast({ html: '<i class="material-icons left">check_circle_outline</i>' + pesan });
      }
   }

</script>