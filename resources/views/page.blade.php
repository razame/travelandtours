@extends('app')

@section('content')

    <style>
        .section-title{
            text-align: center;
        }
    </style>
    <div class="main-wrapper scrollspy-container">

        <section class="inner-page-banner" style="background-image:url(/theme/img/banner/tour-banner.jpg)">
            <div class="page-banner-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>{{ucwords($page->slug)}}</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">{!! __('general.pages') !!}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ucwords($page->slug)}}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end banner -->

        <section class="page-wrapper page-detail">

{{--            <div class="page-title border-bottom pt-25 mb-0 border-bottom-0">--}}

{{--                <div class="container">--}}

{{--                    <div class="row gap-15 align-items-center">--}}

{{--                        <div class="col-12 col-md-7">--}}

{{--                            <nav aria-label="breadcrumb">--}}
{{--                                <ol class="breadcrumb">--}}
{{--                                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>--}}
{{--                                    <li class="breadcrumb-item"><a href="#">{!! __('general.pages') !!}</a></li>--}}
{{--                                    <li class="breadcrumb-item active" aria-current="page">{{ucwords($page->slug)}}</li>--}}
{{--                                </ol>--}}
{{--                            </nav>--}}

{{--                        </div>--}}

{{--                    </div>--}}

{{--                </div>--}}

{{--            </div>--}}

            <br>
            <br>
            <br>
            <div class="container pt-50">

                <div class="row gap-20 gap-lg-40">


                    {!! $page->translate(app()->getLocale())->body !!}

                </div>

            </div>
            <br>
            <br>
            <br>
        </section>

    </div>

@endsection
