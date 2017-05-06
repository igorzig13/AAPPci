<div class="container">

    <h2 class="teal-text">Clientes cadastrados</h2>
    <table class="striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th>Rua</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $clientes_item): ?>
                <tr>
                    <td><?php echo $clientes_item['id_cliente']; ?></td>
                    <td><?php echo $clientes_item['nome']; ?></td>
                    <td><?php echo $clientes_item['telefone']; ?></td>
                    <td><?php echo $clientes_item['cpf']; ?></td>
                    <td><?php echo $clientes_item['rua']; ?></td>
                    <td>
                        <a href="<?php echo base_url('index.php/Cliente/editar/' . $clientes_item['id_cliente']); ?>"><i class="material-icons">edit</i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="center col s12 m6">
        <?php echo $paginacao; ?>
    </div>
</div>
