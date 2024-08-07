  <?php

  require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$descricao = filter_input(INPUT_POST, 'descricao');
$data_inicio = filter_input(INPUT_POST, 'data_inicio');
$data_termino = filter_input(INPUT_POST, 'data_termino'); 
$status = filter_input(INPUT_POST, 'status');

  if($id && $nome && $descricao && $data_inicio && $data_termino && $status){
    $sql = $pdo->prepare("UPDATE atividades SET nome = :nome, descricao = :descricao, data_inicio = :data_inicio, data_termino = :data_termino, status = :status WHERE id = :id");
    
    $sql->bindValue(':id', $id);
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':descricao', $descricao);
    $sql->bindValue(':data_inicio', $data_inicio);
    $sql->bindValue(':data_termino', $data_termino);
    $sql->bindValue(':status', $status);
    $sql->execute();

    header("Location: index.php");
    exit;

  }else {
    //header('Location: index.php');
  // exit;

  }
