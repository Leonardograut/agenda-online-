<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h1 class="text-center">Registro</h1>
      <form method="POST" action="cadastrar_action.php">
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
          <label for="descricao">Descricao:</label>
          <input type="text" class="form-control" id="descricao" name="descricao" required>
        </div>
        <div class="form-group">
          <label for="data_inicio">Data de Início:</label>
          <input type="date" class="form-control" id="data_inicio" name="data_inicio" required>
        </div>
        <div class="form-group">
          <label for="data_termino">Data de Término:</label>
          <input type="date" class="form-control" id="data_termino" name="data_termino" required>
        </div>
        <div class="form-group">
          <label for="status">Status:</label>
          <select class="form-control" id="status" name="status" required>
            <option value="pendente">Pendente</option>
            <option value="concluida">Concluída</option>
            <option value="cancelada">Cancelada</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Salvar</button>
      </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
