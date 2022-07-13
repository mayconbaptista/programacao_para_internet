<?php

require "../../MysqlConnect.php";

$pdo = mysqlConnect();

// *************************** dados da pessoa **********************
$nome = $_POST['nome'] ?? "";
$sexo = $_POST['sexo'] ?? "";
$email = $_POST['email'] ?? "";
$telefone = $_POST['telefone'] ?? "";
$cep = $_POST['cep'] ?? "";
$logadouro = $_POST['logadouro'] ?? "";
$cidade = $_POST['cidade'] ?? "";
$estado = $_POST['estado'] ?? "";

// *************************** dados do paciente *********************
$peso = $_POST['peso'] ?? "";
$altura = $_POST['altura'] ?? "";
$tipo_sanquineo = $_POST['tipo_sanquineo'] ?? "";

$sql1 = <<<SQL
    INSERT INTO pessoa (nome, sexo, email, telefone, cep, logadouro, cidade, estado)
    VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)
SQL;

$sql2 = <<<SQL
    INSERT INTO paciente (peso, altura, tipo_sanquineo, pessoa_id)
    VALUES ( ?, ?, ?, ?)
SQL;

try{
    $pdo->beginTransaction();

    $stmt = $pdo->prepare($sql1);

    if (!$stmt->execute([
        $nome, $sexo, $email, $telefone, $cep, $logadouro, $cidade, $estado
      ])) throw new Exception('Falha ao inserir o endereço');

    $pessoa_id = $pdo->lastInsertId();

    $stmt = $pdo->prepare($sql2);

    if (!$stmt->execute([
        $peso, $altura, $tipo_sanquineo, $pessoa_id
      ])) throw new Exception('Falha ao inserir o endereço');

    $pdo->commit();

    header("location: listar.php");
    exit();
}catch(Exception $e){

    $pdo->rollBack();
    if ($e->errorInfo[1] === 1062)
      exit('Dados duplicados: ' . $e->getMessage());
    else
      exit('Falha ao cadastrar os dados: ' . $e->getMessage());
}