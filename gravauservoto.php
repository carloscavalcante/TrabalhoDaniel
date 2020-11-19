<?php
session_start(); 
require_once 'conecta.php';
$carro = $_GET['radio'];
$_SESSION['cpf'];

//echo("$usuario,". base64_decode($senha));

echo "<script>alert('$carro, $cpf')</script>";

/* if(isset($carro))
try {

  $stmt = $pdo->prepare('UPDATE voto SET $carro WHERE cpf=$cpf');
  $stmt->execute(array(
  	':id'    => Null,
  	':cpf'  => $cpf,
    ':carro' => $carro
  ));
echo "<script>alert('Voto gravado com sucesso!');window.location.assign('index.php');</script>";
 // echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
 */
?>