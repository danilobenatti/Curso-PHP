<div class="titulo">Formulário</div>

<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
	rel="stylesheet">
	
<h2>Cadastro Pessoal</h2>
<form class="needs-validation" action="#" method="post">
	<div class="row">
		<div class="col-md-2">
			<label for="name" class="form-label">Nome</label>
			<input type="text" class="form-control form-control-lg" required
				id="name" name="nome" placeholder="Informe o nome"
				value="<?= isset($_POST['nome']) ? $_POST['nome'] : NULL?>">
		</div>
		<div class="col-md-4">
			<label for="lastname" class="form-label">Sobrenome</label>
			<input type="text" class="form-control form-control-lg" required
				id="lastname" name="sobrenome" placeholder="Informe o sobrenome"
				
				value="<?= isset($_POST['sobrenome']) ? $_POST['sobrenome'] : NULL?>">
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<label for="birthdate" class="form-label">Nascimento</label>
			<input type="date" class="form-control form-control-lg" required
				id="birthdate" name="nascimento" placeholder="Data de nascimento"
				value="<?= isset($_POST['nascimento']) ? $_POST['nascimento'] : NULL?>">
		</div>
		<div class="col-md-2">
			<label for="taxpayer" class="form-label">CPF</label>
			<input type="text" class="form-control form-control-lg" required
				id="taxpayer" name="cpf" placeholder="Informe CPF"
				value="<?= isset($_POST['cpf']) ? $_POST['cpf'] : NULL?>">
		</div>
		<div class="col-md-2">
			<label for="gender" class="form-label">Gênero</label>
			<select class="form-select form-select-lg" required
				id="gender" name="genero" aria-label="Selecione">
				<option selected="selected" disabled="disabled" hidden="true">Selecione...</option>
				<option value="1">Masculino</option>
				<option value="2">Feminino</option>
				<option value="3">Outros</option>
			</select>
		</div>
	</div>
	<div class="row mb-3">
		<div class="col-md-3">
			<label for="e_mail" class="form-label">E-mail</label>
			<input type="email" class="form-control form-control-lg"
				id="e_mail" name="email" placeholder="Informe e-mail principal" required
				value="<?= isset($_POST['email']) ? $_POST['email'] : NULL?>">
		</div>
		<div class="col-md-3">
			<label for="password" class="form-label">Senha</label>
			<input type="password" class="form-control form-control-lg"
				id="password" name="senha" placeholder="Informe uma senha" required
				value="<?= isset($_POST['senha']) ? $_POST['senha'] : NULL?>">
		</div>
	</div>
	<button class="btn btn-primary btn-lg" type="submit">Enviar</button>
</form>
<script type="text/javascript">
	document.getElementById('gender').value = "<?= $_POST['genero'];?>";
</script>
