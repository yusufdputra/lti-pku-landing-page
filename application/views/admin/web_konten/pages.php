<?php 

function format_tanggal( $tgl )
{
   $nama_bulan = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

   $explode = explode("-", $tgl);

   $tanggal = ($explode[0][0] == "0") ? $explode[0][1] : $explode[0];
   $tanggal .= " ";
   $tanggal .= ($explode[1][0] == "0") ? $nama_bulan[$explode[1][1]] : $nama_bulan[$explode[1]];
   $tanggal .= " ";
   $tanggal .= $explode[2];

   return $tanggal;
}

$tgl_sekarang = strtotime('now');

?>

<!-- Frame Top Browser -->
<div class="frame-top-browser">
   <span class="red"></span>
   <span class="yellow"></span>
   <span class="green"></span>
</div>
<!-- End Frame Top Browser -->


<!-- Frame Pages -->
<div class="frame-pages">

   <!-- Top Bar -->
   <div class="top-bar">
      <span><i class="fas fa-phone"></i><?php echo $row_profil['nomor_telp']; ?></span>
		<span class="hide-on-med-and-down"><i class="fas fa-envelope"></i><?php echo $row_profil['email']; ?></span>
      <span>
      	<a href="#!" class="link-schedule-toefl"><i class="fas fa-calendar-alt"></i>TOEFL ITP Schedule</a>
      </span>
   </div>
   
   <!-- Nav -->
   <nav class="z-depth-0">
      <div class="nav-wrapper white">
         <div class="container">
            <a href="#" class="brand-logo"><img src="<?php echo base_url(); ?>assets/img/logo/<?php echo $row_profil['logo']; ?>" alt="logo-perusahaan"></a>
            <ul class="right">
               <li><a class="menu link" id="page-home">Home</a></li>
               <li><a class="menu link" id="page-about-lti">About LTI</a></li>
               <li><a class="dropdown-trigger link" data-target="dropdown-programs">Programs <i class="material-icons right">arrow_drop_down</i></a></li>
               <li><a class="menu link" id="page-partnerships">Partnerships</a></li>
               <li><a class="menu link" id="page-careers">Careers</a></li>
            </ul>
         </div>
      </div>
   </nav>
   <!-- End Nav -->

   <!-- Dropdown Programs Structure -->
   <ul id="dropdown-programs" class="dropdown-content">
      <li><a class="dropdown-trigger link" data-target="dropdown-preparations">Preparations <span>&#9656;</span></a></li>
      <li><a class="menu link" id="page-programs-conver">Conver</a></li>
      <li><a class="menu link" id="page-programs-general">General</a></li>
	   <li><a class="menu link" id="page-preparations-toeic">ESP</a></li>
      <li><a class="menu link" id="page-programs-testing">TPO</a></li>
   </ul>

   <!-- Dropdown Preparations Structure -->
   <ul id="dropdown-preparations" class="dropdown-content2">
      <li><a class="menu link" id="page-preparations-toefl">TOEFL</a></li>
      <!--<li><a class="menu link" id="page-preparations-toeic">TOEIC</a></li>-->
      <li><a class="menu link" id="page-preparations-ielts">IELTS</a></li>
      <li><a class="menu link" id="page-preparations-ibt">TOEIC</a></li>
   </ul>

   <!-- Page Content -->
   <main>
      <div id="page-content">
         <!-- Section firt landing -->
         <section id="first-landing" class="first-landing">
            <div class="jumbotron">
               <div class="row">
                  <div class="col s12 l6 center-align">
                     <h1><?php echo $row_profil['moto']; ?></h1>
                     <a href="#!" class="btn btn-large waves-effect red darken-3">Join Now</a>
                  </div>
                  <div class="col l6 hide-on-med-and-down">
                     <div class="image-float">
                        <img src="<?php echo base_url(); ?>assets/img/lti_galeri/lti-1.jpg" alt="lti-image-1" class="img-1">
                        <img src="<?php echo base_url(); ?>assets/img/lti_galeri/lti-3.jpg" alt="lti-image-2" class="img-2">
                     </div>
                  </div>
               </div>
            </div>
         </section>



         <!-- Section schedule TOEFL ITP -->
         <section id="schedule-toefl" class="schedule-toefl">
            <div class="container">
               <h3 class="title-section">TOEFL ITP Schedule</h3>

               <div class="carousel carousel-schedule-toefl">

                  <?php 
                     foreach ($schedule as $row_schedule) : 
                        $tanggal1 = strtotime($row_schedule['tanggal1']);
                        $tanggal2 = strtotime($row_schedule['tanggal2']);
                        $tanggal3 = strtotime($row_schedule['tanggal3']);

                        $ket1 = '';
                        $ket2 = '';
                        $ket3 = '';
                        if ($tgl_sekarang < $tanggal1) { $ket1 = ''; } else { $ket1 = 'grey-text'; }
                        if ($tgl_sekarang < $tanggal2) { $ket2 = ''; } else { $ket2 = 'grey-text'; }
                        if ($tgl_sekarang < $tanggal3) { $ket3 = ''; } else { $ket3 = 'grey-text'; }
                  ?>
                  
                  <div class="carousel-item">
                     <div class="card">
                        <i class="material-icons modal-trigger edit-schedule" data-target="edit-schedule-<?php echo $row_schedule['bulan']; ?>" data-bulan="<?php echo $row_schedule['bulan']; ?>">edit</i>
                        <div class="card-title">
                           <span><?php echo strtoupper($row_schedule['bulan']); ?></span>
                        </div>
                        <div class="card-content">
                           <?php echo $row_schedule['tanggal1'] == '0000-00-00' ? '' : ' <p class="date ' . $ket1 . '"> <i class="material-icons">date_range</i>' . format_tanggal(date('d-m-Y', strtotime($row_schedule['tanggal1']))) . '</p>'; ?>

                           <?php echo $row_schedule['tanggal2'] == '0000-00-00' ? '' : ' <p class="date ' . $ket2 . '"> <i class="material-icons">date_range</i>' . format_tanggal(date('d-m-Y', strtotime($row_schedule['tanggal2']))) . '</p>'; ?>

                           <?php echo $row_schedule['tanggal3'] == '0000-00-00' ? '' : ' <p class="date ' . $ket3 . '"> <i class="material-icons">date_range</i>' . format_tanggal(date('d-m-Y', strtotime($row_schedule['tanggal3']))) . '</p>'; ?>
                        </div>
                     </div>
                  </div>

                  <?php endforeach; ?>

               </div>

               <!-- Navigasi desktop device -->
               <div class="carousel-schedule-toefl-nav center-align hide-on-med-and-down">
                  <a href="" class="next-carousel-schedule-toefl"><i class="material-icons waves-effect">keyboard_arrow_left</i></a>
                  <a href="" class="prev-carousel-schedule-toefl"><i class="material-icons waves-effect">keyboard_arrow_right</i></a>
               </div>

            </div>
         </section>





         <!-- Section testing service -->
         <section id="testing-service" class="testing-service">

            <div class="container">
               <h3 class="title-section">Testing Service</h3>
            </div>

            <div class="jumbotron">
               <div class="row">

                  <!-- TOEFL IBT -->
                  <div class="col s12 l2 offset-l1">
                     <div class="card card-toef-ibt">
                        <div class="card-content">
                           <span class="card-title">TOEFL IBT</span>
                           <p>TOEFL Internet Based Test (IBT) adalah tes yang terdiri atas empat sesi antara lain reading, listening, speaking, dan writing.</p>
                        </div>
                     </div>
                  </div>

                  <!-- TOEFL ITP -->
                  <div class="col s12 l2">
                     <div class="card card-toefl-itp">
                        <div class="card-content">
                           <span class="card-title">TOEFL ITP</span>
                           <p>TOEFL Institutional Testing Program (ITP) adalah salah satu jenis tes yang dikelauarkan oleh English Testing System (ETS) khusus untuk wilayah Asia.</p>
                        </div>
                     </div>
                  </div>

                  <!-- TOEIC -->
                  <div class="col s12 l2">
                     <div class="card card-toeic">
                        <div class="card-content">
                           <span class="card-title">TOEIC</span>
                           <p>Tes TOEIC adalah sebuah tes untuk menunjukkan kemampuan memenuhi standart berkomunikasi dalam bahasa Inggris dalam dunia kerja. </p>
                        </div>
                     </div>
                  </div>

                  <!-- IELTS -->
                  <div class="col s12 l2">
                     <div class="card card-ielts">
                        <div class="card-content">
                           <span class="card-title">IELTS</span>
                           <p>International English Language Testing System (IELTS) adalah tes untuk megukur kemampuan berbahasa Inggris kamu yang ingin belajar atau bekerja di Negeri. </p>
                        </div>
                     </div>
                  </div>

                  <!-- PREDICTION TEST -->
                  <div class="col s12 l2">
                     <div class="card card-prediction-test">
                        <div class="card-content">
                           <span class="card-title">PREDICTION TEST</span>
                           <p>Adalah tes yang digunakan untuk memprediksi kemampuan peserta sebelum mengikut tes TOEFL ITP.</p>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </section>


         <!-- Section awards -->
         <section id="awards" class="awards">
            <div class="container">
               
               <h3 class="title-section">Certificate</h3>
               
               <!-- Desktop device -->
               <div class="slider slider-awards hide-on-med-and-down">
                  <ul class="slides">
                     <!-- Awards 1 -->
                     <li>
                        <img src="" alt="">
                        <div class="caption left-align row">
                           <div class="col l6 s12">
                              <h3>IELTS Certificate</h3>
                              <p>This is to Certify That LTI-Galileo Pekanbaru<br> is an Approver TEST Venue of IDP : <b>IELTS Australia - Test Centre</b><br> IDP Education Indonesia <b>(IDP South Jakarta - ID017)</b></p>
                           </div>
                           <div class="col l6 s12 img-awards">
                              <img src="<?php echo base_url(); ?>assets/img/sertifikat/sertifikat-1.jpg" alt="awards-1" class="potrait">
                           </div>
                        </div>
                     </li>

                     <!-- Awards 2 -->
                     <li>
                        <img src="" alt="">
                        <div class="caption right-align row">
                           <div class="col l6 s12 img-awards">
                              <img src="<?php echo base_url(); ?>assets/img/sertifikat/sertifikat-2.jpg" alt="awards-2" class="landscape">
                           </div>
                           <div class="col l6 s12">
                              <h3>ITP Certificate</h3>
                              <p>Indonesia International Education Foundation - IIEF<br> Country Master Distributor for <b>TOEFL ITP</b> in Indonesia<br>
                        Proundly Acknowledges : Language Training Institution Pekanbaru <br>
                        as an Authorized Test Center for <b>TOEFL ITP</b>
                        </p>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>

               <!-- Navigasi desktop device -->
               <div class="slider-awards-nav center-align hide-on-med-and-down">
                  <a href="" class="next-slider-awards"><i class="material-icons waves-effect">keyboard_arrow_left</i></a>
                  <a href="" class="prev-slider-awards"><i class="material-icons waves-effect">keyboard_arrow_right</i></a>
               </div>

            </div>
         </section>



         <!-- Section courses -->
         <section id="courses" class="courses">
            <div class="container">

               <h3 class="title-section white-text">Courses</h3>
               
               <div class="carousel carousel-courses">

                  <?php foreach ($courses as $row_courses) : ?>
                  
                  <div class="carousel-item">
                     <div class="card">
                        <div class="card-image">
                           <img src="<?php echo base_url(); ?>assets/img/courses/<?php echo $row_courses['bg_image'] ?>">
                           <span class="card-title"><?php echo ucwords($row_courses['courses']); ?></span>
                        </div>
                        <a href="#!" class="btn red darken-3 waves-effect btn-sign-up">Sign up now</a>
                        <i class="material-icons modal-trigger edit-courses" data-target="edit-courses-<?php echo $row_courses['id_courses']; ?>">edit</i>
                        <a href="<?php echo base_url('akses09/web-konten/courses/delete/' . $row_courses['id_courses']); ?>"><i class="material-icons delete-courses">delete</i></a>
                        <div class="card-content">
                           <p><?php echo $row_courses['desc_courses']; ?></p>
                        </div>
                     </div>
                  </div>
                  
                  <?php endforeach; ?>

                  <div class="carousel-item">
                     <div class="card">
                        <div class="card-image grey lighten-4 center-align"></div>
                        <a href="#!" class="btn green darken-3 waves-effect btn-add-courses modal-trigger" data-target="add-courses">add courses</a>
                        <div class="card-content grey lighten-2"></div>
                     </div>
                  </div>

               </div>

               <!-- Navigasi desktop device -->
               <div class="carousel-courses-nav center-align hide-on-med-and-down">
                  <a href="" class="next-carousel-courses"><i class="material-icons waves-effect">keyboard_arrow_left</i></a>
                  <a href="" class="prev-carousel-courses"><i class="material-icons waves-effect">keyboard_arrow_right</i></a>
               </div>

            </div>
         </section>



      <!-- Section testimonial -->
      <section id="testimonial" class="testimonial">
         <div class="container">

            <h3 class="title-section">Testimonial</h3>

            <!-- Desktop device -->
            <div class="carousel carousel-slider carousel-testimonial">
               <!-- Testimonial page 1 -->

                  <?php 
                     $rows_testi = ceil(count($testimonial)/3);
                     for ($i = 0; $i < $rows_testi; $i++) :
                  ?>
                  <div class="carousel-item">
                     <div class="row">
                     
                        <?php for ($j = 0; $j < 3; $j++) : ?>
                        
                        <div class="col l4 s12">
                           <div class="card <?php echo $testimonial[(($i+$j)+($i*2))]['warna_bg']; ?>">
                              <i class="material-icons edit-testi modal-trigger" data-target="edit-testimoni<?php echo $testimonial[(($i+$j)+($i*2))]['id_testimonial']; ?>" data-id="<?php echo $testimonial[(($i+$j)+($i*2))]['id_testimonial']; ?>">edit</i>
                              <img src="<?php echo base_url(); ?>assets/img/testimonial/<?php echo $testimonial[(($i+$j)+($i*2))]['foto']; ?>" alt="<?php echo $testimonial[(($i+$j)+($i*2))]['nama']; ?>" class="img-person-<?php echo (($i+$j+1)+($i*2)); ?>">
                              <div class="card-content">
                                 <p><?php echo $testimonial[(($i+$j)+($i*2))]['testimonial']; ?></p>
                              </div>
                              <span class="name-person"><?php echo ucwords($testimonial[(($i+$j)+($i*2))]['nama']); ?></span>
                           </div>
                        </div>
                              
                        <?php endfor; ?>

                     </div>
                  </div>

                  <?php 
                     endfor;
                  ?>
			   
            </div>

            <!-- Navigasi desktop device -->
            <div class="carousel-testimonial-nav center-align hide-on-med-and-down">
               <a href="" class="next-carousel-testi"><i class="material-icons waves-effect">keyboard_arrow_left</i></a>
               <a href="" class="prev-carousel-testi"><i class="material-icons waves-effect">keyboard_arrow_right</i></a>
            </div>

         </div>
      </section>

      <!-- Section promo -->
      <section id="promo" class="promo">
         <div class="container">

            <h3 class="title-section">Promo</h3>

            <div class="carousel carousel-promo">

               <?php foreach ($promo as $row_promo) : ?>

                  <div class="carousel-item">
                     <div class="card">
                        <a href="<?php echo base_url('akses09/web-konten/promo/delete/' . $row_promo['id_promo']); ?>"><i class="delete-promo material-icons">delete</i></a>
                        <div class="card-image">
                           <img src="<?php echo base_url('assets/img/promo/' . $row_promo['img_promo']); ?>">
                        </div>
                     </div>
                  </div>
               
               <?php endforeach; ?>


                  <div class="carousel-item">
                     <div class="card grey lighten-2">
                        <a href="#!" class="btn green darken-3 waves-effect btn-add-promo modal-trigger" data-target="add-promo">add promo</a>
                     </div>
                  </div>

               </div>

               <!-- Navigasi desktop device -->
               <div class="carousel-promo-nav center-align hide-on-med-and-down">
                  <a href="" class="next-carousel-promo"><i class="material-icons waves-effect">keyboard_arrow_left</i></a>
                  <a href="" class="prev-carousel-promo"><i class="material-icons waves-effect">keyboard_arrow_right</i></a>
               </div>

         </div>
      </section>



      </div>
   </main>
   <!-- End Page Content -->


   <!-- Footer -->
   <footer>
      <div class="container">
         <div class="row">
            <div class="col l2 s12 links">
               <h5>Links</h5>
					<a href="#!" class="link-home">Home</a>
					<a href="#!">About LTI</a>
					<a href="#!">Programs</a>
					<a href="#!">Partnerships</a>
					<a href="#!">Carier</a>
            </div>
            <div class="col l2 s12 links hide-on-med-and-down">
               <h5>Programs</h5>
               <a href="#!">Preparation</a>
               <a href="#!">Conver</a>
               <a href="#!">General</a>
				 <a href="#!">ESP</a>
               <a href="#!">Testing</a>
            </div>
            <div class="col l2 s12 links hide-on-med-and-down">
               <h5>Preparation</h5>
               <a href="#!">TOEFL</a>
               <a href="#!">TOEIC</a>
               <a href="#!">IELTS</a>
               <a href="#!">IBT</a>
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
                  <a href="#!"><i class="fab fa-instagram"></i></a>
                  <a href="#!"><i class="fab fa-facebook"></i></a>
                  <a href="#!"><i class="fab fa-twitter"></i></a>
               </div>
            </div>
            <div class="row">
               <div class="col s12 copyright">
                  <span>&copy; <?php echo date('Y', strtotime('now')) . ' - ' . $row_profil['nama_perusahaan']; ?>, All rights reserved.</span>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- End Footer -->

