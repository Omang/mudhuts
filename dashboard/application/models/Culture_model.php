<?php 
   /**
   * 
   */
   class Culture_model extends CI_Model
   {
   	
   	   
          function __construct()
          {
            $this->load->database();
          }

          public function savefood($imagelink, $title, $body){
            //$username = $this->input->post('username');
           $data = array(
               'foodlink' => $imagelink,
               'subtitle' => $title,
               'foodbody' => $body
            );

             $this->db->insert('food', $data);
             $insert_id = $this->db->insert_id();

               return  $insert_id;
            
          }

          public function getfoods(){

            $query = $this->db->get('food');

         return $query->result_array();
          }

          public function updatefood($imagelink, $foodid, $title, $body){
            $data = array('foodlink' => $imagelink,
                           'subtitle' => $title,
                           'foodbody' => $body );

            $this->db->where('foodid', $foodid);
            $this->db->update('food', $data);

            return true;
          }

          public function savedance($imagelink, $title, $body){
            //$username = $this->input->post('username');
           $data = array(
               'foodlink' => $imagelink,
               'subtitle' => $title,
               'foodbody' => $body
            );

             $this->db->insert('dance', $data);
             $insert_id = $this->db->insert_id();

               return  $insert_id;
            
          }

          public function getdances(){

            $query = $this->db->get('dance');

         return $query->result_array();
          }

          public function saveart($imagelink, $title, $body){
            //$username = $this->input->post('username');
           $data = array(
               'artlink' => $imagelink,
               'subtitle' => $title,
               'artbody' => $body
            );

             $this->db->insert('art', $data);
             $insert_id = $this->db->insert_id();

               return  $insert_id;
            
          }

          public function getarts(){

            $query = $this->db->get('art');

         return $query->result_array();
          }

          public function viewart($artid){

              $query = $this->db->get_where('art', array('artid' => $artid));
             return $query->row_array();

          }

          public function updateart($artlink, $artid, $title, $body){
            $data = array('artlink' => $artlink,
                          'subtitle' => $title ,
                          'artbody' => $body);
            $this->db->where('artid', $artid);
            $this->db->update('art', $data);

            return true;

          }
          public function artdelete($artid){

           $this->db->where('artid', $artid);
          $this->db->delete('art');

          return true;

          }

          public function viewfood($foodid){

            $query = $this->db->get_where('food', array('foodid' => $foodid));
             return $query->row_array();

          }


   }
?>