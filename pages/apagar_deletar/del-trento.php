<?php
    // String de conexão com o Bando de Dados //"@ esconde o erro do include... e usando require esconde mais ainda"
    include_once("connect-database/config.php"); 
    $conexao = conectar();
    
$id = $_GET['ID'];

$sql = "DELETE FROM vendas_trento WHERE ID = $id";
$execute = mysqli_query($conexao,$sql);

echo '<center><br><br><br><br><br><br><br><br><br><br>';
echo '<div class="tamanho">';
echo '<a class="formatTitle">';

        $execute = mysqli_query($conexao,$sql);
    
        if ($execute){
            echo '
            Excluído Com<br>Sucesso!
            '; } //<li> cria um tópico
    
        else{
            echo '
            Erro Ao Excluir.
            '; } //<li> cria um tópico

echo '</a></center>';

?>

<center>
<!--LINK PARA CSS-->
<link rel="stylesheet" href="backup/view/formatBotoes.css" />
<link rel="stylesheet" href="backup/view/formatFontes.css" />
<style>
        .tamanho{
            /*tamanho*/
            border: 0px;        /*borda*/
            border-radius: 5px; /*arredondamento*/
            width: 50%;         /*largura*/
            padding: 10px;      /*altura*/
        }

        .Home{
            /*tamanho*/
            border: 0px;        /*borda*/
            border-radius: 5px; /*arredondamento*/
            width: 50%;         /*largura*/
            padding: 10px;      /*altura*/
        }
</style></div>

<!--BOTÕES-->
<div class="tamanho">

    <a href='?pagina=list-trento'><button class="buttonLista" type="button">
    VOLTAR PARA LISTA
    </button></a>


<div class="Home">
    <a href='?pagina=home'><button class="buttonHome" type="button">
    VOLTAR PARA HOME
    </button></a>
</div></div>

</center>