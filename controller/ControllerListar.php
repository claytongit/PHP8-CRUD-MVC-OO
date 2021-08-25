<?php 

require "../service/ServiceLivro.php";

class ControllerListar{
	
	private $lista;
	
	public function __construct()
	{
		$this->lista = new ServiceLivro();
		$this->criarTabela();
	}
	
	private function criarTabela()
	{
		$linha = $this->lista->getLivro();
		
		foreach($linha as $value)
		{
			$format  = number_format($value['preco'], 2);
			$precoFormat = str_replace('.', ',', $format );
			
			echo '<tr>';
			echo '<th scope="row">'.$value['nome'].'</th>';
			echo '<td>'.$value['autor'].'</td>';
			echo '<td>'.$value['quantidade'].' Paginas</td>';
			echo '<td>R$'.$precoFormat.'</td>';
			echo '<td>'.$value['dia'].'</td>';
			echo '<td><a href="../view/formEditar.php?data-bs-toggle='.$value['nome'].'" class="btn btn-warning btn-sm">EDITAR<a/></td>';
			echo '<td><a href="../controller/ControllerDeletar.php?data-bs-toggle='.$value['nome'].'" class="btn btn-danger btn-sm" data-confirm="Qualquer coisa">EXCUIR</a></td>';
			echo '</tr>';
		}
	}
}

?>