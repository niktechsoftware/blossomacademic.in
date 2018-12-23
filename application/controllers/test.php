<?php
class Test extends CI_Controller{
	function home(){		
		$data = array(
				"name" => $this->input->post("name"),
				"add" => $this->input->post("add"),
				"mobile" => $this->input->post("mobile")
		);
		
		$this->db->insert("student",$data);
		
		redirect(base_url()."index.php/test/view");
		/*
		$val = $this->db->get("ci_sessions");
		foreach($val->result() as $row){
			echo $row->session_id."<br/>";
			echo $row->ip_address."<br/>";
		}
		*/
	}
	function from(){
		$this->load->view("stuForm");
	}
	
	
	
	
	function view(){
		$data['id'] = 0;
		$data['val'] = $this->db->get("student");
		$this->load->view("stuList",$data);
	}
	/* Miltipal delete data with check box
	function studel(){
	    $val = $this->input->post("checkbox");
		$row = sizeof($val);
		foreach($val as $list){
			$this->db->where("id",$list);
			$this->db->delete("student");
		}
		redirect(base_url()."index.php/test/view/true/$row");
	}*/
	
	function stuupdate(){
		 $id = $this->input->post("id");
		if($this->input->post('update') != null)
		{
			$data['id'] = $id;
			$data['val'] = $this->db->get("student");
			$this->load->view("stuList",$data);
		}
		elseif($this->input->post("delete") != null){
			echo $id;
			//$val = $this->input->post("id");
			//echo $row = sizeof($val);
			$data['id'] = $id;
			$this->db->where("id",$this->input->post('id'));
			$this->db->delete("student",$data);
			redirect(base_url()."index.php/test/view");
		}
		
		elseif($this->input->post("save") != null){
			$data = array(
				"name" => $this->input->post("name"),
				"add" => $this->input->post("add"),
				"mobile" => $this->input->post("mobile")
			);
			$this->db->where("id",$this->input->post('stid'));
			$this->db->update("student",$data);
			$data['id'] = 0;
			$data['val'] = $this->db->get("student");
			$this->load->view("stuList",$data);
		}
		
	}
}
