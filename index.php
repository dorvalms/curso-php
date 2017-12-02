<?php
	if( isset($_GET['resultado']) and $_GET['resultado']==1){
		echo "Sucesso no Cadastro";
	}else{
		if( isset($_GET['erro']) ){
			echo $_GET['erro'];
		}
	}
?>
<form action="cadastro_pessoa.php" method ="POST">
	<label>Nome</label>
	<input type="text" name="nome" value="<?php echo isset($_GET['nome']) ? $_GET['nome'] : '';?>"/>
	<br/>
	<label>Email</label>
	<input type="email" name="email" value="<?php echo isset($_GET['email']) ? $_GET['email'] : '';?>"/>
	<br/>
	<label>Telefone</label>
	<input type="phone" name="telefone" value="<?php echo isset($_GET['telefone']) ? $_GET['telefone'] : '';?>"/>
	<br/>
	<label>Idade</label>
	<input type="number" name="idade" value="<?php echo isset($_GET['idade']) ? $_GET['idade'] : '';?>"/>
	<br/>
	<input type="radio" name="sexo" value="masculino" <?php echo (isset($_GET['sexo']) and $_GET['sexo'] == 'masculino' ) ? 'checked' : '' ;?>  ><label>Masculino</label><br/>
	<input type="radio" name="sexo" value="feminino" <?php echo (isset ($_GET['sexo']) and $_GET['sexo'] == 'feminino' ) ? 'checked' : '' ;?>><label>Feminino</label><br/>
	<br/>
	<label>Endereço</label>
	<textarea name ="endereço"><?php echo isset($_GET['endereço']) ? $_GET['endereço'] : '';?></textarea>
	<br/>
	<input type="submit"/>
</form>
	
	