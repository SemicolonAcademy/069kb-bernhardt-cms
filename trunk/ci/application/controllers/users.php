<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct(){
	
		parent::__construct();
		$this->load->model('Users_m');
	}
	 
	public function index()
	{
		//$this->load->helper('url');		
		//$this->load->database();
		
		$data['users'] = $this->Users_m->get_users();				
		$this->load->view('admin/users', $data);
	}
	
	 
	public function create(){
	
		
		if ($_POST){
		
			$user_data = array (		
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
				
			); 
		
			//$this->load->model('Users_m');
			$this->Users_m->insert_user($user_data);						
			redirect('users');
		}
		
		$data['users'] = $this->Users_m->get_users();				
		$this->load->view('admin/users', $data);

	
	} 
	
	public function delete($id){
		
		//if (!$id) redirect('users');
		
		$this->Users_m->delete_user($id);		
		redirect('users');
	}
	
	public function edit($id)
	{
		if(!$id) redirect('users');
		
		if ($_POST){
		
			$user_data = array (		
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
				
			);
		
			$this->Users_m->update_user($id, $user_data);			
			//echo $this->db->last_query();			
			redirect('users');
		}
		
		$data['user_detail'] = $this->Users_m->get_user_by_id($id);			
		$this->load->view('admin/users_edit', $data);
	}
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */