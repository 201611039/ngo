<section class="campaign-event home-cp-event">
    <div class="vector-container margin-minus-19">
        <img src="{{ asset('assets/images/dot-vector.png') }}" alt="" class="dot-vector">
        <img src="{{ asset('assets/images/red-vector.png') }}" alt="" class="red-vector">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title text-center margin-bottom-55">
                        <h2>Donation Camapign event</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="slider-left">
                        @foreach (App\Models\Event::limit(2)->orderBy('id', 'desc')->get() as $event)
                            <div class="single-slide">
                                {{ $event->images[0] }}
                                <div class="meta-content">
                                    <a><span><i class="fas fa-calendar icon"></i> {{ $event->start_date->format('d M Y') }}</span></a>
                                    <a><span><i class="fas fa-clock icon"></i> {{ $event->start_date->format('h:i A') }}</span></a>
                                    <a><span><i class="fas fa-map icon"></i> {{ title_case($event->venue ) }}</span></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="event-campaign-right">
                        @foreach (App\Models\Event::limit(2)->orderBy('id', 'desc')->get() as $event)
                            <div class="gift-children">
                                <img src="{{ asset('assets/images/fresh-water.png') }}" class="vector" alt="">
                                <div class="gift-date">
                                    <h2>{{ $event->start_date->format('d') }}</h2>
                                    <span>{{ $event->start_date->format('M') }}</span>
                                </div>
                                <div class="gift-content">
                                    <h3>{{ $event->title }}</h3>
                                    <div style="word-wrap: break-word">
                                        {!! str_limit($event->body, 100) !!}
                                    </div>
                                    <div class="icons-field">
                                        <span><i class="fas fa-map-marker-alt"></i> {{ title_case($event->venue ) }}</span>
                                        <span><i class="fas fa-clock"></i> {{ $event->start_date->format('h:i A') }}</span>
                                        <span><a href="#">More</a></span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
