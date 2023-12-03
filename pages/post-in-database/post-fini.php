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
        $valor_fini = $row['valor_fini'];
    }
    
    $id = $_POST['id'];                                           //campo 0/1 - ID
    $qtd_fini = $_POST['qtd_fini'];                               //campo 2 - qtd fini
    $inv_fini = $qtd_fini * $valor_fini;                          //campo 3 - inv
    $lucro_bruto_fini = $qtd_fini * 2;                            //campo 4 - bruto
    $lucro_liq_fini = $lucro_bruto_fini - $inv_fini;              //campo 5 - liq
    $data = $_POST['DATA'];                                       //campo 6 - data

    if ($id == 0){
        $sql = "
            INSERT INTO vendas_fini (qtd_fini, inv_fini, lucro_bruto_fini, lucro_liq_fini, DATA)
            VALUES ('$qtd_fini', '$inv_fini', '$lucro_bruto_fini', '$lucro_liq_fini', '$data');
        "; }
        
    else{
        $sql = "
            UPDATE vendas_fini SET 
                qtd_fini         = '$qtd_fini',
                inv_fini         = '$inv_fini',
                lucro_bruto_fini = '$lucro_bruto_fini',
                lucro_liq_fini   = '$lucro_liq_fini',
                DATA             = '$data'
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
    <a href='?pagina=form-fini'><button class="buttonEnvio" type="button">
    ENVIAR +1
    </button></a>

    <a href='?pagina=list-fini'><button class="buttonLista" type="button">
    IR PARA LISTA
    </button></a>

<div class="Home">
    <a href='?pagina=home'><button class="buttonHome" type="button">
    VOLTAR PARA HOME
    </button></a>
</div>

</div>

</div></center>