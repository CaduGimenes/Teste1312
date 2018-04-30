<?php session_start();

    error_reporting(0);
    ini_set('display_errors', 0 );

    include $_SERVER['DOCUMENT_ROOT']."/dist/includes/banco.php";
    date_default_timezone_set('America/Sao_Paulo');

    $paramComu   =  "COM6";
	$retornoComu = regPortaComunicacao_DUAL_DarumaFramework($paramComu);

	$paramVel   =  "115200";
    $retornoVel = regVelocidade_DUAL_DarumaFramework($paramVel);

    $quant_pedidos = $_SESSION['quant_pedidos'];
    
    $valor_total = $_SESSION['total'];
    $troco = 0.00;

    $sub_total = floatval($_POST['valor_total']);
    
    $tamanho_texto = 1;
    $troco = $_POST['valor_troco'];
    $sum_troco = number_format($troco, 2, '.', ' ');
    $sum_total = number_format($valor_total, 2, '.', ' ');


    $tamanho = $_SESSION['tamanho_acai'];
    $tamanho_2 = $_SESSION['tamanho_acai_2'];
    $tamanho_3 = $_SESSION['tamanho_acai_3'];
    $tamanho_4 = $_SESSION['tamanho_acai_4'];
    $tamanho_5 = $_SESSION['tamanho_acai_5'];
    $tamanho_6 = $_SESSION['tamanho_acai_6'];
    $tamanho_7 = $_SESSION['tamanho_acai_7'];
    $tamanho_8 = $_SESSION['tamanho_acai_8'];
    $tamanho_9 = $_SESSION['tamanho_acai_9'];
    $tamanho_10 = $_SESSION['tamanho_acai_10'];
    $tamanho_11= $_SESSION['tamanho_acai_11'];
    $tamanho_12 = $_SESSION['tamanho_acai_12'];
    $tamanho_13 = $_SESSION['tamanho_acai_13'];
    $tamanho_14 = $_SESSION['tamanho_acai_14'];
    $tamanho_15 = $_SESSION['tamanho_acai_15'];
    $tamanho_16 = $_SESSION['tamanho_acai_16'];
    $tamanho_17 = $_SESSION['tamanho_acai_17'];
    $tamanho_18 = $_SESSION['tamanho_acai_18'];
    $tamanho_19 = $_SESSION['tamanho_acai_19'];
    $tamanho_20 = $_SESSION['tamanho_acai_20'];

    $frutas = $_SESSION['frutasBD'];
    $frutas_2 = $_SESSION['frutasBD_2'];
    $frutas_3 = $_SESSION['frutasBD_3'];
    $frutas_4 = $_SESSION['frutasBD_4'];
    $frutas_5 = $_SESSION['frutasBD_5'];
    $frutas_6 = $_SESSION['frutasBD_6'];
    $frutas_7 = $_SESSION['frutasBD_7'];
    $frutas_8 = $_SESSION['frutasBD_8'];
    $frutas_9 = $_SESSION['frutasBD_9'];
    $frutas_10 = $_SESSION['frutasBD_10'];
    $frutas_11 = $_SESSION['frutasBD_11'];
    $frutas_12 = $_SESSION['frutasBD_12'];
    $frutas_13 = $_SESSION['frutasBD_13'];
    $frutas_14 = $_SESSION['frutasBD_14'];
    $frutas_15 = $_SESSION['frutasBD_15'];
    $frutas_16 = $_SESSION['frutasBD_16'];
    $frutas_17 = $_SESSION['frutasBD_17'];
    $frutas_18 = $_SESSION['frutasBD_18'];
    $frutas_19 = $_SESSION['frutasBD_19'];
    $frutas_20 = $_SESSION['frutasBD_20'];

    $caldas = $_SESSION['caldasBD'];
    $caldas_2 = $_SESSION['caldasBD_2'];
    $caldas_3 = $_SESSION['caldasBD_3'];
    $caldas_4 = $_SESSION['caldasBD_4'];
    $caldas_5 = $_SESSION['caldasBD_5'];
    $caldas_6 = $_SESSION['caldasBD_6'];
    $caldas_7 = $_SESSION['caldasBD_7'];
    $caldas_8 = $_SESSION['caldasBD_8'];
    $caldas_9 = $_SESSION['caldasBD_9'];
    $caldas_10 = $_SESSION['caldasBD_10'];
    $caldas_11 = $_SESSION['caldasBD_11'];
    $caldas_12 = $_SESSION['caldasBD_12'];
    $caldas_13 = $_SESSION['caldasBD_13'];
    $caldas_14 = $_SESSION['caldasBD_14'];
    $caldas_15 = $_SESSION['caldasBD_15'];
    $caldas_16 = $_SESSION['caldasBD_16'];
    $caldas_17 = $_SESSION['caldasBD_17'];
    $caldas_18 = $_SESSION['caldasBD_18'];
    $caldas_19 = $_SESSION['caldasBD_19'];
    $caldas_20 = $_SESSION['caldasBD_20'];

    $complementos = $_SESSION['complementosBD'];
    $complementos_2 = $_SESSION['complementosBD_2'];
    $complementos_3 = $_SESSION['complementosBD_3'];
    $complementos_4 = $_SESSION['complementosBD_4'];
    $complementos_5 = $_SESSION['complementosBD_5'];
    $complementos_6 = $_SESSION['complementosBD_6'];
    $complementos_7 = $_SESSION['complementosBD_7'];
    $complementos_8 = $_SESSION['complementosBD_8'];
    $complementos_9 = $_SESSION['complementosBD_9'];
    $complementos_10 = $_SESSION['complementosBD_10'];
    $complementos_11 = $_SESSION['complementosBD_12'];
    $complementos_12 = $_SESSION['complementosBD_12'];
    $complementos_13 = $_SESSION['complementosBD_13'];
    $complementos_14 = $_SESSION['complementosBD_14'];
    $complementos_15 = $_SESSION['complementosBD_15'];
    $complementos_16 = $_SESSION['complementosBD_16'];
    $complementos_17 = $_SESSION['complementosBD_17'];
    $complementos_18 = $_SESSION['complementosBD_18'];
    $complementos_19 = $_SESSION['complementosBD_19'];
    $complementos_20 = $_SESSION['complementosBD_20'];


    $adicional = $_SESSION['sorvete'];
    $adicional_2 = $_SESSION['sorvete_2'];
    $adicional_3 = $_SESSION['sorvete_3'];
    $adicional_4 = $_SESSION['sorvete_4'];
    $adicional_5 = $_SESSION['sorvete_5'];
    $adicional_6 = $_SESSION['sorvete_6'];
    $adicional_7 = $_SESSION['sorvete_7'];
    $adicional_8 = $_SESSION['sorvete_8'];
    $adicional_9 = $_SESSION['sorvete_9'];
    $adicional_10 = $_SESSION['sorvete_10'];
    $adicional_11 = $_SESSION['sorvete_11'];
    $adicional_12 = $_SESSION['sorvete_12'];
    $adicional_13 = $_SESSION['sorvete_13'];
    $adicional_14 = $_SESSION['sorvete_14'];
    $adicional_15 = $_SESSION['sorvete_15'];
    $adicional_16 = $_SESSION['sorvete_16'];
    $adicional_17 = $_SESSION['sorvete_17'];
    $adicional_18 = $_SESSION['sorvete_18'];
    $adicional_19 = $_SESSION['sorvete_19'];
    $adicional_20 = $_SESSION['sorvete_20'];


    $cod_pedido = $_SESSION['cod_pedido'];
    
    

    $data = date('d/m/Y');
    $hora = date("H:i:s");

    //Pegando dados do clientes
    $get = mysqli_query($link,"SELECT * FROM tb_clientes WHERE cd_tel =".$_SESSION['tel']." OR cd_cel =".$_SESSION['tel']."");


    $debito = $_POST['debito'];

    if($debito == "debito"){
        $formaPagamento = "Debito";
        $print_sub = "--";
    
    }else{
        $formaPagamento = "Dinheiro";
        $dinheiro = floatval($troco) - floatval($valor_total);
        $print_sub = number_format($dinheiro, 2, '.', ' ');
    }
        


    while($row = mysqli_fetch_assoc($get)){

        $nome = $row['nm_cliente'];
        $rua = $row['nm_rua'];
        $ref = $row['nm_ref'];
        $bairro = $row['nm_bairro'];
        $num = $row['cd_casa'];
        $tel = $row['cd_tel'];
        $cel = $row['cd_cel'];



        $pedidos = "<b>PEDIDOS</b>
    ---------------------------
        Acai '$tamanho'\n";

    $texto = "<e><b>     Imperio do Acai</b></e>

    Nome: $nome
    Tel.: $tel/$cel
    End: $rua, $num
    Bairro: $bairro
    $ref
     
    <b>PEDIDO</b>
        
    <b>Tamanho</b>
    $tamanho
      
    <b>Frutas</b>
    $frutas
     
    <b>Complementos</b>
    $complementos
     
    <b>Caldas</b>
    $caldas
     
    <b>Adicional</b>
    $adicional
     

        ";

        if($_SESSION['pedido_2'] == 1){
        $pedidos .= "   ---------------------------
        Acai '$tamanho_2'\n";

    $texto .= "\n\n       <b>PEDIDO 2</b>
        
    <b>Tamanho</b>
    $tamanho_2
          
    <b>Frutas</b>
    $frutas_2
         
    <b>Complementos</b>
    $complementos_2
         
    <b>Caldas</b>
    $caldas_2
         
    <b>Adicional</b>
    $adicional_2
            
        ";
        }
        if($_SESSION['pedido_3'] == 1){
            $pedidos .= "   ---------------------------
            Acai '$tamanho_3'\n";

    $texto .= "\n\n<b>PEDIDO 3</b>
        
    <b>Tamanho</b>
    $tamanho_3
          
    <b>Frutas</b>
    $frutas_3
        
    <b>Complementos</b>
    $complementos_3
         
    <b>Caldas</b>
    $caldas_3
         
    <b>Adicional</b>
    $adicional_3
            
            ";
        }
        if($_SESSION['pedido_4'] == 1){
            $pedidos .= "   ---------------------------
            Acai '$tamanho_4'\n";

    $texto .= "\n\n<b>PEDIDO 4</b>
        
    <b>Tamanho</b>
    $tamanho_4
          
    <b>Frutas</b>
    $frutas_4
         
    <b>Complementos</b>
    $complementos_4
         
    <b>Caldas</b>
    $caldas_4
         
    <b>Adicional</b>
    $adicional_4
            
            ";
        }
        if($_SESSION['pedido_5'] == 1){
            $pedidos .= "   ---------------------------
            Acai '$tamanho_5'\n";

    $texto .= "\n\n<b>PEDIDO 5</b>
        
    <b>Tamanho</b>
    $tamanho_5
          
    <b>Frutas</b>
    $frutas_5
         
    <b>Complementos</b>
    $complementos_5
         
    <b>Caldas</b>
    $caldas_5
         
    <b>Adicional</b>
    $adicional_5
            
            ";
        }
        if($_SESSION['pedido_6'] == 1){
            $pedidos .= "   ---------------------------
            Acai '$tamanho_6'\n";

    $texto .= "\n\n<b>PEDIDO 6</b>
        
    <b>Tamanho</b>
    $tamanho_6
          
    <b>Frutas</b>
    $frutas_6
         
    <b>Complementos</b>
    $complementos_6
         
    <b>Caldas</b>
    $caldas_6
         
    <b>Adicional</b>
    $adicional_6
            
            ";
        }
        if($_SESSION['pedido_7'] == 1){
            $pedidos .= "   ---------------------------
            Acai '$tamanho_7'\n";

    $texto .= "\n\n<b>PEDIDO 7</b>
        
    <b>Tamanho</b>
    $tamanho_7
          
    <b>Frutas</b>
    $frutas_7
         
    <b>Complementos</b>
    $complementos_7
         
    <b>Caldas</b>
    $caldas_7
         
    <b>Adicional</b>
    $adicional_7
            
            ";
        }
        if($_SESSION['pedido_8'] == 1){
            $pedidos .= "   ---------------------------
            Acai '$tamanho_8'\n";

    $texto .= "\n\n<b>PEDIDO 8</b>
        
    <b>Tamanho</b>
    $tamanho_8
          
    <b>Frutas</b>
    $frutas_8
         
    <b>Complementos</b>
    $complementos_8
         
    <b>Caldas</b>
    $caldas_8
         
    <b>Adicional</b>
    $adicional_8
            
            ";
        }
        if($_SESSION['pedido_9']){
            $pedidos .= "   ---------------------------
            Acai '$tamanho_9'\n";

    $texto .= "\n\n<b>PEDIDO 9</b>
        
    <b>Tamanho</b>
    $tamanho_9
          
    <b>Frutas</b>
    $frutas_9
         
    <b>Complementos</b>
    $complementos_9
         
    <b>Caldas</b>
    $caldas_9
         
    <b>Adicional</b>
    $adicional_9
            
            ";
        }
        if($_SESSION['pedido_10'] == 1){
            $pedidos .= "   ---------------------------
            Acai '$tamanho_10'\n";

    $texto .= "\n\n<b>PEDIDO 10</b>
        
    <b>Tamanho</b>
    $tamanho_10
          
    <b>Frutas</b>
    $frutas_10
         
    <b>Complementos</b>
    $complementos_10
         
    <b>Caldas</b>
    $caldas_10
         
    <b>Adicional</b>
    $adicional_10
            
            ";
        }
        if($_SESSION['pedido_11'] == 1){
            $pedidos .= "   ---------------------------
            Acai '$tamanho_11'\n";

    $texto .= "\n\n<b>PEDIDO 11</b>
        
    <b>Tamanho</b>
    $tamanho_11
          
    <b>Frutas</b>
    $frutas_11
         
    <b>Complementos</b>
    $complementos_11
         
    <b>Caldas</b>
    $caldas_11
         
    <b>Adicional</b>
    $adicional_11
            
            ";
        }
        if($_SESSION['pedido_12'] == 1){
            $pedidos .= "   ---------------------------
            Acai '$tamanho_12'\n";

    $texto .= "\n\n<b>PEDIDO 12</b>
        
    <b>Tamanho</b>
    $tamanho_12
          
    <b>Frutas</b>
    $frutas_12
         
    <b>Complementos</b>
    $complementos_12
         
    <b>Caldas</b>
    $caldas_12
         
    <b>Adicional</b>
    $adicional_12
            
            ";
        }
        if($_SESSION['pedido_13'] == 1){
            $pedidos .= "   ---------------------------
            Acai '$tamanho_13'\n";

    $texto .= "\n\n<b>PEDIDO 13</b>
        
    <b>Tamanho</b>
    $tamanho_13
          
    <b>Frutas</b>
    $frutas_13
         
    <b>Complementos</b>
    $complementos_13
         
    <b>Caldas</b>
    $caldas_13
         
    <b>Adicional</b>
    $adicional_13
            
            ";
        }
        if($_SESSION['pedido_14'] == 1){
            $pedidos .= "   ---------------------------
            Acai '$tamanho_14'\n";

    $texto .= "\n\n<b>PEDIDO 14</b>
        
    <b>Tamanho</b>
    $tamanho_14
          
    <b>Frutas</b>
    $frutas_14
         
    <b>Complementos</b>
    $complementos_14
         
    <b>Caldas</b>
    $caldas_14
         
    <b>Adicional</b>
    $adicional_14
            
            ";
        }
        if($_SESSION['pedido_15'] == 1){
            $pedidos .= "   ---------------------------
            Acai '$tamanho_15'\n";

    $texto .= "\n\n<b>PEDIDO 15</b>
        
    <b>Tamanho</b>
    $tamanho_15
          
    <b>Frutas</b>
    $frutas_15
         
    <b>Complementos</b>
    $complementos_15
         
    <b>Caldas</b>
    $caldas_15
         
   <b>Adicional</b>
    $adicional_15
            
            ";
        }
        if($_SESSION['pedido_16'] == 1){
            $pedidos .= "   ---------------------------
            Acai '$tamanho_16'\n";

    $texto .= "\n\n<b>PEDIDO 16</b>
        
    <b>Tamanho</b>
    $tamanho_16
          
    <b>Frutas</b>
    $frutas_16
         
    <b>Complementos</b>
    $complementos_16
         
    <b>Caldas</b>
    $caldas_16
         
    <b>Adicional</b>
    $adicional_16
            
            ";
        }
        if($_SESSION['pedido_17'] == 1){
            $pedidos .= "   ---------------------------
            Acai '$tamanho_17'\n";

    $texto .= "\n\n<b>PEDIDO 17</b>
        
    <b>Tamanho</b>
    $tamanho_17
          
    <b>Frutas</b>
    $frutas_17
         
    <b>Complementos</b>
    $complementos_17
         
    <b>Caldas</b>
    $caldas_17
         
    <b>Adicional</b>
    $adicional_17
            
            ";
        }
        if($_SESSION['pedido_18'] == 1){
            $pedidos .= "   ---------------------------
            Acai '$tamanho_18'\n";

    $texto .= "\n\n<b>PEDIDO 18</b>
        
    <b>Tamanho</b>
    $tamanho_18
          
    <b>Frutas</b>
    $frutas_18
         
    <b>Complementos</b>
    $complementos_18
         
    <b>Caldas</b>
    $caldas_18
         
    <b>Adicional</b>
    $adicional_18
            
            ";
        }
        if($_SESSION['pedido_19'] == 1){
            $pedidos .= "   ---------------------------
                Acai '$tamanho_19'\n";

    $texto .= "\n\n<b>PEDIDO 19</b>
        
    <b>Tamanho</b>
    $tamanho_19
          
    <b>Frutas</b>
    $frutas_19
         
    <b>Complementos</b>
    $complementos_19
         
    <b>Caldas</b>
    $caldas_19
         
    <b>Adicional</b>
    $adicional_19
            
            ";
        }
        if($_SESSION['pedido_20'] == 1){
            $pedidos .= "   ---------------------------
            Acai '$tamanho_20'\n";

    $texto .= "\n\n<b>PEDIDO 20</b>
        
    <b>Tamanho</b>
    $tamanho_20
         
    <b>Frutas</b>
    $frutas_20
        
    <b>Complementos</b>
    $complementos_20
        
    <b>Caldas</b>
    $caldas_20
        
    <b>Adicional</b>
    $adicional_20
           
           "; 
        }

   $retorno = iImprimirTexto_DUAL_DarumaFramework($texto, 0);

        
    for ($i=0; $i < 2; $i++) { 
            $texto = "<e><b>     Imperio do Acai</b></e>
    
          Data: $data Hora: $hora 
          N $cod_pedido
    <sl></sl>
    Nome: $nome
    Tel: $tel/$cel
    End.: $rua, $num
    Bairro: $bairro
    $ref
    
    $pedidos

    <b>Forma de Pagamento</b>
       $formaPagamento
    
    <b>Total:<b> $valor_total
    <b>Valor Pago:</b> $sum_troco
    <b>Troco:<b> $print_sub



    
    

    ";

    $retorno = iImprimirTexto_DUAL_DarumaFramework($texto, 0);

        }
    
    echo "<script>window.location.href = 'pedido.php'</script>";

    }

?>