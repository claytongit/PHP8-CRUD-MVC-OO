<form method="post" action="controller/ControllerCadastro.php" id="form" name="form" class="w-100">
	<div class="form-group">
		<input class="form-control mb-3" type="text"   id="nome"       name="nome"       placeholder="Nome do Livro"         required autofocus >
		<input class="form-control mb-3" type="text"   id="autor"      name="autor"      placeholder="Autor do Livro"        required >
		<input class="form-control mb-3" type="number" id="quantidade" name="quantidade" placeholder="Quantidade de Páginas" required >
		<input class="form-control mb-3" type="text"   id="preco"      name="preco"      placeholder="Preço do Livro"        required >
		<input class="form-control mb-3" type="date"   id="data"       name="data"       placeholder="Data de Pulicação"     required >
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
	</div>
</form>