<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Promo extends CI_Controller 
{

   public function __construct()
   {
      parent::__construct();
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
      if ($_FILES['foto']['error'] === 4)
      {
         redirect(base_url('akses09/web-konten'));
      }
      else 
      {
         $foto = $this->_upload_img();

         if ($foto == 'error')
         {
            $this->promo_model->add();
            $this->session->set_flashdata('pesan', 'Berhasil menambah data promo');
            redirect(base_url('akses09/web-konten'));
         }
         else 
         {
            $this->promo_model->add($foto);
            $this->session->set_flashdata('pesan', 'Berhasil menambah data promo');
            redirect(base_url('akses09/web-konten'));
         }
      }
   }

   public function delete($id_promo)
   {
      if (empty($this->promo_model->get_by_id($id_promo))) redirect(base_url('web-konten'));
      
      $promo = $this->promo_model->get_by_id($id_promo);
      $this->_delete_img($promo['img_promo']);
      $this->promo_model->delete($id_promo);
      $this->session->set_flashdata('pesan', 'Berhasil menghapus data promo');
      redirect(base_url('akses09/web-konten'));
   }

   private function _upload_img()
   {
      
      $config['upload_path']   = './assets/img/promo/';
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
			$config_resize['source_image']   = './assets/img/promo/' . $upload['file_name'];
			$config_resize['create_thumb']   = FALSE;
			$config_resize['maintain_ratio'] = TRUE;
			$config_resize['width']          = 720;
			$config_resize['height']         = 1040;

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
		if( $image != 'default-img.jpeg' )
		{
			return array_map('unlink', glob(FCPATH."assets/img/promo/{$image}"));
		}
		return TRUE;
	}


}

/* End of file Promo.php */

