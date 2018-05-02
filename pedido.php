<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Realizar Pedido</title>
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
        <?php session_start(); ?>
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
                                </div> Império do Açaí</div>
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
                <form action="" method="POST" enctype="multipart/form-data">
                    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-12">
                                <div class="card sameheight-item">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Pedido </h3>
                                        </div>
                                        <section class="section">
                                            <p>  </p>
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-8">
                                                    <form role="form">
                                                        <div class="form-group">
                                                            <label class="control-label">Insira o Telefone</label>
                                                            <input id="telefone" name="telefone" type="text" class="form-control underlined" placeholder="Telefone" maxlength="11" required> </div>
                                                            <p style="font-size:12px;">Para o uso correto do sistema colocar <u>Celular com</u> <font color="Redo">13</font> e <u>Telefone sem</u> <font color="Red">13</font></p>
                                                </div>
                                                <div class="col-6 col-md-9">
                                                    <div class=""></div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <section class="section">
                                                        <button type="submit" class="btn btn-primary-outline">Avançar</button>
                                                    </section>
                                                    </form>
                                                </div>
                                        </section>
<?php

include $_SERVER['DOCUMENT_ROOT']."/dist/includes/banco.php";

    if(isset($_POST['telefone'])){

        $tel = $_POST['telefone'];

        $_SESSION['tel'] = $tel;


        $get = mysqli_query($link, "SELECT cd_tel,cd_cel FROM tb_clientes WHERE cd_tel = $tel OR cd_cel = $tel");
        $id = mysqli_query($link,"SELECT cd_cliente from tb_clientes WHERE cd_tel = $tel OR cd_cel =$tel");
        $num =  mysqli_num_rows($get);

        if($num == 1){
            echo '<script>location.href="endereco.php";</script>';
        }else echo '<script>location.href="cadastro.php";</script>';
    }

    

    
?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>  
                    </form>    

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
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
