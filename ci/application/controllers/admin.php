<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
	
		parent::__construct();		
		$this->load->helper('url');				
		
	}
	
	public function index()
	{
		
		$this->load->view('admin/base');
	}
	
	
	public function users()
	{
		
		$this->load->view('admin/base');
	}
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */