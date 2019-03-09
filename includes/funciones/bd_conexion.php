<?php 
  $conn = new mysqli('localhost', 'root', '0187', 'sjwebcamp');

  if($conn->connect_error) {
      echo $error = $conn->connect_error;
  }

?>