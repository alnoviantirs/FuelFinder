<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Contact Us - Aplikasi Pemetaan Lokasi SPBU Pertamina di Bandung.</title>
    <!-- Meta tags, link tags, etc. -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
  
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Contact Us</h1>
                    </div>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section id="contact-us" class="contact-us section">
        <div class="container">
            <div class="contact-head wow fadeInUp" data-wow-delay=".4s">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title wow zoomIn" data-wow-delay=".2s">
                            <h3>Contact</h3>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">We’d Love To Help You</h2>
                        </div>
                    </div>
                </div>
                <!-- Contact Form -->
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form id="contact-form" method="post" action="your_form_handler.php" class="text-center">
                            <!-- Add your form fields here -->
                            <div class="form-group">
                                <label for="name"><i class="fas fa-user"></i> Your Name</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="fas fa-envelope"></i> Your Email</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="message"><i class="fas fa-comment"></i> Your Message</label>
                                <textarea id="message" name="message" class="form-control" rows="6" required></textarea>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary wow fadeInUp" data-wow-delay=".6s">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="map-section">
        <div class="map-container">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <!-- Google Map iframe -->
                    <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://123movies-to.com">123movies old site</a>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 500px;
                            width: 100%;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 500px;
                            width: 100%;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <!-- Footer content, including logo, company info, and social links -->
            </div>
        </div>

        <div class="footer-newsletter">
            <div class="container">
                <div class="inner-content">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-5 col-12">
                            <div class="title">
                                <h3>Subscribe to our newsletter</h3>
                                <p>The latest news, articles, and resources, sent to your inbox weekly.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7 col-12">
                            <div class="form">
                                <form action="#" method="get" target="_blank" class="newsletter-form">
                                    <input name="EMAIL" placeholder="Your email address" type="email">
                                    <div class="button">
                                        <button class="btn">Subscribe<span class="dir-part"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- Script tags -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
