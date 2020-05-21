<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
	public function index()
	{
        $this->load->database();
		$data['artikel'] = $this->db->query('select * from artikel')->result();
		$this->load->view('admin/overview',$data);
	}

	
}
