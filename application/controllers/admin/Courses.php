<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller 
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

   public function add()
   {
      if ($this->uri->segment(1) != 'akses09') show_404();

      $this->form_validation->set_rules('courses', '', 'trim|required|max_length[30]', ['required' => 'Wajib diisi', 'max_length' => 'Terlalu panjang']);
      $this->form_validation->set_rules('desc_courses', '', 'trim|required|max_length[180]', ['required' => 'Wajib diisi', 'max_length' => 'Terlalu panjang']);
      $this->form_validation->set_rules('wa_message', '', 'trim');
      
      if ($this->form_validation->run() == FALSE) 
      {
         $this->session->set_flashdata('error', '#add-courses');
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
         if ($_FILES['foto']['error'] === 4)
         {
            $this->courses_model->add();
            $this->session->set_flashdata('pesan', 'Berhasil menambah data courses');
            redirect(base_url('akses09/web-konten'));
         }
         else 
         {
            $foto = $this->_upload_img();

            if ($foto == 'error')
            {
               $this->courses_model->add();
               $this->session->set_flashdata('pesan', 'Berhasil menambah data courses');
               redirect(base_url('akses09/web-konten'));
            }
            else 
            {
               $this->courses_model->add($foto);
               $this->session->set_flashdata('pesan', 'Berhasil menambah data courses');
               redirect(base_url('akses09/web-konten'));
            }
         }
      }
   }   

   public function edit($id_courses)
   {
      if ($this->uri->segment(1) != 'akses09') show_404();

      if (empty($this->courses_model->get_by_id($id_courses))) redirect(base_url('akses09/web-konten'));

      $this->form_validation->set_rules('courses', '', 'trim|required|max_length[30]', ['required' => 'Wajib diisi', 'max_length' => 'Terlalu panjang']);
      $this->form_validation->set_rules('desc_courses', '', 'trim|required|max_length[180]', ['required' => 'Wajib diisi', 'max_length' => 'Terlalu panjang']);
      $this->form_validation->set_rules('wa_message', '', 'trim');

      
      if ($this->form_validation->run() == FALSE) 
      {
         $this->session->set_flashdata('error', '#edit-courses-' . $id_courses);
         $data['row_profil']  = $this->profil_model->get_by_id('1');
         $data['testimonial'] = $this->testimonial_model->get_all();
         $data['schedule']    = $this->schedule_model->get_all();
         $data['courses']     = $this->courses_model->get_all();
         $data['promo']       = $this->promo_model->get_all();

         $this->load->view('admin/templates/header');
         $this->load->view('admin/web_konten/pages', $data);
         $this->load->view('admin/templates/footer', $data);
      } 
      else 
      {
         $courses = $this->courses_model->get_by_id($id_courses);
         if ($_FILES['foto']['error'] === 4)
         {
            $this->courses_model->update($courses['bg_image']);
            $this->session->set_flashdata('pesan', 'Berhasil mengubah data courses');
            redirect(base_url('akses09/web-konten'));
         }
         else 
         {
            $foto = $this->_upload_img();

            if ($foto == 'error')
            {
               $this->courses_model->update();
               $this->session->set_flashdata('pesan', 'Berhasil mengubah data courses');
               redirect(base_url('akses09/web-konten'));
            }
            else 
            {
               $this->_delete_img($courses['bg_image']);
               $this->courses_model->update($foto);
               $this->session->set_flashdata('pesan', 'Berhasil mengubah data courses');
               redirect(base_url('akses09/web-konten'));
            }
         }
      }
   }      

   public function delete($id_courses)
   {
      if ($this->uri->segment(1) != 'akses09') show_404();

      if (empty($this->courses_model->get_by_id($id_courses))) redirect(base_url('web-konten'));

      $courses = $this->courses_model->get_by_id($id_courses);
      $this->_delete_img($courses['bg_image']);
      $this->courses_model->delete($id_courses);
      $this->session->set_flashdata('pesan', 'Berhasil menghapus data courses');
      redirect(base_url('akses09/web-konten'));
   }

   private function _upload_img()
   {
      $config['upload_path']   = './assets/img/courses/';
      $config['allowed_types'] = 'jpeg|jpg|png';
      $config['file_name']     = uniqid();
      $config['overwrite']     = TRUE;

      $this->load->library('upload', $config);
      
      if ( ! $this->upload->do_upload('foto')){
         return 'error';
      }
      else{
         $upload = $this->upload->data();

         $config_resize['image_library']  = 'gd2';
			$config_resize['source_image']   = './assets/img/courses/' . $upload['file_name'];
			$config_resize['create_thumb']   = FALSE;
			$config_resize['maintain_ratio'] = TRUE;
			$config_resize['width']          = 1024;
			$config_resize['height']         = 683;

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


   private function _delete_img($image)
	{
		if( $image != 'default-img.jpg' )
		{
			return array_map('unlink', glob(FCPATH."assets/img/courses/{$image}"));
		}
		return TRUE;
	}
}

/* End of file Courses.php */

