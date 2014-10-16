<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();

	}
	function index() {
		redirect('');
	}
	
	function vippack() {
		$data['links'] = $this->Menu_model->get_links(1,0);
		$data['dates'] = $this->Film_model->get_dates();
		$data['genres'] = $this->Film_model->get_genres();
		$data['page'] = $this->Content_model->id($id);
		$data['films'] = $this->Content_model->get_films($id);
		$this->load->view('stk/common/header');
		$this->load->view('stk/common/footer');
	}
}
?>