<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Promo_model extends CI_Model 
{

   public function get_all()
   {
      return $this->db->get('promo')->result_array();
   }

   public function get_by_id($id)
   {
      return $this->db->get_where('promo', ['id_promo' => $id])->row_array();
   }

   public function add($foto = 'default-img.jpeg')
   {
      $data = array(
         'img_promo' => $foto
      );

      $this->db->insert('promo', $data);
   }

   public function delete($id)
   {
      $this->db->delete('promo', ['id_promo' => $id]);
   }

}

/* End of file Promo_model.CI_Model */

