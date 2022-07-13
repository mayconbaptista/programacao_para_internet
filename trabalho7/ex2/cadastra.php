<?php

require "../../MysqlConnect.php";
$pdo = mysqlConnect();

$cep  = $_POST['cep'] ?? "";
$cidade = $_POST['logadouro'] ?? "";
$logadouro = $_POST['cidade'] ?? "";
$bairro = $_POST['bairro'] ?? ""; 
$estado = $_POST['estado'] ?? "";

$sql = <<<SQL
    INSERT INTO endereco (cep, logadouro, cidade, bairro, estado)
    VALUES ( ?, ?, ?, ?, ?)
SQL;


try{
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$cep, $logadouro, $cidade, $bairro, $estado]);
    header("location: listar.php");
    exit();
}catch (Exception $e) {  
    //error_log($e->getMessage(), 3, 'log.php');
    if ($e->errorInfo[1] === 1062)
      exit('Dados duplicados: ' . $e->getMessage());
    else
      exit('Falha ao cadastrar os dados: ' . $e->getMessage());
}

?>