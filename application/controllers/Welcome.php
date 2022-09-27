<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->data['tips'] = $this->Webdb_model->alltips();
		$this->data['arts'] = $this->Webdb_model->allarts();
		$this->data['foods'] = $this->Webdb_model->allfoods();
		$this->data['hotels'] = $this->Webdb_model->allhotels();
		//$this->data['tenders'] = $this->Webdb_model->alltenders();
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('welcome_message', $this->data);
		$this->load->view('templates/footer');
	}
	public function mailsubmit(){

        //set validation rules
        
        $this->form_validation->set_rules('email', 'Emaid ID', 'trim|required|valid_email');
       
        
        //run validation check
        if ($this->form_validation->run() == FALSE)
        {   //validation fails
            echo validation_errors();
        }
        else
        {
            //get the form data
           
            $from_email = $this->input->post('email');
            
            
            //set to_email id to which you want to receive mails
            $to_email = 'themudhuts@themudhuts.co.bw';
            
            //configure email settings
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'mail.themudhuts.co.bw'; // change this to yours
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'themudhuts@themudhuts.co.bw'; // change this to yours
            $config['smtp_pass'] = 'Omang@1234'; // change this to yours
            $config['mailtype'] = 'html';
            $config['smtp_crypto'] = 'ssl';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['newline'] = "\r\n"; //use double quotes
            $this->email->initialize($config);
            
            //send mail
            $this->email->from($from_email);
            $this->email->to($to_email);
            $this->email->subject("I want to Subscribe");
            $this->email->message($from_email);
            if ($this->email->send())
            {
                // mail sent
                echo "Your mail was sent succefully";
            }
            else
            {
                //error
                echo "Error happend, please try again";
            }
        }

	}
}
