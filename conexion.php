<?php
  $conexion = mysqli_connect('localhost','root','','agenda');
  if (!$conexion) {
    die("Has been a error to connect".mysqli_connect_error());
  }
