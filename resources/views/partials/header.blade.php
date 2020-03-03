<nav class="navbar navbar-expand-lg bg-white">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="/theme/img/logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('page', 'about us')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('tours')}}">Tours</a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="destinations.html">Destinations</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="hotels.html">Hotels</a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a class="nav-link" href="{{route('gallery')}}">Gallery</a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="blog.html">Blog</a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a class="nav-link" href="contact-us.html">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- end nav -->
