<?php

	class noticias {
		
		////////////////
		//PROPRIEDADES//
		////////////////

		private	$id;	
		private	$titulo;
		private	$data;
		private	$hora;
		private	$texto;
		private	$tags;
		private $imagens;

		////////////////
		/// MÉTODOS  ///
		////////////////

		# Métodos SET
		public function setId ($id)	{
			$this-> id = $id;
		}

		public function setTitulo ($titulo)	{
			$this-> titulo = $titulo;
		}
		
		public function setData ($data)	{
			$this-> data = $data;
		}

		public function setHora ($hora)	{
			$this-> hora = $hora;
		}

		public function setTexto($texto)	{
			$this-> texto = $texto;
		}

		public function setTags ($tags)	{
			$this-> tags = $tags;
		}

		public function setImagens ($imagens)	{
			$this-> imagens = $imagens;
		}

		public function setConexao ($conexao)	{
			$this-> conexao = $conexao;
		}

		public function Cadastrar() {
			$sql = "INSERT INTO news (
									titulo, 
									data, 
									hora, 
									texto, 
									tags  
									)

									VALUES (
										'$this->titulo', 
										'$this->data',
										'$this->hora',
										'$this->texto',
										'$this->tags'						
									)
			";
		return mysqli_query($this->conexao, $sql);						

		}

		public function Listar(){
			if (!empty($this->id)) {				
				$sql = "SELECT *, DATE_FORMAT(data, '%d/%m/%Y') AS df  FROM news WHERE id = $this->id";				
			}else {

				 $sql = "SELECT *, DATE_FORMAT(data, '%d/%m/%Y') AS df  FROM news ORDER BY data";
			}
				$result =  mysqli_query($this->conexao, $sql);
				$x = 0;

				while ($dados = mysqli_fetch_assoc($result)) {
					foreach ($dados as $indice => $valor) {
						$array[$x][$indice] = $valor;

					} $x++;
				}				

			return $array;
		}

		public function Atualizar(){
			$sql = "UPDATE news SET
									titulo = '$this->titulo', 
									data = '$this->data', 
									texto = '$this->texto', 
									tags = '$this->tags'

									WHERE id = $this->id								
			";

			$result = mysqli_query($this->conexao, $sql);						

			if ($result == true) {
				return true;
			}else {
				return false;
			}
		}

		public function Excluir(){
			$sql = "DELETE FROM news WHERE id=".$this->id;

			return mysqli_query($this->conexao,$sql);

		}

		public function Validar(){
			$sql = $sql = "SELECT *, DATE_FORMAT(data, '%d/%m/%Y') AS df  FROM news WHERE id = $this->id";
			$result = mysqli_query($this->conexao, $sql);
			if (mysqli_num_rows($result) == 0) {
				return false;
			}else {
				$dados = mysqli_fetch_assoc($result);
				$this->id = $dados[0]['id'];
				return true;
			}
		}

	}
?>