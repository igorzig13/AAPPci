<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Editar Informações</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/materialize.css') ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url('assets/css/style.css') ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="grey lighten-4">
  <div class="navbar-fixed">
    <nav class="teal darken-2" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="pagPrincipal.php" class="brand-logo">AAPP</a>
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
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br>
      <div class="valign-wrapper">
        <a href="pagPrincipal.php">Página inicial</a> <i class="material-icons">arrow_forward</i> <a href="listaClientes.php">Lista de Clientes</a><i class="material-icons">arrow_forward</i> Editar Informações
      </div>
      <div class="divider"></div>
      <div class="row"><br>
        <h4 class="header center">Editar Informações do Cliente</h4>
        <form action="forms\updateCliente.php" method="post">
          <div class="col s6">
            <p>Especifique o ID do cliente que será atualizado:</p>
          </div>
          <div class="input-field col s6">
            <input type="text" name="id_cliente" class="validate" id="id_cliente">
            <label for="id_cliente">ID do cliente</label>
          </div>
          <div class="divider col s12"></div>
          <div class="col s12">
            <p>Novas informações:</p>
          </div>
          <div class="input-field col s6">
            <input type="text" name="nome" id="nome" class="validate">
            <label for="nome">Nome</label>
          </div>
          <div class="input-field col s6">
            <input type="text" name="cpf" id="cpf" class="validate">
            <label for="cpfCliente">CPF</label>
          </div>
          <div class="input-field col s6">
            <input type="email" name="email" id="email" class="validate">
            <label for="email">E-mail</label>
          </div>
          <div class="input-field col s6">
            <input type="text" name="telefone" id="telefone" class="validate">
            <label for="telefone">Telefone</label>
          </div>
          <div class="input-field col s6">
            <input type="text" name="celular" id="celular" class="validate">
            <label for="celular">Celular</label>
          </div>
          <div class="input-field col s6">
            <input type="text" name="rua" id="rua" class="validate">
            <label for="rua">Rua</label>
          </div>
          <div class="input-field col s6">
            <input type="text" name="numCasa" id="numCasa" class="validate">
            <label for="numCasa">Número da casa</label>
          </div>
          <div class="input-field col s6">
            <input type="text" name="bairro" id="bairro" class="validate">
            <label for="bairro">Bairro</label>
          </div>
          <div class="input-field col s6">
            <button type="submit" class="btn green waves-effect waves-light">Salvar</button>
          </div>
        </form>
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
          <p class="grey-text text-lighten-4">Um site para controle de cadastro e pagamento de clientes de uma associação de água de poços potáveis. </p>


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


  <!--  Scripts-->
  <script src="<?php echo base_url('assets/jquery/jquery-3.1.1.js') ?>"</script>
  <script src="<?php echo base_url('assets/jquery/jquery-3.1.1.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/materialize.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.mask.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/init.js') ?>"></script>


</body>
</html>
