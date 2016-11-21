<?php 

class Db extends CI_model{

//select * from table where id  = 1







public function get_data($args){

   try{
   $flag = 0;
	foreach($args as $query){

		for($i=1;$i<count($query);$i++){


		  if(isset($query['key']) != null && isset($query['value']) != null){
			$this->db->where($query['key'], $query['value']);
		  }

		  if(isset($query['select']) && $flag == 0){
			  $this->db->select($query['select']);
			  $flag = 1;
		  }

		  if(isset($query['page_limit'])){
			$this->db->limit($query['page_limit']);
		}
	 }



	}

	 $flag = 0;


	 $data = $this->db->get($query['db_table']);
	 return $data->result();
   } catch (Exception $e) {
    return false;
}



}
public function update($data,$field){

	$this->db->where($field['key'],$field['value']);
	$this->db->update($field['table'], $data);

}

public function save($data,$field){


$this->db->insert($field['table'],$data);


}







}









?>