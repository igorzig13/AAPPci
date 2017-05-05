<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('Clientes_model');
    }

    public function listar() {
        $this->load->library('pagination');
        $maximo = 10;
        $inicio = (!$this->uri->segment("3")) ? 0 : $this->uri->segment("3");
        $config['base_url'] = base_url("Cliente/listar");
        $config['total_rows'] = $this->Clientes_model->conta_clientes();
        $config['per_page'] = $maximo;
        $config['first_link'] = 'Primeiro';
        $config['last_link'] = '�ltimo';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="teal active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $param["paginacao"] = $this->pagination->create_links();
        $param["clientes"] = $this->Clientes_model->listar_clientes($maximo, $inicio);
        $this->load->view('cabeca');
        $this->load->view('nav');
        $this->load->view('clientes/listaClientes', $param);
        $this->load->view('rodape');
    }

    public function cadastrar() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome', 'Nome', 'required', array('required' => 'Preencha o campo Nome.'));

        if ($this->Clientes_model->cadastrar_cliente()) {//tentar inserir
            $this->load->view('cabeca');
            $this->load->view('nav');
            $this->load->view('clientes/listaClientes', $param);
            $this->load->view('rodape');
        } else {
            $this->load->view('cabeca');
            $this->load->view('nav');
            $this->load->view('principal/pagPrincipal');
            $this->load->view('rodape');
        }
    }
    public function editar($id) {
        $this->load->library('form_validation');
        $data['dados_cliente'] = $this->Clientes_model->editar($id);
        $this->load->view('cabeca');
        $this->load->view('nav');
        $this->load->view('clientes/editaCliente', $data);
        $this->load->view('rodape');
    }
}
