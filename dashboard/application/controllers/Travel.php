<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travel extends CI_Controller {

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
		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('travel/hotels');
		$this->load->view('templates/footer');
	}
	public function hotels()
	{
		$this->data['hotels'] = $this->Travel_model->gethotels();
		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('travel/hotels', $this->data);
		$this->load->view('templates/footer');
	}
	public function createhotel()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('travel/createhotel');
		$this->load->view('templates/footer');
	}
	public function updatehotel(){
       
       if($_FILES["userimage"]['name']=='')
           {
            // Here you can directly redirect to the form page itself with the Error Message
             $this->session->set_flashdata('file_error', 'Something happend. Try again!');
                redirect('culture/hotels');
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
                          redirect('travel/hotels');

                          }
                      else
                          {
                           $data = $this->upload->data(); //This will upload the `image/file` using native
                           }
                           //Passing data to model as the array() parameter
                    $imagelink = $new_name;
                    $hotelid = $this->input->post('hotelid');
                    $title = $this->input->post('title');
                    $body  = $this->input->post('body');
            $datasave = $this->Travel_model->updatehotel($imagelink, $hotelid, $title, $body); //save_employee is the function name in the Model

                  if ($datasave) {
                  	 $this->session->set_flashdata('data_saved_success', 'Data saved successful');
                       redirect('travel/hotels');
                  }else{
                  	 $this->session->set_flashdata('data_error', 'Data not saved. Try again!');
                       redirect('travel/hotels');
                  }

             }

	}
	public function addhotel()
	{
		if($_FILES["userimage"]['name']=='')
           {
            // Here you can directly redirect to the form page itself with the Error Message
             $this->session->set_flashdata('file_error', 'Something happend. Try again!');
                redirect('travel/createhotel');
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
                          redirect('travel/createhotel');

                          }
                      else
                          {
                           $data = $this->upload->data(); //This will upload the `image/file` using native
                           }
                           //Passing data to model as the array() parameter
                    $imagelink = $new_name;
                    $title = $this->input->post('title');
                    $body  = $this->input->post('body');
            $datasave = $this->Travel_model->savehotel($imagelink, $title, $body); //save_employee is the function name in the Model

                  if ($datasave) {
                  	 $this->session->set_flashdata('data_saved_success', 'Data saved successful');
                       redirect('travel/hotels');
                  }else{
                  	 $this->session->set_flashdata('data_error', 'Data not saved. Try again!');
                       redirect('travel/createhotel');
                  }

             }
	}
	public function viewhotel($hotelid)
	{
		if ($hotelid) {
			# code...
		$hotel = $this->Travel_model->viewhotel($hotelid);
		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('travel/viewhotel', $hotel);
		$this->load->view('templates/footer');
	  }
	}
	public function edithotel($hotelid)
	{
		$hotel = $this->Travel_model->viewhotel($hotelid);
		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('travel/edithotel', $hotel);
		$this->load->view('templates/footer');
	}
	public function helpfultips()
	{
		$this->data['tips'] = $this->Travel_model->gettips();
		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('travel/helpfultips', $this->data);
		$this->load->view('templates/footer');
	}
	public function createtip()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('travel/createtip');
		$this->load->view('templates/footer');
	}


    public function updatetip(){


    	if($_FILES["userimage"]['name']=='')
           {
            // Here you can directly redirect to the form page itself with the Error Message
             $this->session->set_flashdata('file_error', 'Something happend. Try again!');
                redirect('travel/helpfultips');
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
                          redirect('travel/helpfultips');

                          }
                      else
                          {
                           $data = $this->upload->data(); //This will upload the `image/file` using native
                           }
                           //Passing data to model as the array() parameter
                    $imagelink = $new_name;
                    $tipid = $this->input->post('tipid');
                    $title = $this->input->post('title');
                    $body  = $this->input->post('body');
            $datasave = $this->Travel_model->updatetip($imagelink, $tipid, $title, $body); //save_employee is the function name in the Model

                  if ($datasave) {
                  	 $this->session->set_flashdata('data_saved_success', 'Data saved successful');
                       redirect('travel/helpfultips');
                  }else{
                  	 $this->session->set_flashdata('data_error', 'Data not saved. Try again!');
                       redirect('travel/helpfultips');
                  }

             }

    }

	public function addtip()
	{
		if($_FILES["userimage"]['name']=='')
           {
            // Here you can directly redirect to the form page itself with the Error Message
             $this->session->set_flashdata('file_error', 'Something happend. Try again!');
                redirect('travel/createtip');
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
                          redirect('travel/createtip');

                          }
                      else
                          {
                           $data = $this->upload->data(); //This will upload the `image/file` using native
                           }
                           //Passing data to model as the array() parameter
                    $imagelink = $new_name;
                    $title = $this->input->post('title');
                    $body  = $this->input->post('body');
            $datasave = $this->Travel_model->savetip($imagelink, $title, $body); //save_employee is the function name in the Model

                  if ($datasave) {
                  	 $this->session->set_flashdata('data_saved_success', 'Data saved successful');
                       redirect('travel/helpfultips');
                  }else{
                  	 $this->session->set_flashdata('data_error', 'Data not saved. Try again!');
                       redirect('travel/createtip');
                  }

             }
	}
	public function viewtip($tipid)
	{
		if ($tipid) {
			# code...
		$tip = $this->Travel_model->viewtip($tipid);
            
        $this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('travel/viewtip', $tip);
		$this->load->view('templates/footer');

		}
		
	}
	public function edittip($tipid)
	{
		$tip = $this->Travel_model->viewtip($tipid);
		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('travel/edittip', $tip);
		$this->load->view('templates/footer');
	}
}
