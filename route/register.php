<?php 
  session_start();
  include('connection.php');

//   if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha'])) {
//     header('location: index.php');
//   }
  $nome = mysqli_real_escape_string($connect, $_POST['nome']);
  $email = mysqli_real_escape_string($connect, $_POST['email']);
  $senha = mysqli_real_escape_string($connect, $_POST['senha']);

  $query = 
  "
    INSERT INTO usuario ( nome, email, senha) VALUES ('{$nome}' ,'{$email}', '{$senha}') 
  ";

  $result = mysqli_query ($connect, $query);
  $row = mysqli_num_rows($result);
  
  while($registro = mysqli_fetch_array($result)) {
    $nome = $registro['nome'];
  }
    header('location: ../perfil.html');
?>