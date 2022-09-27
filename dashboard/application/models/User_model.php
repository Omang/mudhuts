<?php 
   /**
   * 
   */
   class User_model extends CI_Model
   {
   	
   	   
          function __construct()
          {
            $this->load->database();
          }

          public function login($check_password, $username){
            //$username = $this->input->post('username');
            $this->db->where('username', $username);
            $this->db->where('password', $check_password);

            $result = $this->db->get('users',1);
            
             return $result;
            
          }


   }
?>