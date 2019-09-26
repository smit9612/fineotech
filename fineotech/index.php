<?php require './header.php'?>

<!-- Header Section Start -->
<header id="slider-area">
    <!-- <div class="menu-wrap">
        <nav class="menu">
            <div class="icon-list navbar-collapse">
                <div class="about-info">
                    <h3 class="sidebar-title">About</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sequi ducimus. Voluptate ab esse
                        maiores
                        corporis.</p>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#">Purchase Now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#">Support</a>
                    </li>
                </ul>
            </div>
        </nav>
        <button class="close-button" id="close-button"><i class="lnr lnr-cross"></i></button>
    </div> -->

    <nav class="navbar navbar-expand-md fixed-top scrolling-navbar mainmenu-area">
        <div class="container">
            <a class="navbar-brand" href="index.php"><span class="lnr lnr-diamond"></span> Fineotech Inc.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="lnr lnr-menu"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link page-scroll nav-link-text" href="#slider-area">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll nav-link-text" href="#services">SERVICES</a>
                    </li>
                    <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="#features">Features</a>
              </li>                             -->
                    <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="#portfolios">Works</a>
              </li>             -->
                    <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="#pricing">Pricing</a>
              </li>  -->
                    <li class="nav-item">
                        <a class="nav-link page-scroll nav-link-text work pr-5" href="#team">WORK</a>
                    </li>
                    <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="#blog">Blog</a>
              </li>  -->
                    <li class="nav-item">
                        <a class="nav-link page-scroll nav-link-text contact" href="#contact">CONTACT</a>
                    </li>

                    <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="#subscribe">Subscribe</a>
              </li> -->
                    <!-- <li class="nav-item">
                <button class="menu-button" id="open-button"><i class="lnr lnr-menu"></i></button>
              </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Carousel Section -->
    <div id="carousel-area">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-slider" data-slide-to="1"></li>
                <li data-target="#carousel-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="img/slider/Scale.png" alt="">
                    <!-- <div class="carousel-caption">
                <h1>Ultimate Solution for Your<br>Problem</h1>
                <p>The integration of information, design, and technology</p>
              </div> -->
                    <!--<a href="#why" class="btn btn-lg btn-border">GET STARTED!</a>-->
                </div>
                <div class="carousel-item">
                    <img src="img/slider/Secure.png" alt="">
                    <!-- <div class="carousel-caption">
                <h1 class="text-center">We Promise You'll Be<br>Impressed With Fineotech</h1>
                <p>Fineotech provides technology for Innovators</p>
              </div> -->
                    <!-- <a href="#" class="btn btn-lg btn-common">Download</a>-->
                </div>
                <div class="carousel-item">
                    <img src="img/slider/Swift.png" alt="">
                    <!-- <div class="carousel-caption">
                <h1>You’ve got questions,<br>we’ve got answers</h1>
                <p>Sometimes the best way to envision the future is to invent it</p>
              </div> -->
                    <!-- <a href="#" class="btn btn-lg btn-common">Download</a>
               <a href="#" class="btn btn-lg btn-border">Learn More</a>-->
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
                <i class="lnr  lnr-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
                <i class="lnr  lnr-arrow-right"></i>
            </a>
        </div>
    </div>

</header>
<!-- Header Section End -->
<!-- Who We Are Section start -->
<section id="about" class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12">
                <div>
                    <img class="img-fluid about-img" src="img/features/whoarewe.png" alt="">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div>
                    <p class="about-text">We define technology with innovation, quality and versatility. Our digital
                        solutions
                        are designed to
                        provide a secure business environment in an effective and efficient manner.<br><br>
                        Our key strength is our ability to maintain the highest levels of security certifications across
                        platforms.Our full-stack software developers are proficient in handling the entire lifecycle of
                        your
                        product, right
                        from planning & strategy, UI/UX, app development, quality analysis testing to final product
                        deployment. We
                        deliver customized, scalable solutions to develop secure, high-end web and mobile solutions.</p>
                </div>
                <div class="about-btn">
                    <button type="button" class="btn btn-round-lg btn-lg">CHAT WITH US</button>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12">
                    <img class="img-fluid" src="img/features/Group.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Who We Are Section end -->

