<header class="header-section {{ $segment? 'overflow-visible' : 'home2-header' }}">
    <div class="container vector-container">
        <div class="row align-items-center" id="mobile-menu-container">
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="assets/images/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-7 md-none">
                <div class="navigation">

                    <nav id="mobile-menu">
                        <ul class="main-menu">
                            @foreach ($links as $link)
                                <li><a href="{{ $link['url'] }}">{{ $link['title'] }} @isset($link['children']) <span><i class="fas fa-angle-down"></i></span> @endisset </a>
                                    @isset($link['children'])
                                        <ul class="submenu">
                                            @foreach ($link['children'] as $link)
                                                <li><a href="{{ $link['url'] }}">{{ $link['title'] }}</a></li>
                                            @endforeach
                                        </ul>
                                    @endisset
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                <ul class="nav-right-btn">
                    {{-- <li><a href="donation-single.html">Donation</a></li> --}}
                </ul>
            </div>
        </div>
        <div class="mobile-menu"></div>
    </div>
    @if ($segment)

    @else
        <div class="hero-section">
            <div class="container vector-container">
                <img src="assets/images/circle.png" class="circle-vector" alt="circle-vector">
                <img src="assets/images/red-vector.png" class="red-vector" alt="red-vector">
                {{-- <img src="assets/images/yellow-vector.png" class="yellow-vector" alt="yellow-vector"> --}}
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero-title">
                            <h1 class="wow fadeInDown home2-heading-color">Better Life For Orphans and<br>Disabled Children</h1>
                            <div class="hero-btn">
                                {{-- <a href="#" class="home2-primary-btn">Donate Now</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner">
                            <img src="assets/images/banner.png" class="wow fadeInRight" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</header>
