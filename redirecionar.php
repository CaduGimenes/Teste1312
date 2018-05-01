<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php session_start();

include $_SERVER['DOCUMENT_ROOT']."/dist/includes/banco.php";
date_default_timezone_set('America/Sao_Paulo');

                $data = date('d/m/Y');
                $dataEUA = date('Y-m-d');
                $hora = date("H:i:s");

               $valor_inicial = 0.00;
               $quant_frutas = 0;
               $quant_caldas = 0;
               $quant_complementos = 0;
               $quant_sorvetes = 0;

               $valor_inicial_2 = 0.00;
               $quant_frutas_2 = 0;
               $quant_caldas_2 = 0;
               $quant_complementos_2 = 0;
               $quant_sorvetes_2 = 0;

               $valor_inicial_3 = 0.00;
               $quant_frutas_3 = 0;
               $quant_caldas_3 = 0;
               $quant_complementos_3 = 0;
               $quant_sorvetes_3 = 0;

               $valor_inicial_4 = 0.00;
               $quant_frutas_4 = 0;
               $quant_caldas_4 = 0;
               $quant_complementos_4 = 0;
               $quant_sorvetes_4 = 0;

               $valor_inicial_5 = 0.00;
               $quant_frutas_5 = 0;
               $quant_caldas_5 = 0;
               $quant_complementos_5 = 0;
               $quant_sorvetes_5 = 0;

               $valor_inicial_6 = 0.00;
               $quant_frutas_6 = 0;
               $quant_caldas_6 = 0;
               $quant_complementos_6 = 0;
               $quant_sorvetes_6 = 0;

               $valor_inicial_7 = 0.00;
               $quant_frutas_7 = 0;
               $quant_caldas_7 = 0;
               $quant_complementos_7 = 0;
               $quant_sorvetes_7 = 0;

               $valor_inicial_8 = 0.00;
               $quant_frutas_8 = 0;
               $quant_caldas_8 = 0;
               $quant_complementos_8 = 0;
               $quant_sorvetes_8 = 0;

               $valor_inicial_9 = 0.00;
               $quant_frutas_9 = 0;
               $quant_caldas_9 = 0;
               $quant_complementos_9 = 0;
               $quant_sorvetes_9 = 0;

               $valor_inicial_10 = 0.00;
               $quant_frutas_10 = 0;
               $quant_caldas_10 = 0;
               $quant_complementos_10 = 0;
               $quant_sorvetes_10 = 0;

               $valor_inicial_11 = 0.00;
               $quant_frutas_11 = 0;
               $quant_caldas_11 = 0;
               $quant_complementos_11 = 0;
               $quant_sorvetes_11 = 0;

               $valor_inicial_12 = 0.00;
               $quant_frutas_12 = 0;
               $quant_caldas_12 = 0;
               $quant_complementos_12 = 0;
               $quant_sorvetes_12 = 0;

               $valor_inicial_13 = 0.00;
               $quant_frutas_13 = 0;
               $quant_caldas_13 = 0;
               $quant_complementos_13 = 0;
               $quant_sorvetes_13 = 0;

               $valor_inicial_14 = 0.00;
               $quant_frutas_14 = 0;
               $quant_caldas_14 = 0;
               $quant_complementos_14 = 0;
               $quant_sorvetes_14 = 0;

               $valor_inicial_15 = 0.00;
               $quant_frutas_15 = 0;
               $quant_caldas_15 = 0;
               $quant_complementos_15 = 0;
               $quant_sorvetes_15 = 0;

               $valor_inicial_16 = 0.00;
               $quant_frutas_16 = 0;
               $quant_caldas_16 = 0;
               $quant_complementos_16 = 0;
               $quant_sorvetes_16 = 0;

               $valor_inicial_17 = 0.00;
               $quant_frutas_17 = 0;
               $quant_caldas_17 = 0;
               $quant_complementos_17 = 0;
               $quant_sorvetes_17 = 0;

               $valor_inicial_18 = 0.00;
               $quant_frutas_18 = 0;
               $quant_caldas_18 = 0;
               $quant_complementos_18 = 0;
               $quant_sorvetes_18 = 0;

               $valor_inicial_19 = 0.00;
               $quant_frutas_19 = 0;
               $quant_caldas_19 = 0;
               $quant_complementos_19 = 0;
               $quant_sorvetes_19 = 0;

               $valor_inicial_20 = 0.00;
               $quant_frutas_20 = 0;
               $quant_caldas_20 = 0;
               $quant_complementos_20 = 0;
               $quant_sorvetes_20 = 0;

               $soma = 0.00;
               

               $valor_acai = intval($_POST['valor_acai']);
               $valor_acai_2 = intval($_POST['valor_acai_2']);
               $valor_acai_3 = intval($_POST['valor_acai_3']);
               $valor_acai_4 = intval($_POST['valor_acai_4']);
               $valor_acai_5 = intval($_POST['valor_acai_5']);
               $valor_acai_6 = intval($_POST['valor_acai_6']);
               $valor_acai_7 = intval($_POST['valor_acai_7']);
               $valor_acai_8 = intval($_POST['valor_acai_8']);
               $valor_acai_9 = intval($_POST['valor_acai_9']);
               $valor_acai_10 = intval($_POST['valor_acai_10']);
               $valor_acai_11 = intval($_POST['valor_acai_11']);
               $valor_acai_12 = intval($_POST['valor_acai_12']);
               $valor_acai_13 = intval($_POST['valor_acai_13']);
               $valor_acai_14 = intval($_POST['valor_acai_14']);
               $valor_acai_15 = intval($_POST['valor_acai_15']);
               $valor_acai_16 = intval($_POST['valor_acai_16']);
               $valor_acai_17 = intval($_POST['valor_acai_17']);
               $valor_acai_18 = intval($_POST['valor_acai_18']);
               $valor_acai_19 = intval($_POST['valor_acai_19']);
               $valor_acai_20 = intval($_POST['valor_acai_20']);

               



                        //Verificando se existe um pedido
                        if ($valor_acai != 0) {
                            $_SESSION['quant_pedidos'] = 1;
                            echo "Pedido Nº1";

                            if ((bool)$nChecks = count($_POST['frutas'])) {

                                @(bool)$caldasChecks = count($_POST['caldas']);
                                @(bool)$complementosChecks = count($_POST['complementos']);
                                @(bool)$sorveteCheck = count($_POST['sorvete']);
                            
                                print 'Total de checkboxs marcados: '. $nChecks . '<br />'; 

                                if($valor_acai == 7){
                                    $pedido = "Mini";
                                    $_SESSION['pedido1'] = $pedido;
                                    if($nChecks > 1){
                                        $quant_frutas = $nChecks - 1;
                                    }
                                    if($caldasChecks > 2){
                                        $quant_caldas = $caldasChecks - 2;
                                    }
                                    if($complementosChecks > 3){
                                        $quant_complementos = $complementosChecks - 3;
                                    }
                                    if($sorveteCheck > 0){
                                        $quant_sorvetes = $sorveteCheck * 2.50;
                                        echo "Valor Sorvete: ".$quant_sorvetes;
                                    }

                                }else if($valor_acai == 10 || $valor_acai == 14){
                                    if($valor_acai == 10){
                                        $pedido = "P";
                                        $_SESSION['pedido1'] = $pedido;
                                    }

                                    if($valor_acai == 14){
                                        $pedido = "M";
                                        $_SESSION['pedido1'] = $pedido;
                                    }

                                    if($nChecks > 2){
                                        $quant_frutas = $nChecks - 2;
                                    }
                                    if($caldasChecks > 4){
                                        $quant_caldas = $caldasChecks - 4;
                                    }
                                    if($sorveteCheck > 0){
                                        $quant_sorvetes = $sorveteCheck * 2.50;
                                        echo "Valor Sorvete: ".$quant_sorvetes;
                                    }

                                }else if($valor_acai == 23){
                                    $pedido = "G";
                                    $_SESSION['pedido1'] = $pedido;
                                    if($nChecks > 3){
                                        $quant_frutas = $nChecks - 3;
                                    }
                                    if($caldasChecks > 4){
                                        $quant_caldas = $caldasChecks - 4;
                                    }
                                    if($sorveteCheck > 0){
                                        $quant_sorvetes = $sorveteCheck * 2.50;
                                        echo "Valor Sorvete: ".$quant_sorvetes;
                                    }

                                }else if($valor_acai == 18 || $valor_acai == 35 || $valor_acai == 50){
                                    if($valor_acai == 18){
                                        $pedido = "Barca Pequena";
                                        $_SESSION['pedido1'] = $pedido;
                                    }
                                    if($valor_acai == 35){
                                        $pedido = "Barca Média";
                                        $_SESSION['pedido1'] = $pedido;
                                    }
                                    if($valor_acai == 50){
                                        $pedido = "Barca Grande";
                                        $_SESSION['pedido1'] = $pedido;
                                    }

                                    if($nChecks > 4){
                                        $quant_frutas = $nChecks - 4;
                                    }
                                    if($caldasChecks > 4){
                                        $quant_caldas = $caldasChecks - 4;
                                    }
                                    if($sorveteCheck > 0){
                                        $quant_sorvetes = $sorveteCheck * 2.50;
                                        echo "Valor Sorvete: ".$quant_sorvetes;
                                    }


                                }

                                if(isset($_POST['frutas'])){
                                    $opcoes = $_POST['frutas'];
                                    $opcoes_fruta = implode("<br>", $opcoes);
                                    $opcoes_fruta_bd = implode("\n    ", $opcoes);
                                    $_SESSION['frutasBD'] = $opcoes_fruta_bd;
                                    $_SESSION['frutas'] = $opcoes_fruta;
                                    
                                    foreach ($_POST['frutas'] as $frutas) {
                        
                                        print "• {$frutas}<br />";
                                        
                                       
                                    }
                                }
                                
                                if(isset($_POST['caldas'])){
                                    $opcoes2 = $_POST['caldas'];
                                    $opcoes_calda = implode("<br>", $opcoes2);
                                    $opcoes_calda_bd = implode("\n    ", $opcoes2);
                                    $_SESSION['caldas'] = $opcoes_calda;
                                    $_SESSION['caldasBD'] = $opcoes_calda_bd;
                                    foreach ($_POST['caldas'] as $caldas) {
                        
                                        print "• {$caldas}<br />";
                                        
                                       
                                    }
                                }
                                
                                if(isset($_POST['complementos'])){
                                    $opcoes3 = $_POST['complementos'];
                                    $opcoes_comple = implode("<br>", $opcoes3);
                                    $opcoes_comple_bd = implode("\n    ", $opcoes3);
                                    $_SESSION['complementos'] = $opcoes_comple;
                                    $_SESSION['complementosBD'] = $opcoes_comple_bd;
                                    foreach ($_POST['complementos'] as $complementos) {
                        
                                        print "• {$complementos}<br />";
                                       
                                    }

                                    $_SESSION['tamanho_acai'] = $pedido;
                                }

                                if(isset($_POST['sorvete'])){
                                    $opcoes4 = $_POST['sorvete'];
                                    $_SESSION['sorvete'] = $opcoes4;
                                    print "•".$_SESSION['sorvete']."<br />";
                                       
                                }

                            }

                            $vezes = 1;
                            //Verificando se existe um segundo pedido
                            if($valor_acai_2 != 0){
                                $_SESSION['quant_pedidos'] = 2;
                                $_SESSION['pedido_2'] = 1;
                                echo "<br>Pedido Nº2<br>";

                                if ((bool)$nChecks_2 = count($_POST['frutas_2'])) {

                                    @(bool)$caldasChecks_2 = count($_POST['caldas_2']);
                                    @(bool)$complementosChecks_2 = count($_POST['complementos_2']);
                                    @(bool)$sorveteCheck_2 = count($_POST['sorvete_2']);
                                
                                    print 'Total de checkboxs marcados: '. $nChecks_2 . '<br />'; 
    
                                    if($valor_acai_2 == 7){
                                        $pedido_2 = "Mini";
                                        $_SESSION['pedido2'] = $pedido_2;
                                        if($nChecks_2 > 1){
                                            $quant_frutas_2 = $nChecks_2 - 1;
                                        }
                                        if($caldasChecks_2 > 2){
                                            $quant_caldas_2 = $caldasChecks_2 - 2;
                                        }
                                        if($complementosChecks_2 > 3){
                                            $quant_complementos_2 = $complementosChecks_2 - 3;
                                        }
                                        if($sorveteCheck_2 > 0){
                                            $quant_sorvetes_2 = $sorveteCheck_2 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_2;
                                        }
    
                                    }else if($valor_acai_2 == 10 || $valor_acai_2 == 14){
                                        if($valor_acai_2 == 10){
                                            $pedido_2 = "P";
                                            $_SESSION['pedido2'] = $pedido_2;
                                        }
    
                                        if($valor_acai_2 == 14){
                                            $pedido_2 = "M";
                                            $_SESSION['pedido2'] = $pedido_2;
                                        }
    
                                        if($nChecks_2 > 2){
                                            $quant_frutas_2 = $nChecks_2 - 2;
                                        }
                                        if($caldasChecks_2 > 4){
                                            $quant_caldas_2 = $caldasChecks_2 - 4;
                                        }
                                        if($sorveteCheck_2 > 0){
                                            $quant_sorvetes_2 = $sorveteCheck_2 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_2;
                                        }
    
                                    }else if($valor_acai_2 == 23){
                                        $pedido_2 = "G";
                                        $_SESSION['pedido2'] = $pedido_2;
                                        if($nChecks_2 > 3){
                                            $quant_frutas_2 = $nChecks_2 - 3;
                                        }
                                        if($caldasChecks_2 > 4){
                                            $quant_caldas_2 = $caldasChecks_2 - 4;
                                        }
                                        if($sorveteCheck_2 > 0){
                                            $quant_sorvetes_2 = $sorveteCheck_2 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_2;
                                        }
    
                                    }else if($valor_acai_2 == 18 || $valor_acai_2 == 35 || $valor_acai_2 == 50){
                                        if($valor_acai_2 == 18){
                                            $pedido_2 = "Barca Pequena";
                                            $_SESSION['pedido2'] = $pedido_2;
                                        }
                                        if($valor_acai_2 == 35){
                                            $pedido_2 = "Barca Média";
                                            $_SESSION['pedido2'] = $pedido_2;
                                        }
                                        if($valor_acai_2 == 50){
                                            $pedido_2 = "Barca Grande";
                                            $_SESSION['pedido2'] = $pedido_2;
                                        }
    
                                        if($nChecks_2 > 4){
                                            $quant_frutas_2 = $nChecks_2 - 4;
                                        }
                                        if($caldasChecks_2 > 4){
                                            $quant_caldas_2 = $caldasChecks_2 - 4;
                                        }
                                        if($sorveteCheck_2 > 0){
                                            $quant_sorvetes_2 = $sorveteCheck_2 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_2;
                                        }
    
    
                                    }
    
                                    if(isset($_POST['frutas_2'])){
                                        $opcoes_2 = $_POST['frutas_2'];
                                        $opcoes_fruta_2 = implode("<br>", $opcoes_2);
                                        $opcoes_fruta_bd_2 = implode("\n    ", $opcoes_2);
                                        $_SESSION['frutasBD_2'] = $opcoes_fruta_bd_2;
                                        $_SESSION['frutas_2'] = $opcoes_fruta_2;
                                        
                                        foreach ($_POST['frutas_2'] as $frutas_2) {
                            
                                            print "• {$frutas_2}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['caldas_2'])){
                                        $opcoes2_2 = $_POST['caldas_2'];
                                        $opcoes_calda_2 = implode("<br>", $opcoes2_2);
                                        $opcoes_calda_bd_2 = implode("\n    ", $opcoes2_2);
                                        $_SESSION['caldas_2'] = $opcoes_calda_2;
                                        $_SESSION['caldasBD_2'] = $opcoes_calda_bd_2;
                                        foreach ($_POST['caldas_2'] as $caldas_2) {
                            
                                            print "• {$caldas_2}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['complementos_2'])){
                                        $opcoes3_2 = $_POST['complementos_2'];
                                        $opcoes_comple_2 = implode("<br>", $opcoes3_2);
                                        $opcoes_comple_bd_2 = implode("\n    ", $opcoes3_2);
                                        $_SESSION['complementos_2'] = $opcoes_comple_2;
                                        $_SESSION['complementosBD_2'] = $opcoes_comple_bd_2;
                                        foreach ($_POST['complementos_2'] as $complementos_2) {
                            
                                            print "• {$complementos_2}<br />";
                                           
                                        }
    
                                        $_SESSION['tamanho_acai_2'] = $pedido_2;
                                    }
    
                                    if(isset($_POST['sorvete_2'])){
                                        $opcoes4_2 = $_POST['sorvete_2'];
                                        $_SESSION['sorvete_2'] = $opcoes4_2;
                                        print "•".$_SESSION['sorvete_2']."<br />";
                                           
                                    }

                                  

                            }
                            $ped_2_db = $valor_acai_2 + $quant_frutas_2 + $quant_caldas_2 + $quant_complementos_2 + $quant_sorvetes_2;
                            $vezes = 2;

                            mysqli_query($link,"INSERT INTO tb_pedido(vl_pedido,vl_troco,dt_data,hr_pedido,vl_acai) VALUES('$ped_2_db','$print_sub','$dataEUA','$hora','$valor_acai_2')");


                            //Verificando se existe pedido 3
                            if($valor_acai_3 != 0){
                                $_SESSION['quant_pedidos'] = 3;
                                $_SESSION['pedido_3'] = 1;
                                echo "<br>Pedido Nº3<br>";

                                if ((bool)$nChecks_3 = count($_POST['frutas_3'])) {

                                    @(bool)$caldasChecks_3 = count($_POST['caldas_3']);
                                    @(bool)$complementosChecks_3 = count($_POST['complementos_3']);
                                    @(bool)$sorveteCheck_3 = count($_POST['sorvete_3']);
                                
                                    print 'Total de checkboxs marcados: '. $nChecks_3 . '<br />'; 
    
                                    if($valor_acai_3 == 7){
                                        $pedido_3 = "Mini";
                                        $_SESSION['pedido3'] = $pedido_3;
                                        if($nChecks_3 > 1){
                                            $quant_frutas_3 = $nChecks_3 - 1;
                                        }
                                        if($caldasChecks_3 > 3){
                                            $quant_caldas_3 = $caldasChecks_3 - 3;
                                        }
                                        if($complementosChecks_3 > 3){
                                            $quant_complementos_3 = $complementosChecks_3 - 3;
                                        }
                                        if($sorveteCheck_3 > 0){
                                            $quant_sorvetes_3 = $sorveteCheck_3 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_3;
                                        }
    
                                    }else if($valor_acai_3 == 10 || $valor_acai_3 == 14){
                                        if($valor_acai_3 == 10){
                                            $pedido_3 = "P";
                                            $_SESSION['pedido3'] = $pedido_3;
                                        }
    
                                        if($valor_acai_3 == 14){
                                            $pedido_3 = "M";
                                            $_SESSION['pedido3'] = $pedido_3;
                                        }
    
                                        if($nChecks_3 > 2){
                                            $quant_frutas_3 = $nChecks_3 - 2;
                                            echo $quant_frutas_3;
                                        }
                                        if($caldasChecks_3 > 4){
                                            $quant_caldas_3 = $caldasChecks_3 - 4;
                                        }
                                        if($sorveteCheck_3 > 0){
                                            $quant_sorvetes_3 = $sorveteCheck_3 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_3;
                                        }
    
                                    }else if($valor_acai_3 == 23){
                                        $pedido_3 = "G";
                                        $_SESSION['pedido3'] = $pedido_3;
                                        if($nChecks_3 > 3){
                                            $quant_frutas_3 = $nChecks_3 - 3;
                                        }
                                        if($caldasChecks_3 > 4){
                                            $quant_caldas_3 = $caldasChecks_3 - 4;
                                        }
                                        if($sorveteCheck_3 > 0){
                                            $quant_sorvetes_3 = $sorveteCheck_3 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_3;
                                        }
    
                                    }else if($valor_acai_3 == 18 || $valor_acai_3 == 35 || $valor_acai_3 == 50){
                                        if($valor_acai_3 == 18){
                                            $pedido_3 = "Barca Pequena";
                                            $_SESSION['pedido3'] = $pedido_3;
                                        }
                                        if($valor_acai_3 == 35){
                                            $pedido_3 = "Barca Média";
                                            $_SESSION['pedido3'] = $pedido_3;
                                        }
                                        if($valor_acai_3 == 50){
                                            $pedido_3 = "Barca Grande";
                                            $_SESSION['pedido3'] = $pedido_3;
                                        }
    
                                        if($nChecks_3 > 4){
                                            $quant_frutas_3 = $nChecks_3 - 4;
                                        }
                                        if($caldasChecks_3 > 4){
                                            $quant_caldas_3 = $caldasChecks_3 - 4;
                                        }
                                        if($sorveteCheck_3 > 0){
                                            $quant_sorvetes_3 = $sorveteCheck_3 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_3;
                                        }
    
    
                                    }
    
                                    if(isset($_POST['frutas_3'])){
                                        $opcoes_3 = $_POST['frutas_3'];
                                        $opcoes_fruta_3 = implode("<br>", $opcoes_3);
                                        $opcoes_fruta_bd_3 = implode("\n    ", $opcoes_3);
                                        $_SESSION['frutasBD_3'] = $opcoes_fruta_bd_3;
                                        $_SESSION['frutas_3'] = $opcoes_fruta_3;
                                        
                                        foreach ($_POST['frutas_3'] as $frutas_3) {
                            
                                            print "• {$frutas_3}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['caldas_3'])){
                                        $opcoes2_3 = $_POST['caldas_3'];
                                        $opcoes_calda_3 = implode("<br>", $opcoes2_3);
                                        $opcoes_calda_bd_3 = implode("\n    ", $opcoes2_3);
                                        $_SESSION['caldas_3'] = $opcoes_calda_3;
                                        $_SESSION['caldasBD_3'] = $opcoes_calda_bd_3;
                                        foreach ($_POST['caldas_3'] as $caldas_3) {
                            
                                            print "• {$caldas_3}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['complementos_3'])){
                                        $opcoes3_3 = $_POST['complementos_3'];
                                        $opcoes_comple_3 = implode("<br>", $opcoes3_3);
                                        $opcoes_comple_bd_3 = implode("\n    ", $opcoes3_3);
                                        $_SESSION['complementos_3'] = $opcoes_comple_3;
                                        $_SESSION['complementosBD_3'] = $opcoes_comple_bd_3;
                                        foreach ($_POST['complementos_3'] as $complementos_3) {
                            
                                            print "• {$complementos_3}<br />";
                                           
                                        }
    
                                        $_SESSION['tamanho_acai_3'] = $pedido_3;
                                    }
    
                                    if(isset($_POST['sorvete_3'])){
                                        $opcoes4_3 = $_POST['sorvete_3'];
                                        $_SESSION['sorvete_3'] = $opcoes4_3;
                                        print "•".$_SESSION['sorvete_3']."<br />";
                                           
                                    }

                                   

                            }

                            $ped_3_db = $valor_acai_3 + $quant_frutas_3 + $quant_caldas_3 + $quant_complementos_3 + $quant_sorvetes_3;
                            $vezes = 3;

                            mysqli_query($link,"INSERT INTO tb_pedido(vl_pedido,vl_troco,dt_data,hr_pedido,vl_acai) VALUES('$ped_3_db','$print_sub','$dataEUA','$hora','$valor_acai_3')");


                            //Verificando se existe pedido 4

                            if($valor_acai_4 != 0){
                                $_SESSION['quant_pedidos'] = 3;
                                $_SESSION['pedido_4'] = 1;
                                echo "<br>Pedido Nº4<br>";

                                if ((bool)$nChecks_4 = count($_POST['frutas_4'])) {

                                    @(bool)$caldasChecks_4 = count($_POST['caldas_4']);
                                    @(bool)$complementosChecks_4 = count($_POST['complementos_4']);
                                    @(bool)$sorveteCheck_4 = count($_POST['sorvete_4']);
                                
                                    print 'Total de checkboxs marcados: '. $nChecks_4 . '<br />'; 
    
                                    if($valor_acai_4 == 7){
                                        $pedido_4 = "Mini";
                                        $_SESSION['pedido4'] = $pedido_4;
                                        if($nChecks_4 > 1){
                                            $quant_frutas_4 = $nChecks_4 - 1;
                                        }
                                        if($caldasChecks_4 > 3){
                                            $quant_caldas_4 = $caldasChecks_4 - 3;
                                        }
                                        if($complementosChecks_4 > 3){
                                            $quant_complementos_4 = $complementosChecks_4 - 3;
                                        }
                                        if($sorveteCheck_4 > 0){
                                            $quant_sorvetes_4 = $sorveteCheck_4 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_4;
                                        }
    
                                    }else if($valor_acai_4 == 10 || $valor_acai_4 == 14){
                                        if($valor_acai_4 == 10){
                                            $pedido_4 = "P";
                                            $_SESSION['pedido4'] = $pedido_4;
                                        }
    
                                        if($valor_acai_4 == 14){
                                            $pedido_4 = "M";
                                            $_SESSION['pedido4'] = $pedido_4;
                                        }
    
                                        if($nChecks_4 > 2){
                                            $quant_frutas_4 = $nChecks_4 - 2;
                                        }
                                        if($caldasChecks_4 > 4){
                                            $quant_caldas_4 = $caldasChecks_4 - 4;
                                        }
                                        if($sorveteCheck_4 > 0){
                                            $quant_sorvetes_4 = $sorveteCheck_4 * 2.50;
                                        }
    
                                    }else if($valor_acai_4 == 23){
                                        $pedido_4 = "G";
                                        $_SESSION['pedido4'] = $pedido_4;
                                        if($nChecks_4 > 3){
                                            $quant_frutas_4 = $nChecks_4 - 3;
                                        }
                                        if($caldasChecks_4 > 4){
                                            $quant_caldas_4 = $caldasChecks_4 - 4;
                                        }
                                        if($sorveteCheck_4 > 0){
                                            $quant_sorvetes_4 = $sorveteCheck_4 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_4;
                                        }
    
                                    }else if($valor_acai_4 == 18 || $valor_acai_4 == 35 || $valor_acai_4 == 50){
                                        if($valor_acai_4 == 18){
                                            $pedido_4 = "Barca Pequena";
                                            $_SESSION['pedido4'] = $pedido_4;
                                        }
                                        if($valor_acai_4 == 35){
                                            $pedido_4 = "Barca Média";
                                            $_SESSION['pedido4'] = $pedido_4;
                                        }
                                        if($valor_acai_4 == 50){
                                            $pedido_4 = "Barca Grande";
                                            $_SESSION['pedido4'] = $pedido_4;
                                        }
    
                                        if($nChecks_4 > 4){
                                            $quant_frutas_4 = $nChecks_4 - 4;
                                        }
                                        if($caldasChecks_4 > 4){
                                            $quant_caldas_4 = $caldasChecks_4 - 4;
                                        }
                                        if($sorveteCheck_4 > 0){
                                            $quant_sorvetes_4 = $sorveteCheck_4 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_4;
                                        }
    
    
                                    }
    
                                    if(isset($_POST['frutas_4'])){
                                        $opcoes_4 = $_POST['frutas_4'];
                                        $opcoes_fruta_4 = implode("<br>", $opcoes_4);
                                        $opcoes_fruta_bd_4 = implode("\n    ", $opcoes_4);
                                        $_SESSION['frutasBD_4'] = $opcoes_fruta_bd_4;
                                        $_SESSION['frutas_4'] = $opcoes_fruta_4;
                                        
                                        foreach ($_POST['frutas_4'] as $frutas_4) {
                            
                                            print "• {$frutas_4}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['caldas_4'])){
                                        $opcoes2_4 = $_POST['caldas_4'];
                                        $opcoes_calda_4 = implode("<br>", $opcoes2_4);
                                        $opcoes_calda_bd_4 = implode("\n    ", $opcoes2_4);
                                        $_SESSION['caldas_4'] = $opcoes_calda_4;
                                        $_SESSION['caldasBD_4'] = $opcoes_calda_bd_4;
                                        foreach ($_POST['caldas_4'] as $caldas_4) {
                            
                                            print "• {$caldas_4}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['complementos_4'])){
                                        $opcoes3_4 = $_POST['complementos_4'];
                                        $opcoes_comple_4 = implode("<br>", $opcoes3_4);
                                        $opcoes_comple_bd_4 = implode("\n    ", $opcoes3_4);
                                        $_SESSION['complementos_4'] = $opcoes_comple_4;
                                        $_SESSION['complementosBD_4'] = $opcoes_comple_bd_4;
                                        foreach ($_POST['complementos_4'] as $complementos_4) {
                            
                                            print "• {$complementos_4}<br />";
                                           
                                        }
    
                                        $_SESSION['tamanho_acai_4'] = $pedido_4;
                                    }
    
                                    if(isset($_POST['sorvete_4'])){
                                        $opcoes4_4 = $_POST['sorvete_4'];
                                        $_SESSION['sorvete_4'] = $opcoes4_4;
                                        print "•".$_SESSION['sorvete_4']."<br />";
                                           
                                    }

                                   

                            }

                            $ped_4_db = $valor_acai_4 + $quant_frutas_4 + $quant_caldas_4 + $quant_complementos_4 + $quant_sorvetes_4;
                            $vezes = 4;

                            mysqli_query($link,"INSERT INTO tb_pedido(vl_pedido,vl_troco,dt_data,hr_pedido,vl_acai) VALUES('$ped_4_db','$print_sub','$dataEUA','$hora','$valor_acai_4')");


                            //Verificando se existe pedido 5

                            if($valor_acai_5 != 0){
                                $_SESSION['quant_pedidos'] = 3;
                                $_SESSION['pedido_5'] = 1;
                                echo "<br>Pedido Nº5<br>";

                                if ((bool)$nChecks_5 = count($_POST['frutas_5'])) {

                                    @(bool)$caldasChecks_5 = count($_POST['caldas_5']);
                                    @(bool)$complementosChecks_5 = count($_POST['complementos_5']);
                                    @(bool)$sorveteCheck_5 = count($_POST['sorvete_5']);
                                
                                    print 'Total de checkboxs marcados: '. $nChecks_5 . '<br />'; 
    
                                    if($valor_acai_5 == 7){
                                        $pedido_5 = "Mini";
                                        $_SESSION['pedido5'] = $pedido_5;
                                        if($nChecks_5 > 1){
                                            $quant_frutas_5 = $nChecks_5 - 1;
                                        }
                                        if($caldasChecks_5 > 3){
                                            $quant_caldas_5 = $caldasChecks_5 - 3;
                                        }
                                        if($complementosChecks_5 > 3){
                                            $quant_complementos_5 = $complementosChecks_5 - 3;
                                        }
                                        if($sorveteCheck_5 > 0){
                                            $quant_sorvetes_5 = $sorveteCheck_5 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_5;
                                        }
    
                                    }else if($valor_acai_5 == 10 || $valor_acai_5 == 14){
                                        if($valor_acai_5 == 10){
                                            $pedido_5 = "P";
                                            $_SESSION['pedido5'] = $pedido_5;
                                        }
    
                                        if($valor_acai_5 == 14){
                                            $pedido_5 = "M";
                                            $_SESSION['pedido5'] = $pedido_5;
                                        }
    
                                        if($nChecks_5 > 2){
                                            $quant_frutas_5 = $nChecks_5 - 2;
                                        }
                                        if($caldasChecks_5 > 4){
                                            $quant_caldas_5 = $caldasChecks_5 - 4;
                                        }
                                        if($sorveteCheck_5 > 0){
                                            $quant_sorvetes_5 = $sorveteCheck_5 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_5;
                                        }
    
                                    }else if($valor_acai_5 == 23){
                                        $pedido_5 = "G";
                                        $_SESSION['pedido5'] = $pedido_5;
                                        if($nChecks_5 > 3){
                                            $quant_frutas_5 = $nChecks_5 - 3;
                                        }
                                        if($caldasChecks_5 > 4){
                                            $quant_caldas_5 = $caldasChecks_5 - 4;
                                        }
                                        if($sorveteCheck_5 > 0){
                                            $quant_sorvetes_5 = $sorveteCheck_5 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_5;
                                        }
    
                                    }else if($valor_acai_5 == 18 || $valor_acai_5 == 35 || $valor_acai_5 == 50){
                                        if($valor_acai_5 == 18){
                                            $pedido_5 = "Barca Pequena";
                                            $_SESSION['pedido5'] = $pedido_5;
                                        }
                                        if($valor_acai_5 == 35){
                                            $pedido_5 = "Barca Média";
                                            $_SESSION['pedido5'] = $pedido_5;
                                        }
                                        if($valor_acai_5 == 50){
                                            $pedido_5 = "Barca Grande";
                                            $_SESSION['pedido5'] = $pedido_5;
                                        }
    
                                        if($nChecks_5 > 4){
                                            $quant_frutas_5 = $nChecks_5 - 4;
                                        }
                                        if($caldasChecks_5 > 4){
                                            $quant_caldas_5 = $caldasChecks_5 - 4;
                                        }
                                        if($sorveteCheck_5 > 0){
                                            $quant_sorvetes_5 = $sorveteCheck_5 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_5;
                                        }
    
    
                                    }
    
                                    if(isset($_POST['frutas_5'])){
                                        $opcoes_5 = $_POST['frutas_5'];
                                        $opcoes_fruta_5 = implode("<br>", $opcoes_5);
                                        $opcoes_fruta_bd_5 = implode("\n    ", $opcoes_5);
                                        $_SESSION['frutasBD_5'] = $opcoes_fruta_bd_5;
                                        $_SESSION['frutas_5'] = $opcoes_fruta_5;
                                        
                                        foreach ($_POST['frutas_5'] as $frutas_5) {
                            
                                            print "• {$frutas_5}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['caldas_5'])){
                                        $opcoes2_5 = $_POST['caldas_5'];
                                        $opcoes_calda_5 = implode("<br>", $opcoes2_5);
                                        $opcoes_calda_bd_5 = implode("\n    ", $opcoes2_5);
                                        $_SESSION['caldas_5'] = $opcoes_calda_5;
                                        $_SESSION['caldasBD_5'] = $opcoes_calda_bd_5;
                                        foreach ($_POST['caldas_5'] as $caldas_5) {
                            
                                            print "• {$caldas_5}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['complementos_5'])){
                                        $opcoes3_5 = $_POST['complementos_5'];
                                        $opcoes_comple_5 = implode("<br>", $opcoes3_5);
                                        $opcoes_comple_bd_5 = implode("\n    ", $opcoes3_5);
                                        $_SESSION['complementos_5'] = $opcoes_comple_5;
                                        $_SESSION['complementosBD_5'] = $opcoes_comple_bd_5;
                                        foreach ($_POST['complementos_5'] as $complementos_5) {
                            
                                            print "• {$complementos_5}<br />";
                                           
                                        }
    
                                        $_SESSION['tamanho_acai_5'] = $pedido_5;
                                    }
    
                                    if(isset($_POST['sorvete_5'])){
                                        $opcoes4_5 = $_POST['sorvete_5'];
                                        $_SESSION['sorvete_5'] = $opcoes4_5;
                                        print "•".$_SESSION['sorvete_5']."<br />";
                                           
                                    }

                                   

                            }

                            $ped_5_db = $valor_acai_5 + $quant_frutas_5 + $quant_caldas_5 + $quant_complementos_5 + $quant_sorvetes_5;
                            $vezes = 5;

                            mysqli_query($link,"INSERT INTO tb_pedido(vl_pedido,vl_troco,dt_data,hr_pedido,vl_acai) VALUES('$ped_5_db','$print_sub','$dataEUA','$hora','$valor_acai_5')");


                            //Verificando se existe pedido 6
                            if($valor_acai_6 != 0){
                                $_SESSION['quant_pedidos'] = 3;
                                $_SESSION['pedido_6'] = 1;
                                echo "<br>Pedido Nº6<br>";

                                if ((bool)$nChecks_6 = count($_POST['frutas_6'])) {

                                    @(bool)$caldasChecks_6 = count($_POST['caldas_6']);
                                    @(bool)$complementosChecks_6 = count($_POST['complementos_6']);
                                    @(bool)$sorveteCheck_6 = count($_POST['sorvete_6']);
                                
                                    print 'Total de checkboxs marcados: '. $nChecks_6 . '<br />'; 
    
                                    if($valor_acai_6 == 7){
                                        $pedido_6 = "Mini";
                                        $_SESSION['pedido6'] = $pedido_6;
                                        if($nChecks_6 > 1){
                                            $quant_frutas_6 = $nChecks_6 - 1;
                                        }
                                        if($caldasChecks_6 > 3){
                                            $quant_caldas_6 = $caldasChecks_6 - 3;
                                        }
                                        if($complementosChecks_6 > 3){
                                            $quant_complementos_6 = $complementosChecks_6 - 3;
                                        }
                                        if($sorveteCheck_6 > 0){
                                            $quant_sorvetes_6 = $sorveteCheck_6 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_6;
                                        }
    
                                    }else if($valor_acai_6 == 10 || $valor_acai_6 == 14){
                                        if($valor_acai_6 == 10){
                                            $pedido_6 = "P";
                                            $_SESSION['pedido6'] = $pedido_6;
                                        }
    
                                        if($valor_acai_6 == 14){
                                            $pedido_6 = "M";
                                            $_SESSION['pedido6'] = $pedido_6;
                                        }
    
                                        if($nChecks_6 > 2){
                                            $quant_frutas_6 = $nChecks_6 - 2;
                                        }
                                        if($caldasChecks_6 > 4){
                                            $quant_caldas_6 = $caldasChecks_6 - 4;
                                        }
                                        if($sorveteCheck_6 > 0){
                                            $quant_sorvetes_6 = $sorveteCheck_6 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_6;
                                        }
    
                                    }else if($valor_acai_6 == 23){
                                        $pedido_6 = "G";
                                        $_SESSION['pedido6'] = $pedido_6;
                                        if($nChecks_6 > 3){
                                            $quant_frutas_6 = $nChecks_6 - 3;
                                        }
                                        if($caldasChecks_6 > 4){
                                            $quant_caldas_6 = $caldasChecks_6 - 4;
                                        }
                                        if($sorveteCheck_6 > 0){
                                            $quant_sorvetes_6 = $sorveteCheck_6 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_6;
                                        }
    
                                    }else if($valor_acai_6 == 18 || $valor_acai_6 == 35 || $valor_acai_6 == 50){
                                        if($valor_acai_6 == 18){
                                            $pedido_6 = "Barca Pequena";
                                            $_SESSION['pedido6'] = $pedido_6;
                                        }
                                        if($valor_acai_6 == 35){
                                            $pedido_6 = "Barca Média";
                                            $_SESSION['pedido6'] = $pedido_6;
                                        }
                                        if($valor_acai_6 == 50){
                                            $pedido_6 = "Barca Grande";
                                            $_SESSION['pedido6'] = $pedido_6;
                                        }
    
                                        if($nChecks_6 > 4){
                                            $quant_frutas_6 = $nChecks_6 - 4;
                                        }
                                        if($caldasChecks_6 > 4){
                                            $quant_caldas_6 = $caldasChecks_6 - 4;
                                        }
                                        if($sorveteCheck_6 > 0){
                                            $quant_sorvetes_6 = $sorveteCheck_6 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_6;
                                        }
    
    
                                    }
    
                                    if(isset($_POST['frutas_6'])){
                                        $opcoes_6 = $_POST['frutas_6'];
                                        $opcoes_fruta_6 = implode("<br>", $opcoes_6);
                                        $opcoes_fruta_bd_6 = implode("\n    ", $opcoes_6);
                                        $_SESSION['frutasBD_6'] = $opcoes_fruta_bd_6;
                                        $_SESSION['frutas_6'] = $opcoes_fruta_6;
                                        
                                        foreach ($_POST['frutas_6'] as $frutas_6) {
                            
                                            print "• {$frutas_6}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['caldas_6'])){
                                        $opcoes2_6 = $_POST['caldas_6'];
                                        $opcoes_calda_6 = implode("<br>", $opcoes2_6);
                                        $opcoes_calda_bd_6 = implode("\n    ", $opcoes2_6);
                                        $_SESSION['caldas_6'] = $opcoes_calda_6;
                                        $_SESSION['caldasBD_6'] = $opcoes_calda_bd_6;
                                        foreach ($_POST['caldas_6'] as $caldas_6) {
                            
                                            print "• {$caldas_6}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['complementos_6'])){
                                        $opcoes3_6 = $_POST['complementos_6'];
                                        $opcoes_comple_6 = implode("<br>", $opcoes3_6);
                                        $opcoes_comple_bd_6 = implode("\n    ", $opcoes3_6);
                                        $_SESSION['complementos_6'] = $opcoes_comple_6;
                                        $_SESSION['complementosBD_6'] = $opcoes_comple_bd_6;
                                        foreach ($_POST['complementos_6'] as $complementos_6) {
                            
                                            print "• {$complementos_6}<br />";
                                           
                                        }
    
                                        $_SESSION['tamanho_acai_6'] = $pedido_6;
                                    }
    
                                    if(isset($_POST['sorvete_6'])){
                                        $opcoes4_6 = $_POST['sorvete_6'];
                                        $_SESSION['sorvete_6'] = $opcoes4_6;
                                        print "•".$_SESSION['sorvete_6']."<br />";
                                           
                                    }

                                   

                            }

                            $ped_6_db = $valor_acai_6 + $quant_frutas_6 + $quant_caldas_6 + $quant_complementos_6 + $quant_sorvetes_6;
                            $vezes = 6;

                            mysqli_query($link,"INSERT INTO tb_pedido(vl_pedido,vl_troco,dt_data,hr_pedido,vl_acai) VALUES('$ped_6_db','$print_sub','$dataEUA','$hora','$valor_acai_6')");


                            //Verificando se existe pedido 7
                            if($valor_acai_7 != 0){
                                $_SESSION['quant_pedidos'] = 3;
                                $_SESSION['pedido_7'] = 1;
                                echo "<br>Pedido Nº7<br>";

                                if ((bool)$nChecks_7 = count($_POST['frutas_7'])) {

                                    @(bool)$caldasChecks_7 = count($_POST['caldas_7']);
                                    @(bool)$complementosChecks_7 = count($_POST['complementos_7']);
                                    @(bool)$sorveteCheck_7 = count($_POST['sorvete_7']);
                                
                                    print 'Total de checkboxs marcados: '. $nChecks_7 . '<br />'; 
    
                                    if($valor_acai_7 == 7){
                                        $pedido_7 = "Mini";
                                        $_SESSION['pedido7'] = $pedido_7;
                                        if($nChecks_7 > 1){
                                            $quant_frutas_7 = $nChecks_7 - 1;
                                        }
                                        if($caldasChecks_7 > 3){
                                            $quant_caldas_7 = $caldasChecks_7 - 3;
                                        }
                                        if($complementosChecks_7 > 3){
                                            $quant_complementos_7 = $complementosChecks_7 - 3;
                                        }
                                        if($sorveteCheck_7 > 0){
                                            $quant_sorvetes_7 = $sorveteCheck_7 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_7;
                                        }
    
                                    }else if($valor_acai_7 == 10 || $valor_acai_7 == 14){
                                        if($valor_acai_7 == 10){
                                            $pedido_7 = "P";
                                            $_SESSION['pedido7'] = $pedido_7;
                                        }
    
                                        if($valor_acai_7 == 14){
                                            $pedido_7 = "M";
                                            $_SESSION['pedido7'] = $pedido_7;
                                        }
    
                                        if($nChecks_7 > 2){
                                            $quant_frutas_7 = $nChecks_7 - 2;
                                        }
                                        if($caldasChecks_7 > 4){
                                            $quant_caldas_7 = $caldasChecks_7 - 4;
                                        }
                                        if($sorveteCheck_7 > 0){
                                            $quant_sorvetes_7 = $sorveteCheck_7 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_7;
                                        }
    
                                    }else if($valor_acai_7 == 23){
                                        $pedido_7 = "G";
                                        $_SESSION['pedido7'] = $pedido_7;
                                        if($nChecks_7 > 3){
                                            $quant_frutas_7 = $nChecks_7 - 3;
                                        }
                                        if($caldasChecks_7 > 4){
                                            $quant_caldas_7 = $caldasChecks_7 - 4;
                                        }
                                        if($sorveteCheck_7 > 0){
                                            $quant_sorvetes_7 = $sorveteCheck_7 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_7;
                                        }
    
                                    }else if($valor_acai_7 == 18 || $valor_acai_7 == 35 || $valor_acai_7 == 50){
                                        if($valor_acai_7 == 18){
                                            $pedido_7 = "Barca Pequena";
                                            $_SESSION['pedido7'] = $pedido_7;
                                        }
                                        if($valor_acai_7 == 35){
                                            $pedido_7 = "Barca Média";
                                            $_SESSION['pedido7'] = $pedido_7;
                                        }
                                        if($valor_acai_7 == 50){
                                            $pedido_7 = "Barca Grande";
                                            $_SESSION['pedido7'] = $pedido_7;
                                        }
    
                                        if($nChecks_7 > 4){
                                            $quant_frutas_7 = $nChecks_7 - 4;
                                        }
                                        if($caldasChecks_7 > 4){
                                            $quant_caldas_7 = $caldasChecks_7 - 4;
                                        }
                                        if($sorveteCheck_7 > 0){
                                            $quant_sorvetes_7 = $sorveteCheck_7 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_7;
                                        }
    
    
                                    }
    
                                    if(isset($_POST['frutas_7'])){
                                        $opcoes_7 = $_POST['frutas_7'];
                                        $opcoes_fruta_7 = implode("<br>", $opcoes_7);
                                        $opcoes_fruta_bd_7 = implode("\n    ", $opcoes_7);
                                        $_SESSION['frutasBD_7'] = $opcoes_fruta_bd_7;
                                        $_SESSION['frutas_7'] = $opcoes_fruta_7;
                                        
                                        foreach ($_POST['frutas_7'] as $frutas_7) {
                            
                                            print "• {$frutas_7}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['caldas_7'])){
                                        $opcoes2_7 = $_POST['caldas_7'];
                                        $opcoes_calda_7 = implode("<br>", $opcoes2_7);
                                        $opcoes_calda_bd_7 = implode("\n    ", $opcoes2_7);
                                        $_SESSION['caldas_7'] = $opcoes_calda_7;
                                        $_SESSION['caldasBD_7'] = $opcoes_calda_bd_7;
                                        foreach ($_POST['caldas_7'] as $caldas_7) {
                            
                                            print "• {$caldas_7}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['complementos_7'])){
                                        $opcoes3_7 = $_POST['complementos_7'];
                                        $opcoes_comple_7 = implode("<br>", $opcoes3_7);
                                        $opcoes_comple_bd_7 = implode("\n    ", $opcoes3_7);
                                        $_SESSION['complementos_7'] = $opcoes_comple_7;
                                        $_SESSION['complementosBD_7'] = $opcoes_comple_bd_7;
                                        foreach ($_POST['complementos_7'] as $complementos_7) {
                            
                                            print "• {$complementos_7}<br />";
                                           
                                        }
    
                                        $_SESSION['tamanho_acai_7'] = $pedido_7;
                                    }
    
                                    if(isset($_POST['sorvete_7'])){
                                        $opcoes4_7 = $_POST['sorvete_7'];
                                        $_SESSION['sorvete_7'] = $opcoes4_7;
                                        print "•".$_SESSION['sorvete_7']."<br />";
                                           
                                    }

                                   

                            }

                            $ped_7_db = $valor_acai_7 + $quant_frutas_7 + $quant_caldas_7 + $quant_complementos_7 + $quant_sorvetes_7;
                            $vezes = 7;

                            mysqli_query($link,"INSERT INTO tb_pedido(vl_pedido,vl_troco,dt_data,hr_pedido,vl_acai) VALUES('$ped_7_db','$print_sub','$dataEUA','$hora','$valor_acai_7')");


                            //Verificando se existe pedido 8
                            if($valor_acai_8 != 0){
                                $_SESSION['quant_pedidos'] = 3;
                                $_SESSION['pedido_8'] = 1;
                                echo "<br>Pedido Nº8<br>";

                                if ((bool)$nChecks_8 = count($_POST['frutas_8'])) {

                                    @(bool)$caldasChecks_8 = count($_POST['caldas_8']);
                                    @(bool)$complementosChecks_8 = count($_POST['complementos_8']);
                                    @(bool)$sorveteCheck_8 = count($_POST['sorvete_8']);
                                
                                    print 'Total de checkboxs marcados: '. $nChecks_8 . '<br />'; 
    
                                    if($valor_acai_8 == 7){
                                        $pedido_8 = "Mini";
                                        $_SESSION['pedido8'] = $pedido_8;
                                        if($nChecks_8 > 1){
                                            $quant_frutas_8 = $nChecks_8 - 1;
                                        }
                                        if($caldasChecks_8 > 3){
                                            $quant_caldas_8 = $caldasChecks_8 - 3;
                                        }
                                        if($complementosChecks_8 > 3){
                                            $quant_complementos_8 = $complementosChecks_8 - 3;
                                        }
                                        if($sorveteCheck_8 > 0){
                                            $quant_sorvetes_8 = $sorveteCheck_8 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_8;
                                        }
    
                                    }else if($valor_acai_8 == 10 || $valor_acai_8 == 14){
                                        if($valor_acai_8 == 10){
                                            $pedido_8 = "P";
                                            $_SESSION['pedido8'] = $pedido_8;
                                        }
    
                                        if($valor_acai_8 == 14){
                                            $pedido_8 = "M";
                                            $_SESSION['pedido8'] = $pedido_8;
                                        }
    
                                        if($nChecks_8 > 2){
                                            $quant_frutas_8 = $nChecks_8 - 2;
                                        }
                                        if($caldasChecks_8 > 4){
                                            $quant_caldas_8 = $caldasChecks_8 - 4;
                                        }
                                        if($sorveteCheck_8 > 0){
                                            $quant_sorvetes_8 = $sorveteCheck_8 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_8;
                                        }
    
                                    }else if($valor_acai_8 == 23){
                                        $pedido_8 = "G";
                                        $_SESSION['pedido8'] = $pedido_8;
                                        if($nChecks_8 > 3){
                                            $quant_frutas_8 = $nChecks_8 - 3;
                                        }
                                        if($caldasChecks_8 > 4){
                                            $quant_caldas_8 = $caldasChecks_8 - 4;
                                        }
                                        if($sorveteCheck_8 > 0){
                                            $quant_sorvetes_8 = $sorveteCheck_8 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_8;
                                        }
    
                                    }else if($valor_acai_8 == 18 || $valor_acai_8 == 35 || $valor_acai_8 == 50){
                                        if($valor_acai_8 == 18){
                                            $pedido_8 = "Barca Pequena";
                                            $_SESSION['pedido8'] = $pedido_8;
                                        }
                                        if($valor_acai_8 == 35){
                                            $pedido_8 = "Barca Média";
                                            $_SESSION['pedido8'] = $pedido_8;
                                        }
                                        if($valor_acai_8 == 50){
                                            $pedido_8 = "Barca Grande";
                                            $_SESSION['pedido8'] = $pedido_8;
                                        }
    
                                        if($nChecks_8 > 4){
                                            $quant_frutas_8 = $nChecks_8 - 4;
                                        }
                                        if($caldasChecks_8 > 4){
                                            $quant_caldas_8 = $caldasChecks_8 - 4;
                                        }
                                        if($sorveteCheck_8 > 0){
                                            $quant_sorvetes_8 = $sorveteCheck_8 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_8;
                                        }
    
    
                                    }
    
                                    if(isset($_POST['frutas_8'])){
                                        $opcoes_8 = $_POST['frutas_8'];
                                        $opcoes_fruta_8 = implode("<br>", $opcoes_8);
                                        $opcoes_fruta_bd_8 = implode("\n    ", $opcoes_8);
                                        $_SESSION['frutasBD_8'] = $opcoes_fruta_bd_8;
                                        $_SESSION['frutas_8'] = $opcoes_fruta_8;
                                        
                                        foreach ($_POST['frutas_8'] as $frutas_8) {
                            
                                            print "• {$frutas_8}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['caldas_8'])){
                                        $opcoes2_8 = $_POST['caldas_8'];
                                        $opcoes_calda_8 = implode("<br>", $opcoes2_8);
                                        $opcoes_calda_bd_8 = implode("\n    ", $opcoes2_8);
                                        $_SESSION['caldas_8'] = $opcoes_calda_8;
                                        $_SESSION['caldasBD_8'] = $opcoes_calda_bd_8;
                                        foreach ($_POST['caldas_8'] as $caldas_8) {
                            
                                            print "• {$caldas_8}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['complementos_8'])){
                                        $opcoes3_8 = $_POST['complementos_8'];
                                        $opcoes_comple_8 = implode("<br>", $opcoes3_8);
                                        $opcoes_comple_bd_8 = implode("\n    ", $opcoes3_8);
                                        $_SESSION['complementos_8'] = $opcoes_comple_8;
                                        $_SESSION['complementosBD_8'] = $opcoes_comple_bd_8;
                                        foreach ($_POST['complementos_8'] as $complementos_8) {
                            
                                            print "• {$complementos_8}<br />";
                                           
                                        }
    
                                        $_SESSION['tamanho_acai_8'] = $pedido_8;
                                    }
    
                                    if(isset($_POST['sorvete_8'])){
                                        $opcoes4_8 = $_POST['sorvete_8'];
                                        $_SESSION['sorvete_8'] = $opcoes4_8;
                                        print "•".$_SESSION['sorvete_8']."<br />";
                                           
                                    }

                                   

                            }

                            $ped_8_db = $valor_acai_8 + $quant_frutas_8 + $quant_caldas_8 + $quant_complementos_8 + $quant_sorvetes_8;
                            $vezes = 8;

                            mysqli_query($link,"INSERT INTO tb_pedido(vl_pedido,vl_troco,dt_data,hr_pedido,vl_acai) VALUES('$ped_8_db','$print_sub','$dataEUA','$hora','$valor_acai_8')");


                            //Verificando se existe pedido 9
                            if($valor_acai_9 != 0){
                                $_SESSION['quant_pedidos'] = 3;
                                $_SESSION['pedido_9'] = 1;
                                echo "<br>Pedido Nº9<br>";

                                if ((bool)$nChecks_9 = count($_POST['frutas_9'])) {

                                    @(bool)$caldasChecks_9 = count($_POST['caldas_9']);
                                    @(bool)$complementosChecks_9 = count($_POST['complementos_9']);
                                    @(bool)$sorveteCheck_9 = count($_POST['sorvete_9']);
                                
                                    print 'Total de checkboxs marcados: '. $nChecks_9 . '<br />'; 
    
                                    if($valor_acai_9 == 7){
                                        $pedido_9 = "Mini";
                                        $_SESSION['pedido9'] = $pedido_9;
                                        if($nChecks_9 > 1){
                                            $quant_frutas_9 = $nChecks_9 - 1;
                                        }
                                        if($caldasChecks_9 > 3){
                                            $quant_caldas_9 = $caldasChecks_9 - 3;
                                        }
                                        if($complementosChecks_9 > 3){
                                            $quant_complementos_9 = $complementosChecks_9 - 3;
                                        }
                                        if($sorveteCheck_9 > 0){
                                            $quant_sorvetes_9 = $sorveteCheck_9 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_9;
                                        }
    
                                    }else if($valor_acai_9 == 10 || $valor_acai_9 == 14){
                                        if($valor_acai_9 == 10){
                                            $pedido_9 = "P";
                                            $_SESSION['pedido9'] = $pedido_9;
                                        }
    
                                        if($valor_acai_9 == 14){
                                            $pedido_9 = "M";
                                            $_SESSION['pedido9'] = $pedido_9;
                                        }
    
                                        if($nChecks_9 > 2){
                                            $quant_frutas_9 = $nChecks_9 - 2;
                                        }
                                        if($caldasChecks_9 > 4){
                                            $quant_caldas_9 = $caldasChecks_9 - 4;
                                        }
                                        if($sorveteCheck_9 > 0){
                                            $quant_sorvetes_9 = $sorveteCheck_9 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_9;
                                        }
    
                                    }else if($valor_acai_9 == 23){
                                        $pedido_9 = "G";
                                        $_SESSION['pedido9'] = $pedido_9;
                                        if($nChecks_9 > 3){
                                            $quant_frutas_9 = $nChecks_9 - 3;
                                        }
                                        if($caldasChecks_9 > 4){
                                            $quant_caldas_9 = $caldasChecks_9 - 4;
                                        }
                                        if($sorveteCheck_9 > 0){
                                            $quant_sorvetes_9 = $sorveteCheck_9 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_9;
                                        }
    
                                    }else if($valor_acai_9 == 18 || $valor_acai_9 == 35 || $valor_acai_9 == 50){
                                        if($valor_acai_9 == 18){
                                            $pedido_9 = "Barca Pequena";
                                            $_SESSION['pedido9'] = $pedido_9;
                                        }
                                        if($valor_acai_9 == 35){
                                            $pedido_9 = "Barca Média";
                                            $_SESSION['pedido9'] = $pedido_9;
                                        }
                                        if($valor_acai_9 == 50){
                                            $pedido_9 = "Barca Grande";
                                            $_SESSION['pedido9'] = $pedido_9;
                                        }
    
                                        if($nChecks_9 > 4){
                                            $quant_frutas_9 = $nChecks_9 - 4;
                                        }
                                        if($caldasChecks_9 > 4){
                                            $quant_caldas_9 = $caldasChecks_9 - 4;
                                        }
                                        if($sorveteCheck_9 > 0){
                                            $quant_sorvetes_9 = $sorveteCheck_9 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_9;
                                        }
    
    
                                    }
    
                                    if(isset($_POST['frutas_9'])){
                                        $opcoes_9 = $_POST['frutas_9'];
                                        $opcoes_fruta_9 = implode("<br>", $opcoes_9);
                                        $opcoes_fruta_bd_9 = implode("\n    ", $opcoes_9);
                                        $_SESSION['frutasBD_9'] = $opcoes_fruta_bd_9;
                                        $_SESSION['frutas_9'] = $opcoes_fruta_9;
                                        
                                        foreach ($_POST['frutas_9'] as $frutas_9) {
                            
                                            print "• {$frutas_9}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['caldas_9'])){
                                        $opcoes2_9 = $_POST['caldas_9'];
                                        $opcoes_calda_9 = implode("<br>", $opcoes2_9);
                                        $opcoes_calda_bd_9 = implode("\n    ", $opcoes2_9);
                                        $_SESSION['caldas_9'] = $opcoes_calda_9;
                                        $_SESSION['caldasBD_9'] = $opcoes_calda_bd_9;
                                        foreach ($_POST['caldas_9'] as $caldas_9) {
                            
                                            print "• {$caldas_9}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['complementos_9'])){
                                        $opcoes3_9 = $_POST['complementos_9'];
                                        $opcoes_comple_9 = implode("<br>", $opcoes3_9);
                                        $opcoes_comple_bd_9 = implode("\n    ", $opcoes3_9);
                                        $_SESSION['complementos_9'] = $opcoes_comple_9;
                                        $_SESSION['complementosBD_9'] = $opcoes_comple_bd_9;
                                        foreach ($_POST['complementos_9'] as $complementos_9) {
                            
                                            print "• {$complementos_9}<br />";
                                           
                                        }
    
                                        $_SESSION['tamanho_acai_9'] = $pedido_9;
                                    }
    
                                    if(isset($_POST['sorvete_9'])){
                                        $opcoes4_9 = $_POST['sorvete_9'];
                                        $_SESSION['sorvete_9'] = $opcoes4_9;
                                        print "•".$_SESSION['sorvete_9']."<br />";
                                           
                                    }

                                   

                            }

                            $ped_9_db = $valor_acai_9 + $quant_frutas_9 + $quant_caldas_9 + $quant_complementos_9 + $quant_sorvetes_9;
                            $vezes = 9;

                            mysqli_query($link,"INSERT INTO tb_pedido(vl_pedido,vl_troco,dt_data,hr_pedido,vl_acai) VALUES('$ped_9_db','$print_sub','$dataEUA','$hora','$valor_acai_9')");


                            //Verificando se existe pedido 10
                            if($valor_acai_10 != 0){
                                $_SESSION['quant_pedidos'] = 3;
                                $_SESSION['pedido_10'] = 1;
                                echo "<br>Pedido Nº10<br>";

                                if ((bool)$nChecks_10 = count($_POST['frutas_10'])) {

                                    @(bool)$caldasChecks_10 = count($_POST['caldas_10']);
                                    @(bool)$complementosChecks_10 = count($_POST['complementos_10']);
                                    @(bool)$sorveteCheck_10 = count($_POST['sorvete_10']);
                                
                                    print 'Total de checkboxs marcados: '. $nChecks_10 . '<br />'; 
    
                                    if($valor_acai_10 == 7){
                                        $pedido_10 = "Mini";
                                        $_SESSION['pedido10'] = $pedido_10;
                                        if($nChecks_10 > 1){
                                            $quant_frutas_10 = $nChecks_10 - 1;
                                        }
                                        if($caldasChecks_10 > 3){
                                            $quant_caldas_10 = $caldasChecks_10 - 3;
                                        }
                                        if($complementosChecks_10 > 3){
                                            $quant_complementos_10 = $complementosChecks_10 - 3;
                                        }
                                        if($sorveteCheck_10 > 0){
                                            $quant_sorvetes_10 = $sorveteCheck_10 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_10;
                                        }
    
                                    }else if($valor_acai_10 == 10 || $valor_acai_10 == 14){
                                        if($valor_acai_10 == 10){
                                            $pedido_10 = "P";
                                            $_SESSION['pedido10'] = $pedido_10;
                                        }
    
                                        if($valor_acai_10 == 14){
                                            $pedido_10 = "M";
                                            $_SESSION['pedido10'] = $pedido_10;
                                        }
    
                                        if($nChecks_10 > 2){
                                            $quant_frutas_10 = $nChecks_10 - 2;
                                        }
                                        if($caldasChecks_10 > 4){
                                            $quant_caldas_10 = $caldasChecks_10 - 4;
                                        }
                                        if($sorveteCheck_10 > 0){
                                            $quant_sorvetes_10 = $sorveteCheck_10 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_10;
                                        }
    
                                    }else if($valor_acai_10 == 23){
                                        $pedido_10 = "G";
                                        $_SESSION['pedido10'] = $pedido_10;
                                        if($nChecks_10 > 3){
                                            $quant_frutas_10 = $nChecks_10 - 3;
                                        }
                                        if($caldasChecks_10 > 4){
                                            $quant_caldas_10 = $caldasChecks_10 - 4;
                                        }
                                        if($sorveteCheck_10 > 0){
                                            $quant_sorvetes_10 = $sorveteCheck_10 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_10;
                                        }
    
                                    }else if($valor_acai_10 == 18 || $valor_acai_10 == 35 || $valor_acai_10 == 50){
                                        if($valor_acai_10 == 18){
                                            $pedido_10 = "Barca Pequena";
                                            $_SESSION['pedido10'] = $pedido_10;
                                        }
                                        if($valor_acai_10 == 35){
                                            $pedido_10 = "Barca Média";
                                            $_SESSION['pedido10'] = $pedido_10;
                                        }
                                        if($valor_acai_10 == 50){
                                            $pedido_10 = "Barca Grande";
                                            $_SESSION['pedido10'] = $pedido_10;
                                        }
    
                                        if($nChecks_10 > 4){
                                            $quant_frutas_10 = $nChecks_10 - 4;
                                        }
                                        if($caldasChecks_10 > 4){
                                            $quant_caldas_10 = $caldasChecks_10 - 4;
                                        }
                                        if($sorveteCheck_10 > 0){
                                            $quant_sorvetes_10 = $sorveteCheck_10 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_10;
                                        }
    
    
                                    }
    
                                    if(isset($_POST['frutas_10'])){
                                        $opcoes_10 = $_POST['frutas_10'];
                                        $opcoes_fruta_10 = implode("<br>", $opcoes_10);
                                        $opcoes_fruta_bd_10 = implode("\n    ", $opcoes_10);
                                        $_SESSION['frutasBD_10'] = $opcoes_fruta_bd_10;
                                        $_SESSION['frutas_10'] = $opcoes_fruta_10;
                                        
                                        foreach ($_POST['frutas_10'] as $frutas_10) {
                            
                                            print "• {$frutas_10}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['caldas_10'])){
                                        $opcoes2_10 = $_POST['caldas_10'];
                                        $opcoes_calda_10 = implode("<br>", $opcoes2_10);
                                        $opcoes_calda_bd_10 = implode("\n    ", $opcoes2_10);
                                        $_SESSION['caldas_10'] = $opcoes_calda_10;
                                        $_SESSION['caldasBD_10'] = $opcoes_calda_bd_10;
                                        foreach ($_POST['caldas_10'] as $caldas_10) {
                            
                                            print "• {$caldas_10}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['complementos_10'])){
                                        $opcoes3_10 = $_POST['complementos_10'];
                                        $opcoes_comple_10 = implode("<br>", $opcoes3_10);
                                        $opcoes_comple_bd_10 = implode("\n    ", $opcoes3_10);
                                        $_SESSION['complementos_10'] = $opcoes_comple_10;
                                        $_SESSION['complementosBD_10'] = $opcoes_comple_bd_10;
                                        foreach ($_POST['complementos_10'] as $complementos_10) {
                            
                                            print "• {$complementos_10}<br />";
                                           
                                        }
    
                                        $_SESSION['tamanho_acai_10'] = $pedido_10;
                                    }
    
                                    if(isset($_POST['sorvete_10'])){
                                        $opcoes4_10 = $_POST['sorvete_10'];
                                        $_SESSION['sorvete_10'] = $opcoes4_10;
                                        print "•".$_SESSION['sorvete_10']."<br />";
                                           
                                    }

                                   

                            }

                            $ped_10_db = $valor_acai_10 + $quant_frutas_10 + $quant_caldas_10 + $quant_complementos_10 + $quant_sorvetes_10;
                            $vezes = 10;

                            mysqli_query($link,"INSERT INTO tb_pedido(vl_pedido,vl_troco,dt_data,hr_pedido,vl_acai) VALUES('$ped_10_db','$print_sub','$dataEUA','$hora','$valor_acai_10')");


                            //Verificando se existe pedido 11
                            if($valor_acai_11 != 0){
                                $_SESSION['quant_pedidos'] = 3;
                                $_SESSION['pedido_11'] = 1;
                                echo "<br>Pedido Nº11<br>";

                                if ((bool)$nChecks_11 = count($_POST['frutas_11'])) {

                                    @(bool)$caldasChecks_11 = count($_POST['caldas_11']);
                                    @(bool)$complementosChecks_11 = count($_POST['complementos_11']);
                                    @(bool)$sorveteCheck_11 = count($_POST['sorvete_11']);
                                
                                    print 'Total de checkboxs marcados: '. $nChecks_11 . '<br />'; 
    
                                    if($valor_acai_11 == 7){
                                        $pedido_11 = "Mini";
                                        $_SESSION['pedido11'] = $pedido_11;
                                        if($nChecks_11 > 1){
                                            $quant_frutas_11 = $nChecks_11 - 1;
                                        }
                                        if($caldasChecks_11 > 3){
                                            $quant_caldas_11 = $caldasChecks_11 - 3;
                                        }
                                        if($complementosChecks_11 > 3){
                                            $quant_complementos_11 = $complementosChecks_11 - 3;
                                        }
                                        if($sorveteCheck_11 > 0){
                                            $quant_sorvetes_11 = $sorveteCheck_11 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_11;
                                        }
    
                                    }else if($valor_acai_11 == 10 || $valor_acai_11 == 14){
                                        if($valor_acai_11 == 10){
                                            $pedido_11 = "P";
                                            $_SESSION['pedido11'] = $pedido_11;
                                        }
    
                                        if($valor_acai_11 == 14){
                                            $pedido_11 = "M";
                                            $_SESSION['pedido11'] = $pedido_11;
                                        }
    
                                        if($nChecks_11 > 2){
                                            $quant_frutas_11 = $nChecks_11 - 2;
                                        }
                                        if($caldasChecks_11 > 4){
                                            $quant_caldas_11 = $caldasChecks_11 - 4;
                                        }
                                        if($sorveteCheck_11 > 0){
                                            $quant_sorvetes_11 = $sorveteCheck_11 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_11;
                                        }
    
                                    }else if($valor_acai_11 == 23){
                                        $pedido_11 = "G";
                                        $_SESSION['pedido11'] = $pedido_11;
                                        if($nChecks_11 > 3){
                                            $quant_frutas_11 = $nChecks_11 - 3;
                                        }
                                        if($caldasChecks_11 > 4){
                                            $quant_caldas_11 = $caldasChecks_11 - 4;
                                        }
                                        if($sorveteCheck_11 > 0){
                                            $quant_sorvetes_11 = $sorveteCheck_11 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_11;
                                        }
    
                                    }else if($valor_acai_11 == 18 || $valor_acai_11 == 35 || $valor_acai_11 == 50){
                                        if($valor_acai_11 == 18){
                                            $pedido_11 = "Barca Pequena";
                                            $_SESSION['pedido11'] = $pedido_11;
                                        }
                                        if($valor_acai_11 == 35){
                                            $pedido_11 = "Barca Média";
                                            $_SESSION['pedido11'] = $pedido_11;
                                        }
                                        if($valor_acai_11 == 50){
                                            $pedido_11 = "Barca Grande";
                                            $_SESSION['pedido11'] = $pedido_11;
                                        }
    
                                        if($nChecks_11 > 4){
                                            $quant_frutas_11 = $nChecks_11 - 4;
                                        }
                                        if($caldasChecks_11 > 4){
                                            $quant_caldas_11 = $caldasChecks_11 - 4;
                                        }
                                        if($sorveteCheck_11 > 0){
                                            $quant_sorvetes_11 = $sorveteCheck_11 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_11;
                                        }
    
    
                                    }
    
                                    if(isset($_POST['frutas_11'])){
                                        $opcoes_11 = $_POST['frutas_11'];
                                        $opcoes_fruta_11 = implode("<br>", $opcoes_11);
                                        $opcoes_fruta_bd_11 = implode("\n    ", $opcoes_11);
                                        $_SESSION['frutasBD_11'] = $opcoes_fruta_bd_11;
                                        $_SESSION['frutas_11'] = $opcoes_fruta_11;
                                        
                                        foreach ($_POST['frutas_11'] as $frutas_11) {
                            
                                            print "• {$frutas_11}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['caldas_11'])){
                                        $opcoes2_11 = $_POST['caldas_11'];
                                        $opcoes_calda_11 = implode("<br>", $opcoes2_11);
                                        $opcoes_calda_bd_11 = implode("\n    ", $opcoes2_11);
                                        $_SESSION['caldas_11'] = $opcoes_calda_11;
                                        $_SESSION['caldasBD_11'] = $opcoes_calda_bd_11;
                                        foreach ($_POST['caldas_11'] as $caldas_11) {
                            
                                            print "• {$caldas_11}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['complementos_11'])){
                                        $opcoes3_11 = $_POST['complementos_11'];
                                        $opcoes_comple_11 = implode("<br>", $opcoes3_11);
                                        $opcoes_comple_bd_11 = implode("\n    ", $opcoes3_11);
                                        $_SESSION['complementos_11'] = $opcoes_comple_11;
                                        $_SESSION['complementosBD_11'] = $opcoes_comple_bd_11;
                                        foreach ($_POST['complementos_11'] as $complementos_11) {
                            
                                            print "• {$complementos_11}<br />";
                                           
                                        }
    
                                        $_SESSION['tamanho_acai_11'] = $pedido_11;
                                    }
    
                                    if(isset($_POST['sorvete_11'])){
                                        $opcoes4_11 = $_POST['sorvete_11'];
                                        $_SESSION['sorvete_11'] = $opcoes4_11;
                                        print "•".$_SESSION['sorvete_11']."<br />";
                                           
                                    }

                                   

                            }

                            $ped_11_db = $valor_acai_11 + $quant_frutas_11 + $quant_caldas_11 + $quant_complementos_11 + $quant_sorvetes_11;
                            $vezes = 11;

                            mysqli_query($link,"INSERT INTO tb_pedido(vl_pedido,vl_troco,dt_data,hr_pedido,vl_acai) VALUES('$ped_11_db','$print_sub','$dataEUA','$hora','$valor_acai_11')");


                            //Verificando se existe pedido 12
                            if($valor_acai_12 != 0){
                                $_SESSION['quant_pedidos'] = 3;
                                $_SESSION['pedido_12'] = 1;
                                echo "<br>Pedido Nº12<br>";

                                if ((bool)$nChecks_12 = count($_POST['frutas_12'])) {

                                    @(bool)$caldasChecks_12 = count($_POST['caldas_12']);
                                    @(bool)$complementosChecks_12 = count($_POST['complementos_12']);
                                    @(bool)$sorveteCheck_12 = count($_POST['sorvete_12']);
                                
                                    print 'Total de checkboxs marcados: '. $nChecks_12 . '<br />'; 
    
                                    if($valor_acai_12 == 7){
                                        $pedido_12 = "Mini";
                                        $_SESSION['pedido12'] = $pedido_12;
                                        if($nChecks_12 > 1){
                                            $quant_frutas_12 = $nChecks_12 - 1;
                                        }
                                        if($caldasChecks_12 > 3){
                                            $quant_caldas_12 = $caldasChecks_12 - 3;
                                        }
                                        if($complementosChecks_12 > 3){
                                            $quant_complementos_12 = $complementosChecks_12 - 3;
                                        }
                                        if($sorveteCheck_12 > 0){
                                            $quant_sorvetes_12 = $sorveteCheck_12 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_12;
                                        }
    
                                    }else if($valor_acai_12 == 10 || $valor_acai_12 == 14){
                                        if($valor_acai_12 == 10){
                                            $pedido_12 = "P";
                                            $_SESSION['pedido12'] = $pedido_12;
                                        }
    
                                        if($valor_acai_12 == 14){
                                            $pedido_12 = "M";
                                            $_SESSION['pedido12'] = $pedido_12;
                                        }
    
                                        if($nChecks_12 > 2){
                                            $quant_frutas_12 = $nChecks_12 - 2;
                                        }
                                        if($caldasChecks_12 > 4){
                                            $quant_caldas_12 = $caldasChecks_12 - 4;
                                        }
                                        if($sorveteCheck_12 > 0){
                                            $quant_sorvetes_12 = $sorveteCheck_12 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_12;
                                        }
    
                                    }else if($valor_acai_12 == 23){
                                        $pedido_12 = "G";
                                        $_SESSION['pedido12'] = $pedido_12;
                                        if($nChecks_12 > 3){
                                            $quant_frutas_12 = $nChecks_12 - 3;
                                        }
                                        if($caldasChecks_12 > 4){
                                            $quant_caldas_12 = $caldasChecks_12 - 4;
                                        }
                                        if($sorveteCheck_12 > 0){
                                            $quant_sorvetes_12 = $sorveteCheck_12 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_12;
                                        }
    
                                    }else if($valor_acai_12 == 18 || $valor_acai_12 == 35 || $valor_acai_12 == 50){
                                        if($valor_acai_12 == 18){
                                            $pedido_12 = "Barca Pequena";
                                            $_SESSION['pedido12'] = $pedido_12;
                                        }
                                        if($valor_acai_12 == 35){
                                            $pedido_12 = "Barca Média";
                                            $_SESSION['pedido12'] = $pedido_12;
                                        }
                                        if($valor_acai_12 == 50){
                                            $pedido_12 = "Barca Grande";
                                            $_SESSION['pedido12'] = $pedido_12;
                                        }
    
                                        if($nChecks_12 > 4){
                                            $quant_frutas_12 = $nChecks_12 - 4;
                                        }
                                        if($caldasChecks_12 > 4){
                                            $quant_caldas_12 = $caldasChecks_12 - 4;
                                        }
                                        if($sorveteCheck_12 > 0){
                                            $quant_sorvetes_12 = $sorveteCheck_12 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_12;
                                        }
    
    
                                    }
    
                                    if(isset($_POST['frutas_12'])){
                                        $opcoes_12 = $_POST['frutas_12'];
                                        $opcoes_fruta_12 = implode("<br>", $opcoes_12);
                                        $opcoes_fruta_bd_12 = implode("\n    ", $opcoes_12);
                                        $_SESSION['frutasBD_12'] = $opcoes_fruta_bd_12;
                                        $_SESSION['frutas_12'] = $opcoes_fruta_12;
                                        
                                        foreach ($_POST['frutas_12'] as $frutas_12) {
                            
                                            print "• {$frutas_12}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['caldas_12'])){
                                        $opcoes2_12 = $_POST['caldas_12'];
                                        $opcoes_calda_12 = implode("<br>", $opcoes2_12);
                                        $opcoes_calda_bd_12 = implode("\n    ", $opcoes2_12);
                                        $_SESSION['caldas_12'] = $opcoes_calda_12;
                                        $_SESSION['caldasBD_12'] = $opcoes_calda_bd_12;
                                        foreach ($_POST['caldas_12'] as $caldas_12) {
                            
                                            print "• {$caldas_12}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['complementos_12'])){
                                        $opcoes3_12 = $_POST['complementos_12'];
                                        $opcoes_comple_12 = implode("<br>", $opcoes3_12);
                                        $opcoes_comple_bd_12 = implode("\n    ", $opcoes3_12);
                                        $_SESSION['complementos_12'] = $opcoes_comple_12;
                                        $_SESSION['complementosBD_12'] = $opcoes_comple_bd_12;
                                        foreach ($_POST['complementos_12'] as $complementos_12) {
                            
                                            print "• {$complementos_12}<br />";
                                           
                                        }
    
                                        $_SESSION['tamanho_acai_12'] = $pedido_12;
                                    }
    
                                    if(isset($_POST['sorvete_12'])){
                                        $opcoes4_12 = $_POST['sorvete_12'];
                                        $_SESSION['sorvete_12'] = $opcoes4_12;
                                        print "•".$_SESSION['sorvete_12']."<br />";
                                           
                                    }

                                   

                            }

                            $ped_12_db = $valor_acai_12 + $quant_frutas_12 + $quant_caldas_12 + $quant_complementos_12 + $quant_sorvetes_12;
                            $vezes = 12;

                            mysqli_query($link,"INSERT INTO tb_pedido(vl_pedido,vl_troco,dt_data,hr_pedido,vl_acai) VALUES('$ped_12_db','$print_sub','$dataEUA','$hora','$valor_acai_12')");


                            //Verificando se existe pedido 13
                            if($valor_acai_13 != 0){
                                $_SESSION['quant_pedidos'] = 3;
                                $_SESSION['pedido_13'] = 1;
                                echo "<br>Pedido Nº13<br>";

                                if ((bool)$nChecks_13 = count($_POST['frutas_13'])) {

                                    @(bool)$caldasChecks_13 = count($_POST['caldas_13']);
                                    @(bool)$complementosChecks_13 = count($_POST['complementos_13']);
                                    @(bool)$sorveteCheck_13 = count($_POST['sorvete_13']);
                                
                                    print 'Total de checkboxs marcados: '. $nChecks_13 . '<br />'; 
    
                                    if($valor_acai_13 == 7){
                                        $pedido_13 = "Mini";
                                        $_SESSION['pedido13'] = $pedido_13;
                                        if($nChecks_13 > 1){
                                            $quant_frutas_13 = $nChecks_13 - 1;
                                        }
                                        if($caldasChecks_13 > 3){
                                            $quant_caldas_13 = $caldasChecks_13 - 3;
                                        }
                                        if($complementosChecks_13 > 3){
                                            $quant_complementos_13 = $complementosChecks_13 - 3;
                                        }
                                        if($sorveteCheck_13 > 0){
                                            $quant_sorvetes_13 = $sorveteCheck_13 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_13;
                                        }
    
                                    }else if($valor_acai_13 == 10 || $valor_acai_13 == 14){
                                        if($valor_acai_13 == 10){
                                            $pedido_13 = "P";
                                            $_SESSION['pedido13'] = $pedido_13;
                                        }
    
                                        if($valor_acai_13 == 14){
                                            $pedido_13 = "M";
                                            $_SESSION['pedido13'] = $pedido_13;
                                        }
    
                                        if($nChecks_13 > 2){
                                            $quant_frutas_13 = $nChecks_13 - 2;
                                        }
                                        if($caldasChecks_13 > 4){
                                            $quant_caldas_13 = $caldasChecks_13 - 4;
                                        }
                                        if($sorveteCheck_13 > 0){
                                            $quant_sorvetes_13 = $sorveteCheck_13 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_13;
                                        }
    
                                    }else if($valor_acai_13 == 23){
                                        $pedido_13 = "G";
                                        $_SESSION['pedido13'] = $pedido_13;
                                        if($nChecks_13 > 3){
                                            $quant_frutas_13 = $nChecks_13 - 3;
                                        }
                                        if($caldasChecks_13 > 4){
                                            $quant_caldas_13 = $caldasChecks_13 - 4;
                                        }
                                        if($sorveteCheck_13 > 0){
                                            $quant_sorvetes_13 = $sorveteCheck_13 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_13;
                                        }
    
                                    }else if($valor_acai_13 == 18 || $valor_acai_13 == 35 || $valor_acai_13 == 50){
                                        if($valor_acai_13 == 18){
                                            $pedido_13 = "Barca Pequena";
                                            $_SESSION['pedido13'] = $pedido_13;
                                        }
                                        if($valor_acai_13 == 35){
                                            $pedido_13 = "Barca Média";
                                            $_SESSION['pedido13'] = $pedido_13;
                                        }
                                        if($valor_acai_13 == 50){
                                            $pedido_13 = "Barca Grande";
                                            $_SESSION['pedido13'] = $pedido_13;
                                        }
    
                                        if($nChecks_13 > 4){
                                            $quant_frutas_13 = $nChecks_13 - 4;
                                        }
                                        if($caldasChecks_13 > 4){
                                            $quant_caldas_13 = $caldasChecks_13 - 4;
                                        }
                                        if($sorveteCheck_13 > 0){
                                            $quant_sorvetes_13 = $sorveteCheck_13 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_13;
                                        }
    
    
                                    }
    
                                    if(isset($_POST['frutas_13'])){
                                        $opcoes_13 = $_POST['frutas_13'];
                                        $opcoes_fruta_13 = implode("<br>", $opcoes_13);
                                        $opcoes_fruta_bd_13 = implode("\n    ", $opcoes_13);
                                        $_SESSION['frutasBD_13'] = $opcoes_fruta_bd_13;
                                        $_SESSION['frutas_13'] = $opcoes_fruta_13;
                                        
                                        foreach ($_POST['frutas_13'] as $frutas_13) {
                            
                                            print "• {$frutas_13}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['caldas_13'])){
                                        $opcoes2_13 = $_POST['caldas_13'];
                                        $opcoes_calda_13 = implode("<br>", $opcoes2_13);
                                        $opcoes_calda_bd_13 = implode("\n    ", $opcoes2_13);
                                        $_SESSION['caldas_13'] = $opcoes_calda_13;
                                        $_SESSION['caldasBD_13'] = $opcoes_calda_bd_13;
                                        foreach ($_POST['caldas_13'] as $caldas_13) {
                            
                                            print "• {$caldas_13}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['complementos_13'])){
                                        $opcoes3_13 = $_POST['complementos_13'];
                                        $opcoes_comple_13 = implode("<br>", $opcoes3_13);
                                        $opcoes_comple_bd_13 = implode("\n    ", $opcoes3_13);
                                        $_SESSION['complementos_13'] = $opcoes_comple_13;
                                        $_SESSION['complementosBD_13'] = $opcoes_comple_bd_13;
                                        foreach ($_POST['complementos_13'] as $complementos_13) {
                            
                                            print "• {$complementos_13}<br />";
                                           
                                        }
    
                                        $_SESSION['tamanho_acai_13'] = $pedido_13;
                                    }
    
                                    if(isset($_POST['sorvete_13'])){
                                        $opcoes4_13 = $_POST['sorvete_13'];
                                        $_SESSION['sorvete_13'] = $opcoes4_13;
                                        print "•".$_SESSION['sorvete_13']."<br />";
                                           
                                    }

                                   

                            }

                            $ped_13_db = $valor_acai_13 + $quant_frutas_13 + $quant_caldas_13 + $quant_complementos_13 + $quant_sorvetes_13;
                            $vezes = 13;

                            mysqli_query($link,"INSERT INTO tb_pedido(vl_pedido,vl_troco,dt_data,hr_pedido,vl_acai) VALUES('$ped_13_db','$print_sub','$dataEUA','$hora','$valor_acai_13')");


                            //Verificando se existe pedido 14
                            if($valor_acai_14 != 0){
                                $_SESSION['quant_pedidos'] = 3;
                                $_SESSION['pedido_14'] = 1;
                                echo "<br>Pedido Nº14<br>";

                                if ((bool)$nChecks_14 = count($_POST['frutas_14'])) {

                                    @(bool)$caldasChecks_14 = count($_POST['caldas_14']);
                                    @(bool)$complementosChecks_14 = count($_POST['complementos_14']);
                                    @(bool)$sorveteCheck_14 = count($_POST['sorvete_14']);
                                
                                    print 'Total de checkboxs marcados: '. $nChecks_14 . '<br />'; 
    
                                    if($valor_acai_14 == 7){
                                        $pedido_14 = "Mini";
                                        $_SESSION['pedido14'] = $pedido_14;
                                        if($nChecks_14 > 1){
                                            $quant_frutas_14 = $nChecks_14 - 1;
                                        }
                                        if($caldasChecks_14 > 3){
                                            $quant_caldas_14 = $caldasChecks_14 - 3;
                                        }
                                        if($complementosChecks_14 > 3){
                                            $quant_complementos_14 = $complementosChecks_14 - 3;
                                        }
                                        if($sorveteCheck_14 > 0){
                                            $quant_sorvetes_14 = $sorveteCheck_14 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_14;
                                        }
    
                                    }else if($valor_acai_14 == 10 || $valor_acai_14 == 14){
                                        if($valor_acai_14 == 10){
                                            $pedido_14 = "P";
                                            $_SESSION['pedido14'] = $pedido_14;
                                        }
    
                                        if($valor_acai_14 == 14){
                                            $pedido_14 = "M";
                                            $_SESSION['pedido14'] = $pedido_14;
                                        }
    
                                        if($nChecks_14 > 2){
                                            $quant_frutas_14 = $nChecks_14 - 2;
                                        }
                                        if($caldasChecks_14 > 4){
                                            $quant_caldas_14 = $caldasChecks_14 - 4;
                                        }
                                        if($sorveteCheck_14 > 0){
                                            $quant_sorvetes_14 = $sorveteCheck_14 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_14;
                                        }
    
                                    }else if($valor_acai_14 == 23){
                                        $pedido_14 = "G";
                                        $_SESSION['pedido14'] = $pedido_14;
                                        if($nChecks_14 > 3){
                                            $quant_frutas_14 = $nChecks_14 - 3;
                                        }
                                        if($caldasChecks_14 > 4){
                                            $quant_caldas_14 = $caldasChecks_14 - 4;
                                        }
                                        if($sorveteCheck_14 > 0){
                                            $quant_sorvetes_14 = $sorveteCheck_14 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_14;
                                        }
    
                                    }else if($valor_acai_14 == 18 || $valor_acai_14 == 35 || $valor_acai_14 == 50){
                                        if($valor_acai_14 == 18){
                                            $pedido_14 = "Barca Pequena";
                                            $_SESSION['pedido14'] = $pedido_14;
                                        }
                                        if($valor_acai_14 == 35){
                                            $pedido_14 = "Barca Média";
                                            $_SESSION['pedido14'] = $pedido_14;
                                        }
                                        if($valor_acai_14 == 50){
                                            $pedido_14 = "Barca Grande";
                                            $_SESSION['pedido14'] = $pedido_14;
                                        }
    
                                        if($nChecks_14 > 4){
                                            $quant_frutas_14 = $nChecks_14 - 4;
                                        }
                                        if($caldasChecks_14 > 4){
                                            $quant_caldas_14 = $caldasChecks_14 - 4;
                                        }
                                        if($sorveteCheck_14 > 0){
                                            $quant_sorvetes_14 = $sorveteCheck_14 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_14;
                                        }
    
    
                                    }
    
                                    if(isset($_POST['frutas_14'])){
                                        $opcoes_14 = $_POST['frutas_14'];
                                        $opcoes_fruta_14 = implode("<br>", $opcoes_14);
                                        $opcoes_fruta_bd_14 = implode("\n    ", $opcoes_14);
                                        $_SESSION['frutasBD_14'] = $opcoes_fruta_bd_14;
                                        $_SESSION['frutas_14'] = $opcoes_fruta_14;
                                        
                                        foreach ($_POST['frutas_14'] as $frutas_14) {
                            
                                            print "• {$frutas_14}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['caldas_14'])){
                                        $opcoes2_14 = $_POST['caldas_14'];
                                        $opcoes_calda_14 = implode("<br>", $opcoes2_14);
                                        $opcoes_calda_bd_14 = implode("\n    ", $opcoes2_14);
                                        $_SESSION['caldas_14'] = $opcoes_calda_14;
                                        $_SESSION['caldasBD_14'] = $opcoes_calda_bd_14;
                                        foreach ($_POST['caldas_14'] as $caldas_14) {
                            
                                            print "• {$caldas_14}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['complementos_14'])){
                                        $opcoes3_14 = $_POST['complementos_14'];
                                        $opcoes_comple_14 = implode("<br>", $opcoes3_14);
                                        $opcoes_comple_bd_14 = implode("\n    ", $opcoes3_14);
                                        $_SESSION['complementos_14'] = $opcoes_comple_14;
                                        $_SESSION['complementosBD_14'] = $opcoes_comple_bd_14;
                                        foreach ($_POST['complementos_14'] as $complementos_14) {
                            
                                            print "• {$complementos_14}<br />";
                                           
                                        }
    
                                        $_SESSION['tamanho_acai_14'] = $pedido_14;
                                    }
    
                                    if(isset($_POST['sorvete_14'])){
                                        $opcoes4_14 = $_POST['sorvete_14'];
                                        $_SESSION['sorvete_14'] = $opcoes4_14;
                                        print "•".$_SESSION['sorvete_14']."<br />";
                                           
                                    }

                                   

                            }

                            $ped_14_db = $valor_acai_14 + $quant_frutas_14 + $quant_caldas_14 + $quant_complementos_14 + $quant_sorvetes_14;
                            $vezes = 14;

                            mysqli_query($link,"INSERT INTO tb_pedido(vl_pedido,vl_troco,dt_data,hr_pedido,vl_acai) VALUES('$ped_14_db','$print_sub','$dataEUA','$hora','$valor_acai_14')");


                            //Verificando se existe pedido 15
                            if($valor_acai_15 != 0){
                                $_SESSION['quant_pedidos'] = 3;
                                $_SESSION['pedido_15'] = 1;
                                echo "<br>Pedido Nº15<br>";

                                if ((bool)$nChecks_15 = count($_POST['frutas_15'])) {

                                    @(bool)$caldasChecks_15 = count($_POST['caldas_15']);
                                    @(bool)$complementosChecks_15 = count($_POST['complementos_15']);
                                    @(bool)$sorveteCheck_15 = count($_POST['sorvete_15']);
                                
                                    print 'Total de checkboxs marcados: '. $nChecks_15 . '<br />'; 
    
                                    if($valor_acai_15 == 7){
                                        $pedido_15 = "Mini";
                                        $_SESSION['pedido15'] = $pedido_15;
                                        if($nChecks_15 > 1){
                                            $quant_frutas_15 = $nChecks_15 - 1;
                                        }
                                        if($caldasChecks_15 > 3){
                                            $quant_caldas_15 = $caldasChecks_15 - 3;
                                        }
                                        if($complementosChecks_15 > 3){
                                            $quant_complementos_15 = $complementosChecks_15 - 3;
                                        }
                                        if($sorveteCheck_15 > 0){
                                            $quant_sorvetes_15 = $sorveteCheck_15 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_15;
                                        }
    
                                    }else if($valor_acai_15 == 10 || $valor_acai_15 == 14){
                                        if($valor_acai_15 == 10){
                                            $pedido_15 = "P";
                                            $_SESSION['pedido15'] = $pedido_15;
                                        }
    
                                        if($valor_acai_15 == 14){
                                            $pedido_15 = "M";
                                            $_SESSION['pedido15'] = $pedido_15;
                                        }
    
                                        if($nChecks_15 > 2){
                                            $quant_frutas_15 = $nChecks_15 - 2;
                                        }
                                        if($caldasChecks_15 > 4){
                                            $quant_caldas_15 = $caldasChecks_15 - 4;
                                        }
                                        if($sorveteCheck_15 > 0){
                                            $quant_sorvetes_15 = $sorveteCheck_15 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_15;
                                        }
    
                                    }else if($valor_acai_15 == 23){
                                        $pedido_15 = "G";
                                        $_SESSION['pedido15'] = $pedido_15;
                                        if($nChecks_15 > 3){
                                            $quant_frutas_15 = $nChecks_15 - 3;
                                        }
                                        if($caldasChecks_15 > 4){
                                            $quant_caldas_15 = $caldasChecks_15 - 4;
                                        }
                                        if($sorveteCheck_15 > 0){
                                            $quant_sorvetes_15 = $sorveteCheck_15 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_15;
                                        }
    
                                    }else if($valor_acai_15 == 18 || $valor_acai_15 == 35 || $valor_acai_15 == 50){
                                        if($valor_acai_15 == 18){
                                            $pedido_15 = "Barca Pequena";
                                            $_SESSION['pedido15'] = $pedido_15;
                                        }
                                        if($valor_acai_15 == 35){
                                            $pedido_15 = "Barca Média";
                                            $_SESSION['pedido15'] = $pedido_15;
                                        }
                                        if($valor_acai_15 == 50){
                                            $pedido_15 = "Barca Grande";
                                            $_SESSION['pedido15'] = $pedido_15;
                                        }
    
                                        if($nChecks_15 > 4){
                                            $quant_frutas_15 = $nChecks_15 - 4;
                                        }
                                        if($caldasChecks_15 > 4){
                                            $quant_caldas_15 = $caldasChecks_15 - 4;
                                        }
                                        if($sorveteCheck_15 > 0){
                                            $quant_sorvetes_15 = $sorveteCheck_15 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_15;
                                        }
    
    
                                    }
    
                                    if(isset($_POST['frutas_15'])){
                                        $opcoes_15 = $_POST['frutas_15'];
                                        $opcoes_fruta_15 = implode("<br>", $opcoes_15);
                                        $opcoes_fruta_bd_15 = implode("\n    ", $opcoes_15);
                                        $_SESSION['frutasBD_15'] = $opcoes_fruta_bd_15;
                                        $_SESSION['frutas_15'] = $opcoes_fruta_15;
                                        
                                        foreach ($_POST['frutas_15'] as $frutas_15) {
                            
                                            print "• {$frutas_15}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['caldas_15'])){
                                        $opcoes2_15 = $_POST['caldas_15'];
                                        $opcoes_calda_15 = implode("<br>", $opcoes2_15);
                                        $opcoes_calda_bd_15 = implode("\n    ", $opcoes2_15);
                                        $_SESSION['caldas_15'] = $opcoes_calda_15;
                                        $_SESSION['caldasBD_15'] = $opcoes_calda_bd_15;
                                        foreach ($_POST['caldas_15'] as $caldas_15) {
                            
                                            print "• {$caldas_15}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['complementos_15'])){
                                        $opcoes3_15 = $_POST['complementos_15'];
                                        $opcoes_comple_15 = implode("<br>", $opcoes3_15);
                                        $opcoes_comple_bd_15 = implode("\n    ", $opcoes3_15);
                                        $_SESSION['complementos_15'] = $opcoes_comple_15;
                                        $_SESSION['complementosBD_15'] = $opcoes_comple_bd_15;
                                        foreach ($_POST['complementos_15'] as $complementos_15) {
                            
                                            print "• {$complementos_15}<br />";
                                           
                                        }
    
                                        $_SESSION['tamanho_acai_15'] = $pedido_15;
                                    }
    
                                    if(isset($_POST['sorvete_15'])){
                                        $opcoes4_15 = $_POST['sorvete_15'];
                                        $_SESSION['sorvete_15'] = $opcoes4_15;
                                        print "•".$_SESSION['sorvete_15']."<br />";
                                           
                                    }

                                   

                            }

                            $ped_15_db = $valor_acai_15 + $quant_frutas_15 + $quant_caldas_15 + $quant_complementos_15 + $quant_sorvetes_15;
                            $vezes = 15;

                            mysqli_query($link,"INSERT INTO tb_pedido(vl_pedido,vl_troco,dt_data,hr_pedido,vl_acai) VALUES('$ped_15_db','$print_sub','$dataEUA','$hora','$valor_acai_15')");


                            //Verificando se existe pedido 16
                            if($valor_acai_16 != 0){
                                $_SESSION['quant_pedidos'] = 3;
                                $_SESSION['pedido_16'] = 1;
                                echo "<br>Pedido Nº16<br>";

                                if ((bool)$nChecks_16 = count($_POST['frutas_16'])) {

                                    @(bool)$caldasChecks_16 = count($_POST['caldas_16']);
                                    @(bool)$complementosChecks_16 = count($_POST['complementos_16']);
                                    @(bool)$sorveteCheck_16 = count($_POST['sorvete_16']);
                                
                                    print 'Total de checkboxs marcados: '. $nChecks_16 . '<br />'; 
    
                                    if($valor_acai_16 == 7){
                                        $pedido_16 = "Mini";
                                        $_SESSION['pedido16'] = $pedido_16;
                                        if($nChecks_16 > 1){
                                            $quant_frutas_16 = $nChecks_16 - 1;
                                        }
                                        if($caldasChecks_16 > 3){
                                            $quant_caldas_16 = $caldasChecks_16 - 3;
                                        }
                                        if($complementosChecks_16 > 3){
                                            $quant_complementos_16 = $complementosChecks_16 - 3;
                                        }
                                        if($sorveteCheck_16 > 0){
                                            $quant_sorvetes_16 = $sorveteCheck_16 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_16;
                                        }
    
                                    }else if($valor_acai_16 == 10 || $valor_acai_16 == 14){
                                        if($valor_acai_16 == 10){
                                            $pedido_16 = "P";
                                            $_SESSION['pedido16'] = $pedido_16;
                                        }
    
                                        if($valor_acai_16 == 14){
                                            $pedido_16 = "M";
                                            $_SESSION['pedido16'] = $pedido_16;
                                        }
    
                                        if($nChecks_16 > 2){
                                            $quant_frutas_16 = $nChecks_16 - 2;
                                        }
                                        if($caldasChecks_16 > 4){
                                            $quant_caldas_16 = $caldasChecks_16 - 4;
                                        }
                                        if($sorveteCheck_16 > 0){
                                            $quant_sorvetes_16 = $sorveteCheck_16 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_16;
                                        }
    
                                    }else if($valor_acai_16 == 23){
                                        $pedido_16 = "G";
                                        $_SESSION['pedido16'] = $pedido_16;
                                        if($nChecks_16 > 3){
                                            $quant_frutas_16 = $nChecks_16 - 3;
                                        }
                                        if($caldasChecks_16 > 4){
                                            $quant_caldas_16 = $caldasChecks_16 - 4;
                                        }
                                        if($sorveteCheck_16 > 0){
                                            $quant_sorvetes_16 = $sorveteCheck_16 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_16;
                                        }
    
                                    }else if($valor_acai_16 == 18 || $valor_acai_16 == 35 || $valor_acai_16 == 50){
                                        if($valor_acai_16 == 18){
                                            $pedido_16 = "Barca Pequena";
                                            $_SESSION['pedido16'] = $pedido_16;
                                        }
                                        if($valor_acai_16 == 35){
                                            $pedido_16 = "Barca Média";
                                            $_SESSION['pedido16'] = $pedido_16;
                                        }
                                        if($valor_acai_16 == 50){
                                            $pedido_16 = "Barca Grande";
                                            $_SESSION['pedido16'] = $pedido_16;
                                        }
    
                                        if($nChecks_16 > 4){
                                            $quant_frutas_16 = $nChecks_16 - 4;
                                        }
                                        if($caldasChecks_16 > 4){
                                            $quant_caldas_16 = $caldasChecks_16 - 4;
                                        }
                                        if($sorveteCheck_16 > 0){
                                            $quant_sorvetes_16 = $sorveteCheck_16 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_16;
                                        }
    
    
                                    }
    
                                    if(isset($_POST['frutas_16'])){
                                        $opcoes_16 = $_POST['frutas_16'];
                                        $opcoes_fruta_16 = implode("<br>", $opcoes_16);
                                        $opcoes_fruta_bd_16 = implode("\n    ", $opcoes_16);
                                        $_SESSION['frutasBD_16'] = $opcoes_fruta_bd_16;
                                        $_SESSION['frutas_16'] = $opcoes_fruta_16;
                                        
                                        foreach ($_POST['frutas_16'] as $frutas_16) {
                            
                                            print "• {$frutas_16}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['caldas_16'])){
                                        $opcoes2_16 = $_POST['caldas_16'];
                                        $opcoes_calda_16 = implode("<br>", $opcoes2_16);
                                        $opcoes_calda_bd_16 = implode("\n    ", $opcoes2_16);
                                        $_SESSION['caldas_16'] = $opcoes_calda_16;
                                        $_SESSION['caldasBD_16'] = $opcoes_calda_bd_16;
                                        foreach ($_POST['caldas_16'] as $caldas_16) {
                            
                                            print "• {$caldas_16}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['complementos_16'])){
                                        $opcoes3_16 = $_POST['complementos_16'];
                                        $opcoes_comple_16 = implode("<br>", $opcoes3_16);
                                        $opcoes_comple_bd_16 = implode("\n    ", $opcoes3_16);
                                        $_SESSION['complementos_16'] = $opcoes_comple_16;
                                        $_SESSION['complementosBD_16'] = $opcoes_comple_bd_16;
                                        foreach ($_POST['complementos_16'] as $complementos_16) {
                            
                                            print "• {$complementos_16}<br />";
                                           
                                        }
    
                                        $_SESSION['tamanho_acai_16'] = $pedido_16;
                                    }
    
                                    if(isset($_POST['sorvete_16'])){
                                        $opcoes4_16 = $_POST['sorvete_16'];
                                        $_SESSION['sorvete_16'] = $opcoes4_16;
                                        print "•".$_SESSION['sorvete_16']."<br />";
                                           
                                    }

                                   

                            }

                            $ped_16_db = $valor_acai_16 + $quant_frutas_16 + $quant_caldas_16 + $quant_complementos_16 + $quant_sorvetes_16;
                            $vezes = 16;

                            mysqli_query($link,"INSERT INTO tb_pedido(vl_pedido,vl_troco,dt_data,hr_pedido,vl_acai) VALUES('$ped_16_db','$print_sub','$dataEUA','$hora','$valor_acai_16')");


                            //Verificando se existe pedido 17
                            if($valor_acai_17 != 0){
                                $_SESSION['quant_pedidos'] = 3;
                                $_SESSION['pedido_17'] = 1;
                                echo "<br>Pedido Nº17<br>";

                                if ((bool)$nChecks_17 = count($_POST['frutas_17'])) {

                                    @(bool)$caldasChecks_17 = count($_POST['caldas_17']);
                                    @(bool)$complementosChecks_17 = count($_POST['complementos_17']);
                                    @(bool)$sorveteCheck_17 = count($_POST['sorvete_17']);
                                
                                    print 'Total de checkboxs marcados: '. $nChecks_17 . '<br />'; 
    
                                    if($valor_acai_17 == 7){
                                        $pedido_17 = "Mini";
                                        $_SESSION['pedido17'] = $pedido_17;
                                        if($nChecks_17 > 1){
                                            $quant_frutas_17 = $nChecks_17 - 1;
                                        }
                                        if($caldasChecks_17 > 3){
                                            $quant_caldas_17 = $caldasChecks_17 - 3;
                                        }
                                        if($complementosChecks_17 > 3){
                                            $quant_complementos_17 = $complementosChecks_17 - 3;
                                        }
                                        if($sorveteCheck_17 > 0){
                                            $quant_sorvetes_17 = $sorveteCheck_17 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_17;
                                        }
    
                                    }else if($valor_acai_17 == 10 || $valor_acai_17 == 14){
                                        if($valor_acai_17 == 10){
                                            $pedido_17 = "P";
                                            $_SESSION['pedido17'] = $pedido_17;
                                        }
    
                                        if($valor_acai_17 == 14){
                                            $pedido_17 = "M";
                                            $_SESSION['pedido17'] = $pedido_17;
                                        }
    
                                        if($nChecks_17 > 2){
                                            $quant_frutas_17 = $nChecks_17 - 2;
                                        }
                                        if($caldasChecks_17 > 4){
                                            $quant_caldas_17 = $caldasChecks_17 - 4;
                                        }
                                        if($sorveteCheck_17 > 0){
                                            $quant_sorvetes_17 = $sorveteCheck_17 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_17;
                                        }
    
                                    }else if($valor_acai_17 == 23){
                                        $pedido_17 = "G";
                                        $_SESSION['pedido17'] = $pedido_17;
                                        if($nChecks_17 > 3){
                                            $quant_frutas_17 = $nChecks_17 - 3;
                                        }
                                        if($caldasChecks_17 > 4){
                                            $quant_caldas_17 = $caldasChecks_17 - 4;
                                        }
                                        if($sorveteCheck_17 > 0){
                                            $quant_sorvetes_17 = $sorveteCheck_17 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_17;
                                        }
    
                                    }else if($valor_acai_17 == 18 || $valor_acai_17 == 35 || $valor_acai_17 == 50){
                                        if($valor_acai_17 == 18){
                                            $pedido_17 = "Barca Pequena";
                                            $_SESSION['pedido17'] = $pedido_17;
                                        }
                                        if($valor_acai_17 == 35){
                                            $pedido_17 = "Barca Média";
                                            $_SESSION['pedido17'] = $pedido_17;
                                        }
                                        if($valor_acai_17 == 50){
                                            $pedido_17 = "Barca Grande";
                                            $_SESSION['pedido17'] = $pedido_17;
                                        }
    
                                        if($nChecks_17 > 4){
                                            $quant_frutas_17 = $nChecks_17 - 4;
                                        }
                                        if($caldasChecks_17 > 4){
                                            $quant_caldas_17 = $caldasChecks_17 - 4;
                                        }
                                        if($sorveteCheck_17 > 0){
                                            $quant_sorvetes_17 = $sorveteCheck_17 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_17;
                                        }
    
    
                                    }
    
                                    if(isset($_POST['frutas_17'])){
                                        $opcoes_17 = $_POST['frutas_17'];
                                        $opcoes_fruta_17 = implode("<br>", $opcoes_17);
                                        $opcoes_fruta_bd_17 = implode("\n    ", $opcoes_17);
                                        $_SESSION['frutasBD_17'] = $opcoes_fruta_bd_17;
                                        $_SESSION['frutas_17'] = $opcoes_fruta_17;
                                        
                                        foreach ($_POST['frutas_17'] as $frutas_17) {
                            
                                            print "• {$frutas_17}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['caldas_17'])){
                                        $opcoes2_17 = $_POST['caldas_17'];
                                        $opcoes_calda_17 = implode("<br>", $opcoes2_17);
                                        $opcoes_calda_bd_17 = implode("\n    ", $opcoes2_17);
                                        $_SESSION['caldas_17'] = $opcoes_calda_17;
                                        $_SESSION['caldasBD_17'] = $opcoes_calda_bd_17;
                                        foreach ($_POST['caldas_17'] as $caldas_17) {
                            
                                            print "• {$caldas_17}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['complementos_17'])){
                                        $opcoes3_17 = $_POST['complementos_17'];
                                        $opcoes_comple_17 = implode("<br>", $opcoes3_17);
                                        $opcoes_comple_bd_17 = implode("\n    ", $opcoes3_17);
                                        $_SESSION['complementos_17'] = $opcoes_comple_17;
                                        $_SESSION['complementosBD_17'] = $opcoes_comple_bd_17;
                                        foreach ($_POST['complementos_17'] as $complementos_17) {
                            
                                            print "• {$complementos_17}<br />";
                                           
                                        }
    
                                        $_SESSION['tamanho_acai_17'] = $pedido_17;
                                    }
    
                                    if(isset($_POST['sorvete_17'])){
                                        $opcoes4_17 = $_POST['sorvete_17'];
                                        $_SESSION['sorvete_17'] = $opcoes4_17;
                                        print "•".$_SESSION['sorvete_17']."<br />";
                                           
                                    }

                                   

                            }

                            $ped_17_db = $valor_acai_17 + $quant_frutas_17 + $quant_caldas_17 + $quant_complementos_17 + $quant_sorvetes_17;
                            $vezes = 17;

                            mysqli_query($link,"INSERT INTO tb_pedido(vl_pedido,vl_troco,dt_data,vl_acai) VALUES('$ped_17_db','$print_sub','$dataEUA','$hora','$valor_acai_17')");


                            //Verificando se existe pedido 18
                            if($valor_acai_18 != 0){
                                $_SESSION['quant_pedidos'] = 3;
                                $_SESSION['pedido_18'] = 1;
                                echo "<br>Pedido Nº18<br>";

                                if ((bool)$nChecks_18 = count($_POST['frutas_18'])) {

                                    @(bool)$caldasChecks_18 = count($_POST['caldas_18']);
                                    @(bool)$complementosChecks_18 = count($_POST['complementos_18']);
                                    @(bool)$sorveteCheck_18 = count($_POST['sorvete_18']);
                                
                                    print 'Total de checkboxs marcados: '. $nChecks_18 . '<br />'; 
    
                                    if($valor_acai_18 == 7){
                                        $pedido_18 = "Mini";
                                        $_SESSION['pedido18'] = $pedido_18;
                                        if($nChecks_18 > 1){
                                            $quant_frutas_18 = $nChecks_18 - 1;
                                        }
                                        if($caldasChecks_18 > 3){
                                            $quant_caldas_18 = $caldasChecks_18 - 3;
                                        }
                                        if($complementosChecks_18 > 3){
                                            $quant_complementos_18 = $complementosChecks_18 - 3;
                                        }
                                        if($sorveteCheck_18 > 0){
                                            $quant_sorvetes_18 = $sorveteCheck_18 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_18;
                                        }
    
                                    }else if($valor_acai_18 == 10 || $valor_acai_18 == 14){
                                        if($valor_acai_18 == 10){
                                            $pedido_18 = "P";
                                            $_SESSION['pedido18'] = $pedido_18;
                                        }
    
                                        if($valor_acai_18 == 14){
                                            $pedido_18 = "M";
                                            $_SESSION['pedido18'] = $pedido_18;
                                        }
    
                                        if($nChecks_18 > 2){
                                            $quant_frutas_18 = $nChecks_18 - 2;
                                        }
                                        if($caldasChecks_18 > 4){
                                            $quant_caldas_18 = $caldasChecks_18 - 4;
                                        }
                                        if($sorveteCheck_18 > 0){
                                            $quant_sorvetes_18 = $sorveteCheck_18 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_18;
                                        }
    
                                    }else if($valor_acai_18 == 23){
                                        $pedido_18 = "G";
                                        $_SESSION['pedido18'] = $pedido_18;
                                        if($nChecks_18 > 3){
                                            $quant_frutas_18 = $nChecks_18 - 3;
                                        }
                                        if($caldasChecks_18 > 4){
                                            $quant_caldas_18 = $caldasChecks_18 - 4;
                                        }
                                        if($sorveteCheck_18 > 0){
                                            $quant_sorvetes_18 = $sorveteCheck_18 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_18;
                                        }
    
                                    }else if($valor_acai_18 == 18 || $valor_acai_18 == 35 || $valor_acai_18 == 50){
                                        if($valor_acai_18 == 18){
                                            $pedido_18 = "Barca Pequena";
                                            $_SESSION['pedido18'] = $pedido_18;
                                        }
                                        if($valor_acai_18 == 35){
                                            $pedido_18 = "Barca Média";
                                            $_SESSION['pedido18'] = $pedido_18;
                                        }
                                        if($valor_acai_18 == 50){
                                            $pedido_18 = "Barca Grande";
                                            $_SESSION['pedido18'] = $pedido_18;
                                        }
    
                                        if($nChecks_18 > 4){
                                            $quant_frutas_18 = $nChecks_18 - 4;
                                        }
                                        if($caldasChecks_18 > 4){
                                            $quant_caldas_18 = $caldasChecks_18 - 4;
                                        }
                                        if($sorveteCheck_18 > 0){
                                            $quant_sorvetes_18 = $sorveteCheck_18 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_18;
                                        }
    
    
                                    }
    
                                    if(isset($_POST['frutas_18'])){
                                        $opcoes_18 = $_POST['frutas_18'];
                                        $opcoes_fruta_18 = implode("<br>", $opcoes_18);
                                        $opcoes_fruta_bd_18 = implode("\n    ", $opcoes_18);
                                        $_SESSION['frutasBD_18'] = $opcoes_fruta_bd_18;
                                        $_SESSION['frutas_18'] = $opcoes_fruta_18;
                                        
                                        foreach ($_POST['frutas_18'] as $frutas_18) {
                            
                                            print "• {$frutas_18}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['caldas_18'])){
                                        $opcoes2_18 = $_POST['caldas_18'];
                                        $opcoes_calda_18 = implode("<br>", $opcoes2_18);
                                        $opcoes_calda_bd_18 = implode("\n    ", $opcoes2_18);
                                        $_SESSION['caldas_18'] = $opcoes_calda_18;
                                        $_SESSION['caldasBD_18'] = $opcoes_calda_bd_18;
                                        foreach ($_POST['caldas_18'] as $caldas_18) {
                            
                                            print "• {$caldas_18}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['complementos_18'])){
                                        $opcoes3_18 = $_POST['complementos_18'];
                                        $opcoes_comple_18 = implode("<br>", $opcoes3_18);
                                        $opcoes_comple_bd_18 = implode("\n    ", $opcoes3_18);
                                        $_SESSION['complementos_18'] = $opcoes_comple_18;
                                        $_SESSION['complementosBD_18'] = $opcoes_comple_bd_18;
                                        foreach ($_POST['complementos_18'] as $complementos_18) {
                            
                                            print "• {$complementos_18}<br />";
                                           
                                        }
    
                                        $_SESSION['tamanho_acai_18'] = $pedido_18;
                                    }
    
                                    if(isset($_POST['sorvete_18'])){
                                        $opcoes4_18 = $_POST['sorvete_18'];
                                        $_SESSION['sorvete_18'] = $opcoes4_18;
                                        print "•".$_SESSION['sorvete_18']."<br />";
                                           
                                    }

                                   

                            }

                            $ped_18_db = $valor_acai_18 + $quant_frutas_18 + $quant_caldas_18 + $quant_complementos_18 + $quant_sorvetes_18;
                            $vezes = 18;

                            mysqli_query($link,"INSERT INTO tb_pedido(vl_pedido,vl_troco,dt_data,hr_pedido,vl_acai) VALUES('$ped_18_db','$print_sub','$dataEUA','$hora','$valor_acai_18')");


                            //Verificando se existe pedido 19
                            if($valor_acai_19 != 0){
                                $_SESSION['quant_pedidos'] = 3;
                                $_SESSION['pedido_19'] = 1;
                                echo "<br>Pedido Nº17<br>";

                                if ((bool)$nChecks_19 = count($_POST['frutas_19'])) {

                                    @(bool)$caldasChecks_19 = count($_POST['caldas_19']);
                                    @(bool)$complementosChecks_19 = count($_POST['complementos_19']);
                                    @(bool)$sorveteCheck_19 = count($_POST['sorvete_19']);
                                
                                    print 'Total de checkboxs marcados: '. $nChecks_19 . '<br />'; 
    
                                    if($valor_acai_19 == 7){
                                        $pedido_19 = "Mini";
                                        $_SESSION['pedido19'] = $pedido_19;
                                        if($nChecks_19 > 1){
                                            $quant_frutas_19 = $nChecks_19 - 1;
                                        }
                                        if($caldasChecks_19 > 3){
                                            $quant_caldas_19 = $caldasChecks_19 - 3;
                                        }
                                        if($complementosChecks_19 > 3){
                                            $quant_complementos_19 = $complementosChecks_19 - 3;
                                        }
                                        if($sorveteCheck_19 > 0){
                                            $quant_sorvetes_19 = $sorveteCheck_19 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_19;
                                        }
    
                                    }else if($valor_acai_19 == 10 || $valor_acai_19 == 14){
                                        if($valor_acai_19 == 10){
                                            $pedido_19 = "P";
                                            $_SESSION['pedido19'] = $pedido_19;
                                        }
    
                                        if($valor_acai_19 == 14){
                                            $pedido_19 = "M";
                                            $_SESSION['pedido19'] = $pedido_19;
                                        }
    
                                        if($nChecks_19 > 2){
                                            $quant_frutas_19 = $nChecks_19 - 2;
                                        }
                                        if($caldasChecks_19 > 4){
                                            $quant_caldas_19 = $caldasChecks_19 - 4;
                                        }
                                        if($sorveteCheck_19 > 0){
                                            $quant_sorvetes_19 = $sorveteCheck_19 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_19;
                                        }
    
                                    }else if($valor_acai_19 == 23){
                                        $pedido_19 = "G";
                                        $_SESSION['pedido19'] = $pedido_19;
                                        if($nChecks_19 > 3){
                                            $quant_frutas_19 = $nChecks_19 - 3;
                                        }
                                        if($caldasChecks_19 > 4){
                                            $quant_caldas_19 = $caldasChecks_19 - 4;
                                        }
                                        if($sorveteCheck_19 > 0){
                                            $quant_sorvetes_19 = $sorveteCheck_19 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_19;
                                        }
    
                                    }else if($valor_acai_19 == 18 || $valor_acai_19 == 35 || $valor_acai_19 == 50){
                                        if($valor_acai_19 == 18){
                                            $pedido_19 = "Barca Pequena";
                                            $_SESSION['pedido19'] = $pedido_19;
                                        }
                                        if($valor_acai_19 == 35){
                                            $pedido_19 = "Barca Média";
                                            $_SESSION['pedido19'] = $pedido_19;
                                        }
                                        if($valor_acai_19 == 50){
                                            $pedido_19 = "Barca Grande";
                                            $_SESSION['pedido19'] = $pedido_19;
                                        }
    
                                        if($nChecks_19 > 4){
                                            $quant_frutas_19 = $nChecks_19 - 4;
                                        }
                                        if($caldasChecks_19 > 4){
                                            $quant_caldas_19 = $caldasChecks_19 - 4;
                                        }
                                        if($sorveteCheck_19 > 0){
                                            $quant_sorvetes_19 = $sorveteCheck_19 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_19;
                                        }
    
    
                                    }
    
                                    if(isset($_POST['frutas_19'])){
                                        $opcoes_19 = $_POST['frutas_19'];
                                        $opcoes_fruta_19 = implode("<br>", $opcoes_19);
                                        $opcoes_fruta_bd_19 = implode("\n    ", $opcoes_19);
                                        $_SESSION['frutasBD_19'] = $opcoes_fruta_bd_19;
                                        $_SESSION['frutas_19'] = $opcoes_fruta_19;
                                        
                                        foreach ($_POST['frutas_19'] as $frutas_19) {
                            
                                            print "• {$frutas_19}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['caldas_19'])){
                                        $opcoes2_19 = $_POST['caldas_19'];
                                        $opcoes_calda_19 = implode("<br>", $opcoes2_19);
                                        $opcoes_calda_bd_19 = implode("\n    ", $opcoes2_19);
                                        $_SESSION['caldas_19'] = $opcoes_calda_19;
                                        $_SESSION['caldasBD_19'] = $opcoes_calda_bd_19;
                                        foreach ($_POST['caldas_19'] as $caldas_19) {
                            
                                            print "• {$caldas_19}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['complementos_19'])){
                                        $opcoes3_19 = $_POST['complementos_19'];
                                        $opcoes_comple_19 = implode("<br>", $opcoes3_19);
                                        $opcoes_comple_bd_19 = implode("\n    ", $opcoes3_19);
                                        $_SESSION['complementos_19'] = $opcoes_comple_19;
                                        $_SESSION['complementosBD_19'] = $opcoes_comple_bd_19;
                                        foreach ($_POST['complementos_19'] as $complementos_19) {
                            
                                            print "• {$complementos_19}<br />";
                                           
                                        }
    
                                        $_SESSION['tamanho_acai_19'] = $pedido_19;
                                    }
    
                                    if(isset($_POST['sorvete_19'])){
                                        $opcoes4_19 = $_POST['sorvete_19'];
                                        $_SESSION['sorvete_19'] = $opcoes4_19;
                                        print "•".$_SESSION['sorvete_19']."<br />";
                                           
                                    }

                                   

                            }

                            $ped_19_db = $valor_acai_19 + $quant_frutas_19 + $quant_caldas_19 + $quant_complementos_19 + $quant_sorvetes_19;
                            $vezes = 19;

                            mysqli_query($link,"INSERT INTO tb_pedido(vl_pedido,vl_troco,dt_data,hr_pedido,vl_acai) VALUES('$ped_19_db','$print_sub','$dataEUA','$hora','$valor_acai_19')");


                            //Verificando se existe pedido 20
                            if($valor_acai_20 != 0){
                                $_SESSION['quant_pedidos'] = 3;
                                $_SESSION['pedido_20'] = 1;
                                echo "<br>Pedido Nº17<br>";

                                if ((bool)$nChecks_20 = count($_POST['frutas_20'])) {

                                    @(bool)$caldasChecks_20 = count($_POST['caldas_20']);
                                    @(bool)$complementosChecks_20 = count($_POST['complementos_20']);
                                    @(bool)$sorveteCheck_20 = count($_POST['sorvete_20']);
                                
                                    print 'Total de checkboxs marcados: '. $nChecks_20 . '<br />'; 
    
                                    if($valor_acai_20 == 7){
                                        $pedido_20 = "Mini";
                                        $_SESSION['pedido20'] = $pedido_20;
                                        if($nChecks_20 > 1){
                                            $quant_frutas_20 = $nChecks_20 - 1;
                                        }
                                        if($caldasChecks_20 > 3){
                                            $quant_caldas_20 = $caldasChecks_20 - 3;
                                        }
                                        if($complementosChecks_20 > 3){
                                            $quant_complementos_20 = $complementosChecks_20 - 3;
                                        }
                                        if($sorveteCheck_20 > 0){
                                            $quant_sorvetes_20 = $sorveteCheck_20 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_20;
                                        }
    
                                    }else if($valor_acai_20 == 10 || $valor_acai_20 == 14){
                                        if($valor_acai_20 == 10){
                                            $pedido_20 = "P";
                                            $_SESSION['pedido20'] = $pedido_20;
                                        }
    
                                        if($valor_acai_20 == 14){
                                            $pedido_20 = "M";
                                            $_SESSION['pedido20'] = $pedido_20;
                                        }
    
                                        if($nChecks_20 > 2){
                                            $quant_frutas_20 = $nChecks_20 - 2;
                                        }
                                        if($caldasChecks_20 > 4){
                                            $quant_caldas_20 = $caldasChecks_20 - 4;
                                        }
                                        if($sorveteCheck_20 > 0){
                                            $quant_sorvetes_20 = $sorveteCheck_20 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_20;
                                        }
    
                                    }else if($valor_acai_20 == 23){
                                        $pedido_20 = "G";
                                        $_SESSION['pedido20'] = $pedido_20;
                                        if($nChecks_20 > 3){
                                            $quant_frutas_20 = $nChecks_20 - 3;
                                        }
                                        if($caldasChecks_20 > 4){
                                            $quant_caldas_20 = $caldasChecks_20 - 4;
                                        }
                                        if($sorveteCheck_20 > 0){
                                            $quant_sorvetes_20 = $sorveteCheck_20 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_20;
                                        }
    
                                    }else if($valor_acai_20 == 18 || $valor_acai_20 == 35 || $valor_acai_20 == 50){
                                        if($valor_acai_20 == 18){
                                            $pedido_20 = "Barca Pequena";
                                            $_SESSION['pedido20'] = $pedido_20;
                                        }
                                        if($valor_acai_20 == 35){
                                            $pedido_20 = "Barca Média";
                                            $_SESSION['pedido20'] = $pedido_20;
                                        }
                                        if($valor_acai_20 == 50){
                                            $pedido_20 = "Barca Grande";
                                            $_SESSION['pedido20'] = $pedido_20;
                                        }
    
                                        if($nChecks_20 > 4){
                                            $quant_frutas_20 = $nChecks_20 - 4;
                                        }
                                        if($caldasChecks_20 > 4){
                                            $quant_caldas_20 = $caldasChecks_20 - 4;
                                        }
                                        if($sorveteCheck_20 > 0){
                                            $quant_sorvetes_20 = $sorveteCheck_20 * 2.50;
                                            echo "Valor Sorvete: ".$quant_sorvetes_20;
                                        }
    
    
                                    }
    
                                    if(isset($_POST['frutas_20'])){
                                        $opcoes_20 = $_POST['frutas_20'];
                                        $opcoes_fruta_20 = implode("<br>", $opcoes_20);
                                        $opcoes_fruta_bd_20 = implode("\n    ", $opcoes_20);
                                        $_SESSION['frutasBD_20'] = $opcoes_fruta_bd_20;
                                        $_SESSION['frutas_20'] = $opcoes_fruta_20;
                                        
                                        foreach ($_POST['frutas_20'] as $frutas_20) {
                            
                                            print "• {$frutas_20}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['caldas_20'])){
                                        $opcoes2_20 = $_POST['caldas_20'];
                                        $opcoes_calda_20 = implode("<br>", $opcoes2_20);
                                        $opcoes_calda_bd_20 = implode("\n    ", $opcoes2_20);
                                        $_SESSION['caldas_20'] = $opcoes_calda_20;
                                        $_SESSION['caldasBD_20'] = $opcoes_calda_bd_20;
                                        foreach ($_POST['caldas_20'] as $caldas_20) {
                            
                                            print "• {$caldas_20}<br />";
                                            
                                           
                                        }
                                    }
                                    
                                    if(isset($_POST['complementos_20'])){
                                        $opcoes3_20 = $_POST['complementos_20'];
                                        $opcoes_comple_20 = implode("<br>", $opcoes3_20);
                                        $opcoes_comple_bd_20 = implode("\n    ", $opcoes3_20);
                                        $_SESSION['complementos_20'] = $opcoes_comple_20;
                                        $_SESSION['complementosBD_20'] = $opcoes_comple_bd_20;
                                        foreach ($_POST['complementos_20'] as $complementos_20) {
                            
                                            print "• {$complementos_20}<br />";
                                           
                                        }
    
                                        $_SESSION['tamanho_acai_20'] = $pedido_20;
                                    }
    
                                    if(isset($_POST['sorvete_20'])){
                                        $opcoes4_20 = $_POST['sorvete_20'];
                                        $_SESSION['sorvete_20'] = $opcoes4_20;
                                        print "•".$_SESSION['sorvete_20']."<br />";
                                           
                                    }

                                   

                            }

                            $ped_20_db = $valor_acai_20 + $quant_frutas_20 + $quant_caldas_20 + $quant_complementos_20 + $quant_sorvetes_20;
                            $vezes = 20;

                            mysqli_query($link,"INSERT INTO tb_pedido(vl_pedido,vl_troco,dt_data,hr_pedido,vl_acai) VALUES('$ped_20_db','$print_sub','$dataEUA','$hora','$valor_acai_20')");



                           



                        }

                           



                        }

                           



                        }
                           



                        }
                           



                        }

                           



                        }

                           



                        }

                           



                        }

                           



                        }
                           



                        }

                           



                        }

                           



                        }

                           



                        }
                           



                        }
                           



                        }

                           



                        }

                           



                        }

                           



                        }

                           



                        }

                            
                            $_SESSION['tel'];
                            $tel = $_SESSION['tel'];

                            $bairro = mysqli_query($link,"SELECT nm_bairro FROM tb_clientes WHERE cd_tel ='$tel' OR cd_cel ='$tel'");
                            while($row = mysqli_fetch_assoc($bairro)){
                                $bairro_proc = $row['nm_bairro'];
                                $procura_bairro = mysqli_query($link,"SELECT vl_taxa FROM tb_endereco WHERE nm_bairro = '$bairro_proc'");
                                while($row2 = mysqli_fetch_assoc($procura_bairro)){
                                    $taxinha =  $row2['vl_taxa'];
                                    $frete = $taxinha;
                                }
                            }

                            }
                            
                            

                            $_SESSION['valor_acai'] = $valor_acai;
                            $_SESSION['valor_acai_2'] = $valor_acai_2;
                            $_SESSION['valor_acai_3'] = $valor_acai_3;
                            $_SESSION['valor_acai_4'] = $valor_acai_4;
                            $_SESSION['valor_acai_5'] = $valor_acai_5;
                            $_SESSION['valor_acai_6'] = $valor_acai_6;
                            $_SESSION['valor_acai_7'] = $valor_acai_7;
                            $_SESSION['valor_acai_8'] = $valor_acai_8;
                            $_SESSION['valor_acai_9'] = $valor_acai_9;
                            $_SESSION['valor_acai_10'] = $valor_acai_10;
                            $_SESSION['valor_acai_11'] = $valor_acai_11;
                            $_SESSION['valor_acai_12'] = $valor_acai_12;
                            $_SESSION['valor_acai_13'] = $valor_acai_13;
                            $_SESSION['valor_acai_14'] = $valor_acai_14;
                            $_SESSION['valor_acai_14'] = $valor_acai_15;
                            $_SESSION['valor_acai_16'] = $valor_acai_16;
                            $_SESSION['valor_acai_17'] = $valor_acai_17;
                            $_SESSION['valor_acai_18'] = $valor_acai_18;
                            $_SESSION['valor_acai_19'] = $valor_acai_19;
                            $_SESSION['valor_acai_20'] = $valor_acai_20;
                                
                            $soma =  $valor_acai + $valor_acai_2 + $valor_acai_3 + $valor_acai_4 + $valor_acai_5 + $valor_acai_6 + $valor_acai_7 + $valor_acai_8 + $valor_acai_9 + $valor_acai_10 + $valor_acai_11 + $valor_acai_12 + $valor_acai_13 + $valor_acai_14 + $valor_acai_15 + $valor_acai_16 + $valor_acai_17 + $valor_acai_18 + $valor_acai_19 + $valor_acai_20 + $quant_frutas + $quant_frutas_2 + $quant_frutas_3 + $quant_frutas_4 + $quant_frutas_5 + $quant_frutas_6 + $quant_frutas_7 + $quant_frutas_8 + $quant_frutas_9 + $quant_frutas_10 + $quant_frutas_11 + $quant_frutas_12 + $quant_frutas_13 + $quant_frutas_14 + $quant_frutas_14 + $quant_frutas_16 + $quant_frutas_17 + $quant_frutas_18 + $quant_frutas_19 + $quant_frutas_20 + $quant_caldas + $quant_caldas_2 +  $quant_caldas_3 + $quant_caldas_4 + $quant_caldas_5 + $quant_caldas_6 + $quant_caldas_7 + $quant_caldas_8 + $quant_caldas_9 + $quant_caldas_10 + $quant_caldas_11 + $quant_caldas_12 + $quant_caldas_13 + $quant_caldas_14 + $quant_caldas_15 + $quant_caldas_16 + $quant_caldas_17 + $quant_caldas_18 + $quant_caldas_19 + $quant_caldas_20 + $quant_complementos + $quant_complementos_2 + $quant_complementos_3 + $quant_complementos_4 + $quant_complementos_5 + $quant_complementos_6 + $quant_complementos_7 + $quant_complementos_8 + $quant_complementos_9 + $quant_complementos_10 + $quant_complementos_11 + $quant_complementos_12 + $quant_complementos_13 + $quant_complementos_14 + $quant_complementos_15 + $quant_complementos_16 + $quant_complementos_17 + $quant_complementos_18 + $quant_complementos_19 + $quant_complementos_20 + $quant_sorvetes + $quant_sorvetes_2 + $quant_sorvetes_3 + $quant_sorvetes_4 + $quant_sorvetes_5 + $quant_sorvetes_6 + $quant_sorvetes_7 + $quant_sorvetes_8 + $quant_sorvetes_9 + $quant_sorvetes_10 + $quant_sorvetes_11 + $quant_sorvetes_12 + $quant_sorvetes_13 + $quant_sorvetes_14 + $quant_sorvetes_15 + $quant_sorvetes_16 + $quant_sorvetes_17 + $quant_sorvetes_18 + $quant_sorvetes_19 + $quant_sorvetes_20 + $frete + (0.50 * $vezes) - 1;
                            $ped_1_db = $valor_acai + $quant_frutas + $quant_caldas + $quant_complementos + $quant_sorvetes + $frete;
                            $valor_total = number_format($soma, 2, '.', '');
                            $_SESSION['total'] = $valor_total;
                                
                            echo $valor_total."<br>";
                            

                            mysqli_query($link,"INSERT INTO tb_pedido(vl_pedido,vl_troco,dt_data,hr_pedido,vl_acai) VALUES('$ped_1_db','$print_sub','$dataEUA','$hora','$valor_acai')");
                            mysqli_query($link,"INSERT INTO tb_pedido_total(vl_pedido_final) VALUES('$soma')");
                            $cod_pedido = mysqli_insert_id($link);
                            $_SESSION['cod_pedido'] = $cod_pedido;

                            //header("Location:confirmar_pedido.php");
                            
                            
                            
                        
                    

                  


                    

                ?>