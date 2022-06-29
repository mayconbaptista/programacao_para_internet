<?php

$email = $_POST["email"] ?? "";
$senha = $_POST["senha"] ?? "";

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

function salvaString($string, $arquivo)
{
    $arq = fopen($arquivo, "w");
    fwrite($arq, $string);
    fclose($arq);
}


try{
    salvaString($email,"../email.txt");
    salvaString($senhaHash, "../senhaHash.txt");

    echo "<h1>Dados salvos com sucesso!</h1>";
    exit;

}catch(Exception $e)
{
    echo "<h1>Ocorreu um erro!{$e}</h1>";
    exit;
}