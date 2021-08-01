@extends('layouts.web')

@section('content')

<!-- Donate List -->
<section class="donate-lists event-list-cp campaign-section padding-30">
    <div class="container">
        <div class="event-list-title margin-bottom-55">
            <h2>Donation Campaigns Event</h2>
        </div>
        <div class="campaign-content event-list">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="campaign-column">
                        <a href="event-list.html#"><span class="img-top-btn">Health</span></a>
                        <div class="img-container">
                            <a href="event-single.html"><img src="{{ asset('assets/images/donation-list-4.png') }}" alt=""></a>
                        </div>
                        <div class="padding-20">
                            <a href="event-single.html">
                                <h3>Help children proverty and world safe environment</h3>
                            </a>
                            <div class="campaign-column-bottom">
                                <a href="event-single.html" class="readmore-btn">read more</a>
                                <div class="time">
                                    <span><i class="fas fa-calendar"></i> 21 December 2021</span>
                                    <span><i class="fas fa-clock"></i> 8:12pm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="campaign-column">
                        <a href="event-list.html"><span class="img-top-btn">Water</span></a>
                        <div class="img-container">
                            <a href="event-single.html"><img src="{{ asset('assets/images/donation-list-5.png') }}" alt=""></a>
                        </div>
                        <div class="padding-20">
                            <a href="event-single.html">
                                <h3>Help children water pollution and human health</h3>
                            </a>
                            <div class="campaign-column-bottom">
                                <a href="event-single.html" class="readmore-btn">read more</a>
                                <div class="time">
                                    <span><i class="fas fa-calendar"></i> 21 December 2021</span>
                                    <span><i class="fas fa-clock"></i> 8:12pm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="campaign-column">
                        <a href="event-list.html"><span class="img-top-btn">Food</span></a>
                        <div class="img-container">
                            <a href="event-single.html"><img src="{{ asset('assets/images/event-list-1.png') }}" alt=""></a>
                        </div>
                        <div class="padding-20">
                            <a href="event-single.html">
                                <h3>Children are going hungry around the world</h3>
                            </a>
                            <div class="campaign-column-bottom">
                                <a href="event-single.html" class="readmore-btn">read more</a>
                                <div class="time">
                                    <span><i class="fas fa-calendar"></i> 21 December 2021</span>
                                    <span><i class="fas fa-clock"></i> 8:12pm</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="campaign-column">
                        <a href="event-list.html#"><span class="img-top-btn">Education</span></a>
                        <div class="img-container">
                            <a href="event-single.html"><img src="{{ asset('assets/images/donation-list-1.png') }}" alt=""></a>
                        </div>
                        <div class="padding-20">
                            <a href="event-single.html">
                                <h3>Help children proverty and world safe environment</h3>
                            </a>
                            <div class="campaign-column-bottom">
                                <a href="event-single.html" class="readmore-btn">read more</a>
                                <div class="time">
                                    <span><i class="fas fa-calendar"></i> 21 December 2021</span>
                                    <span><i class="fas fa-clock"></i> 8:12pm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="campaign-column">
                        <a href="event-list.html#"><span class="img-top-btn">Environment</span></a>
                        <div class="img-container">
                            <a href="event-single.html"><img src="{{ asset('assets/images/donation-list-5.png') }}" alt=""></a>
                        </div>
                        <div class="padding-20">
                            <a href="event-single.html">
                                <h3>Help Children Water pollution and Human Health</h3>
                            </a>
                            <div class="campaign-column-bottom">
                                <a href="event-single.html" class="readmore-btn">read more</a>
                                <div class="time">
                                    <span><i class="fas fa-calendar"></i> 21 December 2021</span>
                                    <span><i class="fas fa-clock"></i> 8:12pm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="campaign-column">
                        <a href="event-list.html#"><span class="img-top-btn">Cloth</span></a>
                        <div class="img-container">
                            <a href="event-single.html"><img src="{{ asset('assets/images/donation-list-6.png') }}" alt=""></a>
                        </div>
                        <div class="padding-20">
                            <a href="event-single.html">
                                <h3>Children are going hungry around the world</h3>
                            </a>
                            <div class="campaign-column-bottom">
                                <a href="event-single.html" class="readmore-btn">read more</a>
                                <div class="time">
                                    <span><i class="fas fa-calendar"></i> 21 December 2021</span>
                                    <span><i class="fas fa-clock"></i> 8:12pm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="pagination">
                        <li><a href="event-list.html#"><i class="fas fa-angle-left"></i></a></li>
                        <li><a href="event-list.html#" class="active">01</a></li>
                        <li><a href="event-list.html#">02</a></li>
                        <li><a href="event-list.html#">03</a></li>
                        <li><a href="event-list.html#">04</a></li>
                        <li><a href="event-list.html#">...</a></li>
                        <li><a href="event-list.html#"><i class="fas fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
