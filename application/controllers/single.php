<?php
class single extends CI_Controller
{

	public function view()
	{
		 $this->load->view('includes/header');
		 $this->load->view('includes/menu');
		 $this->load->view('single');

		$filename = 'ads.php'; 
	    if ( file_exists('application/views/includes/' . $filename) ){ 
    					$this->load->view('includes/'.$filename);  
		} else{ } 
		 
		 $this->load->view('includes/footer');
	}

}