<?php 

require '../service/ServiceLivro.php';


class DeletarLivro{

	private $deletar;

	public function __construct($id)
	{
		$this->deletar = new ServiceLivro();
		if($this->deletar->deleteLivro($id))
		{
			echo "<script>alert('Registro deletado com sucesso!');document.location='../view/lista.php'</script>";
		}else{
			echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
		}
	}
}

new DeletarLivro($_GET['data-bs-toggle']);