<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Error_404 extends CI_Controller 
{

   public function index()
   {
      $this->load->view('error_404');
   }

}

/* End of file Error_404.php */

