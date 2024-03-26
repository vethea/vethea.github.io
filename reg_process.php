<?php

require 'conn.php';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];
$query = "INSERT INTO tb_reg VALUES ('$name','$email','$phone','$pass')";
mysqli_query($con,$query);  

header ("location: http://localhost/phpdasar/jawa/tes.php");
?>