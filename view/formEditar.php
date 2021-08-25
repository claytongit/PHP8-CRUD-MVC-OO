<?php 

require '../service/ServiceLivro.php';

$id = isset($_GET['data-bs-toggle'])?$_GET['data-bs-toggle']:null;

$banco = New ServiceLivro();

$formValue = $banco->getLivroId($id);

foreach($formValue as $value)
{
	$nome  = $value['nome'];
	$autor = $value['autor'];
	$qtd   = $value['quantidade'];
	$preco = $value['preco'];
	$data  = $value['dia'];
}

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <br>
	<div class="container">
		<form method="post" action="../controller/ControllerEditar.php?id=<?php echo $nome; ?>" id="form" name="form" class="w-100">
			<div class="form-group">
				<input class="form-control mb-3" type="text"   id="nome"       name="nome"       placeholder="Nome do Livro"         value="<?php echo $nome ?>"  required autofocus >
				<input class="form-control mb-3" type="text"   id="autor"      name="autor"      placeholder="Autor do Livro"        value="<?php echo $autor ?>" required >
				<input class="form-control mb-3" type="number" id="quantidade" name="quantidade" placeholder="Quantidade de Páginas" value="<?php echo $qtd ?>"   required >
				<input class="form-control mb-3" type="text"   id="preco"      name="preco"      placeholder="Preço do Livro"        value="<?php echo $preco ?>" required >
				<input class="form-control mb-3" type="date"   id="data"       name="data"       placeholder="Data de Pulicação"     value="<?php echo $data ?>"  required >
			</div>
			<div class="row">
				<a href="lista.php" class="col-md-6" >Voltar</a>
				<button type="submit" class="btn btn-success col-md-6">Editar</button>
			</div>
		</form>
	</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  </body>
</html>