</div>
<!-- End Frame Pages -->

<!-- Frame Bottom Browser -->
<div class="frame-bottom-browser"></div>
<!-- End Frame Bottom Browser -->




<!-- Modal Edit Courses -->
<?php foreach ($courses as $row_courses) : ?>
<div id="edit-courses-<?php echo $row_courses['id_courses']; ?>" class="modal modal-edit-courses">
   <div class="modal-content">
      <h4>Edit Courses</h4>

      <div class="row">

         <?php 
            $hidden = ['id_courses' => $row_courses['id_courses']];
            echo form_open_multipart(base_url('akses09/web-konten/courses/edit/' . $row_courses['id_courses']), '', $hidden);
         ?>
      
         <div class="col s12 input-field">
            <textarea name="courses" id="courses" class="materialize-textarea textarea" data-length="30"><?php echo set_value('courses') ? set_value('courses') : $row_courses['courses']; ?></textarea>
            <label for="courses">Courses <span class="red-text">*</span></label>
            <?php if (form_error('courses')) : ?>
               <span class="red-text alert"><?php echo form_error('courses'); ?></span>
            <?php endif; ?>
         </div>
         
         <div class="col s12 input-field">
            <textarea name="desc_courses" id="desc-courses" class="materialize-textarea textarea" data-length="180"><?php echo set_value('desc_courses') ? set_value('desc_courses') : $row_courses['desc_courses']; ?></textarea>
            <label for="desc_courses">Desc Courses <span class="red-text">*</span></label>
            <?php if (form_error('desc_courses')) : ?>
               <span class="red-text alert"><?php echo form_error('desc_courses'); ?></span>
            <?php endif; ?>
         </div>

         <div class="col s12 input-field">
            <div class="foto bg-image-courses">
               <img src="<?php echo base_url(); ?>assets/img/courses/<?php echo $row_courses['bg_image']; ?>" id="preview-upload-courses-<?php echo $row_courses['id_courses']; ?>">

               <label class="file-upload">
                  <input type="file" name="foto" class="img-input" id="upload-courses-<?php echo $row_courses['id_courses']; ?>">
                  <i class="material-icons">edit</i>
               </label>

               <div class="loader">
                  <div class="preloader-wrapper active">
                     <div class="spinner-layer spinner-blue">
                        <div class="circle-clipper left">
                           <div class="circle"></div>
                        </div><div class="gap-patch">
                           <div class="circle"></div>
                        </div><div class="circle-clipper right">
                           <div class="circle"></div>
                        </div>
                     </div>

                     <div class="spinner-layer spinner-red">
                        <div class="circle-clipper left">
                           <div class="circle"></div>
                        </div><div class="gap-patch">
                           <div class="circle"></div>
                        </div><div class="circle-clipper right">
                           <div class="circle"></div>
                        </div>
                     </div>

                     <div class="spinner-layer spinner-yellow">
                        <div class="circle-clipper left">
                           <div class="circle"></div>
                        </div><div class="gap-patch">
                           <div class="circle"></div>
                        </div><div class="circle-clipper right">
                           <div class="circle"></div>
                        </div>
                     </div>

                     <div class="spinner-layer spinner-green">
                        <div class="circle-clipper left">
                           <div class="circle"></div>
                        </div><div class="gap-patch">
                           <div class="circle"></div>
                        </div><div class="circle-clipper right">
                           <div class="circle"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="col s12 input-field">
            <textarea name="wa_message" id="wa-message" class="materialize-textarea"><?php echo set_value('wa_message') ? set_value('wa_message') : $row_courses['wa_message']; ?></textarea>
            <label for="wa-message">WA Message Template</label>
            <?php if (form_error('wa_message')) : ?>
               <span class="red-text alert"><?php echo form_error('wa_message'); ?></span>
            <?php endif; ?>
         </div>
         
         <div class="col s12 input-field right-align">
            <button type="submit" class="btn waves-effect orange">Simpan</button>
         </div>      
         
         <?php echo form_close(); ?>

      </div>
      

   </div>
