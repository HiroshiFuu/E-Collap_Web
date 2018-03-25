<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.html';?>
</head>

<body>
    <?php include 'header.html';?>

    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <h2 class="page-title">Contact Us</h2>
            <ol class="breadcrumb">
                <li><a href="home.php">Home</a></li>
                <li class="active">Contact</li>
            </ol>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="cps-main-wrap">
        <!-- Service Box -->
        <div class="cps-section cps-section-padding cps-bottom-0" id="service-box">
            <div class="container">
                <div class="row">
                    <div class="cps-service-boxs">
                        <div class="col-sm-4">
                            <div class="cps-service-box">
                                <div class="cps-service-icon">
                                    <span class="ti-location-pin"></span>
                                </div>
                                <h4 class="cps-service-title">Address</h4>
                                <p class="cps-service-text">246, MacPherson Road, #02-02 Betime Building, Singapore 348578</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="cps-service-box">
                                <div class="cps-service-icon">
                                    <span class="ti-mobile"></span>
                                </div>
                                <h4 class="cps-service-title">Phone</h4>
                                <p class="cps-service-text">Tel: +65 67451519<br/>Mobile: +65 92321155</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="cps-service-box">
                                <div class="cps-service-icon">
                                    <span class="ti-email"></span>
                                </div>
                                <h4 class="cps-service-title">Email</h4>
                                <p class="cps-service-text">cy@e-collap.com<br />&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service Box End -->
        
        <!-- Location Map -->
        <div class="cps-section map-area" id="map-area">
            <div class="google-map office-location" id="location" data-lat="1.330019" data-lng="103.875928" data-zoom="18"></div>
        </div>
        <!-- Location Map End -->
        
        <!-- Contact -->
        <div class="cps-section cps-section-padding" id="cps-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-xs-12">
                        <div class="cps-section-header text-center">
                            <h3 class="cps-section-title">Get in Touch</h3>
                            <p class="cps-section-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <form id="contactForm" class="cps-contact-form style-2" action="#" method="post">
                            <div class="row">
                                <div class="col-md-4  col-sm-6">
                                    <input id="name" type="text" name="name" placeholder="Your Name">
                                    <input id="email" type="email" name="email" placeholder="Email">
                                    <input id="phone" type="tel" name="phone" placeholder="Phone">
                                </div>
                                <div class="col-md-8 col-sm-6">
                                    <textarea id="message" name="messge" placeholder="Your Message Here"></textarea>
                                    <button type="submit">Send</button>
                                </div>
                            </div>
                            <p class="input-success">Your message sent. Thanks for contacting.</p>
                            <p class="input-error">Sorry, something went wrong. try again later.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        
        <!-- Subscription -->
        <div class="cps-section cps-section-padding cps-theme-bg" id="subscription-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="cps-section-header text-center">
                            <h3 class="cps-section-title">Subscribe us</h3>
                            <p class="cps-section-text">Subscribe us if you are willing to get acknowledge what we are doing. Know about the most update work and many more. We will not share your email with any third party or will not make any spam mail</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <form id="subscription" class="cps-subscription" action="#" method="post">
                            <input type="email" name="email" placeholder="Enter your email here">
                            <button type="submit"><i class="fa fa-paper-plane"></i></button>
                            <p class="newsletter-success"></p>
                            <p class="newsletter-error"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscription End -->
    </div>

    <?php include 'footer.html';?>
    <?php include 'scripts.html';?>
</body>

</html>
