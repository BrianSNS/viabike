<?php 
require_once("../conexao/conexao.php");
$pdo = conectar();
$id = $_GET['id_ponto']; //ESTA REQUISIÇÃO VEM DA PAGINA consultar_pontos.php

$removePonto = $pdo -> prepare("DELETE from ponto_interesse WHERE id_ponto = :id_ponto");
	$removePonto -> bindValue(":id_ponto", $id , PDO::PARAM_INT);
	$removePonto -> execute();

if ($removePonto) {
	header("location:consultar_pontos.php?removido=true");
}
else {
	alert("erro");
}
?>

