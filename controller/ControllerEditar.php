<?php 

require '../service/ServiceLivro.php';

class ControllerEditar{
	
	private $editar;
	
	public function __construct($id)
	{
		$this->editar = new ServiceLivro();
		$this->update($id);
	}
	
	private function update()
	{		
		function validateInput($method)
		{
			$input = htmlspecialchars(addslashes($method));			
			return $input;
		}
		
		$id         = $_GET['id'];
		$nome       = validateInput($_POST['nome']);
		$autor      = validateInput($_POST['autor']);
		$quantidade = validateInput($_POST['quantidade']);
		$data       = validateInput(date('Y-m-d',strtotime($_POST['data'])));
		$preco      = floatval(validateInput($_POST['preco']));	
		
		if($this->editar->updateLivro($nome, $autor, $quantidade, $data, $preco, $id))
		{
			echo "<script>alert('Registro editado com sucesso!');document.location='../view/lista.php'</script>";
		}else{
			echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
		}
	}
}

$editar = new ControllerEditar($_GET['id']);
