@extends('layouts.home')

@section('head')



@endsection

@section('content')
<!-- Hero Slider Start -->
<section class="section position-relative">
    <!-- hero-shape one start -->
    <div class="hero-shape1">
        <img class="shape_2" src="{{ asset('assets/images/slider/shape/shape-2.png')}}" alt="shape" />
        <img class="shape_3" src="{{ asset('assets/images/slider/shape/shape-3.png')}}" alt="shape" />
        <img class="shape_1" src="{{ asset('assets/images/slider/shape/shape-1.png')}}" alt="shape" />

        <!-- <svg width="913px" height="651px" viewBox="0 0 913 651" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <title>Path 2</title>
            <defs>
                <linearGradient x1="84.1742062%" y1="73.9814962%" x2="22.0671224%" y2="26.0185038%" id="linearGradient-1">
                    <stop stop-color="#123940" stop-opacity="0" offset="0%"></stop>
                    <stop stop-color="#123940" stop-opacity="0.08" offset="11.397114%"></stop>
                    <stop stop-color="#123940" stop-opacity="0.383987107" offset="31.8082999%"></stop>
                    <stop stop-color="#123940" stop-opacity="0.62" offset="50.0857384%"></stop>
                    <stop stop-color="#123940" stop-opacity="0.823044143" offset="70.0366806%"></stop>
                    <stop stop-color="#123940" offset="100%"></stop>
                    <stop stop-color="#123940" offset="100%"></stop>
                </linearGradient>
            </defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Artboard-Copy" fill="url(#linearGradient-1)">
                    <path d="M0,0 L330.894393,0 C340.850661,53.9478291 410.583073,90.7861011 540.09163,110.514816 C734.354464,140.107888 608.535877,404.408913 767.092273,434.91404 C872.796537,455.250791 930.432446,526.946111 940,650 L0,651 L0,0 Z" id="Path-2"></path>
                </g>
            </g>
        </svg> -->
    </div>
    <!-- hero-shape one end -->
    <!-- hero-shape two start -->
    <div class="hero-shape2">
        <img src="{{ asset('assets/images/slider/shape/shape2.png')}}" alt="shape" />
    </div>
    <!-- hero-shape two end -->
    <!-- hero-slider start -->
    <div class="hero-slider">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-slide-content">
                        <h2 class="title animated">
                            Get Connected with the<br />
                            best Professionals
                        </h2>
                        <p>Fresh designs from bygone eras</p>
                        <a href="#" class="btn animated delay1 btn-dark btn-hover-dark me-4 mb-3 mb-sm-0">Get
                            Started</a>
                        <a href="#" class="btn animated delay2 btn-secondary btn-hover-secondary mb-3 mb-sm-0">Book a
                            Meeting</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img scene mt-10 mt-lg-0">
                        <div data-depth="0.2">
                            <img class="animated" src="{{ asset('assets/images/slider/slide2.png')}}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero-slider end -->
</section>
<!-- Hero Slider End -->




<!-- Service Section Start -->

<section class="service-section section-pt section-pb position-relative">

    <div class="container">

        <div class="row">

            <div class="col-xl-6 col-lg-8 mx-auto">

                <div class="title-section mb-10 text-center wow fadeInUp" data-wow-delay="150ms"
                    data-wow-duration="1500ms">

                    <span class="sub-title ">services</span>

                    <h3 class="title">

                        Check <span class="text-primary">our</span> Services

                    </h3>

                    <p class="animated">

                        Pleasure rationally encounter consequences that are

                        <br class="d-none d-xl-block" />

                        painful. Nor again is there anyone who pursues

                    </p>

                </div>

            </div>

        </div>



        <!-- second row start -->

        <div class="row mb-n7 align-items-center">

            <div class="col-md-6 col-xl-4 mb-7">

                <div class="service-media-wrapper media-spacing-left">

                    <div class="service-media wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">

                        <img class="logo" src="{{ asset('assets/images/service/icon/1.png')}}" alt=" service logo" />

                        <div class="service-media-body">

                            <h4 class="title">

                                <a href="#">Accountants</a>

                            </h4>

                            <p>

                                Pleasure rationally service

                                are anyone who pursues

                            </p>

                        </div>

                    </div>

                    <div class="service-media wow fadeInUp" data-wow-delay="450ms" data-wow-duration="1500ms">

                        <img class="logo" src="{{ asset('assets/images/service/icon/2.png')}}" alt=" service logo" />

                        <div class="service-media-body">

                            <h4 class="title">

                                <a href="#">Financial Advisor</a>

                            </h4>

                            <p>

                                Pleasure rationally extremy

                                are anyone who loves

                            </p>

                        </div>

                    </div>



                </div>

            </div>



            <div class="col-xl-4 mb-7 order-md-1 order-xl-0">

                <div class="service-media-img text-center wow fadeInUp" data-wow-delay="200ms"
                    data-wow-duration="1500ms">

                    <img src="{{ asset('assets/images/service/media.png')}}" alt="images_not_found">

                </div>

            </div>

            <div class="col-md-6 col-xl-4 mb-7">

                <div class="service-media-wrapper media-spacing-right">

                    <div class="service-media wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">

                        <img class="logo" src="{{ asset('assets/images/service/icon/4.png')}}" alt=" service logo" />

                        <div class="service-media-body">

                            <h4 class="title"><a href="#">Lawyer</a></h4>

                            <p>

                                Pleasure rationally service

                                are anyone who loves

                            </p>

                        </div>

                    </div>



                    <div class="service-media wow fadeInUp" data-wow-delay="450ms" data-wow-duration="1500ms">

                        <img class="logo" src="{{ asset('assets/images/service/icon/5.png')}}" alt=" service logo" />

                        <div class="service-media-body">

                            <h4 class="title">

                                <a href="#">Consultant</a>

                            </h4>

                            <p>

                                Pleasure rationally extremy

                                are anyone who is pursues

                            </p>

                        </div>

                    </div>



                </div>



            </div>



        </div>

        <!-- second row end -->

    </div>



</section>

<!-- Service Section ENd -->







<!-- About Us Section Start -->

<section class="about-us section-pt position-relative">

    <div class="container">

        <div class="row mb-n7">

            <!-- tile section start -->

            <div class="col-xl-5 col-lg-6 mb-7">

                <div class="title-section wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">

                    <span class="sub-title">Let us find your expert!</span>

                    <h3 class="title">

                        <span>A Simple Process</span>



                    </h3>



                </div>

                <!-- Services Block -->

                <div class="services-block style-two wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">

                    <div class="inner-box">

                        <div class="content">

                            <div class="icon-box">

                                <span class="icon flaticon-work-from-home"></span>

                            </div>

                            <h5>Tell us what you need</h5>

                            <div class="text">Fill out the form, call us or email us. A member of our team will confirm
                                your need.</div>



                        </div>

                    </div>

                </div>



                <!-- Services Block -->

                <div class="services-block style-three wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">

                    <div class="inner-box">

                        <div class="content">

                            <div class="icon-box">

                                <span class="icon flaticon-corporate-identity"></span>

                            </div>

                            <h5>Receive 3 Quotes, Choose your favourite professional</h5>

                            <div class="text">A member of our team will provide you with the best professional and
                                arrange interviews, the final choice is all yours.</div>



                        </div>

                    </div>

                </div>



                <!-- Services Block -->

                <div class="services-block style-four wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">

                    <div class="inner-box">

                        <div class="content">

                            <div class="icon-box">

                                <span class="icon flaticon-law-book"></span>

                            </div>

                            <h5>Start your project</h5>

                            <div class="text">Our member will assist your form beggining to end to make sure you are
                                sattisfied.</div>



                        </div>

                    </div>

                </div>

            </div>

            <!-- title section end -->

            <!-- about start -->

            <div class="col-xl-6 order-first order-lg-last col-lg-6 mb-7 offset-xl-1">

                <div class="about-photo scene text-center text-lg-left wow fadeInRight" data-wow-delay="250ms"
                    data-wow-duration="1500ms">

                    <div data-depth="0.2">

                        <img src="{{ asset('assets/images/about/1.png')}}" alt="photo" />

                    </div>

                </div>

            </div>

            <!-- about end -->

        </div>

    </div>

    <!-- about-shape satrt -->

    <img class="about-shape" src="{{ asset('assets/images/about/shape.png')}}" alt="bg-shape" />

    <!-- about-shape end -->

</section>

<!-- About Us Section End -->



<!-- Feature section Start -->

<section class="feature-section section-pt section-pb position-relative">

    <img class="path-img" src="{{ asset('assets/images/feature/shape.png')}}" alt="images_not_found">

    <div class="container custom-container">

        <div class="row g-0 align-items-center">

            <!-- title section start -->

            <div class="col-xl-8 col-lg-8 mx-auto">

                <div class="title-section mb-3 text-center wow fadeInUp" data-wow-delay="150ms"
                    data-wow-duration="1500ms">

                    <span class="sub-title">FEATURES</span>

                    <h3 class="title">

                        Whats <span class="text-primary">driving</span> us...

                    </h3>

                    <p class="mb-10">

                        Pleasure rationally encounter consequences that are extremely

                        painful. Nor again is there anyone who loves or pursues or

                        desires to obtain

                    </p>

                </div>

            </div>

            <!-- title section end -->



            <!-- feature start -->

            <div class="col-12">

                <div id="grid" class="grid row mb-n7">

                    <div class="grid-item mb-7">

                        <div class="feature-card bg-light active wow fadeInUp" data-wow-delay="100ms"
                            data-wow-duration="1500ms">

                            <span class="card-shape card-shape-light"></span>

                            <span class="card-shape card-shape-dark"></span>

                            <img class="logo" src="{{ asset('assets/images/feature/logo/1.png')}}"
                                alt=" feature logo" />

                            <h4 class="title my-6">

                                <a href="#">Equity</a>

                            </h4>

                            <p>

                                Pleasure rationally encounter are extremely painful anyone

                                who loves or pursues

                            </p>

                        </div>

                    </div>

                    <div class="grid-item card-mt-75 mb-7 ">

                        <div class="feature-card bg-light active wow fadeInUp" data-wow-delay="200ms"
                            data-wow-duration="1500ms">

                            <span class="card-shape card-shape-light"></span>

                            <span class="card-shape card-shape-dark"></span>

                            <img class="logo" src="{{ asset('assets/images/feature/logo/3.png')}}"
                                alt=" feature logo" />

                            <h4 class="title my-6">

                                <a href="#">Free Service</a>

                            </h4>

                            <p>

                                Pleasure rationally encounter are extremely painful anyone

                                who loves or pursues

                            </p>

                        </div>

                    </div>

                    <div class="grid-item mb-7 ">

                        <div class="feature-card bg-light active wow fadeInUp" data-wow-delay="300ms"
                            data-wow-duration="1500ms">

                            <span class="card-shape card-shape-light"></span>

                            <span class="card-shape card-shape-dark"></span>

                            <img class="logo" src="{{ asset('assets/images/feature/logo/4.png')}}"
                                alt=" feature logo" />

                            <h4 class="title my-6">

                                <a href="#">Techno</a>

                            </h4>

                            <p>

                                Pleasure rationally encounter are extremely painful anyone

                                who loves or pursues

                            </p>

                        </div>

                    </div>

                    <div class="grid-item card-mt-75 mb-7">

                        <div class="feature-card bg-light active wow fadeInUp" data-wow-delay="400ms"
                            data-wow-duration="1500ms">

                            <span class="card-shape card-shape-light"></span>

                            <span class="card-shape card-shape-dark"></span>

                            <img class="logo" src="{{ asset('assets/images/feature/logo/2.png')}}"
                                alt=" feature logo" />

                            <h4 class="title my-6">

                                <a href="#">Trust</a>

                            </h4>

                            <p>

                                Pleasure rationally encounter are extremely painful anyone

                                who loves or pursues

                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- feature end -->

        </div>

    </div>



</section>

<!-- Feature section End -->



<!-- Testimonial Section Satrt -->

<section class="testimonial-section section-py position-relative">

    <img class="tetimonial-shape" src="{{ asset('assets/images/testimonial/shape.png')}}" alt="">

    <div class="container">

        <div class="row mb-n7">

            <div class="col-xl-7 col-lg-6 mb-7">

                <div class="testimonial-photo scene mt-10 mt-lg-0 wow fadeInLeft" data-wow-delay="150ms"
                    data-wow-duration="1500ms">

                    <div data-depth="0.2">

                        <img src="{{ asset('assets/images/testimonial/1.png')}}" alt="photo" />

                    </div>

                </div>

            </div>

            <div class="col-xl-5 col-lg-6 mb-7">

                <div class="title-section wow fadeInUp" data-wow-delay="150ms" data-wow-duration="1500ms">

                    <span class="sub-title">TESTIMONIALS</span>

                    <h3 class="title">

                        Don’t Believe us Check

                        <span class="text-primary">Clients</span> word

                    </h3>

                    <h5 class="happy-customer">

                        More over <span class="font-weight-bold">2500</span> happy

                        customer

                    </h5>

                </div>

                <!-- testimonial-slider start -->

                <div class="testimonial-carousel position-relative wow fadeInUp" data-wow-delay="150ms"
                    data-wow-duration="1500ms">

                    <div class="swiper-container">

                        <div class="swiper-wrapper">

                            <!-- swiper-slide satrt -->

                            <div class="testimonial-slide-item swiper-slide">

                                <span class="quote zmdi zmdi-quote"></span>

                                <p class="testimonial-text mt-2 mb-5">

                                    Pleasure rationally encounter consequences that are

                                    extremely painful. Nor again is there anyone who loves or

                                    pursues or desires maintain

                                </p>

                                <div class="avater d-flex">

                                    <div class="avater-profile">

                                        <img src="{{ asset('assets/images/testimonial/avater.png')}}" alt="avater" />

                                    </div>

                                    <div class="avater-info">

                                        <p>David Loyed</p>

                                        <span>CEO, Omex</span>

                                    </div>

                                </div>

                            </div>

                            <!-- swiper-slide end -->

                            <!-- swiper-slide satrt -->

                            <div class="testimonial-slide-item swiper-slide">

                                <span class="quote zmdi zmdi-quote"></span>

                                <p class="testimonial-text mt-2 mb-5">

                                    Pleasure rationally encounter consequences that are

                                    extremely painful. Nor again is there anyone who loves or

                                    pursues or desires maintain

                                </p>

                                <div class="avater d-flex">

                                    <div class="avater-profile">

                                        <img src="{{ asset('assets/images/testimonial/2.png')}}" alt="avater" />

                                    </div>

                                    <div class="avater-info">

                                        <p>John Loyed</p>

                                        <span>CEO, Omex</span>

                                    </div>

                                </div>

                            </div>

                            <!-- swiper-slide end -->

                            <!-- swiper-slide satrt -->

                            <div class="testimonial-slide-item swiper-slide">

                                <span class="quote zmdi zmdi-quote"></span>

                                <p class="testimonial-text mt-2 mb-5">

                                    Pleasure rationally encounter consequences that are

                                    extremely painful. Nor again is there anyone who loves or

                                    pursues or desires maintain

                                </p>

                                <div class="avater d-flex">

                                    <div class="avater-profile">

                                        <img src="{{ asset('assets/images/testimonial/avater.png')}}" alt="avater" />

                                    </div>

                                    <div class="avater-info">

                                        <p>David Loyed</p>

                                        <span>CEO, Omex</span>

                                    </div>

                                </div>

                            </div>

                            <!-- swiper-slide end -->

                        </div>

                    </div>

                    <!-- swiper navigation -->

                    <div class="swiper-button-prev">

                        <i class="icofont-rounded-left"></i>prev

                    </div>

                    <div class="swiper-button-next">

                        Next<i class="icofont-rounded-right"></i>

                    </div>

                </div>



                <!-- testimonial-slider end -->

            </div>



        </div>

    </div>

</section>

<!-- Testimonial Section End -->



<!-- Counter Section Two -->

<section class="counter-section style-two funfact-section section-py position-relative">

    <div class="container">

        <!-- Fact Counter -->

        <div class="fact-counter style-two">

            <div class="row clearfix">



                <!--Column-->

                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">

                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <div class="content">

                            <div class="icon flaticon-value"></div>

                            <div class="count-outer count-box">

                                <span class="title"> <span class="counter">12500</span>+</span>

                            </div>

                            <h6 class="counter-title">Independent Consultants and industry experts</h6>

                        </div>

                    </div>

                </div>







                <!--Column-->

                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">

                    <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">

                        <div class="content">

                            <div class="icon flaticon-focus"></div>

                            <div class="count-outer count-box">

                                <span class="title"> <span class="counter">3000</span>+</span>

                            </div>

                            <h6 class="counter-title">Projects completed in the past 5 years</h6>

                        </div>

                    </div>

                </div>



                <!--Column-->

                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">

                    <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">

                        <div class="content">

                            <div class="icon flaticon-brazil"></div>

                            <div class="count-outer count-box alternate">

                                <span class="title"> <span class="counter">12500</span>+</span>

                            </div>

                            <h6 class="counter-title">Countries in which we've completed projects</h6>

                        </div>

                    </div>

                </div>



                <!--Column-->

                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">

                    <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">

                        <div class="content">

                            <div class="icon flaticon-conversation-1"></div>

                            <div class="count-outer count-box">

                                <span class="title"> <span class="counter">12500</span>+</span>

                            </div>

                            <h6 class="counter-title">Hours or less untill we send you a candidate proposal</h6>

                        </div>

                    </div>

                </div>



            </div>

        </div>



    </div>

    <svg class="funfact-svg" id="funfact" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 535">

        <path class="funfact-path"
            d="M1950,327.309S1666,1.64,1336,111.4,906,290.324,671,164.377,120.868,57.118-64,225.351" />

        <path id="Shape_5_copy" data-name="Shape 5 copy" class="funfact-path"
            d="M1919.04,532.448s-223.79-369.607-567.75-318.167-454.362,102.4-664.214-62.038S163.566-47.917-47.473,86.059" />

    </svg>

</section>

<!-- End Counter Section Two -->





<!-- Blog Section Start-->

<section class="blog-section section-pb">

    <div class="container">

        <div class="row">

            <div class="col-xl-3 col-lg-4">

                <div class="title-section mb-lg-10 pb-lg-1 wow fadeInUp" data-wow-delay="150ms"
                    data-wow-duration="1500ms">

                    <span class="sub-title">BLOG POST</span>

                    <h3 class="title mb-lg-0">

                        Latest<span class="text-primary">Post</span> from Blog

                    </h3>

                </div>

            </div>

            <div class="col-xl-5 col-lg-6">

                <div class="title-section pl-xl-5">

                    <p class="mt-lg-10 pt-lg-3 mb-10 mb-lg-0">

                        Pleasure rationally encounter consequences that are extremely

                        painful. Nor again is there anyone who loves or pursues or

                        desires to obtain

                    </p>

                </div>

            </div>

        </div>



        <div class="row mb-n7">

            <!-- single blog start -->



            <div class="col-lg-4 col-sm-6 mb-7">

                <div class="blog-card wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">

                    <div class="thumb bg-light text-center">

                        <a href="blog-details.html">

                            <img src="{{ asset('assets/images/blog/1.png')}}" alt="img" />

                        </a>

                    </div>

                    <div class="blog-content">

                        <a href="#"><span class="blog-meta">Adam - 25 September, 2021</span></a>

                        <h3 class="title">

                            <a href="blog-details.html">Business Development Conferrence 2021</a>

                        </h3>

                    </div>

                </div>

            </div>



            <!-- single blog end -->



            <!-- single blog start -->



            <div class="col-lg-4 col-sm-6 mb-7">

                <div class="blog-card wow fadeInUp" data-wow-delay="150ms" data-wow-duration="1500ms">

                    <div class="thumb bg-light text-center">

                        <a href="blog-details.html">

                            <img src="{{ asset('assets/images/blog/2.png')}}" alt="img" />

                        </a>

                    </div>

                    <div class="blog-content">

                        <a href="#"><span class="blog-meta">Kristina - 25 September, 2021</span></a>

                        <h3 class="title">

                            <a href="blog-details.html">Game Development Conferrence 2021</a>

                        </h3>

                    </div>

                </div>

            </div>



            <!-- single blog end -->



            <!-- single blog start -->



            <div class="col-lg-4 col-sm-6 mb-7">

                <div class="blog-card wow fadeInRight" data-wow-delay="150ms" data-wow-duration="1500ms">

                    <div class="thumb bg-light text-center">

                        <a href="blog-details.html">

                            <img src="{{ asset('assets/images/blog/3.png')}}" alt="img" />

                        </a>

                    </div>

                    <div class="blog-content">

                        <a href="#"><span class="blog-meta">Ethan - 25 September, 2021</span></a>

                        <h3 class="title">

                            <a href="#">Apps Development Conferrence 2021</a>

                        </h3>

                    </div>

                </div>

            </div>



            <!-- single blog end -->

        </div>

    </div>

</section>

<!-- Blog Section End-->

@endsection

@section('footer')



@endsection