<?php

session_start();

//if(!isset($_SESSION["loggedin"]) II $_SESSION["loggedin"]
//)

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <h1>Buscar Cadastros de Veiculos</h1>
    <form method="post">
      <div class="mb-3">
        <br>
        <label class="form-label"> ID </label>
        <input type="number" name="id" class="form-control" placeholder="Informe o ID">
        <input type="submit" name="botaobuscar" value="btnbuscar" class="btn btn-primary">
      </div>

    </form>
</body>

</html>

<?php

if (array_key_exists('botaobuscar', $POST)) {
  btnbuscar(); //funcao

}

function btnbuscar(){
{
  $id = $_POST['id'];
  $conexao = mysqli_connect("localhost", "root", "", "bdmoises");
  $sql_pesquisar = "select * from veiculos where id = $id";
  $resultado = mysqli_query($conexao, $sql_pesquisar);


  echo '<table class="table table-dark table-hover">';
  echo '<tr>';
  echo '<td>Tipo</td>';
  echo '<td>Modelo</td>';
  echo '<td>Ano</td>';
  echo '<td>Marca</td>';
  echo '<td>Cor</td>';
  echo '<td>Acessorio</td>';
  echo '<td>Combustivel</td>';
  echo '<td>Foto</td>';
  echo '</tr>';

  while ($linha = mysqli_fetch_assoc($resultado)) {

    echo "<tr>";
    echo "<td>{$linha{
      'tipo'}}</td>";
    echo "<td>{$linha{
      'modelo'}}</td>";
    echo "<td>{$linha{
      'ano'}}</td>";
    echo "<td>{$linha{
      'marca'}}</td>";
    echo "<td>{$linha{
      'cor'}}</td>";
    echo "<td>{$linha{
      'acessorio'}}</td>";
    echo "<td>{$linha{
      'combustivel'}}</td>";
    echo "<td><img src='{$linha{
      'foto'}}' widht='300' height='200'> </td>";
    echo "</tr>";
  }

  echo '</table>';


  mysqli_close($conexao);
}

?>
