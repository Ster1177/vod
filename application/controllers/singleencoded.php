<?php
class singleencoded extends CI_Controller
{

	public function view()
	{
		 $this->load->view('includes/header');
		 $this->load->view('includes/menu');
		 $this->load->view('singleencoded');
		 $this->load->view('includes/ads');
		 $this->load->view('includes/footer');
	}

}