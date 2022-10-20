<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
        $this->load->model("reg_model"); 

	}


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		
		 $this->load->view('home');
	}
	

	public function register_form()
	{
      $this->load->view('register');
	}
	
		public function login_form()  
		{  
			$user = $this->input->post('user');  
			$pass = $this->input->post('pass');  
			if ($user=='german' && $pass=='satvat')   
			{  
				//declaring session  
				$this->session->set_userdata(array('user'=>$user));  
				$this->load->view('dashboard');  
			}  
			else{  
				$data['error'] = 'Your Account is Invalid';  
				$this->load->view('login', $data);  
			}  
		}  
	
	function dashboard_form()
	{
	$this->load->view('dashboard');
	}
public function datatable_form()
{
		
      $result['data']=$this->reg_model->fetchAllData();
	 
      $this->load->view('datatable',$result);
	  function getcountry()
{
	  $country['country'] = $this->reg_model->fetch_country();
	  $this->load->view('datatable/getcountry',$country);
}
  }
  
		public function deletedata($id)
		{
		// $id=$this->input->get('id');
		$response=$this->reg_model->deleterecords($id);
		if($response==true){
			$this->session->set_flashdata('message', 'Data deleted successfully!');
		
			redirect('RegisterController/datatable_form');
		}
		else{
			echo "Error !";
		}
	}
  
	public function savedata()  {
       $this->load->view('register');
	   $config['upload_path']='./uploads/';
	
        //this array is used to get fetch data from the view page.  
        if($this->input->post('btnsubmit')){
         
			$data ['name'] =$this->input->post('name');  
			$data ['photo'] = $this->input->post('photo');
			$data ['email'] = $this->input->post('email');  
			$data ['phone'] = $this->input->post('phone') ;
			$data ['address'] = $this->input->post('address');
			$data['city'] = $this->input->post('city');
			$data ['state'] = $this->input->post('state');
			$response =$this->reg_model->saverecords($data);
			if($response==true){
			echo "inserted successfully";
			}else {
			echo "inserted failed";
			}
		}
	}
	// fetchdata.......................................................................................
	public function fetchDatafromDatabase()
	{
		$resultList = $this->reg_model->fetchAllData('*','person',array());
		
		$result = array();
		$i = 1;
		foreach ($resultList as $key => $value) {
                        // $button = '<a class="btn-sm btn-success text-light" onclick="editFun('.$value['id'].')" href="#"> Edit</a> ';
			            $button = '<a class="btn-sm btn-danger text-light" onclick="deleteFun('.$value['id'].')" href="#"> Delete</a>';

			$result['data'][] = array(
				$i++,
				$value['regfirstName'],
				$value['regprimaryEmail'],
				$value['regcity'],
				$value['regstate'],
				$value['regcountry'],
                $button
			);
		}
		echo json_encode($result);
	}
	// fetchenddata,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,
}

			