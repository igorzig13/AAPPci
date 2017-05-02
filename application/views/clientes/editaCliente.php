
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
