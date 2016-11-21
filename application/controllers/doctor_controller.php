<?php
/**
 * Created by PhpStorm.
 * User: Future Move IT2
 * Date: 11/19/2016
 * Time: 12:50 PM
 */
require_once('C:\wamp\www\greenlife\application\classes\Doctor.php');
require_once ('patient.php');
class doctor_controller extends CI_Controller {


    public function index()
    {
        $this->load->model('config_model');

        $data['doc'] = $this->config_model->get_config();


        //echo md5("new.jpg".date('Y-m-d H:i:s'));


       // $this->load->view('theme/greenlife/header');
        //$this->load->view('theme/greenlife/left-menu');
        //$this->load->view('theme/greenlife/patient/doctor-list',$data);
       // $this->load->view('theme/greenlife/footer');

    }
    public function register()
    {
        $this->load->model('config_model');
        $data['config'] = $this->config_model->get_config();

        $this->load->view('theme/greenlife/header');
        $this->load->view('theme/greenlife/left-menu');
        $this->load->view('theme/greenlife/doctor/doctor-add',$data);
        $this->load->view('theme/greenlife/footer');

    }
    public function update($id='58313ce3a318e'){
        $this->load->model('config_model');
        $this->load->model('Doctor_model');
        $query= array('doctor_id'=>$id);

        $doctor_meta =  array('doctor_id'=>$id);

        $data['meta'] = $this->Doctor_model->get_doctor_meta($doctor_meta);


        $data['config'] = $this->config_model->get_config();
        $data['doctor'] = $this->Doctor_model->get_doctor( $query);




        $this->load->view('theme/greenlife/header');
        $this->load->view('theme/greenlife/left-menu');
        $this->load->view('theme/greenlife/doctor/doctor-update',$data);
        $this->load->view('theme/greenlife/footer');


    }


    public function details($id='58313ce3a318e'){
        $this->load->model('config_model');
        $this->load->model('Doctor_model');
        $query= array('doctor_id'=>$id);

        $doctor_meta =  array('doctor_id'=>$id);

        $data['meta'] = $this->Doctor_model->get_doctor_meta($doctor_meta);


        $data['config'] = $this->config_model->get_config();
        $data['doctor'] = $this->Doctor_model->get_doctor( $query);




        $this->load->view('theme/greenlife/header');
        $this->load->view('theme/greenlife/left-menu');
        $this->load->view('theme/greenlife/doctor/doctor-details',$data);
        $this->load->view('theme/greenlife/footer');


    }


    public function save_changes($state='0'){


        $this->load->model('Doctor_model');
        $this->load->model('config_model');
        $data['config'] = $this->config_model->get_config();
        $doctor =  new Doctor();
        $image = new Patient();
        $doctor_meta =  new doctor_meta();

        $doctor->doctor_id = $this->input->post('doctor_id');
        $doctor->name = $this->input->post('doctor_name');
        $doctor->email = $this->input->post('doctor_email');
        $doctor->gender = $this->input->post('doctor_gender');
        $doctor->phone = $this->input->post('doctor_phone');
        $doctor->NID =$this->input->post('person_NID');
        $doctor->date_of_birth = date('Y-m-d',strtotime($this->input->post('doctor_date_of_birth')));
        $doctor->specialization = json_encode($this->input->post('specialization'));
        //$doctor->qualification = $this->input->post('doctor_qualification');
        $doctor->address =$this->input->post('area');
        if($this->input->post('person_image') != 'NULL'){
            $doctor->image =   $image->image_encription($this->input->post('person_image'));
            $image->uploadImage($doctor->image);
        }

        $doctor_meta->doctor = $doctor->doctor_id;
        $doctor_meta->meta_key = 'qualification';
        $doctor_meta->meta_value = $this->input->post('doctor_qualification');






        if($state == '1') {
            $this->Doctor_model->add_doctor($doctor, 'update');
            $this->Doctor_model->add_doctor_meta($doctor_meta,'update');
            redirect('doctor_controller/update/'.$doctor->doctor_id);
        }
        else if($state == '0'){
            $this->Doctor_model->add_doctor_meta($doctor_meta);
            $this->Doctor_model->add_doctor($doctor);

            $this->load->view('theme/greenlife/header');
            $this->load->view('theme/greenlife/left-menu');
            $this->load->view('theme/greenlife/doctor/doctor-add',$data);
            $this->load->view('theme/greenlife/footer');
        }
        else if ($state='2')
        {

            $this->load->view('theme/greenlife/header');
            $this->load->view('theme/greenlife/left-menu');
            $this->load->view('theme/greenlife/doctor/doctor-details',$data);
            $this->load->view('theme/greenlife/footer');

        }

    }

    public  function doctor_list(){
        $this->load->model('Doctor_model');
        $this->load->model('config_model');

        $data['doctor'] = $this->Doctor_model->get_doctor();
        $data['config'] = $this->config_model->get_config();
        $data['doctor_meta']  = $this->Doctor_model->get_doctor_meta();
        //


        $this->load->view('theme/greenlife/header');
        $this->load->view('theme/greenlife/left-menu');
        $this->load->view('theme/greenlife/doctor/doctor-list',$data);
        $this->load->view('theme/greenlife/footer');



    }










}