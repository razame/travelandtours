@extends('app')

@section('content')
    <div class="main-wrapper scrollspy-container">

        <section class="inner-page-banner" style="background-image:url(/theme/img/banner/tour-banner.jpg)">
            <div class="page-banner-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Traveller Details</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                <li class="breadcrumb-item active">Traveller Details</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end banner -->

        <section class="page-wrapper page-detail" style="padding: 30px;">

            {{--            @include('partials.page-title')--}}

            <div class="container pt-30">

                <div class="row gap-20 gap-lg-40">

                    @include('partials.book-now')

                    @include('partials.booking-information-aside')

                </div>

            </div>

        </section>

    </div>
@endsection
