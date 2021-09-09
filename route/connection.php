<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db_name = "aula_ppi";

  $connect = new mysqli($servername, $username, $password, $db_name);

  if($connect->connect_errno) {
    echo "Falha ao conectar:";
  }
?>