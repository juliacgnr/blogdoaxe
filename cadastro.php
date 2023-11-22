
<?php

if(isset($_POST['submit']))
{

    include_once ('conexao.php');

    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $datanascimento = $_POST['datanascimento'];


    $result = mysqli_query($mysqli, "INSERT INTO cadastro(nome,email,datanascimento) VALUES ('$nome','$email','$datanascimento')");

}
      
?>

    



<!DOCTYPE html>
<html lang="pt br">

<head>
    <meta charset="utf-8">
    <title>Blog do Axé</title>
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="Deividson Menêses">
    <meta name="description" content="Meu blog é sobre musica baiana e carnaval">
    <meta name="keyword" content="carnaval, bahia, trio eletrico, ivete sangalo, axé">
    <meta name="robots" content="index">
    <link href="cadastro.css" rel="stylesheet" />
  </head>
  
  <body>
  <div class="cadastro">
      <h1>Cadastre-se aqui</h1>
      <h2> Receba novidades e conteúdos exclusivos!</h2>
      <form id="form" class="form" action="cadastro.php" method="POST">
    
          <div class="forms">
              <label for="nome" class="form_label">Nome: </label>
              <input type="text" name="nome" class="form_input" id="nome" placeholder="Nome" required>
          </div>
    
          <div class="forms">
              <label for="e-mail" class="form_label">Email: </label>
              <input type="email" name="email" class="form_input" id="email" placeholder="seuemail@email.com" required>
          </div>
    
          <div class="forms">
              <label for="datanascimento" class="form_label">Data de Nascimento: </label>
              <input type="date" name="datanascimento" class="form_input" id="datanascimento" placeholder="Data de Nascimento" required>
          </div>        
    
        <div>
        <input type="submit" name="submit" id="submit" class="enviar" onclick="cadastrado();">
        
        </div>

        <br><br>
        <br><br>

        <button class="botao" onclick="palavraMagica();"> Qual o maior carnaval do Mundo? </button>
  <p class= "magica" id="magica">...</p>
  <script src="./javascript.js"></script>

      </form>
  </body>  