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

    public function atualizar_cliente() {
        $this->load->helper('url');
        $this->load->library('session');
        $data = array(
            'nome' => $this->input->post('nome'),
            'cpf' => $this->input->post('cpf'),
            'email' => $this->input->post('email'),
            'rua' => $this->input->post('rua'),
            'num_casa' => $this->input->post('numCasa'),
            'bairro' => $this->input->post('bairro'),
            'telefone' => $this->input->post('telefone'),
            'celular' => $this->input->post('celular')
        );

        $this->db->where('id_cliente', $this->input->post('id_cliente'));
        if ($this->db->update('cliente', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function GetAutocomplete($acao, $options = array()) {
        if ($acao == "autocomplete") {
            $this->db->select('nome, cpf');
            $this->db->like('nome', $options['keyword'], 'both');
            $query = $this->db->get('cliente');
            return $query->result();
        } else if ($acao == "consulta") {

            $retorno = new StdClass();

            $sql = 'SELECT COUNT(idvenda) as contador FROM venda WHERE valor >=7.50 AND cliente_idcliente = ' . $options['keyword'];
            $query = $this->db->query($sql);
            $row = $query->row();
            $retorno->{"contador"} = $row->contador;

            $sql = 'SELECT COUNT(idvenda) as total FROM venda WHERE cliente_idcliente = ' . $options['keyword'];
            $query = $this->db->query($sql);
            $row = $query->row();
            $retorno->{"total"} = $row->total;

            $sql = 'SELECT SUM(valor) as valor FROM venda WHERE cliente_idcliente = ' . $options['keyword'];
            $query = $this->db->query($sql);
            $row = $query->row();
            $retorno->{"valor"} = $row->valor;

            $sql = 'SELECT MAX(valor) as maior FROM venda WHERE cliente_idcliente = ' . $options['keyword'];
            $query = $this->db->query($sql);
            $row = $query->row();
            $retorno->{"maior"} = $row->maior;

            $sql = 'SELECT COUNT(iddesconto) as desconto FROM desconto WHERE cliente_idcliente = ' . $options['keyword'];
            $query = $this->db->query($sql);
            $row = $query->row();
            $retorno->{"desconto"} = $row->desconto;

            $r[] = $retorno;

            return $r;
        }
    }

}

?>
