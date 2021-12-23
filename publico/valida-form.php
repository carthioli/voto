<?php
	
	if(isset($_POST['nome']) && 
     isset($_POST['candidato']) &&
     !empty($_POST['nome']) &&
     !empty($_POST['candidato']) &&
     !empty($_POST['titulo'])){

	$html = "Nome: " . $_POST['nome'];
 	$html .= "\n";
  
  	$html .= 'Candidato: ' . $_POST['candidato'];
  	$html .= "\n";
  	echo $html;
  	}
	  
?>

