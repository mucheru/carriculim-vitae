	<?php 
	class Admin_cv_setup extends CI_Controller{

	function __construct()
	{
	parent::__construct();
	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->load->model('admin_model/account_model');
	$this->load->helper('date_helper');
	$this->load->library('session');
	$this->load->library('table');
	$this->load->helper('url');

	}

	public function index()
	{

	$this->load->view('admin_cv_view');
	$this->form_validation->set_rules('firstname','Firstname','required');
	$this->form_validation->set_rules('lastname','lastname','required');
	$this->form_validation->set_rules('email','email','required');
	$this->form_validation->set_rules('physical_location','physical_location','required');
	$this->form_validation->set_rules('idnum','Id number','required|numeric|max_length[8]');
	//$this->form_validation->set_rules('idnum','Id number','required');

	if ($this->form_validation->run()==FALSE)
	{
	//$this->load->view('admin_cv_view');
	echo validation_errors();
	//$this->form_validation->set_data('firstname');
	//$this->load->library('form_validation');
	$this->form_validation->set_value();

	}else{
	$this->load->helper('date_helper');
	$data = array(
	'firstname' =>$this->input->post('firstname'),
	'lastname' =>$this->input->post('lastname'),
	'email' =>$this->input->post('email'),
	'physical_location' => $this->input->post('physical_location'),
	'idnum' => $this->input->post('idnum'),
	'created_on'=>standard_date()
	);
	$this->account_model->insertAccountInfor($data);

	}

	}
	public function create_skill()
	{
	$this->load->view('skills/create_skill');
	$this->form_validation->set_rules('skills','skills','required');
	if($this->form_validation->run()!=FALSE){
	$this->load->helper('date_helper');
	$skill=array(
		'skill'=>$this->input->post('skills'),
		'created_on'=>standard_date(),
		'status'=>1
	);

	$this->account_model->insert_skills($skill);
	$this->session->set_flashdata('msg','The skill was inserted successful');
	echo $this->session->flashdata('msg');
	$data['skill']=$this->account_model->retrieve_skill();
	//$this->load->view('skills/display_skills',$data);
	$template = array( 'table_open'  => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">');
	$this->table->set_template($template);
	$this->table->set_heading('id', 'skill', 'created on','status');
	echo $this->table->generate($data['skill']);
	}

	}
	public function selectable_skills()
	{
	$data['skill']=$this->account_model->retrieve_skill();
	$this->load->view('skills/selectable_skill',$data);
	}

	public function show_skills()
	{
	$data['skill']=$this->account_model->retrieve_skill();
	//$this->load->view('skills/display_skills',$data);
	$this->load->view('skills/show_skill',$data);

	}
	public function edit_skills($id)	{
	$data['skill']=$this->account_model->get_skills($id);
	$this->load->view('skills/edit_skill',$data);

	//$id=$this->input->post('id');	

	//$this->load->view('skills/display_skills',$data);

	}
	public function update_skill(){
		$id=$this->input->post('id');
		$data=array(
			'skill'=>$this->input->post('skills')
		);

		$this->account_model->update_record($data,$id);
		$this->session->set_flashdata('msg','The data was updates successful');
		echo $this->session->flashdata('msg');
	}
		public function delete($id){
		$results=$this->account_model->delete_record($id);
		//redirect('index.php/admin/Admin_cv_setup/show_skills');
		if ($results=True)
		{   

			$this->session->set_flashdata('msg','The data was deleted successful');
			echo $this->session->flashdata('msg');
			redirect('index.php/admin/Admin_cv_setup/show_skills');
		}

	}
	public function references(){
		$this->load->view('referees/referee');
		$this->form_validation->set_rules('mytext','mytext','required');
		$this->form_validation->set_rules('mobile_number','mobile_number','required');
		$this->form_validation->set_rules('Id_number','Id_number','required|numeric');
		//$condition=$this->input->post('Id_number');
	    //$data['idnum']=$this->account_model->findid($condition);
	    //$result=$data['idnum'];
		if($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			$data=array(
				'reference_name'=>$this->input->post('mytext'),
				'contact_number'=>$this->input->post('mobile_number'),
				'idnum'=>$this->input->post('Id_number')
			);

			echo "success";

			$this->account_model->insert_references($data);
		}

	}

	public function verify_idnumber(){
	;

	if (empty($data['idnum'])) {
	echo "<strong>data is empty.<br></strong>";
	$data['idnum']=Null;
	}else{
	echo "<strong>data is not empty!!!!</strong>";
	$this->load->view('referees/referee',$data);


	}

	}
}
	?>