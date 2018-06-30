@extends('index')

@section('content')
<!-- BREADCRUMBS AREA START -->
        <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs">
                            <h2 class="breadcrumbs-title">Contacto</h2>
                            <ul class="breadcrumbs-list">
                                <li><a href="{{ url('')}}">Inicio</a></li>
                                <li>Contactenos</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS AREA END -->

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">

            <!-- CONTACT AREA START -->
            <div class="contact-area pt-115 pb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-xs-12">
                            <!-- get-in-toch -->
                            <div class="get-in-toch">
                                <div class="section-title mb-30">
                                    <h3>GET IN</h3>
                                    <h2>TOUCH</h2>
                                </div>
                                <div class="contact-desc mb-50">
                                    <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is the best theme for  elit, sed do eiusmod tempor dolor sit ame   tse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation oris nisi ut aliquip</p>
                                </div>
                                <ul class="contact-address">
                                    <li>
                                        <div class="contact-address-icon">
                                            <img src="website/images/icons/location-2.png" alt="">
                                        </div>
                                        <div class="contact-address-info">
                                            <span>8901 Marmora Raod, New Yourk City  </span>
                                            <span>25 Glasgow, D04  89GR</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-address-icon">
                                            <img src="website/images/icons/phone-3.png" alt="">
                                        </div>
                                        <div class="contact-address-info">
                                            <span>Telephone : (801) 4256  9856</span>
                                            <span>Telephone : (801) 4256  9658</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-address-icon">
                                            <img src="website/images/icons/world.png" alt="">
                                        </div>
                                        <div class="contact-address-info">
                                            <span>Email : info@sheltek.com</span>
                                            <span>Web :<a href="#" target="_blank"> www.sheltek.com</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-7 col-xs-12">
                            <div class="contact-messge contact-bg">
                                <!-- blog-details-reply -->
                                <div class="leave-review">
                                    <h5>Leave a Message</h5>
                                    <form  id="contact-form" action="mail.php" method="post">
                                        <input type="text" name="name" placeholder="Your name">
                                        <input type="email" name="email" placeholder="Email">
                                        <textarea name="message" placeholder="Write here"></textarea>
                                        <button type="submit" class="submit-btn-1">SUBMIT</button>
                                    </form>
                                    <p class="form-messege mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTACT AREA END -->

            <!-- SUBSCRIBE AREA START -->
                @include('components.subscribe')
            <!-- SUBSCRIBE AREA END -->
        </section>
        <!-- End page content -->
@endsection