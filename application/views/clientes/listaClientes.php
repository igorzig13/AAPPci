<div class="container">

    <h2 class="teal-text">Clientes cadastrados</h2>
    <table class="striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>CPF</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $clientes_item): ?>
                <tr>
                    <td><?php echo $clientes_item['nomeCliente']; ?></td>
                    <td><?php echo $clientes_item['telCliente']; ?></td>
                    <td>
                        <a href="<?php echo base_url("Clientes/editar/" . $clientes_item['idcliente']); ?>"><i class="material-icons">edit</i></a>
                        <a href="<?php echo base_url("Clientes/detalhar/" . $clientes_item['idcliente']); ?>"><i class="material-icons">search</i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="center col s12 m6">
        <?php echo $paginacao; ?>
    </div>
</div>
