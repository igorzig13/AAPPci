<?php

class Clientes extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Clientes_model');
        $this->load->helper('url_helper');
    }

    public function listar() {
        $this->load->library('pagination');
        $maximo = 10;
        $inicio = (!$this->uri->segment("3")) ? 0 : $this->uri->segment("3");
        $config['base_url'] = base_url("Clientes/listar");
        $config['total_rows'] = $this->Clientes_model->conta_clientes();
        $config['per_page'] = $maximo;
        $config['first_link'] = 'Primeiro';
        $config['last_link'] = 'Último';
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
        $this->load->view('head');
        $this->load->view('navbar');
        $this->load->view('clientes/clientes_listar', $param);
        $this->load->view('footer');
    }

    public function cadastrar() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome', 'Nome', 'required', array('required' => 'Preencha o campo Nome.'));

        if ($this->form_validation->run() === FALSE) {//erro na validação (ou primeira vez que carregar)
            $this->load->view('head');
            $this->load->view('navbar');
            //$this->load->view('mensagens/erro');
            $this->load->view('clientes/clientes_cadastrar');
            $this->load->view('footer');
        } else {
            $this->load->view('head');
            $this->load->view('navbar');
            if ($this->Clientes_model->cadastrar_cliente()) {//erro na inserção do novo usuario
                $this->load->view('mensagens/sucesso');
            } else {
                $this->load->view('mensagens/erro');
            }
            $this->load->view('clientes/clientes_cadastrar');
            $this->load->view('footer');
        }
    }

    public function editar($id) {
        $this->load->library('form_validation');
        $data['dados_cliente'] = $this->Clientes_model->editar($id);
        $this->load->view('head');
        $this->load->view('navbar');
        $this->load->view('clientes/clientes_editar', $data);
        $this->load->view('footer');
    }

    public function atualizar() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome', 'Nome', 'required', array('required' => 'Preencha o campo Nome.'));

        if ($this->form_validation->run() === FALSE) {//erro na validação (ou primeira vez que carregar)
            $this->load->view('head');
            $this->load->view('navbar');
            //$this->load->view('mensagens/erro');
            $this->load->view('clientes/clientes_cadastrar');
            $this->load->view('footer');
        } else {
            $this->load->view('head');
            $this->load->view('navbar');
            if ($this->Clientes_model->atualizar_cliente()) {//erro na inserção do novo usuario
                $this->load->view('mensagens/sucesso');
            } else {
                $this->load->view('mensagens/erro');
            }
            $this->load->view('clientes/clientes_cadastrar');
            $this->load->view('footer');
        }
    }

    public function buscar() {
        $this->load->view('head');
        $this->load->view('navbar');
        $this->load->view('clientes/clientes_buscar');
        $this->load->view('footer');
    }

    public function consulta_cliente() {
        $acao = $this->input->post('acao');
        $term = $this->input->post('term');

        $rows = $this->Clientes_model->GetAutocomplete($acao, array('keyword' => $term));

        /*
          $json_array = array();
          foreach ($rows as $row) {
          array_push($json_array, $row->nome);
          }
         */
        $json_array = $rows;
        echo json_encode($json_array);
    }

    public function detalhar($id) {
        $data['dados'] = $this->Clientes_model->detalhar($id);
        //$data = $id;
        $this->load->view('head');
        $this->load->view('navbar');
        $this->load->view('clientes/clientes_detalhar', $data);
        $this->load->view('footer');
    }

    public function bonificar($id) {
        $this->Clientes_model->bonificar($id);
        $data['dados'] = $this->Clientes_model->detalhar($id);
        //$data = $id;
        $this->load->view('head');
        $this->load->view('navbar');
        $this->load->view('clientes/clientes_detalhar', $data);
        $this->load->view('footer');
    }

}
