 <?
$servidor = 'localhost';
$banco      = 'aulacrud'; //vamos ver se � opicional a declara��o do Banco
$usuario  = 'root';
$senha    = '';
$link     = mysqli_connect($servidor, $usuario, $senha);
//$db = mysqli_select_db($banco,$link);
if(!$link)
{
    echo "erro ao conectar ao banco de dados!";exit();
}
?> 