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
            <img src="{{ asset('images/look_book/casual2.PNG') }}" alt="" width="100%" style="height: 650px;">
            <div class="centered">
                <h3 style="color: #ac956d !important; font-size: 40px !important;" class="titlecus">LOOKBOOK</h3>
            </div>
            <div class="bottom-right">
                <img src="{{ asset('images/yakk.png') }}" alt="" style="height: 240px">
            </div>

        </div>
        <div class="text-center mt-5 mb-4" style="margin-top: 100px !important;">
            <h3 style="color: #806e4f !important;" class="titlecus">CASUAL</h3>
        </div>
        <div class="container">
            <div class="aboutusdynamic pt-3 pb-5">
                <p style="line-height: 200%;" class="mt-4">Lorem ipsum dolor sit amet
                    consectetur, adipisicing elit. Consequatur voluptas at laudantium veritatis nostrum, natus consequuntur
                    magnam
                    ipsa, reiciendis molestias praesentium neque sint similique eos inventore qui officia! Nostrum molestiae
                    voluptate, asperiores odio tempora, dicta ducimus illo culpa, soluta unde facilis corporis in distinctio
                    nemo
                    qui ut error aperiam? Est itaque iste sed quis tempora! Autem, reprehenderit. Sed possimus laborum,
                    dicta
                    est
                    placeat veritatis ratione fugit voluptates molestiae facilis cupiditate odit at explicabo veniam
                    molestias
                    hic
                    laboriosam quae dolorum? Possimus quas, placeat cumque, facere perferendis maiores quisquam tenetur
                    neque
                    fuga
                    quibusdam, adipisci necessitatibus asperiores! Ullam rerum nulla placeat quas natus, inventore
                    distinctio
                    fugit
                    sunt? Eaque quo saepe quis aut reprehenderit, dignissimos vel laudantium laborum debitis temporibus!
                    Eveniet,
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
            <h3 style="color: #806e4f !important;" class="titlecus">LOOK BOOK</h3>
            <img class="mt-3" src="{{ asset('images/look_book/casual2.PNG') }}" alt="">

            <h3 class="mt-5 titlecus" style="color: #806e4f !important;">CASUAL STYLE</h3>
            <p class="center-justified">Lorem ipsum dolor sit amet,
                consectetuer adipiscing elit,
                sed
                diam nonummy nibh
                euismod
                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                Duis autem vel eum.</p>
            <img class="mt-5" src="{{ asset('images/look_book/wedding3.PNG') }}" alt="">
            <img class="mt-3" src="{{ asset('images/look_book/wedding4.PNG') }}" alt="">
            <br>
        </div>
        <div class="text-center mt-5">
            <a href="" class="seemorebtn">SEE MORE</a>
        </div>
    </div>
@endsection
