
<?php
// o include, chama a funçao de um arquivo php para outro arquivo php
  include 'header.php';

?>
  <!-- Cria o cabeçalho da página que aparece em localhostel -->
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Cadastrar Filmes</h1>
    
    </div>
    
<!-- Cria um formulário para cadastrar informações sobre um filme -->
    <div class="mx-auto" style="width: 50%;">

         <!-- Chama a funcao processar via POST -->

      <form action="processa_dados.php" method="POST">
        <div class="form-group">
          <!-- nome do campo -->
          <label for="nome">Nome Filme</label>
          <!-- campo barrinha -->
          <input type="text" class="form-control" id="nome" placeholder="Seu nome" name="nome">
        </div>


        <div class="form-group">
 
           <!-- LISTA DE CATEGORIAS> -->
          <label for="estado_crm">Categorias</label>
          <select class="form-control" id="categoria" name="categoria">
          <option value="CO">Comédia</option>
            <option value="AC">Ação</option>
            <option value="TR">Terror</option>
            <option value="Ro">Romance</option>
  
           <!-- OS TIPOS DE FILMES > -->
            
          </select>
        </div>
        <div class="form-group">
          <!-- nome do campo -->
          <label for="data_inclusao">Data Cadastro</label>
          <!-- campo barrinha -->
          <input type="date" class="form-control" id="data_lancamento"name="data_lancamento">
        </div>
        
        
       <!-- Botão de envio do formulário para processar dados onde aparece cadastrado com sucesso -->
        
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>

    