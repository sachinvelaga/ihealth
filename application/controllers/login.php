<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	
   function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		
	}

	public function index()
	{
	   
	    $this->render('login');
	}
  
   public function render($filename)
    {

       $this->load->view('header');
       $this->load->view($filename);
       $this->load->view('footer');
    }
}