</div>
<?php endforeach; ?>



<div id="add-courses" class="modal modal-edit-courses">
   <div class="modal-content">
      <h4>Tambah Courses</h4>

      <div class="row">

         <?php echo form_open_multipart(base_url('akses09/web-konten/courses/add')); ?>
      
         <div class="col s12 input-field">
            <textarea name="courses" id="courses" class="materialize-textarea textarea" data-length="30"><?php echo set_value('courses'); ?></textarea>
            <label for="courses">Courses <span class="red-text">*</span></label>
            <?php if (form_error('courses')) : ?>
               <span class="red-text alert"><?php echo form_error('courses'); ?></span>
            <?php endif; ?>
         </div>
         
         <div class="col s12 input-field">
            <textarea name="desc_courses" id="desc-courses" class="materialize-textarea textarea" data-length="180"><?php echo set_value('desc_courses'); ?></textarea>
            <label for="desc_courses">Desc Courses <span class="red-text">*</span></label>
            <?php if (form_error('desc_courses')) : ?>
               <span class="red-text alert"><?php echo form_error('desc_courses'); ?></span>
            <?php endif; ?>
         </div>

         <div class="col s12 input-field">
            <div class="foto bg-image-courses">
               <img src="<?php echo base_url(); ?>assets/img/courses/default-img.jpg" id="preview-upload-courses">

               <label class="file-upload">
                  <input type="file" name="foto" class="img-input" id="upload-courses">
                  <i class="material-icons">edit</i>
               </label>

               <div class="loader">
                  <div class="preloader-wrapper active">
                     <div class="spinner-layer spinner-blue">
                        <div class="circle-clipper left">
                           <div class="circle"></div>
                        </div><div class="gap-patch">
                           <div class="circle"></div>
                        </div><div class="circle-clipper right">
                           <div class="circle"></div>
                        </div>
                     </div>

                     <div class="spinner-layer spinner-red">
                        <div class="circle-clipper left">
                           <div class="circle"></div>
                        </div><div class="gap-patch">
                           <div class="circle"></div>
                        </div><div class="circle-clipper right">
                           <div class="circle"></div>
                        </div>
                     </div>

                     <div class="spinner-layer spinner-yellow">
                        <div class="circle-clipper left">
                           <div class="circle"></div>
                        </div><div class="gap-patch">
                           <div class="circle"></div>
                        </div><div class="circle-clipper right">
                           <div class="circle"></div>
                        </div>
                     </div>

                     <div class="spinner-layer spinner-green">
                        <div class="circle-clipper left">
                           <div class="circle"></div>
                        </div><div class="gap-patch">
                           <div class="circle"></div>
                        </div><div class="circle-clipper right">
                           <div class="circle"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="col s12 input-field">
            <textarea name="wa_message" id="wa-message" class="materialize-textarea"><?php echo set_value('wa_message'); ?></textarea>
            <label for="wa-message">WA Message Template</label>
            <?php if (form_error('wa_message')) : ?>
               <span class="red-text alert"><?php echo form_error('wa_message'); ?></span>
            <?php endif; ?>
         </div>
         
         <div class="col s12 input-field right-align">
            <button type="submit" class="btn waves-effect orange">Simpan</button>
         </div>      
         
         <?php echo form_close(); ?>

      </div>
      

   </div>
