<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Courses_model extends CI_Model 
{

   public function get_all()
   {
      return $this->db->get('courses')->result_array();
   }

   public function get_by_id($id)
   {
      return $this->db->get_where('courses', ['id_courses' => $id])->row_array();
   }

   public function add($foto = 'default-img.jpg')
   {
      $data = array(
         'courses'       => htmlspecialchars($this->input->post('courses', TRUE)),
         'desc_courses'  => htmlspecialchars($this->input->post('desc_courses', TRUE)),
         'bg_image'      => $foto,
         'latest_update' => date('Y-m-d H:i:s', strtotime('now')),
         'wa_message'    => htmlspecialchars($this->input->post('wa_message', TRUE))
      );

      $this->db->insert('courses', $data);
   }

   public function update($foto = 'default-img.jpg')
   {
      $data = array(
         'courses'       => htmlspecialchars($this->input->post('courses', TRUE)),
         'desc_courses'  => htmlspecialchars($this->input->post('desc_courses', TRUE)),
         'bg_image'      => $foto,
         'latest_update' => date('Y-m-d H:i:s', strtotime('now')),
         'wa_message'    => htmlspecialchars($this->input->post('wa_message', TRUE))
      );

      $this->db->where('id_courses', $this->input->post('id_courses'));
      $this->db->update('courses', $data);
   }

   public function delete($id)
   {
      $this->db->delete('courses', ['id_courses' => $id]);
   }


   
}

/* End of file Courses_model.CI_Model */