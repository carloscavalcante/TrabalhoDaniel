<?php
session_start();
require_once 'conecta.php';
$cpf = $_POST['cpf'];
$_SESSION['cpf'] = $cpf;

if(isset($cpf)){
  $consulta = $pdo->query("SELECT cpf FROM voto WHERE cpf = '{$cpf}';");
  $linha = $consulta->fetch(PDO::FETCH_ASSOC);
  if(($cpf == $linha['cpf'])){
    echo "<script>alert('CPF deve ser preenchidos ou voce ja votou.');window.location.assign('index.php');</script>";
  }else{
    $stmt = $pdo->prepare('INSERT INTO voto VALUES (:id, :cpf, :carro)');
    $stmt->execute(array(
  	':id'    => Null,
  	':cpf'  => $cpf,
    ':carro' => Null
  ));
echo "<script>window.location.assign('votacao.php');</script>";
  }
 // echo $stmt->rowCount();
}

?>