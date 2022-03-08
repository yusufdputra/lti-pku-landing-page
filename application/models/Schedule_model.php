<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Schedule_model extends CI_Model 
{

   public function get_all()
   {
      return $this->db->get('schedule_toefl')->result_array();
   }

   public function update()
   {
      $data = [
         'tanggal1' => $this->input->post('tanggal1') ? date('Y-m-d', strtotime(htmlspecialchars($this->input->post('tanggal1', TRUE)))) : '0000-00-00',
         'tanggal2' => $this->input->post('tanggal2') ? date('Y-m-d', strtotime(htmlspecialchars($this->input->post('tanggal2', TRUE)))) : '0000-00-00',
         'tanggal3' => $this->input->post('tanggal3') ? date('Y-m-d', strtotime(htmlspecialchars($this->input->post('tanggal3', TRUE)))) : '0000-00-00',
         'latest_update' => date('Y-m-d H:i:s', strtotime('now'))
      ];

      $this->db->update('schedule_toefl', $data, ['id_schedule' => $this->input->post('id_schedule')]);
      
   }
   
}

/* End of file Schedule_Model*/

