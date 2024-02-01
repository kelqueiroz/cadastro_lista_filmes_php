<?php
  
  include 'header.php';
// o inclui funcionalidades de outro arquivo php para outro
  include 'banco.php';

// recebendo valores enviados via POST do formulario
// nas variaveis via POST acessando por nomes declarados no formulario
  $nome = $_POST['nome'];
  $categoria = $_POST['categoria'];
  $data_lancamento = $_POST['data_lancamento'];

//   variavel que recebera a mensagem de sucesso ou falha
  $mensagem = "";

//   validando o cadastro para ver se deu certo ou nao, utilizando a funcao cadastrarfilmes que 
// esta em banco.php
   if(cadastrarFilme($nome,$categoria,$data_lancamento) ==1){
    $mensagem = "Cadastrado com Sucesso!";
   }else{
    $mensagem = "Falha no cadastro!";
   }

?>
<!-- imprimindo a msg para mostrar para usuario -->
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <p class="lead"><?php  echo $mensagem;     ?></p>
    </div>