<!-- Services Section Start -->
<section id="services" class="section">
    <div class="container">
        <div class="section-header">
            <p class="section-title"><span>Our Services
                </span></p>
            <p class="section-subtitle">Our services are a
                blend
                of rigidity and flexibility.<br>
                Fineotech Inc. provides cutting - edge custom software development services to all our valued
                clients.<br></p>
        </div>

        <div class="row ">
            <div class="col-md-4 col-sm-6 d-flex">
                <div class="item-boxes" data-wow-delay="1s">
                    <div class="py-4">
                        <img class="img-fluid" src="img/features/Web App Devepment.png" alt="">
                    </div>
                    <h4>Web App<br>Development</h4>
                    <p>We deliver tangible results with our client focused and customer-centric approach. Our web
                        solutions are designed to help enterprises and customers securely navigate through the digital
                        terrain. </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 d-flex">
                <div class="item-boxes" data-wow-delay="0.2s">
                    <div class="services-img py-4">
                        <img class="img-fluid" src="img/features/Mobile App Development.png" alt="">
                    </div>
                    <h4>Mobile App<br>Development</h4>
                    <p>Our extensive expertise and in-depth technical knowhow help us develop feature packed native
                        mobile applications that are high performing, secure, digitally transformative.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 d-flex">
                <div class="item-boxes" data-wow-delay="0.4s">
                    <div class="services-img py-4">
                        <img class="img-fluid" src="img/features/Group 10642.png" alt="">
                    </div>
                    <h4>Cloude & Integration<br>Services</h4>
                    <p>Our system integration experts design solutions to make enterprises efficient as well as better
                        connected. We deliver high-end business outcomes with the right blend of innovation, process and
                        IT stacks.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<section id="tech" class="tech py-5">
    <div class="container after">
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12">
                <div class="text-left">
                    <div class="tech-header">
                        <p class="tech-header-text">We Invest in Emerging Tech</p><br>
                    </div>
                    <div class="tech-body">
                        <p class="tech-body-text-1">We as a team at Fineotech, have experience in building disruptive
                            solutions since last 10
                            years
                            and
                            now are
                            ready to challenge ourselves with solutions trending in the emerging technologies. We are
                            now
                            aiming
                            at
                            building solutions that are not just Smart, but Swift & Secure using the best in breed
                            technology.
                        </p>
                    </div>
                    <div class="tech-body">
                        <p class="tech-body-text-2">We are engaging in opportunities fields and <br>concepts of the
                            future.<br> Let’s explore these possibilities together</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="align-items-center tech-part-2 text-center">
                    <div class="col-md-3 col-sm-6">
                        <div class="tech-img">
                            <img class="img-fluid" src="img/features/Internet of Things.png" alt="">
                        </div>
                        <p class="tech-part-2-text">Internet Of Things</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="tech-img">
                            <img class="img-fluid" src="img/features/Machine Learning.png" alt="">
                        </div>
                        <p class="tech-part-2-text">Machine Learning</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="tech-img">
                            <img class="img-fluid" src="img/features/Big Data.png" alt="">
                        </div>
                        <p class="tech-part-2-text">Big Data</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="tech-img">
                            <img class="img-fluid" src="img/features/Business Intelligence.png" alt="">
                        </div>
                        <p class="tech-part-2-text">Business Intelligence</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section id="analysis" class="analysis">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="analysis-img">
                    <img class="img-fluid" src="img/features/illustration.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section Start -->
