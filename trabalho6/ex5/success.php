
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: large;
        }
        div{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Dados de cadastro foram digitados com sucesso!</h1>
        <?php

            function carregaString($arquivo)
            {
                $arq = fopen($arquivo, "r");
                $string = fgets($arq);
                fclose($arq);
                return $string;
            }

            $email = htmlspecialchars(carregaString("../email.txt"));
            $senhaHash = htmlspecialchars(carregaString("../senhaHash.txt"));

            
            echo "<p>Email: {$email}</p>";
            echo "<p>SenhaHash: {$senhaHash}</p>";
        ?>
    </div>
</body>
</html>