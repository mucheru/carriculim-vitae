<?php
class Inserted_data_model extends CI_Model{

	function __construct()
    {
       parent::__construct();
       $this->load->database();
    }


	public function insert_image_info($full_path){

		$this->file_name = $full_path;
		$this->db->insert('vitae',$this);
	}

	public function get_image(){

		//$query=$this->db->query("select id,image_namefrom vitae");
		//$return_array = $query->row_array();
        //return $return_array;
	}
}



?>