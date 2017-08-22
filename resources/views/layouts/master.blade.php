<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Laravel 5.3 Sample Application example</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">

            @yield('meta')
            <!-- Facebook and Twitter integration -->
            <meta property="og:title" content=""/>
            <meta property="og:image" content=""/>
            <meta property="og:url" content=""/>
            <meta property="og:site_name" content=""/>
            <meta property="og:description" content=""/>
            <meta name="twitter:title" content="" />
            <meta name="twitter:image" content="" />
            <meta name="twitter:url" content="" />
            <meta name="twitter:card" content="" />

            <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

            <!-- Animate.css -->
            <!--<link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}c">-->
            <!-- Icomoon Icon Fonts-->
            <link rel="stylesheet" href="{{ URL::asset('css/icomoon.css') }}">
            <!-- Bootstrap  -->
            <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">

            <!-- Owl Carousel  -->
            <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
            <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css') }}">

            <!-- Theme style  -->
            <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

            <!-- Modernizr JS -->
            <!--<script src="{{ URL::asset('js/modernizr-2.6.2.min.js') }}"></script>-->
            <!-- FOR IE9 below -->
            <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
            <![endif]-->

    </head>


    <body>
        <div class="fh5co-loader"></div>

        <div id="page">

           @include('partials.header')

            
            
            @yield('content')


            <div id="fh5co-started">
                <div class="container">
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                            <h2>Lets Get Started</h2>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <p><a href="#" class="btn btn-default btn-lg">Get in Touch</a></p>
                        </div>
                    </div>
                </div>
            </div>

           @include('partials.footer')
        </div>

        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
        </div>

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- jQuery Easing -->
        <script src="js/jquery.easing.1.3.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Waypoints -->
        <script src="js/jquery.waypoints.min.js"></script>
        <!-- Stellar Parallax -->
        <script src="js/jquery.stellar.min.js"></script>
        <!-- Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Main -->
        <script src="js/main.js"></script>

    </body>
</html>