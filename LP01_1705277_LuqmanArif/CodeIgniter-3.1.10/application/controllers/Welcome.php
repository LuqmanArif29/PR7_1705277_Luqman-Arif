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


		function __construct(){
	 parent::__construct();
	 $this->load->model('ModelCv');
	 $this->load->helper('url');
	}



	public function index()
	{
		$data['lokomotif'] = $this->ModelCv->getTransaksi();
		$this->load->view('indexKasir', $data);
	}

	public function index1()
	{
		$data['kursi'] = $this->ModelCv->getTransaksi1();
		$this->load->view('indexKasir1', $data);
	}

	public function index2()
	{
		$data['lokomotif'] = $this->ModelCv->getTransaksi2();
		$this->load->view('indexKasir2', $data);
	}

	public function index4()
	{

	}





}
