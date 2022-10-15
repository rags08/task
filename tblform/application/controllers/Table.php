<?php  
class Table extends CI_Controller 
{
  public function __construct()
  {
    
  /*call CodeIgniter's default Constructor*/
  parent::__construct();

  /*load database libray manually*/
  $this->load->database();

  /*load Model*/
  $this->load->model('Tbl_model');
  }
    /*Display*/
    public function displaydata()
  {
      $result['data']=$this->Tbl_model->display_records();
      $this->load->view('display_records',$result);
  }
  public function deletedata($id)
{
  // $id=$this->input->get('id');
  $response=$this->Tbl_model->deleterecords($id);
  if($response==true){
    $this->session->set_flashdata('message', 'Data deleted successfully!');
   
    redirect('Table/displaydata');
}
  else{
    echo "Error !";
  }
}
	
}
	
?>