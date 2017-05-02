<?php
class home extends CI_Controller
{

	public function view()
	{
		 $this->load->view('includes/header');
		 $this->load->view('includes/menu');
		 $this->load->view('home');
		 $this->load->view('includes/footer');
	}

}