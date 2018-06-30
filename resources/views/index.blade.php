<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Inversiones & Proyectos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="./website/images/icons/favicon.png">

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="./website/css/bootstrap.min.css">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="./website/lib/css/nivo-slider.css"/>
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="./website/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="./website/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="./website/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="./website/css/responsive.css">
    <!-- Template color css -->
    <link href="./website/css/color/color-core.css" data-style="styles" rel="stylesheet">
    <!-- User style -->
    <link rel="stylesheet" href="./website/css/custom.css">


    <!-- Modernizr JS -->
    <script src="website/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">
	
        <!-- HEADER AREA START -->
        <header class="header-area header-wrapper">
            <div class="header-top-bar bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="website/images/logo/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-9 hidden-sm hidden-xs">
                            <div class="company-info clearfix">
                                <div class="company-info-item">
                                    <div class="header-icon">
                                        <img src="website/images/icons/phone.png" alt="">
                                    </div>
                                    <div class="header-info">
                                        <h6>+57 311 6676767</h6>
                                        <p>Abiertos de 8 am - 6pm - Hora Colombia</p>
                                    </div>
                                </div>
                                <div class="company-info-item">
                                    <div class="header-icon">
                                        <img src="website/images/icons/mail-open.png" alt="">
                                    </div>
                                    <div class="header-info">
                                        <h6><a href="mailto:hnasir770@gmail.com">info@inversionesyproyectos.com</a></h6>
                                        <p>Envianos un Email</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="header-middle-area  transparent-header hidden-xs">
                <div class="container">
                    <div class="full-width-mega-drop-menu">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sticky-logo">
                                    <a href="#">
                                        <img src="website/images/logo/logo.png" alt="">
                                    </a>
                                </div>
                                <nav id="primary-menu">
                                    <ul class="main-menu text-center">
                                        <li><a href="{{ url('/')}}">Inicio</a></li>
                                        <li class="mega-parent"><a href="{{ url('sobre-nosotros') }}">Sobre Nosotros</a></li>
                                        <li><a href="{{ url('marca')}}">Marca</a></li>
                                        <li><a href="{{ url('blog') }}">Blog</a></li>
                                        <li><a href="{{ url('Inmobiliaria') }}">Portafolio</a></li>
                                        <li><a href="{{ url('contactenos')}}">Contacto</a></li>
                                        <li><a href="{{ url('login')}}">Login</a></li>
                                        <li><a href="{{ url('register')}}">Registrarme</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER AREA END -->

        <!-- MOBILE MENU AREA START -->
        <div class="mobile-menu-area hidden-sm hidden-md hidden-lg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="{{ url('/')}}">Inicio</a></li>
                                    <li><a href="{{ url('sobre-nosotros') }}">Sobre Nosotros</a></li>
                                    <li><a href="{{ url('marca')}}">Marca</a></li>
                                    <li><a href="{{ url('blog') }}">Blog</a></li>
                                    <li><a href="{{ url('Inmobiliaria') }}">Portafolio</a></li>
                                    <li><a href="{{ url('contactenos')}}">Contacto</a></li>
                                    @if (Auth::guest())
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Registrarme</a></li>
                                    @else
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                        CERRAR 
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    @endif                  
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MOBILE MENU AREA END -->

        @yield('content')

        <!-- Start footer area -->
        <footer id="footer" class="footer-area bg-2 bg-opacity-black-90">
            <div class="footer-top pt-110 pb-80">
                <div class="container">
                    <div class="row">
                        <!-- footer-address -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-widget">
                                <h6 class="footer-titel">GET IN TOUCH</h6>
                                <ul class="footer-address">
                                    <li>
                                        <div class="address-icon">
                                            <img src="website/images/icons/location-2.png" alt="">
                                        </div>
                                        <div class="address-info">
                                            <span>8901 Marmora Raod,</span>
                                            <span>Glasgow, D04  89GR</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="address-icon">
                                            <img src="website/images/icons/phone-3.png" alt="">
                                        </div>
                                        <div class="address-info">
                                            <span>Telephone : (801) 4256  9856</span>
                                            <span>Telephone : (801) 4256  9658</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="address-icon">
                                            <img src="website/images/icons/world.png" alt="">
                                        </div>
                                        <div class="address-info">
                                            <span>Email : info@sheltek.com</span>
                                            <span>Web :<a href="#" target="_blank"> www.sheltek.com</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- footer-latest-news -->
                        <div class="col-lg-6 col-md-5 hidden-sm col-xs-12">
                            <div class="footer-widget middle">
                                <h6 class="footer-titel">LATEST NEWS</h6>
                                <ul class="footer-latest-news">
                                    <li>
                                        <div class="latest-news-image">
                                            <a href="single-blog.html"><img src="website/images/blog/1.jpg" alt=""></a>
                                        </div>
                                        <div class="latest-news-info">
                                            <h6><a href="single-blog.html">Beautiful Home</a></h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur acinglit sed do eiusmod tempor inciidunt ut labore </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="latest-news-image">
                                            <a href="single-blog.html"><img src="website/images/blog/2.jpg" alt=""></a>
                                        </div>
                                        <div class="latest-news-info">
                                            <h6><a href="single-blog.html">Beautiful Home</a></h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur acinglit sed do eiusmod tempor inciidunt ut labore </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="latest-news-image">
                                            <a href="single-blog.html"><img src="website/images/blog/3.jpg" alt=""></a>
                                        </div>
                                        <div class="latest-news-info">
                                            <h6><a href="single-blog.html">Beautiful Home</a></h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur acinglit sed do eiusmod tempor inciidunt ut labore </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- footer-contact -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="footer-widget">
                                <h6 class="footer-titel">QUICK CONTACT</h6>
                                <div class="footer-contact">
                                    <p>Lorem ipsum dolor sit amet, consectetur acinglit sed do eiusmod tempor</p>
                                    <form  id="contact-form-2" action="mail_footer.php" method="post">
                                        <input type="email" name="email2" placeholder="Type your E-mail address...">
                                        <textarea name="message2" placeholder="Write here..."></textarea>
                                        <button type="submit" value="send">Send</button>
                                    </form>
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="copyright text-center">
                                <p>Copyright &copy; 2018 <a href="#"><b>consultortecno</b></a>. Todos los Derechos Reservados.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer area -->
    </div>
    <!-- Body main wrapper end -->




    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="website/js/vendor/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="website/js/bootstrap.min.js"></script>
    <!-- Nivo slider js -->    
    <script src="website/lib/js/jquery.nivo.slider.js"></script>
    <!-- ajax-mail js -->
    <script src="website/js/ajax-mail.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="website/js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="website/js/main.js"></script>

</body>

</html>