<?php
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
$con = mysql_connect("localhost", "root", "") or die ("Sem conexão com o servidor");
$select = mysql_select_db("aaapp") or die("Sem acesso ao DB, Entre em contato com o Administrador, gilson_sales@bytecode.com.br");

// A variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
$result = mysql_query("SELECT * FROM `USUARIO` WHERE `NOME` = '$login' AND `SENHA`= '$senha'");
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login */
if(mysql_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:site.php');
}
else{
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	header('location:pagPrincipal.php');

	}

?>


<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Login</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="blue lighten-5">
  <div class="navbar-fixed">
    <nav class="teal lighten-2" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="" class="brand-logo">AAPP</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#">Login</a></li>
          <li><a href="#cadastrar">Cadastrar-se</a></li>
        </ul>
        <ul id="nav-mobile" class="side-nav">
          <li><a href="#">Login</a></li>
          <li><a href="#">Cadastrar-se</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">Menu</i></a>
      </div>
    </nav>
  </div>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h2 class="header center brown-text text-darken-2">Distribuidora AAPP</h2>
      <div class="row center">
        <h5 class="header light center">Login</h5>
      </div>
      <div class="row center">
        <div class="col s12 l6 push-l3">
          <form action="pagPrincipal.php" method="post">
          <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="username" type="text" class="validate">
            <label for="username">Nome de usuário</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">lock</i>
            <input id="senha" type="password" class="validate">
            <label for="senha">Senha</label>
          </div>
          <div class="center">
              <button class="btn waves-effect teal waves-light light" type="submit">Entrar<i class="material-icons right">send</i></button>
            </form>
          </div>
        </div>
      </div>
      <br><br>
    </div>
    <div class="modal" id="cadastrar">
      <form class="" action="./forms/usuario.php" method="post">
      <div class="modal-content center grey lighten-3">
        <h3 class="light">Cadastrar novo usuário:</h3>
        <div class="row">
          <div class="input-field col s12">
            <input type="text" class="validate" id="cadUsername" name="cadUsername">
            <label for="cadUsername">Nome de usuário</label>
          </div>
          <div class="input-field col s6">
            <input type="text" class="validate" id="cadEmail" name="cadEmail">
            <label for="cadEmail">E-mail</label>
          </div>
          <div class="input-field col s6">
            <input type="text" class="validate" id="verEmail">
            <label for="verEmail">Confirmar e-mail</label>
          </div>
          <div class="input-field col s6">
            <input type="password" class="validate" id="cadSenha" name="cadSenha">
            <label for="cadSenha">Senha</label>
          </div>
          <div class="input-field col s6">
            <input type="password" class="validate" id="verSenha">
            <label for="cadSenha">Repita a senha</label>
          </div>
        </div>
      </div>
      <div class="modal-footer teal lighten-4">
        <button class="modal-action modal-close waves-effect waves-light grey btn left">Cancelar</button>
        <button class="modal-action modal-close waves-effect waves-light teal btn" type="submit">Concluir</button>
      </div>
      </form>
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
  <script src="jquery/jquery-3.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</body>
</html>
