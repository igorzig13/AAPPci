
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
                <a class=" blue-text zLink right" href="<?php echo base_url("Cliente/listar") ?>">Ver clientes</a>
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

  
  
  <!-- modal cliente -->
  <div id="modalCliente" class="modal modal-fixed-footer">
    <div class="modal-content">
      <div class="center">
        <h3 class="light">Novo cliente</h3>
        <p>Preencha o formulário:</p>
      </div>
      <?php echo form_open('Cliente/cadastrar'); ?>
      <form action="" method="post" id="cadCliente">
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

  
  
  <!-- modal pagamento-->
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
