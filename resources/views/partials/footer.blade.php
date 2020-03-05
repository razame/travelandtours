<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
{{--                <div class="col-md-3">--}}
{{--                    <div class="footer-widget">--}}
{{--                        <h3>About Us</h3>--}}
{{--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>--}}

{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3>About Company</h3>
                        <ul>
                            @foreach(\App\Page::all() as $page)
                                @if(in_array($page->slug, ['Privacy policy', 'Refund Policy', 'Booking Terms & Conditions', 'About us', 'About Azerbaijan', 'FAQ']))
                                    <li><a href="{{route('page', $page->slug)}}">{{$page->slug == 'about us' ? 'Who we are' : ucwords($page->slug)}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3>Contact Info</h3>
                        <ul>
                            <li><i class="fa fa-send" aria-hidden="true"></i> Abbasqulu Aga Bakikhanov, Bridge plaza, AZ1022</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> +994558489228</li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i> online@traveloffers.az</li>
                            <li><i class="fa fa-percent" aria-hidden="true"></i> Tax ID: 1404932861</li>
                            <li><i class="fa fa-address-card" aria-hidden="true"></i> "ZONZO" Limited Liability Company</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-widget">
                        <h3>Business hours</h3>
                        <ul class="bussiness-hour">
                            <li>Monday-Friday: <span class="pull-right">8.30am. - 6:30pm.</span></li>
{{--                            <li>Saturday: <span class="pull-right">10am - 2pm.</span></li>--}}
{{--                            <li>Sunday: <span class="pull-right">Closed.</span></li>--}}
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-widget">
                        <a href="#" class="btn btn-text-inherit btn-interactive" id="dropdownLangauge" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="image"><img src="/theme/font-icons/flaticon-flags-4/png/{{app()->getLocale() == 'en' ? '260-united-kingdom' :  '141-azerbaijan' }}.png" alt="image"  style="width:10px" /></span> &nbsp;&nbsp;{{ucwords(app()->getLocale())}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownLangauge">
                            <div class="dropdown-menu-inner">
                                <a class="dropdown-item" href="{{route('change-locale', 'en')}}"><span class="image"><img src="/theme/font-icons/flaticon-flags-4/png/260-united-kingdom.png" alt="image" style="width:10px" /></span>&nbsp;&nbsp;En</a>
                                <a class="dropdown-item" href="{{route('change-locale', 'az')}}"><span class="image"><img src="/theme/font-icons/flaticon-flags-4/png/141-azerbaijan.png" alt="image" style="width:10px" /></span>&nbsp;&nbsp;Az</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="copyright">
                        <p>Copyright &copy; {{date('Y')}}. All rights reserved.</p>
                    </div>
                </div>
{{--                <div class="col-sm-12 col-md-6">--}}
{{--                    <ul class="social-icons pull-right">--}}
{{--                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>--}}
{{--                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>--}}
{{--                        <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>--}}
{{--                        <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</footer>
