<footer class="footer-section padding-top-90">
    <div class="container vector-container">
        <img src="assets/images/yellow-vector.png" class="yellow-vector" alt="">
        <img src="assets/images/dot-vector.png" class="dot-vector" alt="">
        <img src="assets/images/red-vector.png" class="red-vector" alt="">
        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="footer-first">
                    <a href="home2.html"><img src="assets/images/logo.png" class="logo" alt=""></a>
                    <p class="home2-p-color">{!! App\Models\About::byBranch()->mission !!}</p>
                    <div class="footer-social">
                        <a href="home2.html#">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="home2.html#"><i class="fab fa-twitter"></i></a>
                        <a href="home2.html#"><i class="fab fa-instagram"></i></a>
                        <a href="home2.html#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                {{-- <div class="other-links">
                    <h3 class="home2-heading-color">Other Link</h3>
                    <nav class="footer-nav">
                        <ul>
                            <li><a href="home2.html#">Nonprofit Resources</a></li>
                            <li><a href="home2.html#">Corporate Giving Resources</a></li>
                            <li><a href="home2.html#">Corporate Gift Cards</a></li>
                            <li><a href="home2.html#">CSR made Simple</a></li>
                            <li><a href="home2.html#">Start an Application</a></li>
                        </ul>
                    </nav>
                </div> --}}
            </div>
            <div class="col-lg-3 col-md-6">
                {{-- <div class="donors-link">
                    <h3 class="home2-heading-color">Donors</h3>
                    <nav class="footer-nav">
                        <ul>
                            <li><a href="home2.html#">Give or Redeem Gift Cards</a></li>
                            <li><a href="home2.html#">Donate in Honor</a></li>
                            <li><a href="home2.html#">Project of the Month Club</a></li>
                            <li><a href="home2.html#">Start a Fundraiser</a></li>
                            <li><a href="home2.html#">Donor Resources</a></li>
                        </ul>
                    </nav>
                </div> --}}
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-last">
                    <h3 class="home2-heading-color">Get in Touch!</h3>
                    <div class="widget-bottom">
                        <img src="assets/images/vector-09.png" alt="">
                        <div class="widget-content">
                            <p class="home2-p-color">Ikuti, Mbeya (M), Mbeya Tanzania</p>
                        </div>
                    </div>
                    <div class="widget-bottom">
                        <img src="assets/images/home2-footer-mail-icon.png" alt="">
                        <div class="widget-content">
                            <p class="home2-p-color">maishabora@gmail.com</p>
                        </div>
                    </div>
                    <div class="widget-bottom">
                        <img src="assets/images/vector78.png" alt="">
                        <div class="widget-content">
                            <p class="home2-p-color">Phone : +255 755456529 Phone: + 255 758989858</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="row">
                <div class="col-lg-4 col-md-6 align-self-center">
                    <div class="copyright">
                        <p class="home2-p-color">&copy; Copyright 2021 | <a href="{{ url('/') }}">Better Life</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center">
                    <div class="author">
                        <span><i class="fas fa-heart"></i>Made By: <a href="#">Mohdev</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
