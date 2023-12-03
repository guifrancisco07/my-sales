<?php
    // String de conexão com o Bando de Dados //"@ esconde o erro do include... e usando require esconde mais ainda"
    include_once("connect-database/config.php"); 
    $conexao = conectar();

  $id = isset($_GET['ID']) ? $_GET['ID'] : 0;  

    $qtd_fini = '';   //post 1 - qtd fini
    $data     = '';   //post 2 - data

  $sql = "SELECT * FROM vendas_fini WHERE ID = $id;";
  $query = mysqli_query($conexao,$sql);

while($row = mysqli_fetch_assoc($query)){
    $qtd_fini = $row['qtd_fini'];         //campo 1 - qtd fini
    $data     = $row['DATA'];   }         //campo 6 - data
?>

<!DOCTYPE html>
<html lang="br">

<!--LINK PARA CSS-->
<link rel="stylesheet" href="backup/view/formatBotoes.css" />
<link rel="stylesheet" href="backup/view/formatFontes.css" />
<link rel="stylesheet" href="backup/view/formatForms.css" />
<style>
        .tamanho{
          max-width: 600px;
          position: absolute;
          top: 40%;
          left: 50%;
          transform: translate(-50%, -50%);
        }
</style>

<body> 
<center>
  <div class="tamanho">    
  <form action="?pagina=post-fini" method="POST">  
  <input type="hidden" id="id" name="id" value="<?=$id?>" /> 

    <br><br><br><br><br><br><br><br><br>
    <a class="titleForm">ENVIO DE FINI</a><br>

<a class="formatForms">    
  
    <div class="form-floating">
    <label for="floatingInput">Qtd Fini R$2,00:____________
      <input autofocus placeholder="Digite a Quantidade" type="number" class="form-control" name="qtd_fini" value="<?=$qtd_fini?>" required>
    </label>

    <label for="floatingInput">Data:_________________
        <input placeholder="Digite a Data" type="date" class="form-control" name="DATA" value="<?=$data?>" required>
      </label> 
    </div><br>
  </a>
<div>
    <a><button class="buttonEnvio" type="submit">ENVIAR</button></a>    
  </form>

    <a><button class="buttonLimpar" type="reset">
    LIMPAR
    </button></a>

    <a href='?pagina=home'><button class="buttonHome" type="button">
    VOLTAR PARA HOME
    </button></a>
</div>
<br><br>
<img class="formatImgHome" src="img/white-sales.png">
<br><br>
</div>
</center>
</body>
</html>