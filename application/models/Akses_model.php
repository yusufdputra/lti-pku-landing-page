<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Akses_model extends CI_Model 
{

   public function get_by_id($id)
   {
      return $this->db->get_where('akses', ['id_akses' => $id])->row_array();
   }

   public function get_where($where)
   {
      return $this->db->get_where('akses', $where)->row_array();
   }

   public function update($data)
   {
      $this->db->update('akses', $data, ['id_akses' => $this->input->post('id_akses')]);
   }

}

/* End of file Akses_model.php */

