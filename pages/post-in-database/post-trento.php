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
            $valor_trento_pd = $row['valor_TP2'];
            $valor_trento_sp = $row['valor_TSP'];
    }
    
    $id = $_POST['id'];                                                                           //campo 0 - ID
    $qtd_trento_pd = $_POST['qtd_trento_pd'];                                                     //campo 1 - qtd tpd
    $qtd_trento_sp = $_POST['qtd_trento_sp'];                                                     //campo 2 - qtd tsp
    $qtd_trento_25 = $_POST['qtd_trento_25'];                                                     //campo 3 - qtd t25
    $qtd_trento_30 = $_POST['qtd_trento_30'];                                                     //campo 4 - qtd t30
    $qtd_trento_35 = $_POST['qtd_trento_35'];                                                     //campo 5 - qtd t35
    $qtd_total_trento = $qtd_trento_25 + $qtd_trento_30 + $qtd_trento_35;                         //campo 6 - qtd total
    $inv_trento_pd = ($qtd_trento_pd * $valor_trento_pd);
    $inv_trento_sp = ($qtd_trento_sp * $valor_trento_sp);
    $inv_trento = $inv_trento_pd + $inv_trento_sp;                                                //campo 7 - inv
    $lucro_bruto_trento = ($qtd_trento_25 * 2.5) + ($qtd_trento_30 * 3) + ($qtd_trento_35 * 3.5); //campo 8 - bruto
    $lucro_liq_trento = $lucro_bruto_trento - $inv_trento;                                        //campo 9 - liq
    $data = $_POST['DATA'];                                                                       //campo 10 - data

    if ($id == 0){
        $sql = "
            INSERT INTO vendas_trento (qtd_trento_pd, qtd_trento_sp, qtd_trento_25, qtd_trento_30, qtd_trento_35, qtd_total_trento, inv_trento, lucro_bruto_trento, lucro_liq_trento, DATA)
            VALUES ('$qtd_trento_pd', '$qtd_trento_sp', '$qtd_trento_25', '$qtd_trento_30', '$qtd_trento_35', '$qtd_total_trento', '$inv_trento', '$lucro_bruto_trento', '$lucro_liq_trento', '$data');
        "; }
        
    else{
        $sql = "
            UPDATE vendas_trento SET 
                qtd_trento_pd      = '$qtd_trento_pd',
                qtd_trento_sp      = '$qtd_trento_sp',
                qtd_trento_25      = '$qtd_trento_25',
                qtd_trento_30      = '$qtd_trento_30',
                qtd_trento_35      = '$qtd_trento_35',
                qtd_total_trento   = '$qtd_total_trento',
                inv_trento         = '$inv_trento',
                lucro_bruto_trento = '$lucro_bruto_trento',
                lucro_liq_trento   = '$lucro_liq_trento',
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
    <a href='?pagina=form-trento'><button class="buttonEnvio" type="button">
    ENVIAR +1
    </button></a>

    <a href='?pagina=list-trento'><button class="buttonLista" type="button">
    IR PARA LISTA
    </button></a>

<div class="Home">
    <a href='?pagina=home'><button class="buttonHome" type="button">
    VOLTAR PARA HOME
    </button></a>
</div>

</div>

</div></center>