<!-- <section id="features" class="section" data-stellar-background-ratio="0.2">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Amazing <span>Features</span></h2>
          <hr class="lines">
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> nibh euismod tincidunt ut laoreet dolore magna.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="content-left text-right">
              <div class="box-item left">
                <span class="icon">
                  <i class="lnr lnr-rocket"></i>
                </span>
                <div class="text">
                  <h4>Bootstrap 4 Based</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
              </div>
              <div class="box-item left">
                <span class="icon">
                  <i class="lnr lnr-laptop-phone"></i>
                </span>
                <div class="text">
                  <h4>Fully Responsive</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
              </div>
              <div class="box-item left">
                <span class="icon">
                  <i class="lnr lnr-cog"></i>
                </span>
                <div class="text">
                  <h4>HTML5, CSS3 & LESS</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="show-box">
              <img src="img/features/feature.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="content-right text-left">
              <div class="box-item right">
                <span class="icon">
                  <i class="lnr lnr-select"></i>
                </span>
                <div class="text">
                  <h4>4 Variations</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
              </div>
              <div class="box-item right">
                <span class="icon">
                  <i class="lnr lnr-magic-wand"></i>
                </span>
                <div class="text">
                  <h4>Feature-rich Sections</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
              </div>
              <div class="box-item right">
                <span class="icon">
                  <i class="lnr lnr-spell-check"></i>
                </span>
                <div class="text">
                  <h4>Ajax Contact Form</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
<!-- Features Section End -->

<!-- Start Video promo Section
    <section class="video-promo section" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
              <div class="video-promo-content text-center">
                <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Our Introductory Video</h2>
                <p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Learn more about us, its only 30mins</p>
                <a href="https://www.youtube.com/watch?v=r44RKWyfcFw" class="video-popup"><i class="lnr lnr-film-play"></i></a>
              </div>
          </div>
        </div>
      </div>
    </section>
    End Video Promo Section -->
<!-- <section id="portfolios" class="section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Our <span>Works</span></h2>
          <hr class="lines">
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> nibh euismod tincidunt ut laoreet dolore magna.</p>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="controls text-center">
              <a class="filter active btn btn-common" data-filter="all">
                All
              </a>
              <a class="filter btn btn-common" data-filter=".design">
                Design
              </a>
              <a class="filter btn btn-common" data-filter=".development">
                Development
              </a>
              <a class="filter btn btn-common" data-filter=".print">
                Print
              </a>
            </div>
          </div>
          <div id="portfolio" class="row">
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development print">
              <div class="portfolio-item">
                <div class="shot-item">
                  <a class="overlay lightbox" href="img/portfolio/img1.jpg">
                    <img src="img/portfolio/img1.jpg" alt="" />
                    <i class="lnr lnr-plus-circle item-icon"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix design print">
              <div class="portfolio-item">
                <div class="shot-item">
                  <a class="overlay lightbox" href="img/portfolio/img2.jpg">
                    <img src="img/portfolio/img2.jpg" alt="" />
                    <i class="lnr lnr-plus-circle item-icon"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
              <div class="portfolio-item">
                <div class="shot-item">
                  <a class="overlay lightbox" href="img/portfolio/img3.jpg">
                    <img src="img/portfolio/img3.jpg" alt="" />
                    <i class="lnr lnr-plus-circle item-icon"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development design">
              <div class="portfolio-item">
                <div class="shot-item">
                  <a class="overlay lightbox" href="img/portfolio/img4.jpg">
                    <img src="img/portfolio/img4.jpg" alt="" />
                    <i class="lnr lnr-plus-circle item-icon"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
              <div class="portfolio-item">
                <div class="shot-item">
                  <a class="overlay lightbox" href="img/portfolio/img5.jpg">
                    <img src="img/portfolio/img5.jpg" alt="" />
                    <i class="lnr lnr-plus-circle item-icon"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix print design">
              <div class="portfolio-item">
                <div class="shot-item">
                  <a class="overlay lightbox" href="img/portfolio/img6.jpg">
                    <img src="img/portfolio/img6.jpg" alt="" />
                    <i class="lnr lnr-plus-circle item-icon"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
