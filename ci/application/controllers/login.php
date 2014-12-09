<?php

class Login extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->helper('form');

    }

    public function user()
    {
           
        $this->load->helper('form');
        $this->load->library('form_validation');
           
       // $data['title'] = 'Create a news item';
        $username = $this->input->post('username');       
     //   $this->form_validation->set_rules('username', 'username', 'required');
      //  $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('username','Username','required|min_length[3]|max_length[10]|is_unique[login.username]');
        $this->form_validation->set_rules('password','Password','required');   
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header');  
            $this->load->view('login/user');
            
            $this->load->view('templates/footer');
                   
         }
         else
         {
             
      //       $result = $this->login_model->check($username);
            // echo "$result";
        //     if($result == 1)
          //   { 
            $this->login_model->register();
            $this->load->view('login/success');
           //  } 
           //  else
            // {
            //   echo "用户已存在";
            // }
         }
    }
    public function userlogin()
    {

        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required|callback_password_check');
       
        $username = $this->input->post('username');
        $password = $this->input->post('password');
      
        // echo $username;
       // echo "<br />";
  
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('login/userlogin');
        
            $this->load->view('templates/footer');
        } 
        else 
        {   
         //   $data = $this->login_model->login($username);
       //     if($data['password'] == $password) 
         //    {
                $this->load->view('login/suc');
           //  }   
           //  else
           //  {
             //    $this->load->view('login/fail');              
           
            // }
            
        }        
    }
    public function _password_check($password)
    {
        $username = $this->input->post('username');
        $data = $this->login_model->login($username);

        if($data['password'] == $password)
        {
            return true;
        }
        else 
        {
            return false;
        }
    }
}    
        
        
        
          
        
        
            
   
        
        
   

