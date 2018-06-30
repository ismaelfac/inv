@extends('index')

@section('content')
<!-- Start page content -->
<section id="page-content" class="page-wrapper">
    <!-- REGISTER SECTION START -->
    <div class="features-area fix" style="margin-top:55px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 col-md-offset-5">
                    <div class="features-info bg-gray">
                        <div class="section-title mb-30">   
                            <h2 class="h1">CREAR UNA CUENTA</h2>
                        </div>
                        <div class="features-include">
                            <div class="login-section">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="registered-customers mb-50">
                                                @include('partials.forms.auth.register')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- REGISTER SECTION END -->
</section>
<!-- End page content -->
@endsection
