   
   </main>
</div>
<!-- End of Container -->


   <!-- Footer -->
   <footer>
      <div class="container">
         <div class="row">
            <div class="col l2 s12 links">
               <h5>Links</h5>
					<a href="<?php echo base_url(); ?>" class="link-home" data="home">Home</a>
					<a href="<?php echo base_url('about-lti'); ?>" data="about-lti">About LTI</a>
					<a href="<?php echo base_url('preparations-toefl'); ?>" data="programs">Programs</a>
					<a href="<?php echo base_url('partnerships'); ?>" data="partnerships">Partnerships</a>
					<a href="<?php echo base_url('careers'); ?>" data="carier">Careers</a>
            </div>
            <div class="col l2 s12 links hide-on-med-and-down">
               <h5>Programs</h5>
               <a href="<?php echo base_url('preparations-toefl'); ?>">Preparation</a>
               <a href="<?php echo base_url('programs-conver'); ?>">Conver</a>
               <a href="<?php echo base_url('programs-general'); ?>">General</a>
               <a href="<?php echo base_url('programs-testing'); ?>">Testing</a>
            </div>
            <div class="col l2 s12 links hide-on-med-and-down">
               <h5>Preparation</h5>
               <a href="<?php echo base_url('preparations-toefl'); ?>">TOEFL</a>
               <a href="<?php echo base_url('preparations-toeic'); ?>">TOEIC</a>
               <a href="<?php echo base_url('preparations-ielts'); ?>">IELTS</a>
               <a href="<?php echo base_url('preparations-ibt'); ?>">IBT</a>
            </div>
            
            <div class="col offset-l1 l5 s12 contact-us">
               <h5>Contact Us</h5>
               <p><?php echo $row_profil['alamat1']; ?></p>
               <p><?php echo $row_profil['alamat2']; ?></p>
               <p><?php echo $row_profil['nomor_telp']; ?></p>
               <p><?php echo "+" . $row_profil['nomor_hp']; ?></p>
               <p><?php echo $row_profil['email']; ?></p>
            </div>
         </div>
      </div>
      <div class="footer-copyright">
         <div class="container">
            <div class="row">
               <div class="col s12 sosmed">
                  <a href="<?php echo $row_profil['instagram']; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                  <a href="<?php echo $row_profil['facebook']; ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                  <a href="<?php echo $row_profil['twitter']; ?>" target="_blank"><i class="fab fa-twitter"></i></a>
               </div>
            </div>
            <div class="row">
               <div class="col s12 copyright">
                  <span>&copy; <?php echo date('Y', strtotime('now')) . ' - ' . $row_profil['nama_perusahaan'] . ', All rights reserved.'; ?></span>
               </div>
            </div>
         </div>
      </div>
   </footer>



   
   <div class="modal modal-schedule-toefl center-align">
      <div class="modal-content">
         <a href="#!" class="modal-close waves-effect waves-light btn-flat"><i class="material-icons">clear</i></a>

         <div class="carousel carousel-slider carousel-in-modal center">

            <?php foreach ($promo as $row_promo) : ?>

            <div class="carousel-item" href="#one">
               <img src="<?php echo base_url(); ?>assets/img/promo/<?php echo $row_promo['img_promo']; ?>">
            </div>

            <?php endforeach; ?>
            
         </div>

         <div class="center">
               <a href="https://wa.me/<?php echo $row_profil['nomor_hp']; ?>?text=Saya%20tertarik%20dan%20ingin%20mengikuti%20program%20..." target="_blank"" class="btn waves-effect btn-sign-up waves-light">sign up now</a>
            </div>

      </div>
  </div>
   
   <!-- Materialize JS -->
   <script src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
   <!-- My Script -->
   <script src="<?php echo base_url(); ?>assets/js/script.js"></script>
</body>
</html>