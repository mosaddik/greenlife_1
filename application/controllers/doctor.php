<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {

	
	public function index()
	{
		$this->load->view('doctor/doctor-list');
	}
	
	public function edit()
	{
		$this->load->view('patient/doctor-edit');
	}
}
