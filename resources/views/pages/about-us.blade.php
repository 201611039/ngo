@extends('layouts.web')

@section('content')

<section class="help-section padding-top-100 padding-bottom-12">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="help-left">
                        <div class="bottom-img">
                            {{-- <img src="assets/images/help-left.png" class="wow fadeInUp" alt="" style="visibility: visible; animation-name: fadeInUp;"> --}}
                            <div class="certified-text">
                                <img src="assets/images/certified-icon.png" alt="">
                                <div class="certified-title">
                                    <h3>Trusted</h3>
                                    <span>Also certified</span>
                                </div>
                            </div>
                        </div>
                        <h2>Better Life For Orphans and Disabled Children</h2>
                        <p>
                            Organizations was registered on 13th NOVEMBER 2013, with Registration No: OONGO/00006550 as a National wide non-governmental, voluntary, and non-profit making organization Established under the NGO’s laws of Tanzania. THE ORGANIZATION Was founded by MEMBER OF NGO’S , who is a specialist in teaching children with disabilities/special needs, under his leadership and expertise the organization is working hard to ensure children with disabilities/special needs are receive all support services essential to enable them access to primary school and  acquire  necessary  supporting facilities such  as  wheel chair .Currently we are working with more than 0ver 500 children  orphans and children with different disability  in six special needs school in Mbeya  such school are ( Ikuti, Itiji, Ilemi, Kilimo Mwenge and Insalaga).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Donate Section -->
    <section class="about-donate-section vector-container padding-top-115 padding-bottom-122">
        <img src="{{ asset('assets/images/dot-vector.png') }}" alt="" class="dot-vector">
        <img src="{{ asset('assets/images/red-vector.png') }}" alt="" class="red-vector">
        <div class="container">
            <div class="about-blog-section padding-bottom-75">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-content">
                            <div class="left-logo">
                                <div class="left-icon">
                                    <span><img src="{{ asset('assets/images/png-icons/salline-icon.png') }}" alt=""></span>
                                </div>
                            </div>
                            <div class="help-blog">
                                <a href="donation-single.html">
                                    <h3>Healthy Life</h3>
                                </a>
                                <p>Safe environment Need demoz selle whalefish</p>
                                <a href="donation-single.html" class="readmore">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-content">
                            <div class="left-logo">
                                <div class="left-icon">
                                    <span><img src="{{ asset('assets/images/png-icons/user-icon.png') }}" alt=""></span>
                                </div>
                            </div>
                            <div class="help-blog">
                                <a href="donation-single.html">
                                    <h3>environment</h3>
                                </a>
                                <p>Safe environment Need demoz selle whalefish</p>
                                <a href="donation-single.html" class="readmore">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-content">
                            <div class="left-logo">
                                <div class="left-icon">
                                    <span><img src="{{ asset('assets/images/icon-1.png') }}" alt=""></span>
                                </div>
                            </div>
                            <div class="help-blog">
                                <a href="donation-single.html">
                                    <h3>fresh water</h3>
                                </a>
                                <p>Safe environment Need demoz selle whalefish</p>
                                <a href="donation-single.html" class="readmore">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-content">
                            <div class="left-logo">
                                <div class="left-icon">
                                    <span><img src="{{ asset('assets/images/icon-2.png') }}" alt=""></span>
                                </div>
                            </div>
                            <div class="help-blog">
                                <a href="donation-single.html">
                                    <h3>environment</h3>
                                </a>
                                <p>Safe environment Need demoz selle whalefish</p>
                                <a href="donation-single.html" class="readmore">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div style="margin-top: -50px;">
        @livewire('sections.donation-tab')
    </div>


    <!-- Volunteer Section -->
    <section class="volunteer-section padding-top-110 padding-bottom-90">
        <div class="container vector-container">
            <img src="{{ asset('assets/images/red-vector.png') }}" class="red-vector" alt="">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title text-center margin-bottom-55">
                        <h2>our volunteer team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach (\App\Models\User::users()->get() as $user)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="volunteer-column">
                            <div class="overlay"></div>
                            <div class="social">
                                <a href="about.html#"><i class="fab fa-facebook"></i></a>
                                <a href="about.html#"><i class="fab fa-instagram"></i></a>
                                <a href="about.html#"><i class="fab fa-twitter"></i></a>
                            </div>
                            <img src="{{ $user->image_path? asset($user->image_path) : asset('assets/images/no-photo.jpg') }}" alt="">
                            <span class="plus-icon"><i class="fas fa-plus"></i></span>
                            <div class="designation">
                                <span class="close"><i class="fas fa-minus"></i></span>
                                <h5>{{ $user->name }}</h5>
                                <p>Better Life Volunteer</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection
