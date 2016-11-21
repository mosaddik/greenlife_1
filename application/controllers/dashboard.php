<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{		
		//load all patient
		$this->load->model('Patient_model');
		
		$data['patient_data']= $this->Patient_model->get_patient();
		$this->load->view('theme/greenlife/header');
		$this->load->view('theme/greenlife/left-menu');
		$this->load->view('theme/greenlife/footer');
	}
}
