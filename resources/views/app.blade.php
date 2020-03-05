<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Manali - Tour & Travels Agency Template</title>
        <link rel="shortcut icon" href="/tour-baku/Faviction/favicon-96x96.png" type="image/x-icon">
        <!-- Bootstrap Core CSS -->
        <link href="/theme/css/bootstrap.min.css" rel="stylesheet">
        <!-- Animate CSS -->
        <link href="/theme/css/animate.css" rel="stylesheet">
        <!-- Venobox CSS -->
        <link href="/theme/css/venobox.css" rel="stylesheet">
        <!-- Font-awesome -->
        <link rel="stylesheet" href="/theme/fonts/font-awesome/css/font-awesome.min.css">
        <!-- Flaticon -->
        <link rel="stylesheet" href="/theme/fonts/flaticon/css/flaticon.css">
        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700,800,900" rel="stylesheet">
        <!-- Main CSS -->
        <link href="/theme/style.css" rel="stylesheet">
        <link href="/theme/css/font-icons.css" rel="stylesheet">
        <style>
            .heading-title{
                /*text-decoration: underline;*/
                border-bottom: 1px solid #E5E5E5;
            }
            .clearfix{
                margin: 7px;
            }
            ul.list-li-border-top > li{
                border-top: 1px solid #EAEAEA;
                padding-top: 12px;
                margin-top: 12px;
            }
            ul.list-li-border-top li:first-child {
                 border-top: 0;
            }
            .success-icon-text {
                text-align: center;
                line-height: 1.45;
                border-top: 1px solid #DEE2E6;
                border-bottom: 1px solid #DEE2E6;
                padding: 50px 100px;
                background-color: #FCFCFC;
            }
            .success-icon-text .icon-font {
                font-size: 60px;
                display: block;
                line-height: 1;
            }
            .spacing-1, .letter-spacing-1 {
                letter-spacing: 1px;
                /*font-family: 'Metropolis', sans-serif;*/
                color: #212121;
                font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
            }
            .mb-50 {
                margin-bottom: 50px !important;
            }
            .booking-box .box-bottom {
                padding: 22px 40px 18px;
                line-height: 1.25;
                border-top: 1px solid #E5E5E5;
            }
            .booking-box .box-content {
                padding: 40px;
            }
            .icon-font > i{
                font-size: 33px;
            }
        </style>

        @yield('styles')

    </head>

    <body>

        @include('partials.preload')

        @include('partials.header')

        @yield('content')

        @include('partials.footer')
        <!-- end footer -->

        <!-- Bact to top -->
        <div class="back-top">
            <a href="#"><i class="fa fa-angle-up"></i></a>
        </div>

        <!-- jQuery -->
        <script src="/theme/js/jquery-3.3.1.min.js"></script>
        <script src="/theme/js/popper.min.js"></script>
        <script src="/theme/js/bootstrap.min.js"></script>
        <script src="/theme/js/jquery.easing.min.js"></script>
        <script src="/theme/js/wow.js"></script>
        <script src="/theme/js/venobox.min.js"></script>
        <script src="/theme/js/SmoothScroll.js"></script>
        <script src="/theme/js/jquery.filterizr.min.js"></script>
        <script src="/theme/js/sticky-kit.min.js"></script>
        <script src="/theme/mail/js/form-validator.min.js"></script>
        <script src="/theme/mail/js/contact-form-script.js"></script>
        <script src="/theme/js/script.js"></script>
        @yield('scripts')
    </body>
</html>
