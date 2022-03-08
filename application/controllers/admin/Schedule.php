<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller 
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('profil_model');
      $this->load->model('testimonial_model');
      $this->load->model('schedule_model');
      $this->load->model('courses_model');
      $this->load->model('promo_model');
      $this->load->model('token_model');
      $this->load->model('akses_model');
      

      if (empty($this->session->userdata('id_user')) AND empty($this->session->userdata('token')))
      {
         redirect(base_url('akses09'));
      }
      else 
      {
         $id_user   = $this->session->userdata('id_user');
         $user = $this->akses_model->get_by_id($id_user);

         if ($user['status'] == 1)
         {
            $token     = $this->session->userdata('token');
            $cek_token = $this->token_model->get_where(['id_akses' => $id_user]);
            
            if ($token != $cek_token[0]['token'])
            {
               redirect(base_url('akses09'));
            }
         }
         else 
         {
            redirect(base_url('akses09'));
         }
      }
   }

   
   public function edit($id_schedule)
   {
      if ($this->uri->segment(1) != 'akses09') show_404();

      $this->form_validation->set_rules('tanggal1', '', 'trim');
      $this->form_validation->set_rules('tanggal2', '', 'trim');
      $this->form_validation->set_rules('tanggal3', '', 'trim');

      
      if ($this->form_validation->run() == FALSE) 
      {
         $data['row_profil']  = $this->profil_model->get_by_id('1');
         $data['testimonial'] = $this->testimonial_model->get_all();
         $data['schedule']    = $this->schedule_model->get_all();
         $data['courses']     = $this->courses_model->get_all();
         $data['promo']       = $this->promo_model->get_all();

         $this->load->view('admin/templates/header', $data);
         $this->load->view('admin/web_konten/pages', $data);
         $this->load->view('admin/templates/footer', $data);
      } 
      else 
      {
         $this->schedule_model->update();
         $this->session->set_flashdata('pesan', 'Berhasil mengubah data schedule');
         redirect(base_url('akses09/web-konten'));
      }
      
      
   }
}

/* End of file Schedule.php */

