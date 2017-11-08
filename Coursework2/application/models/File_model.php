<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class File_model extends CI_Model {
    
    public function __construct(){
        parent :: __construct();
        $this->load->database();
    }
       function getuserdata()
    {
        $query = $this->db->get('users');
        return $query->result();
    }
        function getalldata()
    {
        $query = $this->db->get('file');
        return $query->result();
    }
    
     public function check_user($username, $password)
     {
         $this->db->where('username', $username);
         $this->db->where('password', $password);
         $query = $this->db->get('users');
         
          if($query->num_rows() > 0){
        $data = array(
            'username' => $username,
            'is_logged_in' => true
        );
        $this->session->set_userdata($data);
        return "1";
    }else{
        echo false;
    } 
     }
    
    public function insert_user($username, $password)
    {
        $data = array('username' => $username, 'password' => $password);
        $this->db->insert('users',$data);

    }
    
    public function insert_file($title, $description)
    {
        $data = array('title' => $title, 'description' => $description);
        $this->db->insert('file', $data);
        redirect("https://w1483448.users.ecs.westminster.ac.uk/Coursework1/index.php/welcome/files");
    }
        function getallcomment()
    {
        $queryCom = $this->db->get('comments');
        return $queryCom->result();
    }
    public function insert_comment($data)
    {
        //$data = array('username' => $username, 'comment' => $comment);
        //$this->db->insert('comments', $dataCom);
        
        $this->db->insert("comments",$data);
        redirect("https://w1483448.users.ecs.westminster.ac.uk/Coursework1/index.php/welcome/post");
    }
    public function increaseCounter($id)
    {
        $this->db->set('vote', 'vote+1', FALSE);
        $this->db->where('id', $id);
        $this->db->update('file');
        redirect("https://w1483448.users.ecs.westminster.ac.uk/Coursework1/index.php/welcome/files");
    }
      public function decreaseCounter($id)
    {
        $this->db->set('vote', 'vote-1', FALSE);
        $this->db->where('id', $id);
        $this->db->update('file');

        redirect("https://w1483448.users.ecs.westminster.ac.uk/Coursework1/index.php/welcome/files");
    }
    
}
?>