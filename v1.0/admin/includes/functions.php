<?php
	//mostra os erros na tela 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL); 

	function StringReplace($url){

		echo '<script type="text/javascript">
				document.location.replace('.$url.');
			</script>';
		
	}

	function alert($msg) {
		
		echo '<script type="text/javascript">
				alert('.$msg.');
			</script>';
	}
?>	