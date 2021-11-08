<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Vidyatirth Classes</title>
    
    <!-- Styles -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light">
        <div class="container">
            
            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Kora</a> -->

            <!-- Image Logo -->
            <!-- <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a>  -->
            <a class="navbar-brand logo-image" href="index.html"><img src="images/vt2.png" alt="alternative"></a> 

            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#intro">Intro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#footer">Details</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Drop</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item page-scroll" href="article.html">Article Details</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="terms.html">Terms Conditions</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="privacy.html">Privacy Policy</a>
                        </div>
                    </li> -->
                </ul>
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <span class="nav-item">
                    <a class="btn-solid-sm page-scroll" href="{{ url('/home') }}">Home</a>
                </span>
                        <!-- <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a> -->
                    @else
                    <a class="btn-solid-sm page-scroll" href="{{ route('login') }}">Log in</a>
                        <!-- <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a> -->

                        <!-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif -->
                    @endauth
                </div>
            @endif
                
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 class="h1-large">A great place for better success</h1>
                        <p class="p-large">Dear Students, Welcome to Vidyatirth Coaching Classes, We are delighted to introduce you to an entire new Revolutionary approach of, highly scientific, Innovative Coaching institute in Neral.</p>
                        <a class="btn-solid-lg" href="tel:9552752719">+91 9552752719</a>
                        <!-- <a class="btn-outline-lg page-scroll" href="https://wa.me/7741045333">Discover</a> -->
                        
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container mt-5"><br>
                        <img class="img-fluid" src="images/mainrm.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->



    <!-- Introduction -->
    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid" src="images/poster.png" alt="alternative">
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h3>About Vidyatirth Classess</h3>
                        <p>We know that success in board as well as in competitive examinations like JEE, NEET, MH-CET, & many more lies in understanding basic fundas, practicing them hard & their application in exams. So we focus on feeding roots & making your foundation strong. Our vast experience of teaching thousands of students reveals that one can easily crack 10th & 12th Board Exam & other Entrance Examinations.</p>
                        <a class="btn-solid-reg" href="sign-up.html">Sign up</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of introduction -->


    <!-- Features -->
    <div id="features" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Check out all the features</h2>
                    <p class="p-heading">The features built into Kora were designed to help online shop owners present their merchandise and find more customers</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon-wrapper">
                            <div class="card-icon">
                                <span class="fas fa-headphones-alt green"></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Product Marketing On Social Platforms</h4>
                            <p>Besides regular product display options Kora has multiple functions for social networks integration</p>
                            <!--<a class="read-more no-line" href="article.html">Learn more <span class="fas fa-long-arrow-alt-right"></span></a>-->
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon-wrapper">
                            <div class="card-icon">
                                <span class="far fa-clipboard blue"></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Branding And Strategy Basic Guidelines</h4>
                            <p>To build a solid foundation for your online shop you need a strong brand and a bulletproof strategy</p>
                            <!--<a class="read-more no-line" href="article.html">Learn more <span class="fas fa-long-arrow-alt-right"></span></a>-->
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon-wrapper">
                            <div class="card-icon">
                                <span class="far fa-comments purple"></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Design & Development Advanced Services</h4>
                            <p>Our team of competent designers and developers are able to create great designs and structured code</p>
                            <!--<a class="read-more no-line" href="article.html">Learn more <span class="fas fa-long-arrow-alt-right"></span></a>-->
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of features -->


   
    
    <!-- Details 3 -->
    <section class="team section">
    <div class="container">
        <h1 class="section-title">Meet the Staff</h1>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-item">
                    <figure> <img src="https://images.unsplash.com/photo-1628890923662-2cb23c2e0cfe?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzR8fGVtcGxveWVlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                        <figcaption>
                            <div class="info">
                                <h3>Alan Stuart</h3>
                                <p>Chief Executive Officer</p>
                            </div>
                            <!-- <div class="social"> <a href="#" class="twitter" data-abc="true"><i class="fa fa-twitter"></i></a> <a href="#" class="facebook" data-abc="true"><i class="fa fa-facebook"></i></a> <a href="#" class="google-plus" data-abc="true"><i class="fa fa-linkedin"></i></a> </div> -->
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-item">
                    <figure> <img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzZ8fGVtcGxveWVlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                        <figcaption>
                            <div class="info">
                                <h3>Temta Swang</h3>
                                <p>Python Lead</p>
                            </div>
                            <!-- <div class="social"> <a href="#" class="twitter" data-abc="true"><i class="fa fa-twitter"></i></a> <a href="#" class="facebook" data-abc="true"><i class="fa fa-facebook"></i></a> <a href="#" class="google-plus" data-abc="true"><i class="fa fa-linkedin"></i></a> </div> -->
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-item">
                    <figure> <img src="https://images.unsplash.com/photo-1562788869-4ed32648eb72?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjN8fGVtcGxveWVlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                        <figcaption>
                            <div class="info">
                                <h3>Michael Slater</h3>
                                <p>Marketing Manager</p>
                            </div>
                            <!-- <div class="social"> <a href="#" class="twitter" data-abc="true"><i class="fa fa-twitter"></i></a> <a href="#" class="facebook" data-abc="true"><i class="fa fa-facebook"></i></a> <a href="#" class="google-plus" data-abc="true"><i class="fa fa-linkedin"></i></a> </div> -->
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- end of details 3 -->


    <!-- Testimonials -->
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Testimonials</h2>
                    <!-- <p class="p-heading">You can read below a few testimonials from satisfied shop owners. Of course there are also some unhappy ones but they're not here</p> -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="testimonial-text">I am happy to have chosen Blink for our shop implementation. Their specialized experience helped the project and made it available 2 weeks prior the launch date for extensive testing</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="images/testimonial-1.jpg" alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">Samantha Bloom</div>
                                                    <div class="occupation">Team Leader - Syncnow</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div> 
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="testimonial-text">Totally recommended. I am happy to have chosen Blink for our shop implementation. Their great specialized experience helped the project and made it available 2 weeks prior the launch</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="images/testimonial-2.jpg" alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">Nicolas Richter</div>
                                                    <div class="occupation">Manager - Firstup</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div> 
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="testimonial-text">I am happy to have chosen Blink for our shop implementation. Their specialized experience helped the project and made it available 2 weeks prior the launch date for extensive testing</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="images/testimonial-3.jpg" alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">Mary Longhorn</div>
                                                    <div class="occupation">Designer - Firstdev</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div> 
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="testimonial-text">Totally recommended. I am happy to have chosen Blink for our shop implementation. Their great specialized experience helped the project and made it available 2 weeks prior the launch</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="images/testimonial-4.jpg" alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">Mike Page</div>
                                                    <div class="occupation">Developer - Chainlink</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div> 
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="testimonial-text">I am happy to have chosen Blink for our shop implementation. Their specialized experience helped the project and made it available 2 weeks prior the launch date for extensive testing</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="images/testimonial-5.jpg" alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">Susanne Blake</div>
                                                    <div class="occupation">Operations - Launchday</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div> 
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="testimonial-text">Totally recommended. I am happy to have chosen Blink for our shop implementation. Their great specialized experience helped the project and made it available 2 weeks prior the launch</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="images/testimonial-6.jpg" alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">Vanya Dropper</div>
                                                    <div class="occupation">Marketer - Flinco</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div> 
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of testimonials -->


    
    <!-- Footer -->
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                        <h6>About Vidyatirth</h6>
                        <p class="p-small">Vidyatirth Classes is a great start for an education personnel or organization. We help you to get good grades and guide you about the
best future.</p>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col second">
                        <h6>Neral Branch</h6>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li>Contact: +91 9552752719</li>
                            <li>Address: <a href="#"> Khanda, Rajendragurunagar, Neral, Raigad-Maharashtra - 410101, Neral </a></li>
                        </ul>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col third">
                        <span class="fa-stack">
                            <a href="https://m.facebook.com/Vidyatirth-Classes-VC-102787274495530/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                    
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
</a>
                        </span>
                        <p class="p-small">We would love to hear from you <a href="mailto:admin@vidyatirth.online"><strong>admin@vidyatirth.online</strong></a></p>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © <a href="https://algocenter.in/">AlgoCenter.in</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>