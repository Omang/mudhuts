<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
	public function login()
	{
		
  		
  		$this->form_validation->set_rules('username', 'Username', 'required');
  		
  		$this->form_validation->set_rules('password', 'Password', 'required');

  		if($this->form_validation->run() === FALSE){
  			//$data['title'] = $data['post']['title'];

            $this->load->view('templates/header');
            $this->load->view('welcome_message');
            $this->load->view('templates/footer');

  		}else{


          $username = $this->input->post('username');
          $check_password = $this->input->post('password');
         $validate = $this->User_model->login($check_password, $username);
                if($validate->num_rows() > 0){
                       $data  = $validate->row_array();
                       $name  = $data['username'];
                       $level = $data['role'];
                        $sesdata = array(
                                         'username'  => $name,
                                         'level'     => $level,
                                         'logged_in' => TRUE
                                         );
                       $this->session->set_userdata($sesdata);
                       $this->session->set_flashdata('login_success', 'you have gain access');
                       redirect('dash/dashboard');
    }else{
        $this->session->set_flashdata('login_failed', 'Invalid details, try again');
            redirect('welcome');
    }
  }
	}
	public function logout(){
    	$this->session->unset_userdata('logged_in');
    	$this->session->unset_userdata('username');
    	$this->session->unset_userdata('level');
    	$this->session->set_flashdata('user_logout', 'You are now logged out');
    	redirect('welcome');


    }
}
