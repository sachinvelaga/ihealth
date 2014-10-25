<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	
   function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		
	}

	function index()
 	 {
		   if($this->session->userdata('logged_in'))
		   {
		     $session_data = $this->session->userdata('logged_in');
		     $data['username'] = $session_data['username'];
		     $this->render('admin_home', $data);
		   }
		   else
		   {
		      $this->render('admin_login');
		   }
 	 }
 
	function logout()
	 {
	   $this->session->unset_userdata('logged_in');
	   session_destroy();
	   $this->index();
	 }
    
     function render($file, $data = array())
     {
       
       $this->load->view('admin_header');
       $this->load->view($file,$data);
       $this->load->view('admin_footer');
     }
}
?>