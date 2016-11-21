<?php
require_once('doctor_meta.php');
/**
 * Created by PhpStorm.
 * User: Future Move IT2
 * Date: 11/19/2016
 * Time: 12:46 PM
 */
class Doctor
{
    public $Id;
    public $doctor_id;
    public $name;
    public $image;
    public $phone;
    public $gender;
    public $email;
    public $NID;
    public $date_of_birth;
    public $address;
    public $specialization;
    public $doctor_meta;


   public function  __construct()
   {
       $doctor_meta =  new doctor_meta();
   }


}