
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br>
      <div class="valign-wrapper">
        <a href="<?php echo base_url() ?>">Página inicial</a> <i class="material-icons">arrow_forward</i> <a href="<?php echo base_url('index.php/Cliente/listar') ?>">Lista de Clientes</a><i class="material-icons">arrow_forward</i> Editar Informações
      </div>
      <div class="divider"></div>
      <div class="row"><br>
        <h4 class="header center">Editar Informações do Cliente</h4>
        <?php echo validation_errors(); ?>
        <?php echo form_open('index.php/Cliente/atualizar'); ?>
          <div class="col s6">
            <p>Especifique o ID do cliente que será atualizado:</p>
          </div>
          <div class="input-field col s6">
            <input type="text" name="id_cliente" class="validate" id="id_cliente" value="<?php echo $dados_cliente[0]->id_cliente; ?>">
            <label for="id_cliente">ID do cliente</label>
          </div>
          <div class="divider col s12"></div>
          <div class="col s12">
            <p>Novas informações:</p>
          </div>
          <div class="input-field col s6">
            <input type="text" name="nome" id="nome" class="validate" value="<?php echo $dados_cliente[0]->nome; ?>">
            <label for="nome">Nome</label>
          </div>
          <div class="input-field col s6">
            <input type="text" name="cpf" id="cpf" class="validate" value="<?php echo $dados_cliente[0]->cpf; ?>">
            <label for="cpfCliente">CPF</label>
          </div>
          <div class="input-field col s6">
            <input type="email" name="email" id="email" class="validate" value="<?php echo $dados_cliente[0]->email; ?>">
            <label for="email">E-mail</label>
          </div>
          <div class="input-field col s6">
            <input type="text" name="telefone" id="telefone" class="validate" value="<?php echo $dados_cliente[0]->telefone; ?>">
            <label for="telefone">Telefone</label>
          </div>
          <div class="input-field col s6">
            <input type="text" name="celular" id="celular" class="validate" value="<?php echo $dados_cliente[0]->celular; ?>">
            <label for="celular">Celular</label>
          </div>
          <div class="input-field col s6">
            <input type="text" name="rua" id="rua" class="validate" value="<?php echo $dados_cliente[0]->rua; ?>">
            <label for="rua">Rua</label>
          </div>
          <div class="input-field col s6">
            <input type="text" name="numCasa" id="numCasa" class="validate" value="<?php echo $dados_cliente[0]->num_casa; ?>">
            <label for="numCasa">Número da casa</label>
          </div>
          <div class="input-field col s6">
            <input type="text" name="bairro" id="bairro" class="validate" value="<?php echo $dados_cliente[0]->bairro; ?>">
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
