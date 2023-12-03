<?php
    // String de conexão com o Bando de Dados //"@ esconde o erro do include... e usando require esconde mais ainda"
    include_once("connect-database/config.php"); 
    $conexao = conectar();

  $id = isset($_GET['ID']) ? $_GET['ID'] : 0;  

    $qtd_trento_pd = '';    //post 1 - qtd tpd
    $qtd_trento_sp = '';    //post 2 - qtd tsp
    $qtd_trento_25 = '';    //post 3 - qtd t25
    $qtd_trento_30 = '';    //post 4 - qtd t30
    $qtd_trento_35 = '';    //post 5 - qtd t35
    $data          = ''; //post 6 - data

  $sql = "SELECT * FROM vendas_trento WHERE ID = $id;";
  $query = mysqli_query($conexao,$sql);

while($row = mysqli_fetch_assoc($query)){
    $qtd_trento_pd = $row['qtd_trento_pd'];                                                     //campo 1 - qtd tpd
    $qtd_trento_sp = $row['qtd_trento_sp'];                                                     //campo 2 - qtd tsp
    $qtd_trento_25 = $row['qtd_trento_25'];                                                     //campo 3 - qtd t25
    $qtd_trento_30 = $row['qtd_trento_30'];                                                     //campo 4 - qtd t30
    $qtd_trento_35 = $row['qtd_trento_35'];                                        //campo 9 - liq
    $data          = $row['DATA'];        }
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
  <form action="?pagina=post-trento" method="POST"> 
  <input type="hidden" id="id" name="id" value="<?=$id?>" />

    <br><br><br><br><br><br><br><br><br><br><br>
    <a class="titleForm">ENVIO DE TRENTO</a>

<a class="formatForms">
  <div class="form-floating">
    
    <label for="floatingInput">Qtd Trento PD:_____________
      <input autofocus placeholder="Digite a Quantidade" type="number" class="form-control" name="qtd_trento_pd" value="<?=$qtd_trento_pd?>" required>
    </label>

    <label for="floatingInput">Qtd Trento SP:_____________
      <input placeholder="Digite a Quantidade" type="number" class="form-control" name="qtd_trento_sp" value="<?=$qtd_trento_sp?>" required>
    </label>
  
  <div class="form-floating">
    <label for="floatingInput">Qtd Trento R$2,50:_________
      <input placeholder="Digite a Quantidade" type="number" class="form-control" name="qtd_trento_25" value="<?=$qtd_trento_25?>" required>
    </label>
    
    <label for="floatingInput">Qtd Trento R$3,00:_________
      <input placeholder="Digite a Quantidade" type="number" class="form-control" name="qtd_trento_30" value="<?=$qtd_trento_30?>" required>
    </label>

  <div class="form-floating">
    <label for="floatingInput">Qtd Trento R$3,50:__________
      <input placeholder="Digite a Quantidade" type="number" class="form-control" name="qtd_trento_35" value="<?=$qtd_trento_35?>" required>
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