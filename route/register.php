<?php 
  session_start();
  include('connection.php');

  $nome = mysqli_real_escape_string($connect, $_POST['nome']);
  $email = mysqli_real_escape_string($connect, $_POST['email']);
  $senha = mysqli_real_escape_string($connect, $_POST['senha']);

  $query = 
  "
    INSERT INTO usuario ( nome, email, senha) VALUES ('{$nome}' ,'{$email}', '{$senha}') 
  ";

  $insert = mysqli_query ($connect, $query);
  
  while($registro = mysqli_fetch_array($insert)) {
    $nome = $registro['nome'];
  }
    header('location: ../cadastro-concluido.html');
?>