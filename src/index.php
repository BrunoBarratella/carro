<?php 
require_once "./class/carros_class.php";
$carro = new Carros();
?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastra Carros</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="shortcut icon" href="./img/379346_old_car_icon.png">
</head>

<body>
    <div class="Cadastro">
        <div class="quadroDeCadastro">
            <h1 class="tituloQuadroDeCadastro">Cadastro de Veículo</h1>
            <form action="listaVeiculos.php" method="post" class="formulario">
                <table class="tabela">
                    <tr class="linhaTabela">
                        <th>
                            <label for="marca" class="tituloInput">Marca</label> <br>
                            <input type="text" name="marca">
                        </th>
                        <th>
                            <label for="modelo" class="tituloInput">Modelo</label> <br>
                            <input type="text" name="modelo">
                        </th>
                        <th>
                            <label for="anoMod" class="tituloInput">Ano/Mod. Fabricação</label><br>
                            <input type="text" name="anoMod" class="formMinInput left">
                            
                        </th>
                    </tr>

                    <tr>
                        <th>
                            <label for="placa" class="tituloInput">Placa</label> <br>
                            <input type="text" name="placa">
                        </th>
                        <th>
                            <label for="quilometragem" class="tituloInput">Quilometragem</label> <br>
                            <input type="number" name="quilometragem">
                        </th>
                        <th>
                            <label for="cor" class="tituloInput">Cor</label> <br>
                            <input type="text" name="cor">
                        </th>
                        <th>
                            <label for="fipe" class="tituloInput">Valor na tabela Fipe R$</label> <br>
                            <input type="" name="fipe">
                        </th>
                    </tr>
                </table>
                <br><br>

                <label for="observacao" class="tituloInput"><b>Observação</b></label>
                <textarea name="observacao" class="obsInput"></textarea>

            <br><br><br>
            <button type="submit" class="btn verde">Gravar</button>
            </form>
        </div>
    </div>
</body>

</html>