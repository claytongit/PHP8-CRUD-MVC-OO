<?php

require '../service/ServiceLivro.php';

class ControllerPesquisa{
	
	private $pesquisa;
	
	public function __construct($id)
	{
		$this->pesquisa = new ServiceLivro();
		$this->search($id);
	}
	
	private function search($id)
	{
		$linha = $this->pesquisa->getLivroId($id);
		
		if($linha > 1)
		{ 
	
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
			
		}else{ 
			echo '<h3>Livro não encontrado</h3>';
		}  
	}
	
}