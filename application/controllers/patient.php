<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('C:\wamp\www\greenlife\application\classes\Patient.php');
require_once('C:\wamp\www\greenlife\application\classes\Patient_Meta.php');



class Patient extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

	public function index()
	{
		$this->load->model('Patient_model');
		
		$data['patient_data'] = $this->Patient_model->get_patient();
		
		//echo md5("new.jpg".date('Y-m-d H:i:s'));
		
		
		$this->load->view('theme/greenlife/header');
		$this->load->view('theme/greenlife/left-menu');
		$this->load->view('theme/greenlife/patient/patient-list',$data);
		$this->load->view('theme/greenlife/footer');
		
	}
	
	public function register()
	{

		$this->load->view('theme/greenlife/header');
		$this->load->view('theme/greenlife/left-menu');
		$this->load->view('theme/greenlife/patient/patient-add');
		$this->load->view('theme/greenlife/footer');
	}
	
	public function edit($patient_id = NULL)
	{
		$this->load->model('Patient_model');
		$query= array('Patient_id'=>$patient_id);
		$data['patient_data'] = $this->Patient_model->get_patient($query);
	    $data['patient_meta'] = $this->Patient_model->get_patient_meta($patient_id,"Emergency_Contact");



		$this->load->view('theme/greenlife/header');
		$this->load->view('theme/greenlife/left-menu');
		$this->load->view('theme/greenlife/patient/patient-edit',$data);
		$this->load->view('theme/greenlife/footer');

	}
	
	public function view( $patient_id = NULL )
	{

		$this->load->model('Patient_model');
		$query= array('Patient_id'=>$patient_id);
		$data['patient_data'] = $this->Patient_model->get_patient($query);
	    $data['patient_meta'] = $this->Patient_model->get_patient_meta($patient_id,"Emergency_Contact");

	    

	    
		$this->load->view('theme/greenlife/header');
		$this->load->view('theme/greenlife/left-menu');
		$this->load->view('theme/greenlife/patient/patient-details',$data);
		$this->load->view('theme/greenlife/footer');
	

	}


	//regiter post will be here and also update function will be here
	public function save_changes($status){
        // Json Covertor 
		$patient = new PatientObj();
		$patient_meta = new Patient_Meta();
	


		$patient->patient_id = $this->input->post('patient_id'); 
	  	$patient->full_name = $this->input->post('person_name');
	  	$patient->gender = $this->input->post('person_gender');
	  	$patient->email = $this->input->post('person_email');
	  	$patient->date_of_birth =  date('Y-m-d',strtotime($this->input->post('person_date_of_birth')));
	    $patient->image = $this->input->post('person_image');
	  	$patient->phone = $this->input->post('person_phone');
	  	//$patient->address = $this->jsonConvert($_POST,'person_address') ;
	  	$patient->problems = $this->input->post('person_problems');
	  	$patient->person_address = $this->input->post('area');
	  	$patient->NID = $this->input->post('person_NID');
	   // $patient->Patient_Meta->meta_value  = $this->jsonConvert($_POST);
	    $this->load->model('Patient_model');

        $address = array (
	    	'area' => 	$patient->person_address
	    	);
	    $patient->address= json_encode($address );

	    $patient->image = $this->image_encription($patient->image);
        $this->uploadImage($patient->image);


	    if($status== 0){
            $this->Patient_model->update_patient($patient,"save");
	    }
	    else if($status == 1){
            $this->Patient_model->update_patient($patient,"update");
            redirect('patient/edit/'.$patient->patient_id);
        }



         /*
        //update part 
	    $this->Patient_model->update_patient($patient);
	    $this->Patient_model->update_patient_meta($patient);

	 	*/

	}

public function image_encription($image){
   $image =  $image.date('Y-m-d- H-i-s');
    return md5($image);
}


    public function uploadImage($image){



        $config['upload_path']          = './uploads';
        $config['allowed_types']        = 'png|gif|jpg|';
        $config['max_size']             = 500;
        $config['max_width']            = 2000;
        $config['max_height']           = 2000;


        $config['file_name'] = $image;


        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('person_image'))
        {
            $error = array('error' => $this->upload->display_errors());


            //$this->load->view('upload_form', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());


            //$this->load->view('upload_success', $data);
        }

    }





public function jsonConvert($data,$key='key'){

		$json = "";
	  	foreach ($data[$key] as $key => $value) {	  
	  	$json = $json .'"'.$value.'"'.':'.'"'.$data[$value].'",'        ;	 
	  	}	  	 
	  	$json_Data = "";
	  	for($i=0;$i<=strlen($json)-2;$i++)
	  	{
	  		$json_Data = $json_Data	. $json[$i];
	  	}
	  	$json = "{".$json_Data . "}";
	  	return $json;	  	
		
}






}
