<?php 
   /**
   * 
   */
   class Tender_model extends CI_Model
   {
   	
   	   
          function __construct()
          {
            $this->load->database();
          }

          public function savetender($imagelink, $title, $body){
            //$username = $this->input->post('username');
           $data = array(
               'tenderlink' => $imagelink,
               'subtitle' => $title,
               'tenderbody' => $body
            );

             $this->db->insert('tender', $data);
             $insert_id = $this->db->insert_id();

               return  $insert_id;
            
          }

          public function updatetender($tenderlink, $tenderid, $title, $body){
            $data = array('tenderlink' => $tenderlink,
                          'subtitle' => $title ,
                          'tenderbody' => $body);
            $this->db->where('tenderid', $tenderid);
            $this->db->update('tender', $data);

            return true;

          }

          public function gettenders(){

            $query = $this->db->get('tender');

         return $query->result_array();
          }


          public function viewtender($tenderid){

            $query = $this->db->get_where('tender', array('tenderid' => $tenderid));
             return $query->row_array();
          }


   }
?>