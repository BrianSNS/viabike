<?php
include("../conexao/conexao.php");

$user =$_POST['username'];
$senha = strtolower(sha1($_POST['senha']));

$userb;
$senhab;
$tipob;

$rs = $conexao->query('SELECT username, senha, tipo_usuario FROM usuarios'); 
while($row = $rs->fetch(PDO::FETCH_OBJ))
{ 
	// dados vindos do banco, por isso o "b"
	$userb = $row->username;
	$senhab = $row->senha;
	$tipob = $row->tipo_usuario; 
}

if ($user == $userb AND $senha == $senhab AND $tipob == "a")
{
	//echo "PAINEL DE ADM";
	header("location:home.php");
	$_SESSION['logado'] = 'admin';
	setcookie('username', $username, time()+3600);
	setcookie('logado', 'admin', time()+3600);
}
else if ($user == $userb AND $senha == $senhab AND $tipob == "u")
{
	echo "VOCE NAO TEM PERMISSAO PARA ACESSAR ESSA PAGINA";
}
else if ($user != $userb)
{
	echo "login errado";
}
else if ($senha != $senhab)
{
	echo "senha errada";
}
else 
{
	echo "USER E SENHA INCORRETO";
}
?>