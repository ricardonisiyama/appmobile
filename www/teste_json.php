<?php
/**
* Tutorial jSON
*/

//Definir formato de arquivo
header('Content-Type:' . "text/plain");

include_once('database.php');

//@pg_close($con); //Encerrrar Conexão

if(!$con) {
	echo '[{"erro": "Não foi possível conectar ao banco"';
	echo '}]';
}else {
	//SQL de BUSCA LISTAGEM
	$sql 	= "SELECT * FROM cadastro ORDER BY id";
	$result = mysql_query($sql); //Executar a SQL
	$n 		= mysql_num_rows($result); //Número de Linhas retornadas

	if (!$result) {
		//Caso não haja retorno
		echo '[{"erro": "Há algum erro com a busca. Não retorna resultados"';
		echo '}]';
	}else if($n<1) {
		//Caso não tenha nenhum item
		echo '[{"erro": "Não há nenhum dado cadastrado"';
		echo '}]';
	}else {
		//Mesclar resultados em um array
		for($i = 0; $i<$n; $i++) {
			$dados[] = mysql_fetch_assoc($result);
		}
		
		echo json_encode($dados);
	}
}
?>