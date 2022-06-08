@extends('template.template')

@push('custom-css')
    <style>
        .carousel-item {
            height: 40px;
            width: 100px !important;
        }

        @media only screen and (max-width: 600px) {
            .carousel-item {
                height: 30px;
                width: 60px !important;
            }
        }

        .owl-item {
            display: flex;
            justify-content: center;
        }

        .carousel-wrapper {
            width: 1000px;
            margin: auto;
            position: relative;
            text-align: center;
            font-family: sans-serif;
        }

        .owl-carousel .owl-nav {
            overflow: hidden;
            height: 0px;
        }

        .owl-theme .owl-dots .owl-dot.active span,
        .owl-theme .owl-dots .owl-dot:hover span {
            background: #5110e9;
        }

        .owl-carousel .item {
            text-align: center;
        }

        .owl-carousel .nav-button {
            height: 50px;
            width: 25px;
            cursor: pointer;
            position: absolute;
            top: 110px !important;
        }

        .owl-carousel .owl-prev.disabled,
        .owl-carousel .owl-next.disabled {
            pointer-events: none;
            opacity: 0.25;
        }

        .owl-carousel .owl-prev {
            left: -35px;
        }

        .owl-carousel .owl-next {
            right: -35px;
        }

        .owl-theme .owl-nav [class*=owl-] {
            color: #ffffff;
            font-size: 39px;
            background: #000000;
            border-radius: 3px;
        }

        .owl-carousel .prev-carousel:hover {
            background-position: 0px -53px;
        }

        .owl-carousel .next-carousel:hover {
            background-position: -24px -53px;
        }

        @media only screen and (max-width: 600px) {
            #desktopviewz {
                display: none !important;
            }
        }

        @media screen and (min-width: 800px) {
            #mobileviewz {
                display: none !important;
            }

            .aboutusdynamic {
                padding-left: 200px;
                padding-right: 200px;
            }

            .bannertopz {
                position: relative;
                text-align: center;
            }

            .centered {
                position: absolute;
                top: 92%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .bottom-right {
                position: absolute;
                bottom: -80px;
                right: 16px;
            }
        }

    </style>
@endpush

