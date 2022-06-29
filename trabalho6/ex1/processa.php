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
    
<?php

        $cep = $cidade = $logadouro = $bairro = $estado = "";
    
        if(isset($_POST["cep"]))
            $cep = $_POST["cep"];
    
        $logadouro = "";
        if(isset($_POST["logadouro"]))
            $logadouro = $_POST["logadouro"];
    
        if(isset($_POST["cidade"]))
            $cidade = $_POST["cidade"];
    
        if(isset($_POST["bairro"]))
            $bairro = $_POST["bairro"];
    
        if(isset($_POST["estado"]))
            $estado = $_POST["estado"];
    
        echo $html = <<<HTML
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <article>CEP: {$cep} </article>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col">
                        <article>Logadouro: {$logadouro}</article>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col">
                        <article>Bairro: {$bairro}</article>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-sm">
                        <article> Cidade: {$cidade}</article>
                    </div>
                    <div class="col-sm">
                        <article> Estado: {$estado}</article>
                    </div>
                </div>
            </div>
        HTML;
    ?>
</body>