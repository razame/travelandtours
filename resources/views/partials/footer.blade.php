<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3>About Us</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="tours.html">Tours</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3>Contact Info</h3>
                        <ul>
                            <li><i class="fa fa-send" aria-hidden="true"></i> 3481 Rabana Place, 2090</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> +880 17980XXXXX</li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> info@example.com</li>
                            <li><i class="fa fa-fax" aria-hidden="true"></i> Fax : 02 9635 0247</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3>Business hour</h3>
                        <ul class="bussiness-hour">
                            <li>Monday-Friday: <span class="pull-right">9am - 5pm.</span></li>
                            <li>Saturday: <span class="pull-right">10am - 2pm.</span></li>
                            <li>Sunday: <span class="pull-right">Closed.</span></li>
                            <li>
                                <div class="dropdown dropdown-smooth-01 dropdown-language">
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
                            </li>
                        </ul>
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
                        <p>Copyright &copy; 2018. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <ul class="social-icons pull-right">
                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
