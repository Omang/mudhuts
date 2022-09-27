<?php 
   /**
   * 
   */
   class Travel_model extends CI_Model
   {
   	
   	   
          function __construct()
          {
            $this->load->database();
          }

          public function savetip($imagelink, $title, $body){
            //$username = $this->input->post('username');
           $data = array(
               'tiplink' => $imagelink,
               'subtitle' => $title,
               'tipbody' => $body
            );

             $this->db->insert('tip', $data);
             $insert_id = $this->db->insert_id();

               return  $insert_id;
            
          }

          public function updatetip($imagelink, $tipid, $title, $body){
            $data = array('tiplink' => $imagelink,
                          'subtitle' => $title ,
                          'tipbody' => $body );
            $this->db->where('tipid', $tipid);
            $this->db->update('tip', $data);

            return true;

          }

          public function gettips(){

            $query = $this->db->get('tip');

         return $query->result_array();
          }

          public function viewtip($tipid){

            $query = $this->db->get_where('tip', array('tipid' => $tipid));
             return $query->row_array();
          }


          public function savehotel($imagelink, $title, $body){
            //$username = $this->input->post('username');
           $data = array(
               'hotellink' => $imagelink,
               'subtitle' => $title,
               'hotelbody' => $body
            );

             $this->db->insert('hotel', $data);
             $insert_id = $this->db->insert_id();

               return  $insert_id;
            
          }
          public function updatehotel($hotellink, $hotelid, $title, $body){
            $data = array('hotellink' => $hotellink,
                          'subtitle' => $title ,
                          'hotelbody' => $body);
            $this->db->where('hotelid', $hotelid);
            $this->db->update('hotel', $data);

            return true;

          }

          public function gethotels(){

            $query = $this->db->get('hotel');

         return $query->result_array();
          }

          public function viewhotel($hotelid){

            $query = $this->db->get_where('hotel', array('hotelid' => $hotelid));
             return $query->row_array();
          }


   }
?>