<?php
//essa funчуo irс inserir os dados no BAnco
function adicionar($nome,$login,$senha) 
	$sql = "insert into tbl_login (nome,login,senha) values ('$nome','$login','$senha')";
	mysql_query($sql);
?>