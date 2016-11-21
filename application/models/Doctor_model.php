<?php
require_once('Db.php');
/**
 * Created by PhpStorm.
 * User: Future Move IT2
 * Date: 11/19/2016
 * Time: 2:19 PM
 */
class Doctor_model extends CI_Model
{
    public function  get_doctor($args=null){

        $select[] = null;

        if($args == null){
            $db_query	= array(
                'key' => null,
                'value'=>null,
                'db_table'=>'doctor',

                'page_limit'=> 20
            );
            array_push($select,$db_query);
        }
        else
        {
            foreach($args as $key => $value){
                if($value){

                    $db_query	= array(
                        'key' => $key,
                        'value'=>$value,
                        'db_table'=>'doctor',



                    );
                }
                array_push($select,$db_query);
            }
        }
        $database = new db();
        $data =	$database->get_data($select);


        if($data){
            return $data;
        }
        else
            return false;

    }
    public function  add_doctor($doctor,$status="save"){
        $database =  new Db();
        //data to to be inserted or updated
        $data = array(
            'name' => $doctor->name,
            'doctor_id' =>$doctor->doctor_id,
            'email' =>$doctor->email,
            'gender' =>$doctor->gender,
            'date_of_birth'=>$doctor->date_of_birth,
            'phone' =>$doctor->phone,
            'NID' =>$doctor->NID,
            'image' =>$doctor->image,
            'address' =>$doctor->address,
            'specialization'=>$doctor->specialization
        );

        //specify the filed values
        $field = array(
            'key' => 'doctor_id',
            'value' =>$doctor->doctor_id,
            'table' => 'doctor'
        );

        //for update functiolaty
        if($status == "update")
            return $database->update($data,$field);

        //for save functionlaty
        else if($status == "save")
            return  $database->save($data,$field);
    }
    public function add_doctor_meta($doctor,$status='save'){

        $data = array(
            'value' => $doctor->meta_value,
            'doctor_id' =>$doctor->doctor,
            'key' =>$doctor->meta_key
        );

        $field = array(
            'key' => 'doctor_id',
            'value' =>$doctor->doctor,
            'table' => 'doctor_meta'
        );
        $database =  new Db();
        if($status == "save") {
            $data = $database->save($data, $field);
        }
        else{
            $data = $database->update($data, $field);
        }
    }
    public function get_doctor_meta($args=null){
        $select[] = null;

        if($args == null){
            $db_query	= array(
                'key' => null,
                'value'=>null,
                'db_table'=>'doctor_meta',

                'page_limit'=> 20
            );
            array_push($select,$db_query);
        }
        else
        {
            foreach($args as $key => $value){
                if($value){

                    $db_query	= array(
                        'key' => $key,
                        'value'=>$value,
                        'db_table'=>'doctor_meta',



                    );
                }
                array_push($select,$db_query);
            }
        }
        $database = new db();
        $data =	$database->get_data($select);


        if($data){
            return $data;
        }
        else
            return false;
    }

}