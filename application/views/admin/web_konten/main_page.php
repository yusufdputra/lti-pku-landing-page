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
                  <p>TOEFL Institutional Testing Program (ITP) adalah salah satu jenis tes yang dikelauarkan oleh English Testing Service (ETS) khusus untuk wilayah Asia.</p>
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


<script>

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


   // slider awards
	$('.slider-awards.slider').slider();

   $('.next-slider-awards').click(function (e) {
      e.preventDefault();
      e.stopPropagation();
      $('.slider-awards.slider').slider('prev');
   });

   $('.prev-slider-awards').click(function (e) {
      e.preventDefault();
      e.stopPropagation();
      $('.slider-awards.slider').slider('next');
   });



   // carousel courses
	$('.carousel-courses.carousel').carousel({
		noWrap: false,
		dist: 0,
		padding: 30,
		indicators: true,
		numVisible: 5
	});

	// nav carousel courses desktop
	$('.next-carousel-courses').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.carousel-courses.carousel').carousel('prev');
	});

	$('.prev-carousel-courses').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.carousel-courses.carousel').carousel('next');
   });


   // carousel schedule toefl
	$('.carousel-schedule-toefl.carousel').carousel({
		noWrap: false,
		dist: 0,
		padding: 20,
		indicators: true,
		numVisible: 5
	});

	// nav carousel schedule-toefl desktop
	$('.next-carousel-schedule-toefl').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.carousel-schedule-toefl.carousel').carousel('prev');
	});

	$('.prev-carousel-schedule-toefl').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.carousel-schedule-toefl.carousel').carousel('next');
   });

   // carousel testimonial
	$('.carousel-testimonial.carousel-slider').carousel({
		fullWidth: true,
		indicators: true,
		noWrap: true
	});

	$('.next-carousel-testi').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.carousel-testimonial.carousel-slider').carousel('prev');
	});

	$('.prev-carousel-testi').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.carousel-testimonial.carousel-slider').carousel('next');
   });
   
   // carousel promo
	$('.carousel-promo.carousel').carousel({
		noWrap: false,
		dist: 0,
		padding: 30,
		indicators: true,
		numVisible: 3
	});

	// nav carousel promo
	$('.next-carousel-promo').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.carousel-promo.carousel').carousel('prev');
	});

	$('.prev-carousel-promo').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.carousel-promo.carousel').carousel('next');
   });
</script>