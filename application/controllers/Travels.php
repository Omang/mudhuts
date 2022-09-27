<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travels extends CI_Controller {

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
	public function hotels()
	{  
		$this->data['hotels'] = $this->Webdb_model->pagehotels();
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('travel/hotels', $this->data);
		$this->load->view('templates/footer');
	}

	public function hotel($hotelid)
	{
		if ($hotelid) {
			# code...
        $hotel = $this->Webdb_model->gethotel($hotelid);
	    $this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('travel/hotel', $hotel);
		$this->load->view('templates/footer');
		}
		
	}
	public function tips()
	{
		$this->data['tips'] = $this->Webdb_model->pagetips();
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('travel/tips', $this->data);
		$this->load->view('templates/footer');
	}
	public function tip($tipid)
	{
		if ($tipid) {
			# code...
        $tip = $this->Webdb_model->gettip($tipid);
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('travel/tip', $tip);
		$this->load->view('templates/footer');
	  }
	}
}
