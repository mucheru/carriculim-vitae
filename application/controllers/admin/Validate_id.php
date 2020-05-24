	<?php
	class Validate_id extends CI_Controller{
	function __construct()
	{
	parent::__construct();
	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->load->model('admin_model/account_model');
	}
	public function verifyid(){
	$condition=$this->input->post('idnumber');
	$data['idnum']=$this->account_model->findid($condition);
	//$this->load->view('result_view',$data);  	

	if (empty($data['idnum'])) {
	echo "<strong>data is empty.<br></strong>";
	$data['idnum']=Null;
	}else{
	echo "<strong>data is not empty!!!!</strong>";
	$this->load->view('education/education',$data);
	// echo "this is the...".$id_num=$data['idnum'];
}

}


	public function education(){

	$this->load->view('education/education');
	$this->form_validation->set_rules('education','Education','required');
	//$this->form_validation->set_rules('upload','upload','required');

	if (empty($_FILES['upload']['name']))
	{
	$this->form_validation->set_rules('upload', 'Document', 'required');
	}
	if($this->form_validation->run()==FALSE){
	echo validation_errors();
	}else{

	

	$uploaddir = 'uploads/';
	$uploadfile = $uploaddir . basename($_FILES['upload']['name']);
	echo '<pre>';
	if (move_uploaded_file($_FILES['upload']['tmp_name'], $uploadfile)) {
	echo "File is valid, and was successfully uploaded.\n";
	} else {
	echo "Possible file upload attack!\n";
	}

	echo 'Here is some more debugging info:';
	print_r($_FILES);

	//$filename= basename($_FILES['upload']['name']);

	$filename= ($_FILES['upload']['name']);

	$condition=$this->input->get('idnumber');
	$data['idnum']=$this->account_model->findid($condition);	
	 $this->load->helper('date_helper');

	$data=array(
	'education' =>$this->input->post('education'),
	'upload_academic' =>$filename,
	'idnum'=>$this->input->post('id_num'),
	'created_on'=>standard_date()

	);
	$this->account_model->insert_education_content($data);



	}

	}

	}


	?>