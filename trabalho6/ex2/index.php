<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Exercicio 2 php</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">lista de produtos</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $nomes [0] = "Tv";
                $nomes [1] = "smartphone";
                $nomes [2] = "Bicicleta";
                $nomes [3] = "notebook";
                $nomes [4] = "CADEIRA ";
                $nomes [5] = "monitor";
                $nomes [6] = "calculadora";
                $nomes [7] = "mouse";
                $nomes [8] = "teclado";
                $nomes [9] = "mochila";

                $descricao[0] = "tela plana plc";
                $descricao[1] = "sansung galaxy s20";
                $descricao[2] = "Aro 29 Safeway Aluminio 21 marchas Shimano Freio a Disco e Suspensão Cinza";
                $descricao[3] = "Notebook Lenovo Ultrafino IdeaPad 3 Ryzen 5 5500U 8GB 256GB SSD Linux 15.6 82MFS00100 Cinza";
                $descricao[4] = "CADEIRA GAMER MAD RACER STI MASTER PRETO - MADSTIMSPT - PCYES";
                $descricao[5] = "Monitor LG Ultrawide 29WL500-29, 21:9 IPS, HDMI, HDR10, Screen Split 2.0, Preto";
                $descricao[6] = "Calculadora Científica 240 Funções, Casio, FX-82MS";
                $descricao[7] = "Mouse Óptico Acer Space Gray AMR020 Wireless";
                $descricao[8] = "Teclado Multilaser Slim Preto Laser Usb - TC193";
                $descricao[9] = "Mochila Executiva Impermeável Grande Mochilas Trabalho Viagens multifuncionais Para Notebook de Até 15.6 Polegadas, Masculino/Feminino";

                if(isset($_GET["qde"]))
                {
                    $size = $_GET["qde"];

                    for($i = 0; $i < $size; $i++)
                    {
                        $pos = rand(0,9);
    
                        echo <<<HTML
                        <tr>
                        <th scope="row">{$i}</th>
                        <td>{$nomes[$pos]}</td>
                        <td>{$descricao[$pos]}</td>
                        </tr>
                        HTML;
                    }
                }
                else
                {
                    echo "<h2>Para usar passe quantidade de produtor a serem listados no final da url ex: index.php?qde=6</h2>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>