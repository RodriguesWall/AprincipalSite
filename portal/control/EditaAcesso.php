<?php
$nivel = $_POST["nivel"];
$id = $_POST["id"];

     include_once 'connect.php';
     $conexao = new Conexao();
     $mysqli = $conexao->getConexao();

$nivel = json_encode($nivel,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);

$sql = "UPDATE colaborador SET root = '$nivel' WHERE id='$id'";
$insert =mysqli_query($mysqli, $sql);
if($insert){
  echo "1";
}else {
  echo "0";
}


?>