</div>





<!-- Modal Edit Schedule -->
<?php 
   $i = 1;
   $nama_bulan = [
      'jan' => 'January',
      'feb' => 'February',
      'mar' => 'March',
      'apr' => 'April',
      'mei' => 'May',
      'jun' => 'June',
      'jul' => 'July',
      'agu' => 'August',
      'sep' => 'September',
      'okt' => 'October',
      'nov' => 'November',
      'des' => 'December'
   ];
   foreach ($schedule as $row_schedule) : 
      $jlh_hari = cal_days_in_month(CAL_GREGORIAN, $i, date('Y', strtotime('now')));
      $min_date = $nama_bulan[$row_schedule['bulan']] . ' 1, ' . date('Y', strtotime('now'));
      $max_date = $nama_bulan[$row_schedule['bulan']] . ' ' .$jlh_hari . ', ' . date('Y', strtotime('now'));
?>

<div id="edit-schedule-<?php echo $row_schedule['bulan']; ?>" class="modal modal-edit-schedule">
   <div class="modal-content">

      <input type="hidden" id="min-date-<?php echo $row_schedule['bulan']; ?>" value="<?php echo $min_date ?>">
      <input type="hidden" id="max-date-<?php echo $row_schedule['bulan']; ?>" value="<?php echo $max_date ?>">

      <h4><?php echo strtoupper($row_schedule['bulan']); ?></h4>
      
      <div class="row">
         
         <?php 
            $hidden = ['id_schedule' => $row_schedule['id_schedule']];
            echo form_open(base_url('akses09/web-konten/schedule/edit/' . $row_schedule['id_schedule']),'', $hidden);
         ?>

         <div class="col s12 input-field">
            <input type="text" name="tanggal1" id="tanggal1" class="datepicker" value="<?php echo $row_schedule['tanggal1'] == '0000-00-00' ? '' : date('d-m-Y', strtotime($row_schedule['tanggal1'])); ?>">
            <label for="tanggal1">Tanggal 1</label>
         </div>

         <div class="col s12 input-field">
            <input type="text" name="tanggal2" id="tanggal2" class="datepicker" value="<?php echo $row_schedule['tanggal2'] == '0000-00-00' ? '' : date('d-m-Y', strtotime($row_schedule['tanggal2'])); ?>">
            <label for="tanggal2">Tanggal 2</label>
         </div>

         <div class="col s12 input-field">
            <input type="text" name="tanggal3" id="tanggal3" class="datepicker" value="<?php echo $row_schedule['tanggal3'] == '0000-00-00' ? '' : date('d-m-Y', strtotime($row_schedule['tanggal3'])); ?>">
            <label for="tanggal3">Tanggal 3</label>
         </div>

         <div class="col s12 input-field right-align">
            <button type="submit" class="btn waves-effect orange">Simpan</button>
         </div>

         <?php echo form_close(); ?>


      </div>

   </div>
