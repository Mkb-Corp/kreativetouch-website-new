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
                                <a href="#"
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
                                <a href="#"
                                    class="btn btn-small btn-dark-gray align-self-start">Explore Work</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide cover-background sm-background-image-center"
                    style="background-image:url('{{ asset('assets/images/slide03.jpg') }}');">
                    <div class="container-fluid position-relative h-100">
                        <div class="row h-100">
                            <div
                                class="col-12 d-flex flex-column justify-content-center padding-ten-left sm-padding-five-left h-100">
                                <span
                                    class="text-middle-line text-deep-pink d-block w-20 md-text-middle-line sm-w-50">Branding
                                    and Identity</span>
                                <span
                                    class="title-large alt-font text-extra-dark-gray font-weight-700 w-25 margin-40px-tb sm-margin-20px-tb margin-two-tb d-block letter-spacing-minus-2 md-w-60">Chez
                                    Nono</span>
                                <a href="#"
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
                    <img class="padding-ten-right md-no-padding-right w-100" src="{{ asset('assets/images/about-01.jpg') }}"
                        alt="kreative touch">
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
    <!-- start section -->
    <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row align-items-center">
                <div
                    class="col-12 col-lg-4 text-center text-lg-start md-margin-40px-bottom sm-margin-30px-bottom wow animate__fadeIn">
                    <h3
                        class="text-light-gray alt-font font-weight-600 text-middle-line margin-five-bottom md-margin-5px-bottom w-50 md-w-100 letter-spacing-minus-3 md-text-middle-line">
                        02</h3>
                    <h5
                        class="text-uppercase alt-font text-extra-dark-gray font-weight-700 w-75 d-inline-block md-d-block mb-0 lg-w-90 md-w-50 xs-w-100">
                        Créativité, Stratégie et Innovation.</h5>
                </div>
                <div class="col-12 col-lg-4 col-md-6 sm-margin-30px-bottom wow animate__fadeIn">
                    <img class="padding-ten-right md-no-padding-right w-100" src="{{ asset('assets/images/about-02.jpg') }}"
                        alt="">
                </div>
                <div
                    class="col-12 col-lg-4 col-md-6 text-center text-md-start md-padding-six-half-left sm-padding-15px-left wow animate__fadeIn">
                    <p class="text-large text-extra-dark-gray">Chez Kreative Touch, nous sommes passionnés par l'art de la
                        créativité.</p>
                    <p>Nous croyons que la créativité est l'une des forces les plus
                        puissantes dans le monde du branding et que cela peut faire
                        toute la différence pour nos clients. Nous sommes convaincus
                        que la créativité devrait être au cœur de chaque stratégie de
                        branding et de chaque projet que nous réalisons.
                        Nous avons une équipe de créatifs, de stratèges et
                        d'innovateurs qui travaillent ensemble pour déterminer
                        les solutions les plus efficaces et créatives pour nos clients. </p>
                    <p>Nous mettons l'accent sur l'innovation et nous trouvons constamment de nouvelles façons
                        de faire ressortir votre marque du lot.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <section class="wow animate__fadeIn py-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 filter-content overflow-hidden">
                    <ul
                        class="hover-option5 portfolio-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-4col md-grid-2col sm-grid-2col xs-grid-1col gutter-medium">
                        <li class="grid-sizer"></li>
                        <!-- start portfolio item -->
                        <li class="grid-item wow animate__zoomIn">
                            <a href="single-project-page-01.html">
                                <figure>
                                    <div class="portfolio-img"><img src="{{ asset('assets/img/01.jpg') }}"
                                            alt="" /></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box align-middle">
                                                <div
                                                    class="portfolio-hover-content position-relative last-paragraph-no-margin">
                                                    <div
                                                        class="bg-deep-pink mx-auto separator-line-horrizontal-medium-light2 position-relative">
                                                    </div>
                                                    <span
                                                        class="font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Project 01
                                                        </span>
                                                    <p
                                                        class="text-medium-gray letter-spacing-1 text-uppercase text-extra-small">
                                                        Mouve</p>
                                                        <p class="text-medium-gray letter-spacing-1 text-uppercase text-extra-small">
                                                        Flyer Design</p>

                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item wow animate__zoomIn" data-wow-delay="0.4s">
                            <a href="single-project-page-03.html">
                                <figure>
                                    <div class="portfolio-img"><img src="{{ asset('assets/img/portfolio-02.jpg') }}"
                                            alt="" /></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box align-middle">
                                                <div
                                                    class="portfolio-hover-content position-relative last-paragraph-no-margin">
                                                    <div
                                                        class="bg-deep-pink mx-auto separator-line-horrizontal-medium-light2 position-relative">
                                                    </div>
                                                    <span
                                                        class="font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Project 02
                                                        </span>
                                                    <p
                                                        class="text-medium-gray letter-spacing-1 text-uppercase text-extra-small">
                                                        Seph's Chic Mode</p>
                                                    <p
                                                        class="text-medium-gray letter-spacing-1 text-uppercase text-extra-small">
                                                        Brand & Identity Design</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item grid-item-double wow animate__zoomIn" data-wow-delay="0.2s">
                            <a href="single-project-page-02.html">
                                <figure>
                                    <div class="portfolio-img"><img src="{{ asset('assets/img/portfolio-03.jpg') }}"
                                            alt="" /></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box align-middle">
                                                <div
                                                    class="portfolio-hover-content position-relative last-paragraph-no-margin">
                                                    <div
                                                        class="bg-deep-pink mx-auto separator-line-horrizontal-medium-light2 position-relative">
                                                    </div>
                                                    <span
                                                        class="font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Project 03
                                                        </span>
                                                    <p
                                                        class="text-medium-gray letter-spacing-1 text-uppercase text-extra-small">
                                                        Capital+</p>
                                                        <p
                                                        class="text-medium-gray letter-spacing-1 text-uppercase text-extra-small">
                                                        Social Media Management</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item wow animate__zoomIn">
                            <a href="single-project-page-04.html">
                                <figure>
                                    <div class="portfolio-img"><img src="{{ asset('assets/img/portfolio-04.jpg') }}"
                                            alt="" /></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box align-middle">
                                                <div
                                                    class="portfolio-hover-content position-relative last-paragraph-no-margin">
                                                    <div
                                                        class="bg-deep-pink mx-auto separator-line-horrizontal-medium-light2 position-relative">
                                                    </div>
                                                    <span
                                                        class="font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Project 04
                                                        </span>
                                                    <p
                                                        class="text-medium-gray letter-spacing-1 text-uppercase text-extra-small">
                                                        Chez Nono Restaurant</p>
                                                        <p
                                                        class="text-medium-gray letter-spacing-1 text-uppercase text-extra-small">
                                                        Branding & Identity Design</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item wow animate__zoomIn" data-wow-delay="0.2s">
                            <a href="single-project-page-06.html">
                                <figure>
                                    <div class="portfolio-img"><img src="{{ asset('assets/img/portfolio-05.jpg') }}"
                                            alt="" /></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box align-middle">
                                                <div
                                                    class="portfolio-hover-content position-relative last-paragraph-no-margin">
                                                    <div
                                                        class="bg-deep-pink mx-auto separator-line-horrizontal-medium-light2 position-relative">
                                                    </div>
                                                    <span
                                                        class="font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Project 05
                                                        </span>
                                                    <p
                                                        class="text-medium-gray letter-spacing-1 text-uppercase text-extra-small">
                                                        Soirée D'éloquence</p>
                                                        <p
                                                        class="text-medium-gray letter-spacing-1 text-uppercase text-extra-small">
                                                        Brochure design</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item grid-item-double wow animate__zoomIn">
                            <a href="single-project-page-05.html">
                                <figure>
                                    <div class="portfolio-img"><img src="{{ asset('assets/img/portfolio-06.jpg') }}"
                                            alt="" /></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box align-middle">
                                                <div
                                                    class="portfolio-hover-content position-relative last-paragraph-no-margin">
                                                    <div
                                                        class="bg-deep-pink mx-auto separator-line-horrizontal-medium-light2 position-relative">
                                                    </div>
                                                    <span
                                                        class="font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Project 06
                                                        </span>
                                                    <p
                                                        class="text-medium-gray letter-spacing-1 text-uppercase text-extra-small">
                                                        Joyful Color</p>
                                                        <p
                                                        class="text-medium-gray letter-spacing-1 text-uppercase text-extra-small">
                                                        Branding & Identity Design</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item grid-item-double wow animate__zoomIn" data-wow-delay="0.2s">
                            <a href="single-project-page-07.html">
                                <figure>
                                    <div class="portfolio-img"><img src="{{ asset('assets/img/portfolio-07.jpg') }}"
                                            alt="" /></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box align-middle">
                                                <div
                                                    class="portfolio-hover-content position-relative last-paragraph-no-margin">
                                                    <div
                                                        class="bg-deep-pink mx-auto separator-line-horrizontal-medium-light2 position-relative">
                                                    </div>
                                                    <span
                                                        class="font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom d-block"> Mael Conception
                                                        </span>
                                                    <p
                                                        Mael Conception</p>
                                                        <p
                                                        class="text-medium-gray letter-spacing-1 text-uppercase text-extra-small">
                                                        Branding & Identity Design</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- start team section -->
    <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-4 md-margin-40px-bottom sm-margin-30px-bottom text-center text-lg-start">
                    <h3
                        class="text-light-gray alt-font text-middle-line font-weight-600 margin-five-bottom md-margin-5px-bottom w-50 letter-spacing-minus-3 text-center text-lg-start md-w-100 md-text-middle-line">
                        03</h3>
                    <h5
                        class="text-uppercase alt-font text-extra-dark-gray font-weight-700 w-75 d-inline-block md-d-block mb-0 lg-w-90 md-w-50 xs-w-100">
                        Découvrez quelques membres de notre équipe.</h5>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 justify-content-center">
                        <!-- start team item -->
                        <div class="col team-block text-start team-style-1 margin-six-bottom md-margin-50px-bottom sm-margin-30px-bottom wow animate__fadeInUp">
                            <figure>
                                <div class="team-image sm-w-100">
                                    <img src="https://via.placeholder.com/700x892" alt="">
                                    <div
                                        class="overlay-content text-center d-flex align-items-center justify-content-center">
                                        <div class="icon-social-small">
                                            <a href="http://facebook.com" target="_blank"
                                                class="text-white-2 text-white-2-hover"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a href="http://twitter.com" target="_blank"
                                                class="text-white-2 text-white-2-hover"><i class="fab fa-twitter"></i></a>
                                            <a href="http://plus.google.com" target="_blank"
                                                class="text-white-2 text-white-2-hover"><i
                                                    class="fab fa-google-plus-g"></i></a>
                                            <a href="http://instagram.com" target="_blank"
                                                class="text-white-2 text-white-2-hover"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-overlay bg-deep-pink opacity8"></div>
                                </div>
                                <figcaption>
                                    <div class="team-member-position margin-20px-top text-center">
                                        <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Emmanuel
                                            Makabu</div>
                                        <div class="text-extra-small text-uppercase text-medium-gray">Creative Director
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- end team item -->
                        <!-- start team item -->
                        <div class="col team-block text-start team-style-1 margin-six-bottom md-margin-50px-bottom sm-margin-30px-bottom wow animate__fadeInUp"
                            data-wow-delay="0.2s">
                            <figure>
                                <div class="team-image sm-w-100">
                                    <img src="https://via.placeholder.com/700x892" alt="">
                                    <div
                                        class="overlay-content text-center d-flex align-items-center justify-content-center">
                                        <div class="icon-social-small">
                                            <a href="http://facebook.com" target="_blank"
                                                class="text-white-2 text-white-2-hover"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a href="http://twitter.com" target="_blank"
                                                class="text-white-2 text-white-2-hover"><i class="fab fa-twitter"></i></a>
                                            <a href="http://plus.google.com" target="_blank"
                                                class="text-white-2 text-white-2-hover"><i
                                                    class="fab fa-google-plus-g"></i></a>
                                            <a href="http://instagram.com" target="_blank"
                                                class="text-white-2 text-white-2-hover"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-overlay bg-deep-pink opacity8"></div>
                                </div>
                                <figcaption>
                                    <div class="team-member-position margin-20px-top text-center">
                                        <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Glodise
                                            Mukuna</div>
                                        <div class="text-extra-small text-uppercase text-medium-gray">Projects Manager
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- end team item -->
                        <!-- start team item -->
                        <div class="col team-block text-start team-style-1 margin-six-bottom md-margin-50px-bottom sm-margin-30px-bottom wow animate__fadeInUp"
                            data-wow-delay="0.4s">
                            <figure>
                                <div class="team-image sm-w-100">
                                    <img src="https://via.placeholder.com/700x892" alt="">
                                    <div
                                        class="overlay-content text-center d-flex align-items-center justify-content-center">
                                        <div class="icon-social-small">
                                            <a href="http://facebook.com" target="_blank"
                                                class="text-white-2 text-white-2-hover"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a href="http://twitter.com" target="_blank"
                                                class="text-white-2 text-white-2-hover"><i class="fab fa-twitter"></i></a>
                                            <a href="http://plus.google.com" target="_blank"
                                                class="text-white-2 text-white-2-hover"><i
                                                    class="fab fa-google-plus-g"></i></a>
                                            <a href="http://instagram.com" target="_blank"
                                                class="text-white-2 text-white-2-hover"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-overlay bg-deep-pink opacity8"></div>
                                </div>
                                <figcaption>
                                    <div class="team-member-position margin-20px-top text-center">
                                        <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Ephraim
                                            Nyembue</div>
                                        <div class="text-extra-small text-uppercase text-medium-gray">Graphic Designer
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- end team item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start blog section -->
@endsection
