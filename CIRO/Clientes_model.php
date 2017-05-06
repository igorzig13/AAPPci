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

    public function editar($id) {
        $this->db->where('idcliente', $id);
        return $this->db->get('cliente')->result();
    }

    public function atualizar_cliente() {
        $this->load->helper('url');
        $this->load->library('session');
        $data = array(
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

        $this->db->where('idcliente', $this->input->post('idcliente'));
        if ($this->db->update('cliente', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function GetAutocomplete($acao, $options = array()) {
        if ($acao == "autocomplete") {
            $this->db->select('idcliente, nome, cpf');
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

    public function detalhar($id) {
        $retorno = new StdClass();

        $sql = 'SELECT nome FROM cliente WHERE idcliente = ' . $id;
        $query = $this->db->query($sql);
        $row = $query->row();
        $retorno->{"nome"} = $row->nome;
        ;

        $sql = 'SELECT COUNT(idvenda) as contador FROM venda WHERE valor >=7.50 AND cliente_idcliente = ' . $id;
        $query = $this->db->query($sql);
        $row = $query->row();
        $retorno->{"acima"} = $row->contador;

        $sql = 'SELECT COUNT(idvenda) as total FROM venda WHERE cliente_idcliente = ' . $id;
        $query = $this->db->query($sql);
        $row = $query->row();
        $retorno->{"total"} = $row->total;

        $sql = 'SELECT SUM(valor) as valor FROM venda WHERE cliente_idcliente = ' . $id;
        $query = $this->db->query($sql);
        $row = $query->row();
        $retorno->{"valor"} = $row->valor;

        $sql = 'SELECT MAX(valor) as maior FROM venda WHERE cliente_idcliente = ' . $id;
        $query = $this->db->query($sql);
        $row = $query->row();
        $retorno->{"maior"} = $row->maior;

        $sql = 'SELECT COUNT(iddesconto) as desconto FROM desconto WHERE cliente_idcliente = ' . $id;
        $query = $this->db->query($sql);
        $row = $query->row();
        $retorno->{"desconto"} = $row->desconto;

        $r[] = $retorno;

        return $retorno;
    }

    public function bonificar($id) {
        $this->load->library('session');
        $data = array(
            'usuario_idusuario' => $_SESSION['id'],
            'cliente_idcliente' => $id
        );
        $this->db->insert('desconto', $data);
    }

}

/*

      $sql = 'SELECT sum(valor) as total FROM venda WHERE valor >=7 AND cliente_idcliente = ' . $options['keyword'];
      $query1 = $this->db->query($sql);
      $row1 = $query1->row();
      $retorno[] = $row1->total;

      $sql = 'SELECT COUNT(idvenda) as conta FROM venda WHERE cliente_idcliente = ' . $options['keyword'];
      $query2 = $this->db->query($sql);
      $row2 = $query2->row();

      array_push($retorno, $row2->conta);
      return $retorno;
     * [{"total":"49.50"},[{"total":"49.50"}]]
     * [{"total":"3"},{"conta":"5"}]
     * 
      [{"idcliente":"7","nome":"Vanessa Maria Franco Alves","cpf":""}]
     * [{"total":"3","conta":"5"}]
     */    