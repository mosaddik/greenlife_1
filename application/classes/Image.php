<?php

/**
 * Created by PhpStorm.
 * User: Future Move IT2
 * Date: 11/22/2016
 * Time: 9:32 AM
 */
class Image
{
    public $image ;

    public function __construct($image)
    {
        $this->image  =  $image;

    }


    public function image_encription(){


        $image =  $this->image.date('Y-m-d- H-i-s');
        return md5($image);
    }


    public function uploadImage(){

        $config['upload_path']          = './uploads';
        $config['allowed_types']        = 'png|gif|jpg|';
        $config['max_size']             = 500;
        $config['max_width']            = 2000;
        $config['max_height']           = 2000;


        $config['file_name'] = $this->image;


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
}