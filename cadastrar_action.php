<?php
require 'config.php';

$nome = filter_input(INPUT_POST, 'nome');
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_VALIDATE_EMAIL);

if ($nome && $descricao) {

 
    $sql = $pdo->prepare("SELECT * FROM usuario WHERE descricao = :descricao");
    $sql->bindValue(':descricao', $descricao);
    $sql->execute();
    
    if ($sql->rowCount() === 0) {
       
        $sql = $pdo->prepare("INSERT INTO usuario (nome, descricao) VALUES (:nome, :descricao)");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':descricao', $descricao);
        $sql->execute();
    
        header("Location: index.php");
        exit;
    } else {
        header('Location: cadastrar.php');
        exit;
    }

} else {
    header("Location: cadastrar.php");
    exit;
}
?>
