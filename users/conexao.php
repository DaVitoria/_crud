 <?php 

$hostname ="localhost";
$banco ="crud";
$usuario="postgres";
$senha="querotedar";

/*$mysqli = new mysqli($hostname, $usuario, $senha, $banco);
//if($mysqli ->connect_errno){
  //  echo "Falha ao conectar: (". $mysqli->connect_errno.")". $mysqli->connect_error;
}*/


try{
    $pdo =new PDO("pgsql:host=$hostname; port=5432;dbname=$banco",$usuario, $senha, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}catch (PDOException $e){
    echo "Conexao interropida ao se conectar com o banco de dados! <br/>";
    die($e->getMessage()); 
}


/*
$host = "localhost";
$dbname = "crud";
$username = "root";
$password = ""; clnhancale@g


//MYSQLi

$conectar = mysqli_connect($host,$dbname,$username,$password)
 or die("Erro na conexao!");
*/
?>