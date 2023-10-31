<?php 

require('../includes/conexao-db.php');

function login(PDO $pdo, string $getUsuario, string $getSenha): void {
    $verificar = "select * from usuario where login =  ' . $getUsuario . 'and senha = " . $getSenha . ";";
    $statement = $pdo->query($verificar);
    //fazer um if com o rows == 0
}
