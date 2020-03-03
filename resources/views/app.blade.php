<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Manali - Tour & Travels Agency Template</title>
        <link rel="shortcut icon" href="/theme/img/favicon.png" type="image/x-icon">
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
