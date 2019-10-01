<?php
  $conect = mysqli_connect("localhost","id11075048_cudpizza","pepezinho","id11075048_cudpizza");
  //                 /o onde esta o bd  / usuario bd       /   senha   /   nome  do bd      /

$sabor = $_GET['sabor'];
$valor = $_GET['valor'];

$query = "insert into tb_pizza values (null,'$sabor',$valor)";

  mysqli_query($conect,$query);

  echo "Registro Salvo com Sucesso!!!";


 ?>
