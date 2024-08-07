<?php
require 'config.php';
require 'login_action.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM atividades");

if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h1 class="mb-4">Lista de Atividades</h1>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descricao</th>
                <th>Data_inicio</th>
                <th>Data_terminio</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista as $usuario): ?>
            <?php $currentStatus = $usuario['status']; ?>
                <tr>
                    <td><?= $usuario['id']; ?></td>
                    <td><?= $usuario['nome']; ?></td>
                    <td><?= $usuario['descricao']; ?></td>
                    <td><?= $usuario['data_inicio'];?></td>
                    <td><?= $usuario['data_termino'];?></td>
                    <td>
                        <a href="editar.php?id=<?= $usuario['id']; ?>" class="btn btn-primary btn-sm">Editar</a>
                        <a href="excluir.php?id=<?= $usuario['id']; ?>" class="btn btn-danger btn-sm">Excluir</a>
                        <select name="status" id="status" class="form-control form-control-sm d-inline-block w-auto ml-2">
                        <option value="pendente"  <?php if ($currentStatus == "pendente") echo "selected"; ?>>Pendente</option>
                        <option value="concluida" <?php if ($currentStatus == "concluida") echo "selected"; ?>>Concluída</option>
                        <option value="cancelada" <?php if ($currentStatus == "cancelada") echo "selected"; ?>>Cancelada</option>
                    </select>
                        </select>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="cadastrar.php" class="btn btn-success">Cadastrar Atividades</a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
