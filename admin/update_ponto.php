<?php 
	$id_ponto = $_POST['id_ponto'];
	$linha = $buscaPonto->fetchAll(PDO::FETCH_OBJ);
	foreach ($linha as $linhas):
?>

<html>
<head>
	<title>Formulario</title>
	<meta charset="utf-8">
</head>
<body>
	<CENTER><form action="altera_pontos.php" method="POST">
		<input type="hidden" name="id_ponto" value="<?=$linhas->id_ponto?>">
		<h1>Alterando Ponto</h1>
		<table>
			<tr>
				<td>Nome:</td>
				<td><input type="text" name="nome" value="<?=$linhas->nome?>"></td>
			</tr>

			<tr>
				<td>Bairro:</td>
				<td><input type="text" name="bairro" value="<?=$linhas->bairro?>"></td>
			</tr>

			<tr>
				<td>Rua:</td>
				<td><input type="text" name="rua" value="<?=$linhas->rua?>"></td>
			</tr>

			<tr>
				<td>Número:</td>
				<td><input type="number" name="num" value="<?=$linhas->num?>"></td>
			</tr>

			<tr>
				<td>cep:</td>
				<td><input type="number" name="cep" value="<?=$linhas->cep?>"></td>
			</tr>

			<tr>
				<td>Telefone:</td>
				<td><input type="number" name="telefone" value="<?=$linhas->telefone?>"></td>
			</tr>
			
			<tr>
				<td>Hora de Funcionamento:</td>
				<td><input type="time" name="hr_inicio" value="<?=$linhas->hr_inicio?>"></td>
			</tr>
			
			<tr>
				<td>Até :</td>
				<td><input type="time" name="hr_fecha" value="<?=$linhas->hr_fecha?>"></td>
			</tr>

			<tr>
				<td>Categoria:</td>
				<td>
					<select name="categoria">
						<option value="BC">Bicicletaria</option>
						<option value="PG">Posto de Gasolina</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Latitude:</td>
				<td><input type="number" name="latitude" value="<?=$linhas->latitude?>"></td>
			</tr>
			
			<tr>
				<td>Longitude:</td>
				<td><input type="number" name="longitude" value="<?=$linhas->longitude?>"></td>
			</tr>
			
			<tr>
				<td><input type="submit" value="Alterar"></td>
			</tr>
		</table>
	</form></CENTER>
<?php 
	endforeach;
?>
</body>
</html>