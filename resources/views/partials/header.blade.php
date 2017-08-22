<nav class="fh5co-nav" role="navigation">
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-right">
                    <p class="num">Call: +01 123 456 7890</p>
                    @if(Auth::check())
                        <p class="num">
                            <a href="{!! route('admin.dashboard.index') !!}">Dashboard</a>
                            <a href="{!! route('auth.logout') !!}">Logout</a>
                        </p>
                    @else
                    <p class="num">
                        <a href="{!! route('auth.login') !!}">Login</a>
                    </p>
                    @endif
                    <ul class="fh5co-social">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        <li><a href="#"><i class="icon-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-2">
                    <div id="fh5co-logo"><a href="index.html">Run<span>.</span></a></div>
                </div>
                <div class="col-xs-10 text-right menu-1">
                    <ul>
                        <!-- <li class="active"><a href="index.html">Home</a></li> -->
                        <li><a href="{{URL::to('/')}}">Home</a></li>
                        <li><a href="{{URL::to('/about')}}">About</a></li>
                        <li class="has-dropdown">
                            <a href="{{URL::to('/services')}}">Services</a>
                            <!--                                        <ul class="dropdown">
                                                                        <li><a href="#">Web Design</a></li>
                                                                        <li><a href="#">eCommerce</a></li>
                                                                        <li><a href="#">Branding</a></li>
                                                                        <li><a href="#">API</a></li>
                                                                    </ul>-->
                        </li>
                        <li><a href="{{URL::to('/portfolio')}}">Portfolio</a></li>
                        <li><a href="{{URL::to('/contact')}}">Contact</a></li>
                        <!--<li class="btn-cta"><a href="#"><span>Login</span></a></li>-->
                    </ul>
                </div>
            </div>

        </div>
    </div>
</nav>