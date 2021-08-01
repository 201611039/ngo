@extends('layouts.web')

@section('content')

    <!-- Home Page Blog Area -->
    <section class="home2-blog-section padding-top-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="home2-blog-left">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="home2-blog-content">
                                    <a href="donation-list.html">
                                        <h3 class="home2-heading-color">Healthy Life Need</h3>
                                    </a>
                                    <p class="home2-p-color">To help Orphans and disabled children by supporting Education facilities, and wheelchair in collaboration with stakeholders.</p>
                                    <a href="donation-list.html" class="readmore">Read More</a>
                                    <img src="assets/images/vector-saline.png" class="vector-bg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="home2-blog-content">
                                    <a href="donation-list.html">
                                        <h3 class="home2-heading-color">Safe Environment</h3>
                                    </a>
                                    <p class="home2-p-color">To educate the society to have proper infrastructure for disabled children such toilet to establish wash clubs in special need schools
                                    </p>
                                    <a href="donation-list.html" class="readmore">Read More</a>
                                    <img src="assets/images/vector-bottle.png" class="vector-bg" alt="">

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="home2-blog-content">
                                    <a href="donation-list.html">
                                        <h3 class="home2-heading-color">Consultancy</h3>
                                    </a>
                                    <p class="home2-p-color">Healthy Life Need demoz selle whalefish zebra lion fish
                                        pelican</p>
                                        <a href="donation-list.html" class="readmore">Read More</a>
                                    <img src="assets/images/vector-users.png" class="vector-bg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="home2-blog-content">
                                    <a href="donation-list.html">
                                        <h3 class="home2-heading-color">Education</h3>
                                    </a>
                                    <p class="home2-p-color">{{ str_limit('To educate the society on the right of the disabled children and orphans by emphasizing in seminar presentations, duplications of flyers, invitation in media tours (especially Radio stations).', 70) }}</p>
                                    <a href="donation-list.html" class="readmore">Read More</a>
                                    <img src="assets/images/vector-tshirt.png" class="vector-bg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="home2-blog-video">
                        <img src="assets/images/blog-img.png" alt="">
                        <a href="https://www.youtube.com/watch?v=E1xkXZs0cAQ" class="blog-popup-video">
                            <div class="play-btn">
                                <span class="play-icon"><img src="assets/images/play-circle.png" alt=""></span>
                            </div>
                        </a>
                        <div class="bottom-quote-text">
                            <span class="quote-icon"><i class="fas fa-quote-right"></i></span>
                            <h3 class="home2-heading-color">By giving a little, you will help out a lot</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Campaign Area -->
    @livewire('sections.donation-campaign', key( now().rand(1111) ))

    <!-- Donatation tab -->
    @livewire('sections.donation-tab', key( now().rand(1111) ))

    <!-- Project List -->
    @livewire('sections.campaign-galery', key( now().rand(1111) ))

    <!-- Campaign Event -->
    @livewire('sections.campaign-event', key( now().rand(1111) ))

    <!-- Sponsor -->
    @livewire('sections.sponsor', key( now().rand(1111) ))
@endsection
