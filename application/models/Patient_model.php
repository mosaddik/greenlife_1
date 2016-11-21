<?php
require_once('Db.php');

class Patient_model extends CI_model 
{				 				
				public function get_patient($args =null){
					
					
						$select[] = null;	
							
							if($args == null){
								$db_query	= array(
									'key' => null,
									'value'=>null,
									'db_table'=>'patient',
						
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
										'db_table'=>'patient',
										
										
										
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
				public function get_patient_meta($patient_id, $meta_key=null,$meta_value=null) {
				
				try{
				
						$select[] = null;	
						
						$db_query = array(
							'db_table' =>'patient_meta',
							'key' =>'meta_key',
							'value'=>$meta_key,
							'patient_id' =>	$patient_id,
							'select' =>'meta_value',
							'page_limit' =>null					
						);
						array_push($select,$db_query);
						$database = new Db();
						
						$data['meta_value'] = $database->get_data($select);
						
						
						
							if($data){
								return $data;
							}
							else
							   return false;
				} catch (Exception $e) {
						return false;
						}
				
				
				
				
				}
				public function update_patient($patient,$status="save"){




					$data = array(
						'patient_id' => $patient->id,
						'full_name' => $patient->full_name,
						'patient_id' =>$patient->patient_id,
						'email' =>$patient->email,
						'gender' =>$patient->gender,
						'date_of_birth'=>$patient->date_of_birth,
						'phone' =>$patient->phone,
						'NID' =>$patient->NID,
                        'image' =>$patient->image,
						'address' =>$patient->address,
						'problems' =>$patient->problems

				 	);

				 
				

				
				$field = array(
						'key' => 'patient_id',
						'value' =>$patient->patient_id,
						'table' => 'patient'
					);	
				 	
				 $database =  new Db();
				 if($status == "update")
				 	$data = $database->update($data,$field);

				 
				 if($status == "save")
				 	$data = $database->save($data,$field);




				
				}
				public function update_patient_meta($patient){
					$data = array(

						'meta_value' => $patient->Patient_Meta->meta_value,
						'patient_id' =>$patient->patient_id

						);




					$field = array(
						'key' => 'patient_id',
						'value' =>$patient->patient_id,
						'table' => 'patient_meta'
					);
					$database =  new Db();
 					$data = $database->update($data,$field);
				
				}

				
				
		
				
		

			
}
?>