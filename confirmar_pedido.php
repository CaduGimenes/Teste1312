<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Confirmar Pedido</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/ico.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/vendor.css">
        <!-- Theme initialization -->
        <script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
            var themeName = themeSettings.themeName || '';
            if (themeName)
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app-' + themeName + '.css">');
            }
            else
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app.css">');
            }
        </script>
    </head>
    <body>
        <?php session_start(); 
        error_reporting(0);
        ini_set('display_errors', 0 );?>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">
                    <div class="header-block header-block-collapse d-lg-none d-xl-none">
                        <button class="collapse-btn" id="sidebar-collapse-btn">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div class="header-block header-block-nav">
                                <ul class="nav-profile">
                                <?php 
                                        if(isset($_SESSION['admin'])){
                                            echo " <li class='profile dropdown'>
                                            <a class='nav-link dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>
                                                <span class='name'>".$_SESSION['admin']." </span>
                                            </a>
                                            <div class='dropdown-menu profile-dropdown-menu' aria-labelledby='dropdownMenu1'>
                                            <a class='dropdown-item' href='alterar_senha.php'>
                                                <i class='fa fa-unlock-alt icon'></i> Alterar Senha </a>    
                                            <a class='dropdown-item' href='logout.php'>
                                                <i class='fa fa-times-circle-o icon'></i> Sair </a>
                                               
                                            </div>
                                        </li>";
                                        }else{
                                            echo "<li class='profile dropdown'>
                                            <a class='nav-link' data-toggle='dropdown' href='login.php' role='button' aria-haspopup='true' aria-expanded='false'>
                                                <a href='login.php'><span class='name'> Login </span></a>
                                            </a>
                                            
                                        </li>";
                                        }
                                    ?>
                                </ul>
                            </div>
                    
                </header>
                <aside class="sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand">
                                <div class="logo">
                                    <span class="l l1"></span>
                                    <span class="l l2"></span>
                                    <span class="l l3"></span>
                                    <span class="l l4"></span>
                                    <span class="l l5"></span>
                                </div> Império do Açaí </div>
                        </div>
                        <nav class="menu">
                            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                            <?php 

                                        if(isset($_SESSION['admin'])){

                                            echo " <li class='sidebar-nav'>
                                            <a href='index.php'>
                                                <i class='fa fa-home'></i> Painel </a>
                                        </li>
                                        <li>
                                            <a href='adicionar_endereco.php'>
                                                <i class='fa fa-globe'></i> Gerenciar Endereços
                                            </a>
                                        </li>
                                        <li>
                                            <a href='clientes.php'>
                                                <i class='fa fa-group'></i> Clientes
                                            </a>
                                        </li>
                                        <li class='active'>
                                            <a href='pedido.php'>
                                                <i class='fa fa-pencil-square-o'></i> Pedido </a>
                                        </li>";

                                        }else{
                                            echo "<li class='active'>
                                            <a href='pedido.php'>
                                                <i class='fa fa-pencil-square-o'></i> Pedido </a>
                                        </li>";
                                        }
                                
                                ?>
                                
                            </ul>
                        </nav>
                    </div>
                    <footer class="sidebar-footer">
                        <ul class="sidebar-menu metismenu" id="customize-menu">
                            <li>
                                <ul>
                                    <li class="customize">
                                        <div class="customize-item">
                                            <div class="row customize-header">
                                                <div class="col-4"> </div>
                                                <div class="col-4">
                                                    <label class="title">Fixo</label>
                                                </div>
                                                <div class="col-4">
                                                    <label class="title">Statico</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label class="title">Barra:</label>
                                                </div>
                                                <div class="col-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="sidebarPosition" value="sidebar-fixed">
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="col-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="sidebarPosition" value="">
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label class="title">Menu:</label>
                                                </div>
                                                <div class="col-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="headerPosition" value="header-fixed">
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="col-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="headerPosition" value="">
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label class="title">Rodapé:</label>
                                                </div>
                                                <div class="col-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="footerPosition" value="footer-fixed">
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="col-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="footerPosition" value="">
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="customize-item">
                                            <ul class="customize-colors">
                                                <li>
                                                    <span class="color-item color-red" data-theme="red"></span>
                                                </li>
                                                <li>
                                                    <span class="color-item color-orange" data-theme="orange"></span>
                                                </li>
                                                <li>
                                                    <span class="color-item color-green active" data-theme=""></span>
                                                </li>
                                                <li>
                                                    <span class="color-item color-seagreen" data-theme="seagreen"></span>
                                                </li>
                                                <li>
                                                    <span class="color-item color-blue" data-theme="blue"></span>
                                                </li>
                                                <li>
                                                    <span class="color-item color-purple" data-theme="purple"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                <a href="">
                                    <i class="fa fa-cog"></i> Personalizar </a>
                            </li>
                        </ul>
                    </footer>
                </aside>
               
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content dashboard-page">
                    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-12">
                                <div class="card sameheight-item">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Confirmar Informações </h3>
                                        </div>
                                        <?php
                                            include $_SERVER['DOCUMENT_ROOT']."/dist/includes/banco.php";
                                            
                                            $_SESSION['tel'];
                                            $valor_acai = $_SESSION['valor_acai'];
                                            $valor_acai_2 = $_SESSION['valor_acai_2'];
                                            $valor_acai_3 = $_SESSION['valor_acai_3'];
                                            $valor_acai_4 = $_SESSION['valor_acai_4'];
                                            $valor_acai_5 = $_SESSION['valor_acai_5'];
                                            $valor_acai_6 = $_SESSION['valor_acai_6'];
                                            $valor_acai_7 = $_SESSION['valor_acai_7'];
                                            $valor_acai_8 = $_SESSION['valor_acai_8'];
                                            $valor_acai_9 = $_SESSION['valor_acai_9'];
                                            $valor_acai_10 = $_SESSION['valor_acai_10'];
                                            $valor_acai_11 = $_SESSION['valor_acai_11'];
                                            $valor_acai_12 = $_SESSION['valor_acai_12'];
                                            $valor_acai_13 = $_SESSION['valor_acai_13'];
                                            $valor_acai_14 = $_SESSION['valor_acai_14'];
                                            $valor_acai_15 = $_SESSION['valor_acai_15'];
                                            $valor_acai_16 = $_SESSION['valor_acai_16'];
                                            $valor_acai_17 = $_SESSION['valor_acai_17'];
                                            $valor_acai_18 = $_SESSION['valor_acai_18'];
                                            $valor_acai_19 = $_SESSION['valor_acai_19'];
                                            $valor_acai_20 = $_SESSION['valor_acai_20'];

                                            //Pedido 1
                                            if($valor_acai == 7){
                                                $tamanho = 'Mini';
                                                $_SESSION['pedido1'] = $tamanho;
                                            }else if($valor_acai == 10){
                                                $tamanho = 'P';
                                                $_SESSION['pedido1'] = $tamanho;
                                            }else if($valor_acai == 14){
                                                $tamanho = 'M';
                                                $_SESSION['pedido1'] = $tamanho;
                                            }else if($valor_acai == 23){
                                                $tamanho = 'G';
                                                $_SESSION['pedido1'] = $tamanho;
                                            }

                                            //Pedido 2
                                            if($valor_acai_2 == 7){
                                                $tamanho_2 = 'Mini';
                                                $_SESSION['pedido2'] = $tamanho_2;
                                            }else if($valor_acai_2 == 10){
                                                $tamanho_2 = 'P';
                                                $_SESSION['pedido2'] = $tamanho_2;
                                            }else if($valor_acai_2 == 14){
                                                $tamanho_2 = 'M';
                                                $_SESSION['pedido2'] = $tamanho_2;
                                            }else if($valor_acai_2 == 23){
                                                $tamanho_2 = 'G';
                                                $_SESSION['pedido2'] = $tamanho_2;
                                            }

                                            //Pedido 3
                                            if($valor_acai_3 == 7){
                                                $tamanho_3 = 'Mini';
                                                $_SESSION['pedido3'] = $tamanho_3;
                                            }else if($valor_acai_3 == 10){
                                                $tamanho_3 = 'P';
                                                $_SESSION['pedido3'] = $tamanho_3;
                                            }else if($valor_acai_3 == 14){
                                                $tamanho_3 = 'M';
                                                $_SESSION['pedido3'] = $tamanho_3;
                                            }else if($valor_acai_3 == 23){
                                                $tamanho_3 = 'G';
                                                $_SESSION['pedido3'] = $tamanho_3;
                                            }

                                            //Pedido 4
                                            if($valor_acai_4 == 7){
                                                $tamanho_4 = 'Mini';
                                                $_SESSION['pedido4'] = $tamanho_4;
                                            }else if($valor_acai_4 == 10){
                                                $tamanho_4 = 'P';
                                                $_SESSION['pedido4'] = $tamanho_4;
                                            }else if($valor_acai_4 == 14){
                                                $tamanho_4 = 'M';
                                                $_SESSION['pedido4'] = $tamanho_4;
                                            }else if($valor_acai_4 == 23){
                                                $tamanho_4 = 'G';
                                                $_SESSION['pedido4'] = $tamanho_4;
                                            }

                                            //Pedido 5
                                            if($valor_acai_5 == 7){
                                                $tamanho_5 = 'Mini';
                                                $_SESSION['pedido5'] = $tamanho_5;
                                            }else if($valor_acai_5 == 10){
                                                $tamanho_5 = 'P';
                                                $_SESSION['pedido5'] = $tamanho_5;
                                            }else if($valor_acai_5 == 14){
                                                $tamanho_5 = 'M';
                                                $_SESSION['pedido5'] = $tamanho_5;
                                            }else if($valor_acai_5 == 23){
                                                $tamanho_5 = 'G';
                                                $_SESSION['pedido5'] = $tamanho_5;
                                            }

                                            //Pedido 6
                                            if($valor_acai_6 == 7){
                                                $tamanho_6 = 'Mini';
                                                $_SESSION['pedido6'] = $tamanho_6;
                                            }else if($valor_acai_6 == 10){
                                                $tamanho_6 = 'P';
                                                $_SESSION['pedido6'] = $tamanho_6;
                                            }else if($valor_acai_6 == 14){
                                                $tamanho_6 = 'M';
                                                $_SESSION['pedido6'] = $tamanho_6;
                                            }else if($valor_acai_6 == 23){
                                                $tamanho_6 = 'G';
                                                $_SESSION['pedido6'] = $tamanho_6;
                                            }

                                            //Pedido 7
                                            if($valor_acai_7 == 7){
                                                $tamanho_7 = 'Mini';
                                                $_SESSION['pedido7'] = $tamanho_7;
                                            }else if($valor_acai_7 == 10){
                                                $tamanho_7 = 'P';
                                                $_SESSION['pedido7'] = $tamanho_7;
                                            }else if($valor_acai_7 == 14){
                                                $tamanho_7 = 'M';
                                                $_SESSION['pedido7'] = $tamanho_7;
                                            }else if($valor_acai_7 == 23){
                                                $tamanho_7 = 'G';
                                                $_SESSION['pedido7'] = $tamanho_7;
                                            }

                                            //Pedido 8
                                            if($valor_acai_8 == 7){
                                                $tamanho_8 = 'Mini';
                                                $_SESSION['pedido8'] = $tamanho_8;
                                            }else if($valor_acai_8 == 10){
                                                $tamanho_8 = 'P';
                                                $_SESSION['pedido8'] = $tamanho_8;
                                            }else if($valor_acai_8 == 14){
                                                $tamanho_8 = 'M';
                                                $_SESSION['pedido8'] = $tamanho_8;
                                            }else if($valor_acai_8 == 23){
                                                $tamanho_8 = 'G';
                                                $_SESSION['pedido8'] = $tamanho_8;
                                            }

                                            //Pedido 9
                                            if($valor_acai_9 == 7){
                                                $tamanho_9 = 'Mini';
                                                $_SESSION['pedido9'] = $tamanho_9;
                                            }else if($valor_acai_9 == 10){
                                                $tamanho_9 = 'P';
                                                $_SESSION['pedido9'] = $tamanho_9;
                                            }else if($valor_acai_9 == 14){
                                                $tamanho_9 = 'M';
                                                $_SESSION['pedido9'] = $tamanho_9;
                                            }else if($valor_acai_9 == 23){
                                                $tamanho_9 = 'G';
                                                $_SESSION['pedido9'] = $tamanho_9;
                                            }

                                            //Pedido 10
                                            if($valor_acai_10 == 7){
                                                $tamanho_10 = 'Mini';
                                                $_SESSION['pedido10'] = $tamanho_10;
                                            }else if($valor_acai_10 == 10){
                                                $tamanho_10 = 'P';
                                                $_SESSION['pedido10'] = $tamanho_10;
                                            }else if($valor_acai_10 == 14){
                                                $tamanho_10 = 'M';
                                                $_SESSION['pedido10'] = $tamanho_10;
                                            }else if($valor_acai_10 == 23){
                                                $tamanho_10 = 'G';
                                                $_SESSION['pedido10'] = $tamanho_10;
                                            }

                                            //Pedido 11
                                            if($valor_acai_11 == 7){
                                                $tamanho_11 = 'Mini';
                                                $_SESSION['pedido11'] = $tamanho_11;
                                            }else if($valor_acai_11 == 10){
                                                $tamanho_11 = 'P';
                                                $_SESSION['pedido11'] = $tamanho_11;
                                            }else if($valor_acai_11 == 14){
                                                $tamanho_11 = 'M';
                                                $_SESSION['pedido11'] = $tamanho_11;
                                            }else if($valor_acai_11 == 23){
                                                $tamanho_11 = 'G';
                                                $_SESSION['pedido11'] = $tamanho_11;
                                            }

                                            //Pedido 12
                                            if($valor_acai_12 == 7){
                                                $tamanho_12 = 'Mini';
                                                $_SESSION['pedido12'] = $tamanho_12;
                                            }else if($valor_acai_12 == 10){
                                                $tamanho_12 = 'P';
                                                $_SESSION['pedido12'] = $tamanho_12;
                                            }else if($valor_acai_12 == 14){
                                                $tamanho_12 = 'M';
                                                $_SESSION['pedido12'] = $tamanho_12;
                                            }else if($valor_acai_12 == 23){
                                                $tamanho_12 = 'G';
                                                $_SESSION['pedido12'] = $tamanho_12;
                                            }

                                            //Pedido 13
                                            if($valor_acai_13 == 7){
                                                $tamanho_13 = 'Mini';
                                                $_SESSION['pedido13'] = $tamanho_13;
                                            }else if($valor_acai_13 == 10){
                                                $tamanho_13 = 'P';
                                                $_SESSION['pedido13'] = $tamanho_13;
                                            }else if($valor_acai_13 == 14){
                                                $tamanho_13 = 'M';
                                                $_SESSION['pedido13'] = $tamanho_13;
                                            }else if($valor_acai_13 == 23){
                                                $tamanho_13 = 'G';
                                                $_SESSION['pedido13'] = $tamanho_13;
                                            }

                                            //Pedido 14
                                            if($valor_acai_14 == 7){
                                                $tamanho_14 = 'Mini';
                                                $_SESSION['pedido14'] = $tamanho_14;
                                            }else if($valor_acai_14 == 10){
                                                $tamanho_14 = 'P';
                                                $_SESSION['pedido14'] = $tamanho_14;
                                            }else if($valor_acai_14 == 14){
                                                $tamanho_14 = 'M';
                                                $_SESSION['pedido14'] = $tamanho_14;
                                            }else if($valor_acai_14 == 23){
                                                $tamanho_14 = 'G';
                                                $_SESSION['pedido14'] = $tamanho_14;
                                            }

                                            //Pedido 15
                                            if($valor_acai_15 == 7){
                                                $tamanho_15 = 'Mini';
                                                $_SESSION['pedido15'] = $tamanho_15;
                                            }else if($valor_acai_15 == 10){
                                                $tamanho_15 = 'P';
                                                $_SESSION['pedido15'] = $tamanho_15;
                                            }else if($valor_acai_15 == 14){
                                                $tamanho_15 = 'M';
                                                $_SESSION['pedido15'] = $tamanho_15;
                                            }else if($valor_acai_15 == 23){
                                                $tamanho_15 = 'G';
                                                $_SESSION['pedido15'] = $tamanho_15;
                                            }

                                            //Pedido 16
                                            if($valor_acai_16 == 7){
                                                $tamanho_16 = 'Mini';
                                                $_SESSION['pedido16'] = $tamanho_16;
                                            }else if($valor_acai_16 == 10){
                                                $tamanho_16 = 'P';
                                                $_SESSION['pedido16'] = $tamanho_16;
                                            }else if($valor_acai_16 == 14){
                                                $tamanho_16 = 'M';
                                                $_SESSION['pedido16'] = $tamanho_16;
                                            }else if($valor_acai_16 == 23){
                                                $tamanho_16 = 'G';
                                                $_SESSION['pedido16'] = $tamanho_16;
                                            }

                                            //Pedido 17
                                            if($valor_acai_17 == 7){
                                                $tamanho_17 = 'Mini';
                                                $_SESSION['pedido17'] = $tamanho_17;
                                            }else if($valor_acai_17 == 10){
                                                $tamanho_17 = 'P';
                                                $_SESSION['pedido17'] = $tamanho_17;
                                            }else if($valor_acai_17 == 14){
                                                $tamanho_17 = 'M';
                                                $_SESSION['pedido17'] = $tamanho_17;
                                            }else if($valor_acai_17 == 23){
                                                $tamanho_17 = 'G';
                                                $_SESSION['pedido17'] = $tamanho_17;
                                            }

                                            //Pedido 18
                                            if($valor_acai_18 == 7){
                                                $tamanho_18 = 'Mini';
                                                $_SESSION['pedido18'] = $tamanho_18;
                                            }else if($valor_acai_18 == 10){
                                                $tamanho_18 = 'P';
                                                $_SESSION['pedido18'] = $tamanho_18;
                                            }else if($valor_acai_18 == 14){
                                                $tamanho_18 = 'M';
                                                $_SESSION['pedido18'] = $tamanho_18;
                                            }else if($valor_acai_18 == 23){
                                                $tamanho_18 = 'G';
                                                $_SESSION['pedido18'] = $tamanho_18;
                                            }

                                            //Pedido 19
                                            if($valor_acai_19 == 7){
                                                $tamanho_19 = 'Mini';
                                                $_SESSION['pedido19'] = $tamanho_19;
                                            }else if($valor_acai_19 == 10){
                                                $tamanho_19 = 'P';
                                                $_SESSION['pedido19'] = $tamanho_19;
                                            }else if($valor_acai_19 == 14){
                                                $tamanho_19 = 'M';
                                                $_SESSION['pedido19'] = $tamanho_19;
                                            }else if($valor_acai_19 == 23){
                                                $tamanho_19 = 'G';
                                                $_SESSION['pedido19'] = $tamanho_19;
                                            }

                                            //Pedido 20
                                            if($valor_acai_20 == 7){
                                                $tamanho_20 = 'Mini';
                                                $_SESSION['pedido20'] = $tamanho_20;
                                            }else if($valor_acai_20 == 10){
                                                $tamanho_20 = 'P';
                                                $_SESSION['pedido20'] = $tamanho_20;
                                            }else if($valor_acai_20 == 14){
                                                $tamanho_20 = 'M';
                                                $_SESSION['pedido20'] = $tamanho_20;
                                            }else if($valor_acai_20 == 23){
                                                $tamanho_20 = 'G';
                                                $_SESSION['pedido20'] = $tamanho_20;
                                            }
                                           
                                            $get = mysqli_query($link,"SELECT * FROM tb_clientes WHERE cd_tel =".$_SESSION['tel']." OR cd_cel =".$_SESSION['tel']."");
                                            while($row = mysqli_fetch_assoc($get)){
                                                
                                        ?>
                                        <section class="section">
                                            <form action="impressao.php" method="POST">
                                                    <div class="row">
                                                        <div class="col-6 col-md-6">
                                                            
                                                                <div class="form-group">
                                                                    <label class="control-label">Nome</label>
                                                                    <input type="text" id="nome" name="nome" readonly="readonly" class="form-control boxed" value="<?php echo $row['nm_cliente']; ?> " > </div>
                                                                
                                                            
                                                        </div>
                                                        
                                                        <div class="col-6 col-md-3">
                                                                
                                                                    <div class="form-group">
                                                                        <label class="control-label">Telefone</label>
                                                                        <input type="text" id="tel" name="tel" readonly="readonly" class="form-control boxed" value="<?php if($row['cd_tel'] == 0){ echo "";}else{echo $row['cd_tel'];}  ?> "> </div>
                                                                
                                                            </div>
                                                        
                                                            <div class="col-6 col-md-3">
                                                                    
                                                                        <div class="form-group">
                                                                            <label class="control-label">Celular</label>
                                                                            <input type="text" id="cel" name="cel" readonly="readonly" class="form-control boxed" value="<?php if($row['cd_cel'] == 0){ echo "";}else{echo $row['cd_cel'];} ?>" > </div>
                                                                    
                                                                </div>
                                                                <div class="col-md-12">
                                                            <br><h3 class="title"> Endereço</h3><br>
                                                        </div>
                                                        <div class="col-6 col-md-5">
                                                                
                                                                    <div class="form-group">
                                                                        <label class="control-label">Rua</label>
                                                                        <input type="text" id="rua" name="rua" readonly="readonly" class="form-control boxed" value="<?php echo $row['nm_rua']; ?> "  > </div>
                                                                
                                                            </div>
                                                            <div class="col-6 col-md-5">
                                                                    
                                                                        <div class="form-group">
                                                                            <label class="control-label">Bairro</label>
                                                                            <input type="text" id="bairro" name="bairro" readonly="readonly" class="form-control boxed" value="<?php echo $row['nm_bairro']; ?>" > </div>
                                                                    
                                                                </div>
                                                                <div class="col-6 col-md-5">
                                                                       
                                                                            <div class="form-group">
                                                                                <label class="control-label">Referência</label>
                                                                                <input type="text" id="ref" name="ref" readonly="readonly" class="form-control boxed" value="<?php echo $row['nm_ref']; ?> " > </div>
                                                                        
                                                                    </div>
                                                                    <div class="col-6 col-md-3">
                                                                            
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Número</label>
                                                                                    <input type="text" id="num_casa" name="num_casa" readonly="readonly" class="form-control boxed"  value=" <?php echo $row['cd_casa'];} ?>" > </div>
                                                                            
                                                                        </div>
                                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
                                                        <div class="col-md-12">
                                                            <br><h3 class="title"> Pedido</h3><br>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                                <br><label class="control-label"><u><b>Tamanhos</b></u></label><br>
                                                                <?php if(isset($tamanho)){
                                                                    echo "<hr>\nPedido 1 '$tamanho'";
                                                                    }
                                                                    if(isset($tamanho_2)){
                                                                        echo "<hr>\nPedido 2 '$tamanho_2'";
                                                                    }
                                                                    if(isset($tamanho_3)){
                                                                        echo "<hr>\nPedido 3 '$tamanho_3'";
                                                                    }
                                                                    if(isset($tamanho_4)){
                                                                        echo "<hr>\nPedido 4 '$tamanho_4'";
                                                                    }
                                                                    if(isset($tamanho_5)){
                                                                        echo "<hr>\nPedido 5 '$tamanho_5'";
                                                                    }
                                                                    if(isset($tamanho_6)){
                                                                        echo "<hr>\nPedido 6 '$tamanho_6'";
                                                                    }
                                                                    if(isset($tamanho_7)){
                                                                        echo "<hr>\nPedido 7 '$tamanho_7'";
                                                                    }
                                                                    if(isset($tamanho_8)){
                                                                        echo "<hr>\nPedido 8 '$tamanho_8'";
                                                                    }
                                                                    if(isset($tamanho_9)){
                                                                        echo "<hr>\nPedido 9 '$tamanho_9'";
                                                                    }
                                                                    if(isset($tamanho_10)){
                                                                        echo "<hr>\nPedido 10 '$tamanho_10'";
                                                                    }
                                                                    if(isset($tamanho_11)){
                                                                        echo "<hr>\nPedido 11 '$tamanho_11'";
                                                                    }
                                                                    if(isset($tamanho_12)){
                                                                        echo "<hr>\nPedido 12 '$tamanho_12'";
                                                                    }
                                                                    if(isset($tamanho_13)){
                                                                        echo "<hr>\nPedido 13 '$tamanho_13'";
                                                                    }
                                                                    if(isset($tamanho_14)){
                                                                        echo "<hr>\nPedido 14 '$tamanho_14'";
                                                                    }
                                                                    if(isset($tamanho_15)){
                                                                        echo "<hr>\nPedido 15 '$tamanho_15'";
                                                                    }if(isset($tamanho_16)){
                                                                        echo "<hr>\nPedido 16 '$tamanho_16'";
                                                                    }
                                                                    if(isset($tamanho_17)){
                                                                        echo "<hr>\nPedido 17 '$tamanho_17'";
                                                                    }
                                                                    if(isset($tamanho_18)){
                                                                        echo "<hr>\nPedido 18 '$tamanho_18'";
                                                                    }
                                                                    if(isset($tamanho_19)){
                                                                        echo "<hr>\nPedido 19 '$tamanho_19'";
                                                                    }
                                                                    if(isset($tamanho_20)){
                                                                        echo "<hr>\nPedido 20 '$tamanho_20'";
                                                                    }
                                                                    ?>
                                                            </div>
                                                        
                                                        <div class="col-6 col-md-4">
                                                                
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                                
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                                
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                                
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                        
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                        
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                        
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                        <div class="form-group">
                                                                        <br><br><br><label class="control-label">Valor Pago: </label>
                                                                        <input type="text" id="valor_troco" name="valor_troco" class="form-control boxed"> </div>
                                                                        <p style="font-size:12px;">Adicionar <b>.</b> para centavos&nbsp; <b>Ex:</b> 17.50</p>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                                <div class="form-group">
                                                                <br><br><br><label class="control-label">Total:</label>
                                                                        <input type="text" id="valor_total" name="valor_total" readonly="readonly" class="form-control boxed"  value="<?php echo number_format($_SESSION['total'], 2, ',', '.'); ?>" > </div>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                        
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                            <label>
                                                                <input name="debito" class="checkbox" type="checkbox" value="debito">
                                                                <span>Débito</span>
                                                            </label>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                        
                                                        </div>
                                                        <div class="col-6 col-md-3">
                                                                <section class="section">
                                                                        <br><button type="button" class="btn btn-primary-outline" onClick="Voltar()">Voltar</button>
                                                                    </section>
                                                        </div>
                                                        <div class="col-6 col-md-3">
        
                                                            </div>
                                                            <div class="col-6 col-md-3">
            
                                                            </div>
                                                            <div class="col-6 col-md-1">
            
                                                            </div>
                                                            <div class="col-6 col-md-1">
                                                                    <section class="section">
                                                                        <br><button type="submit" value="submit" class="btn btn-primary-outline">Confirmar</button>
                                                                    </section>
                                                                </div>

                                            </form>
                
                                                        
                                                        </div>


                                            
                                            
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>
                <footer class="footer">
                    <div class="footer-block buttons">
                    </div>
                    <div class="footer-block author">
                        <ul>
                            <li> Criado por
                                <a href="https://github.com/CaduGimenes">Carlos Gimenes</a>
                            </li>
                            
                        </ul>
                    </div>
                </footer>
                
                <!-- /.modal -->
                
                <!-- /.modal -->
            
        </div>
       
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script type="text/javascript">
             $(function() {
            $('#valor_troco').maskMoney();
            })

            function Voltar()
            {
                location.href="escolha_pedido.php";
            }

        </script>
        
        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>