<?php
  $ID = $_GET['ID'];
  include 'conexion.php';
  $query = "DELETE FROM persons WHERE ID='$ID'";
  if(mysqli_query($conexion,$query)){
    echo "Deleted";
    header('Location:index.php');
  }
  mysqli_close($conexion);
 ?>
