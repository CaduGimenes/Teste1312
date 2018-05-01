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
                                            $_SESSION['tamanho_acai'];
                                            @$_SESSION['caldasBD'];
                                            $_SESSION['complementosBD'];
                                            $_SESSION['frutasBD'];
                                           
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
                                                        
                                                        <div class="col-6 col-md-4">
                                                                <br><label class="control-label"><u><font color="purple">Frutas</font></u></label><br>
                                                                <?php if(isset($_SESSION['frutas'])){echo $_SESSION['frutas'];}?>
                                                            </div>
                                                        <div class="col-6 col-md-4">
                                                                <br><label class="control-label"><u><font color="purple">Caldas</font></u></label><br>
                                                                <?php if(isset($_SESSION['caldas'])){echo $_SESSION['caldas']."<br />";} ?>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                                <br><label class="control-label"><u><font color="purple">Complementos</font></u></label><br>
                                                                <?php if(isset($_SESSION['complementos'])){echo $_SESSION['complementos']."<br />";} ?>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                                <br><label class="control-label"><u><font color="purple">Sorvetes</font></u></label><br>
                                                                <?php if(isset($_SESSION['sorvete'])){echo $_SESSION['sorvete'];} ?>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                        
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                        
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                        
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                        <div class="form-group">
                                                                        <label class="control-label">Valor Pago: </label>
                                                                        <input type="text" id="valor_troco" name="valor_troco" class="form-control boxed"> </div>
                                                                        <p style="font-size:12px;">Adicionar <b>.</b> para centavos&nbsp; <b>Ex:</b> 17.50</p>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                                <div class="form-group">
                                                                        <label class="control-label">Total:</label>
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