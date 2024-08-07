<?php
require 'config.php';


$nome = filter_input(INPUT_POST, 'nome');
$descricao = filter_input(INPUT_POST, 'descricao'); 
$data_inicio = filter_input(INPUT_POST, 'data_inicio');
$data_termino = filter_input(INPUT_POST, 'data_termino'); 
$status = filter_input(INPUT_POST, 'status'); 


if ($nome && $descricao && $data_inicio && $data_termino && $status) {

    $sql = $pdo->prepare("SELECT * FROM usuario WHERE descricao = :descricao");
    $sql->bindValue(':descricao', $descricao);
    #$sql->execute();

    if ($sql->rowCount() === 0) {
        
        $sql = $pdo->prepare("INSERT INTO atividades (nome, descricao, data_inicio, data_termino, status) VALUES (:nome, :descricao, :data_inicio, :data_termino, :status)");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':descricao', $descricao);
        $sql->bindValue(':data_inicio', $data_inicio);
        $sql->bindValue(':data_termino', $data_termino);
        $sql->bindValue(':status', $status);
        $sql->execute();

        header("Location: index.php");
        exit;
    }

    } else {
        header('Location: cadastrar.php');
        exit;
    }

?>
