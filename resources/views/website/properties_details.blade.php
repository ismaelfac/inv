@extends('index')

@section('content')
<!-- BREADCRUMBS AREA START -->
<div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs">
                            <ul class="breadcrumbs-list">
                                <li><a href="index.html">Inicio</a></li>
                                <li>PRopiedad</li>
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
<!-- PROPERTIES DETAILS AREA START -->
<div class="properties-details-area pt-115 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- pro-details-image -->
                <div class="pro-details-image mb-60">
                    <div class="pro-details-big-image">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="pro-1">
                                <a href="website/images/single-property/big/1.jpg" data-lightbox="image-1" data-title="Sheltek Properties - 1">
                                    <img src="website/images/single-property/big/1.jpg" alt="">
                                </a>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="pro-2">
                                <a href="website/images/single-property/big/2.jpg" data-lightbox="image-1" data-title="Sheltek Properties - 2">
                                    <img src="website/images/single-property/big/2.jpg" alt="">
                                </a>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="pro-3">
                                <a href="website/images/single-property/big/3.jpg" data-lightbox="image-1" data-title="Sheltek Properties - 3">
                                    <img src="website/images/single-property/big/3.jpg" alt="">
                                </a>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="pro-4">
                                <a href="website/images/single-property/big/1.jpg" data-lightbox="image-1" data-title="Sheltek Properties - 4">
                                    <img src="website/images/single-property/big/1.jpg" alt="">
                                </a>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="pro-5">
                                <a href="website/images/single-property/big/2.jpg" data-lightbox="image-1" data-title="Sheltek Properties - 5">
                                    <img src="website/images/single-property/big/2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="pro-details-carousel">
                        <div class="pro-details-item">
                            <a href="#pro-1" data-toggle="tab"><img src="website/images/single-property/small/1.jpg" alt=""></a>
                        </div>
                        <div class="pro-details-item">
                            <a href="#pro-2" data-toggle="tab">
                                <img src="website/images/single-property/small/2.jpg" alt="">                
                            </a>
                        </div>
                        <div class="pro-details-item">
                            <a href="#pro-3" data-toggle="tab">
                                <img src="website/images/single-property/small/3.jpg" alt="">                
                            </a>
                        </div>
                        <div class="pro-details-item">
                            <a href="#pro-4" data-toggle="tab">
                                <img src="website/images/single-property/small/4.jpg" alt="">                
                            </a>
                        </div>
                        <div class="pro-details-item">
                            <a href="#pro-5" data-toggle="tab">
                                <img src="website/images/single-property/small/1.jpg" alt="">                
                            </a>
                        </div>
                    </div>                           
                </div>
                <!-- pro-details-short-info -->
                <div class="pro-details-short-info mb-60">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="pro-details-condition">
                                <h5>COndiciones</h5>
                                <div class="pro-details-condition-inner bg-gray">
                                    <ul class="condition-list">
                                        <li><img src="website/images/icons/5.png" alt="">Area 450 sqft</li>
                                        <li><img src="website/images/icons/6.png" alt="">Bedroom 5</li>
                                        <li><img src="website/images/icons/7.png" alt="">Bathroom 3</li>
                                        <li><img src="website/images/icons/13.png" alt="">Garage 2</li>
                                        <li><img src="website/images/icons/14.png" alt="">Kitchen 2</li>
                                        <li>$52,350</li>
                                    </ul>
                                    <p><img src="website/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey, USA</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="pro-details-amenities">
                                <h5>Amenities</h5>
                                <div class="pro-details-amenities-inner bg-gray">
                                    <ul class="amenities-list">
                                        <li>Air Conditioning</li>
                                        <li>Bedding</li>
                                        <li>Balcony</li>
                                        <li>Cable TV</li>
                                        <li>Internet</li>
                                        <li>Parking</li>
                                        <li>Lift</li>
                                        <li>Pool</li>
                                        <li>Dishwasher</li>
                                        <li>Toaster</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pro-details-description -->
                <div class="pro-details-description mb-50">
                    <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span>
                    Casa hotel de 7 habitaciones baños con jacuzzi, salon de recepciòn, comedor cocina, patio interno, hall de acceso, area social, jardin interno fuente, cuarto de calentadores.  excelente ubicacion  inmueble de interes cultural vias de acceso como la avenida calle 13, la cale 6,la carrera 7 buen estado de conservaciòn. para uso comercial y de servicios.</p>
                </div>
                <!-- pro-details-feedback -->
                <div class="pro-details-feedback mb-40">
                    <h5>3 Comentarios</h5>
                    <!-- media -->
                    <div class="media">
                        <a class="media-left" href="website/#">
                            <img src="website/images/avatar/1.jpg" alt="">
                        </a>
                        <div class="media-body">
                            <h6 class="media-heading"><a href="website/#">David Backhum</a></h6>
                            <p><span>6 hour ago</span>There are some business lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu tempor inc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudt </p>
                        </div>
                    </div>
                    <!-- media -->
                    <div class="media">
                        <a class="media-left" href="website/#">
                            <img src="website/images/avatar/2.jpg" alt="">
                        </a>
                        <div class="media-body">
                            <h6 class="media-heading"><a href="website/#">Saniya Mirza</a></h6>
                            <p><span>8 hour ago</span>There are some business lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu tempor inc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudt </p>
                        </div>
                    </div>
                    <!-- media -->
                    <div class="media">
                        <a class="media-left" href="website/#">
                            <img src="website/images/avatar/3.jpg" alt="">
                        </a>
                        <div class="media-body">
                            <h6 class="media-heading"><a href="website/#">Lionel Messi</a></h6>
                            <p><span>10 hour ago</span>There are some business lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu tempor inc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudt </p>
                        </div>
                    </div>
                </div>
                <!-- agent-review -->
                @include('components.contact_agent')
            </div>
            <div class="col-md-4">
                <!-- widget-search-property -->
                <aside class="widget widget-search-property">
                    <h5>Search For Property</h5>
                    <div class="row">
                        <div class="col-md-6 col-sm-3 col-xs-12">
                            <div class="find-home-item custom-select">                  
                                <select class="selectpicker" title="Location" data-hide-disabled="true" data-live-search="true">
                                    <optgroup disabled="disabled" label="disabled">
                                        <option>Hidden</option>
                                    </optgroup>
                                    <optgroup label="Australia">
                                        <option>Sydney</option>
                                        <option>Melbourne</option>
                                        <option>Cairns</option>
                                    </optgroup>
                                    <optgroup label="USA">
                                        <option>South Carolina</option>
                                        <option>Florida</option>
                                        <option>Rhode Island</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-12">
                            <div class="find-home-item custom-select">                  
                                <select class="selectpicker" title="Sub - Location" data-hide-disabled="true" data-live-search="true">
                                    <optgroup disabled="disabled" label="disabled">
                                        <option>Hidden</option>
                                    </optgroup>
                                    <optgroup label="Australia">
                                        <option>southeastern coast</option>
                                        <option>southeastern tip</option>
                                        <option>northwest corner</option>
                                    </optgroup>
                                    <optgroup label="USA">
                                        <option>Charleston</option>
                                        <option>St. Petersburg</option>
                                        <option>Newport</option>
                                    </optgroup>
                                </select>
                            </div> 
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-12">
                            <div class="find-home-item">
                                <input type="text" name="min-area" placeholder="Min area (sqft)">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-12">
                            <div class="find-home-item">
                                <input type="text" name="max-area" placeholder="Max area (sqft)">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-12">
                            <div class="find-home-item  custom-select">                  
                                <select class="selectpicker" title="No. of Beadrooms" data-hide-disabled="true">
                                    <optgroup  label="1">
                                        <option label="1">1 Beadrooms</option>
                                        <option>2 Beadrooms</option>
                                        <option>3 Beadrooms</option>
                                        <option>4 Beadrooms</option>
                                        <option>5 Beadrooms</option>
                                    </optgroup>
                                </select>
                            </div> 
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-12">
                            <div class="find-home-item custom-select">                  
                                <select class="selectpicker" title="No. of Bathrooms" data-hide-disabled="true">
                                    <optgroup label="2">
                                        <option>1 Bathrooms</option>
                                        <option>2 Bathrooms</option>
                                        <option>3 Bathrooms</option>
                                        <option>4 Bathrooms</option>
                                        <option>5 Bathrooms</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-7 col-xs-12">
                                    <div class="find-home-item">
                                        <!-- shop-filter -->
                                        <div class="shop-filter">
                                            <div class="price_filter">
                                                <div class="price_slider_amount">
                                                    <input type="submit"  value="You range :"/> 
                                                    <input type="text" id="amount" name="price"  placeholder="Add Your Price" /> 
                                                </div>
                                                <div id="slider-range"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-5 col-xs-12">
                                    <div class="find-home-item">
                                        <a class="button-1 btn-block btn-hover-1" href="website/#">SEARCH</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- widget-featured-property -->
                    @include('components.searcher_widget')
                <!-- widget-video -->
                <aside class="widget widget-video">
                    <h5>Sectores mas solicitados</h5>
                    <div class="properties-video">
                        <div class="embed-responsive embed-responsive-16by9">
                            <!-- <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/40934652"></iframe> -->
                            <iframe src="https://player.vimeo.com/video/117765418?title=0&byline=0&portrait=0" allowfullscreen></iframe>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- PROPERTIES DETAILS AREA END -->

<!-- SUBSCRIBE AREA START -->
<div class="subscribe-area bg-blue call-to-bg plr-140 ptb-50">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="section-title text-white">
                    <h3>SUBSCRIBE</h3>
                    <h2 class="h1">NEWSLETTER</h2>
                </div>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="subscribe">
                    <form action="#">
                        <input type="text" name="subscribe" placeholder="Enter yur email here...">
                        <button type="submit" value="send">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SUBSCRIBE AREA END -->
</section>
<!-- End page content -->
@endsection