</div>
<?php 
   $i++;
   endforeach; 
?>



<!-- Modal Edit Testimonial -->
<?php foreach ($testimonial as $row_testi) : ?>
<div id="edit-testimoni<?php echo $row_testi['id_testimonial']; ?>" class="modal modal-edit-testimonial">
   <div class="modal-content">
      <h4>Edit Testimonial</h4>
      
      <div class="row">
         <?php 
            $hidden = ['id_testimonial' => $row_testi['id_testimonial']];
            echo form_open_multipart(base_url('akses09/web-konten/testimoni/edit/' . $row_testi['id_testimonial']), '', $hidden); 
         ?>

         <div class="col s12 input-field">
            <input type="text" name="nama" id="nama" value="<?php echo $row_testi['nama']; ?>">
            <label for="nama">Nama <span class="red-text">*</span></label>
            <?php if (form_error('nama')) : ?>
               <span class="red-text alert"><?php echo form_error('nama'); ?></span>
            <?php endif; ?>
         </div>

         <div class="col s12 input-field">
            <div class="foto">
               <img src="<?php echo base_url(); ?>assets/img/testimonial/<?php echo $row_testi['foto']; ?>" id="preview-upload-testi-<?php echo $row_testi['id_testimonial']; ?>">

               <label class="file-upload">
                  <input type="file" name="foto" class="img-input" id="upload-testi-<?php echo $row_testi['id_testimonial']; ?>">
                  <i class="material-icons">edit</i>
               </label>

               <div class="loader">
                  <div class="preloader-wrapper active">
                     <div class="spinner-layer spinner-blue">
                        <div class="circle-clipper left">
                           <div class="circle"></div>
                        </div><div class="gap-patch">
                           <div class="circle"></div>
                        </div><div class="circle-clipper right">
                           <div class="circle"></div>
                        </div>
                     </div>

                     <div class="spinner-layer spinner-red">
                        <div class="circle-clipper left">
                           <div class="circle"></div>
                        </div><div class="gap-patch">
                           <div class="circle"></div>
                        </div><div class="circle-clipper right">
                           <div class="circle"></div>
                        </div>
                     </div>

                     <div class="spinner-layer spinner-yellow">
                        <div class="circle-clipper left">
                           <div class="circle"></div>
                        </div><div class="gap-patch">
                           <div class="circle"></div>
                        </div><div class="circle-clipper right">
                           <div class="circle"></div>
                        </div>
                     </div>

                     <div class="spinner-layer spinner-green">
                        <div class="circle-clipper left">
                           <div class="circle"></div>
                        </div><div class="gap-patch">
                           <div class="circle"></div>
                        </div><div class="circle-clipper right">
                           <div class="circle"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="col s12 input-field">
            <textarea name="testimonial" id="testimonial" class="materialize-textarea textarea" data-length="260"><?php echo $row_testi['testimonial']; ?></textarea>
            <label for="testimonial">Testimoni <span class="red-text">*</span></label>
            <?php if (form_error('testimonial')) : ?>
               <span class="red-text alert"><?php echo form_error('testimonial'); ?></span>
            <?php endif; ?>
         </div>

         <div class="col s12 input-field right-align">
            <button type="submit" class="btn waves-effect orange">Simpan</button>
         </div>

         <?php echo form_close(); ?>
      </div>

   </div>
