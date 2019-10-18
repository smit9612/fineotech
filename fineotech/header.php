<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Fineotech Inc.</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/menu_sideslide.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/colors/preset.css" media="screen" />

    <!-- Styles  -->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />

    <script src='https://www.google.com/recaptcha/api.js'></script>


</head>

<body>
    <!-- Header Section Start -->
    <header class="header-text-color">
        <nav class="navbar navbar-expand-md fixed-top scrolling-navbar mainmenu-area">
            <div class="container">
                <a class="navbar-brand" href="/"> <img src="img/features/logo.png" alt="" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="lnr lnr-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link page-scroll nav-link-text" href="/#about">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll nav-link-text" href="/#services">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll nav-link-text work" href="/#team">WORK</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll nav-link-text contact" onClick="openNav()">CHAT WITH US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header Section End --> 

    <!-- Contact Section Start -->
    <section id="contact-form">
        <div id="mySidenav" class="sidenav">
            <section id="contact" class="contact-section">
                <div class="contact-form">
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col-md-8 col-sm-8">
                                <div class="contact-block">
                                    <p class="contact-email">info@fineotech.io</p>
                                    <p class="contact-address">36 King Street, 4th Floor, Toronto, ON, M5C 1E5</p>
                                </div>
                                <hr class="contact-hr">
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <a href="javascript:void(0)" onclick="closeNav()"><img src="img/features/closebtn.png"
                                        alt="Card image"></a>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="contact-text-block">
                                <p class="contact-text-1">Let's Chat</p>
                                <p class="contact-text-2">Tell us your ideas</p>
                            </div>
                        </div>

                        <div class="row pt-4 input-block-center">
                            <div class="contact-form-block">
                                <p class="contact-form-text">Get in touch?</p>
                            </div>
                            <div class="contact-form">
                                <form id="contactForm" method="post" class="contact-form-wrapper"
                                    enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control custome-input" id="name"
                                                    name="name" placeholder="Your Name" required
                                                    data-error="Please enter your name">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" placeholder="Email Address" id="email"
                                                    class="form-control custome-input" name="email" required
                                                    data-error="Please enter your email">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" placeholder="Country" id="subject"
                                                    class="form-control custome-input" name="subject" required
                                                    data-error="Please enter your subject">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group text-area-formgroup">
                                                <textarea class="form-control custome-input" id="message"
                                                    placeholder="Your Message" name="message" rows="11"
                                                    data-error="Write your message" required></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <button id="submit" type="submit" class="button-formgroup" class="submit">
                                                <img src="img/features/sendbtn.png" alt="Card image">
                                            </button>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="col-md-12 form-group text-left">
                                            <div class="g-recaptcha"
                                                data-sitekey="6Ldd3bsUAAAAADJcazsUG4c_dATOOpRUV_z_Bbi4"></div>
                                        </div>
                                    </div>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- Contact Section End -->