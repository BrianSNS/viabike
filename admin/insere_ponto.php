<?php include("template/header.php");?>
	<CENTER>
	<h1>Cadastar pontos de interesse</h1><br>
		<form action="confirma_ponto.php" method="POST">
			<input type="hidden" name="id_ponto" class="form">
			Nome:<input type="text" name="nome" class="form"><br>
			Bairro:<input type="text" name="bairro" class="form"><br>
			Rua:<input type="text" name="rua" class="form"><br>
			Número:<input type="text" name="num" class="form"><br>
			CEP:<input type="text" name="cep" class="form"><br>
			Telefone:<input type="text" name="telefone" class="form"><br>
			Hora de Funcionamento:<input type="time" name="hr_inicio" class="form"><br>
			Até:<input type="time" name="hr_fecha" class="form"><br>
			Categoria:<select name="categoria" class="form select"><br>
						<option value="BC">Bicicletaria</option>
						<option value="PG">Posto de Gasolina</option>
					  </select><br>
			Latitude:<input type="text" name="latitude" class="form"><br>
			Longitude:<input type="text" name="longitude" class="form"><br>
			<input type="submit" value="Cadastrar" class="button">
		</form>
	</CENTER>
<?php include("template/footer.php");?>
