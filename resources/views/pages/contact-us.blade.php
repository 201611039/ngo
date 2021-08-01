@extends('layouts.web')

@section('content')

<section class="office-location padding-top-94">
        <div class="container vector-container ">
            <div class="title">
                <h2>Better Life branch office</h2>
            </div>
            <div class="address">
                <div class="row">
                    @foreach (App\Models\Branch::all() as $branch)
                        <div class="col-lg-4 col-md-6">
                            <div class="address-column">
                                {{-- <img src="assets/images/flag-tanzania.png" alt=""> --}}
                                <a href="contact.html#">
                                    <h4>{{ $branch->country }}</h4>
                                </a>
                                <p><span><i class="fas fa-map-marker-alt"></i></span>{{ $branch->address }}</p>
                                <p><span><i class="fas fa-envelope-open-text"></i></span>{{ $branch->email }}</p>
                                <p><span><i class="fas fa-phone-alt"></i></span>{{ $branch->phone }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="map-address">
            <iframe
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAZQRusomnUUQNJt9dAgp18qfnqcN0oGuM&q=3C78%2BXX%20Mbeya&center=-8.935086,33.417429"
                style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </section>


    <!-- Contact Form -->
    <section class="contact-form charity-form-area padding-top-110 padding-bottom-225">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-right">
                        <h2 class="margin-bottom-30">get in touch</h2>
                        <form action="contact.html#" class="contact-page-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-input">
                                        <input type="text" name="s" placeholder="Your Name*" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-input">
                                        <input type="email" name="s" placeholder="Email*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-input">
                                        <select name="s">
                                            <option value="">Type Of Donation*</option>
                                            <option value="">Type One</option>
                                            <option value="">Type Two</option>
                                            <option value="">Type three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-input">
                                        <input type="tel" name="s" placeholder="Phone Number*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-textarea">
                                        <textarea name="s" placeholder="Comments" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="call-to-action-btn" name="s" value="Donate">
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-left">
                        <img src="assets/images/contact-form-img.png" alt="">
                        <div class="left-content">
                            <img src="assets/images/form-vector.png" class="margin-bottom-25" alt="">
                            <h2 class="margin-bottom-25">Join the Better Life Team</h2>
                            <a href="contact.html#" class="call-to-action-btn margin-bottom-25">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
