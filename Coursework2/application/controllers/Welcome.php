<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    function __construct() {

        // load controller parent
        parent::__construct();   

        // load 'url' helper
        $this->load->helper('url');

        // load 'form' helper
        $this->load->helper('form');

        // load 'session' 
        $this->load->library('session');

        // load 'validation' class
        $this->load->library('form_validation');
        
        //load 'model'
        $this->load->model('file_model');

  }
    
	public function index()
    {   
        $this->load->model('file_model'); // This line will load the Star_model class which will be used
		$rows = $this->file_model->getalldata(); // This line calls the Search method which is inside Star_model
		$data['rows']=$rows; // data object is the object which will be sent to the view file. The view file expects an array as a object.
		$this->load->view('files',$data); // this will load the Display
          
    }

    
      public function login(){
          
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $user_id = $this->file_model->check_user($username, $password);

            if($user_id)
            {
                echo 1 ;
            }else
            {
                echo "error";
            }
      } 
    
	public function save()
	{
		$data = array('success' => false, 'messages' => array());

		$this->load->library('form_validation');
		$this->form_validation->set_rules("username", "Username", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		$this->form_validation->set_rules("password_confirm", "Password Confirm", "trim|required|matches[password]");
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
		if ($this->form_validation->run()) {
			$data['success'] = true;
            
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $this->load->model('file_model');
            $this->file_model->insert_user($username,$password);
		}
		else {
			foreach ($_POST as $key => $value) {
				$data['messages'][$key] = form_error($key);
			}
		}

		echo json_encode($data);
        
        $rows = $this->file_model->getuserdata();
	}
    
    public function upload_file()
	{
        if($this->session->userdata('username')){
        $this->load->model('file_model');
        $a=$this->input->post('title');
        $b=$this->input->post('description');
        $this->file_model->insert_file($a,$b);
        $rows = $this->file_model->getalldata(); 
    
        $data['rows']=$rows; 
        $this->load->view('upload_form',$data);
        }
        else
        {
            echo "error";
        }
    }
    public function upload_comment()
	{
        if($this->session->userdata('username')){
        $this->load->model('File_model');
        
        $data = array(
        $name = $this->input->post('username'),
        $mes = $this->input->post('comment')
        );
        $this->File_model->insert_comment($data);
        }
        else
        {
            echo "error";
        }
        
    }
    function post()
    {
        $this->load->model('file_model','b');
        $this->load->view('post');
    }
    
    function files()
    {
       // $this->load->model('file_model','b');
        $this->load->view('files');
    }
    function displayPost()
    {
        $this->load->view('upload_form');
    }
    function displayRegister()
    {
        $this->load->view('register');
    }

    public function increase()
    {
        if($this->session->userdata('username')){
        $this->load->model('file_model');
        $value=$this->input->get('value');
        $this->file_model->increaseCounter($value);
        $this->index();
        }
        else
        {
            echo "error";
        }
    }
       public function decrease()
    {
           if($this->session->userdata('username')){
        $this->load->model('file_model');
        $value=$this->input->get('value');
        $this->file_model->decreaseCounter($value);
        $this->index();
           }
           else
           {
               echo "error";
           }
    }
        
}