<?php
	//mostra os erros na tela
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	class administrador {
		
		////////////////
		//PROPRIEDADES//
		////////////////

		private	$id;	
		private	$nome;
		private	$usuario;
		private	$senha;
		private	$conexao;

		////////////////
		/// MÉTODOS  ///
		////////////////

		# Métodos SET
		public function setId ($id)	{
			$this-> id = $id;
		}

		public function setNome ($nome)	{
			$this-> nome = $nome;
		}
		
		public function setUsuario ($usuario)	{
			$this-> usuario = $usuario;
		}

		public function setSenha ($senha)	{
			$this-> senha = $senha;
		}

		public function setConexao ($conexao)	{
			$this-> conexao = $conexao;
		}

		public function Cadastrar() {
			$sql = "INSERT INTO usuario (
									nome, 
									usuario, 
									senha  
									)

									VALUES (
										'$this->nome', 
										'$this->usuario',
										'$this->senha'						
									)
			";
		return mysqli_query($this->conexao, $sql);						

		}

		public function Listar(){
			if (!empty($this->id)) {				
				$sql = "SELECT * FROM usuario WHERE id = $this->id";				
			}else {

				 $sql = "SELECT * FROM usuario ORDER BY nome";
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
			if (!empty($this->senha)) {
				$sql = "UPDATE usuario SET
											nome = '$this->nome', 
											usuario = '$this->usuario', 
											senha = '$this->senha'

											WHERE id = $this->id								
					";
			}else {
				$sql = "UPDATE usuario SET
											nome = '$this->nome', 
											usuario = '$this->usuario', 
											WHERE id = $this->id								
					";
			}


			$result = mysqli_query($this->conexao, $sql);						

			if ($result == true) {
				return true;
			}else {
				return false;
			}
		}

		public function Excluir(){
			$sql = " DELETE  FROM usuario WHERE id=".$this->id;

			return mysqli_query($this->conexao,$sql);

		}

		public function Validar(){
			$sql = "SELECT * FROM usuario  WHERE usuario='$this->usuario' AND senha='$this->senha'";
			$result = mysqli_query($this->conexao, $sql);
			if (mysqli_num_rows($result) == 0) {
				return false;
			}else {
				$dados = mysqli_fetch_assoc($result);
				$this->id = $dados[0]['id'];
				return true;
			}
		}

	/*	
		# Métodos GET
		public function getNome () {
			# code...
		}

		# Métodos de AÇÃO
	*/	

	}

?>