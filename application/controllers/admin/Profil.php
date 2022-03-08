<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller 
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('profil_model');
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

      $this->form_validation->set_rules('nama_perusahaan', '', 'required', ['required' => 'Wajib diisi']);
      $this->form_validation->set_rules('moto_perusahaan', '', 'required', ['required' => 'Wajib diisi']);
      $this->form_validation->set_rules('email', '', 'required|valid_email', ['required' => 'Wajib diisi', 'valid_email' => 'Email tidak valid']);
      $this->form_validation->set_rules('nomor_telpon', '', 'required|numeric|min_length[10]|max_length[11]', ['required' => 'Wajib diisi', 'numeric' => 'Wajib angka', 'min_length' => 'Nomor terlalu pendek', 'max_length' => 'Nomor terlalu panjang']);
      $this->form_validation->set_rules('nomor_handphone', '', 'required|numeric|callback_cek_nomor_handphone|min_length[11]|max_length[13]', ['required' => 'Wajib diisi', 'numeric' => 'Wajib angka', 'min_length' => 'Nomor terlalu pendek', 'max_length' => 'Nomor terlalu panjang']);
      $this->form_validation->set_rules('alamat_pusat', '', 'required', ['required' => 'Wajib diisi']);
      $this->form_validation->set_rules('sosmed_instagram', '', 'callback_cek_valid_url');
      $this->form_validation->set_rules('sosmed_facebook', '', 'callback_cek_valid_url');
      $this->form_validation->set_rules('sosmed_twitter', '', 'callback_cek_valid_url');
      
      if ($this->form_validation->run() == FALSE) 
      {
         $data['row_profil'] = $this->profil_model->get_by_id('1');
         $this->load->view('admin/templates/header', $data);
         $this->load->view('admin/profil/detail', $data);
         $this->load->view('admin/templates/footer', $data);
      } 
      else 
      {
         if ($_FILES['file']['error'] === 4)
         {
            $this->profil_model->update($this->input->post('logo_lama'));
            $this->session->set_flashdata('pesan', 'sukses update profil');
            redirect(site_url('akses09/profil'));
         }
         else
         {
            $logo = $this->_upload_logo();
            if ($logo == 'error')
            {
               $this->session->set_flashdata('pesan', 'gagal upload logo');
               $data['row_profil'] = $this->profil_model->get_by_id('1');
               $this->load->view('admin/templates/header');
               $this->load->view('admin/profil/detail', $data);
               $this->load->view('admin/templates/footer', $data);
            }
            else
            {
               $this->_delete_logo($this->input->post('logo_lama'));
               $this->profil_model->update($logo);
               $this->session->set_flashdata('pesan', 'sukses update profil');
               redirect(site_url('akses09/profil'));
            }
         }
      }
   }


   public function cek_nomor_handphone($nomor_handphone)
   {
      $kode_nomor = substr($nomor_handphone, 0, 2);
      if (($kode_nomor == '08') || ($kode_nomor == '62'))
      {
         return TRUE;
      }
      $this->form_validation->set_message('cek_nomor_handphone', 'Nomor tidak valid');
      return FALSE;
   }


   public function cek_valid_url($url)
   {
      if ($url)
      {
         if ( ! filter_var($url, FILTER_VALIDATE_URL))
         {
            $this->form_validation->set_message('cek_valid_url', 'URL tidak valid');
            return FALSE;
         }
         return TRUE;
      }
   }


   private function _upload_logo()
   {
      $config['upload_path']   = './assets/img/logo/';
      $config['allowed_types'] = 'jpg|png|jpeg';
      $config['file_name']     = uniqid();
      $config['overwrite']     = TRUE;
      
      $this->load->library('upload', $config);
      
      if ( ! $this->upload->do_upload('file'))
      {
         return 'error';
      }
      else
      {
         $upload = $this->upload->data();

         $config_resize['image_library']  = 'gd2';
			$config_resize['source_image']   = './assets/img/logo/' . $upload['file_name'];
			$config_resize['create_thumb']   = FALSE;
			$config_resize['maintain_ratio'] = TRUE;
			$config_resize['width']          = 300;
			$config_resize['height']         = 300;

			$this->load->library('image_lib', $config_resize);
			
			if ( ! $this->image_lib->resize() )			
			{
				return "error";
			}
			else
			{
				$nama_gambar = $upload['raw_name'] . $upload['file_ext'];
				return $nama_gambar;
			}
      }
   }
   
   private function _delete_logo($logo)
	{
		if( $logo != 'logo-lti.png' )
		{
			return array_map('unlink', glob(FCPATH."assets/img/logo/{$logo}"));
		}
		return TRUE;
	}

}

/* End of file Profil.php */

