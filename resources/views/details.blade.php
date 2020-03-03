@extends('app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="//kenwheeler.github.io/slick/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//kenwheeler.github.io/slick/slick/slick-theme.css"/>
@endsection

@section('content')

    <section class="inner-page-banner" style="background-image:url(/theme/img/banner/tour-banner.jpg)">
        <div class="page-banner-caption">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Tour Details</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Tour Details</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->

    <section class="section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="news-details">
                        <div class="post-thumb">
                            @include('partials.slick-carousel')
                        </div>


                        <h2>{{$package->translate(app()->getLocale())->title}}</h2>
                        <p class="lead">{{$package->translate(app()->getLocale())->tag_line}}</p>


                        <div class="content-block">
                            <p>{{$package->translate(app()->getLocale())->description}}</p>
                        </div>


                        <ul class="list-inline-block highlight-list mt-30">
                            <h3>Features</h3>
                            @foreach($package->features as $feature)
                                <li>
                                    <span class="icon-font d-block">
                                        <i class="{{$feature->icon}}"></i>
                                    </span>
                                    {!! $feature->translate(app()->getLocale())->key !!}<br />{!! $feature->translate(app()->getLocale())->value !!}
                                </li>
                            @endforeach
                        </ul>
                        </br>
                        </br>
                        @include('partials.itineraries')

                        @include('partials.addons')
{{--                        @include('partials.make-booking')--}}
{{--                        @include('partials.comments_widget')--}}
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="sidebar"  id="sidebar">
                        <div class="sidebar-inner">
                            <div class="book-tour">
                                <h3><small>From</small> AZN {!! $package->price_per_head !!} <small>per person</small></h3>
                                <div class="sidebar-item sidebar-widget">
                                    @include('partials.make-booking')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end blog-->

@endsection

@section('scripts')

    <script type="text/javascript" src="//kenwheeler.github.io/slick/slick/slick.js"></script>
{{--    <script type="text/javascript" src="/theme/js/custom-multiply-sticky.js"></script>--}}
    <script>
        var packagePricePerHead = parseFloat('{{$package->price_per_head}}');
        var child_rate_fraction = parseFloat('{{config('travel-offers.child_rate_fraction')}}');
        // alert(child_rate_fraction);
        $('.slick-hero').slick({
            dots: true,
            infinite: true,
            speed: 1000,
            slidesToShow: 1,
            centerMode: true,
            variableWidth: true,
            autoplay: true
        });

        $('input[name="adult_guests"], input[name="child_guests"]').on('change', function () {
            $(this).attr('value', $(this).val());
            calculate();
        });

        function calculate() {
            let adults = $('input[name="adult_guests"]').prop('value');
            console.log(adults);
            let children = $('input[name="child_guests"]').prop('value');

            let packagePricePerHeadChildren = (packagePricePerHead * child_rate_fraction);

            let adultsTotal = Math.round(adults * packagePricePerHead);
            let childrenTotal = Math.round(children * packagePricePerHeadChildren);

            $('#child_cost_total').html(childrenTotal);
            $('#adult_cost_total').html(adultsTotal);

            $('#cost_per_head_adult').html(packagePricePerHead);
            $('#cost_per_head_child').html(packagePricePerHeadChildren);

            $('#adults').html(adults);
            $('#children').html(children);

            $('#total').html('AZN '+(adultsTotal+childrenTotal));
        }

        calculate();
    </script>
@endsection
