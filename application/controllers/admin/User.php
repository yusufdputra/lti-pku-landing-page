<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('profil_model');
      $this->load->model('akses_model');
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

   
   public function index()
   {
      if ($this->uri->segment(1) != 'akses09') show_404();
      
      $id_user = $this->session->userdata('id_user');
      
      $data['row_profil'] = $this->profil_model->get_by_id('1');
      $data['row_user']   = $this->akses_model->get_by_id($id_user);
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/user/detail', $data);
      $this->load->view('admin/templates/footer', $data);
   }


   public function edit_profil()
   {
      if ($this->uri->segment(1) != 'akses09') show_404();

      $this->form_validation->set_rules('username', '', 'trim|required|callback_cek_username', ['required' => 'Wajib diisi']);
      $this->form_validation->set_rules('nama', '', 'trim|required', ['required' => 'Wajib diisi']);
      $this->form_validation->set_rules('konfirmasi_password', '', 'trim|required|callback_cek_konfirmasi_password', ['required' => 'Wajib diisi']);
      
      
      if ($this->form_validation->run() == FALSE) 
      {
         $id_user = $this->session->userdata('id_user');
      
         $data['row_profil'] = $this->profil_model->get_by_id('1');
         $data['row_user']   = $this->akses_model->get_by_id($id_user);
         $this->load->view('admin/templates/header', $data);
         $this->load->view('admin/user/detail', $data);
         $this->load->view('admin/templates/footer', $data);
      } 
      else 
      {
         $data = [
            'username' => htmlspecialchars($this->input->post('username', TRUE)),
            'nama' => htmlspecialchars($this->input->post('nama', TRUE))
         ];

         $this->akses_model->update($data);
         $this->session->set_flashdata('pesan', 'Berhasil mengubah data user');
         redirect(base_url('akses09/user'));
      }
      
   }


   public function edit_password()
   {
      if ($this->uri->segment(1) != 'akses09') show_404();

      $this->form_validation->set_rules('password_baru', '', 'trim|required', ['required' => 'Wajib diisi']);
      $this->form_validation->set_rules('ulangi_password', '', 'trim|required|matches[password_baru]', ['required' => 'Wajib diisi', 'matches' => 'Ulangi password tidak sesuai']);
      $this->form_validation->set_rules('konfirmasi_password_lama', '', 'trim|required|callback_cek_konfirmasi_password', ['required' => 'Wajib diisi']);

      
      if ($this->form_validation->run() == FALSE) 
      {
         $id_user = $this->session->userdata('id_user');
      
         $data['row_profil'] = $this->profil_model->get_by_id('1');
         $data['row_user']   = $this->akses_model->get_by_id($id_user);
         $this->load->view('admin/templates/header', $data);
         $this->load->view('admin/user/detail', $data);
         $this->load->view('admin/templates/footer', $data);
      } 
      else 
      {
         $data = [
            'password' => htmlspecialchars(password_hash($this->input->post('password_baru', TRUE), PASSWORD_DEFAULT))
         ];

         $this->akses_model->update($data);
         $this->session->set_flashdata('pesan', 'Berhasil mengubah password');
         redirect(base_url('akses09/user'));
      }
      
      
      
   }


   public function cek_username($username)
   {
      if ($username)
      {
         $username_lama = $this->input->post('username_lama');
         if ($username == $username_lama)
         {
            return TRUE;
         }
         else 
         {
            if (empty($this->akses_model->get_where(['username' => $username])))   
            {
               return TRUE;
            }
            else 
            {
               $this->form_validation->set_message('cek_username', 'Username sudah digunakan');
               return FALSE;   
            }
         }
      }
      else 
      {
         $this->form_validation->set_message('cek_username', 'Wajib diisi');
         return FALSE;
      }
   }


   public function cek_konfirmasi_password($konfirmasi_password)
   {
      if ($konfirmasi_password)
      {
         $id_user = $this->session->userdata('id_user');
         $user = $this->akses_model->get_by_id($id_user);

         if (password_verify($konfirmasi_password, $user['password']))
         {
            return TRUE;
         }
         else 
         {
            $this->form_validation->set_message('cek_konfirmasi_password', 'Konfirmasi password tidak sesuai');
            return FALSE;
         }
      }
      else 
      {
         $this->form_validation->set_message('cek_konfirmasi_password', 'Wajib diisi');
         return FALSE;
      }
   }

}

/* End of file User.php */