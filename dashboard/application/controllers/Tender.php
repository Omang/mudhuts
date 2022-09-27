<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tender extends CI_Controller {

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
		$this->data['tenders'] = $this->Tender_model->gettenders();
		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('tenders/tenders', $this->data);
		$this->load->view('templates/footer');
	}
	public function createtender()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('tenders/createtender');
		$this->load->view('templates/footer');
	}
	public function updatetender(){

       if($_FILES["userimage"]['name']=='')
           {
            // Here you can directly redirect to the form page itself with the Error Message
             $this->session->set_flashdata('file_error', 'Something happend. Try again!');
                redirect('tender');
        }
         else
             {
               $new_name = time().$_FILES["userimage"]['name']; //This line will be generating random name for images that are uploaded
               $config['upload_path'] = FCPATH ."assets/fileupload/";
               $config['allowed_types'] = 'gif|jpg|png';
               $config['file_name'] = $new_name;
                $this->load->library('upload', $config); //Loads the Uploader Library
                 $this->upload->initialize($config);
                     if ( ! $this->upload->do_upload('userimage')) {
                          
                          $this->session->set_flashdata('file_error', 'Something happend. Try again!');
                          redirect('tender');

                          }
                      else
                          {
                           $data = $this->upload->data(); //This will upload the `image/file` using native
                           }
                           //Passing data to model as the array() parameter
                    $imagelink = $new_name;
                    $tenderid = $this->input->post('tenderid');
                    $title = $this->input->post('title');
                    $body  = $this->input->post('body');
            $datasave = $this->Tender_model->updatetender($imagelink,$tenderid, $title, $body); //save_employee is the function name in the Model

                  if ($datasave) {
                  	 $this->session->set_flashdata('data_saved_success', 'Data saved successful');
                       redirect('tender');
                  }else{
                  	 $this->session->set_flashdata('data_error', 'Data not saved. Try again!');
                       redirect('tender');
                  }

             }

	}
	public function addtender()
	{
		if($_FILES["userimage"]['name']=='')
           {
            // Here you can directly redirect to the form page itself with the Error Message
             $this->session->set_flashdata('file_error', 'Something happend. Try again!');
                redirect('tender/createtender');
        }
         else
             {
               $new_name = time().$_FILES["userimage"]['name']; //This line will be generating random name for images that are uploaded
               $config['upload_path'] = FCPATH ."assets/fileupload/";
               $config['allowed_types'] = 'gif|jpg|png';
               $config['file_name'] = $new_name;
                $this->load->library('upload', $config); //Loads the Uploader Library
                 $this->upload->initialize($config);
                     if ( ! $this->upload->do_upload('userimage')) {
                          
                          $this->session->set_flashdata('file_error', 'Something happend. Try again!');
                          redirect('tender/createtender');

                          }
                      else
                          {
                           $data = $this->upload->data(); //This will upload the `image/file` using native
                           }
                           //Passing data to model as the array() parameter
                    $imagelink = $new_name;
                    $title = $this->input->post('title');
                    $body  = $this->input->post('body');
            $datasave = $this->Tender_model->savetender($imagelink, $title, $body); //save_employee is the function name in the Model

                  if ($datasave) {
                  	 $this->session->set_flashdata('data_saved_success', 'Data saved successful');
                       redirect('tender');
                  }else{
                  	 $this->session->set_flashdata('data_error', 'Data not saved. Try again!');
                       redirect('tender/creattender');
                  }

             }
	}
	public function viewtender($tenderid)
	{
		if ($tenderid) {
			$tender = $this->Tender_model->viewtender($tenderid);

		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('tenders/viewtender', $tender);
		$this->load->view('templates/footer');

		}
		
	}
	public function edittender($tenderid)
	{
		$tender = $this->Tender_model->viewtender($tenderid);
		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('tenders/edittender', $tender);
		$this->load->view('templates/footer');
	}
}
