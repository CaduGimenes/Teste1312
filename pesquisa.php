<?php
// Verifica se existe a variável pesquisar
if (isset($_GET["pesquisar"])) {
    $nome = $_GET["pesquisar"];
    // Conexao com o banco de dados
    $server = "localhost";
    $user = "root";
    $senha = "";
    $base = "db_acai";
    $conexao = mysql_connect($server, $user, $senha) or die("Erro na conexão!");
    mysql_select_db($base);
    // Verifica se a variável está vazia
    if (empty($nome)) {
        $sql = "SELECT * FROM tb_clientes";
    } else {
        $nome .= "%";
        $sql = "SELECT * FROM tb_clientes WHERE nm_cliente like '$nome' or cd_tel like '$nome' or cd_cel like '$nome'";
    }
    sleep(1);
    $result = mysql_query($sql);
    $cont = mysql_affected_rows($conexao);
    // Verifica se a consulta retornou linhas 
    if ($cont > 0) {
        // Atribui o código HTML para montar uma tabela
        $tabela = "<table class='table table-striped'>
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Celular</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                        </tr>
                        </thead>
                    <tbody>
                    <tr>";
        $return = "$tabela";
        // Captura os dados da consulta e inseri na tabela HTML
        while ($linha = mysql_fetch_array($result)) {

            $cel = $linha['cd_cel'];
            $tel = $linha['cd_tel'];

            if(empty($cel)){
                $cel = "";
            }
            if(empty($tel)){
                $tel = "";
            }


            $return.= "<th scope='row'>" . utf8_encode($linha["cd_cliente"]) . "</th>";
            $return.= "<td>" . utf8_encode($linha["nm_cliente"]) . "</td>";
            $return.= "<td>" . utf8_encode($cel) . "</td>";
            $return.= "<td>" . utf8_encode($tel) . "</td>";
            $return.= "<td>" . utf8_encode($linha["nm_rua"]) .", ". utf8_encode($linha["cd_casa"]) . "</td>";
            $return.= "</tr>";
        }
        echo $return.="</tbody></table>";
    } else {
        // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
        echo "Não foram encontrados registros!";
    }
}
?>