<?php

class Ctest extends CI_Controller
{

    function Ctest()
    {
        parent::__construct();
    }
    function index()
    {
        $this->load->model('mtest');
        $data['query1']=$this->mtest->getData();
        // print_r($data);
        //
        $this->load->view('users',$data);  
    }


}
?>




