<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous"
    >
    <style>
        body {
            padding: 1rem;
        }
        article{
            font: 1.5rem / 1.5 Georgia;
            width: 100%;
            padding: 5px 15px;
            border: 1px solid lightgrey;
            background-color: #f5f5f5;
        }

    </style>
    <title>Document</title>
</head>
<body>
  <main>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Cep</th>
          <th scope="col">Logadouro</th>
          <th scope="col">Cidade</th>
          <th scope="col">Bairro</th>
          <th scope="col">Estado</th>
        </tr>
      </thead>
      <tbody>
        <?php
    
            require "../../MysqlConnect.php";
            $pdo = mysqlConnect();
    
            try {
    
            $sql = <<<SQL
            SELECT cep, logadouro, cidade, bairro, estado
            from endereco
            SQL;
    
            // Neste exemplo não é necessário utilizar prepared statements
            // porque não há possibilidade de injeção de SQL, 
            // pois nenhum parâmetro do usuário é utilizado na query SQL. 
            // Além disso, como há resultados a serem processados, 
            // utilizamos o método query (e não o exec).
            $stmt = $pdo->query($sql);
            } 
              catch (Exception $e) {
              exit('Ocorreu uma falha: ' . $e->getMessage());
            }
    
            while ($row = $stmt->fetch()) {
    
                // Limpa os dados produzidos pelo usuário
                // com possibilidade de ataque XSS
                // antes de inserí-los na página HTML
                $cep = htmlspecialchars($row['cep']);
                $logadouro = htmlspecialchars($row['logadouro']);
                $cidade = htmlspecialchars($row['cidade']);
                $bairro = htmlspecialchars($row['bairro']);
                $estado = htmlspecialchars($row['estado']);
        
                echo <<<HTML
                  <tr>
                    <th scope="row">1</th>
                    <td>$cep</td>
                    <td>$logadouro</td>
                    <td>$cidade</td>
                    <td>$bairro</td>
                    <td>$estado</td>
                  </tr>     
                HTML;
            }
        ?>
      </tbody>
    </table>
  </main>

</body>
</html>