@extends('index')

@section('content')
  <!-- SLIDER SECTION START -->
  <div class="slider-1 pos-relative slider-overlay">
            <div class="bend niceties preview-1">
                <div id="ensign-nivoslider-3" class="slides">   
                    <div class="col-sm-4 col-xs-12"><img src="website/images/slider/s1.jpeg" alt="" title="#slider-direction-1"  /></div>
                    <div class="col-sm-4 col-xs-12"><img src="website/images/slider/2.jpg" alt="" title="#slider-direction-2"  /></div>
                    <div class="col-sm-4 col-xs-12"><img src="website/images/slider/1.jpg" alt="" title="#slider-direction-3"  /></div>
                                        
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-1" class="slider-direction">
                    <div class="slider-content text-center">
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <h4 class="slider-1-title-1">Welcome to <span>Sheltek</span></h4>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h1 class="slider-1-title-2">FIND YOUR DREAM HOUSE WITH US</h1>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <p class="slider-1-desc">Lorem consectetur adipiscing elit, sed do eiusmod tempor dolor sit amet <br> contetur  adipiscing elit, sed do  eiusmod tempor incididunt </p>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                            <a class="slider-button mt-40" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction">
                    <div class="slider-content text-left">
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <h4 class="slider-1-title-1">Welcome to <span>Sheltek</span></h4>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h1 class="slider-1-title-2">FIND YOUR DREAM HOUSE WITH US</h1>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <p class="slider-1-desc">Lorem consectetur adipiscing elit, sed do eiusmod tempor dolor sit amet <br> contetur  adipiscing elit, sed do  eiusmod tempor incididunt </p>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                            <a class="slider-button mt-40" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-3" class="slider-direction">
                    <div class="slider-content text-right">
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <h4 class="slider-1-title-1">Welcome to <span>Sheltek</span></h4>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h1 class="slider-1-title-2">FIND YOUR DREAM HOUSE WITH US</h1>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <p class="slider-1-desc">Lorem consectetur adipiscing elit, sed do eiusmod tempor dolor sit amet <br> contetur  adipiscing elit, sed do  eiusmod tempor incididunt </p>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                            <a class="slider-button mt-40" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SLIDER SECTION END -->
  <!-- Start page content -->
  <section id="page-content" class="page-wrapper">
            
            <!-- FIND HOME AREA START -->
                @include('components.searcher')
            <!-- FIND HOME AREA END -->
            
            <!-- FEATURED FLAT AREA START -->
            <div class="featured-flat-area pt-115 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title-2 text-center">
                                <h2>Featured PROPERTY</h2>
                                <p>Sheltek is the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud</p>
                            </div>
                        </div>
                    </div>
                    <div class="featured-flat">
                        <div class="row">
                            <!-- flat-item -->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <span class="for-sale">For Sale</span>
                                        <a href="properties-details.html"><img src="website/images/flat/1.jpg" alt=""></a>
                                        <div class="flat-link">
                                            <a href="properties-details.html">More Details</a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="website/images/icons/4.png" alt="">
                                                <span>450 sqft</span>
                                            </li>
                                            <li>
                                                <img src="website/images/icons/5.png" alt="">
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <img src="website/images/icons/6.png" alt="">
                                                <span>3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="properties-details.html">Masons de Villa </a></h5>
                                            <span class="price">$52,350</span>
                                        </div>
                                        <p><img src="website/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <a href="properties-details.html"><img src="website/images/flat/2.jpg" alt=""></a>
                                        <div class="flat-link">
                                            <a href="properties-details.html">More Details</a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="website/images/icons/4.png" alt="">
                                                <span>450 sqft</span>
                                            </li>
                                            <li>
                                                <img src="website/images/icons/5.png" alt="">
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <img src="website/images/icons/6.png" alt="">
                                                <span>3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="properties-details.html">Masons de Villa </a></h5>
                                            <span class="price">$52,350</span>
                                        </div>
                                        <p><img src="website/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <span class="for-sale rent">For rent</span>
                                        <a href="properties-details.html"><img src="website/images/flat/3.jpg" alt=""></a>
                                        <div class="flat-link">
                                            <a href="properties-details.html">More Details</a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="website/images/icons/4.png" alt="">
                                                <span>450 sqft</span>
                                            </li>
                                            <li>
                                                <img src="website/images/icons/5.png" alt="">
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <img src="website/images/icons/6.png" alt="">
                                                <span>3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="properties-details.html">Masons de Villa </a></h5>
                                            <span class="price">$52,350</span>
                                        </div>
                                        <p><img src="website/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <a href="properties-details.html"><img src="website/images/flat/4.jpg" alt=""></a>
                                        <div class="flat-link">
                                            <a href="properties-details.html">More Details</a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="website/images/icons/4.png" alt="">
                                                <span>450 sqft</span>
                                            </li>
                                            <li>
                                                <img src="website/images/icons/5.png" alt="">
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <img src="website/images/icons/6.png" alt="">
                                                <span>3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="properties-details.html">Masons de Villa </a></h5>
                                            <span class="price">$52,350</span>
                                        </div>
                                        <p><img src="website/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <span class="for-sale">For Sale</span>
                                        <a href="properties-details.html"><img src="website/images/flat/5.jpg" alt=""></a>
                                        <div class="flat-link">
                                            <a href="properties-details.html">More Details</a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="website/images/icons/4.png" alt="">
                                                <span>450 sqft</span>
                                            </li>
                                            <li>
                                                <img src="website/images/icons/5.png" alt="">
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <img src="website/images/icons/6.png" alt="">
                                                <span>3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="properties-details.html">Masons de Villa </a></h5>
                                            <span class="price">$52,350</span>
                                        </div>
                                        <p><img src="website/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <a href="properties-details.html"><img src="website/images/flat/6.jpg" alt=""></a>
                                        <div class="flat-link">
                                            <a href="properties-details.html">More Details</a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="website/images/icons/4.png" alt="">
                                                <span>450 sqft</span>
                                            </li>
                                            <li>
                                                <img src="website/images/icons/5.png" alt="">
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <img src="website/images/icons/6.png" alt="">
                                                <span>3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="properties-details.html">Masons de Villa </a></h5>
                                            <span class="price">$52,350</span>
                                        </div>
                                        <p><img src="website/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <span class="for-sale rent">For rent</span>
                                        <a href="properties-details.html"><img src="website/images/flat/7.jpg" alt=""></a>
                                        <div class="flat-link">
                                            <a href="properties-details.html">More Details</a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="website/images/icons/4.png" alt="">
                                                <span>450 sqft</span>
                                            </li>
                                            <li>
                                                <img src="website/images/icons/5.png" alt="">
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <img src="website/images/icons/6.png" alt="">
                                                <span>3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="properties-details.html">Masons de Villa </a></h5>
                                            <span class="price">$52,350</span>
                                        </div>
                                        <p><img src="website/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <a href="properties-details.html"><img src="website/images/flat/8.jpg" alt=""></a>
                                        <div class="flat-link">
                                            <a href="properties-details.html">More Details</a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="website/images/icons/4.png" alt="">
                                                <span>450 sqft</span>
                                            </li>
                                            <li>
                                                <img src="website/images/icons/5.png" alt="">
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <img src="website/images/icons/6.png" alt="">
                                                <span>3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="properties-details.html">Masons de Villa </a></h5>
                                            <span class="price">$52,350</span>
                                        </div>
                                        <p><img src="website/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-md-4 hidden-sm col-xs-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <span class="for-sale">For Sale</span>
                                        <a href="properties-details.html"><img src="website/images/flat/9.jpg" alt=""></a>
                                        <div class="flat-link">
                                            <a href="properties-details.html">More Details</a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="website/images/icons/4.png" alt="">
                                                <span>450 sqft</span>
                                            </li>
                                            <li>
                                                <img src="website/images/icons/5.png" alt="">
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <img src="website/images/icons/6.png" alt="">
                                                <span>3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="properties-details.html">Masons de Villa </a></h5>
                                            <span class="price">$52,350</span>
                                        </div>
                                        <p><img src="website/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FEATURED FLAT AREA END -->

            <!-- BLOG AREA START -->
            <div class="blog-area pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title-2 text-center">
                                <h2>FROM BLOG</h2>
                                <p>Sheltek is the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="blog-carousel">
                            <!-- blog-item -->
                            <div class="col-md-12">
                                <article class="blog-item bg-gray">
                                    <div class="blog-image">
                                        <a href="single-blog.html"><img src="website/images/blog/1.jpg" alt=""></a>
                                    </div>
                                    <div class="blog-info">
                                        <div class="post-title-time">
                                            <h5><a href="single-blog.html">Maridland de Villa</a></h5>
                                            <p>July 30, 2016 / 10 am</p>
                                        </div>
                                        <p>Lorem must explain to you how all this mistaolt denouncing pleasure and praising pain wasnad I will give you a complete pain was praising</p>
                                        <a class="read-more" href="single-blog.html">Read more</a>
                                    </div>
                                </article>
                            </div>
                            <!-- blog-item -->
                            <div class="col-md-12">
                                <article class="blog-item bg-gray">
                                    <div class="blog-image">
                                        <a href="single-blog.html"><img src="website/images/blog/2.jpg" alt=""></a>
                                    </div>
                                    <div class="blog-info">
                                        <div class="post-title-time">
                                            <h5><a href="single-blog.html">Latest Design House</a></h5>
                                            <p>July 30, 2016 / 10 am</p>
                                        </div>
                                        <p>Lorem must explain to you how all this mistaolt denouncing pleasure and praising pain wasnad I will give you a complete pain was praising</p>
                                        <a class="read-more" href="single-blog.html">Read more</a>
                                    </div>
                                </article>
                            </div>
                            <!-- blog-item -->
                            <div class="col-md-12">
                                <article class="blog-item bg-gray">
                                    <div class="blog-image">
                                        <a href="single-blog.html"><img src="website/images/blog/3.jpg" alt=""></a>
                                    </div>
                                    <div class="blog-info">
                                        <div class="post-title-time">
                                            <h5><a href="single-blog.html">Duplex Villa House</a></h5>
                                            <p>July 30, 2016 / 10 am</p>
                                        </div>
                                        <p>Lorem must explain to you how all this mistaolt denouncing pleasure and praising pain wasnad I will give you a complete pain was praising</p>
                                        <a class="read-more" href="single-blog.html">Read more</a>
                                    </div>
                                </article>
                            </div>
                            <!-- blog-item -->
                            <div class="col-md-12">
                                <article class="blog-item bg-gray">
                                    <div class="blog-image">
                                        <a href="single-blog.html"><img src="website/images/blog/2.jpg" alt=""></a>
                                    </div>
                                    <div class="blog-info">
                                        <div class="post-title-time">
                                            <h5><a href="single-blog.html">Latest Design House</a></h5>
                                            <p>July 30, 2016 / 10 am</p>
                                        </div>
                                        <p>Lorem must explain to you how all this mistaolt denouncing pleasure and praising pain wasnad I will give you a complete pain was praising</p>
                                        <a class="read-more" href="single-blog.html">Read more</a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BLOG AREA END -->

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