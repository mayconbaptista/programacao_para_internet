<?php

class Endereco
{
  public $cep;
  public $rua;
  public $bairro;
  public $cidade;

  function __construct($cep,$rua, $bairro, $cidade)
  {
    $this->cep = $cep;
    $this->rua = $rua;
    $this->bairro = $bairro;
    $this->cidade = $cidade;
  }
}

require "../../MysqlConnect.php";

$pdo = mysqlConnect();

$cepGET = $_GET['cep'] ?? '';

try {

  $sql = <<<SQL
    SELECT cep, rua, bairro, cidade
    FROM endereco2
    where cep = ?
    SQL;

  $stmt = $pdo->prepare($sql);
  $stmt->execute([$cepGET]);
} 
catch (Exception $e) {
  exit('Ocorreu uma falha: ' . $e->getMessage());
}

$cep = htmlspecialchars($row['cep']);
$rua = htmlspecialchars($row['rua']);
$bairro = htmlspecialchars($row['bairro']);
$cidade = htmlspecialchars($row['cidade']);

$endereco = $cepGET == $cep ?
  new Endereco($cep, $rua, $bairro, $cidade) :
  new Endereco ($cepGET,'','','');

echo json_encode($endereco);
?>