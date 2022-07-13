<?php

require "../../MysqlConnect.php";

$pdo = mysqlConnect();

$email = $_POST['email'] ?? "";
$senha = $_POST['senha'] ?? "";

try{

    $sql = <<<SQL
        SELECT senhaHash
            FROM logar
            WHERE email = ?
        SQL;

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    $row = $stmt->fetch();

    if(!$row) echo "<h1>Dados invalidos</h1>";

}catch(Exception $e)
{
    exit('Falha inesperada: '.$e->getMessage());
}

if(password_verify($senha, $row['senhaHash']))
{
    header("location: home.html");
}
else
{
    echo "<h1>Email ou senha invalidos!</h1>";
}

exit();