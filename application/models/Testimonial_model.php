<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Testimonial_model extends CI_Model
{

   public function get_all()
   {
      return $this->db->get('testimonial')->result_array();
   }

   public function get_by_id($id)
   {
      return $this->db->get_where('testimonial', ['id_testimonial' => $id])->row_array();
   }

   public function update($foto = 'default-img.jpg')
   {
      $data = array(
         'nama' => htmlspecialchars($this->input->post('nama', TRUE)),
         'testimonial' => htmlspecialchars($this->input->post('testimonial', TRUE)),
         'foto' => $foto,
         'latest_update' => date('Y-m-d H:i:s', strtotime('now'))
      );

      $this->db->where('id_testimonial', $this->input->post('id_testimonial'));
      $this->db->update('testimonial', $data);
   }
   
}

/* End of file Testimonial_model.CI_Modal */