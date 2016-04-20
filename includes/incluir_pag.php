<?php

	 if ($_GET["pg"]=="") {

	 

	 

		$_GET["pg"]="view/ocorrencias/ocorrencias.php";

					

		 }else{
			 
		include base64_decode($_GET["pg"]);						

	 }	

?>