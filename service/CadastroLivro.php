<?php

require "ServiceLivro.php";

class CadastroLivro extends ServiceLivro{
	
	private $nome;
	private $autor;
	private $quantidade;
	private $dia;
	private $preco;
	private $flag;
	
	public function setNome($string)
	{
		$this->nome = $string;
	}	
	public function getNome()
	{
		return $this->nome;
	}
	
	public function setAutor($string)
	{
		$this->autor = $string;
	}	
	public function getAutor()
	{
		return $this->autor;
	}
	
	public function setQuantidade($string)
	{
		$this->quantidade = $string;
	}	
	public function getQuantidade()
	{
		return $this->quantidade;
	}
	
	public function setDia($string)
	{
		$this->dia = $string;
	}	
	public function getDia()
	{
		return $this->dia;
	}
	
	public function setPreco($string)
	{
		$this->preco = $string;
	}	
	public function getPreco()
	{
		return $this->preco;
	}
	
	public function setFlag($string)
	{
		$this->flag = $string;
	}	
	public function getFlag()
	{
		return $this->flag;
	}
	
	
	public function incluir()
	{
		return $this->setLivro($this->getNome(), $this->getAutor(), $this->getQuantidade(), $this->getDia(), $this->getPreco(), $this->getFlag());
	}
}