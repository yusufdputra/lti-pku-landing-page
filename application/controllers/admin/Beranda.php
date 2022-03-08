<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

   public function __construct()
   {
      parent::__construct();
   }

   public function index()
   {
      $this->load->view('admin/templates/header');
      $this->load->view('admin/templates/footer');
   }
}

/* End of file Beranda.php */

