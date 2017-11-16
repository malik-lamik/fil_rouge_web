<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filrouge extends CI_Controller {

function index() {
		$this ->load->view('filrouge/entete');
		$this ->load->view('filrouge/index');
		$this ->load->view('filrouge/footer');	
}
	
	public function inscription()
	{
		$this ->load->view('filrouge/entete');
		$this ->load->view('filrouge/inscription');
		$this ->load->view('filrouge/footer');	
	}

	
}
?>