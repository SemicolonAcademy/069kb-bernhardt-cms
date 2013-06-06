<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_m extends CI_Model {

   
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_users()
    {
        		
		$this->db->select('*');
		$this->db->from('users');
		$query = $this->db->get();
		
		return $query->result_array();
		
		
		//return $this->db->get('users')->result_array();
    }
	
	
	function insert_user($user){
	
		$data = array(
			'username' => $user['username'],
			'email' => $user['email'],
			'password' => md5($user['password'])
		);

		return $this->db->insert('users', $data); 
	
	}
	
	function get_user_by_id($user_id)
    {
		$this->db->where('id',$user_id);
		$query = $this->db->get('users');		
		return $query->row_array();
    }
	
	function update_user($id, $user){
	
		$update_data = array(
			'username' => $user['username'],
			'email' => $user['email'],
			'password' => md5($user['password'])
		);		
		$this->db->where('id', $id);
		return $this->db->update('users', $update_data); 
	
	}

	function delete_user($id){
		//return $this->db->delete('users', array('id' => $id)); 		
		$this->db->where('id', $id);
		return $this->db->delete('users'); 

	}
   

}

