<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Escolha do Pedido</title>
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
            $_SESSION['tel'];
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
                            <?php 

                            if(isset($_SESSION['admin'])){

                                echo "  <li class='sidebar-nav'>
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
                                echo "  <li class='active'>
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
                

    
                        <div class="tab">
                                <button class="tablinks" onclick="openCity(event, 'pedido1')">Ped. 1º</button>
                                <button class="tablinks" onclick="openCity(event, 'pedido2')">Ped. 2º</button>
                                <button class="tablinks" onclick="openCity(event, 'pedido3')">Ped. 3º</button>
                                <button class="tablinks" onclick="openCity(event, 'pedido4')">Ped. 4º</button>
                                <button class="tablinks" onclick="openCity(event, 'pedido5')">Ped. 5º</button>
                                <button class="tablinks" onclick="openCity(event, 'pedido6')">Ped. 6º</button>
                                <button class="tablinks" onclick="openCity(event, 'pedido7')">Ped. 7º</button>
                                <button class="tablinks" onclick="openCity(event, 'pedido8')">Ped. 8º</button>
                                <button class="tablinks" onclick="openCity(event, 'pedido9')">Ped. 9º</button>
                                <div class="dropdown">
                                        <button onclick="myFunction()" class="dropbtn">+ Pedidos</button>
                                        <div id="myDropdown" class="dropdown-content">
                                          <a class="tablinks" onclick="openCity(event, 'pedido10')">Ped. 10º</a>
                                          <a class="tablinks" onclick="openCity(event, 'pedido11')">Ped. 11º</a>
                                          <a class="tablinks" onclick="openCity(event, 'pedido12')">Ped. 12º</a>
                                          <a class="tablinks" onclick="openCity(event, 'pedido13')">Ped. 13º</a>
                                          <a class="tablinks" onclick="openCity(event, 'pedido14')">Ped. 14º</a>
                                          <a class="tablinks" onclick="openCity(event, 'pedido15')">Ped. 15º</a>
                                          <a class="tablinks" onclick="openCity(event, 'pedido16')">Ped. 16º</a>
                                          <a class="tablinks" onclick="openCity(event, 'pedido17')">Ped. 17º</a>
                                          <a class="tablinks" onclick="openCity(event, 'pedido18')">Ped. 18º</a>
                                          <a class="tablinks" onclick="openCity(event, 'pedido19')">Ped. 19º</a>
                                          <a class="tablinks" onclick="openCity(event, 'pedido20')">Ped. 20º</a>
                                        </div>
                                      </div>
                              </div>
                            <form action="redirecionar.php" method="POST">
                                    <div id="pedido1" class="tabcontent">
                                            <div class="header-block">
                                                    <br><h3 class="title">Realizar Pedido</h3><br>
                                                </div>
                                            <div class="row">
                                                    <div class="col-6 col-md-4">
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label class="control-label"><u><font color="purple">Tamanho</font></u></label>
                                                                <div>
                                                                        <label>
                                                                           <select required class="form-control" name="valor_acai" id="valor_acai">
                                                                               <option value="0">&nbsp;-- Selecionar --&nbsp;&nbsp;&nbsp;</option>
                                                                               <optgroup label="Açai">
                                                                               <option value="7">Mini R$7,00</option>
                                                                               <option value="10">P | R$10,00</option>
                                                                               <option value="14">M | R$14,00</option>
                                                                               <option value="23">G | R$23,00</option>
                                                                               </optgroup>
                                                                           </select>
                                                                        </label>
                                                                </div>
                                                                <br><label class="control-label"><u><font color="purple">Frutas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas[]" class="checkbox" type="checkbox" value="Abacaxi">
                                                                            <span>Abacaxi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas[]" class="checkbox" type="checkbox" value="Banana">
                                                                            <span>Banana</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas[]" class="checkbox" type="checkbox" value="Manga">
                                                                            <span>Manga</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
        
                                                                    <br><label class="control-label"><u><font color="purple">Adicional</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="sorvete" class="checkbox" type="checkbox" value="Cupuacu">
                                                                            <span>Cupuaçu</span>
                                                                        </label>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Caldas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas[]" class="checkbox" type="checkbox" value="Chocolate">
                                                                            <span>Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas[]" class="checkbox" type="checkbox" value="Caramelo">
                                                                            <span>Caramelo</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas[]" class="checkbox" type="checkbox" value="Leite Cond.">
                                                                            <span>Leite Cond.</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas[]" class="checkbox" type="checkbox" value="Doce de Leite">
                                                                            <span>Doce de Leite</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas[]" class="checkbox" type="checkbox" value="Mel">
                                                                            <span>Mel</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas[]" class="checkbox" type="checkbox" value="Groselha">
                                                                            <span>Groselha</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas[]" class="checkbox" type="checkbox" value="Maracuja">
                                                                            <span>Marácuja</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas[]" class="checkbox" type="checkbox" value="Acai c/ guarana">
                                                                            <span>Açaí c/ guaraná</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                    </div>
        
        
        
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Complementos</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos[]" class="checkbox" type="checkbox" value="Bolinha de Chocolate">
                                                                            <span>Bolinha de Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos[]" class="checkbox" type="checkbox" value="Confete">
                                                                            <span>Confete</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos[]" class="checkbox" type="checkbox" value="Bis">
                                                                            <span>Bis</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos[]" class="checkbox" type="checkbox" value="Flocos de Arroz">
                                                                            <span>Flocos de Arroz</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos[]" class="checkbox" type="checkbox" value="Granola">
                                                                            <span>Granola</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos[]" class="checkbox" type="checkbox" value="Amendoin">
                                                                            <span>Amendoin</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos[]" class="checkbox" type="checkbox" value="Paçoca">
                                                                            <span>Paçoca</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos[]" class="checkbox" type="checkbox" value="Sucrilhos">
                                                                            <span>Sucrilhos</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos[]" class="checkbox" type="checkbox" value="Leite em po">
                                                                            <span>Leite em pó</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos[]" class="checkbox" type="checkbox" value="Ovo maltine">
                                                                            <span>Ovo maltine</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos[]" class="checkbox" type="checkbox" value="Suspiro">
                                                                            <span>Suspiro</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos[]" class="checkbox" type="checkbox" value="Raspa de Choc. Branco">
                                                                            <span>Raspa de Choc. Branco</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos[]" class="checkbox" type="checkbox" value="Raspa de Choc. Preto">
                                                                            <span>Raspa de Choc. Preto</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos[]" class="checkbox" type="checkbox" value="Canudos Waffer">
                                                                            <span>Canudos Waffer</span>
                                                                        </label>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-6 col-sm-3"><section class="section">
                                                        <br><button type="button" class="btn btn-primary-outline" onClick="Voltar()"/>Voltar
                                                    </section>
                                                </div>
                                                            
                                                    
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
        
                                                        <div class="col-6 col-sm-2">
                                                            
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            
                                                        </div>
                                                        <div class="col-6 col-md-1">
                                                            <section class="section">
                                                                <br><button type="submit" name="enviar" class="btn btn-primary-outline"/>Avançar
                                                            </section>
                                                        </div>
                                                </div>
                                      </div>

                                      <!-- Pedido 2 -->
                                      <div id="pedido2" class="tabcontent">
                                            <div class="header-block">
                                                    <br><h3 class="title">Realizar Pedido Nº2</h3><br>
                                                </div>
                                            <div class="row">
                                                    <div class="col-6 col-md-4">
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label class="control-label"><u><font color="purple">Tamanho</font></u></label>
                                                                <div>
                                                                        <label>
                                                                           <select required class="form-control" name="valor_acai_2" id="valor_acai_2">
                                                                               <option value="0">&nbsp;-- Selecionar --&nbsp;&nbsp;&nbsp;</option>
                                                                               <optgroup label="Açai">
                                                                               <option value="7">Mini R$7,00</option>
                                                                               <option value="10">P | R$10,00</option>
                                                                               <option value="14">M | R$14,00</option>
                                                                               <option value="23">G | R$23,00</option>
                                                                               </optgroup>
                                                                           </select>
                                                                        </label>
                                                                </div>
                                                                <br><label class="control-label"><u><font color="purple">Frutas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_2[]" class="checkbox" type="checkbox" value="Abacaxi">
                                                                            <span>Abacaxi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_2[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_2[]" class="checkbox" type="checkbox" value="Banana">
                                                                            <span>Banana</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_2[]" class="checkbox" type="checkbox" value="Manga">
                                                                            <span>Manga</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_2[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
        
                                                                    <br><label class="control-label"><u><font color="purple">Adicional</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="sorvete_2" class="checkbox" type="checkbox" value="Cupuacu">
                                                                            <span>Cupuaçu</span>
                                                                        </label>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Caldas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_2[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_2[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_2[]" class="checkbox" type="checkbox" value="Chocolate">
                                                                            <span>Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_2[]" class="checkbox" type="checkbox" value="Caramelo">
                                                                            <span>Caramelo</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_2[]" class="checkbox" type="checkbox" value="Leite Cond.">
                                                                            <span>Leite Cond.</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_2[]" class="checkbox" type="checkbox" value="Doce de Leite">
                                                                            <span>Doce de Leite</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_2[]" class="checkbox" type="checkbox" value="Mel">
                                                                            <span>Mel</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_2[]" class="checkbox" type="checkbox" value="Groselha">
                                                                            <span>Groselha</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_2[]" class="checkbox" type="checkbox" value="Maracuja">
                                                                            <span>Marácuja</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_2[]" class="checkbox" type="checkbox" value="Acai c/ guarana">
                                                                            <span>Açaí c/ guaraná</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                    </div>
        
        
        
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Complementos</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_2[]" class="checkbox" type="checkbox" value="Bolinha de Chocolate">
                                                                            <span>Bolinha de Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_2[]" class="checkbox" type="checkbox" value="Confete">
                                                                            <span>Confete</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_2[]" class="checkbox" type="checkbox" value="Bis">
                                                                            <span>Bis</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_2[]" class="checkbox" type="checkbox" value="Flocos de Arroz">
                                                                            <span>Flocos de Arroz</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_2[]" class="checkbox" type="checkbox" value="Granola">
                                                                            <span>Granola</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_2[]" class="checkbox" type="checkbox" value="Amendoin">
                                                                            <span>Amendoin</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_2[]" class="checkbox" type="checkbox" value="Paçoca">
                                                                            <span>Paçoca</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_2[]" class="checkbox" type="checkbox" value="Sucrilhos">
                                                                            <span>Sucrilhos</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_2[]" class="checkbox" type="checkbox" value="Leite em po">
                                                                            <span>Leite em pó</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_2[]" class="checkbox" type="checkbox" value="Ovo maltine">
                                                                            <span>Ovo maltine</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_2[]" class="checkbox" type="checkbox" value="Suspiro">
                                                                            <span>Suspiro</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_2[]" class="checkbox" type="checkbox" value="Raspa de Choc. Branco">
                                                                            <span>Raspa de Choc. Branco</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_2[]" class="checkbox" type="checkbox" value="Raspa de Choc. Preto">
                                                                            <span>Raspa de Choc. Preto</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_2[]" class="checkbox" type="checkbox" value="Canudos Waffer">
                                                                            <span>Canudos Waffer</span>
                                                                        </label>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-6 col-sm-3"><section class="section">
                                                        <br><button type="button" class="btn btn-primary-outline" onClick="Voltar()"/>Voltar
                                                    </section>
                                                </div>
                                                            
                                                    
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
        
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
                                                            <section class="section">
                                                                <br><button type="submit" name="enviar" class="btn btn-primary-outline"/>Avançar
                                                            </section>
                                                        </div>
                                                </div>
                                      </div>

                                      <!-- Pedido 3 -->
                                      <div id="pedido3" class="tabcontent">
                                            <div class="header-block">
                                                    <br><h3 class="title">Realizar Pedido Nº3</h3><br>
                                                </div>
                                            <div class="row">
                                                    <div class="col-6 col-md-4">
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label class="control-label"><u><font color="purple">Tamanho</font></u></label>
                                                                <div>
                                                                        <label>
                                                                           <select required class="form-control" name="valor_acai_3" id="valor_acai_3">
                                                                               <option value="0">&nbsp;-- Selecionar --&nbsp;&nbsp;&nbsp;</option>
                                                                               <optgroup label="Açai">
                                                                               <option value="7">Mini R$7,00</option>
                                                                               <option value="10">P | R$10,00</option>
                                                                               <option value="14">M | R$14,00</option>
                                                                               <option value="23">G | R$23,00</option>
                                                                               </optgroup>
                                                                           </select>
                                                                        </label>
                                                                </div>
                                                                <br><label class="control-label"><u><font color="purple">Frutas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_3[]" class="checkbox" type="checkbox" value="Abacaxi">
                                                                            <span>Abacaxi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_3[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_3[]" class="checkbox" type="checkbox" value="Banana">
                                                                            <span>Banana</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_3[]" class="checkbox" type="checkbox" value="Manga">
                                                                            <span>Manga</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_3[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
        
                                                                    <br><label class="control-label"><u><font color="purple">Adicional</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="sorvete_3" class="checkbox" type="checkbox" value="Cupuacu">
                                                                            <span>Cupuaçu</span>
                                                                        </label>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Caldas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_3[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_3[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_3[]" class="checkbox" type="checkbox" value="Chocolate">
                                                                            <span>Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_3[]" class="checkbox" type="checkbox" value="Caramelo">
                                                                            <span>Caramelo</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_3[]" class="checkbox" type="checkbox" value="Leite Cond.">
                                                                            <span>Leite Cond.</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_3[]" class="checkbox" type="checkbox" value="Doce de Leite">
                                                                            <span>Doce de Leite</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_3[]" class="checkbox" type="checkbox" value="Mel">
                                                                            <span>Mel</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_3[]" class="checkbox" type="checkbox" value="Groselha">
                                                                            <span>Groselha</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_3[]" class="checkbox" type="checkbox" value="Maracuja">
                                                                            <span>Marácuja</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_3[]" class="checkbox" type="checkbox" value="Acai c/ guarana">
                                                                            <span>Açaí c/ guaraná</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                    </div>
        
        
        
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Complementos</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_3[]" class="checkbox" type="checkbox" value="Bolinha de Chocolate">
                                                                            <span>Bolinha de Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_3[]" class="checkbox" type="checkbox" value="Confete">
                                                                            <span>Confete</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_3[]" class="checkbox" type="checkbox" value="Bis">
                                                                            <span>Bis</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_3[]" class="checkbox" type="checkbox" value="Flocos de Arroz">
                                                                            <span>Flocos de Arroz</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_3[]" class="checkbox" type="checkbox" value="Granola">
                                                                            <span>Granola</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_3[]" class="checkbox" type="checkbox" value="Amendoin">
                                                                            <span>Amendoin</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_3[]" class="checkbox" type="checkbox" value="Paçoca">
                                                                            <span>Paçoca</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_3[]" class="checkbox" type="checkbox" value="Sucrilhos">
                                                                            <span>Sucrilhos</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_3[]" class="checkbox" type="checkbox" value="Leite em po">
                                                                            <span>Leite em pó</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_3[]" class="checkbox" type="checkbox" value="Ovo maltine">
                                                                            <span>Ovo maltine</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_3[]" class="checkbox" type="checkbox" value="Suspiro">
                                                                            <span>Suspiro</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_3[]" class="checkbox" type="checkbox" value="Raspa de Choc. Branco">
                                                                            <span>Raspa de Choc. Branco</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_3[]" class="checkbox" type="checkbox" value="Raspa de Choc. Preto">
                                                                            <span>Raspa de Choc. Preto</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_3[]" class="checkbox" type="checkbox" value="Canudos Waffer">
                                                                            <span>Canudos Waffer</span>
                                                                        </label>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-6 col-sm-3"><section class="section">
                                                        <br><button type="button" class="btn btn-primary-outline" onClick="Voltar()"/>Voltar
                                                    </section>
                                                </div>
                                                            
                                                    
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
        
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
                                                            <section class="section">
                                                                <br><button type="submit" name="enviar" class="btn btn-primary-outline"/>Avançar
                                                            </section>
                                                        </div>
                                                </div>
                                      </div>

                                      <!-- Pedido 4 -->
                                      <div id="pedido4" class="tabcontent">
                                            <div class="header-block">
                                                    <br><h3 class="title">Realizar Pedido Nº4</h3><br>
                                                </div>
                                            <div class="row">
                                                    <div class="col-6 col-md-4">
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label class="control-label"><u><font color="purple">Tamanho</font></u></label>
                                                                <div>
                                                                        <label>
                                                                           <select required class="form-control" name="valor_acai_4" id="valor_acai_4">
                                                                               <option value="0">&nbsp;-- Selecionar --&nbsp;&nbsp;&nbsp;</option>
                                                                               <optgroup label="Açai">
                                                                               <option value="7">Mini R$7,00</option>
                                                                               <option value="10">P | R$10,00</option>
                                                                               <option value="14">M | R$14,00</option>
                                                                               <option value="23">G | R$23,00</option>
                                                                               </optgroup>
                                                                           </select>
                                                                        </label>
                                                                </div>
                                                                <br><label class="control-label"><u><font color="purple">Frutas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_4[]" class="checkbox" type="checkbox" value="Abacaxi">
                                                                            <span>Abacaxi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_4[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_4[]" class="checkbox" type="checkbox" value="Banana">
                                                                            <span>Banana</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_4[]" class="checkbox" type="checkbox" value="Manga">
                                                                            <span>Manga</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_4[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
        
                                                                    <br><label class="control-label"><u><font color="purple">Adicional</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="sorvete_4" class="checkbox" type="checkbox" value="Cupuacu">
                                                                            <span>Cupuaçu</span>
                                                                        </label>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Caldas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_4[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_4[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_4[]" class="checkbox" type="checkbox" value="Chocolate">
                                                                            <span>Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_4[]" class="checkbox" type="checkbox" value="Caramelo">
                                                                            <span>Caramelo</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_4[]" class="checkbox" type="checkbox" value="Leite Cond.">
                                                                            <span>Leite Cond.</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_4[]" class="checkbox" type="checkbox" value="Doce de Leite">
                                                                            <span>Doce de Leite</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_4[]" class="checkbox" type="checkbox" value="Mel">
                                                                            <span>Mel</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_4[]" class="checkbox" type="checkbox" value="Groselha">
                                                                            <span>Groselha</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_4[]" class="checkbox" type="checkbox" value="Maracuja">
                                                                            <span>Marácuja</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_4[]" class="checkbox" type="checkbox" value="Acai c/ guarana">
                                                                            <span>Açaí c/ guaraná</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                    </div>
        
        
        
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Complementos</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_4[]" class="checkbox" type="checkbox" value="Bolinha de Chocolate">
                                                                            <span>Bolinha de Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_4[]" class="checkbox" type="checkbox" value="Confete">
                                                                            <span>Confete</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_4[]" class="checkbox" type="checkbox" value="Bis">
                                                                            <span>Bis</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_4[]" class="checkbox" type="checkbox" value="Flocos de Arroz">
                                                                            <span>Flocos de Arroz</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_4[]" class="checkbox" type="checkbox" value="Granola">
                                                                            <span>Granola</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_4[]" class="checkbox" type="checkbox" value="Amendoin">
                                                                            <span>Amendoin</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_4[]" class="checkbox" type="checkbox" value="Paçoca">
                                                                            <span>Paçoca</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_4[]" class="checkbox" type="checkbox" value="Sucrilhos">
                                                                            <span>Sucrilhos</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_4[]" class="checkbox" type="checkbox" value="Leite em po">
                                                                            <span>Leite em pó</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_4[]" class="checkbox" type="checkbox" value="Ovo maltine">
                                                                            <span>Ovo maltine</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_4[]" class="checkbox" type="checkbox" value="Suspiro">
                                                                            <span>Suspiro</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_4[]" class="checkbox" type="checkbox" value="Raspa de Choc. Branco">
                                                                            <span>Raspa de Choc. Branco</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_4[]" class="checkbox" type="checkbox" value="Raspa de Choc. Preto">
                                                                            <span>Raspa de Choc. Preto</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_4[]" class="checkbox" type="checkbox" value="Canudos Waffer">
                                                                            <span>Canudos Waffer</span>
                                                                        </label>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-6 col-sm-3"><section class="section">
                                                        <br><button type="button" class="btn btn-primary-outline" onClick="Voltar()"/>Voltar
                                                    </section>
                                                </div>
                                                            
                                                    
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
        
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
                                                            <section class="section">
                                                                <br><button type="submit" name="enviar" class="btn btn-primary-outline"/>Avançar
                                                            </section>
                                                        </div>
                                                </div>
                                      </div>
                                      
                                      <!-- Pedido 5 -->
                                      <div id="pedido5" class="tabcontent">
                                            <div class="header-block">
                                                    <br><h3 class="title">Realizar Pedido Nº5</h3><br>
                                                </div>
                                            <div class="row">
                                                    <div class="col-6 col-md-4">
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label class="control-label"><u><font color="purple">Tamanho</font></u></label>
                                                                <div>
                                                                        <label>
                                                                           <select required class="form-control" name="valor_acai_5" id="valor_acai_5">
                                                                               <option value="0">&nbsp;-- Selecionar --&nbsp;&nbsp;&nbsp;</option>
                                                                               <optgroup label="Açai">
                                                                               <option value="7">Mini R$7,00</option>
                                                                               <option value="10">P | R$10,00</option>
                                                                               <option value="14">M | R$14,00</option>
                                                                               <option value="23">G | R$23,00</option>
                                                                               </optgroup>
                                                                           </select>
                                                                        </label>
                                                                </div>
                                                                <br><label class="control-label"><u><font color="purple">Frutas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_5[]" class="checkbox" type="checkbox" value="Abacaxi">
                                                                            <span>Abacaxi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_5[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_5[]" class="checkbox" type="checkbox" value="Banana">
                                                                            <span>Banana</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_5[]" class="checkbox" type="checkbox" value="Manga">
                                                                            <span>Manga</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_5[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
        
                                                                    <br><label class="control-label"><u><font color="purple">Adicional</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="sorvete_5" class="checkbox" type="checkbox" value="Cupuacu">
                                                                            <span>Cupuaçu</span>
                                                                        </label>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Caldas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_5[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_5[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_5[]" class="checkbox" type="checkbox" value="Chocolate">
                                                                            <span>Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_5[]" class="checkbox" type="checkbox" value="Caramelo">
                                                                            <span>Caramelo</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_5[]" class="checkbox" type="checkbox" value="Leite Cond.">
                                                                            <span>Leite Cond.</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_5[]" class="checkbox" type="checkbox" value="Doce de Leite">
                                                                            <span>Doce de Leite</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_5[]" class="checkbox" type="checkbox" value="Mel">
                                                                            <span>Mel</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_5[]" class="checkbox" type="checkbox" value="Groselha">
                                                                            <span>Groselha</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_5[]" class="checkbox" type="checkbox" value="Maracuja">
                                                                            <span>Marácuja</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_5[]" class="checkbox" type="checkbox" value="Acai c/ guarana">
                                                                            <span>Açaí c/ guaraná</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                    </div>
        
        
        
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Complementos</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_5[]" class="checkbox" type="checkbox" value="Bolinha de Chocolate">
                                                                            <span>Bolinha de Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_5[]" class="checkbox" type="checkbox" value="Confete">
                                                                            <span>Confete</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_5[]" class="checkbox" type="checkbox" value="Bis">
                                                                            <span>Bis</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_5[]" class="checkbox" type="checkbox" value="Flocos de Arroz">
                                                                            <span>Flocos de Arroz</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_5[]" class="checkbox" type="checkbox" value="Granola">
                                                                            <span>Granola</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_5[]" class="checkbox" type="checkbox" value="Amendoin">
                                                                            <span>Amendoin</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_5[]" class="checkbox" type="checkbox" value="Paçoca">
                                                                            <span>Paçoca</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_5[]" class="checkbox" type="checkbox" value="Sucrilhos">
                                                                            <span>Sucrilhos</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_5[]" class="checkbox" type="checkbox" value="Leite em po">
                                                                            <span>Leite em pó</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_5[]" class="checkbox" type="checkbox" value="Ovo maltine">
                                                                            <span>Ovo maltine</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_5[]" class="checkbox" type="checkbox" value="Suspiro">
                                                                            <span>Suspiro</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_5[]" class="checkbox" type="checkbox" value="Raspa de Choc. Branco">
                                                                            <span>Raspa de Choc. Branco</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_5[]" class="checkbox" type="checkbox" value="Raspa de Choc. Preto">
                                                                            <span>Raspa de Choc. Preto</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_5[]" class="checkbox" type="checkbox" value="Canudos Waffer">
                                                                            <span>Canudos Waffer</span>
                                                                        </label>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-6 col-sm-3"><section class="section">
                                                        <br><button type="button" class="btn btn-primary-outline" onClick="Voltar()"/>Voltar
                                                    </section>
                                                </div>
                                                            
                                                    
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
        
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
                                                            <section class="section">
                                                                <br><button type="submit" name="enviar" class="btn btn-primary-outline"/>Avançar
                                                            </section>
                                                        </div>
                                                </div>
                                      </div>

                                      <!-- Pedido 6 -->
                                      <div id="pedido6" class="tabcontent">
                                            <div class="header-block">
                                                    <br><h3 class="title">Realizar Pedido Nº6</h3><br>
                                                </div>
                                            <div class="row">
                                                    <div class="col-6 col-md-4">
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label class="control-label"><u><font color="purple">Tamanho</font></u></label>
                                                                <div>
                                                                        <label>
                                                                           <select required class="form-control" name="valor_acai_6" id="valor_acai_6">
                                                                               <option value="0">&nbsp;-- Selecionar --&nbsp;&nbsp;&nbsp;</option>
                                                                               <optgroup label="Açai">
                                                                               <option value="7">Mini R$7,00</option>
                                                                               <option value="10">P | R$10,00</option>
                                                                               <option value="14">M | R$14,00</option>
                                                                               <option value="23">G | R$23,00</option>
                                                                               </optgroup>
                                                                           </select>
                                                                        </label>
                                                                </div>
                                                                <br><label class="control-label"><u><font color="purple">Frutas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_6[]" class="checkbox" type="checkbox" value="Abacaxi">
                                                                            <span>Abacaxi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_6[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_6[]" class="checkbox" type="checkbox" value="Banana">
                                                                            <span>Banana</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_6[]" class="checkbox" type="checkbox" value="Manga">
                                                                            <span>Manga</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_6[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
        
                                                                    <br><label class="control-label"><u><font color="purple">Adicional</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="sorvete_6" class="checkbox" type="checkbox" value="Cupuacu">
                                                                            <span>Cupuaçu</span>
                                                                        </label>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Caldas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_6[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_6[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_6[]" class="checkbox" type="checkbox" value="Chocolate">
                                                                            <span>Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_6[]" class="checkbox" type="checkbox" value="Caramelo">
                                                                            <span>Caramelo</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_6[]" class="checkbox" type="checkbox" value="Leite Cond.">
                                                                            <span>Leite Cond.</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_6[]" class="checkbox" type="checkbox" value="Doce de Leite">
                                                                            <span>Doce de Leite</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_6[]" class="checkbox" type="checkbox" value="Mel">
                                                                            <span>Mel</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_6[]" class="checkbox" type="checkbox" value="Groselha">
                                                                            <span>Groselha</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_6[]" class="checkbox" type="checkbox" value="Maracuja">
                                                                            <span>Marácuja</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_6[]" class="checkbox" type="checkbox" value="Acai c/ guarana">
                                                                            <span>Açaí c/ guaraná</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                    </div>
        
        
        
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Complementos</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_6[]" class="checkbox" type="checkbox" value="Bolinha de Chocolate">
                                                                            <span>Bolinha de Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_6[]" class="checkbox" type="checkbox" value="Confete">
                                                                            <span>Confete</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_6[]" class="checkbox" type="checkbox" value="Bis">
                                                                            <span>Bis</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_6[]" class="checkbox" type="checkbox" value="Flocos de Arroz">
                                                                            <span>Flocos de Arroz</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_6[]" class="checkbox" type="checkbox" value="Granola">
                                                                            <span>Granola</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_6[]" class="checkbox" type="checkbox" value="Amendoin">
                                                                            <span>Amendoin</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_6[]" class="checkbox" type="checkbox" value="Paçoca">
                                                                            <span>Paçoca</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_6[]" class="checkbox" type="checkbox" value="Sucrilhos">
                                                                            <span>Sucrilhos</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_6[]" class="checkbox" type="checkbox" value="Leite em po">
                                                                            <span>Leite em pó</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_6[]" class="checkbox" type="checkbox" value="Ovo maltine">
                                                                            <span>Ovo maltine</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_6[]" class="checkbox" type="checkbox" value="Suspiro">
                                                                            <span>Suspiro</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_6[]" class="checkbox" type="checkbox" value="Raspa de Choc. Branco">
                                                                            <span>Raspa de Choc. Branco</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_6[]" class="checkbox" type="checkbox" value="Raspa de Choc. Preto">
                                                                            <span>Raspa de Choc. Preto</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_6[]" class="checkbox" type="checkbox" value="Canudos Waffer">
                                                                            <span>Canudos Waffer</span>
                                                                        </label>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-6 col-sm-3"><section class="section">
                                                        <br><button type="button" class="btn btn-primary-outline" onClick="Voltar()"/>Voltar
                                                    </section>
                                                </div>
                                                            
                                                    
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
        
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
                                                            <section class="section">
                                                                <br><button type="submit" name="enviar" class="btn btn-primary-outline"/>Avançar
                                                            </section>
                                                        </div>
                                                </div>
                                      </div>

                                      <!-- Pedido 7-->
                                      <div id="pedido7" class="tabcontent">
                                            <div class="header-block">
                                                    <br><h3 class="title">Realizar Pedido Nº7</h3><br>
                                                </div>
                                            <div class="row">
                                                    <div class="col-6 col-md-4">
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label class="control-label"><u><font color="purple">Tamanho</font></u></label>
                                                                <div>
                                                                        <label>
                                                                           <select required class="form-control" name="valor_acai_7" id="valor_acai_7">
                                                                               <option value="0">&nbsp;-- Selecionar --&nbsp;&nbsp;&nbsp;</option>
                                                                               <optgroup label="Açai">
                                                                               <option value="7">Mini R$7,00</option>
                                                                               <option value="10">P | R$10,00</option>
                                                                               <option value="14">M | R$14,00</option>
                                                                               <option value="23">G | R$23,00</option>
                                                                               </optgroup>
                                                                           </select>
                                                                        </label>
                                                                </div>
                                                                <br><label class="control-label"><u><font color="purple">Frutas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_7[]" class="checkbox" type="checkbox" value="Abacaxi">
                                                                            <span>Abacaxi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_7[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_7[]" class="checkbox" type="checkbox" value="Banana">
                                                                            <span>Banana</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_7[]" class="checkbox" type="checkbox" value="Manga">
                                                                            <span>Manga</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_7[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
        
                                                                    <br><label class="control-label"><u><font color="purple">Adicional</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="sorvete_7" class="checkbox" type="checkbox" value="Cupuacu">
                                                                            <span>Cupuaçu</span>
                                                                        </label>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Caldas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_7[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_7[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_7[]" class="checkbox" type="checkbox" value="Chocolate">
                                                                            <span>Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_7[]" class="checkbox" type="checkbox" value="Caramelo">
                                                                            <span>Caramelo</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_7[]" class="checkbox" type="checkbox" value="Leite Cond.">
                                                                            <span>Leite Cond.</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_7[]" class="checkbox" type="checkbox" value="Doce de Leite">
                                                                            <span>Doce de Leite</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_7[]" class="checkbox" type="checkbox" value="Mel">
                                                                            <span>Mel</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_7[]" class="checkbox" type="checkbox" value="Groselha">
                                                                            <span>Groselha</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_7[]" class="checkbox" type="checkbox" value="Maracuja">
                                                                            <span>Marácuja</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_7[]" class="checkbox" type="checkbox" value="Acai c/ guarana">
                                                                            <span>Açaí c/ guaraná</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                    </div>
        
        
        
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Complementos</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_7[]" class="checkbox" type="checkbox" value="Bolinha de Chocolate">
                                                                            <span>Bolinha de Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_7[]" class="checkbox" type="checkbox" value="Confete">
                                                                            <span>Confete</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_7[]" class="checkbox" type="checkbox" value="Bis">
                                                                            <span>Bis</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_7[]" class="checkbox" type="checkbox" value="Flocos de Arroz">
                                                                            <span>Flocos de Arroz</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_7[]" class="checkbox" type="checkbox" value="Granola">
                                                                            <span>Granola</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_7[]" class="checkbox" type="checkbox" value="Amendoin">
                                                                            <span>Amendoin</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_7[]" class="checkbox" type="checkbox" value="Paçoca">
                                                                            <span>Paçoca</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_7[]" class="checkbox" type="checkbox" value="Sucrilhos">
                                                                            <span>Sucrilhos</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_7[]" class="checkbox" type="checkbox" value="Leite em po">
                                                                            <span>Leite em pó</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_7[]" class="checkbox" type="checkbox" value="Ovo maltine">
                                                                            <span>Ovo maltine</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_7[]" class="checkbox" type="checkbox" value="Suspiro">
                                                                            <span>Suspiro</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_7[]" class="checkbox" type="checkbox" value="Raspa de Choc. Branco">
                                                                            <span>Raspa de Choc. Branco</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_7[]" class="checkbox" type="checkbox" value="Raspa de Choc. Preto">
                                                                            <span>Raspa de Choc. Preto</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_7[]" class="checkbox" type="checkbox" value="Canudos Waffer">
                                                                            <span>Canudos Waffer</span>
                                                                        </label>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-6 col-sm-3"><section class="section">
                                                        <br><button type="button" class="btn btn-primary-outline" onClick="Voltar()"/>Voltar
                                                    </section>
                                                </div>
                                                            
                                                    
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
        
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
                                                            <section class="section">
                                                                <br><button type="submit" name="enviar" class="btn btn-primary-outline"/>Avançar
                                                            </section>
                                                        </div>
                                                </div>
                                      </div>

                                      <!-- Pedido 8-->
                                      <div id="pedido8" class="tabcontent">
                                            <div class="header-block">
                                                    <br><h3 class="title">Realizar Pedido Nº8</h3><br>
                                                </div>
                                            <div class="row">
                                                    <div class="col-6 col-md-4">
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label class="control-label"><u><font color="purple">Tamanho</font></u></label>
                                                                <div>
                                                                        <label>
                                                                           <select required class="form-control" name="valor_acai_8" id="valor_acai_8">
                                                                               <option value="0">&nbsp;-- Selecionar --&nbsp;&nbsp;&nbsp;</option>
                                                                               <optgroup label="Açai">
                                                                               <option value="7">Mini R$7,00</option>
                                                                               <option value="10">P | R$10,00</option>
                                                                               <option value="14">M | R$14,00</option>
                                                                               <option value="23">G | R$23,00</option>
                                                                               </optgroup>
                                                                           </select>
                                                                        </label>
                                                                </div>
                                                                <br><label class="control-label"><u><font color="purple">Frutas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_8[]" class="checkbox" type="checkbox" value="Abacaxi">
                                                                            <span>Abacaxi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_8[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_8[]" class="checkbox" type="checkbox" value="Banana">
                                                                            <span>Banana</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_8[]" class="checkbox" type="checkbox" value="Manga">
                                                                            <span>Manga</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_8[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
        
                                                                    <br><label class="control-label"><u><font color="purple">Adicional</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="sorvete_8" class="checkbox" type="checkbox" value="Cupuacu">
                                                                            <span>Cupuaçu</span>
                                                                        </label>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Caldas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_8[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_8[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_8[]" class="checkbox" type="checkbox" value="Chocolate">
                                                                            <span>Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_8[]" class="checkbox" type="checkbox" value="Caramelo">
                                                                            <span>Caramelo</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_8[]" class="checkbox" type="checkbox" value="Leite Cond.">
                                                                            <span>Leite Cond.</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_8[]" class="checkbox" type="checkbox" value="Doce de Leite">
                                                                            <span>Doce de Leite</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_8[]" class="checkbox" type="checkbox" value="Mel">
                                                                            <span>Mel</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_8[]" class="checkbox" type="checkbox" value="Groselha">
                                                                            <span>Groselha</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_8[]" class="checkbox" type="checkbox" value="Maracuja">
                                                                            <span>Marácuja</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_8[]" class="checkbox" type="checkbox" value="Acai c/ guarana">
                                                                            <span>Açaí c/ guaraná</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                    </div>
        
        
        
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Complementos</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_8[]" class="checkbox" type="checkbox" value="Bolinha de Chocolate">
                                                                            <span>Bolinha de Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_8[]" class="checkbox" type="checkbox" value="Confete">
                                                                            <span>Confete</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_8[]" class="checkbox" type="checkbox" value="Bis">
                                                                            <span>Bis</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_8[]" class="checkbox" type="checkbox" value="Flocos de Arroz">
                                                                            <span>Flocos de Arroz</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_8[]" class="checkbox" type="checkbox" value="Granola">
                                                                            <span>Granola</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_8[]" class="checkbox" type="checkbox" value="Amendoin">
                                                                            <span>Amendoin</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_8[]" class="checkbox" type="checkbox" value="Paçoca">
                                                                            <span>Paçoca</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_8[]" class="checkbox" type="checkbox" value="Sucrilhos">
                                                                            <span>Sucrilhos</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_8[]" class="checkbox" type="checkbox" value="Leite em po">
                                                                            <span>Leite em pó</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_8[]" class="checkbox" type="checkbox" value="Ovo maltine">
                                                                            <span>Ovo maltine</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_8[]" class="checkbox" type="checkbox" value="Suspiro">
                                                                            <span>Suspiro</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_8[]" class="checkbox" type="checkbox" value="Raspa de Choc. Branco">
                                                                            <span>Raspa de Choc. Branco</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_8[]" class="checkbox" type="checkbox" value="Raspa de Choc. Preto">
                                                                            <span>Raspa de Choc. Preto</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_8[]" class="checkbox" type="checkbox" value="Canudos Waffer">
                                                                            <span>Canudos Waffer</span>
                                                                        </label>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-6 col-sm-3"><section class="section">
                                                        <br><button type="button" class="btn btn-primary-outline" onClick="Voltar()"/>Voltar
                                                    </section>
                                                </div>
                                                            
                                                    
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
        
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
                                                            <section class="section">
                                                                <br><button type="submit" name="enviar" class="btn btn-primary-outline"/>Avançar
                                                            </section>
                                                        </div>
                                                </div>
                                      </div>

                                      <!-- Pedido 9 -->
                                      <div id="pedido9" class="tabcontent">
                                            <div class="header-block">
                                                    <br><h3 class="title">Realizar Pedido Nº9</h3><br>
                                                </div>
                                            <div class="row">
                                                    <div class="col-6 col-md-4">
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label class="control-label"><u><font color="purple">Tamanho</font></u></label>
                                                                <div>
                                                                        <label>
                                                                           <select required class="form-control" name="valor_acai_9" id="valor_acai_9">
                                                                               <option value="0">&nbsp;-- Selecionar --&nbsp;&nbsp;&nbsp;</option>
                                                                               <optgroup label="Açai">
                                                                               <option value="7">Mini R$7,00</option>
                                                                               <option value="10">P | R$10,00</option>
                                                                               <option value="14">M | R$14,00</option>
                                                                               <option value="23">G | R$23,00</option>
                                                                               </optgroup>
                                                                           </select>
                                                                        </label>
                                                                </div>
                                                                <br><label class="control-label"><u><font color="purple">Frutas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_9[]" class="checkbox" type="checkbox" value="Abacaxi">
                                                                            <span>Abacaxi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_9[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_9[]" class="checkbox" type="checkbox" value="Banana">
                                                                            <span>Banana</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_9[]" class="checkbox" type="checkbox" value="Manga">
                                                                            <span>Manga</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_9[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
        
                                                                    <br><label class="control-label"><u><font color="purple">Adicional</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="sorvete_9" class="checkbox" type="checkbox" value="Cupuacu">
                                                                            <span>Cupuaçu</span>
                                                                        </label>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Caldas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_9[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_9[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_9[]" class="checkbox" type="checkbox" value="Chocolate">
                                                                            <span>Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_9[]" class="checkbox" type="checkbox" value="Caramelo">
                                                                            <span>Caramelo</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_9[]" class="checkbox" type="checkbox" value="Leite Cond.">
                                                                            <span>Leite Cond.</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_9[]" class="checkbox" type="checkbox" value="Doce de Leite">
                                                                            <span>Doce de Leite</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_9[]" class="checkbox" type="checkbox" value="Mel">
                                                                            <span>Mel</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_9[]" class="checkbox" type="checkbox" value="Groselha">
                                                                            <span>Groselha</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_9[]" class="checkbox" type="checkbox" value="Maracuja">
                                                                            <span>Marácuja</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_9[]" class="checkbox" type="checkbox" value="Acai c/ guarana">
                                                                            <span>Açaí c/ guaraná</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                    </div>
        
        
        
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Complementos</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_9[]" class="checkbox" type="checkbox" value="Bolinha de Chocolate">
                                                                            <span>Bolinha de Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_9[]" class="checkbox" type="checkbox" value="Confete">
                                                                            <span>Confete</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_9[]" class="checkbox" type="checkbox" value="Bis">
                                                                            <span>Bis</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_9[]" class="checkbox" type="checkbox" value="Flocos de Arroz">
                                                                            <span>Flocos de Arroz</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_9[]" class="checkbox" type="checkbox" value="Granola">
                                                                            <span>Granola</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_9[]" class="checkbox" type="checkbox" value="Amendoin">
                                                                            <span>Amendoin</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_9[]" class="checkbox" type="checkbox" value="Paçoca">
                                                                            <span>Paçoca</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_9[]" class="checkbox" type="checkbox" value="Sucrilhos">
                                                                            <span>Sucrilhos</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_9[]" class="checkbox" type="checkbox" value="Leite em po">
                                                                            <span>Leite em pó</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_9[]" class="checkbox" type="checkbox" value="Ovo maltine">
                                                                            <span>Ovo maltine</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_9[]" class="checkbox" type="checkbox" value="Suspiro">
                                                                            <span>Suspiro</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_9[]" class="checkbox" type="checkbox" value="Raspa de Choc. Branco">
                                                                            <span>Raspa de Choc. Branco</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_9[]" class="checkbox" type="checkbox" value="Raspa de Choc. Preto">
                                                                            <span>Raspa de Choc. Preto</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_9[]" class="checkbox" type="checkbox" value="Canudos Waffer">
                                                                            <span>Canudos Waffer</span>
                                                                        </label>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-6 col-sm-3"><section class="section">
                                                        <br><button type="button" class="btn btn-primary-outline" onClick="Voltar()"/>Voltar
                                                    </section>
                                                </div>
                                                            
                                                    
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
        
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
                                                            <section class="section">
                                                                <br><button type="submit" name="enviar" class="btn btn-primary-outline"/>Avançar
                                                            </section>
                                                        </div>
                                                </div>
                                      </div>

                                      <!-- Pedido 10 -->
                                      <div id="pedido10" class="tabcontent">
                                            <div class="header-block">
                                                    <br><h3 class="title">Realizar Pedido Nº10</h3><br>
                                                </div>
                                            <div class="row">
                                                    <div class="col-6 col-md-4">
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label class="control-label"><u><font color="purple">Tamanho</font></u></label>
                                                                <div>
                                                                        <label>
                                                                           <select required class="form-control" name="valor_acai_10" id="valor_acai_10">
                                                                               <option value="0">&nbsp;-- Selecionar --&nbsp;&nbsp;&nbsp;</option>
                                                                               <optgroup label="Açai">
                                                                               <option value="7">Mini R$7,00</option>
                                                                               <option value="10">P | R$10,00</option>
                                                                               <option value="14">M | R$14,00</option>
                                                                               <option value="23">G | R$23,00</option>
                                                                               </optgroup>
                                                                           </select>
                                                                        </label>
                                                                </div>
                                                                <br><label class="control-label"><u><font color="purple">Frutas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_10[]" class="checkbox" type="checkbox" value="Abacaxi">
                                                                            <span>Abacaxi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_10[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_10[]" class="checkbox" type="checkbox" value="Banana">
                                                                            <span>Banana</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_10[]" class="checkbox" type="checkbox" value="Manga">
                                                                            <span>Manga</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_10[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
        
                                                                    <br><label class="control-label"><u><font color="purple">Adicional</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="sorvete_10" class="checkbox" type="checkbox" value="Cupuacu">
                                                                            <span>Cupuaçu</span>
                                                                        </label>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Caldas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_10[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_10[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_10[]" class="checkbox" type="checkbox" value="Chocolate">
                                                                            <span>Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_10[]" class="checkbox" type="checkbox" value="Caramelo">
                                                                            <span>Caramelo</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_10[]" class="checkbox" type="checkbox" value="Leite Cond.">
                                                                            <span>Leite Cond.</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_10[]" class="checkbox" type="checkbox" value="Doce de Leite">
                                                                            <span>Doce de Leite</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_10[]" class="checkbox" type="checkbox" value="Mel">
                                                                            <span>Mel</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_10[]" class="checkbox" type="checkbox" value="Groselha">
                                                                            <span>Groselha</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_10[]" class="checkbox" type="checkbox" value="Maracuja">
                                                                            <span>Marácuja</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_10[]" class="checkbox" type="checkbox" value="Acai c/ guarana">
                                                                            <span>Açaí c/ guaraná</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                    </div>
        
        
        
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Complementos</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_10[]" class="checkbox" type="checkbox" value="Bolinha de Chocolate">
                                                                            <span>Bolinha de Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_10[]" class="checkbox" type="checkbox" value="Confete">
                                                                            <span>Confete</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_10[]" class="checkbox" type="checkbox" value="Bis">
                                                                            <span>Bis</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_10[]" class="checkbox" type="checkbox" value="Flocos de Arroz">
                                                                            <span>Flocos de Arroz</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_10[]" class="checkbox" type="checkbox" value="Granola">
                                                                            <span>Granola</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_10[]" class="checkbox" type="checkbox" value="Amendoin">
                                                                            <span>Amendoin</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_10[]" class="checkbox" type="checkbox" value="Paçoca">
                                                                            <span>Paçoca</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_10[]" class="checkbox" type="checkbox" value="Sucrilhos">
                                                                            <span>Sucrilhos</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_10[]" class="checkbox" type="checkbox" value="Leite em po">
                                                                            <span>Leite em pó</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_10[]" class="checkbox" type="checkbox" value="Ovo maltine">
                                                                            <span>Ovo maltine</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_10[]" class="checkbox" type="checkbox" value="Suspiro">
                                                                            <span>Suspiro</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_10[]" class="checkbox" type="checkbox" value="Raspa de Choc. Branco">
                                                                            <span>Raspa de Choc. Branco</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_10[]" class="checkbox" type="checkbox" value="Raspa de Choc. Preto">
                                                                            <span>Raspa de Choc. Preto</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_10[]" class="checkbox" type="checkbox" value="Canudos Waffer">
                                                                            <span>Canudos Waffer</span>
                                                                        </label>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-6 col-sm-3"><section class="section">
                                                        <br><button type="button" class="btn btn-primary-outline" onClick="Voltar()"/>Voltar
                                                    </section>
                                                </div>
                                                            
                                                    
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
        
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
                                                            <section class="section">
                                                                <br><button type="submit" name="enviar" class="btn btn-primary-outline"/>Avançar
                                                            </section>
                                                        </div>
                                                </div>
                                      </div>

                                      <!-- Pedido 11 -->
                                      <div id="pedido11" class="tabcontent">
                                            <div class="header-block">
                                                    <br><h3 class="title">Realizar Pedido Nº11</h3><br>
                                                </div>
                                            <div class="row">
                                                    <div class="col-6 col-md-4">
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label class="control-label"><u><font color="purple">Tamanho</font></u></label>
                                                                <div>
                                                                        <label>
                                                                           <select required class="form-control" name="valor_acai_11" id="valor_acai_11">
                                                                               <option value="0">&nbsp;-- Selecionar --&nbsp;&nbsp;&nbsp;</option>
                                                                               <optgroup label="Açai">
                                                                               <option value="7">Mini R$7,00</option>
                                                                               <option value="10">P | R$10,00</option>
                                                                               <option value="14">M | R$14,00</option>
                                                                               <option value="23">G | R$23,00</option>
                                                                               </optgroup>
                                                                           </select>
                                                                        </label>
                                                                </div>
                                                                <br><label class="control-label"><u><font color="purple">Frutas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_11[]" class="checkbox" type="checkbox" value="Abacaxi">
                                                                            <span>Abacaxi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_11[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_11[]" class="checkbox" type="checkbox" value="Banana">
                                                                            <span>Banana</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_11[]" class="checkbox" type="checkbox" value="Manga">
                                                                            <span>Manga</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_11[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
        
                                                                    <br><label class="control-label"><u><font color="purple">Adicional</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="sorvete_11" class="checkbox" type="checkbox" value="Cupuacu">
                                                                            <span>Cupuaçu</span>
                                                                        </label>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Caldas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_11[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_11[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_11[]" class="checkbox" type="checkbox" value="Chocolate">
                                                                            <span>Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_11[]" class="checkbox" type="checkbox" value="Caramelo">
                                                                            <span>Caramelo</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_11[]" class="checkbox" type="checkbox" value="Leite Cond.">
                                                                            <span>Leite Cond.</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_11[]" class="checkbox" type="checkbox" value="Doce de Leite">
                                                                            <span>Doce de Leite</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_11[]" class="checkbox" type="checkbox" value="Mel">
                                                                            <span>Mel</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_11[]" class="checkbox" type="checkbox" value="Groselha">
                                                                            <span>Groselha</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_11[]" class="checkbox" type="checkbox" value="Maracuja">
                                                                            <span>Marácuja</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_11[]" class="checkbox" type="checkbox" value="Acai c/ guarana">
                                                                            <span>Açaí c/ guaraná</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                    </div>
        
        
        
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Complementos</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_11[]" class="checkbox" type="checkbox" value="Bolinha de Chocolate">
                                                                            <span>Bolinha de Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_11[]" class="checkbox" type="checkbox" value="Confete">
                                                                            <span>Confete</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_11[]" class="checkbox" type="checkbox" value="Bis">
                                                                            <span>Bis</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_11[]" class="checkbox" type="checkbox" value="Flocos de Arroz">
                                                                            <span>Flocos de Arroz</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_11[]" class="checkbox" type="checkbox" value="Granola">
                                                                            <span>Granola</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_11[]" class="checkbox" type="checkbox" value="Amendoin">
                                                                            <span>Amendoin</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_11[]" class="checkbox" type="checkbox" value="Paçoca">
                                                                            <span>Paçoca</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_11[]" class="checkbox" type="checkbox" value="Sucrilhos">
                                                                            <span>Sucrilhos</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_11[]" class="checkbox" type="checkbox" value="Leite em po">
                                                                            <span>Leite em pó</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_11[]" class="checkbox" type="checkbox" value="Ovo maltine">
                                                                            <span>Ovo maltine</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_11[]" class="checkbox" type="checkbox" value="Suspiro">
                                                                            <span>Suspiro</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_11[]" class="checkbox" type="checkbox" value="Raspa de Choc. Branco">
                                                                            <span>Raspa de Choc. Branco</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_11[]" class="checkbox" type="checkbox" value="Raspa de Choc. Preto">
                                                                            <span>Raspa de Choc. Preto</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_11[]" class="checkbox" type="checkbox" value="Canudos Waffer">
                                                                            <span>Canudos Waffer</span>
                                                                        </label>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-6 col-sm-3"><section class="section">
                                                        <br><button type="button" class="btn btn-primary-outline" onClick="Voltar()"/>Voltar
                                                    </section>
                                                </div>
                                                            
                                                    
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
        
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
                                                            <section class="section">
                                                                <br><button type="submit" name="enviar" class="btn btn-primary-outline"/>Avançar
                                                            </section>
                                                        </div>
                                                </div>
                                      </div>

                                      <!-- Pedido 12 -->
                                      <div id="pedido12" class="tabcontent">
                                            <div class="header-block">
                                                    <br><h3 class="title">Realizar Pedido Nº12</h3><br>
                                                </div>
                                            <div class="row">
                                                    <div class="col-6 col-md-4">
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label class="control-label"><u><font color="purple">Tamanho</font></u></label>
                                                                <div>
                                                                        <label>
                                                                           <select required class="form-control" name="valor_acai_12" id="valor_acai_12">
                                                                               <option value="0">&nbsp;-- Selecionar --&nbsp;&nbsp;&nbsp;</option>
                                                                               <optgroup label="Açai">
                                                                               <option value="7">Mini R$7,00</option>
                                                                               <option value="10">P | R$10,00</option>
                                                                               <option value="14">M | R$14,00</option>
                                                                               <option value="23">G | R$23,00</option>
                                                                               </optgroup>
                                                                           </select>
                                                                        </label>
                                                                </div>
                                                                <br><label class="control-label"><u><font color="purple">Frutas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_12[]" class="checkbox" type="checkbox" value="Abacaxi">
                                                                            <span>Abacaxi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_12[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_12[]" class="checkbox" type="checkbox" value="Banana">
                                                                            <span>Banana</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_12[]" class="checkbox" type="checkbox" value="Manga">
                                                                            <span>Manga</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_12[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
        
                                                                    <br><label class="control-label"><u><font color="purple">Adicional</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="sorvete_12" class="checkbox" type="checkbox" value="Cupuacu">
                                                                            <span>Cupuaçu</span>
                                                                        </label>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Caldas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_12[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_12[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_12[]" class="checkbox" type="checkbox" value="Chocolate">
                                                                            <span>Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_12[]" class="checkbox" type="checkbox" value="Caramelo">
                                                                            <span>Caramelo</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_12[]" class="checkbox" type="checkbox" value="Leite Cond.">
                                                                            <span>Leite Cond.</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_12[]" class="checkbox" type="checkbox" value="Doce de Leite">
                                                                            <span>Doce de Leite</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_12[]" class="checkbox" type="checkbox" value="Mel">
                                                                            <span>Mel</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_12[]" class="checkbox" type="checkbox" value="Groselha">
                                                                            <span>Groselha</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_12[]" class="checkbox" type="checkbox" value="Maracuja">
                                                                            <span>Marácuja</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_12[]" class="checkbox" type="checkbox" value="Acai c/ guarana">
                                                                            <span>Açaí c/ guaraná</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                    </div>
        
        
        
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Complementos</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_12[]" class="checkbox" type="checkbox" value="Bolinha de Chocolate">
                                                                            <span>Bolinha de Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_12[]" class="checkbox" type="checkbox" value="Confete">
                                                                            <span>Confete</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_12[]" class="checkbox" type="checkbox" value="Bis">
                                                                            <span>Bis</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_12[]" class="checkbox" type="checkbox" value="Flocos de Arroz">
                                                                            <span>Flocos de Arroz</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_12[]" class="checkbox" type="checkbox" value="Granola">
                                                                            <span>Granola</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_12[]" class="checkbox" type="checkbox" value="Amendoin">
                                                                            <span>Amendoin</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_12[]" class="checkbox" type="checkbox" value="Paçoca">
                                                                            <span>Paçoca</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_12[]" class="checkbox" type="checkbox" value="Sucrilhos">
                                                                            <span>Sucrilhos</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_12[]" class="checkbox" type="checkbox" value="Leite em po">
                                                                            <span>Leite em pó</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_12[]" class="checkbox" type="checkbox" value="Ovo maltine">
                                                                            <span>Ovo maltine</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_12[]" class="checkbox" type="checkbox" value="Suspiro">
                                                                            <span>Suspiro</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_12[]" class="checkbox" type="checkbox" value="Raspa de Choc. Branco">
                                                                            <span>Raspa de Choc. Branco</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_12[]" class="checkbox" type="checkbox" value="Raspa de Choc. Preto">
                                                                            <span>Raspa de Choc. Preto</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_12[]" class="checkbox" type="checkbox" value="Canudos Waffer">
                                                                            <span>Canudos Waffer</span>
                                                                        </label>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-6 col-sm-3"><section class="section">
                                                        <br><button type="button" class="btn btn-primary-outline" onClick="Voltar()"/>Voltar
                                                    </section>
                                                </div>
                                                            
                                                    
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
        
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
                                                            <section class="section">
                                                                <br><button type="submit" name="enviar" class="btn btn-primary-outline"/>Avançar
                                                            </section>
                                                        </div>
                                                </div>
                                      </div>

                                      <!-- Pedido 13 -->
                                      <div id="pedido13" class="tabcontent">
                                            <div class="header-block">
                                                    <br><h3 class="title">Realizar Pedido Nº13</h3><br>
                                                </div>
                                            <div class="row">
                                                    <div class="col-6 col-md-4">
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label class="control-label"><u><font color="purple">Tamanho</font></u></label>
                                                                <div>
                                                                        <label>
                                                                           <select required class="form-control" name="valor_acai_13" id="valor_acai_13">
                                                                               <option value="0">&nbsp;-- Selecionar --&nbsp;&nbsp;&nbsp;</option>
                                                                               <optgroup label="Açai">
                                                                               <option value="7">Mini R$7,00</option>
                                                                               <option value="10">P | R$10,00</option>
                                                                               <option value="14">M | R$14,00</option>
                                                                               <option value="23">G | R$23,00</option>
                                                                               </optgroup>
                                                                           </select>
                                                                        </label>
                                                                </div>
                                                                <br><label class="control-label"><u><font color="purple">Frutas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_13[]" class="checkbox" type="checkbox" value="Abacaxi">
                                                                            <span>Abacaxi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_13[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_13[]" class="checkbox" type="checkbox" value="Banana">
                                                                            <span>Banana</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_13[]" class="checkbox" type="checkbox" value="Manga">
                                                                            <span>Manga</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_13[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
        
                                                                    <br><label class="control-label"><u><font color="purple">Adicional</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="sorvete_13" class="checkbox" type="checkbox" value="Cupuacu">
                                                                            <span>Cupuaçu</span>
                                                                        </label>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Caldas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_13[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_13[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_13[]" class="checkbox" type="checkbox" value="Chocolate">
                                                                            <span>Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_13[]" class="checkbox" type="checkbox" value="Caramelo">
                                                                            <span>Caramelo</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_13[]" class="checkbox" type="checkbox" value="Leite Cond.">
                                                                            <span>Leite Cond.</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_13[]" class="checkbox" type="checkbox" value="Doce de Leite">
                                                                            <span>Doce de Leite</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_13[]" class="checkbox" type="checkbox" value="Mel">
                                                                            <span>Mel</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_13[]" class="checkbox" type="checkbox" value="Groselha">
                                                                            <span>Groselha</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_13[]" class="checkbox" type="checkbox" value="Maracuja">
                                                                            <span>Marácuja</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_13[]" class="checkbox" type="checkbox" value="Acai c/ guarana">
                                                                            <span>Açaí c/ guaraná</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                    </div>
        
        
        
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Complementos</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_13[]" class="checkbox" type="checkbox" value="Bolinha de Chocolate">
                                                                            <span>Bolinha de Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_13[]" class="checkbox" type="checkbox" value="Confete">
                                                                            <span>Confete</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_13[]" class="checkbox" type="checkbox" value="Bis">
                                                                            <span>Bis</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_13[]" class="checkbox" type="checkbox" value="Flocos de Arroz">
                                                                            <span>Flocos de Arroz</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_13[]" class="checkbox" type="checkbox" value="Granola">
                                                                            <span>Granola</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_13[]" class="checkbox" type="checkbox" value="Amendoin">
                                                                            <span>Amendoin</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_13[]" class="checkbox" type="checkbox" value="Paçoca">
                                                                            <span>Paçoca</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_13[]" class="checkbox" type="checkbox" value="Sucrilhos">
                                                                            <span>Sucrilhos</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_13[]" class="checkbox" type="checkbox" value="Leite em po">
                                                                            <span>Leite em pó</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_13[]" class="checkbox" type="checkbox" value="Ovo maltine">
                                                                            <span>Ovo maltine</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_13[]" class="checkbox" type="checkbox" value="Suspiro">
                                                                            <span>Suspiro</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_13[]" class="checkbox" type="checkbox" value="Raspa de Choc. Branco">
                                                                            <span>Raspa de Choc. Branco</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_13[]" class="checkbox" type="checkbox" value="Raspa de Choc. Preto">
                                                                            <span>Raspa de Choc. Preto</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_13[]" class="checkbox" type="checkbox" value="Canudos Waffer">
                                                                            <span>Canudos Waffer</span>
                                                                        </label>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-6 col-sm-3"><section class="section">
                                                        <br><button type="button" class="btn btn-primary-outline" onClick="Voltar()"/>Voltar
                                                    </section>
                                                </div>
                                                            
                                                    
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
        
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
                                                            <section class="section">
                                                                <br><button type="submit" name="enviar" class="btn btn-primary-outline"/>Avançar
                                                            </section>
                                                        </div>
                                                </div>
                                      </div>

                                      <!-- Pedido 14 -->
                                      <div id="pedido14" class="tabcontent">
                                            <div class="header-block">
                                                    <br><h3 class="title">Realizar Pedido Nº14</h3><br>
                                                </div>
                                            <div class="row">
                                                    <div class="col-6 col-md-4">
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label class="control-label"><u><font color="purple">Tamanho</font></u></label>
                                                                <div>
                                                                        <label>
                                                                           <select required class="form-control" name="valor_acai_14" id="valor_acai_14">
                                                                               <option value="0">&nbsp;-- Selecionar --&nbsp;&nbsp;&nbsp;</option>
                                                                               <optgroup label="Açai">
                                                                               <option value="7">Mini R$7,00</option>
                                                                               <option value="10">P | R$10,00</option>
                                                                               <option value="14">M | R$14,00</option>
                                                                               <option value="23">G | R$23,00</option>
                                                                               </optgroup>
                                                                           </select>
                                                                        </label>
                                                                </div>
                                                                <br><label class="control-label"><u><font color="purple">Frutas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_14[]" class="checkbox" type="checkbox" value="Abacaxi">
                                                                            <span>Abacaxi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_14[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_14[]" class="checkbox" type="checkbox" value="Banana">
                                                                            <span>Banana</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_14[]" class="checkbox" type="checkbox" value="Manga">
                                                                            <span>Manga</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_14[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
        
                                                                    <br><label class="control-label"><u><font color="purple">Adicional</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="sorvete_14" class="checkbox" type="checkbox" value="Cupuacu">
                                                                            <span>Cupuaçu</span>
                                                                        </label>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Caldas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_14[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_14[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_14[]" class="checkbox" type="checkbox" value="Chocolate">
                                                                            <span>Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_14[]" class="checkbox" type="checkbox" value="Caramelo">
                                                                            <span>Caramelo</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_14[]" class="checkbox" type="checkbox" value="Leite Cond.">
                                                                            <span>Leite Cond.</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_14[]" class="checkbox" type="checkbox" value="Doce de Leite">
                                                                            <span>Doce de Leite</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_14[]" class="checkbox" type="checkbox" value="Mel">
                                                                            <span>Mel</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_14[]" class="checkbox" type="checkbox" value="Groselha">
                                                                            <span>Groselha</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_14[]" class="checkbox" type="checkbox" value="Maracuja">
                                                                            <span>Marácuja</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_14[]" class="checkbox" type="checkbox" value="Acai c/ guarana">
                                                                            <span>Açaí c/ guaraná</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                    </div>
        
        
        
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Complementos</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_14[]" class="checkbox" type="checkbox" value="Bolinha de Chocolate">
                                                                            <span>Bolinha de Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_14[]" class="checkbox" type="checkbox" value="Confete">
                                                                            <span>Confete</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_14[]" class="checkbox" type="checkbox" value="Bis">
                                                                            <span>Bis</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_14[]" class="checkbox" type="checkbox" value="Flocos de Arroz">
                                                                            <span>Flocos de Arroz</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_14[]" class="checkbox" type="checkbox" value="Granola">
                                                                            <span>Granola</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_14[]" class="checkbox" type="checkbox" value="Amendoin">
                                                                            <span>Amendoin</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_14[]" class="checkbox" type="checkbox" value="Paçoca">
                                                                            <span>Paçoca</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_14[]" class="checkbox" type="checkbox" value="Sucrilhos">
                                                                            <span>Sucrilhos</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_14[]" class="checkbox" type="checkbox" value="Leite em po">
                                                                            <span>Leite em pó</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_14[]" class="checkbox" type="checkbox" value="Ovo maltine">
                                                                            <span>Ovo maltine</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_14[]" class="checkbox" type="checkbox" value="Suspiro">
                                                                            <span>Suspiro</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_14[]" class="checkbox" type="checkbox" value="Raspa de Choc. Branco">
                                                                            <span>Raspa de Choc. Branco</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_14[]" class="checkbox" type="checkbox" value="Raspa de Choc. Preto">
                                                                            <span>Raspa de Choc. Preto</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_14[]" class="checkbox" type="checkbox" value="Canudos Waffer">
                                                                            <span>Canudos Waffer</span>
                                                                        </label>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-6 col-sm-3"><section class="section">
                                                        <br><button type="button" class="btn btn-primary-outline" onClick="Voltar()"/>Voltar
                                                    </section>
                                                </div>
                                                            
                                                    
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
        
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
                                                            <section class="section">
                                                                <br><button type="submit" name="enviar" class="btn btn-primary-outline"/>Avançar
                                                            </section>
                                                        </div>
                                                </div>
                                      </div>

                                      <!-- Pedido 15 -->
                                      <div id="pedido15" class="tabcontent">
                                            <div class="header-block">
                                                    <br><h3 class="title">Realizar Pedido Nº15</h3><br>
                                                </div>
                                            <div class="row">
                                                    <div class="col-6 col-md-4">
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label class="control-label"><u><font color="purple">Tamanho</font></u></label>
                                                                <div>
                                                                        <label>
                                                                           <select required class="form-control" name="valor_acai_15" id="valor_acai_15">
                                                                               <option value="0">&nbsp;-- Selecionar --&nbsp;&nbsp;&nbsp;</option>
                                                                               <optgroup label="Açai">
                                                                               <option value="7">Mini R$7,00</option>
                                                                               <option value="10">P | R$10,00</option>
                                                                               <option value="14">M | R$14,00</option>
                                                                               <option value="23">G | R$23,00</option>
                                                                               </optgroup>
                                                                           </select>
                                                                        </label>
                                                                </div>
                                                                <br><label class="control-label"><u><font color="purple">Frutas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_15[]" class="checkbox" type="checkbox" value="Abacaxi">
                                                                            <span>Abacaxi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_15[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_15[]" class="checkbox" type="checkbox" value="Banana">
                                                                            <span>Banana</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_15[]" class="checkbox" type="checkbox" value="Manga">
                                                                            <span>Manga</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_15[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
        
                                                                    <br><label class="control-label"><u><font color="purple">Adicional</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="sorvete_15" class="checkbox" type="checkbox" value="Cupuacu">
                                                                            <span>Cupuaçu</span>
                                                                        </label>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Caldas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_15[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_15[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_15[]" class="checkbox" type="checkbox" value="Chocolate">
                                                                            <span>Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_15[]" class="checkbox" type="checkbox" value="Caramelo">
                                                                            <span>Caramelo</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_15[]" class="checkbox" type="checkbox" value="Leite Cond.">
                                                                            <span>Leite Cond.</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_15[]" class="checkbox" type="checkbox" value="Doce de Leite">
                                                                            <span>Doce de Leite</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_15[]" class="checkbox" type="checkbox" value="Mel">
                                                                            <span>Mel</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_15[]" class="checkbox" type="checkbox" value="Groselha">
                                                                            <span>Groselha</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_15[]" class="checkbox" type="checkbox" value="Maracuja">
                                                                            <span>Marácuja</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_15[]" class="checkbox" type="checkbox" value="Acai c/ guarana">
                                                                            <span>Açaí c/ guaraná</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                    </div>
        
        
        
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Complementos</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_15[]" class="checkbox" type="checkbox" value="Bolinha de Chocolate">
                                                                            <span>Bolinha de Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_15[]" class="checkbox" type="checkbox" value="Confete">
                                                                            <span>Confete</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_15[]" class="checkbox" type="checkbox" value="Bis">
                                                                            <span>Bis</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_15[]" class="checkbox" type="checkbox" value="Flocos de Arroz">
                                                                            <span>Flocos de Arroz</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_15[]" class="checkbox" type="checkbox" value="Granola">
                                                                            <span>Granola</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_15[]" class="checkbox" type="checkbox" value="Amendoin">
                                                                            <span>Amendoin</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_15[]" class="checkbox" type="checkbox" value="Paçoca">
                                                                            <span>Paçoca</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_15[]" class="checkbox" type="checkbox" value="Sucrilhos">
                                                                            <span>Sucrilhos</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_15[]" class="checkbox" type="checkbox" value="Leite em po">
                                                                            <span>Leite em pó</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_15[]" class="checkbox" type="checkbox" value="Ovo maltine">
                                                                            <span>Ovo maltine</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_15[]" class="checkbox" type="checkbox" value="Suspiro">
                                                                            <span>Suspiro</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_15[]" class="checkbox" type="checkbox" value="Raspa de Choc. Branco">
                                                                            <span>Raspa de Choc. Branco</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_15[]" class="checkbox" type="checkbox" value="Raspa de Choc. Preto">
                                                                            <span>Raspa de Choc. Preto</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_15[]" class="checkbox" type="checkbox" value="Canudos Waffer">
                                                                            <span>Canudos Waffer</span>
                                                                        </label>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-6 col-sm-3"><section class="section">
                                                        <br><button type="button" class="btn btn-primary-outline" onClick="Voltar()"/>Voltar
                                                    </section>
                                                </div>
                                                            
                                                    
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
        
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
                                                            <section class="section">
                                                                <br><button type="submit" name="enviar" class="btn btn-primary-outline"/>Avançar
                                                            </section>
                                                        </div>
                                                </div>
                                      </div>

                                      <!-- Pedido 16 -->
                                      <div id="pedido16" class="tabcontent">
                                            <div class="header-block">
                                                    <br><h3 class="title">Realizar Pedido Nº16</h3><br>
                                                </div>
                                            <div class="row">
                                                    <div class="col-6 col-md-4">
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label class="control-label"><u><font color="purple">Tamanho</font></u></label>
                                                                <div>
                                                                        <label>
                                                                           <select required class="form-control" name="valor_acai_16" id="valor_acai_16">
                                                                               <option value="0">&nbsp;-- Selecionar --&nbsp;&nbsp;&nbsp;</option>
                                                                               <optgroup label="Açai">
                                                                               <option value="7">Mini R$7,00</option>
                                                                               <option value="10">P | R$10,00</option>
                                                                               <option value="14">M | R$14,00</option>
                                                                               <option value="23">G | R$23,00</option>
                                                                               </optgroup>
                                                                           </select>
                                                                        </label>
                                                                </div>
                                                                <br><label class="control-label"><u><font color="purple">Frutas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_16[]" class="checkbox" type="checkbox" value="Abacaxi">
                                                                            <span>Abacaxi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_16[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_16[]" class="checkbox" type="checkbox" value="Banana">
                                                                            <span>Banana</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_16[]" class="checkbox" type="checkbox" value="Manga">
                                                                            <span>Manga</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_16[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
        
                                                                    <br><label class="control-label"><u><font color="purple">Adicional</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="sorvete_16" class="checkbox" type="checkbox" value="Cupuacu">
                                                                            <span>Cupuaçu</span>
                                                                        </label>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Caldas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_16[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_16[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_16[]" class="checkbox" type="checkbox" value="Chocolate">
                                                                            <span>Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_16[]" class="checkbox" type="checkbox" value="Caramelo">
                                                                            <span>Caramelo</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_16[]" class="checkbox" type="checkbox" value="Leite Cond.">
                                                                            <span>Leite Cond.</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_16[]" class="checkbox" type="checkbox" value="Doce de Leite">
                                                                            <span>Doce de Leite</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_16[]" class="checkbox" type="checkbox" value="Mel">
                                                                            <span>Mel</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_16[]" class="checkbox" type="checkbox" value="Groselha">
                                                                            <span>Groselha</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_16[]" class="checkbox" type="checkbox" value="Maracuja">
                                                                            <span>Marácuja</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_16[]" class="checkbox" type="checkbox" value="Acai c/ guarana">
                                                                            <span>Açaí c/ guaraná</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                    </div>
        
        
        
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Complementos</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_16[]" class="checkbox" type="checkbox" value="Bolinha de Chocolate">
                                                                            <span>Bolinha de Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_16[]" class="checkbox" type="checkbox" value="Confete">
                                                                            <span>Confete</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_16[]" class="checkbox" type="checkbox" value="Bis">
                                                                            <span>Bis</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_16[]" class="checkbox" type="checkbox" value="Flocos de Arroz">
                                                                            <span>Flocos de Arroz</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_16[]" class="checkbox" type="checkbox" value="Granola">
                                                                            <span>Granola</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_16[]" class="checkbox" type="checkbox" value="Amendoin">
                                                                            <span>Amendoin</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_16[]" class="checkbox" type="checkbox" value="Paçoca">
                                                                            <span>Paçoca</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_16[]" class="checkbox" type="checkbox" value="Sucrilhos">
                                                                            <span>Sucrilhos</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_16[]" class="checkbox" type="checkbox" value="Leite em po">
                                                                            <span>Leite em pó</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_16[]" class="checkbox" type="checkbox" value="Ovo maltine">
                                                                            <span>Ovo maltine</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_16[]" class="checkbox" type="checkbox" value="Suspiro">
                                                                            <span>Suspiro</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_16[]" class="checkbox" type="checkbox" value="Raspa de Choc. Branco">
                                                                            <span>Raspa de Choc. Branco</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_16[]" class="checkbox" type="checkbox" value="Raspa de Choc. Preto">
                                                                            <span>Raspa de Choc. Preto</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_16[]" class="checkbox" type="checkbox" value="Canudos Waffer">
                                                                            <span>Canudos Waffer</span>
                                                                        </label>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-6 col-sm-3"><section class="section">
                                                        <br><button type="button" class="btn btn-primary-outline" onClick="Voltar()"/>Voltar
                                                    </section>
                                                </div>
                                                            
                                                    
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
        
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
                                                            <section class="section">
                                                                <br><button type="submit" name="enviar" class="btn btn-primary-outline"/>Avançar
                                                            </section>
                                                        </div>
                                                </div>
                                      </div>

                                      <!-- Pedido 17 -->
                                      <div id="pedido17" class="tabcontent">
                                            <div class="header-block">
                                                    <br><h3 class="title">Realizar Pedido Nº17</h3><br>
                                                </div>
                                            <div class="row">
                                                    <div class="col-6 col-md-4">
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label class="control-label"><u><font color="purple">Tamanho</font></u></label>
                                                                <div>
                                                                        <label>
                                                                           <select required class="form-control" name="valor_acai_17" id="valor_acai_17">
                                                                               <option value="0">&nbsp;-- Selecionar --&nbsp;&nbsp;&nbsp;</option>
                                                                               <optgroup label="Açai">
                                                                               <option value="7">Mini R$7,00</option>
                                                                               <option value="10">P | R$10,00</option>
                                                                               <option value="14">M | R$14,00</option>
                                                                               <option value="23">G | R$23,00</option>
                                                                               </optgroup>
                                                                           </select>
                                                                        </label>
                                                                </div>
                                                                <br><label class="control-label"><u><font color="purple">Frutas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_17[]" class="checkbox" type="checkbox" value="Abacaxi">
                                                                            <span>Abacaxi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_17[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_17[]" class="checkbox" type="checkbox" value="Banana">
                                                                            <span>Banana</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_17[]" class="checkbox" type="checkbox" value="Manga">
                                                                            <span>Manga</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_17[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
        
                                                                    <br><label class="control-label"><u><font color="purple">Adicional</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="sorvete_17" class="checkbox" type="checkbox" value="Cupuacu">
                                                                            <span>Cupuaçu</span>
                                                                        </label>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Caldas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_17[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_17[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_17[]" class="checkbox" type="checkbox" value="Chocolate">
                                                                            <span>Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_17[]" class="checkbox" type="checkbox" value="Caramelo">
                                                                            <span>Caramelo</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_17[]" class="checkbox" type="checkbox" value="Leite Cond.">
                                                                            <span>Leite Cond.</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_17[]" class="checkbox" type="checkbox" value="Doce de Leite">
                                                                            <span>Doce de Leite</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_17[]" class="checkbox" type="checkbox" value="Mel">
                                                                            <span>Mel</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_17[]" class="checkbox" type="checkbox" value="Groselha">
                                                                            <span>Groselha</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_17[]" class="checkbox" type="checkbox" value="Maracuja">
                                                                            <span>Marácuja</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_17[]" class="checkbox" type="checkbox" value="Acai c/ guarana">
                                                                            <span>Açaí c/ guaraná</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                    </div>
        
        
        
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Complementos</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_17[]" class="checkbox" type="checkbox" value="Bolinha de Chocolate">
                                                                            <span>Bolinha de Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_17[]" class="checkbox" type="checkbox" value="Confete">
                                                                            <span>Confete</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_17[]" class="checkbox" type="checkbox" value="Bis">
                                                                            <span>Bis</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_17[]" class="checkbox" type="checkbox" value="Flocos de Arroz">
                                                                            <span>Flocos de Arroz</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_17[]" class="checkbox" type="checkbox" value="Granola">
                                                                            <span>Granola</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_17[]" class="checkbox" type="checkbox" value="Amendoin">
                                                                            <span>Amendoin</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_17[]" class="checkbox" type="checkbox" value="Paçoca">
                                                                            <span>Paçoca</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_17[]" class="checkbox" type="checkbox" value="Sucrilhos">
                                                                            <span>Sucrilhos</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_17[]" class="checkbox" type="checkbox" value="Leite em po">
                                                                            <span>Leite em pó</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_17[]" class="checkbox" type="checkbox" value="Ovo maltine">
                                                                            <span>Ovo maltine</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_17[]" class="checkbox" type="checkbox" value="Suspiro">
                                                                            <span>Suspiro</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_17[]" class="checkbox" type="checkbox" value="Raspa de Choc. Branco">
                                                                            <span>Raspa de Choc. Branco</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_17[]" class="checkbox" type="checkbox" value="Raspa de Choc. Preto">
                                                                            <span>Raspa de Choc. Preto</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_17[]" class="checkbox" type="checkbox" value="Canudos Waffer">
                                                                            <span>Canudos Waffer</span>
                                                                        </label>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-6 col-sm-3"><section class="section">
                                                        <br><button type="button" class="btn btn-primary-outline" onClick="Voltar()"/>Voltar
                                                    </section>
                                                </div>
                                                            
                                                    
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
        
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
                                                            <section class="section">
                                                                <br><button type="submit" name="enviar" class="btn btn-primary-outline"/>Avançar
                                                            </section>
                                                        </div>
                                                </div>
                                      </div>

                                      <!-- Pedido 18 -->
                                      <div id="pedido18" class="tabcontent">
                                            <div class="header-block">
                                                    <br><h3 class="title">Realizar Pedido Nº18</h3><br>
                                                </div>
                                            <div class="row">
                                                    <div class="col-6 col-md-4">
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label class="control-label"><u><font color="purple">Tamanho</font></u></label>
                                                                <div>
                                                                        <label>
                                                                           <select required class="form-control" name="valor_acai_18" id="valor_acai_18">
                                                                               <option value="0">&nbsp;-- Selecionar --&nbsp;&nbsp;&nbsp;</option>
                                                                               <optgroup label="Açai">
                                                                               <option value="7">Mini R$7,00</option>
                                                                               <option value="10">P | R$10,00</option>
                                                                               <option value="14">M | R$14,00</option>
                                                                               <option value="23">G | R$23,00</option>
                                                                               </optgroup>
                                                                           </select>
                                                                        </label>
                                                                </div>
                                                                <br><label class="control-label"><u><font color="purple">Frutas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_18[]" class="checkbox" type="checkbox" value="Abacaxi">
                                                                            <span>Abacaxi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_18[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_18[]" class="checkbox" type="checkbox" value="Banana">
                                                                            <span>Banana</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_18[]" class="checkbox" type="checkbox" value="Manga">
                                                                            <span>Manga</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_18[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
        
                                                                    <br><label class="control-label"><u><font color="purple">Adicional</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="sorvete_18" class="checkbox" type="checkbox" value="Cupuacu">
                                                                            <span>Cupuaçu</span>
                                                                        </label>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Caldas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_18[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_18[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_18[]" class="checkbox" type="checkbox" value="Chocolate">
                                                                            <span>Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_18[]" class="checkbox" type="checkbox" value="Caramelo">
                                                                            <span>Caramelo</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_18[]" class="checkbox" type="checkbox" value="Leite Cond.">
                                                                            <span>Leite Cond.</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_18[]" class="checkbox" type="checkbox" value="Doce de Leite">
                                                                            <span>Doce de Leite</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_18[]" class="checkbox" type="checkbox" value="Mel">
                                                                            <span>Mel</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_18[]" class="checkbox" type="checkbox" value="Groselha">
                                                                            <span>Groselha</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_18[]" class="checkbox" type="checkbox" value="Maracuja">
                                                                            <span>Marácuja</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_18[]" class="checkbox" type="checkbox" value="Acai c/ guarana">
                                                                            <span>Açaí c/ guaraná</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                    </div>
        
        
        
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Complementos</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_18[]" class="checkbox" type="checkbox" value="Bolinha de Chocolate">
                                                                            <span>Bolinha de Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_18[]" class="checkbox" type="checkbox" value="Confete">
                                                                            <span>Confete</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_18[]" class="checkbox" type="checkbox" value="Bis">
                                                                            <span>Bis</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_18[]" class="checkbox" type="checkbox" value="Flocos de Arroz">
                                                                            <span>Flocos de Arroz</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_18[]" class="checkbox" type="checkbox" value="Granola">
                                                                            <span>Granola</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_18[]" class="checkbox" type="checkbox" value="Amendoin">
                                                                            <span>Amendoin</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_18[]" class="checkbox" type="checkbox" value="Paçoca">
                                                                            <span>Paçoca</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_18[]" class="checkbox" type="checkbox" value="Sucrilhos">
                                                                            <span>Sucrilhos</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_18[]" class="checkbox" type="checkbox" value="Leite em po">
                                                                            <span>Leite em pó</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_18[]" class="checkbox" type="checkbox" value="Ovo maltine">
                                                                            <span>Ovo maltine</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_18[]" class="checkbox" type="checkbox" value="Suspiro">
                                                                            <span>Suspiro</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_18[]" class="checkbox" type="checkbox" value="Raspa de Choc. Branco">
                                                                            <span>Raspa de Choc. Branco</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_18[]" class="checkbox" type="checkbox" value="Raspa de Choc. Preto">
                                                                            <span>Raspa de Choc. Preto</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_18[]" class="checkbox" type="checkbox" value="Canudos Waffer">
                                                                            <span>Canudos Waffer</span>
                                                                        </label>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-6 col-sm-3"><section class="section">
                                                        <br><button type="button" class="btn btn-primary-outline" onClick="Voltar()"/>Voltar
                                                    </section>
                                                </div>
                                                            
                                                    
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
        
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
                                                            <section class="section">
                                                                <br><button type="submit" name="enviar" class="btn btn-primary-outline"/>Avançar
                                                            </section>
                                                        </div>
                                                </div>
                                      </div>

                                      <!-- Pedido 19 -->
                                      <div id="pedido19" class="tabcontent">
                                            <div class="header-block">
                                                    <br><h3 class="title">Realizar Pedido Nº19</h3><br>
                                                </div>
                                            <div class="row">
                                                    <div class="col-6 col-md-4">
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label class="control-label"><u><font color="purple">Tamanho</font></u></label>
                                                                <div>
                                                                        <label>
                                                                           <select required class="form-control" name="valor_acai_19" id="valor_acai_19">
                                                                               <option value="0">&nbsp;-- Selecionar --&nbsp;&nbsp;&nbsp;</option>
                                                                               <optgroup label="Açai">
                                                                               <option value="7">Mini R$7,00</option>
                                                                               <option value="10">P | R$10,00</option>
                                                                               <option value="14">M | R$14,00</option>
                                                                               <option value="23">G | R$23,00</option>
                                                                               </optgroup>
                                                                           </select>
                                                                        </label>
                                                                </div>
                                                                <br><label class="control-label"><u><font color="purple">Frutas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_19[]" class="checkbox" type="checkbox" value="Abacaxi">
                                                                            <span>Abacaxi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_19[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_19[]" class="checkbox" type="checkbox" value="Banana">
                                                                            <span>Banana</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_19[]" class="checkbox" type="checkbox" value="Manga">
                                                                            <span>Manga</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_19[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
        
                                                                    <br><label class="control-label"><u><font color="purple">Adicional</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="sorvete_19" class="checkbox" type="checkbox" value="Cupuacu">
                                                                            <span>Cupuaçu</span>
                                                                        </label>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Caldas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_19[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_19[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_19[]" class="checkbox" type="checkbox" value="Chocolate">
                                                                            <span>Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_19[]" class="checkbox" type="checkbox" value="Caramelo">
                                                                            <span>Caramelo</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_19[]" class="checkbox" type="checkbox" value="Leite Cond.">
                                                                            <span>Leite Cond.</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_19[]" class="checkbox" type="checkbox" value="Doce de Leite">
                                                                            <span>Doce de Leite</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_19[]" class="checkbox" type="checkbox" value="Mel">
                                                                            <span>Mel</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_19[]" class="checkbox" type="checkbox" value="Groselha">
                                                                            <span>Groselha</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_19[]" class="checkbox" type="checkbox" value="Maracuja">
                                                                            <span>Marácuja</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_19[]" class="checkbox" type="checkbox" value="Acai c/ guarana">
                                                                            <span>Açaí c/ guaraná</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                    </div>
        
        
        
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Complementos</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_19[]" class="checkbox" type="checkbox" value="Bolinha de Chocolate">
                                                                            <span>Bolinha de Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_19[]" class="checkbox" type="checkbox" value="Confete">
                                                                            <span>Confete</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_19[]" class="checkbox" type="checkbox" value="Bis">
                                                                            <span>Bis</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_19[]" class="checkbox" type="checkbox" value="Flocos de Arroz">
                                                                            <span>Flocos de Arroz</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_19[]" class="checkbox" type="checkbox" value="Granola">
                                                                            <span>Granola</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_19[]" class="checkbox" type="checkbox" value="Amendoin">
                                                                            <span>Amendoin</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_19[]" class="checkbox" type="checkbox" value="Paçoca">
                                                                            <span>Paçoca</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_19[]" class="checkbox" type="checkbox" value="Sucrilhos">
                                                                            <span>Sucrilhos</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_19[]" class="checkbox" type="checkbox" value="Leite em po">
                                                                            <span>Leite em pó</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_19[]" class="checkbox" type="checkbox" value="Ovo maltine">
                                                                            <span>Ovo maltine</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_19[]" class="checkbox" type="checkbox" value="Suspiro">
                                                                            <span>Suspiro</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_19[]" class="checkbox" type="checkbox" value="Raspa de Choc. Branco">
                                                                            <span>Raspa de Choc. Branco</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_19[]" class="checkbox" type="checkbox" value="Raspa de Choc. Preto">
                                                                            <span>Raspa de Choc. Preto</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_19[]" class="checkbox" type="checkbox" value="Canudos Waffer">
                                                                            <span>Canudos Waffer</span>
                                                                        </label>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-6 col-sm-3"><section class="section">
                                                        <br><button type="button" class="btn btn-primary-outline" onClick="Voltar()"/>Voltar
                                                    </section>
                                                </div>
                                                            
                                                    
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
        
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
                                                            <section class="section">
                                                                <br><button type="submit" name="enviar" class="btn btn-primary-outline"/>Avançar
                                                            </section>
                                                        </div>
                                                </div>
                                      </div>

                                      <!-- Pedido 20 -->
                                      <div id="pedido20" class="tabcontent">
                                            <div class="header-block">
                                                    <br><h3 class="title">Realizar Pedido Nº20</h3><br>
                                                </div>
                                            <div class="row">
                                                    <div class="col-6 col-md-4">
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label class="control-label"><u><font color="purple">Tamanho</font></u></label>
                                                                <div>
                                                                        <label>
                                                                           <select required class="form-control" name="valor_acai_20" id="valor_acai_20">
                                                                               <option value="0">&nbsp;-- Selecionar --&nbsp;&nbsp;&nbsp;</option>
                                                                               <optgroup label="Açai">
                                                                               <option value="7">Mini R$7,00</option>
                                                                               <option value="10">P | R$10,00</option>
                                                                               <option value="14">M | R$14,00</option>
                                                                               <option value="23">G | R$23,00</option>
                                                                               </optgroup>
                                                                           </select>
                                                                        </label>
                                                                </div>
                                                                <br><label class="control-label"><u><font color="purple">Frutas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_20[]" class="checkbox" type="checkbox" value="Abacaxi">
                                                                            <span>Abacaxi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_20[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_20[]" class="checkbox" type="checkbox" value="Banana">
                                                                            <span>Banana</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_20[]" class="checkbox" type="checkbox" value="Manga">
                                                                            <span>Manga</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="frutas_20[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
        
                                                                    <br><label class="control-label"><u><font color="purple">Adicional</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="sorvete_20" class="checkbox" type="checkbox" value="Cupuacu">
                                                                            <span>Cupuaçu</span>
                                                                        </label>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Caldas</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_20[]" class="checkbox" type="checkbox" value="Morango">
                                                                            <span>Morango</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_20[]" class="checkbox" type="checkbox" value="Kiwi">
                                                                            <span>Kiwi</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_20[]" class="checkbox" type="checkbox" value="Chocolate">
                                                                            <span>Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_20[]" class="checkbox" type="checkbox" value="Caramelo">
                                                                            <span>Caramelo</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_20[]" class="checkbox" type="checkbox" value="Leite Cond.">
                                                                            <span>Leite Cond.</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_20[]" class="checkbox" type="checkbox" value="Doce de Leite">
                                                                            <span>Doce de Leite</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_20[]" class="checkbox" type="checkbox" value="Mel">
                                                                            <span>Mel</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_20[]" class="checkbox" type="checkbox" value="Groselha">
                                                                            <span>Groselha</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_20[]" class="checkbox" type="checkbox" value="Maracuja">
                                                                            <span>Marácuja</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="caldas_20[]" class="checkbox" type="checkbox" value="Acai c/ guarana">
                                                                            <span>Açaí c/ guaraná</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                    </div>
        
        
        
                                                    <div class="col-6 col-md-4">
                                                            <div class="card-title-block">
                                                                    <label class="control-label"><u><font color="purple">Complementos</font></u></label>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_20[]" class="checkbox" type="checkbox" value="Bolinha de Chocolate">
                                                                            <span>Bolinha de Chocolate</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_20[]" class="checkbox" type="checkbox" value="Confete">
                                                                            <span>Confete</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_20[]" class="checkbox" type="checkbox" value="Bis">
                                                                            <span>Bis</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_20[]" class="checkbox" type="checkbox" value="Flocos de Arroz">
                                                                            <span>Flocos de Arroz</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_20[]" class="checkbox" type="checkbox" value="Granola">
                                                                            <span>Granola</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_20[]" class="checkbox" type="checkbox" value="Amendoin">
                                                                            <span>Amendoin</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_20[]" class="checkbox" type="checkbox" value="Paçoca">
                                                                            <span>Paçoca</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_20[]" class="checkbox" type="checkbox" value="Sucrilhos">
                                                                            <span>Sucrilhos</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_20[]" class="checkbox" type="checkbox" value="Leite em po">
                                                                            <span>Leite em pó</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_20[]" class="checkbox" type="checkbox" value="Ovo maltine">
                                                                            <span>Ovo maltine</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_20[]" class="checkbox" type="checkbox" value="Suspiro">
                                                                            <span>Suspiro</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_20[]" class="checkbox" type="checkbox" value="Raspa de Choc. Branco">
                                                                            <span>Raspa de Choc. Branco</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_20[]" class="checkbox" type="checkbox" value="Raspa de Choc. Preto">
                                                                            <span>Raspa de Choc. Preto</span>
                                                                        </label>
                                                                    </div>
                                                                    <div>
                                                                        <label>
                                                                            <input name="complementos_20[]" class="checkbox" type="checkbox" value="Canudos Waffer">
                                                                            <span>Canudos Waffer</span>
                                                                        </label>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-6 col-sm-3"><section class="section">
                                                        <br><button type="button" class="btn btn-primary-outline" onClick="Voltar()"/>Voltar
                                                    </section>
                                                </div>
                                                            
                                                    
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
        
                                                        <div class="col-6 col-sm-3">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
        
                                                        </div>
                                                        <div class="col-6 col-md-1">
                                                            <section class="section">
                                                                <br><button type="submit" name="enviar" class="btn btn-primary-outline"/>Avançar
                                                            </section>
                                                        </div>
                                                </div>
                                      </div>

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
                function openCity(evt, cityName) {
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

                <script>
                /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>