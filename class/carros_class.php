<?php
require_once __DIR__ . "/carros_class.php";

class Carros{

public function set()
{
    if($_POST){
        $conexao = new Conexao();

        try{
            $query = 'INSERT INTO veiculos (marca, modelo, placa, quilometragem, valor_tabela_fipe, cor, observacao)
            VALUES ("' . $_POST['marca'] . '", "' . $_POST['modelo'] . '", 
            "' . $$_POST['placa'] . '", "' . $$_POST['quilometragem'] . '", 
            "' . $$_POST['fipe'] . '", "' . $$_POST['cor'] . '", "' . $$_POST['observacao'] . '")';

            $qr = $conexao->conn->prepare($query);
            $qr->execute();
            
        }catch(PDOException $e){

        }
    }else{
        echo "Houve um problema com o cadastro";
    }
}


}