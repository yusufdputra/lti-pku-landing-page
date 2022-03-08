<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_page extends CI_Controller 
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('profil_model');
      $this->load->model('courses_model');
      $this->load->model('schedule_model');
      $this->load->model('testimonial_model');
      $this->load->model('promo_model');
      $this->load->model('content_page_model');
      
   }

   public function index($page = '')
   {

      $data['row_profil']  = $this->profil_model->get_by_id('1');
      $data['courses']     = $this->courses_model->get_all();
      $data['schedule']    = $this->schedule_model->get_all();
      $data['testimonial'] = $this->testimonial_model->get_all();
      $data['promo']       = $this->promo_model->get_all();
      
      $this->load->view('templates/header', $data);
      
      if ($page)
      {
         $page_valid = ['about-lti', 'preparations-toefl', 'preparations-toeic', 'preparations-ielts', 'preparations-ibt', 'programs-conver', 'programs-general', 'programs-testing', 'partnerships', 'careers'];

         if (in_array($page, $page_valid))
         {
            $data['row_content'] = $this->content_page_model->get_where(['page' => 'page-' . $page]);
            $this->load->view('page', $data);
         }
         else
         {
            $this->load->view('404_not_found');
         }

      }
      else 
      {
         $this->load->view('main_page', $data);
      }

      $this->load->view('templates/footer', $data);
   }


   
}

/* End of file Main_page.php */

