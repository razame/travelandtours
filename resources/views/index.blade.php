@extends("app")

@section('content')



    <section class="carousel slide" id="banner" data-ride="carousel" data-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image:url(/theme/img/banner/slide-1.jpg)">
                <div class="banner-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="hero-text">
                                    <h6 class="animated fadeInDown">Consetetur Adipiscing</h6>
                                    <h1 class="animated fadeInUp">Best travel agency</h1>
                                    <p class="animated fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt ullamcorper magna, in tincidunt ex auctor et.</p>
                                    <a href="contact-us.html" class="btn btn-primary animated fadeInUp">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item" style="background-image:url(/theme/img/banner/slide-2.jpg)">
                <div class="banner-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="hero-text">
                                    <h6 class="animated fadeInLeft">Consetetur Adipiscing</h6>
                                    <h1 class="animated fadeInLeft">Trusted Travel Agency</h1>
                                    <p class="animated fadeInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt ullamcorper magna, in tincidunt ex auctor et.</p>
                                    <a href="contact-us.html" class="btn btn-primary animated fadeInLeft">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item" style="background-image:url(/theme/img/banner/slide-3.jpg)">
                <div class="banner-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="hero-text">
                                    <h6 class="animated fadeInRight">Consetetur Adipiscing</h6>
                                    <h1 class="animated fadeInRight">Get Exclusive Tour</h1>
                                    <p class="animated fadeInRight">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt ullamcorper magna, in tincidunt ex auctor et.</p>
                                    <a href="contact-us.html" class="btn btn-primary animated fadeInRight">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <ol class="carousel-indicators">
                <li data-target="#banner" data-slide-to="0" class="active"></li>
                <li data-target="#banner" data-slide-to="1"></li>
                <li data-target="#banner" data-slide-to="2"></li>
            </ol>
        </div>
    </section>
    <!-- end banner -->

    @include('partials.services')

    <section class="section-spacing inverse-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2><span>Featured tours</span></h2>
{{--                        <p>Sorem ipsum dolor sit amet, consectetur adipisicing Suscipit votas aperiam Sorem ipsum dolor consectur adipisicing elit.</p>--}}
                    </div>
                </div>
            </div>

            @include('partials.featured_packages')
        </div>
    </section>
    <!-- end featured tour -->

{{--    @include('partials.destinations')--}}

{{--    @include('partials.gallery')--}}

{{--    @include('partials.popular_hotels')--}}

{{--    @include('partials.testimonials')--}}




@endsection
