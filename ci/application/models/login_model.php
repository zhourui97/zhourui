<?php

class Login_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function register()
    {
        //$this->load->helper('url');
      //  $username = $this->input->post('username');
        $data=array(
            'username'=>$this->input->post('username'),
            'password'=>$this->input->post('password')
          
        );
       // $query=$this->db->get_where('login',array('username'=>$username));
        
            return $this->db->insert('login',$data);
            
    }
    public function check($username)
    {
       // $username = $this->input->post('username');
        $query=$this->db->get_where('login',array('username'=>$username));
       // echo $query;
        if($query->row_array() != NULL)
        {
            return 0;
        }
        else 
        {
            return 1;
        }
    }
    public function login($username)
    {
        $query=$this->db->get_where('login',array('username'=>$username));
        return $query->row_array();       
    }
}
?>
