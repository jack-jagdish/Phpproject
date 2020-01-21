<?php
class status extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('admin'))
			redirect('admin');
		$this->load->model('admin/customer_status');
	}
	function index()
	{
		$data['status'] = $this->customer_status->getAll();
		$this->load->view('admin/status/index', $data);
	}
	function add()
	{
		$this->load->view('admin/status/add');
	}
	function save()
	{
		$this->customer_status->save();
		$this->session->set_flashdata('success', 'New entry saved successfully');
		redirect('admin/status/index');
	}
	function edit($id = null)
	{
		$data['status'] = $this->customer_status->getById($id);
		$this->load->view('admin/status/edit', $data);
	}
	function update($id = null)
	{
		$this->customer_status->update($id);
		$this->session->set_flashdata('success', 'update successful');
		redirect('admin/status/index');
	}
	function delete($id = null)
	{
		$this->customer_status->delete($id);
		$this->session->set_flashdata('success', 'deleted successfully');
		redirect('admin/status/index');
	}
	function validatePassword($password)
	{    $this->customer_status->
		$this->db->get_where('status',array('password'=>$password))->row();
		$uppercase = preg_match('@[A-Z]@', $password);
		$lowercase = preg_match('@[a-z]@', $password);
		$number    = preg_match('@[0-9]@', $password);
		$specialChars = preg_match('@[^\w]@', $password);
		if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
			echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
		}else{
			echo 'Strong password.';
		}
		$this->session->setflashdata('unique password created');
		redirect('admin/status/index');
	}
}
