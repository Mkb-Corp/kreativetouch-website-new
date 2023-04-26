@extends('layouts.master')

@section('content')
    <!-- start slider section -->
    <section class="top-space wow animate__fadeIn p-0">
        <div class="swiper-container slider-half-screen black-move"
            data-slider-options='{ "loop": true, "slidesPerView": "1", "allowTouchMove":true, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "pagination": { "el": ".swiper-pagination", "clickable": true } }'>
            <div class="swiper-wrapper">
                <!-- start slider item -->
                <div class="swiper-slide cover-background sm-background-image-center"
                    style="background-image:url('{{ asset('assets/images/slide01.jpg') }}');">
                    <div class="container-fluid position-relative h-100">
                        <div class="row h-100">
                            <div
                                class="col-12 d-flex flex-column justify-content-center padding-ten-left sm-padding-five-left h-100">
                                <span
                                    class="text-middle-line text-deep-pink d-block w-20 md-text-middle-line sm-w-50">Branding
                                    and Identity</span>
                                <span
                                    class="title-large alt-font text-extra-dark-gray font-weight-700 w-25 margin-40px-tb sm-margin-20px-tb d-block letter-spacing-minus-2 md-w-60">Haraka
                                    Delivery</span>
                                <a href="single-project-page-01.html"
                                    class="btn btn-small btn-dark-gray align-self-start">Explore Work</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide cover-background sm-background-image-center"
                    style="background-image:url('{{ asset('assets/images/slide02.jpg') }}');">
                    <div class="container-fluid position-relative h-100">
                        <div class="row h-100">
                            <div
                                class="col-12 d-flex flex-column justify-content-center padding-ten-left sm-padding-five-left h-100">
                                <span
                                    class="text-middle-line text-deep-pink d-block w-20 md-text-middle-line sm-w-50">Identity
                                    and Photography</span>
                                <span
                                    class="title-large alt-font text-extra-dark-gray font-weight-700 w-25 margin-40px-tb sm-margin-20px-tb margin-two-tb d-block letter-spacing-minus-2 md-w-60">Ngalu
                                    Business</span>
                                <a href="single-project-page-02.html"
                                    class="btn btn-small btn-dark-gray align-self-start">Explore Work</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide cover-background sm-background-image-center"
                    style="background-image:url('https://via.placeholder.com/1800x800');">
                    <div class="container-fluid position-relative h-100">
                        <div class="row h-100">
                            <div
                                class="col-12 d-flex flex-column justify-content-center padding-ten-left sm-padding-five-left h-100">
                                <span
                                    class="text-middle-line text-deep-pink d-block w-20 md-text-middle-line sm-w-50">Branding
                                    and Identity</span>
                                <span
                                    class="title-large alt-font text-extra-dark-gray font-weight-700 w-25 margin-40px-tb sm-margin-20px-tb margin-two-tb d-block letter-spacing-minus-2 md-w-60">Reutter
                                    Craft</span>
                                <a href="single-project-page-03.html"
                                    class="btn btn-small btn-dark-gray align-self-start">Explore Work</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-square"></div>
            <!-- <div class="swiper-button-next light"><i class="ti-angle-right"></i></div>
                            <div class="swiper-button-prev light"><i class="ti-angle-left"></i></div> -->
        </div>
    </section>
    <!-- end slider section -->
    <!-- start about section -->
    <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row align-items-center">
                <div
                    class="col-12 col-lg-4 text-center text-lg-start md-margin-40px-bottom sm-margin-30px-bottom wow animate__fadeIn">
                    <h3
                        class="text-light-gray alt-font font-weight-600 text-middle-line margin-five-bottom md-margin-5px-bottom w-50 letter-spacing-minus-3 md-w-100 md-text-middle-line">
                        01</h3>
                    <h5
                        class="text-uppercase alt-font text-extra-dark-gray font-weight-700 w-75 d-inline-block md-d-block mb-0 lg-w-90 md-w-50 xs-w-100">
                        Nous sommes une agence branding et media.</h5>
                </div>
                <div class="col-12 col-lg-4 col-md-6 sm-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                    <img class="padding-ten-right md-no-padding-right w-100" src="https://via.placeholder.com/700x966"
                        alt="">
                </div>
                <div class="col-12 col-lg-4 col-md-6 text-center text-md-start md-padding-six-half-left sm-padding-15px-left wow animate__fadeIn"
                    data-wow-delay="0.4s">
                    <p class="text-large text-extra-dark-gray">Notre agence se spécialise dans la création de
                        marques innovantes et la stratégie de contenu pour les médias sociaux.</p>
                    <p>Nous travaillons avec des entreprises de toutes tailles pour aider à créer une identité de marque
                        forte et cohérente. Nous sommes passionnés par la création de contenus qui engagent et inspirent
                        notre audience.
                        Nous avons une vision claire de l'importance de la marque dans le succès des entreprises et notre
                        mission est d'augmenter la valeur perçue des produits et services de nos clients en plaçant leur
                        marque au sommet de leur secteur.
                        </p>
                    <p>Nous aidons nos clients à se différencier de la concurrence
                        en créant des images de marque
                        dynamiques et mémorables qui reflètent leur identité de marque unique.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->
    <!-- start skills section -->
    <section class="wow animate__fadeIn bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 md-margin-50px-bottom sm-margin-40px-bottom text-center text-lg-start">
                    <p class="text-large text-extra-dark-gray">Since our foundation in 2005 our goal has been to use
                        technology to create experiences with a deeper impact.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard.</p>
                    <a href="services-modern.html"
                        class="alt-font text-uppercase font-weight-600 text-link-extra-dark-gray text-deep-pink-hover text-small">Development
                        Services <i
                            class="fas fa-long-arrow-alt-right margin-5px-left text-deep-pink text-medium position-relative top-2"
                            aria-hidden="true"></i></a>
                </div>
                <div class="col-12 col-lg-6 margin-30px-top offset-lg-1">
                    <!-- start progress bar item -->
                    <div
                        class="progress progress-step-style-03 bg-transparent-black-very-light rounded-0 margin-55px-bottom">
                        <span class="progress-title text-extra-small text-uppercase text-dark-gray">Jquery - 4 years
                            Experience</span>
                        <div class="progress-bar bg-extra-dark-gray rounded-0" role="progressbar" aria-valuenow="92"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        <span class="progress-bar-percent text-small">92%</span>
                    </div>
                    <!-- end progress bar item -->
                    <!-- start  progress bar item -->
                    <div
                        class="progress progress-step-style-03 bg-transparent-black-very-light rounded-0 margin-55px-bottom">
                        <span class="progress-title text-extra-small text-uppercase text-dark-gray">Wordpress - 6 years
                            Experience</span>
                        <div class="progress-bar bg-extra-dark-gray rounded-0" role="progressbar" aria-valuenow="97"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        <span class="progress-bar-percent text-small">97%</span>
                    </div>
                    <!-- end progress bar item -->
                    <!-- start  progress bar item -->
                    <div
                        class="progress progress-step-style-03 bg-transparent-black-very-light rounded-0 margin-55px-bottom">
                        <span class="progress-title text-extra-small text-uppercase text-dark-gray">HTML5 - 5 years
                            Experience</span>
                        <div class="progress-bar bg-extra-dark-gray rounded-0" role="progressbar" aria-valuenow="98"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        <span class="progress-bar-percent text-small">98%</span>
                    </div>
                    <!-- end progress bar item -->
                    <!-- start  progress bar item -->
                    <div class="progress progress-step-style-03 bg-transparent-black-very-light rounded-0">
                        <span class="progress-title text-extra-small text-uppercase text-dark-gray">Photography - 6 years
                            Experience</span>
                        <div class="progress-bar bg-extra-dark-gray rounded-0" role="progressbar" aria-valuenow="92"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        <span class="progress-bar-percent text-small">92%</span>
                    </div>
                    <!-- end progress bar item -->
                </div>
            </div>
        </div>
    </section>
    <!-- end skills section -->
@endsection
