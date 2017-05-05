<?php

class Clientes_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function listar_clientes($maximo, $inicio) {
        $query = $this->db->get('cliente', $maximo, $inicio);
        return $query->result_array();
    }

    public function conta_clientes() {
        return $this->db->count_all_results('cliente');
    }

    public function cadastrar_cliente() {
        $this->load->helper('url');
        $this->load->library('session');
        $data = array(
            'usuario_idusuario' => $_SESSION['id'],
            'nome' => $this->input->post('nome'),
            'cpf' => $this->input->post('cpf'),
            'nascimento' => $this->input->post('nascimento'),
            'rua' => $this->input->post('rua'),
            'numero' => $this->input->post('numero'),
            'bairro' => $this->input->post('bairro'),
            'estado' => $this->input->post('estado'),
            'cep' => $this->input->post('cep'),
            'email' => $this->input->post('email'),
            'telefone' => $this->input->post('telefone'),
            'sexo' => $this->input->post('sexo'),
            'observacao' => $this->input->post('observacao')
        );


        if ($this->db->insert('cliente', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function clientes_cadastrados() {
        $query = $this->db->count_all_results('cliente');
        return $query;
    }
  }
?>
