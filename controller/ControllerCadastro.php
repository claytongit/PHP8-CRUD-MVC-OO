<?php

require "../service/CadastroLivro.php";

class ControllerCadastro{
	
	private $cadastro;
	
	public function __construct()
	{
		$this->cadastro = new CadastroLivro();
		$this->cadastrar();
	}
	
	private function cadastrar()
	{
		function validateInput($method)
		{
			$input = htmlspecialchars(addslashes($method));			
			return $input;
		}
		
		$preco = strtr(validateInput($_POST['preco']), ',', '.');
		
		$precoFormat = floatval($preco);
		
		$this->cadastro->setNome(validateInput($_POST['nome']));
		$this->cadastro->setAutor(validateInput($_POST['autor']));
		$this->cadastro->setQuantidade(validateInput($_POST['quantidade']));
		$this->cadastro->setPreco($precoFormat);
		$this->cadastro->setDia(date('Y-m-d',strtotime($_POST['data'])));
		
		$result = $this->cadastro->incluir();
		
		if($result >=1)
		{
			echo "<script>alert('Registro incluído com sucesso!');document.location='../index.php'</script>";
		}else{
			echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');history.back()</script>";
		}
	}
}

new ControllerCadastro();