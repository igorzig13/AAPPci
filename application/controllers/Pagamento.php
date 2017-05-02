<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagamento extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url_helper');
	}

	public function index()	{
		$this->load->view('cabeca');
		$this->load->view('nav');
		$this->load->view('pagamento/pagamentos');
		$this->load->view('rodape');
	}

	

}
