<?php
    require_once __DIR__ . "/class/carros_class.php";

    $carros = new Carros();
    $carros->set();
?>
<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Veiculos</title>
    <link rel="shortcut icon" href="./img/379346_old_car_icon.png">
    <link rel="stylesheet" href="./style/listagem.css">
</head>
<body>
    <div class="listagem">
        <div class="quadroListagem">
            <table class="tabela">
                <h1 class="listagemTitulo">Listagem de Veículos</h1>
                <tr>
                    <th style="border-top: 1px solid black;">ID</th>
                    <th style="border-top: 1px solid black;">Marca</th>
                    <th style="border-top: 1px solid black;">Modelo</th>
                    <th style="border-top: 1px solid black;">Ano/Modelo</th>
                    <th style="border-top: 1px solid black;">Cor</th>
                    <th style="border-top: 1px solid black;">KM</th>
                </tr>
<?php

$carros->get();

?>
            </table>
        </div>
    </div>
</body>
</html>