<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Profil_model extends CI_Model 
{

   public function get_by_id($id)
   {
      return $this->db->get_where('profil', ['id_profil' => $id])->row_array();
   }

   
   public function update($logo)
   {
      $data = array(
         'nama_perusahaan' => $this->input->post('nama_perusahaan', TRUE),
         'moto'            => $this->input->post('moto_perusahaan', TRUE),
         'nomor_telp'      => $this->input->post('nomor_telpon', TRUE),
         'nomor_hp'        => $this->set_nomor_hp($this->input->post('nomor_handphone', TRUE)),
         'email'           => $this->input->post('email', TRUE),
         'alamat1'         => $this->input->post('alamat_pusat', TRUE),
         'alamat2'         => $this->input->post('alamat_cabang', TRUE),
         'instagram'       => $this->input->post('sosmed_instagram', TRUE),
         'facebook'        => $this->input->post('sosmed_facebook', TRUE),
         'twitter'         => $this->input->post('sosmed_twitter', TRUE),
         'logo'            => $logo,
         'latest_update'   => date('Y-m-d H:i:s', strtotime('now'))
      );

      $this->db->where('id_profil', $this->input->post('id_profil'));
      $this->db->update('profil', $data);
   }


   public function set_nomor_hp($nomor_hp)
   {
      $kode_nomor = substr($nomor_hp, 0, 2);
      if ($kode_nomor != '62')
      {
         return substr_replace($nomor_hp, '628', 0, 2);
      }
      return $nomor_hp;
   }

}

/* End of file Profil_model.php */

