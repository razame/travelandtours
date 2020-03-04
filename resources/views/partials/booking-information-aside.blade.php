<div class="col-12 col-lg-5">

    <aside class="sticky-kit sidebar-wrapper no-border">

        <div class="booking-box">

            <h3 class="heading-title">Order detail</h3>
            <div class="box-content">

                <a href="#" class="tour-small-grid-01 mb-20">

                    <div class="image" style="margin-right: 15px; float: left;">
                        <img src="{!! $package->images()->first() ? $package->images()->first()->storage_path : '' !!}" alt="image"
                                style="width: 105px;
                                    height: 105px;
                                    object-fit: cover;
                                    display: block;
                                    -moz-transition: all 0.3s ease-out;
                                    -webkit-transition: all 0.3s ease-out;
                                    transition: all 0.3s ease-out;"
                        />
                    </div>
                    <div class="content">
                        <br>
                        <h3>{!! $package->title !!}</h3>
                        <strong>{!! $package->trip_tenure !!}</strong>
                        <br>
                        <span class="price">Price from <span class="h6 line-1 text-primary number">AZN {{$package->price_per_head}}</span></span>
                    </div>

                </a>

                {{--                                    <span class="font600 text-muted line-125">Your choosen date is</span>--}}
                <h3 class="line-125 choosen-date mt-3">
                    <i class="ri-calendar"></i>
                    <span style="margin-left: 15px;">
                        {!! $package->trip_from_till !!}
                        <small class="d-block" style="margin-left: 40px; margin-top: 5px">
                            ({!! $package->trip_tenure !!})
                        </small>
                    </span>
                </h3>

                <ul class="border-top mt-20 pt-15">
                    <li class="clearfix">AZN <span id="cost_per_head_adult">{{$package->price_per_head}}</span> x <span id="adults">{{$adults}}</span> Adults<span class="float-right" >AZN <span id="adult_cost_total">{{$package->price_per_head * $adults}}</span></span></li>
                    <li class="clearfix">AZN <span id="cost_per_head_child">{{round(($package->price_per_head * config('travel-offers.child_rate_fraction')), 2)}}</span> x <span id="children">{{$children}}</span> Children<span class="float-right">AZN <span id="child_cost_total">{{round(($package->price_per_head/2), 2) * $children}}</span></span></li>
                    {{--                    <li class="clearfix">Booking fee + tax<span class="float-right">$9.50</span></li>--}}
                    {{--                    <li class="clearfix pl-15">Book now &amp; Save<span class="float-right text-primary">-$15</span></li>--}}
                    {{--                    <li class="clearfix">Other fees<span class="float-right text-success">Free</span></li>--}}
                </ul>
                <ul class="border-top mt-20 pt-15">
                    <li class="clearfix font700">
                        <div class="mt-3">
                            <span>Total</span><span class="float-right text-dark" id="total">AZN {{ceil(($package->price_per_head * $adults) + (round(($package->price_per_head * config('travel-offers.child_rate_fraction')), 2) * $children))}}</span>
                        </div>
                    </li>
                </ul>

                <p class="text-right" style="font-size: small">100% Satisfaction guaranteed</p>

            </div>

            {{--                                <div class="box-bottom bg-light">--}}
            {{--                                    <h6 class="font-sm">We are the best tour operator</h6>--}}
            {{--                                    <p class="font-sm">Our custom tour program, direct call <span class="text-primary">+66857887444</span>.</p>--}}
            {{--                                </div>--}}

        </div>

    </aside>

</div>
