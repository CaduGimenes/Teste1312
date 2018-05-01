<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Gerenciar Endereços</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/ico.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/vendor.css">
        <link rel="stylesheet" href="css/pedido.css">
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
                                </div> Império do Açaí </div>
                        </div>
                        <nav class="menu">
                            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                                <li>
                                    <a href="index.php">
                                        <i class="fa fa-home"></i> Painel </a>
                                </li>
                                <li class="active">
                                    <a href="adicionar_endereco.php">
                                        <i class="fa fa-globe"></i> Gerenciar Endereços
                                    </a>
                                </li>
                                <li>
                                    <a href="clientes.php">
                                        <i class="fa fa-group"></i> Clientes
                                    </a>
                                </li>
                                <li>
                                    <a href="pedido.php">
                                        <i class="fa fa-pencil-square-o"></i> Pedido </a>
                                </li>
                                
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
                

    
                        <div class="tab">
                                <button class="tablinks" onclick="abrirAcao(event, 'adicionar')">Adicionar</button>
                                <button class="tablinks" onclick="abrirAcao(event, 'alterar')">Alterar</button>
                                <button class="tablinks" onclick="abrirAcao(event, 'excluir')">Deletar</button>
                              </div>
                            <form action=" " method="POST">
                                    <div id="adicionar" class="tabcontent">
                                            <div class="header-block">
                                                    <center><br><br><br><h3 class="title">Adicionar novo endereço</h3><br><br></center>
                                                </div>
                                            <div class="row">
                                                    <div class="col-6 col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">Bairro<font color="red">*</font></label>
                                                            <input type="text" id="adicionaBairro" name="adicionaBairro" class="form-control underlined" placeholder="Bairro..."> 
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-5">
                                                            <div class="form-group">
                                                                <label class="control-label">Taxa de entrega<font color="red">*</font></label>
                                                                <input type="text" id="adicionaTaxa" name="adicionaTaxa" class="form-control underlined" placeholder="Taxa... ex: 12.50 "> 
                                                            </div>
                                                    </div>
                                                    <div class="col-6 col-md-4">
                                                        <br><p>Campos com <font color="red">*</font> são obrigatórios...</p>
                                                    </div>
                                                    <div class="col-6 col-md-3">
                                        
                                                    </div>
                                                    <div class="col-6 col-md-3">

                                                    </div>
                                                    <div class="col-6 col-md-3">

                                                    </div>
                                                    <div class="col-6 col-md-7">

                                                    </div>
                                                    <div class="col-6 col-md-1">
                                                        <section class="section">
                                                            <br><button type="submit" value="submit" id="adiciona" name="adiciona" class="btn btn-primary-outline">Adicionar</button>
                                                        </section>
                                                    </div>
                                                </div>
                                </div>
                                <!-- Alterar -->
                                <div id="alterar" class="tabcontent">
                                        <div class="header-block">
                                                <center><br><br><br><h3 class="title">Alterar endereço</h3><br><br></center>
                                            </div>
                                        <div class="row">
                                                <div class="col-6 col-md-5">
                                                            <label class="control-label">Bairro<font color="red">*</font></label>
                                                            <select required class="form-control" name="AltBairro" id="AltBairro">
                                                           <option value="selecionar2">&nbsp;-- Selecionar --&nbsp;&nbsp;&nbsp;</option>
                                                           <?php 
                                                           
                                                           $sql = mysqli_query($link,"SELECT * FROM tb_endereco ORDER BY nm_bairro ASC");

                                                            while ($retorna = mysqli_fetch_assoc($sql)) {
                                                            $bairro = $retorna['nm_bairro'];
                                                            echo "<option value='$bairro'>$bairro</option>";

                                                          }

                                                           ?>
                                                       </select>
                                                </div>
                                                <div class="col-6 col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">Taxa de entrega<font color="red">*</font></label>
                                                            <input type="text" id="AltTaxa" name="AltTaxa" class="form-control underlined" placeholder="Taxa... ex: 12.50 "> 
                                                        </div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <br><p>Campos com <font color="red">*</font> são obrigatórios...</p>
                                                </div>
                                                <div class="col-6 col-md-3">
                                        
                                                </div>
                                                <div class="col-6 col-md-3">

                                                </div>
                                                <div class="col-6 col-md-3">

                                                </div>
                                                <div class="col-6 col-md-1">

                                                </div>
                                                <div class="col-6 col-md-1">
                                                    <section class="section">
                                                        <br><button type="submit" value="submit" id="altera" name="altera" class="btn btn-primary-outline">Alterar</button>
                                                    </section>
                                                </div>
                                                </div>
                        </div>
                        <!-- Fim Alterar -->

                        <!-- Excluir -->
                        <div id="excluir" class="tabcontent">
                                <div class="header-block">
                                        <center><br><br><br><h3 class="title">Deletar endereço</h3><br><br></center>
                                    </div>
                                <div class="row">
                                        <div class="col-6 col-md-5">
                                                    <label class="control-label">Bairro<font color="red">*</font></label>
                                                    <select required class="form-control" name="bairro_del" id="bairro_del">
                                                   <option value="selecionar">&nbsp;-- Selecionar --&nbsp;&nbsp;&nbsp;</option>
                                                   <?php 

                                                    $sql = mysqli_query($link,"SELECT * FROM tb_endereco ORDER BY nm_bairro ASC");

                                                    while ($retorna = mysqli_fetch_assoc($sql)) {
                                                    $bairro = $retorna['nm_bairro'];
                                                    echo "<option value='$bairro'>$bairro</option>";
                                                    }

                                                   ?>
                                               </select>
                                        </div>
                                        <div class="col-6 col-md-12">
                                            <br><p>Campos com <font color="red">*</font> são obrigatórios...</p>
                                        </div>
                                        <div class="col-6 col-md-3">
                                        
                                        </div>
                                        <div class="col-6 col-md-3">

                                        </div>
                                        <div class="col-6 col-md-3">

                                        </div>
                                        <div class="col-6 col-md-1">

                                        </div>
                                        <div class="col-6 col-md-1">
                                            <section class="section">
                                                <br><button type="submit" value="submit" id="deleta" name="deleta" class="btn btn-primary-outline">Deletar</button>
                                            </section>
                                        </div>
                </div>
                <!-- Fim Excluir -->
                <?php

                if(isset($_POST['adicionaBairro'])){

                    $bairro_add = $_POST['adicionaBairro'];
                    $taxa = $_POST['adicionaTaxa'];
                    $sql_conta = mysqli_query($link,"SELECT * FROM tb_endereco WHERE nm_bairro = '$bairro_add'");
                    $verifica = mysqli_num_rows($sql_conta);

                    if($verifica != 0){
                        echo "<script>alert('Bairro já cadastrado, Por favor cadastre outro ou altere o mesmo!')</script>";
                    }else{
                        $insere = mysqli_query($link,"INSERT INTO tb_endereco(nm_bairro,vl_taxa) VALUES('$bairro_add',$taxa)");
                        echo "<script>Cadastrado com Sucesso!</script>";
                    }

                }

                if(isset($_POST['bairro_del'])){
                    $bairro_del = $_POST['bairro_del'];
                    $_SESSION['bairro_del'] = $bairro_del;
                    if($bairro_del != "selecionar"){
                   echo "<script>
                        if(confirm('Tem certeza de que deseja deletar o Bairro: $bairro_del?')){
                            alert('Bairro deletado com sucesso!');
                            location.href = 'deleta.php';
                        }else{
                            alert('Operação cancelada!');
                        }
                    </script>";
                    }
                }

                if(isset($_POST['AltTaxa'])){
                    $bairro_alt = $_POST['AltBairro'];
                    $taxa_alt = floatval($_POST['AltTaxa']);

                    if($bairro_alt != 'selecionar2'){
                        $insere_alt = mysqli_query($link,"UPDATE tb_endereco SET vl_taxa = '$taxa_alt' WHERE nm_bairro = '$bairro_alt'");
                        echo "<script>alert('$bairro_alt alterado(a) para $taxa_alt com Sucesso!')</script>";
                    }
                   
                }
        
                mysqli_close($link);
                ?>
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
        <script>
                function abrirAcao(evt, cityName) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }
                    document.getElementById(cityName).style.display = "block";
                    evt.currentTarget.className += " active";
                };

                function Voltar(){
                    location.href="endereco.php";
                };

                </script>
        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>