</div>
<?php endforeach; ?>


<!-- Modal Add Promo -->
<div id="add-promo" class="modal modal-add-promo">
   <div class="modal-content">
      <h4>Tambah Promo</h4>

      <div class="row">

         <?php echo form_open_multipart(base_url('akses09/web-konten/promo/add')); ?>
      

         <div class="col s12 input-field">
            <div class="foto bg-image-promo">
               <img src="<?php echo base_url(); ?>assets/img/promo/default-img.jpeg" id="preview-upload-promo">

               <label class="file-upload">
                  <input type="file" name="foto" class="img-input" id="upload-promo">
                  <i class="material-icons">edit</i>
               </label>

               <div class="loader">
                  <div class="preloader-wrapper active">
                     <div class="spinner-layer spinner-blue">
                        <div class="circle-clipper left">
                           <div class="circle"></div>
                        </div><div class="gap-patch">
                           <div class="circle"></div>
                        </div><div class="circle-clipper right">
                           <div class="circle"></div>
                        </div>
                     </div>

                     <div class="spinner-layer spinner-red">
                        <div class="circle-clipper left">
                           <div class="circle"></div>
                        </div><div class="gap-patch">
                           <div class="circle"></div>
                        </div><div class="circle-clipper right">
                           <div class="circle"></div>
                        </div>
                     </div>

                     <div class="spinner-layer spinner-yellow">
                        <div class="circle-clipper left">
                           <div class="circle"></div>
                        </div><div class="gap-patch">
                           <div class="circle"></div>
                        </div><div class="circle-clipper right">
                           <div class="circle"></div>
                        </div>
                     </div>

                     <div class="spinner-layer spinner-green">
                        <div class="circle-clipper left">
                           <div class="circle"></div>
                        </div><div class="gap-patch">
                           <div class="circle"></div>
                        </div><div class="circle-clipper right">
                           <div class="circle"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <div class="col s12 input-field right-align">
            <button type="submit" class="btn waves-effect orange">Simpan</button>
         </div>      
         
         <?php echo form_close(); ?>

      </div>
      

   </div>
