<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cadastro</title>
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
        include $_SERVER['DOCUMENT_ROOT']."/dist/includes/banco.php";
        ?>
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
                    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-12">
                                <div class="card sameheight-item">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Cadastro de Clientes </h3>
                                        </div>
                                        <section class="section">
                                            <form action="" method="POST">
                                                    <div class="row">
                                                        <div class="col-6 col-md-6">
                                                            
                                                                <div class="form-group">
                                                                    <label class="control-label">Nome<font color="red">*</font></label>
                                                                    <input type="text" id="nome" name="nome" class="form-control underlined" placeholder="Nome" required > </div>
                                                                
                                                            
                                                        </div>
                                                        
                                                        <div class="col-6 col-md-3">
                                                                
                                                                    <div class="form-group">
                                                                        <label class="control-label">Telefone</label>
                                                                        <?php
                                                                        $tel = $_SESSION['tel'];

                                                                        if(strlen($tel) > 0 && strlen($tel) <= 10 ){
                                                                            echo "<input type='text' id='tele' name='tele' class='form-control underlined' placeholder='Telefone' value='$tel' maxlength='15'>";
                                                                        }else{
                                                                            echo "<input type='text' id='tele' name='tele' class='form-control underlined' placeholder='Telefone' value='' maxlength='15'>";
                                                                        }
                                                                        ?>
                                                                    </div>                                                     
                                                            </div>
                                                            <div class="col-6 col-md-3">
                                                                    
                                                                        <div class="form-group">
                                                                            <label class="control-label">Celular</label>
                                                                            <?php
                                                                        $tel = $_SESSION['tel'];

                                                                        if(strlen($tel) > 0 and strlen($tel) == 11 ){
                                                                            echo "<input type='text' id='cel' name='cel' class='form-control underlined' placeholder='Celular' value='$tel' maxlength='15'>";
                                                                        }else{
                                                                            echo "<input type='text' id='cel' name='cel' class='form-control underlined' placeholder='Celular' value='' maxlength='15'>";
                                                                        }
                                                                        ?>
                                                                         </div>
                                                                    
                                                                </div>
                                                                <div class="col-md-12">
                                                            <br><h3 class="title"> Endereço</h3><br>
                                                        </div>
                                                        <div class="col-6 col-md-5">
                                                                
                                                                    <div class="form-group">
                                                                        <label class="control-label">Rua<font color="red">*</font></label>
                                                                        <input type="text" id="rua" name="rua" class="form-control underlined" placeholder="Rua" required> </div>
                                                                
                                                            </div>
                                                            <div class="col-6 col-md-5">
                                                                    
                                                                        <div class="form-group">
                                                                            <label class="control-label">Bairro<font color="red">*</font></label>
                                                                            <select required class="form-control" name="bairro" id="bairro">
                                                                           <option>&nbsp;-- Selecionar --&nbsp;&nbsp;&nbsp;</option>
                                                                           <?php

                                                                           $sql = mysqli_query($link,"SELECT * FROM tb_endereco ORDER BY nm_bairro ASC");

                                                                            while ($retorna = mysqli_fetch_assoc($sql)) {
                                                                            $bairro = $retorna['nm_bairro'];
                                                                            echo "<option value='$bairro'>$bairro</option>";

                                                                            }
                                                                        ?>
                                                                       </select>
                                                                        </div>
                                                                    
                                                                </div>
                                                                <div class="col-6 col-md-5">
                                                                       
                                                                            <div class="form-group">
                                                                                <label class="control-label">Referência</label>
                                                                                <input type="text" id="ref" name="ref" class="form-control underlined" placeholder="Referência"> </div>
                                                                        
                                                                    </div>
                                                                    <div class="col-6 col-md-3">
                                                                            
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Número<font color="red">*</font></label>
                                                                                    <input type="text" id="casa" name="casa" class="form-control underlined" placeholder="Número" required> </div>
                                                                            
                                                                        </div>
                                                                        <div class="col-6 col-sm-3">
        
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
                                                                        <br><button type="submit" value="submit" class="btn btn-primary-outline">Avançar</button>
                                                                    </section>
                                                                </div>

                                            </form>
                
                                                        <div class="col-6 col-md-4">
                                                            <br><p>Campos com <font color="red">*</font> são obrigatórios...</p>
                                                        </div>
                                                        </div>


                                            
                                            
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 



                            if(isset($_POST['nome'], $_POST['rua'],$_POST['tele'],$_POST['cel'],$_POST['bairro'],$_POST['ref'],$_POST['casa'])){

                            $nome = $_POST['nome'];

                            $tele = $_POST['tele'];
                            $cel = $_POST['cel'];
                            
                           
                            $rua =  $_POST['rua'];
                            $bairro = $_POST['bairro'];
                            $ref = $_POST['ref'];
                            $casa =  $_POST['casa'];

                            
                            $_SESSION['tel'];
                            
                            $get = mysqli_query($link, "SELECT * FROM tb_clientes WHERE cd_tel = $tele OR cd_cel = $cel");

                            $num =  mysqli_num_rows($get);


                            if($num == 1){
                                echo "<script>alert('Cliente já possui cadastro!')</script>";
                            }else{

                                if(empty($nome) || empty($rua)){

                                }else{
                                    $insert = mysqli_query($link,"INSERT INTO tb_clientes(nm_cliente,cd_tel,cd_cel,nm_rua,nm_bairro,cd_casa,nm_ref) VALUES('$nome', '$tele', '$cel', '$rua','$bairro', '$casa', '$ref')");
                                    echo '<script>location.href="escolha_pedido.php";</script>';
                                    exit();
                                }

                           
                            
                            
                            }
                        }
                            
                            mysqli_close($link);
                            
                        
                        ?>
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
            function Voltar()
            {
                location.href="pedido.php";
            }

            
        </script>
        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>