@extends('index')

@section('content')
   <!-- BREADCRUMBS AREA START -->
        <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs">
                            <h2 class="breadcrumbs-title">Blog Details</h2>
                            <ul class="breadcrumbs-list">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li>Blog Details</li>
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
            <!-- BLOG AREA START -->
            <div class="blog-area pt-115 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-xs-12">
                            <div class="blog-details-area">
                                <!-- blog-details-image -->
                                <div class="blog-details-image">
                                    <img src="website/images/blog/blog-details.jpg" alt="">
                                </div>
                                <!-- blog-details-title-time -->
                                <div class="blog-details-title-time">
                                    <h5>New Building design</h5>
                                    <p>July 18, 2016 / 5 pm</p>
                                </div>
                                <!-- blog-details-desctiption -->
                                <div class="blog-details-desctiption mb-60">
                                    <p>New Building Design ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna iqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipx ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat lla pariatur dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                                    <p>Sheltek is the Best  should be the consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etlore magna iqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eacm</p>
                                    <div class="blog-quote">
                                        <p>Real Estate should be the consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna iqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labris nisi ut aliquip ex ea commodo consequat quis nostrud exercitation ullamco. </p>
                                    </div>
                                    <p>There are some design tends  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inc     dunt ut labore et dolore magna iqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                                </div>
                                <!-- blog-details-share-tags -->
                                <div class="blog-details-share-tags clearfix mb-75">
                                    <div class="blog-details-tags f-left">
                                        <ul>
                                            <li>Tags :</li>
                                            <li><a href="#">Apartment,</a></li>
                                            <li><a href="#">Building,</a></li>
                                            <li><a href="#">Real Estate,</a></li>
                                            <li><a href="#">Commercial</a></li>
                                        </ul>
                                    </div>
                                    <div class="blog-details-share f-right">
                                        <ul class="social-media">
                                            <li>Share:</li>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div> 
                                <!-- blog-details-author-post -->
                                <div class="blog-details-author-post clearfix line-bottom pb-30 mb-115">
                                    <div class="blog-details-author-image">
                                        <a href="agent-details.html"><img src="website/images/avatar/1.jpg" alt=""></a>
                                    </div>
                                    <div class="blog-details-author-desc">
                                        <div class="blog-details-author-name">
                                            <h6><a href="agent-details.html">Momen Bhuyan</a></h6>
                                            <p class="">Author</p>
                                        </div>
                                        <p>There are some business lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                                    </div>
                                </div>
                                <!-- pro-details-feedback -->
                                <div class="pro-details-feedback mb-100">
                                    <h5>Comments</h5>
                                    <!-- media -->
                                    <div class="media">
                                        <a class="media-left" href="#">
                                            <img src="website/images/avatar/1.jpg" alt="">
                                        </a>
                                        <div class="media-body">
                                            <h6 class="media-heading"><a href="#">David Backhum</a></h6>
                                            <p><span>6 hour ago</span>There are some business lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu tempor inc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudt </p>
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                    <!-- media -->
                                    <div class="media">
                                        <a class="media-left" href="#">
                                            <img src="website/images/avatar/2.jpg" alt="">
                                        </a>
                                        <div class="media-body">
                                            <h6 class="media-heading"><a href="#">Saniya Mirza</a></h6>
                                            <p><span>8 hour ago</span>There are some business lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu tempor inc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudt </p>
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                    <!-- media -->
                                    <div class="media">
                                        <a class="media-left" href="#">
                                            <img src="website/images/avatar/3.jpg" alt="">
                                        </a>
                                        <div class="media-body">
                                            <h6 class="media-heading"><a href="#">Lionel Messi</a></h6>
                                            <p><span>10 hour ago</span>There are some business lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu tempor inc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudt </p>
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- blog-details-reply -->
                                <div class="blog-details-reply leave-review">
                                    <h5>Leave a Coment</h5>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" name="name" placeholder="Your name">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <textarea placeholder="Write here"></textarea>
                                        <button type="button" class="submit-btn-1">SUBMIT COMMENT</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <!-- widget-search -->
                            <aside class="widget widget-search mb-30">
                                <form action="#">
                                    <input type="text" name="search" placeholder="Search...">
                                    <button type="button" class=""><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </aside>
                            <!-- widget-categories -->
                            <aside class="widget widget-categories mb-50">
                                <h5>Categories</h5>
                                <ul class="widget-categories-list">
                                    <li><a href="#">Apartment <span>1420</span></a></li>
                                    <li><a href="#">Apartment Building <span>780</span></a></li>
                                    <li><a href="#">Bungalow <span>670</span></a></li>
                                    <li><a href="#">Corporate House <span>520</span></a></li>
                                    <li><a href="#">Duplex Villa <span>350</span></a></li>
                                </ul>
                            </aside>
                            <!-- widget-recent-post -->
                            <aside class="widget widget-recent-post mb-50">
                                <h5>Recent Post</h5>
                                <div class="row">
                                    <!-- blog-item -->
                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                        <article class="recent-post-item">
                                            <div class="recent-post-image">
                                                <a href="single-blog.html"><img src="website/images/recent-post/1.jpg" alt=""></a>
                                            </div>
                                            <div class="recent-post-info">
                                                <div class="recent-post-title-time">
                                                    <h5><a href="single-blog.html">Maridland de Villa</a></h5>
                                                    <p>July 30, 2016 / 10 am</p>
                                                </div>
                                                <p>Lorem must explain to you how all this mistaolt</p>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- blog-item -->
                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                        <article class="recent-post-item">
                                            <div class="recent-post-image">
                                                <a href="single-blog.html"><img src="website/images/recent-post/2.jpg" alt=""></a>
                                            </div>
                                            <div class="recent-post-info">
                                                <div class="recent-post-title-time">
                                                    <h5><a href="single-blog.html">Maridland de Villa</a></h5>
                                                    <p>July 30, 2016 / 10 am</p>
                                                </div>
                                                <p>Lorem must explain to you how all this mistaolt</p>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- blog-item -->
                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                        <article class="recent-post-item">
                                            <div class="recent-post-image">
                                                <a href="single-blog.html"><img src="website/images/recent-post/3.jpg" alt=""></a>
                                            </div>
                                            <div class="recent-post-info">
                                                <div class="recent-post-title-time">
                                                    <h5><a href="single-blog.html">Maridland de Villa</a></h5>
                                                    <p>July 30, 2016 / 10 am</p>
                                                </div>
                                                <p>Lorem must explain to you how all this mistaolt</p>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- blog-item -->
                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                        <article class="recent-post-item">
                                            <div class="recent-post-image">
                                                <a href="single-blog.html"><img src="website/images/recent-post/3.jpg" alt=""></a>
                                            </div>
                                            <div class="recent-post-info">
                                                <div class="recent-post-title-time">
                                                    <h5><a href="single-blog.html">Maridland de Villa</a></h5>
                                                    <p>July 30, 2016 / 10 am</p>
                                                </div>
                                                <p>Lorem must explain to you how all this mistaolt</p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </aside>
                            <!-- widget-archive -->
                            <aside class="widget widget-archive mb-50">
                                <h5>Archive</h5>
                                <ul class="widget-archive-list">
                                    <li><a href="#">August <span>2016</span></a></li>
                                    <li><a href="#">June <span>2016</span> </a></li>
                                    <li><a href="#">May <span>2016</span> </a></li>
                                    <li><a href="#">April <span>2016</span> </a></li>
                                    <li><a href="#">March <span>2016</span> </a></li>
                                </ul>   
                            </aside>
                            <!-- widget-twitter -->
                            <aside class="widget widget-twitter mb-60">
                                <h5>Latest Tweets</h5>
                                <div class="single-twette">
                                    <div class="twitter-icon">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div class="tweet-brief">
                                        <p><a href="#">@Lorem ipsum</a> dolor sit amet, costetur adipiscing elit, sed do eiusmod tempor  <span>Ronchi / 3 hour ago</span></p>
                                    </div>
                                </div>
                                <div class="single-twette">
                                    <div class="twitter-icon">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div class="tweet-brief">
                                        <p><a href="#">@Lorem ipsum</a> dolor sit amet, costetur adipiscing elit, sed do eiusmod tempor  <span>Ronchi / 3 hour ago</span></p>
                                    </div>
                                </div>
                                <div class="single-twette">
                                    <div class="twitter-icon">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div class="tweet-brief">
                                        <p><a href="#">@Lorem ipsum</a> dolor sit amet, costetur adipiscing elit, sed do eiusmod tempor  <span>Ronchi / 3 hour ago</span></p>
                                    </div>
                                </div>
                            </aside>
                            <!-- widget-add -->
                            <aside class="widget widget-add mb-0">
                                <div class="widget-add-item">
                                    <div class="widget-add-image">
                                        <a href="#"><img src="website/images/others/add.jpg" alt=""></a>
                                        <div class="widget-add-info">
                                            <h5><a href="#"><span>25% off</span> <br> Build Your <br> Dream with Us</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BLOG AREA END -->
            
            <!-- SUBSCRIBE AREA START -->
             @include('components.subscribe')
            <!-- SUBSCRIBE AREA END -->
        </section>
        <!-- End page content -->
@endsection