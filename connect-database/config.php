<?php
//criando função de conexão

function conectar(){
  $servidor = "localhost";
  $user = "root";
  $passwd = "";
  $database = "my_sales";
  $conexao = mysqli_connect($servidor, $user, $passwd, $database);
  return $conexao;
}
?>