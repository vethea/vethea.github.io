<html>
<head>
<title> Login </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
</head>
<style>
h1 { justify-content: center;
    display:flex;
    align-items:center;
    background-size:1500px;
    height:100vh;
    color: lightcyan;
}
</style>

<body style="background-image: url('https://www.fodors.com/wp-content/uploads/2019/04/TraditionalfoodsinJava__HERO_shutterstock_1161085942.jpg');">
<?php
include('conn.php');
 $name = $_POST['name']; 
 $pass = $_POST['pass']; 
   
        $name = stripcslashes($name);
        $pass = stripcslashes($pass);  
        $username = mysqli_real_escape_string($con, $pass);  
        $password = mysqli_real_escape_string($con, $pass);  
      
        $sql = "select *from tb_reg	where password = '$pass' and Username = '$name'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
            header("location: http://localhost/phpdasar/jawa/tes.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
            
        }     



?>  