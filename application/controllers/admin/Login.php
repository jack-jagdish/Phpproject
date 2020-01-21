<?php
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('admin'))
			redirect('admin/dashboard');
	}
	function index()
	{
		if($this->input->post('emailaddress'))
		{
			$arr['emailaddress']=$this->input->post('emailaddress');
			$arr['password']=$this->input->post('password');
			$this->load->model('admin/admin');
			$user=$this->admin->verify($arr);
			if ($user)
			{
				if($user == "INACTIVE STATUS")
				{
					$this->session->set_flashdata('Error', ' ACCOUNT IN INACTVE STATUS');
					redirect('admin/login');
				}
				$this->session->set_userdata('admin', $user->id);
				redirect('admin/dashboard');
			}else {
				$this->session->set_flashdata('Error', 'invaild user email and password ');
				redirect('admin/login');
			}
		}else
		{
			$this->load->view('admin/login');
		}
	}
	function loginverify()
	{
		$this->load->model('admin/admin');
		$check = $this->admin->AuthId();
		if ($check) {
			$this->session->set_userdata('admin', '1');
			redirect('admin/dashboard');
		} else if (!$check) {

			$this->load->view('admin/login');
			$this->load->view('admin/inactiveUser');
		} else {
			echo "invalid login details";
		}
	}
}
