<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Miriam+Libre:wght@400;700&family=Mukta+Vaani:wght@400;500;600&display=swap" rel="stylesheet">
        <title>Cyclingo</title>
        <link rel="apple-touch-icon" sizes="180x180" href="resources/favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="resources/favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="resources/favicon_io/favicon-16x16.png">
        <link rel="manifest" href="resources/favicon_io/site.webmanifest">

    </head>



    <body>

        <header>
            <nav>
                <div class="row">
                    <img src="resources/css/img/logo.png" alt="Cyclingo logo" class="logo">
                    <ul class="main-nav js--main-nav">
                        <li><a href="#products">Products</a></li>
                        <li><a href="#theapp">The app</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <?php
                            if (isset($_SESSION["userid"])) {
                                echo "<li><a href=\"logout.php\">Log out</a></li>";
                            }
                            else {
                                echo "<li><a href=\"login.php\">Log in</a></li>";
                            }
                        ?>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><ion-icon name="menu"></ion-icon></a>
                </div>
            </nav>

            <div class="hero-text-box">
                <h1>For your safety</h1>
                <div class="row">
                    <p class="long-copy-white">
                        Innovative solutions for urban traffic
                    </p>
                </div>
                <a class="btn btn-full js--scroll-to-form" href="#form">Add to wishlist</a>
            </div>
        </header>


        <section class="section-description js--section-description">
            <div class="row">
                <h2>What is CyclinGo?</h2>
                <p class="long-copy">
                    CyclinGo is a startup meant to innovate safety and traffic advertising.
                </p>
            </div>
            <div class="row">
                <div class=" description-box">
                    <div class="col span-1-of-2 js--wp-3">
                        <div class="description-text-box-hard">
                            <h3>The Vest</h3>
                            <p class="long-copy">
                                The hardware part is represented by an intelligent signaling system for cyclists in the form of a vest with LEDs.
                            </p>
                        </div>
                    </div>
                    <div class="col span-1-of-2 box js--wp-5">
                        <img src="resources/css/img/hard.jpg" alt="Hardware Component">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="description-box">
                    <div class="col span-1-of-2 box js--wp-4">
                        <div class="description-box-img-app">
                            <img src="resources/css/img/app.png" alt="Software Component">
                        </div>
                    </div>
                    <div class="col span-1-of-2 js--wp-3">
                        <div class="description-text-box-app">
                            <h3>The App</h3>
                            <p class="long-copy">
                                From the app, it can be customized and managed.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section  class="section-hard" id="thehard">
            <div class="row">
                <h2>What does the system display?</h2>
            </div>

            <div class="row">
                <p class="long-copy">During movement, when it is not necessary to display the signaling, users can display logos or promotional messages.</p>
            </div>

            <ul class="display-showcase clearfix">
                <li>
                    <figure class="display-photo">
                        <img src="resources/css/img/left.jpg" alt="Left signaling">
                    </figure>
                    <p class="long-copy">Left signaling</p>
                </li>

                <li>
                    <figure class="display-photo">
                        <img src="resources/css/img/break.jpg" alt="Break signaling">
                    </figure>
                    <p class="long-copy">Break signaling</p>
                </li>

                <li>
                    <figure class="display-photo">
                        <img src="resources/css/img/right.jpg" alt="Right signaling">
                    </figure>
                    <p class="long-copy">Right signaling</p>
                </li>
            </ul>
        </section>



        <section class="section-steps" id="theapp">
            <div class="row">
                <h2>How does it work? &mdash; Simple as 1, 2, 3</h2>
            </div>

            <div class="row">
                <div class="col span-1-of-2 steps-box">
                    <img src="resources/css/img/app.png" alt="Cyclingo app on iPhone" class="app-screen js--wp-2">
                </div>

                <div class="col span-1-of-2 steps-box">
                    <div class="works-step">
                        <div>1</div>
                        <p>Put the vest on your back or on a backpack.</p>
                    </div>

                    <div class="works-step">
                        <div>2</div>
                        <p>Connect and start it from the app.</p>
                    </div>

                    <div class="works-step">
                        <div>3</div>
                        <p>Enjoy your ride and see you next time!</p>
                    </div>

                    <a href="#" class="btn-app"><img src="resources/css/img/download-app.svg" alt="App Store Button"></a>
                    <a href="#" class="btn-app"><img src="resources/css/img/download-app-android.png" alt="Play Store Button"></a>
                </div>
            </div>
        </section>



        <section class="section-team" id="team">
            <ul class="team-showcase clearfix">
                <li>
                    <figure class="team8-photo">
                        <img src="resources/css/img/biris.png" alt="Radu Ionut Biris & Andreea Bucur">
                    </figure>
                </li>

                <li>
                    <figure class="team8-photo">
                        <img src="resources/css/img/bobo.png" alt="Cornel Iustin Buda">
                    </figure>
                </li>

                <li>
                    <figure class="team8-photo">
                        <img src="resources/css/img/andru.png" alt="Alexandru Dan">
                    </figure>
                </li>

                <li>
                        <figure class="team8-photo">
                            <img src="resources/css/img/teo.png" alt="Teodora Nemes">
                    </figure>
                </li>

                <li>
                    <figure class="team8-photo">
                        <img src="resources/css/img/matei.png" alt="Radu Matei Prodan">
                    </figure>
                </li>
            </ul>
        </section>



        <section class="section-features">
            <div class="row">
                <h2>Why should you choose us?</h2>
                <div class="row js--wp-1">
                    <div class="col span-1-of-4 box">
                        <ion-icon name="hardware-chip-outline" class="icon-big"></ion-icon>
                        <h3>Innovation</h3>
                        <p>Automatic interpretation of movements</p>
                    </div>

                    <div class="col span-1-of-4 box">
                        <ion-icon name="attach-outline" class="icon-big"></ion-icon>
                        <h3>Usability</h3>
                        <p>Easy to attach on your back</p>
                    </div>

                    <div class="col span-1-of-4 box">
                        <ion-icon name="shield-half-outline" class="icon-big"></ion-icon>
                        <h3>Safety</h3>
                        <p>High visibility in traffic</p>
                    </div>

                    <div class="col span-1-of-4 box">
                        <ion-icon name="megaphone-outline" class="icon-big"></ion-icon>
                        <h3>Advertisement</h3>
                        <p>The ability to display logos and messages</p>
                    </div>
                </div>
            </div>
        </section>



        <section class="section-plans js--section-plans" id="products">
            <div class="row">
                <h2>Start riding safe today</h2>
            </div>
            <div class="row">
                <p class="long-copy">Choose the best product for your needs.</p>
            </div>
            <div class="row">
                <div class="col span-1-of-2 js--wp-4">
                    <div class="plan-box">
                        <div>
                            <p class="plan-price">Premium</p>
                        </div>
                        <div>
                            <ul>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>LCD display</li>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>8 hours battery life</li>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>advertising options</li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-full">Add to wishlist</a>
                        </div>
                    </div>
                </div>

                <div class="col span-1-of-2 js--wp-5">
                    <div class="plan-box">
                        <div>
                            <p class="plan-price">Standard</p>
                        </div>
                        <div>
                            <ul>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>LED display</li>
                                <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>4 hours battery life</li>
                                <li><ion-icon name="close-outline" class="icon-small"></ion-icon>advertising options</li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-full">Add to wishlist</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="section-cities">
            <div class="row">
                <h2>Stay tuned for us in</h2>
            </div>

            <div class="row js--wp-3">
                <div class="col span-1-of-2 box">
                    <img src="resources/css/img/cluj.jpg" alt="Cluj-Napoca">
                    <h3>Cluj-Napoca</h3>
                </div>

                <div class="col span-1-of-2 box">
                    <img src="resources/css/img/bucuresti.jpg" alt="Bucharest">
                    <h3>Bucharest</h3>
                </div>
            </div>
        </section>



        <section class="section-form" id="form">
            <div class="row">
                <h2>We're happy to hear from you</h2>
            </div>

            <div class="row">
                <?php
                    if($_GET['success'] == 1) {
                        echo "<div class=\"form-messages success\">Thank you! Your message has been sent.</div>";
                    }
                    if($_GET['success'] == -1) {
                        echo "<div class=\"form-messages error\">Oops! Something went wrong. Please try again!</div>";
                    }
                ?>
            </div>

            <div class="row">
                <form method="post" action="mailer.php" class="contact-form">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="row span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="row span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="find-us">How did you find us?</label>
                        </div>
                        <div class="row span-2-of-3">
                            <select name="find-us" id="find-us">
                                <option value="facebook">Facebook</option>
                                <option value="instagram">Instagram</option>
                                <option value="friens">Friends</option>
                                <option value="search">Search engine</option>
                                <option value="ad" selected>Advertisement</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="news">Newsletter?</label>
                        </div>
                        <div class="row span-2-of-3">
                            <input type="checkbox" name="news" id="news" checked> Yes,please
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Drop us a message</label>
                        </div>
                        <div class="row span-2-of-3">
                            <textarea name="message" placeholder="Your message"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="row span-2-of-3">
                            <input type="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </section>
        


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