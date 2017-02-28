<header>
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="{{ asset(config('settings.theme')) }}/img/logo.png" alt="logo"/></a>
            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li class="{{ (Route::currentRouteName() == 'home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li> 
                     <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="about.html">Company</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">News</a></li> 
                        <li><a href="#">Investors</a></li>
                    </ul>
                </li> 
                    <li class="{{ (Route::currentRouteName() == 'services' ? 'active' : '') }}"><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li class="{{ (Route::currentRouteName() == 'contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
                    <li class="{{ (Route::currentRouteName() == 'login') ? 'active' : '' }}"><a href="{{ Auth::check() ? route('logout') : route('login') }}" class="icon-info-blocks fa">{{ Auth::check() ? Auth::user()->name : 'Login' }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>