<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Página Inicial</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/materialize.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="<?php echo base_url('assets/jquery/jquery-3.1.1.js') ?>"</script>
  <script src="<?php echo base_url('assets/jquery/jquery-3.1.1.min.js') ?>"></script>

</head>
<body class="grey lighten-4">
  <div class="navbar-fixed">
    <nav class="teal darken-2" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="" class="brand-logo">AAPP</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#">Perfil</a></li>
          <li><a href="index.php">Sair</a></li>
        </ul>
        <ul id="nav-mobile" class="side-nav">
          <li><a href="#">Perfil</a></li>
          <li><a href="">Sair</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>
  </div>
  <div class="container">
    <br>
    <div class="valign-wrapper">
      Página Inicial
    </div>
    <div class="divider"></div>
    <div class="row">
      <div class="col l6 s12">
        <div class="icon-block">
          <h2 class="center teal-text"><i class="material-icons">group</i></h2>
          <h5 class="center">Clientes</h5>
          <div class="card horizontal teal lighten-5">
            <div class="card-image">
              <img src="<?php echo base_url('assets/images/client_add.png') ?>">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <span class="card-title">Novo Cliente</span><br>
                Preencha o formulário de cadastro para adicionar um cliente.
              </div>
              <div class="card-action">
                <a class=" blue-text zLink right" href="#modalCliente">Formulário de cadastro</a>
              </div>
            </div>
          </div>
          <div class="card horizontal teal lighten-5">
            <div class="card-image">
              <img src="<?php echo base_url('assets/images/client_list.png') ?>">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <span class="card-title">Lista de Clientes</span><br>
                Clique para conferir a relação completa de clientes.
              </div>
              <div class="card-action">
                <a class=" blue-text zLink right" href="listaClientes.php">Ver clientes</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col l6 s12">
        <div class="icon-block">
          <h2 class="center teal-text"><i class="material-icons">attach_money</i></h2>
          <h5 class="center">Pagamentos</h5>
          <div class="card horizontal teal lighten-5">
            <div class="card-image">
              <img src="<?php echo base_url('assets/images/novo_pagamento.png') ?>">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <span class="card-title">Registrar pagamento</span><br>
                Para registrar um novo pagamento selecione o cliente e informe o mês.
              </div>
              <div class="card-action">
                <a class=" blue-text zLink right" href="#modalPagamento">Novo pagamento</a>
              </div>
            </div>
          </div>
          <div class="card horizontal teal lighten-5">
            <div class="card-image">
              <img src="<?php echo base_url('assets/images/historico.png') ?>">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <span class="card-title">Histórico</span><br>
                Clique para consultar o histórico completo de pagamentos.
              </div>
              <div class="card-action">
                <a href="pagamentos.php" class="blue-text zLink right">Ver histórico</a>
              </div>
            </div>
          </div>

        </div>
      </div>

      <br><br>
    </div>
  </div>

  <div class="section"></div>

  <footer class="page-footer blue-grey">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">TCC - Samuel e Igor</h5>
          <p class="grey-text text-lighten-4">Um site para controle de cadastro e pagamento de clientes de uma Associação de Água Potável de Poços. </p>

        </div>
        <div class="col l3 s6">
          <h5 class="white-text">Samuel</h5>
          <ul>
            <li><a class="white-text" href="#!">Facebook</a></li>
            <li><a class="white-text" href="#!">Instagram</a></li>
            <li><a class="white-text" href="#!">Snapchat</a></li>
          </ul>
        </div>
        <div class="col l3 s6">
          <h5 class="white-text">Igor</h5>
          <ul>
            <li><a class="white-text" href="#!">Facebook</a></li>
            <li><a class="white-text" href="#!">Instagram</a></li>
            <li><a class="white-text" href="#!">Snapchat</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <a class="orange-text text-lighten-3" href="http://portal.ifrn.edu.br/campus/paudosferros">IFRN Campus Pau dos Ferros</a>
      </div>
    </div>
  </footer>
  <!--  MODALS -->
  <div id="modalCliente" class="modal modal-fixed-footer">
    <div class="modal-content">
      <div class="center">
        <h3 class="light">Novo cliente</h3>
        <p>Preencha o formulário:</p>
      </div>
      <form action="./forms/cliente.php" method="post" id="cadCliente">
        <div class="row">
          <div class="input-field col s6">
            <input type="text" class="validate" id="nomeCliente" name="nome" required>
            <label for="nomeCliente">Nome do cliente (*)</label>
          </div>
          <div class="input-field col s6">
            <input type="text" class="validate" id="cpfCliente" name="cpf">
            <label for="cpfCliente">CPF</label>
          </div>
          <div class="input-field col s6">
            <input type="email" class="validate" id="emailCliente" name="email">
            <label for="emailCliente" data-error="Digite um e-mail válido!">E-mail</label>
          </div>
          <div class="input-field col s6">
            <input type="text" class="datepicker" id="dataCliente" name="data">
            <label for="dataCliente">Data inicial (*)</label>
          </div>
          <div class="input-field col s6">
            <input type="text" class="validate" id="ruaCliente" name="rua" required>
            <label for="ruaCliente">Rua (*)</label>
          </div>
          <div class="input-field col s6">
            <input type="text" class="validate" id="casaCliente" name="numCasa">
            <label for="casaCliente">Num. da casa</label>
          </div>
          <div class="input-field col s6">
            <input type="text" class="validate" id="bairroCliente" name="bairro">
            <label for="bairroCliente">Bairro</label>
          </div>
          <div class="input-field col s6">
            <input type="text" class="validate" id="telCliente" name="telefone" required>
            <label for="telCliente">Telefone (*)</label>
          </div>
          <div class="input-field col s6">
            <input type="text" class="validate" id="celCliente" name="celular">
            <label for="celCliente">Celular</label>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="modal-action modal-close waves-effect waves-light grey btn left" type="reset">Cancelar</button>
        <button type="submit" class="btn waves-effect waves-light right">Concluir</button>
      </div>
    </form>
  </div>

  <div id="modalPagamento" class="modal modal-fixed-footer">
    <div class="modal-content">
      <div class="center">
        <h3 class="light">Registrar pagamento</h3>
        <p>Procurar cliente:</p>
      </div>
      <form action="./forms/novoPag.php" method="post" id="cadCliente">
        <div class="row">
          <div class="input-field col s6">
            <div id="project-label">Digite um nome</div>
            <input id="nome">
            <input type="hidden" id="nome-h">
            <p id="id_cliente"></p>
          </div>
          <div class="input-field col s6">
            <select name="mes_ref" required="Escolha um mês!">
              <option value="" disabled selected>Referente ao mês...</option>
              <option value="1">Janeiro</option>
              <option value="2">Fevereiro</option>
              <option value="3">Março</option>
              <option value="4">Abril</option>
              <option value="5">Maio</option>
              <option value="6">Junho</option>
              <option value="7">Julho</option>
              <option value="8">Agosto</option>
              <option value="9">Setembro</option>
              <option value="10">Outubro</option>
              <option value="11">Novembro</option>
              <option value="12">Dezembro</option>
            </select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="modal-action modal-close waves-effect waves-light grey btn left" type="reset">Cancelar</button>
        <button type="submit" class="btn waves-effect waves-light right">Concluir</button>
      </div>
    </form>
  </div>

  <!--  Scripts-->
  <script type='text/javascript' src="<?php echo base_url(); ?>jquery/jquery-3.1.1.min.js"></script>
  <script type='text/javascript' src="<?php echo base_url(); ?>js/materialize.js"></script>
  <script type='text/javascript' src="<?php echo base_url(); ?>js/jquery.mask.min.js"></script>
  <script type='text/javascript' src="<?php echo base_url(); ?>js/init.js"></script>


</body>
</html>
