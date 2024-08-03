<?php

require 'config.php';

$id =filter_input(INPUT_POST,'id');
$nome =filter_input(INPUT_POST,'nome');
$descricao =filter_input(INPUT_POST,'descricao',FILTER_VALIDATE_MAC);


if($id && $nome && $descricao){
  $sql = $pdo->prepare("UPDATE usuario SET nome = :nome, descricao = :descricao WHERE id = :id");
  $sql->bindValue(':nome',$nome);
  $sql->bindValue(':descricao',$descricao);
  $sql->bindValue(':id',$id);
  $sql->execute();


  header("Location: index.php");
  exit;

}else {
  //header('Location: index.php');
 // exit;

}
