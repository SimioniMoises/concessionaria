<?php
$conexao = mysqli_connect("localhost", "root", "", "bdmoises");
$tipo = $_POST['tipo'];
$modelo = $_POST['modelo'];
$ano = $_POST['ano'];
$marca = $_POST['marca'];
$cor = $_POST['cor'];
$acessorio = $_POST['acessorio'];
$combustivel = $_POST['combustivel'];
$foto = $_POST['foto'];

$sql_inserir = "insert into automoveis(tipo,modelo,ano,marca,cor,acessorio,combustivel,foto) values ('{$tipo}', '{$modelo}', {$ano}, '{$marca}', '{$cor}', '{$acessorio}', '{$combustivel}', '{$foto}')";
mysqli_query($conexao, $sql_inserir);
mysqli_close($conexao);

echo "<script language='javascript' type='text/javascript'>alert('Usuario cadastrado com sucesso!');window.location.href='form.php'</script>";


?>
