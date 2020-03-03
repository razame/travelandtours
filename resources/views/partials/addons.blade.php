<br>
<br>
<br>
<br>
<div id="detail-content-sticky-nav-04" class="fullwidth-horizon-sticky-section">

    <h3 class="heading-title">What's included</h3>

    <ul class="list-icon-absolute what-included-list mb-30">

        @foreach($package->included_addons as $included)
            <li>
                <span class="icon-font"><i class="elegent-icon-check_alt2 text-primary"></i> </span>
                <h6>{!! $included->translate(app()->getLocale())->title !!}</h6>
                <p>{!! $included->translate(app()->getLocale())->description !!}</p>
            </li>
        @endforeach

    </ul>

    <h3 class="heading-title">Not included</h3>

    <ul class="list-icon-absolute what-included-list mb-30">

        @foreach($package->excluded_addons as $excluded)
            <li>
                <span class="icon-font"><i class="elegent-icon-close_alt2 text-dark"></i> </span>
                <h6>{!! $excluded->translate(app()->getLocale())->title !!}</h6>
                <p>{!! $excluded->translate(app()->getLocale())->description !!}</p>
            </li>
        @endforeach

    </ul>

    <div class="mb-50"></div>

</div>
