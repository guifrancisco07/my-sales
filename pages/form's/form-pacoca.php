<?php
    // String de conexão com o Bando de Dados //"@ esconde o erro do include... e usando require esconde mais ainda"
    include_once("connect-database/config.php"); 
    $conexao = conectar();

  $id = isset($_GET['ID']) ? $_GET['ID'] : 0;  

    $qtd_pacoca_5 = '';    //post 1 - qtd pc5
    $qtd_pacoca_1 = '';    //post 2 - qtd pc1
    $data          = '';   //post 3 - data

  $sql = "SELECT * FROM vendas_pacoca WHERE ID = $id;";
  $query = mysqli_query($conexao,$sql);

while($row = mysqli_fetch_assoc($query)){
    $qtd_pacoca_5 = $row['qtd_pacoca_5'];         //campo 1 - qtd pc5
    $qtd_pacoca_1 = $row['qtd_pacoca_1'];         //campo 2 - qtd pc1
    $data         = $row['DATA'];       }         //campo 7 - data
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
  <form action="?pagina=post-pacoca" method="POST">
  <input type="hidden" id="id" name="id" value="<?=$id?>" />

    <br><br><br><br><br><br><br><br><br><br><br>
    <a class="titleForm">ENVIO DE PAÇOCA</a><br>

<a class="formatForms">
  
    <div class="form-floating">
      <label for="qtd_pacoca_5">Qtd Paçoca R$0,50:__________
        <input autofocus placeholder="Digite a Quantidade" type="number" class="form-control" name="qtd_pacoca_5" value="<?=$qtd_pacoca_5?>" required>
      </label>

    <div class="form-floating">
      <label for="qtd_pacoca_1">Qtd Paçoca R$1,00:__________
        <input placeholder="Digite a Quantidade" type="number" class="form-control" name="qtd_pacoca_1" value="<?=$qtd_pacoca_1?>" required>
      </label>

    <div class="form-floating">
      <label for="floatingInput">Data:__________________
        <input placeholder="Digite a Data" type="date" class="form-control" name="DATA" value="<?=$data?>" required>
      </label> 
    </div><br>
  </a>

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
</center>
</body>
</html>