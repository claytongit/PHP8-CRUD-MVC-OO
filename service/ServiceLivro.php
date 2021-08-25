<?php 

require '../modal/Banco.php';

class ServiceLivro extends Banco{

	private $conexao;

	public function __construct()
	{
		$this->conexao = new Banco();
		$this->getLivro();
	}


	//Lista todos os livros
	public function getLivro()
	{
		try {
			$sql = "SELECT * FROM livros";
		
			$stmt = $this->conexao->pdo->prepare($sql);
			
			$stmt->execute();
			
			while($linha = $stmt->fetch(PDO::FETCH_ASSOC))
			{
				$array[] = $linha;
			}
			
			return $array;
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	//Lista os livros pelo NOME
	public function getLivroId($id)
	{
		try{
			$sql = 'SELECT * FROM livros WHERE nome = :id';
		
			$stmt = $this->conexao->pdo->prepare($sql);
			
			$stmt->bindValue(':id', $id);
			
			$stmt->execute();
			
			while($linha = $stmt->fetch(PDO::FETCH_ASSOC)) 
			{
				$array[] = $linha;
			}
			
			return $array;
			
		}catch(PDOException $e){
			echo $e->getMesage();
		}
	}

	//Inclui um livro
	public function setLivro($nome, $autor, $quantidade, $dia, $preco)
	{
		try
		{
			$sql = 'INSERT INTO livros (nome, autor, quantidade, dia, preco) VALUES (:nome, :autor, :quantidade, :dia, :preco)';
		
			$stmt = $this->conexao->pdo->prepare($sql);
			
			$stmt->bindValue(':nome', $nome);
			$stmt->bindValue(':autor', $autor);
			$stmt->bindValue(':quantidade', $quantidade);
			$stmt->bindValue(':dia', $dia);
			$stmt->bindValue(':preco', $preco);
			
			if($stmt->execute() == true)
			{
				return true;
			}else{
				return false;
			}
			
		}catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	//Editar o livro selecionado
	public function updateLivro($nome, $autor, $quantidade, $dia, $preco, $id)
	{
		try {
			$sql = 'UPDATE livros SET nome = :nome, autor = :autor, quantidade = :quantidade, dia = :dia, preco = :preco WHERE nome = :id';
		
			$stmt = $this->conexao->pdo->prepare($sql);
			
			$stmt->bindValue(':nome', $nome);
			$stmt->bindValue(':autor', $autor);
			$stmt->bindValue(':quantidade', $quantidade);
			$stmt->bindValue(':dia', $dia);
			$stmt->bindValue(':preco', $preco);
			$stmt->bindValue(':id', $id);
			
			if($stmt->execute())
			{
				return true;
			}else{
				return false;
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	//Excluir livro selecionado
	public function deleteLivro($id)
	{
		try {
			$sql = 'DELETE FROM livros WHERE nome = :id';
		
			$stmt = $this->conexao->pdo->prepare($sql);
			
			$stmt->bindValue(':id', $id);
			
			if($stmt->execute())
			{
				return true;
			}else{
				return false;
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	
}