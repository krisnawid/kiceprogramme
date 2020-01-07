<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Confer - Conference Event HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/user/core-img/favicon.png') }}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="conferNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="./index.html"><img src="{{ asset('img/user/core-img/logo.png') }}" alt="" id="rcorners"></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">- Home</a></li>
                                        <li><a href="about.html">- About Us</a></li>
                                        <li><a href="speakers.html">- Speakears</a></li>
                                        <li><a href="schedule.html">- Schedule</a></li>
                                        <li><a href="tickets.html">- Tickets</a></li>
                                        <li><a href="blog.html">- Blog</a></li>
                                        <li><a href="single-blog.html">- Single Blog</a></li>
                                        <li><a href="contact.html">- Contact</a></li>
                                        <li><a href="#">- Dropdown</a>
                                            <ul class="dropdown">
                                                <li><a href="#">- Dropdown Item</a></li>
                                                <li><a href="#">- Dropdown Item</a></li>
                                                <li><a href="#">- Dropdown Item</a></li>
                                                <li><a href="#">- Dropdown Item</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="speakers.html">Speakears</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    @yield('content')

    
    <footer class="footer-area bg-img bg-overlay-2">
        <!-- Copywrite Area -->
        <div class="container" style="margin-top: 25px;">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright ©<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
            </div>
        </div>
    </footer>

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="{{ asset('js/user/jquery.min.js') }}"></script>
    <!-- Popper -->
    <script src="{{ asset('js/user/popper.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/user/bootstrap.min.js') }}"></script>
    <!-- All Plugins -->
    <script src="{{ asset('js/user/confer.bundle.js') }}"></script>
    <!-- Active -->
    <script src="{{ asset('js/user/default-assets/active.js') }}"></script>

</body>

</html>