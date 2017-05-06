<div class="container">
    <h4 class="header">Formulário de cadastro - Cliente</h4>
    <?php echo validation_errors(); ?>
    <?php echo form_open('index.php/Cliente/cadastrar'); ?>
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
            <label for="emailCliente" data-error="Digite um e-mail vÃ¡lido!">E-mail</label>
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
        <div class="input-field col s6">
            <button type="submit" class="btn waves-effect waves-light right">Concluir</button>
        </div>
    </div>
</form>
</div>
