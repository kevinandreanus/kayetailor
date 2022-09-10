@extends('template.template')

@push('custom-css')
    <style>
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
            <img src="{{ asset('images/services/shirt.PNG') }}" alt="" width="100%" style="height: 650px;">
            <div class="centered">
                <h3 style="color: #ac956d !important; font-size: 40px !important;" class="titlecus">SERVICES</h3>
            </div>
            <div class="bottom-right">
                <img src="{{ asset('images/yakk.png') }}" alt="" style="height: 240px">
            </div>

        </div>
        <div class="text-center mt-5 mb-4" style="margin-top: 100px !important;">
            <h3 style="color: #806e4f !important;" class="titlecus">SHIRT</h3>
        </div>
        <div class="container">
            <div class="aboutusdynamic pt-3 pb-5">
                <p style="line-height: 200%; text-align: center !important;" class="mt-4">Inner for Fullset suit that made
                    from cotton. Tailored &
                    customized for you as well
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

    </div>


    <div class="container" id="mobileviewz">
        <div class="text-center" style="margin-top: 100px">
            <h3 style="color: #806e4f !important;" class="titlecus">SERVICES</h3>
            <img class="mt-3" src="{{ asset('images/services/shirt.PNG') }}" alt="">

            <h3 class="mt-5 titlecus" style="color: #806e4f !important;">SHIRT</h3>
            <p class="center-justified">Inner for Fullset suit that made from cotton. Tailored &
                customized for you as well</p>
            <img class="mt-5" src="{{ asset('images/services/pic1.png') }}" alt="">
            <img class="mt-3" src="{{ asset('images/services/pic2.png') }}" alt="">
            <img class="mt-3" src="{{ asset('images/services/pic3.png') }}" alt="">
            <br>
        </div>

    </div>
@endsection
