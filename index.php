<?php
    // Enable error reporting for debugging
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if (filter_has_var(INPUT_POST, 'submit')) {
        echo 'Submitted'; 
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-full" style="background-color: #121723;">
        <div class="container-fluid" style="background-color: #121723;">
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color: #121723;">
                <a class="navbar-brand mt-2 mt-lg-0" href="#">
                    <img src="images/file.png" height="100" width="auto" alt="MDB Logo" loading="lazy" style="padding-left: 10px;"/>
                </a>
            </div>
            <div class="d-flex align-items-center">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" style="padding: 20px;">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item" style="padding: 20px;">
                        <a class="nav-link" href="services.html">Services</a>
                    </li>
                    <li class="nav-item" style="padding: 20px;">
                        <a class="nav-link" href="portfolio.html">Portfolio</a>
                    </li>
                    <li class="nav-item" style="padding: 20px;">
                        <a class="nav-link" href="testimonial.html">Testimonials</a>
                    </li>
                    <li class="nav-item" style="padding: 20px;">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item" style="padding: 20px;">
                        <a class="nav-link" href="portal.html">Portal</a>
                    </li>
                    <li class="nav-item" style="padding: 20px;">
                        <a href="contact.html">
                            <button type="button" class="btn btn-outline-primary" href="contact.html">Contact Us</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="divider p-1" style="background-color: aqua; height: -2px; "></div>
    <div class="header" style="color:white;">
        <div class="aboutMe">
            <center>
            <br>
                <h1>Contact Us</h1>
                <br>
                <div class="container">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <label for="fname">First Name</label>
                        
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">
                        
                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                        
                        <label for="country">Country</label>
                        <select id="country" name="country">
                            <option value="australia">Australia</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                        </select>
                        
                        <label for="subject">Subject</label>
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                        <input type="submit" name="submit" value="Submit">
                    </form>
                </div>
                <br>
                <br>
            </center>
        </div>
    </div>
    <footer class="text-center text-lg-start bg-light text-muted">
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <div class="media">
                <a href="" class="socials">
                    <i class="fab fa-facebook-f"></i>
                    <img class="linkedIn" src="images/linkedIn.png"/>
                </a>
                <a href="" class="socials">
                    <i class="fab fa-twitter"></i>
                    <img class="linkedIn" src="images/linkedIn.png"/>
                </a>
                <a href="" class="socials">
                    <i class="fab fa-google"></i>
                    <img class="google" src="images/gmail.png"/>
                </a>
                <a href="" class="socials">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/in/daniel-stein-8a36b8276/" class="socials">
                    <i class="fab fa-linkedin"></i>
                    <img class="linkedIn" src="images/linkedIn.png"/>
                </a>
                <a href="" class="socials">
                    <i class="fab fa-github"></i>
                    <img class="linkedIn" src="images/linkedIn.png"/>
                </a>
            </div>
        </section>
        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Vector Graphics
                        </h6>
                        <p>
                            At Vector Graphics, we empower businesses by providing innovative solutions for 
                            showcasing their brand. 
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> Buford, GA 30519, US</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            danieljuliusstein@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> +1 678 697 1957</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Copyright:
            <a class="text-reset fw-bold" href="#">Vector Graphics</a>
        </div>
    </footer>
</body>
</html>
