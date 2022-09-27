<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Culture extends CI_Controller {

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
		$this->load->view('culture/traditional');
		$this->load->view('templates/footer');
	}
	public function dances()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('culture/traditional');
		$this->load->view('templates/footer');
	}
	public function createdance()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('culture/createdance');
		$this->load->view('templates/footer');
	}
	public function viewdance()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('welcome_message');
		$this->load->view('templates/footer');
	}
	public function editdance()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('welcome_message');
		$this->load->view('templates/footer');
	}
	public function adddance()
	{
	if($_FILES["userimage"]['name']=='')
           {
            // Here you can directly redirect to the form page itself with the Error Message
             $this->session->set_flashdata('file_error', 'Something happend. Try again!');
                redirect('culture/createfood');
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
                          redirect('culture/createfood');

                          }
                      else
                          {
                           $data = $this->upload->data(); //This will upload the `image/file` using native
                           }
                           //Passing data to model as the array() parameter
                    $imagelink = $new_name;
                    $title = $this->input->post('title');
                    $body  = $this->input->post('body');
            $datasave = $this->Culture_model->savedance($imagelink, $title, $body); //save_employee is the function name in the Model

                  if ($datasave) {
                  	 $this->session->set_flashdata('data_saved_success', 'Data saved successful');
                       redirect('culture/foods');
                  }else{
                  	 $this->session->set_flashdata('data_error', 'Data not saved. Try again!');
                       redirect('culture/createfood');
                  }

             }
	}
	public function deletedance()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('welcome_message');
		$this->load->view('templates/footer');
	}

	public function foods()
	{
		$this->data['foods'] = $this->Culture_model->getfoods();
		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('culture/foods', $this->data);
		$this->load->view('templates/footer');
	}
	public function createfood()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('culture/createfood');
		$this->load->view('templates/footer');
	}
	public function addfood()
	{
		if($_FILES["userimage"]['name']=='')
           {
            // Here you can directly redirect to the form page itself with the Error Message
             $this->session->set_flashdata('file_error', 'Something happend. Try again!');
                redirect('culture/createfood');
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
                          redirect('culture/createfood');

                          }
                      else
                          {
                           $data = $this->upload->data(); //This will upload the `image/file` using native
                           }
                           //Passing data to model as the array() parameter
                    $imagelink = $new_name;
                    $title = $this->input->post('title');
                    $body  = $this->input->post('body');
            $datasave = $this->Culture_model->savefood($imagelink, $title, $body); //save_employee is the function name in the Model

                  if ($datasave) {
                  	 $this->session->set_flashdata('data_saved_success', 'Data saved successful');
                       redirect('culture/foods');
                  }else{
                  	 $this->session->set_flashdata('data_error', 'Data not saved. Try again!');
                       redirect('culture/createfood');
                  }

             }

      	}
	public function viewfood($foodid)
	{
		if ($foodid) {
			# code...
			$food = $this->Culture_model->viewfood($foodid);
		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('culture/viewfood', $food);
		$this->load->view('templates/footer');
			}
	}
	public function editfood($foodid)
	{
		$food = $this->Culture_model->viewfood($foodid);
		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('culture/editfood', $food);
		$this->load->view('templates/footer');
	}

	public function updatefood(){

		if($_FILES["userimage"]['name']=='')
           {
            // Here you can directly redirect to the form page itself with the Error Message
             $this->session->set_flashdata('file_error', 'Something happend. Try again!');
                redirect('culture/foods');
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
                          
                          $this->session->set_flashdata('file_error', 'Something happend. Try again later!');
                          redirect('culture/foods');

                          }
                      else
                          {
                           $data = $this->upload->data(); //This will upload the `image/file` using native
                           }
                           //Passing data to model as the array() parameter
                    $imagelink = $new_name;
                    $foodid = $this->input->post('foodid');
                    $title = $this->input->post('title');
                    $body  = $this->input->post('body');
            $datasave = $this->Culture_model->updatefood($imagelink, $foodid, $title, $body); //save_employee is the function name in the Model

                  if ($datasave) {
                  	 $this->session->set_flashdata('data_saved_success', 'Data saved successful');
                       redirect('culture/foods');
                  }else{
                  	 $this->session->set_flashdata('data_error', 'Data not saved. Try again Later!');
                       redirect('culture/foods');
                  }

             }

	}

	public function arts()
	{
		$this->data['arts'] = $this->Culture_model->getarts();
		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('culture/arts', $this->data);
		$this->load->view('templates/footer');
	}
	public function createart()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('culture/createart');
		$this->load->view('templates/footer');
	}

	public function updateart(){

       if($_FILES["userimage"]['name']=='')
           {
            // Here you can directly redirect to the form page itself with the Error Message
             $this->session->set_flashdata('file_error', 'Something happend. Try again!');
                redirect('culture/createart');
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
                          redirect('culture/arts');

                          }
                      else
                          {
                           $data = $this->upload->data(); //This will upload the `image/file` using native
                           }
                           //Passing data to model as the array() parameter
                    $imagelink = $new_name;
                    $artid = $this->input->post('artid');
                    $title = $this->input->post('title');
                    $body  = $this->input->post('body');
            $datasave = $this->Culture_model->updateart($imagelink, $artid, $title, $body); //save_employee is the function name in the Model

                  if ($datasave) {
                  	 $this->session->set_flashdata('data_saved_success', 'Data saved successful');
                       redirect('culture/arts');
                  }else{
                  	 $this->session->set_flashdata('data_error', 'Data not saved. Try again!');
                       redirect('culture/arts');
                  }

             }

	}
	public function addart()
	{
		if($_FILES["userimage"]['name']=='')
           {
            // Here you can directly redirect to the form page itself with the Error Message
             $this->session->set_flashdata('file_error', 'Something happend. Try again!');
                redirect('culture/createart');
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
                          redirect('culture/createart');

                          }
                      else
                          {
                           $data = $this->upload->data(); //This will upload the `image/file` using native
                           }
                           //Passing data to model as the array() parameter
                    $imagelink = $new_name;
                    $title = $this->input->post('title');
                    $body  = $this->input->post('body');
            $datasave = $this->Culture_model->saveart($imagelink, $title, $body); //save_employee is the function name in the Model

                  if ($datasave) {
                  	 $this->session->set_flashdata('data_saved_success', 'Data saved successful');
                       redirect('culture/arts');
                  }else{
                  	 $this->session->set_flashdata('data_error', 'Data not saved. Try again!');
                       redirect('culture/createart');
                  }

             }
	}
	public function viewart($artid)
	{
		if ($artid) {
			# code...
			$art = $this->Culture_model->viewart($artid);

		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('culture/viewart', $art);
		$this->load->view('templates/footer');
		}
		
	}
	public function editart($artid)
	{
		$art = $this->Culture_model->viewart($artid);
		$this->load->view('templates/header');
		$this->load->view('templates/slider');
		$this->load->view('culture/editart', $art);
		$this->load->view('templates/footer');
	}

  public function deleteart($artid)
  {
    if($artid){
       $deteled = $this->Culture_model->artdelete($artid);
       if ($artid) {

        $this->session->set_flashdata('art_deleted', 'Art post was deleted. Thanks');
             redirect('culture/arts');
          
       }
      }
  }
}
