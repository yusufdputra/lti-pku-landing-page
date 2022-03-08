<div class="row">

   <!-- Detail -->
   <div class="col l4 offset-l2">
      <div class="card">
         <div class="collection">

            <!-- Logo Perusahaan -->
            <div class="collection-item logo">
               <img src="<?php echo base_url(); ?>assets/img/logo/<?php echo $row_profil['logo']; ?>" alt="logo-lti-pekanbaru">
            </div>

            <!-- Nama Perusahaan -->
            <div class="collection-item">
               <h5>Nama perusahaan</h5>
               <p><?php echo $row_profil['nama_perusahaan']; ?></p>
            </div>

            <!-- Moto -->
            <div class="collection-item">
               <h5>Moto perusahaan</h5>
               <p><?php echo $row_profil['moto']; ?></p>
            </div>

            <!-- Email -->
            <div class="collection-item">
               <h5>Email</h5>
               <p><?php echo $row_profil['email']; ?></p>
            </div>

            <!-- Nomor Telpon -->
            <div class="collection-item">
               <h5>Nomor telpon</h5>
               <p><?php echo $row_profil['nomor_telp']; ?></p>
            </div>

            <!-- Nomor Handphone -->
            <div class="collection-item">
               <h5>Nomor handphone/ whatsapp</h5>
               <p><?php echo '+' . $row_profil['nomor_hp']; ?></p>
            </div>

            <!-- Alamat 1 -->
            <div class="collection-item">
               <h5>Alamat kantor pusat (utama)</h5>
               <p><?php echo $row_profil['alamat1']; ?></p>
            </div>

            <!-- Alamat 2 -->
            <div class="collection-item">
               <h5>Alamat kantor cabang</h5>
               <p><?php echo $row_profil['alamat2'] ? $row_profil['alamat2'] : '-'; ?></p>
            </div>

            <!-- Sosial Media -->
            <div class="collection-item">
               <h5>Sosial media</h5>
               <a href="<?php echo $row_profil['instagram'] ?>" target="_blank"><i class="fab fa-instagram"></i>instagram</a>
               <a href="<?php echo $row_profil['facebook'] ?>" target="_blank"><i class="fab fa-facebook"></i>facebook</a>
               <a href="<?php echo $row_profil['twitter'] ?>" target="_blank"><i class="fab fa-twitter"></i>twitter</a>
            </div>

         </div>
      </div>
   </div>
   <!-- End of Detail -->

   <!-- Form Edit -->
   <div class="col l4">
      <div class="card form">
         <div class="row">

            <div class="col s12 title-form">
               <i class="material-icons left">edit</i><h5>Edit Profil</h5>
            </div>

            <?php 
               $hidden = array(
                  'id_profil' => $row_profil['id_profil'],
                  'logo_lama' => $row_profil['logo']
               );
               echo form_open_multipart('', '', $hidden);
            ?>

            <div class="col s12 title-section-profil">
               <i class="material-icons left">domain</i><p>Profil Perusahaan</p>
            </div>

            <!-- Nama Perusahaan -->
            <div class="col s12 input-field">
               <input type="text" name="nama_perusahaan" id="nama-perusahaan" value="<?php echo set_value('nama_perusahaan') ? set_value('nama_perusahaan') : $row_profil['nama_perusahaan']; ?>">
               <label for="nama-perusahaan">
                  Nama perusahaan <span class="red-text">*</span>
               </label>
               <?php if (form_error('nama_perusahaan')) : ?>
                  <span class="red-text alert"><?php echo form_error('nama_perusahaan'); ?></span>
               <?php endif; ?>
            </div>

            <!-- Moto Perusahaan -->
            <div class="col s12 input-field">
               <input type="text" name="moto_perusahaan" id="moto-perusahaan" value="<?php echo set_value('moto_perusahaan') ? set_value('moto_perusahaan') : $row_profil['moto']; ?>">
               <label for="moto-perusahaan">
                  Moto perusahaan <span class="red-text">*</span>
               </label>
               <?php if (form_error('moto_perusahaan')) : ?>
                  <span class="red-text alert"><?php echo form_error('moto_perusahaan'); ?></span>
               <?php endif; ?>
            </div>

            <div class="col s12 input-field center-align">
               <img src="<?php echo base_url(); ?>assets/img/logo/<?php echo $row_profil['logo'] ?>" id="preview" alt="logo perusahaan">
            </div>

            <div class="col s12 input-field file-field">
               <div class="btn">
                  <span>Pilih Logo</span>
                  <input type="file" name="file" id="img-input">
               </div>
            </div>


            <div class="col s12 title-section-profil">
               <i class="material-icons left">place</i><p>Lokasi Perusahaan</p>
            </div>

            <!-- Alamat Pusat -->
            <div class="col s12 input-field">
               <textarea name="alamat_pusat" id="alamat-pusat" class="materialize-textarea"><?php echo set_value('alamat_pusat') ? set_value('alamat_pusat') : $row_profil['alamat1']; ?></textarea>
               <label for="alamat-pusat">
                  Alamat pusat <span class="red-text">*</span>
               </label>
               <?php if (form_error('alamat_pusat')) : ?>
                  <span class="red-text alert"><?php echo form_error('alamat_pusat'); ?></span>
               <?php endif; ?>
            </div>

            <!-- Alamat Cabang -->
            <div class="col s12 input-field">
               <textarea name="alamat_cabang" id="alamat-cabang" class="materialize-textarea"><?php echo set_value('alamat_cabang') ? set_value('alamat_cabang') : $row_profil['alamat2']; ?></textarea>
               <label for="alamat-cabang">
                  Alamat cabang
               </label>
            </div>


            <div class="col s12 title-section-profil">
               <i class="material-icons left">phone_in_talk</i><p>Kontak</p>
            </div>

            <!-- Email -->
            <div class="col s12 input-field">
               <input type="text" name="email" id="email" value="<?php echo set_value('email') ? set_value('email') : $row_profil['email']; ?>">
               <label for="email">
                  Email <span class="red-text">*</span>
               </label>
               <?php if (form_error('email')) : ?>
                  <span class="red-text alert"><?php echo form_error('email'); ?></span>
               <?php endif; ?>
            </div>

            <!-- Nomor Telpon -->
            <div class="col s12 input-field">
               <input type="text" name="nomor_telpon" id="nomor-telpon" value="<?php echo set_value('nomor_telpon') ? set_value('nomor_telpon') : $row_profil['nomor_telp']; ?>">
               <label for="nomor-telpon">
                  Nomor telpon <span class="red-text">*</span>
               </label>
               <?php if (form_error('nomor_telpon')) : ?>
                  <span class="red-text alert"><?php echo form_error('nomor_telpon'); ?></span>
               <?php endif; ?>
            </div>

            <!-- Nomor Handphone/ Whatsapp -->
            <div class="col s12 input-field">
               <input type="text" name="nomor_handphone" id="nomor-handphone" value="<?php echo set_value('nomor_handphone') ? set_value('nomor_handphone') : $row_profil['nomor_hp']; ?>">
               <label for="nomor-handphone">
                  Nomor handphone/ whatsapp <span class="red-text">*</span>
               </label>
               <?php if (form_error('nomor_handphone')) : ?>
                  <span class="red-text alert"><?php echo form_error('nomor_handphone'); ?></span>
               <?php endif; ?>
            </div>

            
            <div class="col s12 title-section-profil">
               <i class="material-icons left">thumb_up_alt</i><p>Sosial Media</p>
            </div>

            <!-- Sosmed Instagram -->
            <div class="col s12 input-field">
               <input type="text" name="sosmed_instagram" id="sosmed-instagram" value="<?php echo set_value('sosmed_instagram') ? set_value('sosmed_instagram') : $row_profil['instagram']; ?>">
               <label for="sosmed-instagram">
                  Instagram (link sosmed)
               </label>
               <?php if (form_error('sosmed_instagram')) : ?>
                  <span class="red-text alert"><?php echo form_error('sosmed_instagram'); ?></span>
               <?php endif; ?>
            </div>

            <!-- Sosmed Facebook -->
            <div class="col s12 input-field">
               <input type="text" name="sosmed_facebook" id="sosmed-facebook" value="<?php echo set_value('sosmed_facebook') ? set_value('sosmed_facebook') : $row_profil['facebook']; ?>">
               <label for="sosmed-facebook">
                  Facebook (link sosmed)
               </label>
               <?php if (form_error('sosmed_facebook')) : ?>
                  <span class="red-text alert"><?php echo form_error('sosmed_facebook'); ?></span>
               <?php endif; ?>
            </div>

            <!-- Sosmed Twitter -->
            <div class="col s12 input-field">
               <input type="text" name="sosmed_twitter" id="sosmed-twitter" value="<?php echo set_value('sosmed_twitter') ? set_value('sosmed_twitter') : $row_profil['twitter']; ?>">
               <label for="sosmed-twitter">
                  Twitter (link sosmed)
               </label>
               <?php if (form_error('sosmed_twitter')) : ?>
                  <span class="red-text alert"><?php echo form_error('sosmed_twitter'); ?></span>
               <?php endif; ?>
            </div>

            

            <!-- Button Submit -->
            <div class="col s12 input-field right-align">
               <button type="submit" class="btn btn-submit waves-effect">Simpan Perubahan <i class="material-icons right">send</i></button>
            </div>

            <?php echo form_close(); ?>

         </div>
      </div>
   </div>
   <!-- End of Form Edit -->
