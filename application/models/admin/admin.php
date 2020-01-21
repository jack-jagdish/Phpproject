<?php
class admin extends CI_Model
{
	function AuthId()
	{
		$arr['emailaddress'] = $this->input->post('emailaddress');
		$arr['password'] = $this->input->post('password');
		$arr['statusofcus'] = True;
		$this->db->select('username, cust_id ,emailaddress, statusofcus');
		$getUsrInfoArr = $this->db->get_where('status', $arr)->row();
		return $getUsrInfoArr;
	}
	function verify($arr)
	{
		$result=$this->db->get_where('status', $arr)->row();
		if ($result && $result->statusofcus)
		{
			return $result;
		}else
		{
			if($result && !$result->statusofcus)
				return "INACTIVE STATUS";
			return false;
		}
	}
}
