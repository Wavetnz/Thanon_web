<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class work extends CI_Controller {
public function index()
	{
		$this->load->view('mycss');
		$this->load->view('myjs');
		$this->load->view('work_view');
	}
	
}
