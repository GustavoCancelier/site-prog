<?php 
  session_start();
  include('connection.php');

  if(empty($_POST['email']) || empty($_POST['senha'])) {
    header('location: index.php');
  }

  $email = mysqli_real_escape_string($connect, $_POST['email']);
  $senha = mysqli_real_escape_string($connect, $_POST['senha']);

  $query = 
  "
    SELECT 
	    email, 
      senha 
    from usuario
    WHERE email = '{$email}' and senha = '{$senha}';
  ";

  $result = mysqli_query($connect, $query);
  $row = mysqli_num_rows($result);
  
  while($registro = mysqli_fetch_array($result)) {
    $nome = $registro['nome'];
  }

  if($row == 1) {
    $_SESSION['nome'] = $nome;
    header('location: ../perfil.html');
    exit();
  } else {
    header('Location: ../index.html');
    exit();
  }
?>