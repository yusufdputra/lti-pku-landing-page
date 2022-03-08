<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Auth extends CI_Controller 
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('akses_model');
      $this->load->model('token_model');
      $this->load->model('profil_model');
      
      
   }

   public function index()
   {
      if ($this->session->userdata('id_user') AND $this->session->userdata('token'))
      {
         $user = $this->akses_model->get_by_id($this->session->userdata('id_user'));
         if ($user['status'] == 1)
         {
            redirect(base_url('akses09/web-konten'));
         }
      }

      $this->form_validation->set_rules('username', '', 'trim|required', ['required' => 'Wajib diisi']);
      $this->form_validation->set_rules('password', '', 'trim|required', ['required' => 'Wajib diisi']);
      
      
      if ($this->form_validation->run() == FALSE) 
      {
         $data['row_profil']  = $this->profil_model->get_by_id('1');
         $this->load->view('admin/auth/login', $data);
      } 
      else 
      {
         $akses = $this->akses_model->get_where(['username' => htmlspecialchars($this->input->post('username', TRUE))]);

         if ($akses)
         {
            $password = htmlspecialchars($this->input->post('password', TRUE));
            if ( ! password_verify($password, $akses['password']))
            {  
               $this->session->set_flashdata('pesan', 'Password tidak benar');
               $data['row_profil']  = $this->profil_model->get_by_id('1');
               $this->load->view('admin/auth/login', $data);
            }
            else
            {
               
               if ($akses['status'] == 1)
               {
                  $token = $this->_token();
                  $s_token = [
                     'token'     => $token,
                     'id_akses'  => $akses['id_akses'],
                     'tgl_token' => date('Y-m-d H:i:s', strtotime('now'))
                  ];
                  $this->token_model->save($s_token);
                  
                  
                  $data = array(
                     'id_user' => $akses['id_akses'],
                     'token'   => $token
                  );
                  
                  $this->session->set_userdata($data);
                  
                  redirect(base_url('akses09/web-konten'));
               }
               else
               {
                  $this->session->set_flashdata('pesan', 'Akses ditolak');
                  $data['row_profil']  = $this->profil_model->get_by_id('1');
                  $this->load->view('admin/auth/login', $data);
               }
            }
         }
         else 
         {
            $this->session->set_flashdata('pesan', 'Username tidak terdaftar');
            $data['row_profil']  = $this->profil_model->get_by_id('1');
            $this->load->view('admin/auth/login', $data);
         }
      }
   }


   public function logout()
   {
      $this->session->sess_destroy();
      redirect(base_url('akses09'));
   }



   private function _token()
   {
      $karakter = '01234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $banyak_karakter = strlen($karakter);
      $karakter_random = '';
      for ($i = 0; $i < 10; $i++)
      {
         $karakter_random .= $karakter[rand(0, $banyak_karakter - 1)];
      }
      return $karakter_random;
   }


}

/* End of file Auth.php */