@section('content')
    <div id="desktopviewz">
        <div class="bannertopz">
            <img src="{{ asset('images/fabric_catalogue/wool2.PNG') }}" alt="" width="100%" style="height: 650px;">
            <div class="centered">
                <h3 style="color: #ac956d !important; font-size: 40px !important;" class="titlecus">FABRIC CATALOGUE
                </h3>
            </div>

        </div>
        <div class="text-center mt-5 mb-4" style="margin-top: 100px !important;">
            <h3 style="color: white !important;" class="titlecus">WOOL</h3>
        </div>
        <div class="container">
            <div class="owl-carousel owl-theme mt-5 aboutusdynamic">
                <div class="item">
                    <img class="carousel-item" src="{{ asset('images/fabric_catalogue/cerruti.png') }}" alt="">
                </div>
                <div class="item">
                    <img class="carousel-item" src="{{ asset('images/fabric_catalogue/zara.png') }}" alt="">
                </div>
                <div class="item">
                    <img class="carousel-item" src="{{ asset('images/fabric_catalogue/h&m.png') }}" alt="">
                </div>
                <div class="item">
                    <img class="carousel-item" src="{{ asset('images/fabric_catalogue/bershka.png') }}" alt="">
                </div>
                <div class="item">
                    <img class="carousel-item" src="{{ asset('images/fabric_catalogue/cerruti.png') }}" alt="">
                </div>
                <div class="item">
                    <img class="carousel-item" src="{{ asset('images/fabric_catalogue/zara.png') }}" alt="">
                </div>
                <div class="item">
                    <img class="carousel-item" src="{{ asset('images/fabric_catalogue/h&m.png') }}" alt="">
                </div>
                <div class="item">
                    <img class="carousel-item" src="{{ asset('images/fabric_catalogue/bershka.png') }}" alt="">
                </div>
                <div class="item">
                    <img class="carousel-item" src="{{ asset('images/fabric_catalogue/cerruti.png') }}" alt="">
                </div>
                <div class="item">
                    <img class="carousel-item" src="{{ asset('images/fabric_catalogue/zara.png') }}" alt="">
                </div>
                <div class="item">
                    <img class="carousel-item" src="{{ asset('images/fabric_catalogue/h&m.png') }}" alt="">
                </div>
                <div class="item">
                    <img class="carousel-item" src="{{ asset('images/fabric_catalogue/bershka.png') }}" alt="">
                </div>
            </div>
            <div class="aboutusdynamic pt-3 pb-5">
                <p style="line-height: 200%;" class="mt-4">Wool is one of the most common fabrics for suits. Light
                    weight wools are suitable for tropical climates, on the other side heavy weight wools are great to keep
                    you
                    warm on cold temperature . They are so durable and breathable.
                </p>
            </div>
        </div>

        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12 col-md-7" style="margin: 0; padding: 5;">
                    <img class="mt-2" src="{{ asset('images/services/pic1.png') }}" alt="">
                    <img class="mt-2" src="{{ asset('images/services/pic1.png') }}" alt="">
                </div>
                <div class="col-sm-6 col-md-5" style="margin: 0; padding: 5;">
                    <img class="mt-2" src="{{ asset('images/services/pic2.png') }}" alt="">
                    <img class="mt-2" src="{{ asset('images/services/pic3.png') }}" alt="">
                    <img class="mt-2" src="{{ asset('images/services/pic3.png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="" class="seemorebtn">SEE MORE</a>
        </div>
    </div>

    <div class="container" id="mobileviewz">
        <div class="text-center" style="margin-top: 100px">
            <h3 style="color: #806e4f !important;" class="titlecus">FABRIC CATALOGUE</h3>
            <h3 class="mt-5"
                style="color: white; font-family: 'EB Garamond', serif;font-weight:700;letter-spacing:2px;">WOOL</h3>
            <img class="mt-2" style="width: 100%" src="{{ asset('images/fabric_catalogue/wool2.PNG') }}"
                alt="">

            <div class="owl-carousel owl-theme mt-5">
                <div class="item">
                    <img class="carousel-item" src="{{ asset('images/fabric_catalogue/cerruti.png') }}" alt="">
                </div>
                <div class="item">
                    <img class="carousel-item" src="{{ asset('images/fabric_catalogue/zara.png') }}" alt="">
                </div>
                <div class="item">
                    <img class="carousel-item" src="{{ asset('images/fabric_catalogue/h&m.png') }}" alt="">
                </div>
                <div class="item">
                    <img class="carousel-item" src="{{ asset('images/fabric_catalogue/bershka.png') }}" alt="">
                </div>
                <div class="item">
                    <img class="carousel-item" src="{{ asset('images/fabric_catalogue/cerruti.png') }}" alt="">
                </div>
                <div class="item">
                    <img class="carousel-item" src="{{ asset('images/fabric_catalogue/zara.png') }}" alt="">
                </div>
                <div class="item">
                    <img class="carousel-item" src="{{ asset('images/fabric_catalogue/h&m.png') }}" alt="">
                </div>
                <div class="item">
                    <img class="carousel-item" src="{{ asset('images/fabric_catalogue/bershka.png') }}" alt="">
                </div>
                <div class="item">
                    <img class="carousel-item" src="{{ asset('images/fabric_catalogue/cerruti.png') }}" alt="">
                </div>
                <div class="item">
                    <img class="carousel-item" src="{{ asset('images/fabric_catalogue/zara.png') }}" alt="">
                </div>
                <div class="item">
                    <img class="carousel-item" src="{{ asset('images/fabric_catalogue/h&m.png') }}" alt="">
                </div>
                <div class="item">
                    <img class="carousel-item" src="{{ asset('images/fabric_catalogue/bershka.png') }}" alt="">
                </div>
            </div>
            <p style="text-align: justify" class="mt-5">Wool is one of the most common fabrics for suits. Light
                weight wools are suitable for tropical climates, on the other side heavy weight wools are great to keep you
                warm on cold temperature . They are so durable and breathable.</p>

            <img class="mt-5 w-100" src="{{ asset('images/1.PNG') }}" alt=""><br>
            <img class="mt-3 w-100" src="{{ asset('images/2.PNG') }}" alt=""><br>
            <img class="mt-3 w-100" src="{{ asset('images/3.PNG') }}" alt="">
        </div>
        <div class="text-center mt-5">
            <a href="" class="seemorebtn">SEE MORE</a>
        </div>
    </div>
@endsection

@push('custom-js')
    <script>
        $(document).ready(function() {
            // $(".owl-carousel").owlCarousel({
            //     items: 4,
            //     loop: true,
            //     nav: true,

            // });
            $('.owl-carousel').owlCarousel({
                items: 4,
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                slideBy: 'page'
            })

        });
    </script>
@endpush
