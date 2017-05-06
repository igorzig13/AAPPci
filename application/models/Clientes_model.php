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
        //alterar isso conforme os input do formulário e os atributos que existam na tabela cliente
        $data = array(
          //  'usuario_idusuario' => $_SESSION['id'],
            'nome' => $this->input->post('nome'),
            'cpf' => $this->input->post('cpf'),
            'email' => $this->input->post('email'),
            'data_inicio' => $this->input->post('data'),
            'rua' => $this->input->post('rua'),
            'num_casa' => $this->input->post('numCasa'),
            'bairro' => $this->input->post('bairro'),
            'telefone' => $this->input->post('telefone'),
            'celular' => $this->input->post('celular')
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
    public function editar($id) {
        $this->db->where('id_cliente', $id);
        return $this->db->get('cliente')->result();
    }
  }
?>