<!-- Start Pricing Table Section
    <div id="pricing" class="section pricing-section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Pricing <span>Plans</span></h2>
          <hr class="lines">
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> nibh euismod tincidunt ut laoreet dolore magna.</p>
        </div>

        <div class="row pricing-tables">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-table table-left">
              <div class="icon">
                <i class="lnr lnr-rocket"></i>
              </div>
              <div class="pricing-details">
                <h2>Starter Plan</h2>
                <span>Free</span>
                <ul>
                  <li>Consectetur adipiscing</li>
                  <li>Nunc luctus nulla et tellus</li>
                  <li>Suspendisse quis metus</li>
                  <li>Vestibul varius fermentum erat</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-common">Get Plan</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-table">
              <div class="icon">
                <i class="lnr lnr-heart"></i>
              </div>
              <div class="pricing-details">
                <h2>Popular Plan</h2>
                <span>$3.99</span>
                <ul>
                  <li>Consectetur adipiscing</li>
                  <li>Nunc luctus nulla et tellus</li>
                  <li>Suspendisse quis metus</li>
                  <li>Vestibul varius fermentum erat</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-common">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-table table-left">
              <div class="icon">
                <i class="lnr lnr-magic-wand"></i>
              </div>
              <div class="pricing-details">
                <h2>Premium Plan</h2>
                <span>$9.50</span>
                <ul>
                  <li>Consectetur adipiscing</li>
                  <li>Nunc luctus nulla et tellus</li>
                  <li>Suspendisse quis metus</li>
                  <li>Vestibul varius fermentum erat</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-common">Buy Now</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
     End Pricing Table Section -->

<!-- Counter Section Start
    <div class="counters section" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="facts-item">
              <div class="icon">
                <i class="lnr lnr-magic-wand"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">100</span>%</h3>
                <h4>Faster</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="facts-item">
              <div class="icon">
                <i class="lnr lnr-coffee-cup"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">700</span></h3>
                <h4>Cup of Coffee</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="facts-item">
              <div class="icon">
                <i class="lnr lnr-user"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">10000</span>+</h3>
                <h4>Active Clients</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="facts-item">
              <div class="icon">
                <i class="lnr lnr-heart"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">1689</span></h3>
                <h4>Peoples Love</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    Counter Section End -->

<!-- testimonial Section Start n">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="touch-slider owl-carousel owl-theme">
              <div class="testimonial-item">
                <img src="img/testimonial/customer1.png" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p>Morbi eget dictum enim. Praesent sed quam sit amet lorem tempor rhoncus. <br>In hac habitasse platea dictumst. Vivamus in accumsan ex</p>
                  <h3>Johnathan Doe</h3>
                  <span>Marketing Head Matrix media</span>
                </div>
              </div>
              <div class="testimonial-item">
                <img src="img/testimonial/customer2.png" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p>Morbi eget dictum enim. Praesent sed quam sit amet lorem tempor rhoncus. <br>In hac habitasse platea dictumst. Vivamus in accumsan ex</p>
                  <h3>Oidila Matik</h3>
                  <span>President Lexo Inc</span>
                </div>
              </div>
              <div class="testimonial-item">
                <img src="img/testimonial/customer3.png" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p>Morbi eget dictum enim. Praesent sed quam sit amet lorem tempor rhoncus. <br>In hac habitasse platea dictumst. Vivamus in accumsan ex</p>
                  <h3>- Alex Dattilo</h3>
                  <span>CEO Optima Inc</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    testimonial Section Start -->

<!-- Download Section Start
    <section id="download" class="section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title"><span>Download</span> Our App</h2>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="download-area text-center">
                <a href="#" class="btn btn-border"><i class="fa fa-apple"></i>Download Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
     Download Section End -->

<!-- <section id="team" class="section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Our <span>Team</span></h2>
        <hr class="lines">
        <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> nibh
          euismod tincidunt ut laoreet dolore magna.</p>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="single-team">
            <img src="img/team/team1.png" alt="">
            <div class="team-details">
              <div class="overlay"></div>
              <div class="team-inner">
                <h4 class="team-title">Smitesh Patel</h4>
                <p>Chief Technical Officer</p>
                <ul class="social-list"> -->
<!-- <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
<!-- <li class="linkedin"><a href="https://www.linkedin.com/in/smitesh-patel-ab46136"><i
                        class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="single-team">
            <img src="img/team/team2.png" alt="">
            <div class="team-details">
              <div class="overlay"></div>
              <div class="team-inner">
                <h4 class="team-title">Visha Shanghvi</h4>
                <p>Cheif Executive Officer</p>
                <ul class="social-list"> -->
