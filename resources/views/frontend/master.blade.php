<!--
    author: W3layouts
    author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
    -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <title>Landing Landing Page Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Landing Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);
    
            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        
        <!-- animation css files -->
        <link href="{{ asset('frontend/css/animation-aos.css') }}" rel="stylesheet" >
        <link href="{{ asset('frontend/css/aos.css') }}" rel="stylesheet prefetch" type="text/css" media="all">

        <link rel="stylesheet" href="css/animation-aos.css">
        <link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
        <!-- //animation css files -->
    
        <!-- css files -->
        <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('frontend/css/fontawesome-all.css') }}" rel="stylesheet"  >
       


        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
        <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
        <link href="css/fontawesome-all.css" rel="stylesheet"><!-- fontawesome css -->
        <!-- //css files -->
        
        <!-- google fonts -->
        <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
        <!-- //google fonts -->
        
    </head>
    <body>
    
    <!-- header -->
    <header class="index-banner">
        <!--// nav -->
        @include('frontend.includes.nav-bar')
        <!-- //nav -->
        <!-- banner -->
        @include('frontend.includes.banner')
        <!-- //banner -->
    </header>
    <!-- //header -->
    
    <!-- banner bottom -->
        @include('frontend.includes.banner-bottom')
    <!-- //banner bottom -->
    

    
    
    
    <!-- footer starts -->
    @include('frontend.includes.footer')

    <!--footer ends-->
    
    <!-- Vertically centered Modal -->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-capitalize text-center" id="exampleModalLongTitle"> <i class="fab fa-blackberry"></i> Landing</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="images/banner.jpg" class="img-fluid mb-3" alt="Modal Image" />
                    Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum,
                    ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.
                    Sed mattis risus at ipsum elementum, ut auctor turpis cursus. Sed sed odio pharetra, aliquet.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save Changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- //Vertically centered Modal -->
        
    <!-- video Modal Popup -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Video Overview</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body video">
                    <iframe src="https://player.vimeo.com/video/43982091"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save Changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- //video Model Popup -->
    
    <!--/Login-->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Login Now</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label class="mb-2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary submit mt-2">Sign In</button>
                            <p class="text-center pb-4">
                                <a href="#" data-toggle="modal2" data-target="#exampleModalCenter"> Don't have an account?</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//Login-->
    
        <!-- js -->
        <script src="{{ asset('frontend/js/jquery-2.2.3.min.js') }}" ></script>
        <script src="{{ asset('frontend/js/bootstrap.js') }}" ></script>


        <script src="js/jquery-2.2.3.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <!-- //js -->
        
        <!-- animation js -->
        <script src="{{ asset('frontend/js/aos.js') }}" ></script>

        <script src='js/aos.js'></script>
        <script>
            AOS.init({
                easing: 'ease-out-back',
                duration: 1000
            });
    
        </script>
        <!-- //animation js -->
    
        <!-- testimonials  Responsiveslides -->
        <script src="{{ asset('frontend/js/responsiveslides.min.js') }}" ></script>

        <script src="js/responsiveslides.min.js"></script>
        <script>
            // You can also use"$(window).load(function() {"
            $(function () {
                // Slideshow 4
                $("#slider3").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: false,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });
    
            });
        </script>
        <!-- //testimonials  Responsiveslides -->
    
        <!-- sticky nav bar-->
        <script>
            $(() => {
    
              //On Scroll Functionality
              $(window).scroll(() => {
                var windowTop = $(window).scrollTop();
                windowTop > 100 ? $('nav').addClass('navShadow') : $('nav').removeClass('navShadow');
                windowTop > 100 ? $('ul.nav-agile').css('top', '50px') : $('ul.nav-agile').css('top', '160px');
              });
    
              //Click Logo To Scroll To Top
              $('#logo').on('click', () => {
                $('html,body').animate({
                  scrollTop: 0
                }, 500);
              });
    
             /*
              //Smooth Scrolling Using Navigation Menu
              $('a[href*="#"]').on('click', function (e) {
                $('html,body').animate({
                  scrollTop: $($(this).attr('href')).offset().top - 100
                }, 500);
                e.preventDefault();
              });
             */
    
              //Toggle Menu
              $('#menu-toggle').on('click', () => {
                $('#menu-toggle').toggleClass('closeMenu');
                $('ul').toggleClass('showMenu');
    
                $('li').on('click', () => {
                  $('ul').removeClass('showMenu');
                  $('#menu-toggle').removeClass('closeMenu');
                });
              });
    
            });
        </script>
        <!-- //sticky nav bar -->
        <script src="{{ asset('frontend/js/smoothscroll.js') }}" ></script>
    
        <script src="js/smoothscroll.js"></script><!-- Smooth scrolling -->
    
        <!-- start-smoth-scrolling -->
        <script src="{{ asset('frontend/js/move-top.js') }}" ></script>
        <script src="{{ asset('frontend/js/easing.js') }}" ></script>


        <script src="js/move-top.js"></script>
        <script src="js/easing.js"></script>
        <script>
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 900);
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                /*
                var defaults = {
                      containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear' 
                 };
                */
    
                $().UItoTop({
                    easingType: 'easeOutQuart'
                });
    
            });
        </script>
        <!-- //end-smoth-scrolling -->
    
    </body>
    </html>