<?php
  include ('conexion.php');
  $ID = $_GET['ID'];
  $FirstName =$_GET['FirstName'];
  $LastName =$_GET['LastName'];
  $Address =$_GET['Address'];

  $query = "UPDATE persons SET FirstName='$FirstName',LastName='$LastName',Address='$Address'  WHERE ID='$ID'";
  if(mysqli_query($conexion,$query)){
    echo "OK";

  }
  mysqli_close($conexion);
 ?>
