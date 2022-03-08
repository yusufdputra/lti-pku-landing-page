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

<!-- Section firt landing -->
<section id="first-landing" class="first-landing">
   <div class="jumbotron">
      <div class="row">
         <div class="col s12 l6 center-align">
            <h1><?php echo $row_profil['moto']; ?></h1>
            <a href="https://wa.me/<?php echo $row_profil['nomor_hp']; ?>?text=Saya%20tertarik%20dan%20ingin%20mengikuti%20program%20..." target="_blank" class="btn btn-large waves-effect red darken-3">Join Now</a>
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



<section id="schedule" class="section-schedule"></section>


<!-- Section schedule TOEFL ITP -->
<section id="schedule-toefl" class="schedule-toefl">
   <div class="container">
      <h3 class="title-section">TOEFL ITP Schedule</h3>

      <div class="carousel carousel-schedule-toefl">

         <?php 
            $i = 0;
            foreach ($schedule as $row_schedule) :
         ?>
         
         <div class="carousel-item">
            <div class="card">
               <div class="card-title">
                  <span><?php echo strtoupper($row_schedule['bulan']); ?></span>
               </div>
               <div class="card-content">
                  
                  <?php 

                     for ($j = 0; $j < 3; $j++)
                     {
                        $tgl = 'tanggal' . ($j+1);
                        $tanggal = strtotime($row_schedule[$tgl]);
                        
                        if ($tgl_sekarang > $tanggal )
                        {
                           if ($row_schedule[$tgl] != '0000-00-00')
                           {
                              echo '<p class="date grey-text"><i class="material-icons">date_range</i>' . format_tanggal(date('d-m-Y', strtotime($row_schedule[$tgl]))) . '</p>';
                           }
                        }
                        else 
                        {
                           $pesan = '';
                           $pesan .= 'https://wa.me/';
                           $pesan .= $row_profil['nomor_hp'];
                           $pesan .= '?text=Saya%20ingin%20mendaftar%20tes%20TOEFL%20ITP%20Tanggal%20';
                           $pesan .= str_replace(' ', '%20', format_tanggal(date('d-m-Y', strtotime($row_schedule[$tgl]))));

                           echo '<a href="' . $pesan .'" target="_blank"><p class="date"><i class="material-icons">date_range</i>' . format_tanggal(date('d-m-Y', strtotime($row_schedule[$tgl]))) . '</p></a>';
                        }
                     }
                  ?>

               </div>
            </div>
         </div>

         <?php 
               $i++;
            endforeach; 
         ?>

      </div>

      <!-- Navigasi desktop device -->
      <div class="carousel-schedule-toefl-nav center-align hide-on-med-and-down">
         <a href="" class="next-carousel-schedule-toefl"><i class="material-icons waves-effect">keyboard_arrow_left</i></a>
         <a href="" class="prev-carousel-schedule-toefl"><i class="material-icons waves-effect">keyboard_arrow_right</i></a>
      </div>

      <!-- Navigasi mobile device -->
      <div class="carousel-schedule-toefl-nav-mobile center-align hide-on-large-only">
         <a href="" class="next-carousel-schedule-toefl-mobile"><i class="material-icons waves-effect">keyboard_arrow_left</i></a>
         <a href="" class="prev-carousel-schedule-toefl-mobile"><i class="material-icons waves-effect">keyboard_arrow_right</i></a>
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
                  <p>TOEFL Institutional Testing Program (ITP) adalah salah satu jenis tes yang dikelauarkan oleh Educational Testing Service (ETS) khusus untuk wilayah Asia.</p>
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
                  <p>International English Language Testing Service (IELTS) adalah tes untuk megukur kemampuan berbahasa Inggris kamu yang ingin belajar atau bekerja di Negeri. </p>
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


      <!-- Mobile device -->
      <div class="carousel carousel-awards-mobile hide-on-large-only">
         <!-- Awards 1 -->
         <div class="carousel-item">
            <div class="card center-align">
               <img src="<?php echo base_url(); ?>assets/img/sertifikat/sertifikat-1.jpg" alt="awards-1" class="potrait">
               <div class="card-content">
                  <h5>IELTS Certificate</h5>
                  <p>This is to Certify That LTI-Galileo Pekanbaru is an Approver TEST Venue of IDP : <b>IELTS Australia - Test Centre</b>IDP Education Indonesia <b>(IDP South Jakarta - ID017)</b></p>
               </div>
            </div>
         </div>

         <!-- Awards 2 -->
         <div class="carousel-item">
            <div class="card center-align">
               <img src="<?php echo base_url(); ?>assets/img/sertifikat/sertifikat-2.jpg" alt="awards-1" class="landscape">
               <div class="card-content">
                  <h5>ITP Certificate</h5>
                  <p>Indonesia International Education Foundation - IIEF Country Master Distributor for <b>TOEFL ITP</b> in Indonesia Proundly Acknowledges : Language Training Institution Pekanbaru as an Authorized Test Center for <b>TOEFL ITP</b></p>
               </div>
            </div>
         </div>
      </div>

      <!-- Navigasi mobile device -->
      <div class="carousel-awards-nav-mobile center-align hide-on-large-only">
         <a href="" class="next-carousel-awards-mobile"><i class="material-icons waves-effect">keyboard_arrow_left</i></a>
         <a href="" class="prev-carousel-awards-mobile"><i class="material-icons waves-effect">keyboard_arrow_right</i></a>
      </div>

   </div>
