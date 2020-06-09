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


		public function Buscar(){
					if (!empty($this->id)) {				
						$sql = "SELECT * FROM news DATE_FORMAT(data, '%d/%m/%Y') AS df  FROM news WHERE id = $this->id";				
					}else {

						 $sql = "SELECT * FROM news DATE_FORMAT(data, '%d/%m/%Y') AS df  FROM news ORDER BY data";
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
		}
?>				