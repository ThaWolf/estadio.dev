@extends('layouts.cms')

@section('content')


	
        <div class="navbar navbar-default navbar-static-top yamm sticky" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">
          <img alt="E-Stadio" src="{{ asset('img/ref/logo.png') }}">
        </a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown active ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Sliders </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Revolution Full-width</a></li>
                                        <li><a href="home-revolution-boxed.html">Revolution Boxed</a></li>
                                        <li><a href="home-revolution-fullscreen.html">Revolution Fullscreen</a></li>
                                        <li><a href="ken-burns.html">Ken burns Slider</a></li>
                                        <li><a href="home-carousel.html">Carousel Slider</a></li>
                                        <li><a href="home-flexslider.html">Flex slider</a></li>               
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Revolution 5  <span class="label new-label">New</span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="r5-classic.html">Carousel classic</a></li> 
                                        <li><a href="r5-gym.html">Slider Gym</a></li> 
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Themes (12+)  <span class="label new-label">New</span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="../default-template/index.html" target="_blank">Default Template</a></li>
                                        <li><a href="../real-estate/index.html" target="_blank">Real Estate</a></li>
                                        <li><a href="../medical/index.html" target="_blank">Medical Template</a></li>
                                        <li><a href="../e-commerce/index.html" target="_blank">E-commerce</a></li>
                                        <li><a href="../assan-blog/index.html" target="_blank">Blog Template</a></li><li><a href="../assan-education/index.html" target="_blank">Education  Template</a></li>
                                        <li><a href="../one-page/index.html" target="_blank">One page light</a></li>
                                        <li><a href="../one-page/one-page-dark.html" target="_blank">One page Dark</a></li><li><a href="../assan-personal-portfolio/index.html" target="_blank">One page Personal</a></li>                                    
                                        <li><a href="../restaurant/index.html" target="_blank">Restaurant One page light</a></li>
                                        <li><a href="../restaurant/restaurant-one-page-dark.html" target="_blank">Restaurant One page Dark</a></li>
                                        <li><a href="../app-landing/index.html" target="_blank">App landing - I-phone</a></li>
                                        <li><a href="../app-landing/index-android.html" target="_blank">App landing - Android</a></li>                                   
                                        <li><a href="../landing-page/index.html" target="_blank">Landing page <span class="label new-label">New</span></a></li>                              
                                        <li><a href="../minimal-portfolio/index.html" target="_blank">Minimal Portfolio <span class="label new-label">New</span></a></li>
                                    </ul>
                                </li>
                                <li><a href="home-parallax.html">Home - Parallax</a></li>
                                <li><a href="home-video.html">Home -Youtube Video</a></li>
                                <li><a href="home-self-video.html">Home - Video(Self-hosted) <span class="label new-label">New</span></a></li>
                                <li><a href="home-boxed.html">Home - Boxed</a></li>
                                <li><a href="home-construction.html">Home - Construction</a></li>
                                <li><a href="home-portfolio.html">Home - Portfolio</a></li>
                                <li><a href="home-events.html">Home - Events</a></li>  
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Multi level menu </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"> menu level 2</a></li>
                                        <li class="dropdown-submenu">
                                            <a tabindex="-1" href="#">menu level 2 </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#"> menu level 3</a></li>
                                                <li><a href="#"> menu level 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!--menu home li end here-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown">Portfolio <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu multi-level" role="menu">
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Cube Portfolio </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="juicy-portfolio.html"> Juicy Projects</a></li>
                                        <li><a href="cube-fullwidth.html"> Full Width</a></li>
                                        <li><a href="cube-masonry.html"> Masonry</a></li>                         
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Grid Text Boxed </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-2.html"> 2 Columns</a></li>
                                        <li><a href="portfolio-3.html"> 3 Columns</a></li>
                                        <li><a href="portfolio-4.html"> 4 Columns</a></li>                         

                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Grid Boxed </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="grid-portfolio-2-no-text.html">2 Columns</a></li>
                                        <li><a href="grid-portfolio-3-no-text.html">3 Columns</a></li>
                                        <li><a href="grid-portfolio-4-no-text.html">4 Columns</a></li>                         

                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">No space Full width </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-full-width-2.html">2 columns</a></li>
                                        <li><a href="portfolio-full-width-3.html">3 columns</a></li>
                                        <li><a href="portfolio-full-width-4.html">4 columns</a></li>                         
                                        <li><a href="portfolio-full-width-5.html">5 columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">No Space Boxed </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-no-space-bx-2.html"> 2 Columns</a></li>
                                        <li><a href="portfolio-no-space-bx-3.html"> 3 Columns</a></li>
                                        <li><a href="portfolio-no-space-bx-4.html"> 4 Columns</a></li>                         

                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Portfolio Masonry </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="masonry-portfolio-3.html"> 3 Columns</a></li>
                                        <li><a href="masonry-portfolio-4.html"> 4 Columns</a></li>
                                        <li><a href="masonry-portfolio-full.html"> Full Width</a></li>                         

                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Portfolio Items</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-single.html">Single item</a></li>
                                        <li><a href="portfolio-single-2.html">Single item 2</a></li>                                                             
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <!--menu Portfolio li end here-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="blog-full.html">Blog - full width</a></li>
                                <li><a href="blog-leftimg.html">Blog - left image</a></li>
                                <li><a href="blog-sidebar.html">Blog - sidebar</a></li>
                                <li><a href="blog-2col.html">Blog - 2 column</a></li>
                                <li><a href="blog-timeline.html">Blog - Timeline</a></li>
                                <li><a href="blog-masonary.html">Blog - Masonry</a></li>
                                <li><a href="blog-single.html">Blog - Single</a></li>
                            </ul>
                        </li>
                        <!--menu blog li end here-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="about.html">About</a></li>
                                <li><a href="me.html">About - Me</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="team.html">Our Team</a></li>
                                <li><a href="pricing.html">Our Pricing</a></li>                                
                                <li><a href="faq.html">FAQS</a></li> 
                                <li><a href="email-template.html">Email Template</a></li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Contact </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="contact.html"> Contact default</a></li>
                                        <li><a href="contact-advanced.php">Contact advanced</a></li>
                                        <li><a href="contact-option.php">Contact option</a></li>
                                        <li><a href="contact-flat.php">Contact Flat</a></li>
                                    </ul>
                                </li>                                          
                                <li><a href="search-results.html">Search Results</a></li>                                
                                <li><a href="career.html">Career</a></li>
                                <li><a href="gallery.html">Gallery</a></li>

                                <li><a href="process.html">Our Process</a></li>

                            </ul>
                        </li>
                        <!--menu pages li end here-->

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features  <i class="fa fa-angle-down"></i></a> 
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Headers </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Header 1 - Default</a></li>
                                        <li><a href="header-dark.html">Header 2 - dark </a></li>
                                        <li><a href="header-transparent.html">header 3 - transparent </a></li>
                                        <li><a href="header-center-logo.html">header 4 - Logo center </a></li>
                                        <li><a href="header-side-panel.html">header 5 - Side panel </a></li>
                                    </ul>
                                </li> 
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Footers </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Footer dark - 1</a></li>
                                        <li><a href="footer-2.html">Footer dark - 2</a></li>
                                        <li><a href="footer-3.html">Footer dark - 3 </a></li>
                                        <li><a href="footer-light-1.html">Footer Light - 1</a></li>
                                        <li><a href="footer-light-2.html">Footer Light - 2</a></li>
                                        <li><a href="footer-light-3.html">Footer Light - 3 </a></li>
                                    </ul>
                                </li> 
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Page Templates </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="full-width.html">Full Width</a></li>                                                    
                                        <li><a href="left-sidebar.html">Left Sidebar</a></li>
                                        <li><a href="right-sidebar.html">Right sidebar</a></li>
                                        <li><a href="both-sidebar.html">Both Sidebar</a></li>
                                        <li><a href="both-right-sidebar.html">Both Right sidebar</a></li>
                                        <li><a href="both-left-sidebar.html">Both Left Sidebar</a></li>
                                    </ul>
                                </li> 
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Coming Soon </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="coming-soon-1.html">Coming soon 1</a></li>                                                    
                                        <li><a href="coming-soon-2.html">Coming soon 2</a></li>
                                        <li><a href="coming-soon-3.html">Coming soon 3</a></li>
                                    </ul>
                                </li> 
                                <li><a href="side-nav.html">side navigation </a></li>
                                <li><a href="maintenance-page.html">Maintenance page </a></li>
                                <li><a href="blank.html">Blank Page</a></li>
                                <li><a href="error.html">Error - 404</a></li>
                                <li><a href="login-ragister.html">Login / Register</a></li>
                                <li><a href="login-ragister-classic.html">Login / Register - Classic </a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="site-map.html">Site Map</a></li>
                            </ul>
                        </li><!--features-->

                        <!--mega menu-->
                        <li class="dropdown yamm-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shortcodes  <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">

                                            <div class="col-sm-3">
                                                <h3 class="heading">Shortcode 1</h3>
                                                <ul class="nav mega-vertical-nav">        

                                                    <li><a href="typography.html"><i class="fa fa-text-height"></i> Typography</a></li>
                                                    <li><a href="grid-system.html"><i class="fa fa-bars"></i> Grid System</a></li>
                                                    <li><a href="testimonials.html"><i class="fa fa-comment-o"></i> testimonials </a></li>
                                                    <li><a href="tabs-accordian.html"><i class="fa fa-table"></i> tabs &  Accordions </a></li>
                                                </ul>

                                            </div>
                                            <div class="col-sm-3">
                                                <h3 class="heading">Shortcode 2 </h3>
                                                <ul class="nav mega-vertical-nav">
                                                    <li><a href="buttons.html"><i class="fa fa-cog"></i> Buttons</a></li>
                                                    <li><a href="social-buttons.html"><i class="fa fa-share"></i> Social Buttons</a></li>
                                                    <li><a href="alerts.html"><i class="fa fa-bell"></i> Alerts </a></li>
                                                    <li><a href="other-elements.html"><i class="fa fa-cogs"></i> Other Elements </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h3 class="heading">Shortcode 3</h3>
                                                <ul class="nav mega-vertical-nav">
                                                    <li><a href="font-awesome.html"><i class="fa fa-flag"></i> Font Awesome icons</a></li>                                                   
                                                    <li><a href="pe-icons.html"><i class="pe-7s-like"></i> Pe icons</a></li>   
                                                    <li><a href="carousel-shortcodes.html"><i class="fa fa-sliders"></i> Carousel Sliders </a></li>
                                                    <li><a href="tables.html"><i class="fa fa-table"></i> Tables </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h3 class="heading">Shortcode 4</h3>
                                                <ul class="nav mega-vertical-nav">
                                                    <li><a href="pricing-tables.html"><i class="fa fa-usd"></i> Pricing tables</a></li>                                                   
                                                    <li><a href="videos.html"><i class="fa fa-image"></i> Responsive videos</a></li>   
                                                    <li><a href="cta.html"><i class="fa fa-map-pin"></i> call to cations </a></li>
                                                    <li><a href="maps.html"><i class="fa fa-map-marker"></i> Google maps </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li> <!--menu Features li end here-->   

                        <!--                        <li class="dropdown">
                                                    <a href="#" class=" dropdown-toggle" data-toggle="dropdown"><i class="fa fa-lock"></i> Sign In</a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-login-box animated fadeInUp">
                                                        <form role="form">
                                                            <h4>Signin</h4>
                        
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                                    <input type="text" class="form-control" placeholder="Username">
                                                                </div>
                                                                <br>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                                    <input type="password" class="form-control" placeholder="Password">
                                                                </div>
                                                                <div class="checkbox pull-left">
                                                                    <label>
                                                                        <input type="checkbox"> Remember me
                                                                    </label>
                                                                </div>
                                                                <a class="btn btn-theme-bg pull-right">Login</a>
                                                                                                        <button type="submit" class="btn btn-theme pull-right">Login</button>                 
                                                                <div class="clearfix"></div>
                                                                <hr>
                                                                <p>Don't have an account! <a href="#">Register Now</a></p>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </li> menu login li end here-->
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--container-->
        </div><!--navbar-default-->


        <!--rev slider start-->
        <div class="fullwidthbanner">
            <div class="tp-banner">
                <ul>
                    <!-- SLIDE -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Powerful Theme">
                        <!-- MAIN IMAGE -->
                        <img src="img/bg-3.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="caption title-2 sft"
                             data-x="50"
                             data-y="160"
                             data-speed="1000"
                             data-start="1000"
                             data-easing="easeOutExpo">
                            Powerful multipurpose <br>
                            Business Template
                        </div>



                        <div class="caption text sfl"
                             data-x="50"
                             data-y="290"
                             data-speed="1000"
                             data-start="1800"
                             data-easing="easeOutExpo">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.  <br>
                            lectus. Cras porta nisl at tincidunt tincidunt.  
                        </div>
                        <div class="caption sfb rev-buttons tp-resizeme"
                             data-x="50"
                             data-y="360"
                             data-speed="500"
                             data-start="1800"
                             data-easing="Sine.easeOut">
                            <a href="#" class="btn btn-theme-bg btn-lg">Purchase Now</a>
                        </div>

                        <div class="caption sfb rev-buttons tp-resizeme"
                             data-x="250"
                             data-y="360"
                             data-speed="500"
                             data-start="2100"
                             data-easing="Sine.easeOut">
                            <a href="#" class="btn border-white btn-lg">View features</a>
                        </div>

                    </li>
                    <!-- SLIDE -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Unique Theme">
                        <!-- MAIN IMAGE -->
                        <img src="img/showcase-4.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">




                        <div class="caption text-center-top sft"
                             data-x="center"
                             data-y="210"
                             data-speed="1000"
                             data-start="1400"
                             data-easing="easeOutExpo">
                            Perfect for startup 
                        </div>

                        <div class="caption text-center-btm sfr text-center"
                             data-x="center"
                             data-y="265"
                             data-speed="1000"
                             data-start="1600"
                             data-easing="easeOutExpo">

                            Assan is a creative multipurpose theme, you can use it for<br>  business, corporate, portfolio, shop events, personal and more...

                        </div>
                        <div class="caption sfb rev-buttons tp-resizeme"
                             data-x="center"
                             data-y="380"
                             data-speed="500"
                             data-start="1800"
                             data-easing="Sine.easeOut">
                            <a href="#" class="btn border-white btn-lg">View features</a>
                        </div>
                    </li>
                    <!-- SLIDE -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Multipurpose">
                        <!-- MAIN IMAGE -->
                        <img src="img/bg-1.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYER NR. 1 -->
                        <div class="caption left-tile-text sfr tp-resizeme"
                             data-x="40"
                             data-y="110" 
                             data-speed="600"
                             data-start="1200"
                             data-end="9400"
                             data-endspeed="600">Unlimited layouts
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="caption medium_bg_darkblue sfl medium tp-resizeme"
                             data-x="40"
                             data-y="170" 
                             data-speed="600"
                             data-start="1600"
                             data-end="9400"
                             data-endspeed="600"><i class="fa fa-check"></i>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="90"
                             data-y="170" 
                             data-speed="600"
                             data-start="1600"
                             data-end="9400"
                             data-endspeed="600">Fully Responsive
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="caption medium_bg_darkblue sfl medium tp-resizeme"
                             data-x="40"
                             data-y="220" 
                             data-speed="600"
                             data-start="1800"
                             data-end="9400"
                             data-endspeed="600"><i class="fa fa-check"></i>
                        </div>

                        <!-- LAYER NR. 5 -->
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="90"
                             data-y="220" 
                             data-speed="600"
                             data-start="1800"
                             data-end="9400"
                             data-endspeed="600">210+ HTML5 Valid Pages
                        </div>

                        <!-- LAYER NR. 6 -->
                        <div class="caption medium_bg_darkblue sfl medium tp-resizeme"
                             data-x="40"
                             data-y="270" 
                             data-speed="600"
                             data-start="2000"
                             data-end="9400"
                             data-endspeed="600"><i class="fa fa-check"></i>
                        </div>

                        <!-- LAYER NR. 7 -->
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="90"
                             data-y="270" 
                             data-speed="600"
                             data-start="2000"
                             data-end="9400"
                             data-endspeed="600">Slider revolution
                        </div>

                        <!-- LAYER NR. 8 -->
                        <div class="caption medium_bg_darkblue sfl medium tp-resizeme"
                             data-x="40"
                             data-y="320" 
                             data-speed="600"
                             data-start="2200"
                             data-end="9400"
                             data-endspeed="600"><i class="fa fa-check"></i>
                        </div>

                        <!-- LAYER NR. 9 -->
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="90"
                             data-y="320" 
                             data-speed="600"
                             data-start="2200"
                             data-end="9400"
                             data-endspeed="600">Clean & Commented Code
                        </div>

                        <!-- LAYER NR. 10 -->
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="40"
                             data-y="370" 
                             data-speed="600"
                             data-start="2400"
                             data-end="9400"
                             data-endspeed="600">And Much More...
                        </div>

                    </li>
                </ul>
            </div>
        </div><!--full width banner-->
        <!--revolution end-->

        <div class="divide60"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="center-heading">
                        <h2>What <strong>we do</strong> </h2>
                        <span class="center-line"></span>
                        <p class="sub-text margin40">
                            We want to present you a simple and functional template “ASSAN”. It is a powerful Multi-Purpose HTML 5 Template. Build whatever you like with this Template that looks effortlessly on-point in Business </p>
                    </div>
                </div>

            </div><!--center heading end-->
            <div class="divide50"></div>
            <div class="row">
                <div class="col-md-3 col-sm-6 margin30">
                    <div class="colored-boxed green">
                        <i class="pe-7s-magic-wand"></i>
                        <h3>Free support & updates</h3>
                        <span class="center-line"></span>
                        <p>
                            Nullam vulputate lorem ut leo. Sed volutpat. Etiam non pede. Nullam et mauris. 
                        </p>
                    </div>
                </div><!--colored boxed col end-->
                <div class="col-md-3 col-sm-6 margin30">
                    <div class="colored-boxed dark">
                        <i class="pe-7s-phone"></i>
                        <h3>Ultra responsive</h3>
                        <span class="center-line"></span>
                        <p>
                            Nullam vulputate lorem ut leo. Sed volutpat. Etiam non pede. Nullam et mauris. 
                        </p>
                    </div>
                </div><!--colored boxed col end-->
                <div class="col-md-3 col-sm-6 margin30">
                    <div class="colored-boxed blue">
                        <i class="pe-7s-like"></i>
                        <h3>made with love</h3>
                        <span class="center-line"></span>
                        <p>
                            Nullam vulputate lorem ut leo. Sed volutpat. Etiam non pede. Nullam et mauris. 
                        </p>
                    </div>
                </div><!--colored boxed col end-->
                <div class="col-md-3 col-sm-6 margin30">
                    <div class="colored-boxed red">
                        <i class="pe-7s-folder"></i>
                        <h3>Premium plugins</h3>
                        <span class="center-line"></span>
                        <p>
                            Nullam vulputate lorem ut leo. Sed volutpat. Etiam non pede. Nullam et mauris. 
                        </p>
                    </div>
                </div><!--colored boxed col end-->
            </div>
        </div><!--services container-->

        <div class="divide80"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="center-heading">
                        <h2>Recent <strong>Projects</strong></h2>
                        <span class="center-line"></span>
                    </div>
                </div>                   
            </div>
        </div>
        <div class="container">
            <div class="cube-masonry">

                <div id="filters-container" class="cbp-l-filters-alignCenter">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                        All <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".identity" class="cbp-filter-item">
                        Identity <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".web-design" class="cbp-filter-item">
                        Web Design <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".graphic" class="cbp-filter-item">
                        Graphic <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".graphic, .identity" class="cbp-filter-item">
                        Web Design & Identity <div class="cbp-filter-counter"></div>
                    </div>
                </div>

                <div id="masnory-container" class="cbp">
                    <div class="cbp-item identity">
                        <a class="cbp-caption cbp-lightbox" data-title="Easy Note<br>by Cosmin Capitanu" href="img/mas-1.jpg">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/mas-1.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Easy Note</div>
                                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design">
                        <a class="cbp-caption cbp-lightbox" data-title="The Gang Blue<br>by Cosmin Capitanu"
                           href="img/img-1.jpg">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/img-1.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">The Gang Blue</div>
                                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item graphic identity">
                        <a class="cbp-caption cbp-lightbox" data-title="Tiger<br>by Cosmin Capitanu"
                           href="img/img-2.jpg">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/img-2.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Tiger</div>
                                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item graphic">
                        <a class="cbp-caption cbp-lightbox" data-title="Flat Roman Typeface Ui<br>by Cosmin Capitanu"
                           href="img/mas-2.jpg">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/mas-2.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Flat Roman Typeface Ui</div>
                                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item identity">
                        <a class="cbp-caption cbp-lightbox" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu"
                           href="img/mas-2.jpg">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/mas-1.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Seemple* Music for iPad</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item graphic">
                        <a class="cbp-caption cbp-lightbox" data-title="Remind~Me More<br>by Tiberiu Neamu" href="img/img-3.jpg">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/img-3.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Remind~Me More</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design">
                        <a class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu" href="img/img-4.jpg">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/img-4.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Workout Buddy</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item identity">
                        <a class="cbp-caption cbp-lightbox" data-title="Volume Knob<br>by Paul Flavius Nechita" href="http://vimeo.com/156783#">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/img-5.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Volume Knob</div>
                                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item identity">
                        <a class="cbp-caption cbp-lightbox" data-title="Ski * Buddy<br>by Tiberiu Neamu" href="img/mas-2.jpg">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/mas-1.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Ski * Buddy</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design graphic">
                        <a class="cbp-caption cbp-lightbox" data-title="Virtualization Icon<br>by Paul Flavius Nechita"
                           href="https://www.youtube.com/watch?v=dChhzNGHgnA">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/img-6.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Virtualization Icon</div>
                                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design graphic">
                        <a class="cbp-caption cbp-lightbox" data-title="World Clock Widget<br>by Paul Flavius Nechita"
                           href="img/img-7.jpg">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/img-7.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">World Clock Widget</div>
                                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design graphic">
                        <a class="cbp-caption cbp-lightbox" data-title="Sickpuppy<br>by Cosmin Capitanu" href="img/img-8.jpg">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/img-8.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Sickpuppy</div>
                                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div><!--.cube masonry-->
        </div>
        <div class="divide50"></div>
        <div class="text-center">
            <a href="masonry-portfolio-4.html" class="btn btn-theme-dark btn-lg">View All Work</a>
        </div>
        <div class="divide50"></div>
        <div class="wide-img-showcase">

            <div class="row margin-0 wide-img-showcase-row">
                <div class="col-sm-6 no-padding  img-2 ">
                    <div class="no-padding-inner ">
                        <div>&nbsp;</div>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-offset-6 no-padding gray">
                    <div class="no-padding-inner gray">
                        <h3 class="wow animated fadeInDownfadeInRight">Core features of <span class="colored-text">assan</span></h3>
                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-icon">
                                <i class="fa fa-tablet"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Fully Responsive</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                                </p>
                            </div>
                        </div><!--service box-->
                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-icon">
                                <i class="fa fa-twitter"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>bootstrap 3</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                                </p>
                            </div>
                        </div><!--service box-->

                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-icon">
                                <i class="fa fa-code"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>120+ valid HTML5 Pages and much more...</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                                </p>
                            </div>
                            <div class="divide30"></div>
                            <p><a href="#" class="btn btn-theme-dark btn-lg">Purchase Now</a></p>
                        </div><!--service box-->

                    </div>
                </div>
            </div>
        </div><!--wide image showcase end-->
        <section class="fun-fact-wrap fun-facts-bg">
            <div class="container">               
                <div class="row">
                    <div class="col-md-3 margin20 facts-in">
                        <h3><span class="counter">2600</span> +</h3>
                        <h4>Downloads</h4>
                    </div><!--facts in-->
                    <div class="col-md-3 margin20 facts-in">
                        <h3><span class="counter">4500</span></h3>
                        <h4>Happy Customers</h4>
                    </div><!--facts in-->
                    <div class="col-md-3 margin20 facts-in">
                        <h3><span class="counter">170</span> +</h3>
                        <h4>Valid layouts </h4>
                    </div><!--facts in-->
                    <div class="col-md-3 margin20 facts-in">
                        <h3><span class="counter">5000</span></h3>
                        <h4>Cups of tea</h4>
                    </div><!--facts in-->
                </div>
            </div>
        </section><!--fun facts-->
        <div class="testimonials-v-2 wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="100ms">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="center-heading">
                            <h2><strong>What</strong> Client’s Say</h2>
                            <p>2600+ Worldwide customers  use Assan template.</p>
                            <span class="center-line"></span>

                        </div>
                    </div>
                </div><!--center heading end-->

                <div class="row">

                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="testi-slide">
                            <ul class="slides">
                                <li>
                                    <img src="img/customer-1.jpg" alt="">
                                    <p>
                                        <i class="ion-quote"></i>
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.
                                    </p>
                                    <h4 class="test-author">
                                        Rick man - <em>rock inc</em>
                                    </h4>
                                </li><!--testi item-->
                                <li>
                                    <img src="img/customer-2.jpg" alt="">
                                    <p>
                                        <i class="ion-quote"></i>
                                        Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years </p>
                                    <h4 class="test-author">
                                        Jellia - <em>Founder of tinka inc</em>
                                    </h4>
                                </li><!--testi item-->
                                <li>
                                    <img src="img/customer-3.jpg" alt="">
                                    <p>
                                        <i class="ion-quote"></i>
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor.</p>
                                    <h4 class="test-author">
                                        Smith - <em>Ceo, company inc.</em>
                                    </h4>
                                </li><!--testi item-->
                            </ul>
                        </div><!--flex slider testimonials end here-->
                    </div>
                </div><!--testi slider row end-->

            </div>
        </div><!--testimonials v-2 end-->
        <div class="blue-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 margin30">
                        <div class="services-box wow animated fadeInDown">
                            <div class="services-box-icon">
                                <i class="pe-7s-diamond"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>170+ valid layouts</h4>
                                <p>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.</div>
                        </div><!--service box-->
                    </div>
                    <div class="col-sm-6 ">
                        <div class="services-box wow animated fadeInUp">
                            <div class="services-box-icon">
                                <i class="pe-7s-download"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Free Support & Updates</h4>
                                <p>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor. </div>
                        </div><!--service box-->
                    </div>
                </div>
            </div>
        </div><!--full wide 2 columns content end-->
        <div class="divide70"></div>
        <div class="assan-features">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="center-heading">
                            <h2>Awesome <strong>features</strong></h2>
                            <span class="center-line"></span>
                        </div>
                    </div>                   
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 margin20">
                        <div class="services-box wow animated fadeIn" data-wow-duration="700ms" data-wow-delay="100ms">
                            <div class="services-box-icon">
                                <i class="fa fa-image"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Sliders</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                                </p>
                            </div>
                        </div><!--services box-->
                    </div><!--services col-->
                    <div class="col-md-4 col-sm-6 margin20">
                        <div class="services-box wow animated fadeIn" data-wow-duration="700ms" data-wow-delay="200ms">
                            <div class="services-box-icon">
                                <i class="fa fa-envelope"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Advanced Forms</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                                </p>
                            </div>
                        </div><!--services box-->
                    </div><!--services col-->
                    <div class="col-md-4 col-sm-6 margin20">
                        <div class="services-box wow animated fadeIn" data-wow-duration="700ms" data-wow-delay="300ms">
                            <div class="services-box-icon">
                                <i class="fa fa-users"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Customer Support</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                                </p>
                            </div>
                        </div><!--services box-->
                    </div><!--services col-->

                    <div class="col-md-4 col-sm-6 margin20">
                        <div class="services-box wow animated fadeIn" data-wow-duration="700ms" data-wow-delay="400ms">
                            <div class="services-box-icon">
                                <i class="fa fa-crop"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Pixel perfect design</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                                </p>
                            </div>
                        </div><!--services box-->
                    </div><!--services col-->
                    <div class="col-md-4 col-sm-6 margin20">
                        <div class="services-box wow animated fadeIn" data-wow-duration="700ms" data-wow-delay="500ms">
                            <div class="services-box-icon">
                                <i class="fa fa-twitter"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>BOOTSTRAP 3.3.6</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                                </p>
                            </div>
                        </div><!--services box-->
                    </div><!--services col-->
                    <div class="col-md-4 col-sm-6 margin20">
                        <div class="services-box wow animated fadeIn" data-wow-duration="700ms" data-wow-delay="600ms">
                            <div class="services-box-icon">
                                <i class="fa fa-flag"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Font Awesome icons</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.

                                </p>

                            </div>
                        </div><!--services box-->
                    </div><!--services col-->
                </div><!--services row-->
            </div>
        </div><!--assan features-->
        <div class="divide40"></div>

        <div class="our-team-v-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="center-heading">
                            <h2>Assan <strong>Team</strong></h2>
                            <span class="center-line"></span>
                        </div>
                    </div>                   
                </div>
                <div class="row">
                    <div class="col-sm-3 text-center">
                        <div class="person-v2">
                            <img src="img/team-5.jpg" class="img-responsive" alt="">
                            <div class="person-desc-v2">
                                <h3>Steve Smith</h3>
                                <em>Creative Designer</em>
                                <ul class="list-inline top-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <!--                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div><!--person col end-->
                    <div class="col-sm-3 text-center">
                        <div class="person-v2">
                            <img src="img/team-6.jpg" class="img-responsive" alt="">
                            <div class="person-desc-v2">
                                <h3>Steve Smith</h3>
                                <em>Creative Designer</em>
                                <ul class="list-inline top-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <!--                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div><!--person col end-->
                    <div class="col-sm-3 text-center">
                        <div class="person-v2">
                            <img src="img/team-7.jpg" class="img-responsive" alt="">
                            <div class="person-desc-v2">
                                <h3>Steve Smith</h3>
                                <em>Creative Designer</em>
                                <ul class="list-inline top-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <!--                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div><!--person col end-->
                    <div class="col-sm-3 text-center">
                        <div class="person-v2">
                            <img src="img/team-8.jpg" class="img-responsive" alt="">
                            <div class="person-desc-v2">
                                <h3>Steve Smith</h3>
                                <em>Creative Designer</em>
                                <ul class="list-inline top-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <!--                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div><!--person col end-->
                </div>
            </div>
        </div><!--our team v-2-->
        <div class="divide70"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="center-heading">
                        <h2><strong>latest</strong> news</h2>
                        <span class="center-line"></span>
                    </div>
                </div>                   
            </div>
            <div class="row">
                <div class="col-sm-4 margin30">
                    <div>
                        <a href="#">
                            <div class="item-img-wrap">
                                <img src="img/img-8.jpg" class="img-responsive" alt="workimg">
                                <div class="item-img-overlay">
                                    <span></span>
                                </div>
                            </div>                       
                        </a><!--news link--> 
                        <div class="news-desc">
                            <span>Sports</span>
                            <h4><a href="#">Lorem ipsum dollor Sit amet</a></h4>
                            <span>By <a href="#">Author</a> on 24 july 2014</span> <span><a href="#">Read more...</a></span>
                        </div><!--news desc-->
                    </div> 
                </div><!--news col-->
                <div class="col-sm-4 margin30">
                    <div>
                        <a href="#">
                            <div class="item-img-wrap">
                                <img src="img/img-3.jpg" class="img-responsive" alt="workimg">
                                <div class="item-img-overlay">
                                    <span></span>
                                </div>
                            </div>                       
                        </a><!--news link--> 
                        <div class="news-desc">
                            <span>Sports</span>
                            <h4><a href="#">Lorem ipsum dollor Sit amet</a></h4>
                            <span>By <a href="#">Author</a> on 24 july 2014</span> <span><a href="#">Read more...</a></span>
                        </div><!--news desc-->
                    </div> 
                </div><!--news col-->
                <div class="col-sm-4 margin30">
                    <div>
                        <a href="#">
                            <div class="item-img-wrap">
                                <img src="img/img-6.jpg" class="img-responsive" alt="workimg">
                                <div class="item-img-overlay">
                                    <span></span>
                                </div>
                            </div>                       
                        </a><!--news link--> 
                        <div class="news-desc">
                            <span>Sports</span>
                            <h4><a href="#">Lorem ipsum dollor Sit amet</a></h4>
                            <span>By <a href="#">Author</a> on 24 july 2014</span> <span><a href="#">Read more...</a></span>
                        </div><!--news desc-->
                    </div> 
                </div><!--news col-->
            </div>
        </div><!--latest news-->

        <div class="divide40"></div>
        <div class="intro-text-1 light">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <h4 class="animated slideInDown">Assan is Simply creative Template
                        </h4>

                        <p>
                            Clean & powerful Easy to use multipurpose business HTML5 template.
                        </p>                   
                    </div>
                    <div class="col-sm-4">
                        <a href="#" class="btn border-theme btn-lg">Purchase now</a>
                    </div>
                </div>
            </div>
        </div> <!--intro text end-->

@endsection