<!-- <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
<!-- <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div id="clients" class="section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Clients</h2>
      </div>
      <div class="row" id="clients-scroller">
        <div class="client-item-wrapper">
          <img src="img/clients/td.png" alt="">
        </div>
        <div class="client-item-wrapper">
          <img src="img/clients/abc.png" alt="">
        </div>
        <div class="client-item-wrapper">
          <img src="img/clients/rogers.png" alt="">
        </div>
        <div class="client-item-wrapper">
          <img src="img/clients/disney.png" alt="">
        </div>
      </div>
    </div>
  </div> -->

<!-- Blog Section
    <section id="blog" class="section">
      Container Starts
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Latest <span>Blogs</span></h2>
          <hr class="lines">
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> nibh euismod tincidunt ut laoreet dolore magna.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
            Blog Item Starts
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="img/blog/img1.jpg" alt="">
                </a>
              </div>
              <div class="blog-item-text">
                <h3>
                <a href="single-post.html">How often should you tweet?</a>
                </h3>
                <div class="meta-tags">
                  <span class="date"><i class="lnr lnr-calendar-full"></i>on Mar 23, 2018</span>
                  <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 24 Comments</a></span>
                </div>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
                </p>
                <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            Blog Item Wrapper Ends
          </div>

          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
             Blog Item Starts
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="img/blog/img2.jpg" alt="">
                </a>
              </div>
              <div class="blog-item-text">
                <h3>
                  <a href="single-post.html">Content is still king</a>
                </h3>
                <div class="meta-tags">
                  <span class="date"><i class="lnr lnr-calendar-full"></i>on Mar 29, 2018</span>
                  <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 24 Comments</a></span>
                </div>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
                </p>
                <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            Blog Item Wrapper Ends

          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
             Blog Item Starts
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="img/blog/img3.jpg" alt="">
                </a>
              </div>
              <div class="blog-item-text">
                <h3>
                  <a href="single-post.html">Social media at work</a>
                </h3>
                <div class="meta-tags">
                  <span class="date"><i class="lnr lnr-calendar-full"></i>on Mar 21, 2018</span>
                  <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 24 Comments</a></span>
                </div>
                <p>
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
                </p>
                <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
             Blog Item Wrapper Ends
          </div>
        </div>
      </div>
    </section>
     blog Section End -->

<!-- Contact Section Start -->
<!-- <section id="contact" class="section">
    <div class="contact-form">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-9">
            <div class="contact-block">
              <div class="section-header">
                <h2 class="section-title">Contact <span>Us</span></h2>
                <hr class="lines">
              </div>
              <form id="contactForm">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required
                        data-error="Please enter your name">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required
                        data-error="Please enter your email">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required
                        data-error="Please enter your subject">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" id="message" placeholder="Your Message" rows="11"
                        data-error="Write your message" required></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="submit-button text-center">
                      <button class="btn btn-common" id="submit" type="submit">Send Message</button>
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
    </div> -->
<!--  <div class="toggle-map">
        <a href="#" class="map-icon wow pulse" data-wow-iteration="infinite" data-wow-duration="500ms">
          <i class="lnr lnr-map"></i>
        </a>
      </div>
      <div id="google-map">
      </div>   -->
<!-- </section> -->
<!-- Contact Section End -->

<!-- Subcribe Section Start
    <div id="subscribe" class="section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Subscribe <span>Newsletter</span></h2>
          <hr class="lines">
          <p class="section-subtitle">Subscribe to get all latest news from us.</p>
        </div>
        <div class="row justify-content-md-center">
          <div class="col-md-8">
              <form class="text-center form-inline">
                <input class="mb-20 form-control" name="email" placeholder="Your Email Address">
                <button class="sub_btn">subscribe</button>
              </form>
          </div>
        </div>
      </div>
    </div>
    Subcribe Section End -->

<!-- Footer Section Start -->
<?php require './footer.php'?>