<?php

    class Mtest extends CI_Model{

        function Mtest()
        {
            parent::__construct();
        
        }

        function getData()
        {
            $this->load->database();
            $query=$this->db->get('users',2);
            return $query->result();    
        }


    
    }
?>

