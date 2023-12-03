<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="backup/view/formatBack.css">
    <link rel="icon" href="img/aba-mysales.png" sizes="32x32">
    <title>MY SALES</title>
    <style>
        .navbar_css{
            font-weight:bold;
            font-size:20px;
            color: white !important;
            text-shadow: 0px 5px 10px rgb(67, 0, 130);
        }
        .btnOPC{
            font-size:18px;
            font-weight:bold;
            color: white !important;
            background-color: #4B0082;
        }
    </style>
</head>
<body class="fundo">
<nav class= "navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:transparent">

<a class="navbar.brand" href="?pagina=home"><img src="img/white-sales.png"></a>

<button class="navbar-toggler" type="button" data-toggle="collapse"
arial-controls="navbarNavDropDown" data-target="#NavBarEdt"
aria-expanded="false"> 
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse d-lg-flex justify-content-end"
id="NavBarEdt">
<ul class="navbar-nav">
    <li class="nav-item mr-2 ml-3">
        <a class="nav-link navbar_css" href="?pagina=home">HOME<span class="sr-only"></span></a>
    </li> 

    <li class="nav-item dropdown mr-2 ml-3">
        <a class="nav-link navbar_css" dropdown-toggle href="#"
        id="NavBarDrop" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">ENVIAR<span class="sr-only"></span></a>
        <div class="dropdown-menu btnOPC" aria-labelledby="NavBarDrop">
            <a class="dropdown-item btnOPC" href="?pagina=form-valores">Valores</a>
            <a class="dropdown-item btnOPC" href="?pagina=form-trento">Trento</a>
            <a class="dropdown-item btnOPC" href="?pagina=form-chips">Chips</a>
            <a class="dropdown-item btnOPC" href="?pagina=form-pacoca">Paçoca</a>
            <a class="dropdown-item btnOPC" href="?pagina=form-fini">Fini</a>
        </div>
    </li>

    <li class="nav-item dropdown mr-2 ml-3">
        <a class="nav-link navbar_css" dropdown-toggle href="#"
        id="NavBarDrop" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">LISTA<span class="sr-only"></span></a>
        <div class="dropdown-menu btnOPC" aria-labelledby="NavBarDrop">
            <a class="dropdown-item btnOPC" href="?pagina=list-valores">Valores</a>
            <a class="dropdown-item btnOPC" href="?pagina=list-trento">Trento</a>
            <a class="dropdown-item btnOPC" href="?pagina=list-chips">Chips</a>
            <a class="dropdown-item btnOPC" href="?pagina=list-pacoca">Paçoca</a>
            <a class="dropdown-item btnOPC" href="?pagina=list-fini">Fini</a>
        </div>
    </li>

    <li class="nav-item mr-2 ml-3">
        <a class="nav-link navbar_css" href="?pagina=home">     <span class="sr-only"></span></a>
    </li> 
</ul>
</div>
</nav>

<?php 

    if(!isset($_GET['pagina'])){
        include("pages/home.php"); }

    else{
        $link = $_GET['pagina'];

        switch($link){
           
        case "home";
        include("pages/home.php");
        break;

        case "form-valores";
        include("pages/form_s/form-valores.php");
        break;

        case "form-trento";
        include("pages/form_s/form-trento.php");
        break;
            
        case "form-chips";
        include("pages/form_s/form-chips.php");
        break;

        case "form-pacoca";
        include("pages/form_s/form-pacoca.php");
        break;

        case "form-fini";
        include("pages/form_s/form-fini.php"); 
        break;

        case "post-valores";
        include("pages/post-in-database/post-valores.php"); 
        break;

        case "post-trento";
        include("pages/post-in-database/post-trento.php");
        break;

        case "post-pacoca";
        include("pages/post-in-database/post-pacoca.php");
        break;

        case "post-fini";
        include("pages/post-in-database/post-fini.php");
        break;

        case "post-chips";
        include("pages/post-in-database/post-chips.php"); 
        break;

        case "list-valores";
        include("pages/listas/list-valores.php");
        break;

        case "list-trento";
        include("pages/listas/list-trento.php");
        break;      
        
        case "list-chips";
        include("pages/listas/list-chips.php");
        break;

        case "list-pacoca";
        include("pages/listas/list-pacoca.php");
        break;  

        case "list-fini";
        include("pages/listas/list-fini.php");
        break;

        case "del-valores";
        include("pages/apagar_deletar/del-valores.php");
        break;

        case "del-trento";
        include("pages/apagar_deletar/del-trento.php");
        break;

        case "del-pacoca";
        include("pages/apagar_deletar/del-pacoca.php");
        break;

        case "del-fini";
        include("pages/apagar_deletar/del-fini.php");
        break;

        case "del-chips";
        include("pages/apagar_deletar/del-chips.php");
        break;

        case "apaga-valores";
        include("pages/apagar_deletar/apaga-valores.php");
        break;

        case "apaga-trento";
        include("pages/apagar_deletar/apaga-trento.php");
        break;

        case "apaga-pacoca";
        include("pages/apagar_deletar/apaga-pacoca.php");
        break;

        case "apaga-fini";
        include("pages/apagar_deletar/apaga-fini.php");
        break;

        case "apaga-chips";
        include("pages/apagar_deletar/apaga-chips.php");
        break;

        }
    }
  
?>

</body>

<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/popper.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</html>