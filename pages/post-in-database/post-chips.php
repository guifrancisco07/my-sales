<?php
    // String de conexão com o Bando de Dados //"@ esconde o erro do include... e usando require esconde mais ainda"
    include_once("connect-database/config.php"); 
    $conexao = conectar();

    if(!$conexao /*== true*/){ 
        echo 'Não foi possível Conectar no Banco de Dados';
        exit; }

    /*aqui pego os valores que estão no banco*/
    $sql = "SELECT * FROM valores_produtos WHERE id = 1;";
    $query = mysqli_query($conexao,$sql);
    while ($row = mysqli_fetch_assoc($query)){ 
        $valor_chips = $row['valor_chips'];
    }
    
    $id = $_POST['id'];                                                                           //campo 0 - ID
    $qtd_chips_25 = $_POST['qtd_chips_25'];                                                       //campo 1 - qtd c25
    $qtd_chips_30 = $_POST['qtd_chips_30'];                                                       //campo 2 - qtd c30
    $qtd_total_chips = $qtd_chips_25 + $qtd_chips_30;                                             //campo 3 - qtd total
    $inv_chips = $qtd_total_chips * $valor_chips;                                                 //campo 4 - inv
    $lucro_bruto_chips = ($qtd_chips_25 * 2.5) + ($qtd_chips_30 * 3);                             //campo 5 - bruto
    $lucro_liq_chips = $lucro_bruto_chips - $inv_chips;                                           //campo 6 - liq
    $data = $_POST['DATA'];                                                                       //campo 7 - data

    if ($id == 0){
        $sql = "
            INSERT INTO vendas_chips (qtd_chips_25, qtd_chips_30, qtd_total_chips, inv_chips, lucro_bruto_chips, lucro_liq_chips, DATA)
            VALUES ('$qtd_chips_25', '$qtd_chips_30', '$qtd_total_chips', '$inv_chips', '$lucro_bruto_chips', '$lucro_liq_chips', '$data');
        "; }
        
    else{
        $sql = "
            UPDATE vendas_chips SET 
                qtd_chips_25      = '$qtd_chips_25',
                qtd_chips_30      = '$qtd_chips_30',
                qtd_total_chips   = '$qtd_total_chips',
                inv_chips         = '$inv_chips',
                lucro_bruto_chips = '$lucro_bruto_chips',
                lucro_liq_chips   = '$lucro_liq_chips',
                DATA              = '$data'
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
    <a href='?pagina=form-chips'><button class="buttonEnvio" type="button">
    ENVIAR +1
    </button></a>

    <a href='?pagina=list-chips'><button class="buttonLista" type="button">
    IR PARA LISTA
    </button></a>

<div class="Home">
    <a href='?pagina=home'><button class="buttonHome" type="button">
    VOLTAR PARA HOME
    </button></a>
</div>

</div>

</div></center>