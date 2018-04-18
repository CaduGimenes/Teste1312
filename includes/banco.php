<?php

$host = "localhost";
$root = "root";
$senha = "";

$link = mysqli_connect($host, $root, $senha) or die ("Erro link".mysql_error());
mysqli_select_db($link ,"db_acai") or die ("Erro banco".mysql_error());

$charset = mysql_set_charset('utf8');

?>