<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>THE RESTO</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
            <form action="login.php" method="POST">
            <input type="submit" value="login">
            </form>
            <div class="container">
                <a class="navbar-brand" href="#"><img src="imgs/lg.png" alt="#" /></a>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="show-menu">
                    <ul class="navbar-nav ml-auto">    
               <a href="login.php" class="text-uppercase"><i class="far fa-user"></i> Login</a>   
                    </ul>
                </div>
            </div>
        </nav>

        <div class="contact" id="contact">
            <div class="violet-overlay">
                <div class="container">
                    <h2 class="text-center">Registration</h2>
                    <div class="contact-form">
                      <form action="reg_process.php" method= "post" autocomplete="off">
                            <input type="text" placeholder="Username" name="name" required value="">
                            <input type="email" placeholder="Email" name="email" required value="">
                            <input type="text" placeholder="Phone" name="phone" required value="">
                            <input type="password" placeholder="Password" name="pass" required value="">
                            <input type="submit" name = "submit">
    
                        </form>                     
                    </div>
                </div>
            </div>
        </div>
<footer>
            <div class="container">
                <ul>
                    
                </ul>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="item">

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="item">
                            <ul>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="item date">
                            
                        </div>
                    </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright text-center">
                <p>Copyright 2024  Design by <a href="https://html.design"> Jane Nathan Verissa </a></p>
            </div>
        </footer>
    </body>
    </html>