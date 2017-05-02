<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}


	public function index()	{
		$this->load->view('cabeca');
		$this->load->view('nav');
		$this->load->view('principal/pagPrincipal');
		$this->load->view('rodape');

	}

}
