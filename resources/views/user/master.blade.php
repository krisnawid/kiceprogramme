<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="description" content="Kice programme is a student exchange program from indonesia. kice has 3 programs: fully funded, partial funded, self funded. come to join with us.">
    <meta name="keywords" content="kiceprogramme">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="GVw8GyPzsMjaxlNHha2RdxsA-HpxP5UkR-RfOuKvb58" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>KICE - Kakatoo International Culture and Education Exchange</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="mask-icon" type="" href="{{ asset('img/favicon.ico') }}" color="#111" />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
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
                    <a class="nav-brand" href="/"><img src="{{ asset('img/user/core-img/logo.png') }}" alt="" style="width:50%; height:auto;"></a>

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
                                <li><a href="/">Home</a></li>
                                <li><a href="/procedure">Procedure</a></li>
                                <li><a href="/joinus">Register</a></li>
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
        <hr style="border:2px solid black;">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
KICE ©<script>document.write(new Date().getFullYear());</script> Kakatoo International Culture & Education Exchange <br> by <a href="#" target="_blank">OTEBE Smart</a>
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