<!doctype html>
<?php include $_SERVER['DOCUMENT_ROOT']."/dist/includes/banco.php";

$exibe_1 = gmdate("Y-m-d", time()-(3600*27));
$exibe_2 = gmdate("Y-m-d", time()-(3600*54));
$exibe_3 = gmdate("Y-m-d", time()-(3600*81));
$exibe_4 = gmdate("Y-m-d", time()-(3600*108));
$exibe_5 = gmdate("Y-m-d", time()-(3600*135));
$exibe_6 = gmdate("Y-m-d", time()-(3600*162));
$exibe_7 = gmdate("Y-m-d", time()-(3600*189));

$dia1 = mysqli_query($link,"SELECT * FROM tb_pedido WHERE dt_data = '$exibe_1'");            
$dia2 = mysqli_query($link,"SELECT * FROM tb_pedido WHERE dt_data = '$exibe_2'");            
$dia3 = mysqli_query($link,"SELECT * FROM tb_pedido WHERE dt_data = '$exibe_3'");            
$dia4 = mysqli_query($link,"SELECT * FROM tb_pedido WHERE dt_data = '$exibe_4'");            
$dia5 = mysqli_query($link,"SELECT * FROM tb_pedido WHERE dt_data = '$exibe_5'");            
$dia6 = mysqli_query($link,"SELECT * FROM tb_pedido WHERE dt_data = '$exibe_6'");            
$dia7 = mysqli_query($link,"SELECT * FROM tb_pedido WHERE dt_data = '$exibe_7'");            

$quant_dia1 = mysqli_num_rows($dia1);
$quant_dia2 = mysqli_num_rows($dia2);
$quant_dia3 = mysqli_num_rows($dia3);
$quant_dia4 = mysqli_num_rows($dia4);
$quant_dia5 = mysqli_num_rows($dia5);
$quant_dia6 = mysqli_num_rows($dia6);
$quant_dia7 = mysqli_num_rows($dia7);

$acai7 = mysqli_query($link,"SELECT vl_acai FROM tb_pedido WHERE vl_acai = 7.00");
$acai10 = mysqli_query($link,"SELECT vl_acai FROM tb_pedido WHERE vl_acai = 10.00");
$acai14 = mysqli_query($link,"SELECT vl_acai FROM tb_pedido WHERE vl_acai = 14.00");
$acai23 = mysqli_query($link,"SELECT vl_acai FROM tb_pedido WHERE vl_acai = 23.00");

