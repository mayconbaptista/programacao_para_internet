<?php

function carregaString($arquivo)
{
    $arq = fopen($arquivo, "r");
    $string = fgets($arq);
    fclose($arq);
    return $string;
}

$Email = htmlspecialchars(carregaString("../email.txt"));
$SenhaHash = htmlspecialchars(carregaString("../senhaHash.txt"));

$email = $_POST["email"] ?? "";
$senha = $_POST["senha"] ?? "";

if(($email == $_POST['email']) && password_verify($senha, $SenhaHash))
{
    header("Location: success.php");
    exit();
}
else
{
    header("Location: index.html");
    exit();
}