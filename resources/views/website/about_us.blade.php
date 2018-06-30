@extends('index')

@section('content')
<!-- BREADCRUMBS AREA START -->
        <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs">
                            <h2 class="breadcrumbs-title">About</h2>
                            <ul class="breadcrumbs-list">
                                <li><a href="index.html">Home</a></li>
                                <li>About</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS AREA END -->

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <!-- FIND HOME AREA START -->
            @include('components.searcher')
            <!-- FIND HOME AREA END -->
            
            <!-- ABOUT SHELTEK AREA START -->
            <div class="about-sheltek-area ptb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-push-6 col-xs-12">
                            <div class="section-title mb-30">
                                <h3>BIENVENIDO </h3>
                                <h2>QUIENES SOMOS?</h2>
                            </div>
                            <div class="about-sheltek-info">
                                <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Inversiones & Proyectos</span> 
                                Es un aliado estratégico en bienes raíces para las empresas que buscan fortalecer su posicionamiento en el mercado, brindando a sus clientes las mejores alternativas en inmuebles comerciales para la ubicación de sus puntos de venta; siempre partiendo de las necesidades de sus marcas con un único fin de generar un mayor crecimiento a sus negocios. </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-sm-pull-6 col-xs-12">
                            <div class="about-image">
                                <img src="website/images/about/3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT SHELTEK AREA END -->
            
             <!-- FEATURES AREA START -->
             <div class="features-area fix">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-7 col-md-offset-5">
                            <div class="features-info bg-gray">
                                <div class="section-title mb-30">
                                    <h3>PORTAFOLIO DE</h3>
                                    <h2 class="h1">SERVICIOS</h2>
                                </div>
                                <div class="features-desc">
                                    <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do smod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation oris nisi</p>
                                </div>
                                <div class="features-include">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-4">
                                            <div class="features-include-list">
                                                <h6><img src="website/images/icons/7.png" alt="">Arriendos</h6>
                                                <p>Lorem is a dummy text do eiud tempor dolor sit amet dum</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-4">
                                            <div class="features-include-list">
                                                <h6><img src="website/images/icons/7.png" alt="">Ventas</h6>
                                                <p>Lorem is a dummy text do eiud tempor dolor sit amet dum</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-4">
                                            <div class="features-include-list">
                                                <h6><img src="website/images/icons/7.png" alt="">Asesoría Inmobiliaria</h6>
                                                <p>Lorem is a dummy text do eiud tempor dolor sit amet dum</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-4">
                                            <div class="features-include-list">
                                                <h6><img src="website/images/icons/7.png" alt="">Adecuación de Locales Comerciales</h6>
                                                <p>Lorem is a dummy text do eiud tempor dolor sit amet dum</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-4">
                                            <div class="features-include-list">
                                                <h6><img src="website/images/icons/7.png" alt="">Marketing</h6>
                                                <p>Lorem is a dummy text do eiud tempor dolor sit amet dum</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-4">
                                            <div class="features-include-list">
                                                <h6><img src="website/images/icons/7.png" alt="">Publicación de su Inmueble</h6>
                                                <p>Lorem is a dummy text do eiud tempor dolor sit amet dum</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FEATURES AREA END -->
            
            <!-- BOOKING AREA START -->
            <div class="booking-area bg-1 call-to-bg plr-140 pt-75">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="section-title text-white">
                                <h3>SOME</h3>
                                <h2 class="h1">FUN FACTOR</h2>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-8 col-xs-12">
                            <div class="booking-conternt  clearfix">
                                <div class="counter-content">
                                    <!-- counter-item -->
                                    <div class="counter-item">
                                        <h2>
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span class="counter">999</span>
                                        </h2>
                                        <p>Complete Project</p>
                                    </div>
                                    <!-- counter-item -->
                                    <div class="counter-item">
                                        <h2>
                                            <i class="fa fa-key" aria-hidden="true"></i>
                                            <span class="counter">555</span>
                                        </h2>
                                        <p>Property Sold</p>
                                    </div>
                                    <!-- counter-item -->
                                    <div class="counter-item">
                                        <h2>
                                            <i class="fa fa-smile-o" aria-hidden="true"></i>
                                            <span class="counter">350</span>
                                        </h2>
                                        <p>Happy Clients</p>
                                    </div>
                                    <!-- counter-item -->
                                    <div class="counter-item">
                                        <h2>
                                            <i class="fa fa-trophy" aria-hidden="true"></i>
                                            <span class="counter">100</span>
                                        </h2>
                                        <p>Awards Win</p>
                                    </div>
                                </div>
                                <div class="booking-imgae">
                                    <img src="website/images/others/booking.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BOOKING AREA END -->
            
            <!-- OUR AGENTS AREA START -->
            <div class="our-agents-area pt-115 pb-55">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title-2 text-center">
                                <h2>OUR AGENTS</h2>
                                <p>Sheltek is the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud</p>
                            </div>
                        </div>
                    </div>
                    <div class="our-agents">
                        <div class="row">
                            <div class="agents-carousel">
                                <!-- single-agent -->
                                <div class="col-md-12">
                                    <div class="single-agent">
                                        <div class="agent-image">
                                            <img src="website/images/agents/1.jpg" alt="">
                                        </div>
                                        <div class="agent-info">
                                            <div class="agent-name">
                                                <h5><a href="#">Shah M Nawaz</a></h5>
                                                <p>Real Estate Agent</p>
                                            </div>
                                        </div>
                                        <div class="agent-info-hover">
                                            <div class="agent-name">
                                                <h5><a href="#">Shah M Nawaz</a></h5>
                                                <p>Real Estate Agent</p>
                                            </div>
                                            <ul class="agent-address">
                                                <li><img src="website/images/icons/phone-2.png" alt="">+1245  785  659 </li>
                                                <li><img src="website/images/icons/mail-close.png" alt="">eva@gmail.com </li>
                                            </ul>
                                            <ul class="social-media">
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-agent -->
                                <div class="col-md-12">
                                    <div class="single-agent">
                                        <div class="agent-image">
                                            <img src="website/images/agents/2.jpg" alt="">
                                        </div>
                                        <div class="agent-info">
                                            <div class="agent-name">
                                                <h5><a href="#">Eva Sharlin</a></h5>
                                                <p>Real Estate Broker</p>
                                            </div>
                                        </div>
                                        <div class="agent-info-hover">
                                            <div class="agent-name">
                                                <h5><a href="#">Eva Sharlin</a></h5>
                                                <p>Real Estate Broker</p>
                                            </div>
                                            <ul class="agent-address">
                                                <li><img src="website/images/icons/phone-2.png" alt="">+1245  785  659 </li>
                                                <li><img src="website/images/icons/mail-close.png" alt="">eva@gmail.com </li>
                                            </ul>
                                            <ul class="social-media">
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-agent -->
                                <div class="col-md-12">
                                    <div class="single-agent">
                                        <div class="agent-image">
                                            <img src="website/images/agents/3.jpg" alt="">
                                        </div>
                                        <div class="agent-info">
                                            <div class="agent-name">
                                                <h5><a href="#">Momen Bhuyan</a></h5>
                                                <p>Real Estate Broker</p>
                                            </div>
                                        </div>
                                        <div class="agent-info-hover">
                                            <div class="agent-name">
                                                <h5><a href="#">Momen Bhuyan</a></h5>
                                                <p>Real Estate Broker</p>
                                            </div>
                                            <ul class="agent-address">
                                                <li><img src="website/images/icons/phone-2.png" alt="">+1245  785  659 </li>
                                                <li><img src="website/images/icons/mail-close.png" alt="">eva@gmail.com </li>
                                            </ul>
                                            <ul class="social-media">
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-agent -->
                                <div class="col-md-12">
                                    <div class="single-agent">
                                        <div class="agent-image">
                                            <img src="website/images/agents/4.jpg" alt="">
                                        </div>
                                        <div class="agent-info">
                                            <div class="agent-name">
                                                <h5><a href="#">Sarmin Tabassum</a></h5>
                                                <p>Real Estate Agent</p>
                                            </div>
                                        </div>
                                        <div class="agent-info-hover">
                                            <div class="agent-name">
                                                <h5><a href="#">Sarmin Tabassum</a></h5>
                                                <p>Real Estate Agent</p>
                                            </div>
                                            <ul class="agent-address">
                                                <li><img src="website/images/icons/phone-2.png" alt="">+1245  785  659 </li>
                                                <li><img src="website/images/icons/mail-close.png" alt="">eva@gmail.com </li>
                                            </ul>
                                            <ul class="social-media">
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-agent -->
                                <div class="col-md-12">
                                    <div class="single-agent">
                                        <div class="agent-image">
                                            <img src="website/images/agents/3.jpg" alt="">
                                        </div>
                                        <div class="agent-info">
                                            <div class="agent-name">
                                                <h5><a href="#">Momen Bhuyan</a></h5>
                                                <p>Real Estate Broker</p>
                                            </div>
                                        </div>
                                        <div class="agent-info-hover">
                                            <div class="agent-name">
                                                <h5><a href="#">Momen Bhuyan</a></h5>
                                                <p>Real Estate Broker</p>
                                            </div>
                                            <ul class="agent-address">
                                                <li><img src="website/images/icons/phone-2.png" alt="">+1245  785  659 </li>
                                                <li><img src="website/images/icons/mail-close.png" alt="">eva@gmail.com </li>
                                            </ul>
                                            <ul class="social-media">
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- OUR AGENTS AREA END -->

            <!-- TESTIMONIAL AREA START -->
            <div class="testimonial-area pb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="testimonial">
                                <div class="row">
                                    <div class="col-md-8 col-sm-9">
                                        <div class="section-title mb-30">
                                            <h3>SOME OF OUR</h3>
                                            <h2 class="h1">HAPPY CLIENTS</h2>
                                        </div>
                                        <div class="testimonial-carousel dots-right-btm">
                                            <!-- testimonial-item -->
                                            <div class="testimonial-item">
                                                <div class="testimonial-brief">
                                                    <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, ed do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation oris nisi ut aliquip ex ea commodo equat. Duis aute irure dolo. liquatd minim veniam, quis nostrud exercitation oris nisi ut aliquip ex ea commodo equat. Duis aute irure dolo uis nostrud exercitation</p>
                                                </div>
                                                <h6>Zasica Luci, <span>CEO</span></h6>
                                            </div>
                                            <!-- testimonial-item -->
                                            <div class="testimonial-item">
                                                <div class="testimonial-brief">
                                                    <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, ed do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation oris nisi ut aliquip ex ea commodo equat. Duis aute irure dolo. liquatd minim veniam, quis nostrud exercitation oris nisi ut aliquip ex ea commodo equat. Duis aute irure dolo uis nostrud exercitation</p>
                                                </div>
                                                <h6>Zasica Luci, <span>CEO</span></h6>
                                            </div>
                                            <!-- testimonial-item -->
                                            <div class="testimonial-item">
                                                <div class="testimonial-brief">
                                                    <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, ed do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation oris nisi ut aliquip ex ea commodo equat. Duis aute irure dolo. liquatd minim veniam, quis nostrud exercitation oris nisi ut aliquip ex ea commodo equat. Duis aute irure dolo uis nostrud exercitation</p>
                                                </div>
                                                <h6>Zasica Luci, <span>CEO</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-3">
                                        <div class="testimonial-image">
                                            <img src="website/images/others/testimonial.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TESTIMONIAL AREA END -->

            <!-- BRAND AREA START -->
            <div class="brand-area pb-115">
                <div class="container">
                    <div class="row">
                        <div class="brand-carousel">
                            <!-- brand-item -->
                            <div class="col-md-12">
                                <div class="brand-item">
                                    <img src="website/images/brand/1.png" alt="">
                                </div>
                            </div>
                            <!-- brand-item -->
                            <div class="col-md-12">
                                <div class="brand-item">
                                    <img src="website/images/brand/2.png" alt="">
                                </div>
                            </div>
                            <!-- brand-item -->
                            <div class="col-md-12">
                                <div class="brand-item">
                                    <img src="website/images/brand/3.png" alt="">
                                </div>
                            </div>
                            <!-- brand-item -->
                            <div class="col-md-12">
                                <div class="brand-item">
                                    <img src="website/images/brand/4.png" alt="">
                                </div>
                            </div>
                            <!-- brand-item -->
                            <div class="col-md-12">
                                <div class="brand-item">
                                    <img src="website/images/brand/5.png" alt="">
                                </div>
                            </div>
                            <!-- brand-item -->
                            <div class="col-md-12">
                                <div class="brand-item">
                                    <img src="website/images/brand/1.png" alt="">
                                </div>
                            </div>
                            <!-- brand-item -->
                            <div class="col-md-12">
                                <div class="brand-item">
                                    <img src="website/images/brand/4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BRAND AREA END -->
            
            <!-- SUBSCRIBE AREA START -->
             @include('components.subscribe')
            <!-- SUBSCRIBE AREA END -->
        </section>
        <!-- End page content -->
@endsection