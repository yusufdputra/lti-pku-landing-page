<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('asia/jakarta');

class Content_page_model extends CI_Model {

   public function get_where($where)
   {
      return $this->db->get_where('content_page', $where)->row_array();
   }

   public function update()
   {
      $data = array(
         'content' => html_escape($this->input->post('content', false)),
         'latest_update' => date('Y-m-d H:i:s', strtotime('now'))
      );

      $this->db->where('id_content_page', $this->input->post('id_content_page', true));
      $this->db->update('content_page', $data);
   }

}

/* End of file Content_page_model.php */

