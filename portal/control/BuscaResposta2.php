<?php
$colaborador = $_POST['colaborador'];

include_once 'connect.php';
$conexao = new Conexao();
$mysqli = $conexao->getConexao();
  $query = "SELECT * FROM respostaclima WHERE nome='$colaborador'";
  $result = mysqli_query($mysqli, $query);
  $data = array();

if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_assoc($result))
{
 $data[] = $row;
}
echo json_encode($data);
}else {
  $data = "0";
  echo json_encode($data);
}

?>
