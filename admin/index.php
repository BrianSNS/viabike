<?php include("template/header.php");?>
<center>
<h1>Login Administrativo</h1><br>
<form method="POST" name="login" action="confirma_login.php">
	<input type="text" name="username" class="form" placeholder="Nome de Usuário"><br>
	<input type="password" name="senha"class="form" placeholder="Senha"><br>
	<input type="checkbox" class="check" name="conectado"> Mantenha-me conectado
	<input type="submit" name="login" value="Entrar" class="button">
</form>
</center>
<?php include("template/footer.php");?>