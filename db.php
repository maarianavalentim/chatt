<?php 

// BANCO DE DADOS SERVIDOR LOCAL XAMPP
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "chat";  


$conexao = new mysqli($servidor,$usuario,$password,$bd);

function formatarData($data){
	return date('H:i:s', strtotime($data));

}


 ?>