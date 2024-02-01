<?php


    function cadastrarFilme($nome,$categoria,$data_lancamento){
        $usuario = "root";
        $senha = "8084Raq@0000";
        // senhamysql

        // é um tratamento de erros 
        try{
            $conn = new PDO("mysql:host=localhost;dbname=cinema",$usuario,$senha);
            $result = $conn->prepare('INSERT INTO filme (nome,categoria,data_lancamento) VALUES (:nome, :categoria, :data_lancamento)');
            $result->bindValue(':nome',$nome);
            $result->bindValue(':categoria',$categoria);
            $result->bindValue(':data_lancamento',$data_lancamento);
            // Executando a consulta mySQL.
            $result->execute();
            return 1;
        }catch(PDOException $e){
            return 0;
           ;
        }
    }

    function listarFilmes(){
        $usuario = "root";
        $senha = "8084Raq@0000";
        try{
            $conn = new PDO("mysql:host=localhost;dbname=cinema",$usuario,$senha);
            $result = $conn->prepare('SELECT * FROM filme ORDER BY nome');

            
            // Executando a consulta SQL.
            $result->execute();
            
            // Retornando todos os resultados da consulta como um array.
            return $result->fetchAll();
            // mostra os registros complet
        }catch(PDOException $e){

            // Lidando com exceções (erros) que possam ocorrer durante a execução do código
            echo "<h1>".$e->getMessage()."</h1>";
        }
    }

  


?>