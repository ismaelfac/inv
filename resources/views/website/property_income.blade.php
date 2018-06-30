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
                                <li>Propiedad</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS AREA END -->
<!-- Start page content -->
<section id="page-content" class="page-wrapper">
<!-- PROPERTIES DETAILS AREA START -->
<div class="properties-details-area pt-115 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
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
            <div class="col-md-7">
                <div class="elements-tab-1">
                    <h5 class="mb-50">Ingresa aqui tu inmueble, proyecto o lote</h5>
                    <div class="col-md-12 col-sm-5 col-xs-12">
                        <div class="find-home-item">
                            <a class="button-1 btn-block btn-hover-1" href="website/#">CREAR INMUEBLE</a>
                        </div>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home_1"  data-toggle="tab">Datos Generales</a></li>
                        <li><a href="#profile_1"  data-toggle="tab">Condiciones</a></li>
                        <li><a href="#messages_1"  data-toggle="tab">Caracteristicas</a></li>
                        <li><a href="#settings_1"  data-toggle="tab">Ubicación Geografica</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="home_1">
                        <div class="pro-details-short-info mb-60">
                                <div class="row">
                                    <!-- Datos Generales -->
                                    @include('partials.forms.property_income_general')
                                    <!-- Datos Generales --> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile_1">
                            <div class="pro-details-short-info mb-60">
                                <div class="row">
                                    <!-- pro-details-short-info -->
                                    @include('partials.forms.conditions')
                                <!-- pro-details-description --> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="messages_1">
                            <div class="pro-details-short-info mb-60">
                                <div class="row">
                                    <!-- pro-details-short-info -->
                                    @include('partials.forms.amenities')
                                <!-- pro-details-description --> 
                                </div>
                            </div> 
                        </div>
                        <div class="tab-pane fade" id="settings_1">
                            <div class="pro-details-short-info mb-60">
                                <div class="row">
                                    <!-- Datos Generales -->
                                    @include('partials.forms.property_income_general')
                                    <!-- Datos Generales --> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>           
            </div>
        </div>
    </div>
</div>
<!-- PROPERTIES DETAILS AREA END -->

<!-- SUBSCRIBE AREA START -->
@include('components.subscribe')
<!-- SUBSCRIBE AREA END -->
</section>
<!-- End page content -->
@endsection