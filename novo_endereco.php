<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Novo Endereço</title>
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
        <?php session_start() ?>
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
                                            <h3 class="title"> Novo Endereço </h3>
                                        </div>
                                        <section class="section">
                                            <form action="" method="POST">
                                                    <div class="row">
                                                        
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
                                                                           <option value="Alemoa">Alemoa</option>
                                                                           <option value="Biquinha">Biquinha</option>
                                                                           <option value="Boa Vista">Boa Vista</option>
                                                                           <option value="Bom Retiro">Bom Retiro</option>
                                                                           <option value="Campo Grande">Campo Grande</option>
                                                                           <option value="Caneleira">Caneleira</option>
                                                                           <option value="Canal 1">Canal 1</option>
                                                                           <option value="Canal 2">Canal 2</option>
                                                                           <option value="Canal 3">Canal 3</option>
                                                                           <option value="Canal 4">Canal 4</option>
                                                                           <option value="Canal 5">Canal 5</option>
                                                                           <option value="Cascatinha">Cascatinha</option>
                                                                           <option value="Catarina">Catarina</option>
                                                                           <option value="Caxeta">Caxeta</option>
                                                                           <option value="Centro Santos">Centro Santos</option>
                                                                           <option value="Centro São Vicente">Centro São Vicente</option>
                                                                           <option value="Cidade Nautica">Cidade Nautica</option>
                                                                           <option value="Conselheiro Nébias">Conselheiro Nébias</option>
                                                                           <option value="Divisa Praia">Divisa Praia</option>
                                                                           <option value="Divisa Tambores">Divisa Tambores</option>
                                                                           <option value="Esplanada">Esplanada</option>
                                                                           <option value="Fatima">Fatima</option>
                                                                           <option value="Gonzaga">Gonzaga</option>
                                                                           <option value="Gonzaguinha">Gonzaguinha</option>
                                                                           <option value="Ilha Porchat">Ilha Porchat</option>
                                                                           <option value="Ilheu">Ilheu</option>
                                                                           <option value="Itaraté">Itaraté</option>
                                                                           <option value="Jardim Guassu">Jardim Guassu</option>
                                                                           <option value="Jardim Independencia">Jardim Independencia</option>
                                                                           <option value="Jockey Clube">Jockey Clube</option>
                                                                           <option value="José Menino">José Menino</option>
                                                                           <option value="Macuco">Macuco</option>
                                                                           <option value="Marapé">Marapé</option>
                                                                           <option value="Morros">Morros</option>
                                                                           <option value="Nautica 3">Nautica 3</option>
                                                                           <option value="Nossa Sra. de Fatima">Nossa Sra. de Fatima</option>
                                                                           <option value="Nova Cintra">Nova Cintra</option>
                                                                           <option value="Parque Bitaru">Parque Bitaru</option>
                                                                           <option value="Parque São Vicente">Parque São Vicente</option>
                                                                           <option value="Prainha">Prainha</option>
                                                                           <option value="Saboó">Saboó</option>
                                                                           <option value="Sambaiatuba">Sambaiatuba</option>
                                                                           <option value="São Manoel">São Manoel</option>
                                                                           <option value="Tancredo">Tancreto</option>
                                                                           <option value="Vila Belmiro">Vila Belmiro</option>
                                                                           <option value="Vila Margarida">Vila Margarida</option>
                                                                           <option value="Vila Matias">Vila Matias</option>
                                                                           <option value="Vila Melo">Vila Melo</option>
                                                                           <option value="Vila São Jorge Santos">Vila São Jorge Santos </option>
                                                                           <option value="Vila São Jorge SV">Vila São Jorge SV</option>
                                                                           <option value="Votorua">Votorua</option>
                                                                           <option value="Zona Noroeste">Zona Noroeste</option>
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
                                                                        <br><button type="submit" value="submit" name="enviar" class="btn btn-primary-outline">Avançar</button>
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


                            include $_SERVER['DOCUMENT_ROOT']."/dist/includes/banco.php";

                            if(isset($_POST['rua'],$_POST['bairro'],$_POST['casa'])){
                           
                            $rua =  $_POST['rua'];
                            $bairro = $_POST['bairro'];
                            $ref = $_POST['ref'];
                            $casa =  $_POST['casa'];

                            $_SESSION['tel'];

                            $tel = $_SESSION['tel'];
                            
                            if($_POST['enviar']){
                                $get = mysqli_query($link, "UPDATE tb_clientes SET nm_rua = '$rua', nm_bairro = '$bairro', nm_ref = '$ref', cd_casa = '$casa' WHERE cd_cel = '$tel' OR cd_tel = '$tel'");
                                echo "<script>alert('Endereço atualizado com Sucesso!');location.href='escolha_pedido.php';</script>";
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
                location.href="endereco.php";
            }

            
        </script>
        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>