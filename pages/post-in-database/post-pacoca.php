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
        $valor_pacoca = $row['valor_pacoca'];
    }
    
    $id = $_POST['id'];                                                                     //campo 0 - ID
    $qtd_pacoca_5 = $_POST['qtd_pacoca_5'];                                                 //campo 1 - qtd pc5
    $qtd_pacoca_1 = $_POST['qtd_pacoca_1'];                                                 //campo 2 - qtd pc1
    $qtd_total_pacoca = $qtd_pacoca_5 + $qtd_pacoca_1;                                      //campo 3 - qtd total
    $inv_pacoca = $qtd_total_pacoca * $valor_pacoca;                                                  //campo 4 - inv
    $lucro_bruto_pacoca = ($qtd_pacoca_5 * 0.5) + $qtd_pacoca_1;                            //campo 5 - bruto
    $lucro_liq_pacoca = $lucro_bruto_pacoca - $inv_pacoca;                                  //campo 6 - liq
    $data = $_POST['DATA'];                                                                 //campo 7 - data

    if ($id == 0){
        $sql = "
            INSERT INTO vendas_pacoca (qtd_pacoca_5, qtd_pacoca_1, qtd_total_pacoca, inv_pacoca, lucro_bruto_pacoca, lucro_liq_pacoca, DATA)
            VALUES ('$qtd_pacoca_5', '$qtd_pacoca_1', '$qtd_total_pacoca', '$inv_pacoca', '$lucro_bruto_pacoca', '$lucro_liq_pacoca', '$data');
        "; }
        
    else{
        $sql = "
            UPDATE vendas_pacoca SET 
                qtd_pacoca_5      = '$qtd_pacoca_5',
                qtd_pacoca_1      = '$qtd_pacoca_1',
                qtd_total_pacoca   = '$qtd_total_pacoca',
                inv_pacoca         = '$inv_pacoca',
                lucro_bruto_pacoca = '$lucro_bruto_pacoca',
                lucro_liq_pacoca   = '$lucro_liq_pacoca',
                DATA               = '$data'
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
    <a href='?pagina=form-pacoca'><button class="buttonEnvio" type="button">
    ENVIAR +1
    </button></a>

    <a href='?pagina=list-pacoca'><button class="buttonLista" type="button">
    IR PARA LISTA
    </button></a>

<div class="Home">
    <a href='?pagina=home'><button class="buttonHome" type="button">
    VOLTAR PARA HOME
    </button></a>
</div>

</div>

</div></center>