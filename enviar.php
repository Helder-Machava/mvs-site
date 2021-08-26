<?php

$destino = "heldermachava2@gmail.com";
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$mensagem = $_POST["mensagem"];
$conteudo = "nome:". $nome . "\nemail:". $email . "\ntelefone:" . $telefone . "\nmensagem:" . $mensagem;
mail($destino,"Contacto", $conteudo);
header("Location:obrigado.html");


?>