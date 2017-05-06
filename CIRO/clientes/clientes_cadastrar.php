<div class="container">
    <div class="row">
        <h2 class="teal-text center">Dados do cliente</h2>
        <?php echo validation_errors(); ?>
        <?php echo form_open('Clientes/cadastrar'); ?>
        <div class="row">
            <div class="input-field col s12 m6">
                <i class="teal-text material-icons prefix">perm_identity</i>
                <input  name="nome" id="nome" type="text" class="validate">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12 m3">
                <input id="cpf" name='cpf' type="text">
                <label for="cpf">CPF</label>
            </div>
            <div class="input-field col s12 m3">
                <i class="teal-text material-icons prefix">cake</i>
                <input id="nascimento" name="nascimento" type="date">
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m10">
                <i class="teal-text material-icons prefix">home</i>
                <input id="rua" name='rua' type="text" >
                <label for="rua">Rua</label>
            </div>
            <div class="input-field col s12 m2">
                <input id="numero" name='numero' type="text" >
                <label for="numero">Numero</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m5">
                <i class="teal-text material-icons prefix">location_city</i>
                <input id="bairro" name='bairro' type="text">
                <label for="bairro">Bairro</label>
            </div>
            <div class="input-field col s12 m3">
                <input id="cidade" name='cidade' type="text" >
                <label for="cidade">Cidade</label>
            </div>
            <div class="input-field col s12 m2">
                <select id="estado" name="estado">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espirito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN" selected>Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
                <label>Estado:</label>
            </div>
            <div class="input-field col s12 m2">
                <input id="cep" name='cep' type="text">
                <label for="cep">CEP</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4">
                <i class="teal-text material-icons prefix">call</i>
                <input id="telefone" name='telefone' type="text" class="validate" >
                <label for="telefone">Telefone</label>
            </div>
            <div class="input-field col s12 m4">
                <i class="teal-text material-icons prefix">email</i>
                <input id="email" name='email' type="text" class="validate" >
                <label for="email">E-mail</label>
            </div>
            <div class="input-field col s12 m4">
                <i class="teal-text material-icons prefix">wc</i>
                <select id="sexo" name="sexo">
                    <option value="" selected>Escolha uma opção...</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                </select>
                <label>Sexo:</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <i class="teal-text material-icons prefix">speaker_notes</i>
                <textarea id="observacao" name="observacao" class="materialize-textarea" ></textarea>
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