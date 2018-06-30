@extends('index')
@section('content')
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">

            <!-- ERROR AREA START -->
            <div class="error-area ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="error-content ">
                                <h2>404</h2>
                                <h3>Page not found!</h3>
                                <h4>Oops! Looks like something going rong</h4>
                                <p>We can’t seem to find the page you’re looking for <br>
                                    make sure that you have typed the currect URL</p>
                                <a class="go-home" href="index.html">Go to home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ERROR AREA END -->
        </section>
        <!-- End page content -->
    </div>
    <!-- Body main wrapper end -->

@endsection