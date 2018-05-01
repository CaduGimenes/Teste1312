<?php
session_start();
include $_SERVER['DOCUMENT_ROOT']."/dist/includes/banco.php";

$bairro = $_SESSION['bairro_del'];

mysqli_query($link,"DELETE FROM tb_endereco WHERE nm_bairro = '$bairro'");

echo "<script>location.href='adicionar_endereco.php'</script>";

mysqli_close($link);


?>