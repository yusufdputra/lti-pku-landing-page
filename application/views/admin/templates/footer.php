      </main>
      <!-- End Main Content -->

   </div>
   <!-- End Container -->

   <footer>
      <div class="container">
         <p>&copy; <?php echo date('Y') . ' - ' . $row_profil['nama_perusahaan']; ?>, all rights reserved.</p>
      </div>
   </footer>


<!-- Modal keluar -->
<div id="modal-keluar" class="modal modal-keluar">
   <div class="modal-content">

      <div class="center-align">
         <i class="large material-icons">help</i>
         <h4>Yakin ingin keluar ?</h4>
         <a href="<?php echo base_url('akses09/keluar'); ?>" class="btn-flat waves-effect grey-text text-lighten-1">Keluar</a>
         <a class="btn-flat modal-close waves-effect grey-text text-lighten-1">Batal</a>
      </div>    

   </div>
</div>
   
   
   <!-- Materialize JS -->
   <script src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
   <!-- Script JS -->
   <script src="<?php echo base_url(); ?>assets/js/b-script.js"></script>
</body>
</html>