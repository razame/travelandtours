@if($packages->count() == 1)
    <div class="row">
        @foreach($packages as $package)
            <div class="tour-item wow fadeIn">
                <div class="thumb">
                    <a href="{!!route('details', $package->title)!!}">
                        <img src="{!!$package->images->first()->storage_path!!}" alt="Images" />
                    </a>
                </div>
                <div class="tour-info">
                    <h3><a href="{!!route('details', $package->title)!!}">{!!$package->title!!}</a></h3>
                    <p>{!!$package->description!!}</p>
                    <div class="tour-price">${!!$package->price_per_head!!} <small>- {!!$package->trip_tenure!!}</small></div>
                </div>
            </div>
        @endforeach
    </div>
@elseif($packages->count() == 2)
    <div class="row">
        @foreach($packages as $package)
            <div class="col-md-12 col-lg-12 col-xl-6">
                <div class="tour-item wow fadeIn">
                    <div class="media">
                        <div class="thumb">
                            <a href="{!!route('details', $package->title)!!}">
                                <img src="{!!$package->images->first()?$package->images->first()->storage_path:''!!}" alt="Images" style="height: 210px; width: 210px;"/>
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="tour-info">
                                <h3><a href="{!!route('details', $package->title)!!}">{!!$package->title!!}</a></h3>
                                <p>{!!$package->description!!}</p>
                                <div class="tour-price">${!!$package->price_per_head!!} <small>- {!!$package->trip_tenure!!}</small></div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@else
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-6">
            @foreach($packages->take(1)->all() as $package)
                <div class="tour-item wow fadeIn">
                    <div class="thumb">
                        <a href="{!!route('details', $package->title)!!}">
                            <img src="{!!$package->images->first()?$package->images->first()->storage_path:''!!}" alt="Images"/>
                        </a>
                    </div>
                    <div class="tour-info">
                        <h3><a href="{!!route('details', $package->title)!!}">{!!$package->title!!}</a></h3>
                        <p>{!!$package->description!!}</p>
                        <div class="tour-price">${!!$package->price_per_head!!} <small>- {!!$package->trip_tenure!!}</small></div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-12 col-lg-12 col-xl-6">
            @foreach($packages->skip(1)->take(2)->all() as $package)
                <div class="tour-item wow fadeIn">
                    <div class="media">
                        <div class="thumb">
                            <a href="{!!route('details', $package->title)!!}">
                                <img src="{!!$package->images->first()?$package->images->first()->storage_path:''!!}" alt="Images" style="height: 210px; width: 210px;"/>
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="tour-info">
                                <h3><a href="{!!route('details', $package->title)!!}">{!!$package->title!!}</a></h3>
                                <p>{!!$package->description!!}</p>
                                <div class="tour-price">${!!$package->price_per_head!!} <small>- {!!$package->trip_tenure!!}</small></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
