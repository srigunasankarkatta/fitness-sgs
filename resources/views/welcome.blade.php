@extends('frontend.layouts.master')
@section('content')
    <div class="section-video">
        <div class="container-fluid px-lg-0">
            <div class="row">
                <div class="col-lg-5">
                    <div class="video-content">
                        <div class="section-title">
                            <h1 class="title-xl">Workout Anytime. Anywehere.</h1>
                        </div>

                        <p>Get access to India’s first of its kind network of fitness studios and online fitness and Yoga
                            classes.</p>

                        <div class="video-button button-icon">
                            <a href="#" class="button button-md button-primary">
                                <span>Let’s find trainers for you </span>
                                <i class="icon icon-right-chev"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="video-image">
                        <iframe
                            src="https://www.youtube.com/embed/rUWxSEwctFU?autoplay=1&controls=0&rel=0&modestbranding=1&mute=0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>

                        <div class="play-button">
                            <i class="icon icon-play"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title section-title-bar mb-4">
                        <h2 class="title-lg">Why FitMi?</h2>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-box">
                        <div class="feature-box-image">
                            <img src="{{ asset('assets/fitmi/images/anytime.svg') }}" class="img-fluid">
                        </div>
                        <h4>Anytime. Anywhere</h4>
                        <p>With us, you can train anywhere, at home, office or in a studio</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-box">
                        <div class="feature-box-image">
                            <img src="{{ asset('assets/fitmi/images/ticket.svg') }}" class="img-fluid">
                        </div>
                        <h4>Try first, then choose</h4>
                        <p>We offer short term free trials to help you suitable class</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-box">
                        <div class="feature-box-image">
                            <img src="{{ asset('assets/fitmi/images/income.svg') }}" class="img-fluid">
                        </div>
                        <h4>Value of money</h4>
                        <p>Yes, we promise value for your hard-earned money</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-box">
                        <div class="feature-box-image">
                            <img src="{{ asset('assets/fitmi/images/experts.svg') }}" class="img-fluid">
                        </div>
                        <h4>Ask an experts</h4>
                        <p>Have questions? Our experts are there to help you.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-tabbing mt-lg-5 pt-lg-0 pt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="tabbing-content tabbing-multi-content">
                        <div class="section-title section-title-bar mb-4">
                            <h3 class="title-lg">What all I get on FitMi?</h3>
                        </div>

                        <ul class="nav nav-tabbing">
                            <li class="nav-item">
                                <div class="nav-link">
                                    <span class="bg-primary">
                                        <img src="{{ asset('assets/fitmi/images/icons/icon-streaming.svg') }}"
                                            class="img-fluid">
                                    </span>

                                    <div class="tabbing-content-text">
                                        <h4>Virtual Classes</h4>

                                        <p>Try our on-demand and livestream classes from top trainers and studios</p>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link">
                                    <span class="bg-primary">
                                        <img src="{{ asset('assets/fitmi/images/icons/icon-studio.svg') }}"
                                            class="img-fluid">
                                    </span>

                                    <div class="tabbing-content-text">
                                        <h4>In-studio Classes</h4>

                                        <p>Book in-studio classes best nearby fitness studios and gyms</p>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link">
                                    <span class="bg-primary">
                                        <img src="{{ asset('assets/fitmi/images/icons/icon-wellness.svg') }}"
                                            class="img-fluid">
                                    </span>

                                    <div class="tabbing-content-text">
                                        <h4>Wellness Classes</h4>

                                        <p>Book in-person and online mediation classes from the best in the business</p>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link">
                                    <span class="bg-primary">
                                        <img src="{{ asset('assets/fitmi/images/icons/icon-dietary.svg') }}"
                                            class="img-fluid">
                                    </span>

                                    <div class="tabbing-content-text">
                                        <h4>Dietary Plans</h4>

                                        <p>Talk to experts to know what kind of diet plan will be suitable for you</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 pl-lg-5">
                    <div class="tabbing-image tabbing-multi-image ">
                        <div class="tab-content" id="tabs-workoutContent">
                            <div class="row gutters-6">
                                <div class="col-lg-6 col-6">
                                    <img class="img-fluid d-block" src="{{ asset('assets/fitmi/images/img01.png') }}"
                                        alt="Meditation">
                                </div>

                                <div class="col-lg-6 col-6">
                                    <img class="img-fluid d-block" src="{{ asset('assets/fitmi/images/img02.png') }}"
                                        alt="Meditation">
                                </div>

                                <div class="col-lg-6 col-6">
                                    <img class="img-fluid d-block" src="{{ asset('assets/fitmi/images/img03.png') }}"
                                        alt="Meditation">
                                </div>

                                <div class="col-lg-6 col-6">
                                    <img class="img-fluid d-block" src="{{ asset('assets/fitmi/images/img04.png') }}"
                                        alt="Meditation">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-subscription">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8">
                    <div class="subscription-content">
                        <div class="section-title section-title-bar">
                            <h3 class="text-white">Save big with our long term Subscription plans</h3>
                        </div>

                        <p>You can save a lot by subscribing to our half yearly and yearly plans, and be eligible for
                            exclusive offers.</p>

                        <div class="button-icon">
                            <a href="#" class="button button-primary">
                                <span>Get Started</span>
                                <i class="icon icon-right-chev"></i>
                            </a>
                        </div>

                        <div class="text-lg-left text-center">
                            <a class="text-find-more" href="#">Find out more ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-work">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="work-image">
                        <div class="play-button">
                            <i class="icon icon-play"></i>
                        </div>
                        <img src="images/banner03.jpg" class="img-fluid" alt="Fitmi@Work">
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="work-content">
                        <div class="section-title">
                            <span class="title-outline">FitMi@Work</span>
                            <h4 class="title-xl">FitMi@Work</h4>
                        </div>
                        <p>We provide customized fitness and wellness programs including corporate packages to fitness
                            classes at workplace and exclusive rewards programs to help your employees:</p>

                        <ul class="list-unstyled">
                            <li>Stay stress free, resulting in increased productivity</li>
                            <li>They don’t need to worry about work-lie balance</li>
                            <li>They can indulge in fun fitness activities with co-workers</li>
                            <li>They get access to complete health and wellness bouquet</li>
                        </ul>

                        <div class="text-lg-right text-center">
                            <a class="text-find-more" href="#">Find out more ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-app">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="app-content">
                        <div class="section-title">
                            <h3 class="title-lg">Available now on each Platform!</h3>
                        </div>

                        <p>Download the FitMi app today. Start your workout.</p>

                        <div class="app-store-icon">
                            <a href="#" target="_blank"><img class="img-fluid d-block"
                                    src="{{ asset('assets/fitmi/images/app-store.png') }}"></a>
                            <a href="#" target="_blank"><img class="img-fluid d-block"
                                    src="{{ asset('assets/fitmi/images/play-store.png') }}"></a>
                        </div>
                        <div class="app-store-qr">
                            <img src="images/qr.png" class="img-fluid">

                            <p>Scan the QR Code to download the app</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 ml-auto">
                    <div class="app-image">
                        <img src="images/phone.png" class="img-fluid d-block ml-lg-auto mx-auto" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
@endpush
