<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="QwikCare - Premium Business listings.">
    <meta name="author" content="Ansonika">
    <title>@yield('page_title')</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>

    <div id="page">

        <header class="header menu_fixed">
            <div id="logo">
                <a href="index" title="QwikCare - Directory and listings template">                
                    <img src="http://kelvin.copedarealtors.com/assets/global/light_logo.png" width="165" height="35" alt="" class="logo_normal">
                    <img src="http://kelvin.copedarealtors.com/assets/global/dark_logo.png" width="165" height="35" alt="" class="logo_sticky">
                </a>
            </div>
            @if (Auth::user())
                <ul id="top_menu">
                    <li><a href="account" class="btn_add">Account</a></li>
                </ul>
            @else
                <ul id="top_menu">
                    <li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
                </ul>
            @endif
           
            <!-- /top_menu -->
            <a href="#menu" class="btn_mobile">
                <div class="hamburger hamburger--spin" id="hamburger">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <nav id="menu" class="main-menu">
                <ul>
                    <li><span><a href="./">Home</a></span></li>
                    <li><span><a href="./listings">Listings</a></span></li>
                    <li><span><a href="./categories">Category</a></span></li>
                    <li><span><a href="./blog">Blog</a></span></li>
                    <li><span><a href="./contact">Contact</a></span></li>
                </ul>
            </nav>
        </header>
        <!-- /header -->
        @yield('content')
        <footer class="plus_border">
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <h3 data-target="#collapse_ft_1">Quick Links</h3>
                        <div class="collapse dont-collapse-sm" id="collapse_ft_1">
                            <ul class="links">
                                <li><a href="#0">About us</a></li>
                                <li><a href="#0">Faq</a></li>
                                <li><a href="#0">My account</a></li>
                                <li><a href="#0">Create account</a></li>
                                <li><a href="#0">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <h3 data-target="#collapse_ft_2">Categories</h3>
                        <div class="collapse dont-collapse-sm" id="collapse_ft_2">
                            <ul class="links">
                                <li><a href="#0">Barbers</a></li>
                                <li><a href="#0">Hairstlist</a></li>
                                <li><a href="#0">Nail Technicians</a></li>
                                <li><a href="#0">Massage Therapist</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <h3 data-target="#collapse_ft_3">Contacts</h3>
                        <div class="collapse dont-collapse-sm" id="collapse_ft_3">
                            <ul class="contacts">
                                <li><i class="ti-home"></i>97845 Baker st. 567<br>Los Angeles - US</li>
                                <li><i class="ti-headphone-alt"></i>+39 06 97240120</li>
                                <li><i class="ti-email"></i><a href="#0">info@qwikcare.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <h3 data-target="#collapse_ft_4">Keep in touch</h3>
                        <div class="collapse dont-collapse-sm" id="collapse_ft_4">
                            <div id="newsletter">
                                <div id="message-newsletter"></div>
                                <form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                                    <div class="form-group">
                                        <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                                        <input type="submit" value="Submit" id="submit-newsletter">
                                    </div>
                                </form>
                            </div>
                            <div class="follow_us">
                                <h5>Follow Us</h5>
                                <ul>
                                    <li><a href="#0"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#0"><i class="ti-google"></i></a></li>
                                    <li><a href="#0"><i class="ti-pinterest"></i></a></li>
                                    <li><a href="#0"><i class="ti-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <ul id="footer-selector">
                            <li>
                                <div class="styled-select" id="lang-selector">
                                    <select>
                                        <option value="English" selected>English</option>
                                        <option value="French">French</option>
                                        <option value="Spanish">Spanish</option>
                                        <option value="Russian">Russian</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="styled-select" id="currency-selector">
                                    <select>
                                        <option value="US Dollars" selected>US Dollars</option>
                                        <option value="Euro">Euro</option>
                                    </select>
                                </div>
                            </li>
                            <li><img src="img/cards_all.svg" alt=""></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul id="additional_links">
                            <li><a href="./terms">Terms and conditions</a></li>
                            <li><a href="./privacy">Privacy</a></li>
                            <li><span>© {{ \Carbon\Carbon::now()->format('yy') }} QwikCare</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--/footer-->
    </div>
    <!-- page -->

    <!-- Sign In Popup -->
    <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
        <livewire:login />
    </div>
    <!-- /Sign In Popup -->

    <div id="toTop"></div><!-- Back to top button -->

    <!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
    <script src="js/functions.js"></script>
    <script src="assets/validate.js"></script>

</body>

</html>