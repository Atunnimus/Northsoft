<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$data['header']['title'] = ("Northsoft");

		$this->load->view('header', $data['header']);
		$this->load->view('main');
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */