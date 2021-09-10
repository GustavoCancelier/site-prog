<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/perfil.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap" rel="stylesheet">
    <title>Perfil</title>
</head>
<body>

<?php 
  session_start();
  include('./route/connection.php');

  $email = mysqli_real_escape_string($connect, $_POST['email']);
  $senha = mysqli_real_escape_string($connect, $_POST['senha']);

  $query = 
  "
    SELECT 
	    nome
    from usuario
    WHERE email = '{$email}' and senha = '{$senha}';
  ";

  $result = mysqli_query($connect, $query);
  $name = mysqli_fetch_array($result);

  $row = mysqli_num_rows($result);
  

  if($row ==0) {
    echo  "<script>alert('Login inexistente');
	window.location='./index.html';
    </script>";
  }


?>

    <div class="container">
                <h2>Olá, <?php echo $name['nome'] ?>! </h2>
                <p>Nos conheça melhor:</p>
        <div class="content">

            <div class="left-side">
                <img src="./assets/fernando.svg" alt="Foto Fernando" class="left-image">
                <h1 class="h1-left">Fernando Sousa da Silva</h1>
                <div class="left-social">
                    <a href="https://www.linkedin.com/in/fernando-sousa-298186177/">
                        <img src="./assets/linkedin.svg" alt="LinkedIn">
                    </a>
                    <a href="https://www.instagram.com/sousafernando1/">
                        <img src="./assets/instagram.svg" alt="Instagram">
                    </a>
                    <a href="https://github.com/SousaFernando1">
                        <img src="./assets/github.svg" alt="GitHub">
                    </a>                                        
                </div>
                
            </div>
            <hr class="separador"/>
            <div class="right-side">
                <img src="./assets/gustavo.svg" alt="Foto Gustavo">
                <h1 class="h1-right">Gustavo Cancelier dos Santos</h1>
                <div class="right-social">
                    <a href="https://www.linkedin.com/in/gustavo-cancelier-dos-santos-5bb4a2190/">
                        <img src="./assets/linkedin.svg" alt="LinkedIn">
                    </a>
                    <a href="https://www.instagram.com/gustavo_cancelier/">
                        <img src="./assets/instagram.svg" alt="Instagram">
                    </a>
                    <a href="https://github.com/GustavoCancelier">
                        <img src="./assets/github.svg" alt="GitHub">
                    </a>                                        
                </div>
                
            </div>
        </div>
        
    </div>
</body>
</html>