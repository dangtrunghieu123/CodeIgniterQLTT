<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error403 extends CI_Controller {
	public function index()
	{
		$this->load->view("errors/cli/error_403");
		
	}

}
