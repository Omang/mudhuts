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
	public function dances()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('culture/dances');
		$this->load->view('templates/footer');
	}

	public function dance()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('culture/dance');
		$this->load->view('templates/footer');
	}
	public function foods()
	{
		$this->data['foods'] = $this->Webdb_model->pagefoods();
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('culture/foods', $this->data);
		$this->load->view('templates/footer');
	}
	public function food($foodid)
	{
		if ($foodid) {
			# code...
		$food = $this->Webdb_model->getfood($foodid);
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('culture/food', $food);
		$this->load->view('templates/footer');
		}
		
	}
	public function arts()
	{
		$this->data['arts'] = $this->Webdb_model->pagearts();
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('culture/arts', $this->data);
		$this->load->view('templates/footer');
	}
	public function art($artid)
	{
		if ($artid) {
			# code...
		$art = $this->Webdb_model->getart($artid);

		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('culture/art', $art);
		$this->load->view('templates/footer');
		}
		
	}
}
