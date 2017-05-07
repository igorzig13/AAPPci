<div class="container">
  <br>
  <div class="valign-wrapper">
    <a href="<?php echo base_url() ?>">Página inicial</a> <i class="material-icons">arrow_forward</i> Lista de Clientes
  </div>
  <div class="divider"></div>
    <h4 class="header center">Clientes cadastrados</h4>
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
                        <a href="<?php echo base_url('index.php/Cliente/editar/' . $clientes_item['id_cliente']); ?>"><i class="material-icons teal-text">edit</i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="center col s12 m6">
        <?php echo $paginacao; ?>
    </div>
</div>
