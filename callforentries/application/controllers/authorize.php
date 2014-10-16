<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authorize extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('a_loggedin')) {
			redirect('admin');
		}
	}
	
	function index() {
		$this->load->view('admin/common/header');
		$this->load->view('admin/login');
		$this->load->view('admin/common/footer');
	}
	function validate() {
		$this->load->model('User_model');		
		$user = $this->User_model->validate(array('username' => $_POST['username'],'password' => $_POST['password']));
		if ($user) { $this->session->set_userdata('a_loggedin',true); 
			redirect('admin');
		} else {
			$this->session->set_flashdata('error',true);
			redirect('authorize');
		}
	}
}
?>