</div>



<script>
   const baseURL = '<?php echo base_url(); ?>';

   window.onload = function() {
      const updatePage = '<?php echo $this->session->flashdata("sukses-update"); ?>';
      var page = '';
         if (updatePage == 'page-about-lti') page = 'about lti';
         if (updatePage == 'page-programs-conver') page = 'programs conver';
         if (updatePage == 'page-programs-general') page = 'programs general';
	   if (updatePage == 'page-programs-esp') page = 'programs esp';
         if (updatePage == 'page-programs-testing') page = 'programs testing';
         if (updatePage == 'page-preparations-toefl') page = 'preparations toefl';
         if (updatePage == 'page-preparations-toeic') page = 'preparations toeic';
         if (updatePage == 'page-preparations-ielts') page = 'preparations ielts';
         if (updatePage == 'page-preparations-ibt') page = 'preparations ibt';
         if (updatePage == 'page-partnerships') page = 'partnerships';
         if (updatePage == 'page-careers') page = 'careers';

      if (updatePage) {
         $('#page-content').load(baseURL + 'akses09/web-konten/pages/' + updatePage); 
         M.toast({html : '<i class="material-icons left">check_circle_outline</i> Sukses update halaman ' + page});
      }

      const pesan = '<?php echo $this->session->flashdata('pesan'); ?>';
      if (pesan) {
         M.toast({ html: '<i class="material-icons left">check_circle_outline</i>' + pesan });
      }

      const error = '<?php echo $this->session->flashdata('error'); ?>';
      if (error) {
         $(error).modal();
         $(error).modal('open');
      }
   }

   $(document).ready(function() {

      $('.edit-schedule').on('click', function() {
         let bulan = $(this).data('bulan');
         const min = '#min-date-' + bulan;
         const max = '#max-date-' + bulan;
         let minDate = $(min).val();
         let maxDate = $(max).val();
         
         // Datepicker
         $('.datepicker').datepicker({
            format: 'dd-mm-yyyy',
            container: 'body',
            minDate: new Date(minDate),
            maxDate: new Date(maxDate),
            defaultDate: new Date(minDate),
            yearRange: [new Date().getFullYear(), new Date().getFullYear()],
            i18n: {
               cancel        : 'Batal',
               months        : ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
               monthsShort   : ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'],
               weekdaysShort : ['Min','Sen','Sel','Rab','Kam','Jum','Sab'],
               weekdaysAbbrev: ['M','S','S','R','K','J','S']
            }
         });
         
      });
      
      

      $('.loader').hide();
      function readURL(input) {
         
         let preview = '#preview-' + input.id;

         if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
               $('.loader').show();
               $('.file-upload').hide();
               setTimeout(function(){
                  $('.loader').hide();
                  $('.file-upload').show();
                  $(preview).attr('src', e.target.result);
               }, 2000);
            }
            reader.readAsDataURL(input.files[0]);
         }
      }

      $('.img-input').change(function() {
         readURL(this);
      });
   });
</script>