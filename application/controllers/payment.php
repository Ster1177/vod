<?php
class payment extends CI_Controller
{

	function __construct() {
		parent::__construct();
		$this->load->model('update_premium');
	}

	public function view()
	{
		 $this->load->view('payment');
	}

	public function update() {
		$this->update_premium->update($this->session->userdata('uname'));
		redirect('home/view');
	}

}