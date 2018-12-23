<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
public function index(){
		$data['pagename'] = "Home";
		$data['title'] = "Law";
		$data['body'] = "home2";
		$this->load->view("includes/templeate2",$data);
	}
	
	
	
	public function comingsoon(){
		$data['pagename'] = "Home";
		$data['title'] = "Blossom Academic School";
		$data['body'] = "comingsoon";
		$this->load->view("includes/templeate2",$data);
	}
	
	public function about2(){
		$data['pagename'] = "About us";
		$data['title'] = "About Us";
		$data['body'] = "about2";
		$this->load->view("includes/templeate2",$data);
	}
	
	public function mission(){
		$data['pagename'] = "Mission";
		$data['title'] = "Mission";
		$data['body'] = "mission";
		$this->load->view("includes/templeate2",$data);
	}
	

	public function dMessage(){
		$data['pagename'] = "Director Message";
		$data['title'] = "Director Message";
		$data['body'] = "dMessage";
		$this->load->view("includes/templeate2",$data);
	}
	public function mMessage(){
		$data['pagename'] = "Manager Message";
		$data['title'] = "Manager Message";
		$data['body'] = "mMessage";
		$this->load->view("includes/templeate2",$data);
	}
	public function pMessage(){
		$data['pagename'] = "Principal Meaasge";
		$data['title'] = "Principal Meaasge";
		$data['body'] = "pMessage";
		$this->load->view("includes/templeate2",$data);
	}
	public function admissionRule(){
		$data['pagename'] = "Admission Rule";
		$data['title'] = "Admission Rule";
		$data['body'] = "admissionRule";
		$this->load->view("includes/templeate2",$data);
	}
	public function admissonProcedure(){
		$data['pagename'] = "Admission";
		$data['title'] = "Admission";
		$data['body'] = "admissonProcedure";
		$this->load->view("includes/templeate2",$data);
	}
	
	public function rule(){
		$data['pagename'] = "NRI Sevices";
		$data['title'] = "NRI Sevices";
		$data['body'] = "rule";
		$this->load->view("includes/templeate2",$data);
	}
	
	public function gallery(){
		$data['pagename'] = "gallery";
		$data['title'] = "Gallery";
		$data['body'] = "gallery";
		$this->load->view("includes/templeate2",$data);
	}
	public function sitmap(){
		$data['title'] = "Site Map";
		$this->load->view("about",$data);
	}
	
	public function contact(){
		$data['pagename'] = "contact";
		$data['title'] = "Contact Us";
		$data['body'] = "contact";
		$this->load->view("includes/templeate2",$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */