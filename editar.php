<?php

require 'config.php';

$atividades = [];

$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $sql = $pdo->prepare("SELECT * FROM atividades WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $atividades = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header("Location: index.php");
        exit;
    }

} else {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Editar Usuario</h1>
    <form method="POST" action="editar_action.php">
        <input type="hidden" name="id" value="<?= $atividades['id']; ?>">

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?= $atividades['nome']; ?>" required>
        </div>

        <div class="form-group">
            <label for="descricao">Descricao:</label>
            <input type="text" class="form-control" id="descricao" name="descricao" value="<?= $atividades['descricao']; ?>" required>
        </div>

        <div>
           
        <div class="form-group">
          <label for="data_inicio">Data de Início:</label>
          <input type="date" class="form-control" id="data_inicio" name="data_inicio" value="<?= $atividades['data_inicio']; ?>"required>
        </div>

        <div class="form-group">
          <label for="data_termino">Data de Término:</label>
          <input type="date" class="form-control" id="data_termino" name="data_termino" value="<?= $atividades['data_termino']; ?>" required>
        </div>

        <div class="form-group">
          <label for="status">Status:</label>
          <select class="form-control" id="status" name="status" required>
            <option value="pendente">Pendente </option>
            <option value="concluida">Concluída</option>
            <option value="cancelada">Cancelada</option>
          </select>
        </div>

        </div>


        <button type="submit" class="btn btn-primary btn-block">Atualizar</button>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