$quant_acai7 = mysqli_num_rows($acai7);
$quant_acai10 = mysqli_num_rows($acai10);
$quant_acai14 = mysqli_num_rows($acai14);
$quant_acai23 = mysqli_num_rows($acai23);
?>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Império do Açaí</title>
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
        <script>
        var dataVisits = [
            { x: '<?php echo $exibe_7; ?>', y: <?php echo $quant_dia7;?> },
            { x: '<?php echo $exibe_6; ?>', y: <?php echo $quant_dia6;?> },
            { x: '<?php echo $exibe_5; ?>', y: <?php echo $quant_dia5;?> },
            { x: '<?php echo $exibe_4; ?>', y: <?php echo $quant_dia4;?> },
            { x: '<?php echo $exibe_3; ?>', y: <?php echo $quant_dia3;?> },
            { x: '<?php echo $exibe_2; ?>', y: <?php echo $quant_dia2;?> },
            { x: '<?php echo $exibe_1; ?>', y: <?php echo $quant_dia1;?> }
        ];
        </script>
        <script>
        </script>
    </head>
    <body>
        <?php session_start();
        
        if(empty($_SESSION['admin'])){
            header("Location:pedido.php");
        }

        if(isset($_SESSION['altera_senha']) == 'alterado'){
            sleep(1);
            echo "<script>alert('Senha alterada com Sucesso!');</script>";
            unset($_SESSION['altera_senha']);
        }
        
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
                                <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="name"><?php echo $_SESSION['admin'];?> </span>
                                </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item" href="alterar_senha.php">
                                        <i class="fa fa-unlock-alt icon"></i> Alterar Senha </a>
                                    <a class="dropdown-item" href="logout.php">
                                        <i class="fa fa-times-circle-o icon"></i> Sair </a>
                                   
                                </div>
                            </li>
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
                                <li class="active">
                                    <a href="index.php">
                                        <i class="fa fa-home"></i> Painel </a>
                                </li>
                                <li>
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
                    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col col-12 col-sm-12 col-md-6 col-xl-5 stats-col">
                                <div class="card sameheight-item stats" data-exclude="xs">
                                    <div class="card-block">
                                        <div class="title-block">
                                            <h4 class="title"> Status </h4>
                                            <p class="title-description"> Estatísticas Império do Açaí
                                            </p>
                                        </div>
                                        <div class="row row-sm stats-container">
                                           
                                               
                                                <?php   
                                                    date_default_timezone_set('America/Sao_Paulo');

                                                    $data = date("Y-m");
                                                    $data_completa = date("Y-m-d");

                                                    $query = mysqli_query($link,"SELECT nm_cliente from tb_clientes");
                                                    $query_pedidos = mysqli_query($link,"SELECT cd_pedido from tb_pedido");
                                                    $query_mensal = mysqli_query($link,"SELECT SUM(vl_pedido) FROM tb_pedido WHERE (dt_data LIKE '$data%')");
                                                    $query_diaria = mysqli_query($link,"SELECT SUM(vl_pedido) FROM tb_pedido WHERE (dt_data = '$data_completa')");
                                                    $conta_pedidos = mysqli_num_rows($query_pedidos);
                                                    $conta_clientes = mysqli_num_rows($query);

                                                ?>
                                                
                                               
                                           
                                            
                                            <div class="col-12 col-sm-6  stat-col">
                                                <div class="stat-icon">
                                                    <i class="fa fa-line-chart"></i>
                                                </div>
                                                <div class="stat">
                                                    <?php 

                                                    while($row = mysqli_fetch_array($query_mensal)){

                                                        $valor_mensal = $row[0];
                                                        $valor_mensal_corrigido = str_replace('.', ',', $valor_mensal);
    
                                                        echo "<div class='value'> R$ $valor_mensal_corrigido </div>
                                                        <div class='name'> Total mensal </div>
                                                        </div>
                                                        <div class='progress stat-progress'>
                                                            <div class='progress-bar' style='width: 60%;'></div>
                                                        </div>
                                                        ";
                                                    }
                                                    ?>
                                            </div>
                                            <div class="col-12 col-sm-6  stat-col">
                                                <div class="stat-icon">
                                                    <i class="fa fa-users"></i>
                                                </div>
                                                <div class="stat">
                                                    <div class="value"><?php echo intval($conta_clientes);?> </div>
                                                    <div class="name"> Clientes </div>
                                                </div>
                                                <div class="progress stat-progress">
                                                    <?php echo "<div class='progress-bar' style='width: $conta_clientes%;'></div>"; ?>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6  stat-col">
                                                <div class="stat-icon">
                                                    <i class="fa fa-cutlery"></i>
                                                </div>
                                                <div class="stat">
                                                    <?php echo "<div class='value'>$conta_pedidos</div>";?>
                                                    <div class="name"> Pedidos feitos </div>
                                                </div>
                                                <div class="progress stat-progress">
                                                    <?php echo "<div class='progress-bar' style='width: $conta_pedidos%;'></div>"; ?>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 stat-col">
                                                <div class="stat-icon">
                                                    <i class="fa fa-dollar"></i>
                                                </div>
                                                <div class="stat">
                                                    <?php 

                                                    while($row_dia = mysqli_fetch_array($query_diaria)){

                                                        $valor_dia = $row_dia[0];
                                                        $valor_dia_corrigido = str_replace('.', ',', $valor_dia);
    
                                                        echo "<div class='value'> R$ $valor_dia_corrigido </div>
                                                        <div class='name'> Total diário </div>
                                                        </div>
                                                        <div class='progress stat-progress'>
                                                            <div class='progress-bar' style='width: 50%;'></div>
                                                        </div>
                                                        ";
                                                    }
                                                    ?>


                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-sm-12 col-md-6 col-xl-7 history-col">
                                <div class="card sameheight-item" data-exclude="xs" id="dashboard-history">
                                    <div class="card-header card-header-sm bordered">
                                        <div class="header-block">
                                            <h3 class="title">Histórico</h3>
                                        </div>
                                        <ul class="nav nav-tabs pull-right" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#visits" role="tab" data-toggle="tab">Vendas</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <div class="card-block">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active fade show" id="visits">
                                                <p class="title-description"> Número de vendas nos últimos 7 dias </p>
                                                <div id="dashboard-visits-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-xl-8">
                                <div class="card sameheight-item items" data-exclude="xs,sm,lg">
                                    
                                    <ul class="item-list striped">
                                        <img style="width:526px; height:300px; padding-left:60px; padding-top:50px;" src="img/acai_index.jpg">                
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card sameheight-item sales-breakdown" data-exclude="xs,sm,lg">
                                    <div class="card-header">
                                        <div class="header-block">
                                            <h3 class="title"> Índice de vendas </h3>
                                            <p class="title-description">Venda entres açaís</p>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="dashboard-sales-breakdown-chart" id="dashboard-sales-breakdown-chart"></div>
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
                
                        </div>
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
        <script>$(function() {

var $dashboardSalesBreakdownChart = $('#dashboard-sales-breakdown-chart');

if (!$dashboardSalesBreakdownChart.length) {
    return false;
} 

function drawSalesChart(){

$dashboardSalesBreakdownChart.empty();

    Morris.Donut({
        element: 'dashboard-sales-breakdown-chart',
        data: [{ label: "Açaí R$7", value: <?php echo $quant_acai7; ?> },
            { label: "Açaí R$10", value: <?php echo $quant_acai10; ?> },
            { label: "Açaí R$ 14", value: <?php echo $quant_acai14; ?> },
            { label: "Açaí R$23", value: <?php echo $quant_acai23; ?> }],
        resize: true,
        colors: [
            tinycolor(config.chart.colorPrimary.toString()).lighten(10).toString(),
            tinycolor(config.chart.colorPrimary.toString()).darken(8).toString(),
            config.chart.colorPrimary.toString()
        ],
    });

    var $sameheightContainer = $dashboardSalesBreakdownChart.closest(".sameheight-container");

    setSameHeights($sameheightContainer);
}

drawSalesChart();

$(document).on("themechange", function(){
   drawSalesChart();
});

})
</script>
    </body>
</html>