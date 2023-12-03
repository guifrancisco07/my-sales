<?php
    // String de conexão com o Bando de Dados //"@ esconde o erro do include... e usando require esconde mais ainda"
    include_once("connect-database/config.php"); 
    $conexao = conectar();
    
    if(!$conexao /*== true*/){ 
        echo 'Não foi possível Conectar no Banco de Dados';
        exit; }
?>

<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="backup/view/formatBack.css" />
<link rel="stylesheet" href="backup/view/formatBotoes.css" />
<link rel="stylesheet" href="backup/view/formatFontes.css" />
<link rel="stylesheet" href="backup/view/formatTable.css" />
<style>
        .tamanho{
            /*tamanho*/
            border: 0px;        /*borda*/
            border-radius: 5px; /*arredondamento*/
            width: 30%;         /*largura*/
            padding: 10px;        /*altura*/
        }
</style>
    
<body class="fundoLista"><br><br><br><br> <center>
<a class="titleList">LISTA DE PAÇOCA</a><br><br>

<table width="98%">
    <thead>
        <tr class="topLINE">
           <!-- <th> ID </th> -->
                <th> QTD. PC5 </th>
                <th> QTD. PC1 </th>
                <th> QTD. TOTAL </th>
                <th> INV. PAÇOCA </th>
                <th> L. BRUTO </th>
                <th> L. LIQ. </th>
                <th> DATA </th>
        </tr>
    </thead>
    <tbody> 
        <?php
        $sql = "SELECT * FROM vendas_pacoca;";
        $query = mysqli_query($conexao,$sql);
        while ($row = mysqli_fetch_assoc($query)){ // comando que era da linha 43 = <td>'.$row['id'].'</td>
            echo '
                <tr class "downLINE">
                    <td class="formatList">'.$row['qtd_pacoca_5'].'</td>
                    <td class="formatList">'.$row['qtd_pacoca_1'].'</td>
                    <td class="formatList">'.$row['qtd_total_pacoca'].'</td>
                    <td class="formatList">R$'.$row['inv_pacoca'].'</td>
                    <td class="formatList">R$'.$row['lucro_bruto_pacoca'].'</td>
                    <td class="formatList">R$'.$row['lucro_liq_pacoca'].'</td>
                    <td class="formatList">'.$row['DATA'].'</td>

                    <td class="buttonsTD">
                    <a href="?pagina=form-pacoca&ID='.$row['id'].'">
                    <button class="buttonEditar" type="button">
                    <img class="formatImg" src="img/icones/edit.png">
                    EDITAR
                    </button></a></td>

                    <td class="buttonsTD">
                    <a href="?pagina=del-pacoca&ID='.$row['id'].'">
                    <button class="buttonDel" type="button">
                    <img class="formatImg" src="img/icones/excluir.png">
                    EXCLUIR
                    </button></a></td>
                </tr>
            '; }
        ?>
    </tbody>
    </table><br>
    
<!--BOTÕES-->
<div class="tamanho">
<div><form action="?pagina=apaga-pacoca" method="POST">

    <input type="checkbox" class="form-check-input" id="exampleCheck1" required/>
    <label class="form-check-label" for="exampleCheck1">
        <a class="formatCheck">Eu aceito limpar a tabela</a>
    </label><br>
</div>    
    <a><button class="buttonLimpar" type="submit">LIMPAR</button></a> 
</form>

    <a href='?pagina=home'><button class="buttonHome" type="button">
    VOLTAR PARA HOME
    </button></a>

</div>
<br><br><br>
<img class="formatImgHome" src="img/white-sales.png">
<br><br><br>
</center>
</body>
</html>