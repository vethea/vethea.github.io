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
            <div class="container">
                <a class="navbar-brand" href="#"><img src="imgs/lg.png" alt="#" /></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="show-menu">
                    <ul class="navbar-nav ml-auto">
                <a href="login.php" class="text-uppercase"><i class="far fa-user"></i> Login </a> 
                    </ul>
                </div>
            </div>
        </nav>
        

        <header id="home">
            <div class="overlay">
                <div class="container">
                    <div>
                        <h1><span>THE RESTO</span><br> Javanese Fine Dining </h1>
                        <p>THE RESTO is a fine dining restaurant seeking to give customers a rich, authentic experience in local Javanese cuisine. Our establishment’s best interest is to serve complete culinary courses from the heart of West Java while providing the highest quality and accommodation. </p>
                    <button>  <li class="nav-item"> <a href="reg.php" class="text-uppercase">Register now!</a> </li> <button>
                    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="first"></div>
                <div class="second"></div>
            </div>
        </div>

        <footer>
            <div class="copyright text-center">
                <p>Copyright 2024  Design by <a href="https://html.design"> Jane Nathan Verissa </a></p>
            </div>
        </footer>
        
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(function () {
                
                'use strict';
                
                var winH = $(window).height();
                
                $('header').height(winH);  
                
                $('header .container > div').css('top', (winH / 2) - ( $('header .container > div').height() / 2));
                
                $('.navbar ul li a.search').on('click', function (e) {
                    e.preventDefault();
                });
                $('.navbar a.search').on('click', function () {
                    $('.navbar form').fadeToggle();
                });
                
                $('.navbar ul.navbar-nav li a').on('click', function (e) {
                    
                    var getAttr = $(this).attr('href');
                    
                    e.preventDefault();
                    $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
                });
            })
        </script>
    </body>
    </html>