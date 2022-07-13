<?php

require "../../MysqlConnect.php";
$pdo = mysqlConnect();

$email = $_POST["email"] ?? "";
$senhaHash = password_hash($_POST['senha'], PASSWORD_DEFAULT);

try {

    $sql = <<<SQL
    -- Repare que a coluna Id foi omitida por ser auto_increment
    INSERT INTO logar (email, senhaHash)
    VALUES (?, ?)
    SQL;

  // Neste caso utilize prepared statements para prevenir
  // ataques do tipo SQL Injection, pois precisamos
  // cadastrar dados fornecidos pelo usuário 
  $stmt = $pdo->prepare($sql);
  $stmt->execute([
    $email, $senhaHash
  ]);

  echo "<a href='index.html'>Menu de opções</a>";
  echo "<h1 style='left: 50%;'>Cadastro feito com sucesso</h1>";
  exit();
} 
catch (Exception $e) {  
  //error_log($e->getMessage(), 3, 'log.php');
  if ($e->errorInfo[1] === 1062)
    exit('Dados duplicados: ' . $e->getMessage());
  else
    exit('Falha ao cadastrar os dados: ' . $e->getMessage());
}
