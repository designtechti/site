<?php

	class produto {
		
		////////////////
		//PROPRIEDADES//
		////////////////

		private	$id;
		private	$titulo;
		private	$valor;
		private	$descricao;
		private	$ativo;
		private	$estoque;
		private	$foto;
		private	$caminhoFoto;
		private	$conexao;

		////////////////
		/// MÉTODOS  ///
		////////////////

		# Métodos SET
		
		public function setId ($tid)	{
			$this-> id = $id;
		}

		public function setTitulo ($titulo)	{
			$this-> titulo = $titulo;
		}

		public function setValor ($valor)	{
			$this-> valor = $valor;
		}

		public function setDescricao ($descricao)	{
			$this-> descricao = $descricao;
		}
		
		public function setAtivo ($ativo)	{
			$this-> ativo = $ativo;
		}

		public function setFoto ($foto)	{
			$this-> foto = $foto;
		}

		public function setCaminhoFoto ($caminho)	{
			$this-> caminhoFoto = $caminho;
		}

		public function setEstoque ($estoque)	{
			$this-> estoque = $estoque;
		}

		public function setConexao ($conexao)	{
			$this-> conexao = $conexao;
		}

		public function Cadastrar() {
			if (!empty($this->foto['name'])) {
			//Pega a extensão do arquivo
			$ext = strrchr($this->foto['name'], '.');
			//Mover arquivo do temporário para o public_html
			$foto = time().$ext;
			if(!move_uploaded_file($this->foto['tmp_name'], "$this->caminhoFoto/$foto")) {
				return false;
			}
		}

			$sql = "INSERT INTO produtos (
									titulo, 
									foto, 
									valor, 
									descricao, 
									ativo, 
									estoque) 

									VALUES (
										'$this->titulo', 
										'$foto', 
										'$this->valor', 
										'$this->descricao', 
										'$this->ativo', 
										'$this->estoque'
									)
			";	
			
		return mysqli_query($this->conexao, $sql);
	
		}

		public function	Listar(){
			$sql = "SELECT * FROM produtos order by titulo";
			$result = mysqli_query($this->conexao,'SELECT *FROM produtos');
			$x = 0;

			while($dados = mysqli_fetch_assoc($result)){
				foreach($dados as $i => $v){
					$array[$x] [$i] = $v;	
				}$x++;
			}return $array;
					
		}
		public function Atualizar(){
		
		/*	$result = mysqli_query($this->conexao, $sql);						

			if ($result == true) {
				return true;
			}else {
				return false;
			}*/
		}

		public function Excluir(){
			/*$sql = " DELETE  FROM clientes WHERE id=".$this->id;

			return mysqli_query($this->conexao,$sql);*/

		}


		# Métodos GET
		public function getNome () {
			# code...
		}

		# Métodos de AÇÃO
		

	}

?>