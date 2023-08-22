<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="vendors-dark/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors-dark/css/grid.css">
        <link rel="stylesheet" type="text/css" href="resources-dark/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources-dark/css/queries.css">
        <link rel="stylesheet" type="text/css" href="vendors-dark/css/animate.css">
        <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Miriam+Libre:wght@400;700&family=Mukta+Vaani:wght@400;500;600&display=swap" rel="stylesheet">
        <title>Cyclingo</title>
        <link rel="apple-touch-icon" sizes="180x180" href="resources-dark/favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="resources-dark/favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="resources-dark/favicon_io/favicon-16x16.png">
        <link rel="manifest" href="resources-dark/favicon_io/site.webmanifest">
    </head>



    <body>

        <header>
            <nav>
                <div class="row">
                    <img src="resources-dark/css/img/logo.png" alt="Cyclingo logo" class="logo">
                    <ul class="main-nav js--main-nav">
                        <li><a href="index.php#products">Products</a></li>
                        <li><a href="index.php#theapp">The app</a></li>
                        <li><a href="index.php#team">Team</a></li>
                        <li><a href="login.php#contact">Contact</a></li>
                        <li><a href="logout.inc.php">Log out</a></li>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><ion-icon name="menu"></ion-icon></a>
                </div>
            </nav>


            
            <section class="section-login">
                <div class="row">
                    <h2>Log In</h2>
                </div>
                <form action="includes/login.inc.php" method="post" class="login-form">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="name">Username/Email</label>
                        </div>
                        <div class="row span-2-of-3">
                            <input type="text" name="uid" placeholder="Username/Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="password">Password</label>
                        </div>
                        <div class="row span-2-of-3">
                            <input type="password" name="pwd" placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="row span-1-of-3">
                            <input type="submit" value="Submit">
                        </div>
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                    </div>
                </form>
                <?php
                    if(isset($_GET["error"])) {
                        if ($_GET["error"] == "emtyimput") {
                            echo "<p>Fill in all fields!</p>";
                        }
                        else if($_GET["error"] == "wronglogin") {
                            echo "<p>Wrong username or password!<p>";
                        }
                    }
                ?>
            </section>
        </header>
        
        <footer id="contact">
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">IOS App</a></li>
                        <li><a href="#">Android App</a></li>
                    </ul>
                </div>

                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="https://www.facebook.com/cyclingo.official" target="_blank"><ion-icon name="logo-facebook" class="facebook-logo"></ion-icon></a></li>
                        <li><a href="https://www.instagram.com/cyclin.go/" target="_blank"><ion-icon name="logo-instagram" class="instagram-logo"></ion-icon></a></li>
                        <li><a href="https://youtu.be/b4uC4AZ-53U" target="_blank"><ion-icon name="logo-youtube" class="youtube-logo"></ion-icon></a></li>

                    </ul>
                </div>
            </div>

            <div class="row">
                <p>Copyright &copy; 2021 by Cyclingo. All rights reserved.</p>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
        <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
        <script src="resources/js/script.js"></script>
        <script src="vendors/js/jquery.waypoints.min.js"></script>
    </body>
</html>
