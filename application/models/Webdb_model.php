<?php 
   /**
   * 
   */
   class Webdb_model extends CI_Model
   {
   	
   	   
          function __construct()
          {
            $this->load->database();
          }

          public function getart($artid){
             $query = $this->db->get_where('art', array('artid' => $artid));
             return $query->row_array();

          }
           public function allarts(){

                      $this->db->order_by("artid", "desc");

                      $this->db->limit(3);

             $query = $this->db->get('art');

         return $query->result_array();
            
          }
           public function pagearts(){

                      $this->db->order_by("artid", "desc");
                      $this->db->limit(10);

             $query = $this->db->get('art');

         return $query->result_array();
            
          }
           public function getfood($foodid){
             $query = $this->db->get_where('food', array('foodid' => $foodid));
             return $query->row_array();
            
          }
           public function allfoods(){

                       $this->db->order_by("foodid", "desc");

                      $this->db->limit(3);

             $query = $this->db->get('food');

         return $query->result_array();
            
          }

          public function pagefoods(){

                      $this->db->order_by("foodid", "desc");

                      $this->db->limit(10);

             $query = $this->db->get('food');

         return $query->result_array();
            
          }
           public function gethotel($hotelid){
             $query = $this->db->get_where('hotel', array('hotelid' => $hotelid));
             return $query->row_array();
            
          }
           public function allhotels(){

                         $this->db->order_by("hotelid", "desc");
                        
                        $this->db->limit(3);
          
               $query = $this->db->get('hotel');

              return $query->result_array();

            
          }
          public function pagehotels(){

                         $this->db->order_by("hotelid", "desc");
                        
                        $this->db->limit(10);
          
               $query = $this->db->get('hotel');

              return $query->result_array();

            
          }
           public function gettip($tipid){

             $query = $this->db->get_where('tip', array('tipid' => $tipid));
             return $query->row_array();
            
          }
           public function alltips(){

                       $this->db->order_by("tipid", "desc");

                      $this->db->limit(3);

             $query = $this->db->get('tip');

         return $query->result_array();
            
          }
          public function pagetips(){

                       $this->db->order_by("tipid", "desc");

                      $this->db->limit(10);

             $query = $this->db->get('tip');

         return $query->result_array();
            
          }

          public function pagetenders(){

                       $this->db->order_by("tenderid", "desc");

                      $this->db->limit(10);

             $query = $this->db->get('tender');

         return $query->result_array();
            
          }

          public function gettender($tenderid){

             $query = $this->db->get_where('tender', array('tenderid' => $tenderid));
             return $query->row_array();
            
          }



    }