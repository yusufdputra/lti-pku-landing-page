<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_konten extends CI_Controller {

   public function __construct()
   {
      parent::__construct();
      $this->load->model('content_page_model');
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

   public function index()
   {
      if ($this->uri->segment(1) != 'akses09') show_404();

      $data['row_profil']  = $this->profil_model->get_by_id('1');
      $data['testimonial'] = $this->testimonial_model->get_all();
      $data['schedule']    = $this->schedule_model->get_all();
      $data['courses']     = $this->courses_model->get_all();
      $data['promo']       = $this->promo_model->get_all();

      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/web_konten/pages', $data);
      $this->load->view('admin/templates/footer', $data);
   }

   public function pages($page)
   {
      if ($this->uri->segment(1) != 'akses09') show_404();

      $row_page = $this->content_page_model->get_where(['page' => strtolower($page)]);
      if (empty($row_page))
      {
         $data['row_profil']  = $this->profil_model->get_by_id('1');
         $data['testimonial'] = $this->testimonial_model->get_all();
         $data['schedule']    = $this->schedule_model->get_all();
         $data['courses']     = $this->courses_model->get_all();
         $data['promo']       = $this->promo_model->get_all();
         $this->load->view('admin/web_konten/main_page', $data); 
      }
      else 
      {
         $nama_halaman = explode('page-', $row_page['page']);
         $nama_halaman = str_replace('-', ' ', end($nama_halaman));
   
         $data['row_page'] = $row_page;
         $data['page']     = $nama_halaman;
   
         $this->load->view('admin/web_konten/page', $data);
      }
   }

   public function edit($id)
   {
      if ($this->uri->segment(1) != 'akses09') show_404();

      $page = $this->content_page_model->get_where(['id_content_page' => $id]);
      if (empty($page)) show_404();

      $this->content_page_model->update();
      $this->session->set_flashdata('sukses-update', $page['page']);
      
      redirect(site_url('akses09/web-konten'));
   }

   public function upload_image()
   {
      if (isset($_FILES["file"]["name"])) 
      {
         $config['upload_path']   = './assets/img/content/';
         $config['allowed_types'] = 'gif|jpg|png|jpeg';
         $config['file_name']     = uniqid();
         $config['overwrite']     = TRUE;
         
         $this->load->library('upload', $config);
         
         if ( ! $this->upload->do_upload('file'))
         {
            $this->upload->display_errors();
            return FALSE;
         }
         else
         {
            $data = $this->upload->data();

            $config_resize['image_library']   = 'gd2';
            $config_resize['source_image']    = './assets/img/content/' . $data['file_name'];
            $config_resize['create_thumb']    = TRUE;
            $config_resize['maintain_ration'] = TRUE;
            $config_resize['width']           = 800;
            $config_resize['height']          = 600;

            $this->load->library('image_lib', $config_resize);
            
            if ( ! $this->image_lib->resize())
            {
               $this->upload->display_errors();
               return FALSE;
            }
            else
            {
               $name_image = $data['raw_name'] . '_thumb' . $data['file_ext'];
               $this->delete_image($data['file_name']);
               echo base_url() . 'assets/img/content/' . $name_image;
            }
         }
      }
   }

   public function delete_image( $foto )
	{
		return array_map('unlink', glob(FCPATH."assets/img/content/{$foto}"));
	}
}

/* End of file Web_konten.php */

