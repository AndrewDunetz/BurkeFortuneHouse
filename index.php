<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A family friendly sushi restaurant.">
        
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400&display=swap" rel="stylesheet"> 
        
        <title>Burke Fortune House</title>
    </head>
    <body>
        <header>
            <nav>
                <div class="row">
                    <ul class="main-nav js--main-nav">
                        <li><a href="#about">About</a></li>
                        <li><a href="resources/img/BurkeFortuneHouseMenu.pdf">Menu</a></li>
                        <li><a href="#order">Order</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                </div>
            </nav>
            <div class="hero-text-box">
                <h1>Burke Fortune House</h1>
            </div>
        </header>
        
        <section class="section-about js--section-about" id="about">
            <div class="row">
                <h2>About Us</h2>
                <p>
                    We are Burke Fortune House. A family owned sushi restaurant that will leave you smiling everytime. 
                    Our food is delicious and our atmosphere is family oriented. 
                </p>
            </div>
        </section>
        
        <section class="section-meals">
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/1.jpg" alt="Tuna roll">
                    </figure>
                </li>
                
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/2.jpg" alt="Simple italian pizza with cherry tomatoes">
                    </figure>
                </li>
                
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/3.jpg" alt="Chicken breast steak with vegetables">
                    </figure>
                </li>
                
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/4.jpg" alt="Autumn pumpkin soup">
                    </figure>
                </li>
            </ul>
            
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/5.jpg" alt="Paleo beef steak with vegetables">
                    </figure>
                </li>
                
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/6.jpg" alt="Healthy baguette with egg and vegetables">
                    </figure>
                </li>
                
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/7.jpg" alt="Burger with cheddar and bacon">
                    </figure>
                </li>
                
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/8.jpg" alt="Granola with cherries and strawberries">
                    </figure>
                </li>
            </ul>
        </section>
        
        <section class="section-form js--section-contact" id="contact">
            <div class="row">
                <h2>Contact Us</h2>
            </div>
            <div class="row">
                <form method="post" action="mailer.php" class="contact-form">

                    <div class="row">
                         <?php
                        if ($_GET['success'] == 1) {
                            echo "<div class=\"form-messages success\">Thank you! Your message has been sent.</div>";
                        }
                        
                        if ($_GET['success'] == -1) {
                            echo "<div class=\"form-messages error\">Oops! Something went wrong. Please try again!</div>"; 
                        }
                        ?>
                     </div>
                    
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="find-us">How did you find us?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select name="find-us" id="find-us">
                                <option value="friends" selected>Friends</option>
                                <option value="search">Search engine</option>
                                <option value="ad">Advertisement</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Newsletter</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="checkbox" name="news" id="news" checked> Yes, please
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Drop us a line</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Your message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Send it!">
                        </div>
                    </div>
                </form>
            </div>
        </section>
        
        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">iOS App</a></li>
                        <li><a href="#">Android App</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="https://www.facebook.com/Burke-Fortune-House-195764490464708/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="https://www.instagram.com/burke_fortune_house/" target="_blank"><i class="ion-social-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>
                    Copyright &copy; 2020 by BurkeFortuneHouse. All rights reserved.
                </p>
            </div>
        </footer>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/respond@0.9.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/selectivizr@1.0.3/selectivizr.min.js"></script>
    <script src="resources/js/script.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
        
    </body>

</html>
