<?php 



defined('BASEPATH') OR exit('No direct script access allowed');

class Token_model extends CI_Model 
{

   public function get_where($where)
   {
      $this->db->order_by('tgl_token', 'desc');
      return $this->db->get_where('token', $where)->result_array();
   }

   public function save($data)
   {
      $this->db->insert('token', $data);
   }

}

/* End of file Token_model.php */

