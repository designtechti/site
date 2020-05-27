<?php

	class pedidos {
		
		////////////////
		//PROPRIEDADES//
		////////////////

		private	$id;
		private	$idCliente;
		private	$idProduto;
		private	$qtd;
		private $valorUn;
		private	$conexao;

		////////////////
		/// MÉTODOS  ///
		////////////////

		# Métodos SET
		public function setId ($id)	{
			$this-> id = $id;
		}

		public function setIdCliente ($idCliente)	{
			$this-> idCliente = $idCliente;
		}

		public function setIdProduto ($idProduto)	{
			$this-> idProduto = $idProduto;
		}

		public function setSenha ($senha)	{
			$this-> senha = $senha;
		}

		public function setQtd ($qtd)	{
			$this-> qtd = $qtd;
		}
		
		public function setValorUn ($valorUn)	{
			$this-> valorUn = $valorUn;
		}

		public function setConexao ($conexao)	{
			$this-> conexao = $conexao;
		}

		public function Listar(){
			
			$sql = "SELECT * FROM pedidos WHERE idCliente = $this->idCliente";	
			
				$result =  mysqli_query($this->conexao, $sql);
				$x = 0;

				while ($dados = mysqli_fetch_assoc($result)) {
					foreach ($dados as $indice => $valor) {
						$array[$x][$indice] = $valor;

					} $x++;
				}				

			return $array;
		}

		# Métodos GET

		public function getId() {
			return $this-> id;
		}

	}

?>