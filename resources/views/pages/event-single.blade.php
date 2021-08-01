@extends('layouts.web')

@section('content')
    <div class="event-single-banner padding-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner">
                        <img src="assets/images/event-single.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="event-single post-section padding-top-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="main-content">
                        <h2 class="margin-bottom-25">Water pollution event</h2>
                        <p>Water pollution occurs when harmful substances—often chemicals or microorganisms—contaminate
                            a stream, river, lake, ocean, aquifer, or other body of water, degrading water quality and
                            rendering it toxic to humans or the environment.</p>
                        <p>This widespread problem of water pollution is jeopardizing our health. Unsafe water kills
                            more people each year than war and all other forms of violence combined. Meanwhile, our
                            drinkable water sources are finite: Less than 1 percent of the earth’s freshwater is
                            actually accessible.</p>
                        <div class="spacer"></div>

                        {{-- <div class="event-tab">
                            <ul class="nav nav-pills" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="event-single.html#pills-1" role="tab"
                                        aria-controls="pills-1" aria-selected="true">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="event-single.html#pills-2" role="tab"
                                        aria-controls="pills-2" aria-selected="false">Event Map</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="event-single.html#pills-3" role="tab"
                                        aria-controls="pills-3" aria-selected="false">Values</a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="pills-1" role="tabpanel">
                                    <h3>Event Facilities reasons to give to charity</h3>
                                    <p>BigHearts is the largest global crowdfunding community connecting nonprofits,
                                        donors, and companies in nearly every country. Meanwhile, our drinkable water
                                        sources are finite earth’s freshwater to us.</p>
                                    <div class="countdown-area">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                                                <div class="countdown">
                                                    <h2 class="stroke-text number-counter">5000</h2><span
                                                        class="stroke-text">K</span>
                                                    <h5>United States</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                                                <div class="countdown">
                                                    <h2 class="stroke-text number-counter">8000</h2><span
                                                        class="stroke-text">K</span>
                                                    <h5>South africa</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                                                <div class="countdown">
                                                    <h2 class="stroke-text number-counter">9000</h2><span
                                                        class="stroke-text">K</span>
                                                    <h5>nigeria & ghana</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-3" role="tabpanel">
                                    <h3>Event Facilities reasons to give to charity</h3>
                                    <p>BigHearts is the largest global crowdfunding community connecting nonprofits,
                                        donors, and companies in nearly every country. Meanwhile, our drinkable water
                                        sources are finite earth’s freshwater to us.</p>
                                    <div class="countdown-area">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                                                <div class="countdown">
                                                    <h2 class="stroke-text number-counter">6000</h2><span
                                                        class="stroke-text">K</span>
                                                    <h5>United Kingdom</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                                                <div class="countdown">
                                                    <h2 class="stroke-text number-counter">6500</h2><span
                                                        class="stroke-text">K</span>
                                                    <h5>South Asia</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                                                <div class="countdown">
                                                    <h2 class="stroke-text number-counter">7000</h2><span
                                                        class="stroke-text">K</span>
                                                    <h5>Switzerland</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-2" role="tabpanel">
                                    <h3>Event Facilities reasons to give to charity</h3>
                                    <p>BigHearts is the largest global crowdfunding community connecting nonprofits,
                                        donors, and companies in nearly every country. Meanwhile, our drinkable water
                                        sources are finite earth’s freshwater to us.</p>
                                    <div class="countdown-area">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                                                <div class="countdown">
                                                    <h2 class="stroke-text number-counter">7000</h2><span
                                                        class="stroke-text">K</span>
                                                    <h5>Singapure</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                                                <div class="countdown">
                                                    <h2 class="stroke-text number-counter">8600</h2><span
                                                        class="stroke-text">K</span>
                                                    <h5>Malaysia</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                                                <div class="countdown">
                                                    <h2 class="stroke-text number-counter">9800</h2><span
                                                        class="stroke-text">K</span>
                                                    <h5>Australia</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <p class="bottom-text">We help local nonprofits access the funding, tools, training, and support
                            they need to become more. Research identified link between donation to charity and
                            increasaed activity in the area of the brain that registers Less than 1 percent of the
                            earth’s freshwater is actually accessible to us. Without action, the challenges will only
                            increase by 2050, when global demand for freshwater is expected to be one-third greater than
                            it is now.</p>

                            <div class="card card-body">
                                <div class="widget-container categories">
                                    <ul class="categories-nav">
                                        <li><span><strong>Date:</strong> </span>20 December, 2021</li>
                                        <li><span><strong>Organized by:</strong> </span>Tonmoy Khan</li>
                                        <li><span><strong>Venue:</strong> </span>National Zoo, NY</li>
                                        <li><span><strong>Phone:</strong> </span> 1234567789</li>
                                        <li><span><strong>Email:</strong> </span>infosympatho.com</li>
                                    </ul>
                                </div>
                            </div>

                        {{-- <div class="event-donation padding-top-60">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="donate-tab wow fadeInUp">
                                        <div class="title margin-bottom-30">
                                            <h2>Donation event vission</h2>
                                        </div>
                                        <ul class="nav nav-pills" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link show active" data-toggle="pill" href="event-single.html#donate-1"
                                                    role="tab" aria-selected="true">Water</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="event-single.html#donate-2" role="tab"
                                                    aria-selected="false">Food</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="event-single.html#donate-3" role="tab"
                                                    aria-selected="false">Health</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="event-single.html#donate-4" role="tab"
                                                    aria-selected="false">Environment</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="donate-1" role="tabpanel">
                                                <div class="number-counter-container">
                                                    <h2 class="number-counter">50,000</h2><span>K</span>
                                                </div>
                                                <span class="goal-text">Goal:2000K</span>
                                                <div class="animated-progress-bar">
                                                    <div class="animated-progress" data-percent="70"
                                                        data-color="#f74f21"><span>70%</span></div>
                                                </div>
                                                <a href="donation-single.html" class="call-to-action-btn">Donate</a>
                                            </div>
                                            <div class="tab-pane fade" id="donate-2" role="tabpanel">
                                                <div class="number-counter-container">
                                                    <h2 class="number-counter">55,000</h2><span>K</span>
                                                </div>
                                                <span class="goal-text">Goal:2200K</span>
                                                <div class="animated-progress-bar">
                                                    <div class="animated-progress" data-percent="80"
                                                        data-color="#f74f21"><span>80%</span></div>
                                                </div>
                                                <a href="donation-single.html" class="call-to-action-btn">Donate</a>
                                            </div>
                                            <div class="tab-pane fade" id="donate-3" role="tabpanel">
                                                <div class="number-counter-container">
                                                    <h2 class="number-counter">60,000</h2><span>K</span>
                                                </div>
                                                <span class="goal-text">Goal:2500K</span>
                                                <div class="animated-progress-bar">
                                                    <div class="animated-progress" data-percent="85"
                                                        data-color="#f74f21"><span>85%</span></div>
                                                </div>
                                                <a href="donation-single.html" class="call-to-action-btn">Donate</a>
                                            </div>
                                            <div class="tab-pane fade" id="donate-4" role="tabpanel">
                                                <div class="number-counter-container">
                                                    <h2 class="number-counter">70,000</h2><span>K</span>
                                                </div>
                                                <span class="goal-text">Goal:3000K</span>
                                                <div class="animated-progress-bar">
                                                    <div class="animated-progress" data-percent="90"
                                                        data-color="#f74f21"><span>90%</span></div>
                                                </div>
                                                <a href="donation-single.html" class="call-to-action-btn">Donate</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="blog-video">
                                        <img src="assets/images/event-video.png" alt="">
                                        <a href="https://www.youtube.com/watch?v=owiwCIhc0I0" class="blog-popup-video">
                                            <div class="play-btn">
                                                <span class="play-icon"><img src="assets/images/play-btn-white.png"
                                                        alt=""></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <div class="widget-container brands-logo">
                                    <h4>Event sponsor</h4>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="brands">
                                                <img src="assets/images/gifts.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="brands">
                                                <img src="assets/images/love.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="brands">
                                                <img src="assets/images/charity-logo.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
