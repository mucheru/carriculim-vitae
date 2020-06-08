<?php
class Account_model extends CI_Model{

	function __construct()
    {
       parent::__construct();
       $this->load->database();
    }

    public function insertAccountInfor($data){
         $this->db->insert('account', $data);
    }

    public function findid($condition){
    	$this->db->select('*');
    	$this->db->from('account');
    	$this->db->where('idnum',$condition);
    	$query=$this->db->get();
    	//return $query->result_array();
    	if($query->num_rows()){
    	 //return $result->row();
    	 return $query->result_array();

    	}else{
    		echo "data not found";
    		return $query->result_array();

    	}

    }
   public function insert_education_content($data){

    $this->db->insert('cv_educationinfo',$data);
   } 

   public function insert_skills($skill){

    $this->db->insert('skills',$skill);
   }

   public function retrieve_skill(){
    $query = $this->db->query("select * from skills where status='1' order by created_on desc limit 25");
    $return_array = $query->result_array();
    return $return_array;
   }

   public function get_skills($id)
   {
    $this->db->select('*');
    $this->db->from('skills');
    $this->db->where('id',$id);
    $query=$this->db->get();
    return $query->row();
   }
   public function update_record($data,$id){
    $this->db->where('id', $id);
    $this->db->update('skills', $data);
    $result = $this->db->affected_rows();
    return $result;
   }
   public function delete_record($id){
    $this->db->where('id',$id);
    $this->db->delete('skills');

   }
}


?>