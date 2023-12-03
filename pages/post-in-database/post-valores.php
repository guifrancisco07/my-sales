<?php
    // String de conexão com o Bando de Dados //"@ esconde o erro do include... e usando require esconde mais ainda"
    include_once("connect-database/config.php"); 
    $conexao = conectar();
    
    if(!$conexao /*== true*/){ 
        echo 'Não foi possível Conectar no Banco de Dados';
        exit; }

    $id = $_POST['id'];
    $valor_TP2 = $_POST['valor_TP2'];
    $valor_TB2 = $_POST['valor_TB2'];
    $valor_TAP = $_POST['valor_TAP'];
    $valor_TAB = $_POST['valor_TAB'];
    $valor_TSP = $_POST['valor_TSP'];
    $valor_TSB = $_POST['valor_TSB'];
    $valor_chips = $_POST['valor_chips'];
    $valor_pacoca = $_POST['valor_pacoca'];
    $valor_fini = $_POST['valor_fini'];
    $data = $_POST['DATA'];

    if ($id == 0){
        $sql = "
            INSERT INTO valores_produtos (valor_TP2, valor_TB2, valor_TAP, valor_TAB, valor_TSP, valor_TSB, valor_chips, valor_pacoca, valor_fini, DATA)
            VALUES ('$valor_TP2', '$valor_TB2', '$valor_TAP', '$valor_TAB', '$valor_TSP', '$valor_TSB', '$valor_chips', '$valor_pacoca', '$valor_fini', '$data');
        "; }
    else{
        $sql = "
            UPDATE valores_produtos SET 
                valor_TP2 = '$valor_TP2',
                valor_TB2 = '$valor_TB2',
                valor_TAP = '$valor_TAP',
                valor_TAB = '$valor_TAB',
                valor_TSP = '$valor_TSP',
                valor_TSB = '$valor_TSB',
                valor_chips = '$valor_chips',
                valor_pacoca = '$valor_pacoca',
                valor_fini = '$valor_fini',
                DATA = '$data'
            WHERE id = $id;
        "; }

echo '<center><br><br><br><br><br><br><br><br><br><br><br>';
echo '<div class="tamanho">';
echo '<a class="formatTitle">';

        $execute = mysqli_query($conexao,$sql);
    
        if ($execute){
            echo '
            Salvo Com Sucesso!
            '; } //<li> cria um tópico
    
        else{
            echo '
            Erro Ao Salvar ;-;
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
            width: 40%;         /*largura*/
            padding: 10px;      /*altura*/
        }

        .Home{
            /*tamanho*/
            border: 0px;        /*borda*/
            border-radius: 5px; /*arredondamento*/
            width: 70%;         /*largura*/
            padding: 10px;      /*altura*/
        }
</style></div>

<!--BOTÕES-->
<div class="tamanho">
<div>
    <a href='?pagina=form-valores'><button class="buttonEnvio" type="button">
    ENVIAR +1
    </button></a>

    <a href='?pagina=list-valores'><button class="buttonLista" type="button">
    IR PARA LISTA
    </button></a>

<div class="Home">
    <a href='?pagina=home'><button class="buttonHome" type="button">
    VOLTAR PARA HOME
    </button></a>
</div>

</div>

</div></center>