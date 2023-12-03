<?php
    // String de conexão com o Bando de Dados //"@ esconde o erro do include... e usando require esconde mais ainda"
    include_once("connect-database/config.php"); 
    $conexao = conectar();

  $id = isset($_GET['ID']) ? $_GET['ID'] : 0;  

  $valor_TP2 = '';
  $valor_TB2 = '';
  $valor_TAP = '';
  $valor_TAB = '';
  $valor_TSP = '';
  $valor_TSB = '';
  $valor_chips = '';
  $valor_pacoca = '';
  $valor_fini = '';
  $data = '';

  $sql = "SELECT * FROM valores_produtos WHERE ID = $id;";
  $query = mysqli_query($conexao,$sql);

while($row = mysqli_fetch_assoc($query)){
    $valor_TP2    = $row['valor_TP2'];
    $valor_TB2    = $row['valor_TB2'];
    $valor_TAP    = $row['valor_TAP'];
    $valor_TAB    = $row['valor_TAB'];
    $valor_TSP    = $row['valor_TSP'];
    $valor_TSB    = $row['valor_TSB'];
    $valor_chips  = $row['valor_chips'];
    $valor_pacoca = $row['valor_pacoca'];
    $valor_fini   = $row['valor_fini'];
    $data         = $row['DATA'];    }
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

        .body{
          background: linear-gradient(to bottom, rgb(128, 0, 255) 25%, rgb(218, 181, 255) 100%) !important;
          background-repeat: no-repeat;
          background-size: 3000px;
          height: auto;

          color: rgb(110, 0, 220);
          }

</style>
<body class="body"> 
<center>
  <div class="tamanho">    
  <form action="?pagina=post-valores" method="POST">
  <input type="hidden" id="id" name="id" value="<?=$id?>" />
    
    <br><br><br><br><br><br><br><br><br><br>
    <a class="titleForm">ENVIO DE VALORES</a>

<a class="formatForms">
  
  <div class="form-floating">
      <label for="floatingInput">Valor TP2:___________________
        <input autofocus placeholder="Digite o Valor" type="text" class="form-control" name="valor_TP2" value="<?=$valor_TP2?>" required>
      </label>

      <label for="floatingInput">Valor TB2:___________________
        <input placeholder="Digite o Valor" type="text" class="form-control" name="valor_TB2" value="<?=$valor_TB2?>" required>
      </label>

    <div class="form-floating">
      <label for="floatingInput">Valor TAP:___________________  
      <input placeholder="Digite o Valor" type="text" class="form-control" name="valor_TAP" value="<?=$valor_TAP?>" required>
    </label>

      <label for="floatingInput">Valor TAB:___________________
        <input placeholder="Digite o Valor" type="text" class="form-control" name="valor_TAB" value="<?=$valor_TAB?>" required>
      </label>

    <div class="form-floating">
      <label for="floatingInput">Valor TSP:___________________
        <input placeholder="Digite o Valor" type="text" class="form-control" name="valor_TSP" value="<?=$valor_TSP?>" required>
      </label> 
 
      <label for="floatingInput">Valor TSB:___________________ 
        <input placeholder="Digite o Valor" type="text" class="form-control" name="valor_TSB" value="<?=$valor_TSB?>" required>
    </label>

    <div class="form-floating">
      <label for="floatingInput">Valor Chips:________________
        <input placeholder="Digite o Valor" type="text" class="form-control" name="valor_chips" value="<?=$valor_chips?>" required>
      </label> 

      <label for="floatingInput">Valor Paçoca:_______________
        <input placeholder="Digite o Valor" type="text" class="form-control" name="valor_pacoca" value="<?=$valor_pacoca?>" required>
      </label>
      
    <div class="form-floating">
      <label for="floatingInput">Valor Fini:_________________
        <input placeholder="Digite o Valor" type="text" class="form-control" name="valor_fini" value="<?=$valor_fini?>" required>
      </label>
  
      <label for="floatingInput">Data:________________
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