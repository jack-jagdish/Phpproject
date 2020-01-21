<?php
class customer_status extends CI_Model
{
	function getAll()
	{
		 $this->db->order_by('id  ASC');
		return $this->db->get('status')->result();
	}
	 function getById($id)
	{
		return $this->db->get_where('status',array('id'=>$id))->row();
	}
	function save()
	{
		$arr['name'] = $this->input->post('name');
		$arr['username'] = $this->input->post('username');
		$arr['emailaddress'] = $this->input->post('emailaddress');
		$arr['password'] = $this->input->post('password');
		$arr['statusofcus']= $this->input->post('statusofcus');
		$check = $this->db->get_where('status',array('emailaddress'=>$arr['emailaddress']));
		$result= $check->result();
		if(!$result){
			$this->db->insert('status', $arr);
			redirect('admin/status/index');
		}
		else
		{
			redirect('admin/status/add?exist=1');
		}
	}
	function update($id)
	{
		$arr['name'] = $this->input->post('name');
		$arr['username'] = $this->input->post('username');
		$arr['emailaddress'] = $this->input->post('emailaddress');
		$arr['password'] = $this->input->post('password');
		$arr['statusofcus'] = $this->input->post('statusofcus');
		$check = $this->db->get_where('status',array('emailaddress'=>$arr['emailaddress'],'id!='=>$id));
		$result= $check->result();
		if($result){
			redirect('admin/status/add?exist=1');
		}
		$this->db->where(array('id'=>$id));
		$this->db->update('status',$arr);
	}

	function delete($id)
	{
		$this->db->where(array('id'=> $id));
		$this->db->delete('status');
	}
}



