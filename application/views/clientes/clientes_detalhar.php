<link rel="stylesheet" href="<?php echo base_url(); ?>includes/pesquisa/jquery-ui.css">
<script type="text/javascript" src="<?php echo base_url(); ?>includes/pesquisa/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>includes/pesquisa/jquery-ui/jquery-ui.js"></script>	


<div class="container">
    <div class="row">
        <h2 class="teal-text center">Detalhes do cliente</h2>
        <div class="row">
            <div class="card white">
                <div class="card-content black-text">
                    <div class="card-title valign-wrapper" style="border-bottom: 1px #ccc solid;">
                        <i class="medium teal-text material-icons prefix">person_pin</i>
                        <?php echo $dados->nome; ?>
                    </div>
                    <div class="row">
                        <div class="flow-text center input-field col s12 m12">
                            <i class="teal-text material-icons">description</i>
                            Realizou <i id="totalcompras" class=""><?php echo $dados->total; ?></i> compras até o momento, com um
                            total de R$<i id="valortotal" class=""><?php echo $dados->valor; ?></i>.
                        </div>
                    </div>
                    <div class="row">
                        <div class="center input-field col s5 m5">
                            <h2 id="contador" class="center medium teal-text"><i class="teal-text material-icons">equalizer</i><?php echo $dados->acima; ?></h2> compras acima de 300g. 
                        </div>
                        <div class="center input-field col s1 m1"></div>
                        <div class="center input-field col s6 m6">
                            <h3 id="maiorcompra" class="center medium teal-text"><i class="teal-text material-icons">arrow_upward</i>R$<?php echo $dados->maior; ?></h4> Foi o maior valor de compra. 
                        </div>
                    </div>
                    <div class="row">
                        <div class="center input-field col s5 m5">

                            <?php
                            if (($dados->acima / 10 - $dados->desconto) >= 1) {
                                $qnt = (int) ($dados->acima / 10 - $dados->desconto);
                                echo $qnt . ' desconto(s) para próxima compra.';
                                ?> 

                            <a id="linkeditar"  href="<?php echo base_url("Clientes/bonificar/" . $this->uri->segment("3")); ?>">
                                <div class="chip blue-text">
                                    <i class="material-icons right">local_activity</i>Usar desconto 
                                </div>
                            </a>
                            <?php } ?>

                        </div>
                    </div>
                </div>
                <div class="card-action center">
                    <a id="linkeditar" class="waves-effect waves-light btn" href="<?php echo base_url("Clientes/editar/" . $this->uri->segment("3")); ?>"><i class="material-icons right">edit</i>Editar dados do cliente</a>
                </div>

            </div>
        </div>
    </div>
</div>