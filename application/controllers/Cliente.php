<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url_helper');
	}

	public function editar()	{
		$this->load->view('cabeca');
		$this->load->view('nav');
		$this->load->view('clientes/editaCliente');
		$this->load->view('rodape');

	}
	public function listar()	{
		$this->load->view('cabeca');
		$this->load->view('nav');
		$this->load->view('clientes/listaClientes');
		$this->load->view('rodape');
	}

}
