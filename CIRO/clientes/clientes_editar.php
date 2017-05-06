<div class="container">
    <div class="row">
        <h2 class="teal-text center">Dados do cliente</h2>
        <?php echo validation_errors(); ?>
        <?php echo form_open('Clientes/atualizar'); ?>
        <div class="row">
            <input  name="idcliente" id="idcliente" type="hidden" class="validate" value="<?php echo $dados_cliente[0]->idcliente; ?>">
            <div class="input-field col s12 m6">
                <i class="teal-text material-icons prefix">perm_identity</i>
                <input  name="nome" id="nome" type="text" class="validate" value="<?php echo $dados_cliente[0]->nome; ?>">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12 m3">
                <input id="cpf" name='cpf' type="text" value="<?php echo $dados_cliente[0]->cpf; ?>">
                <label for="cpf">CPF</label>
            </div>
            <div class="input-field col s12 m3">
                <i class="teal-text material-icons prefix">cake</i>
                <input id="nascimento" name="nascimento" type="date" value="<?php echo $dados_cliente[0]->nascimento; ?>">
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m10">
                <i class="teal-text material-icons prefix">home</i>
                <input id="rua" name='rua' type="text" value="<?php echo $dados_cliente[0]->rua; ?>">
                <label for="rua">Rua</label>
            </div>
            <div class="input-field col s12 m2">
                <input id="numero" name='numero' type="text" value="<?php echo $dados_cliente[0]->numero; ?>">
                <label for="numero">Numero</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m5">
                <input id="bairro" name='bairro' type="text" value="<?php echo $dados_cliente[0]->bairro; ?>">
                <label for="bairro">Bairro</label>
            </div>
            <div class="input-field col s12 m3">
                <input id="cidade" name='cidade' type="text" value="<?php echo $dados_cliente[0]->cidade; ?>">
                <label for="cidade">Cidade</label>
            </div>
            <div class="input-field col s12 m2">
                <select id="estado" name="estado">
                    <option value="AC" <?php if($dados_cliente[0]->estado=='AC'){echo "selected";} ?>>Acre</option>
                    <option value="AL" <?php if($dados_cliente[0]->estado=='AL'){echo "selected";} ?>>Alagoas</option>
                    <option value="AP" <?php if($dados_cliente[0]->estado=='AP'){echo "selected";} ?>>Amapá</option>
                    <option value="AM" <?php if($dados_cliente[0]->estado=='AM'){echo "selected";} ?>>Amazonas</option>
                    <option value="BA" <?php if($dados_cliente[0]->estado=='BA'){echo "selected";} ?>>Bahia</option>
                    <option value="CE" <?php if($dados_cliente[0]->estado=='CE'){echo "selected";} ?>>Ceará</option>
                    <option value="DF" <?php if($dados_cliente[0]->estado=='DF'){echo "selected";} ?>>Distrito Federal</option>
                    <option value="ES" <?php if($dados_cliente[0]->estado=='ES'){echo "selected";} ?>>Espirito Santo</option>
                    <option value="GO" <?php if($dados_cliente[0]->estado=='GO'){echo "selected";} ?>>Goiás</option>
                    <option value="MA" <?php if($dados_cliente[0]->estado=='MA'){echo "selected";} ?>>Maranhão</option>
                    <option value="MS" <?php if($dados_cliente[0]->estado=='MS'){echo "selected";} ?>>Mato Grosso do Sul</option>
                    <option value="MT" <?php if($dados_cliente[0]->estado=='MT'){echo "selected";} ?>>Mato Grosso</option>
                    <option value="MG" <?php if($dados_cliente[0]->estado=='MG'){echo "selected";} ?>>Minas Gerais</option>
                    <option value="PA" <?php if($dados_cliente[0]->estado=='PA'){echo "selected";} ?>>Pará</option>
                    <option value="PB" <?php if($dados_cliente[0]->estado=='PB'){echo "selected";} ?>>Paraíba</option>
                    <option value="PR" <?php if($dados_cliente[0]->estado=='PR'){echo "selected";} ?>>Paraná</option>
                    <option value="PE" <?php if($dados_cliente[0]->estado=='PE'){echo "selected";} ?>>Pernambuco</option>
                    <option value="PI" <?php if($dados_cliente[0]->estado=='PI'){echo "selected";} ?>>Piauí</option>
                    <option value="RJ" <?php if($dados_cliente[0]->estado=='RJ'){echo "selected";} ?>>Rio de Janeiro</option>
                    <option value="RN" <?php if($dados_cliente[0]->estado=='RN'){echo "selected";} ?>>Rio Grande do Norte</option>
                    <option value="RS" <?php if($dados_cliente[0]->estado=='RS'){echo "selected";} ?>>Rio Grande do Sul</option>
                    <option value="RO" <?php if($dados_cliente[0]->estado=='RO'){echo "selected";} ?>>Rondônia</option>
                    <option value="RR" <?php if($dados_cliente[0]->estado=='RR'){echo "selected";} ?>>Roraima</option>
                    <option value="SC" <?php if($dados_cliente[0]->estado=='SC'){echo "selected";} ?>>Santa Catarina</option>
                    <option value="SP" <?php if($dados_cliente[0]->estado=='SP'){echo "selected";} ?>>São Paulo</option>
                    <option value="SE" <?php if($dados_cliente[0]->estado=='SE'){echo "selected";} ?>>Sergipe</option>
                    <option value="TO" <?php if($dados_cliente[0]->estado=='TO'){echo "selected";} ?>>Tocantins</option>
                </select>
                <label>Estado:</label>
            </div>
            <div class="input-field col s12 m2">
                <input id="cep" name='cep' type="text" value="<?php echo $dados_cliente[0]->cep; ?>">
                <label for="cep">CEP</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4">
                <i class="teal-text material-icons prefix">call</i>
                <input id="telefone" name='telefone' type="text" class="validate" value="<?php echo $dados_cliente[0]->telefone; ?>">
                <label for="telefone">Telefone</label>
            </div>
            <div class="input-field col s12 m4">
                <i class="teal-text material-icons prefix">email</i>
                <input id="email" name='email' type="text" class="validate" value="<?php echo $dados_cliente[0]->email; ?>">
                <label for="email">E-mail</label>
            </div>
            <div class="input-field col s12 m4">
                <select id="sexo" name="sexo">
                    <option value="" selected>Escolha uma opção...</option>
                    <option value="masculino" <?php if($dados_cliente[0]->sexo=='masculino'){echo "selected";} ?>>Masculino</option>
                    <option value="feminino" <?php if($dados_cliente[0]->sexo=='feminino'){echo "selected";} ?>>Feminino</option>
                </select>
                <label>Sexo:</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="observacao" name="observacao" class="materialize-textarea"><?php echo $dados_cliente[0]->observacao; ?></textarea>
                <label for="observacao">Observações</label>
            </div>
        </div>
        <div class="row">
            <button class="btn waves-effect waves-light" type="submit" name="submit">Salvar
                <i class="material-icons right">send</i>
            </button>
        </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('select').material_select();
    });
</script>