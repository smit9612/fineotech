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


</head>


<body>
    <header class="header-text-color">
        <nav class="navbar navbar-expand-md fixed-top scrolling-navbar mainmenu-area">
            <div class="container">
                <a class="navbar-brand" href="index.php"> <img src="img/features/logo.png" alt="" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="lnr lnr-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link page-scroll nav-link-text" href="#about">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll nav-link-text" href="#services">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll nav-link-text work" href="#team">WORK</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll nav-link-text contact" onClick="openNav()">CHAT WITH US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <section id="contact-form">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <section id="contact" class="contact-section">
                <div class="contact-form">
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col-md-9">
                                <div class="contact-block">
                                    <div class="section-header">
                                        <h2 class="section-title">Contact <span>Us</span></h2>
                                        <hr class="lines">
                                    </div>
                                    <form id="contactForm" action="./send_form_email.php">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        placeholder="Your Name" required
                                                        data-error="Please enter your name">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Your Email" id="email"
                                                        class="form-control" name="email" required
                                                        data-error="Please enter your email">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Subject" id="msg_subject"
                                                        class="form-control" name="msg_subject" required
                                                        data-error="Please enter your subject">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" id="message"
                                                        placeholder="Your Message" name="message" rows="11"
                                                        data-error="Write your message" required></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="submit-button text-center">
                                                    <button class="btn btn-common" id="submit" type="submit">Send
                                                        Message</button>
                                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>