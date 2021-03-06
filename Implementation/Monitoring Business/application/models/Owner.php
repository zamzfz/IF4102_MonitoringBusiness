<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends CI_Model {

	public function getDataOwner($username)
	{
		# code...
		$this->db->select('*');
        $this->db->where('username',$username);
        $this->db->from('owner');
        $query = $this->db->get();
        return $query->row();
	}

	public function insertData($data)
	{
		$this->db->insert('owner', $data);
		return;
	}

	public function editOwner($idOwner,$data)
	{
		# code...
		$this->db->where('idOwner',$idOwner);
		$this->db->update('owner',$data);
	}


	

}

/* End of file Owner.php */
/* Location: ./application/models/Owner.php */