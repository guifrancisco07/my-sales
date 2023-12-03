<?php
    // String de conexão com o Bando de Dados //"@ esconde o erro do include... e usando require esconde mais ainda"
    include_once("connect-database/config.php"); 
    $conexao = conectar();

  $id = isset($_GET['ID']) ? $_GET['ID'] : 0;  

    $qtd_chips_25 = '';    //post 1 - qtd c25
    $qtd_chips_30 = '';    //post 2 - qtd c30
    $data          = '';   //post 3 - data

  $sql = "SELECT * FROM vendas_chips WHERE ID = $id;";
  $query = mysqli_query($conexao,$sql);

while($row = mysqli_fetch_assoc($query)){
    $qtd_chips_25 = $row['qtd_chips_25'];         //campo 1 - qtd c25
    $qtd_chips_30 = $row['qtd_chips_30'];         //campo 2 - qtd c30
    $data         = $row['DATA'];       }         //campo 7 - data
?>

<!DOCTYPE html>
<html lang="br">

<!--LINK PARA CSS-->
<link rel="stylesheet" href="backup/view/formatBotoes.css"/>
<link rel="stylesheet" href="backup/view/formatFontes.css"/>
<link rel="stylesheet" href="backup/view/formatForms.css"/>
<link rel="stylesheet" href="backup/view/formatBack.css"/>
<style>
        .tamanho{
          max-width: 600px;
          position: absolute;
          top: 40%;
          left: 50%;
          transform: translate(-50%, -50%);
        }
</style>

<body class="formatFundo">
<center>
  <div class="tamanho">
  <form action="?pagina=post-chips" method="POST">  
  <input type="hidden" id="id" name="id" value="<?=$id?>" />

    <br><br><br><br><br><br><br><br><br><br><br>
    <a class="titleForm">ENVIO DE CHIPS</a><br>

  <a class="formatForms">
  
  <div class="form-floating">
    <label for="qtd_chips_25">Qtd Chips R$2,50:__________
      <input autofocus placeholder="Digite a Quantidade" type="number" class="form-control" name="qtd_chips_25" value="<?=$qtd_chips_25?>" required>
    </label>

  <div class="form-floating">
    <label for="qtd_chips_30">Qtd Chips R$3,00:__________
      <input placeholder="Digite a Quantidade" type="number" class="form-control" name="qtd_chips_30" value="<?=$qtd_chips_30?>" required>
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