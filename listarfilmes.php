<?php
  
  include 'header.php';
  
// o include, chama a funçao de um arquivo php para outro arquivo php
 
  include 'banco.php';
  
// o include, chama a funçao de um arquivo php para outro arquivo php

?>

    <!-- Cria o cabeçalho da página com um título -->

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Listar Filmes</h1>
    </div>

    <!-- Cria uma tabela para exibir os filmes -->
    <div>

      <table class="table table-hover">

        <thead>
          <!-- thead é o cabeçalho de tabela -->
          <tr>
            <th scope="col">#</th>
            <th scope="col">id</th>
            <th scope="col">Nome</th>
            <th scope="col">Categoria</th>
            <th scope="col">Data lançamento</th>
            
          </tr>
        </thead>
        <tbody>

          <?php
          
      // Chama a função 'listarFilmes()' para obter os dados dos filmes do banco de dados
          $filmes = listarFilmes();

          
      // montando a tabela com dados da lista de filmes
      // vindos do banco de dados com laço de repetiçao for.
          for ($i=0; $i < count($filmes); $i++) {
            // count faz a contagem dos itens
            echo "<tr>";
            // <tr> linha <td> coluna
              echo "<th scope='row'>".$filmes[$i]['id']."</th>";
              echo "<td>".$filmes[$i]['id']."</td>";
              echo "<td>".$filmes[$i]['nome']."</td>";
              echo "<td>".$filmes[$i]['categoria']."</td>";
              echo "<td>".$filmes[$i]['data_lancamento']."</td>";
            echo "</tr>";
          }

          ?>

          
          
        </tbody>
      </table>
    </div>