</div>



<script>
   $(document).ready(function() {
      function readURL(input) {
         if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
               $('#preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
         }
      }

      $('#img-input').change(function() {
         readURL(this);
      });


      window.onload = function() {
         const pesan = '<?php echo $this->session->flashdata("pesan"); ?>';
         
         if (pesan == 'sukses update profil') {
            M.toast({ html: '<i class="material-icons left">check_circle_outline</i> Berhasil mengubah data profil' });
         }

         if (pesan == 'gagal upload logo') {
            M.toast({ html: '<i class="material-icons left">error_outline</i> Gagal mengubah data profil <br> Logo upload harus berekstensikan png/ jpg/ jpeg' });
         }

         const errNamaPerusahaan = '<?php echo form_error("nama_perusahaan"); ?>';
         const errMotoPerusahaan = '<?php echo form_error("moto_perusahaan"); ?>';
         const errAlamatPusat    = '<?php echo form_error("alamat_pusat"); ?>';
         const errEmail          = '<?php echo form_error("email"); ?>';
         const errNomorTelp      = '<?php echo form_error("nomor_telpon"); ?>';
         const errNomorHP        = '<?php echo form_error("nomor_handphone"); ?>';
         const errLinkIg         = '<?php echo form_error("sosmed_twitter"); ?>';
         const errLinkFb         = '<?php echo form_error("sosmed_facebook"); ?>';
         const errLinkTwtr       = '<?php echo form_error("sosmed_twitter"); ?>';

         if (errNamaPerusahaan || errMotoPerusahaan || errAlamatPusat || errEmail || errNomorTelp || errNomorHP || errLinkIg || errLinkFb || errLinkTwtr) {
            M.toast({ html: '<i class="material-icons left">error_outline</i> Gagal mengubah data profil <br> Pastikan inputan sudah benar' });
         }
         
      }
   });
</script>