</section>


<!-- Section courses -->
<section id="courses" class="courses">
   <div class="container">

      <h3 class="title-section white-text">Courses</h3>
      
      <div class="carousel carousel-courses">

         <?php 
            foreach ($courses as $row_courses) : 
               
            $pesan = '';
            $pesan .= 'https://wa.me/';
            $pesan .= $row_profil['nomor_hp'];
            $pesan .= '?text=';
            if ($row_courses['wa_message'])
            {
               $pesan .= str_replace(' ', '%20', $row_courses['wa_message']);
            }
            else 
            {
               $pesan .= 'Saya%20tertarik%20dengan%20program%20';
               $pesan .= str_replace(' ', '%20', $row_courses['courses']);
            }

         ?>
         
         <div class="carousel-item">
            <div class="card">
               <div class="card-image">
                  <img src="<?php echo base_url(); ?>assets/img/courses/<?php echo $row_courses['bg_image']; ?>">
                  <span class="card-title"><?php echo $row_courses['courses']; ?></span>
               </div>
               <a href="<?php echo $pesan; ?>" target="_blank" class="btn red darken-3 waves-effect btn-sign-up">Sign up now</a>
               <div class="card-content">
                  <p><?php echo $row_courses['desc_courses']; ?></p>
               </div>
            </div>
         </div>

         <?php endforeach; ?>

      </div>

      <!-- Navigasi desktop device -->
      <div class="carousel-courses-nav center-align hide-on-med-and-down">
         <a href="" class="next-carousel-courses"><i class="material-icons waves-effect">keyboard_arrow_left</i></a>
         <a href="" class="prev-carousel-courses"><i class="material-icons waves-effect">keyboard_arrow_right</i></a>
      </div>

      <!-- Navigasi mobile device -->
      <div class="carousel-courses-nav-mobile center-align hide-on-large-only">
         <a href="" class="next-carousel-courses-mobile"><i class="material-icons waves-effect">keyboard_arrow_left</i></a>
         <a href="" class="prev-carousel-courses-mobile"><i class="material-icons waves-effect">keyboard_arrow_right</i></a>
      </div>

   </div>
</section>


<!-- Section testimonial -->
<section id="testimonial" class="testimonial">
   <div class="container">

      <h3 class="title-section">Testimonial</h3>

      <!-- Desktop device -->
      <div class="carousel carousel-slider carousel-testimonial hide-on-med-and-down">
         
            <?php 
               $rows_testi = ceil(count($testimonial)/3);
               for ($i = 0; $i < $rows_testi; $i++) :
            ?>
            <div class="carousel-item">
               <div class="row">
               
                  <?php for ($j = 0; $j < 3; $j++) : ?>
                  
                  <div class="col l4 s12">
                     <div class="card <?php echo $testimonial[(($i+$j)+($i*2))]['warna_bg']; ?>">
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


      <!-- Mobile device -->
      <div class="carousel carousel-testimonial-mobile hide-on-large-only">

         <?php 
            $i = 1;
            foreach ($testimonial as $row_testi) : 
         ?>

         <div class="carousel-item">
            <div class="card <?php echo $row_testi['warna_bg']; ?>">
               <img src="<?php echo base_url(); ?>assets/img/testimonial/<?php echo $row_testi['foto']; ?>" class="img-person-<?php echo $i; ?>">
               <div class="card-content">
                  <p><?php echo $row_testi['testimonial']; ?></p>
               </div>
               <span class="name-person"><?php echo ucwords($row_testi['nama']); ?></span>
            </div>
         </div>

         <?php
               $i++;
            endforeach; 
         ?>
         
      
      
      </div>
   
   
   
      
      <!-- Navigasi mobile device -->
      <div class="carousel-testimonial-nav-mobile center-align hide-on-large-only">
         <a href="" class="next-carousel-testi-mobile"><i class="material-icons waves-effect">keyboard_arrow_left</i></a>
         <a href="" class="prev-carousel-testi-mobile"><i class="material-icons waves-effect">keyboard_arrow_right</i></a>
      </div>

   </div>
</section>


<script>
   window.onload = function() {
      $('.modal.modal-schedule-toefl').modal();
      $('.modal.modal-schedule-toefl').modal('open');
      // carousel modal main page
      $('.carousel.carousel-slider.carousel-in-modal').carousel({
         indicators: true,
         fullWidth: true,
      });
   }
</script>