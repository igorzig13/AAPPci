<link rel="stylesheet" href="<?php echo base_url(); ?>includes/pesquisa/jquery-ui.css">
<script type="text/javascript" src="<?php echo base_url(); ?>includes/pesquisa/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>includes/pesquisa/jquery-ui/jquery-ui.js"></script>	


<div class="container">
    <div class="row">
        <h2 class="teal-text center">Buscar cliente</h2>
        <div class="row">
            <div class="card white">
                <div class="card-content black-text">
                    <div class="card-title valign-wrapper">
                        <i class="medium teal-text material-icons prefix">person_pin</i>
                        <input id="busca" name="busca" type="text" placeholder="digite o nome do cliente">
                    </div>
                    <br>
                    <input id="cliente_idcliente" name="cliente_idcliente" type="text" hidden>
                    <br>
                    <div class="row">
                        <div class="flow-text center input-field col s12 m12">
                            <i class="teal-text material-icons">description</i>
                            Realizou <i id="totalcompras" class="">0</i> compras até o momento, com um
                            total de R$<i id="valortotal" class="">0</i>.
                        </div>
                    </div>
                    <div class="row">
                        <div class="center input-field col s5 m5">
                            <h2 id="contador" class="center medium teal-text"><i class="teal-text material-icons">equalizer</i>0</h2> compras acima de 300g. 
                        </div>
                        <div class="center input-field col s1 m1"></div>
                        <div class="center input-field col s6 m6">
                            <h3 id="maiorcompra" class="center medium teal-text"><i class="teal-text material-icons">arrow_upward</i>R$</h4> Foi o maior valor de compra. 
                        </div>
                    </div>
                    <div class="row" id="desconto" style="display: none;">
                        <div class="center input-field col s5 m5">
                            <i id="qdesconto" class="">0</i> desconto(s) para próxima compra.
                            <a id="linkbonificar"  href="<?php echo base_url("Clientes/bonificar/" . $this->uri->segment("3")); ?>">
                                <div class="chip blue-text">
                                    <i class="material-icons right">local_activity</i>Usar desconto 
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-action center">
                    <a id="linkeditar" class="waves-effect waves-light btn" href="<?php echo base_url("Clientes/editar/" . ''); ?>"><i class="material-icons right">edit</i>Editar dados do cliente</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('select').material_select();
    });
    $(document).ready(function () {
        var iddocliente;
        $(function () {
            $("#busca").autocomplete({
                source: function (request, response) {
                    limpaCampos();
                    $.ajax({url: '<?php echo base_url(); ?>Clientes/consulta_cliente',
                        data: {acao: 'autocomplete', term: $("#busca").val()},
                        dataType: "json",
                        type: "POST",
                        success: function (data) {
                            response(data);
                        }
                    });
                },
                focus: function (event, ui) {
 limpaCampos();
                    $("#busca").val(ui.item.nome);
                    $("#cliente_idcliente").val(ui.item.idcliente);
                    iddocliente = ui.item.idcliente;
                    carregarDados();
                    return false;
                },
                select: function (event, ui) {
                    $("#busca").val(ui.item.nome);
                    return false;
                },
                minLength: 2
            })
                    .autocomplete("instance")._renderItem = function (ul, item) {
                return $("<li>")
                        .append("<a><b>Nome: </b>" + item.nome + "<br><b>CPF: </b>" + item.cpf + " -  ID:" + item.idcliente + "</a><br>")
                        .appendTo(ul);
            };
            function carregarDados() {
                var busca = $('#busca').val();

                if (busca != "" && busca.length >= 2) {
                    $.ajax({
                        url: '<?php echo base_url(); ?>Clientes/consulta_cliente',
                        dataType: "json",
                        type: "POST",
                        data: {
                            acao: 'consulta',
                            term: $("#cliente_idcliente").val()
                        },
                        success: function (data) {
                            //$('#dcompras').val(data[0].total);
                            $('#cliente_idcliente').val(data[0].idcliente);
                            //$('#totalcompras').val(data[0].conta);
                            document.getElementById("contador").innerHTML += data[0].contador;
                            document.getElementById("totalcompras").innerHTML = data[0].total;
                            document.getElementById("valortotal").innerHTML = data[0].valor;
                            document.getElementById("maiorcompra").innerHTML += data[0].maior;
                            document.getElementById("linkeditar").setAttribute('href', '<?php echo base_url("Clientes/editar/"); ?>/' + iddocliente);
                            document.getElementById("linkbonificar").setAttribute('href', '<?php echo base_url("Clientes/bonificar/"); ?>/' + iddocliente);
                            if ((data[0].contador / 10 - data[0].desconto) >= 1) {
                                document.getElementById("desconto").style.display = "block";
                                document.getElementById("qdesconto").innerHTML = data[0].desconto;
                            }
                        }
                    });
                }
            }
            function limpaCampos() {
                $('#cliente_idcliente').val('');
                document.getElementById("desconto").style.display = "none";
                document.getElementById("contador").innerHTML = '<i class="teal-text material-icons">equalizer</i>';
                document.getElementById("totalcompras").innerHTML = 0;
                document.getElementById("valortotal").innerHTML = 0;
                document.getElementById("maiorcompra").innerHTML = '<i class="teal-text material-icons">arrow_upward</i>R$';
                document.getElementById("qdesconto").innerHTML = 0;
            }
        });
    });
</script>