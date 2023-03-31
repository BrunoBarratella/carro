<?php
require_once __DIR__ . "/conexao_class.php";

class Carros
{

    public function set()
    {
        if ($_POST) {
            $conexao = new Conexao();

            try {
                $marca = $_POST['marca'];
                $modelo = $_POST['modelo'];
                $anoMod = $_POST['anoMod'];
                $placa = $_POST['placa'];
                $quilometragem = $_POST['quilometragem'];
                $tabelaFipe = $_POST['fipe'];
                $observacao = $_POST['observacao'];
                $cor = $_POST['cor'];

                $query = "INSERT INTO veiculos VALUES('id', '$marca', '$modelo', '$anoMod', '$placa', " . $quilometragem . ", " . $tabelaFipe . ", '$cor', '$observacao')";

                $qr = $conexao->conn->prepare($query);
                $qr->execute();
            } catch (PDOException $e) {
                echo $e;
            }
        }else {
            echo "text";
        }
    }

    public function get()
    {
        $conexao = new Conexao();

        try {

            $query = "SELECT id, 
            marca, 
            modelo, 
            modelo_fabricacao, 
            cor, 
            quilometragem
            FROM veiculos";



            $qr = $conexao->conn->prepare($query);
            $qr->execute();
            $recebe = $qr->fetchAll();

            foreach ($recebe as $key => $value) {


                echo "<tr><td>" . $value['id'] . "</td>";
                echo "<td>" . $value['marca'] . "</td>";
                echo "<td>" . $value['modelo'] . "</td>";
                echo "<td>" . $value['modelo_fabricacao'] . "</td>";
                echo "<td>" . $value['cor'] . "</td>";
                echo "<td>" . $value['quilometragem'] . "</td></tr>";

                // echo "<tr class='linhaEscura'><td>" . $value['id'] . "</td>";
                // echo "<td>" . $value['marca'] . "</td>";
                // echo "<td>" . $value['modelo'] . "</td>";
                // echo "<td>" . $value['modelo_fabricacao'] . "</td>";
                // echo "<td>" . $value['cor'] . "</td>";
                // echo "<td>" . $value['quilometragem'] . "</td></tr>";
            }


        } catch (PDOException $e) {
            echo $e;
        }
    }
}
