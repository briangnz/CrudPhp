<?php
  include ('conexion.php');
  $username = $_POST['FirstName'];
  $password= $_POST['LastName'];
  $email = $_POST['Address'];
$query = "INSERT INTO persons(FirstName,LastName,Address) VALUES('$username','$password','$email')";

if(mysqli_query($conexion,$query)) {
  echo "Succesfull";
  header('Location:index.php');
}else{
  echo "Error";
}

 ?>
