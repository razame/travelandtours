<div id="detail-content-sticky-nav-04" class="fullwidth-horizon-sticky-section">

    <h4 class="heading-title">What's included</h4>

    <ul class="list-icon-absolute what-included-list mb-30">

        @foreach($package->included_addons as $included)
            <li>
                <span class="icon-font"><i class="elegent-icon-check_alt2 text-primary"></i> </span>
                <h6>{!! $included->title !!}</h6>
                <p>{!! $included->description !!}</p>
            </li>
        @endforeach

{{--        <li>--}}
{{--            <span class="icon-font"><i class="elegent-icon-check_alt2 text-primary"></i> </span>--}}
{{--            <h6>Meals</h6>--}}
{{--            <p>4 breakfast &amp; 3 dinners </p>--}}
{{--        </li>--}}

{{--        <li>--}}
{{--            <span class="icon-font"><i class="elegent-icon-check_alt2 text-primary"></i> </span>--}}
{{--            <h6>Transport</h6>--}}
{{--            <p>Modern air conditioned coach with reclining seats, TV for showing DVDs, and toilet</p>--}}
{{--        </li>--}}

{{--        <li>--}}
{{--            <span class="icon-font"><i class="elegent-icon-check_alt2 text-primary"></i> </span>--}}
{{--            <h6>5 Experiences</h6>--}}
{{--            <p>Sense child do state to defer mr of forty. Become latter but nor abroad wisdom waited. Was delivered gentleman acuteness but daughters. In as of whole as match asked. Pleasure exertion put add entrance distance drawings.</p>--}}
{{--        </li>--}}

{{--        <li>--}}
{{--            <span class="icon-font"><i class="elegent-icon-check_alt2 text-primary"></i> </span>--}}
{{--            <h6>Other</h6>--}}
{{--            <ul class="ul">--}}
{{--                <li>Free Wi-fi in all hotels </li>--}}
{{--                <li>All taxes and fees  </li>--}}
{{--                <li>Any public transport used as part of the tour (excludes free days)  </li>--}}
{{--                <li>Free Expat Explore tour souvenir </li>--}}
{{--            </ul>--}}
{{--        </li>--}}

    </ul>

    <h5>Not included</h5>

    <ul class="list-icon-absolute what-included-list mb-30">

        @foreach($package->excluded_addons as $excluded)
            <li>
                <span class="icon-font"><i class="elegent-icon-close_alt2 text-dark"></i> </span>
                <h6>{!! $excluded->title !!}</h6>
                <p>{!! $excluded->description !!}</p>
            </li>
        @endforeach

{{--        <li>--}}
{{--            <span class="icon-font"><i class="elegent-icon-close_alt2 text-dark"></i> </span>--}}
{{--            <h6>Insurance</h6>--}}
{{--            <p>Had repulsive dashwoods suspicion sincerity but advantage now him. Remark easily garret nor nay <a href="#">line to some where</a>. Civil those mrs enjoy shy fat merry. You greatest jointure saw horrible.</p>--}}
{{--        </li>--}}

    </ul>

    <div class="mb-50"></div>

</div>
