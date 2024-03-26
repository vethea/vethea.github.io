<html>
<head>
<title> Login </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
</head>
<style>
body {
    justify-content: center;
    display:flex;
    align-items:center;
    background-size:1500px;
    height:100vh;
}

*{box-sizing:border-box;

}

h2 {text-align:center;
   font-size:30;
}

form{
    width:300px;
    border:2px solid #ccc;
    padding:30px ;
    background:rgba(255,255,255,0.6);    
 
}

    <?php
            require 'conn.php';
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $pass = $_POST['pass'];
                $query = "INSERT INTO tb_reg VALUES ('$name','$email','$phone','$pass')";
                mysqli_query($con,$query);  
             ?>



</style>

<body style="background-image: url('https://www.fodors.com/wp-content/uploads/2019/04/TraditionalfoodsinJava__HERO_shutterstock_1161085942.jpg');">

    <form action="login_process.php" method="post" >
    <h2>LOGIN</h2>
     <label for="name">Username</label> 
    <input type="text" name="name" id="name" required value="">
    <label for="pass">Password</label>
    <input type="password" name="pass"  id = "pass" required value="">
    <button>Login</button>
    </form>

</body>
     

</html>