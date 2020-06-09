<?php

	class cliente {
		
		////////////////
		//PROPRIEDADES//
		////////////////

		private	$id;
		private	$nome;
		private	$dataNascimento;
		private	$telefone;
		private $email;
		private $senha;
		private	$cpf;
		private	$cep;
		private	$endereco;
		private	$conexao;

		////////////////
		/// MÉTODOS  ///
		////////////////

		# Métodos SET
		public function setNome ($nome)	{
			$this-> nome = $nome;
		}

		public function setDataNasc ($dataNascimento)	{
			$this-> dataNascimento = $dataNascimento;
		}

		public function setEmail ($email)	{
			$this-> email = $email;
		}

		public function setSenha ($senha)	{
			$this-> senha = $senha;
		}

		public function setTelefone ($telefone)	{
			$this-> telefone = $telefone;
		}
		
		public function setCpf ($cpf)	{
			$this-> cpf = $cpf;
		}

		public function setCep ($cep)	{
			$this-> cep = $cep;
		}
		
		public function setId ($id)	{
			$this-> id = $id;
		}
		
		public function setEndereco ($endereco)	{
			$this-> endereco = $endereco;
		}

		public function setConexao ($conexao)	{
			$this-> conexao = $conexao;
		}

		public function Cadastrar() {
			$sql = "INSERT INTO clientes (
									nome, 
									telefone, 
									endereco,
									email, 
									senha,  
									cep, 
									cpf, 
									dataNascimento) 

									VALUES (
										'$this->nome', 
										'$this->telefone', 
										'$this->endereco',
										'$this->email', 
										'$this->senha',  
										'$this->cep', 
										'$this->cpf', 
										'$this->dataNascimento'
									)
			";
			
		$result = mysqli_query($this->conexao, $sql);						

			if ($result == true) {
				$this-> id = mysqli_insert_id($this->conexao);
				return true;
			}else {
				return false;
			}
		}

		public function Listar(){
			if (!empty($this->id)) {				
				$sql = "SELECT *, DATE_FORMAT(dataNascimento, '%d/%m/%Y') AS df FROM clientes WHERE id = $this->id";				
			}else {

				 $sql = "SELECT *, DATE_FORMAT(dataNascimento, '%d/%m/%Y') AS df FROM clientes ORDER BY id";
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

			if(!empty($this->senha)){
				$sql = "UPDATE clientes SET
													nome = '$this->nome', 
													telefone = '$this->telefone', 
													endereco = '$this->endereco',
													email = '$this->email',
													senha = '$this->senha',									 
													cep = '$this->cep', 
													cpf = '$this->cpf', 
													dataNascimento = '$this->dataNascimento'

													WHERE id = $this->id								
							";
			}else{
					$sql = "UPDATE clientes SET
													nome = '$this->nome', 
													telefone = '$this->telefone', 
													endereco = '$this->endereco',
													email = '$this->email',
													cep = '$this->cep', 
													cpf = '$this->cpf', 
													dataNascimento = '$this->dataNascimento'

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
			$sql = " DELETE  FROM clientes WHERE id=".$this->id;

			return mysqli_query($this->conexao,$sql);

		}

		public function Validar(){
			$sql = "SELECT * FROM clientes WHERE email='$this->email' AND senha='$this->senha'";
			$result = mysqli_query($this->conexao, $sql);
			$dados = mysqli_fetch_assoc($result);
			$this->id = $dados['id'];
			if (mysqli_num_rows($result) == 0) {
				return false;
			}else {
				return true;
			}
		}

		# Métodos GET
		public function getId () {
			return $this->id;
		}

	}	
?>