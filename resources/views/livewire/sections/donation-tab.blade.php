
<section class="donation-tab">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="event-tab">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link {{ $missionToogle? 'active':'' }}" wire:click="toogleTab(1)" href="javascript:void(0)">Mission</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $visionToogle? 'active':'' }}" wire:click="toogleTab(2)" href="javascript:void(0)">Vision</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $valueToogle? 'active':'' }}" wire:click="toogleTab(3)" href="javascript:void(0)">Values</a>
                        </li>
                    </ul>
                    <div class="tab-content margin-top-30">
                        <div class="tab-pane fade {{ $missionToogle? 'show active':'' }}"  id="pills-1" role="tabpanel">
                            <div class="tab-content-top" style="word-wrap: break-word;">
                                {!! $about->mission??'<p>
                                    Tanzanian children and young people with disabilities and the under privileged are able to achieve their full potential and have access to equal rights in an inclusive society.
                                </p>' !!}
                            </div>
                        </div>
                        <div class="tab-pane fade {{ $visionToogle? 'show active':'' }}"  id="pills-3" role="tabpanel">
                            <div class="tab-content-top" style="word-wrap: break-word;">
                                {!! $about->vision??'<p>
                                    To promote and raise awareness of the rights of children and young people with disabilities and the under privileged children and to facilitate access to quality inclusive education
                                </p>' !!}
                            </div>
                        </div>
                        <div class="tab-pane fade {{ $valueToogle? 'show active':'' }}" id="pills-2" role="tabpanel">
                            <div class="tab-content-top" style="word-wrap: break-word;">
                                {!! $about->value??'<h3>
                                    We are committed to;
                                </h3>
                                <p>
                                    Valuing and realizing the potential of children and young people with disabilities and the under privileged
                                </p>

                                <h4>
                                    Motto
                                </h4>
                                <p>
                                    We stand for orphans and disabled children
                                </p>
                                <h4>
                                    Slogan:
                                </h4>

                                <p>
                                    “Children First”
                                </p>' !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
