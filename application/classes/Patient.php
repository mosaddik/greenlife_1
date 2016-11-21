<?php

require_once('C:\wamp\www\greenlife\application\classes\Patient_Meta.php');

class PatientObj {

	public $id;
	public  $full_name;
	public $patient_id;
	public $email;
	public $gender;
	public $date_of_birth;
	public $phone;
	public $NID;
	public $address;
	public $problems;
	public $Patient_Meta;
	public $image;


	public function __construct(){
		$this->Patient_Meta = new Patient_Meta();
	}





	
	public function set_full_name($full_name){
		$this->full_name = $full_name;
	}
	public function set_patient_id($patient_id){
		$this->patient_id = $patient_id;
	}
	public function set_email($email){
		$this->email = $email;
	}
	public function set_gender($gender){
		$this->gender = $gender;
	}
	public function set_date_of_birth($date_of_birth){
		$this->date_of_birth = $date_of_birth;
	}
	public function set_phone($phone){
		$this->phone = $phone;
	}
	public function set_NID($NID){	
		$this->NID = $NID;
	}
	public function set_address($address){
		$this->address = $address;
	}
	public function set_problem($problem){
		$this->problem = $problem;
	}
	public function set_image($image){
		$this->image = $image;
	}


	public function get_full_name(){
			return $full_name;
	}
	public function get_patient_id(){
		return $this->patient_id;
	}
	public function get_email(){
		return $this->email;
	}
	public function get_gender(){
		return $this->gender;
	}
	public function get_date_of_birth(){
		return  $this->date_of_birth;;
	}
	public function get_phone(){
		return $this->phone;
	}
	public function get_NID(){	
		return $this->NID;
	}
	public function get_address(){
		return $this->address;
	}
	public function get_problem(){
		return $this->problem;
	}
	public function get_image(){
		return $this->image;
	}



  





}



?>