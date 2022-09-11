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

            .top-right-special {
                position: absolute;
                top: 180px;
                right: 16px;
            }

            .container-img {
                position: relative;
                text-align: center;
                color: white;
            }

            .top-right {
                position: absolute;
                top: 8px;
                right: 16px;
            }
        }
    </style>
@endpush

@section('content')
    <div id="desktopviewz">
        <div class="bannertopz">
            @if (Auth::user())
                <div class="top-right-special">
                    <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modalMainImg"
                        id="edtMainImgBtn">Edit</button>
                </div>
            @endif
            {{-- Modal Edit Main Image --}}
            <div class="modal fade" id="modalMainImg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Main Image</h5>
                        </div>
                        <div class="modal-body">
                            <form id="formTopBanner" action="/admin/editServiceMainImageInside" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="text" value="1" name="id">
                                <div class="mb-3">
                                    <input name="image" style="height: 37px;" class="form-control" type="file"
                                        id="formFile">
                                </div>
                            </form>
                            <hr>
                            <button type="submit" style="float: right" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End of Modal --}}
            <img src="{{ asset($main_image->main_image_path) }}" alt="" width="100%" style="height: 650px;">
            <div class="centered">
                <h3 style="color: #ac956d !important; font-size: 40px !important;" class="titlecus">SERVICES</h3>
            </div>
            <div class="bottom-right">
                <img src="{{ asset('images/yakk.png') }}" alt="" style="height: 240px">
            </div>

        </div>

        <div class="text-center mt-5 mb-4" style="margin-top: 100px !important;">
            @if (Auth::user())
                <h3 style="color: #806e4f !important;" class="titlecus">{{ strtoupper($main_image->title) }} <a
                        href="" class="btn btn-secondary btn-sm mb-2">Edit</a></h3>
            @else
                <h3 style="color: #806e4f !important;" class="titlecus">{{ strtoupper($main_image->title) }}</h3>
            @endif
        </div>

        <div class="container">
            <div class="aboutusdynamic pt-3 pb-5">
                @foreach ($main_image->paragraphs as $i)
                    <p style="line-height: 200%;" class="mt-4">{{ $i->paragraph }}
                        @if (Auth::user())
                            <a href="" class="btn btn-secondary btn-sm mb-2">Edit</a>
                        @endif
                    </p>
                @endforeach
                @if (Auth::user())
                    <a href="" class="btn btn-primary btn-sm mb-2">Add Paragraph</a>
                @endif

            </div>
        </div>

        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12 col-md-7" style="margin: 0; padding: 5;">
                    <div class="container-img">
                        <img class="mt-2" src="{{ asset('images/services/pic1.png') }}" alt="">
                        @if (Auth::user())
                            <div class="top-right"><a href="" class="btn btn-secondary btn-sm mt-3">Edit</a></div>
                        @endif
                    </div>
                    <div class="container-img">
                        <img class="mt-2" src="{{ asset('images/services/pic1.png') }}" alt="">
                        @if (Auth::user())
                            <div class="top-right"><a href="" class="btn btn-secondary btn-sm mt-3">Edit</a></div>
                        @endif
                    </div>
                </div>
                <div class="col-sm-6 col-md-5" style="margin: 0; padding: 5;">
                    <div class="container-img">
                        <img class="mt-2" src="{{ asset('images/services/pic2.png') }}" alt="">
                        @if (Auth::user())
                            <div class="top-right"><a href="" class="btn btn-secondary btn-sm mt-3">Edit</a></div>
                        @endif
                    </div>
                    <div class="container-img">
                        <img class="mt-2" src="{{ asset('images/services/pic3.png') }}" alt="">
                        @if (Auth::user())
                            <div class="top-right"><a href="" class="btn btn-secondary btn-sm mt-3">Edit</a></div>
                        @endif
                    </div>
                    <div class="container-img">
                        <img class="mt-2" src="{{ asset('images/services/pic3.png') }}" alt="">
                        @if (Auth::user())
                            <div class="top-right"><a href="" class="btn btn-secondary btn-sm mt-3">Edit</a></div>
                        @endif
                    </div>

                </div>
            </div>
        </div>

    </div>


    <div class="container" id="mobileviewz">
        <div class="text-center" style="margin-top: 100px">
            <h3 style="color: #806e4f !important;" class="titlecus">SERVICES</h3>
            <img class="mt-3" src="{{ asset('images/services/pic2.png') }}" alt="">

            <h3 class="mt-5 titlecus" style="color: #806e4f !important;">SUIT</h3>
            <p class="lookBookP">For wedding or business occasion, we make modern and classic fit suit.
                Shirt: Inner for Fullset suit that made from cotton. Tailored & customized for you as well</p>
            <img class="mt-5" src="{{ asset('images/services/pic1.png') }}" alt="">
            <img class="mt-3" src="{{ asset('images/services/pic2.png') }}" alt="">
            <img class="mt-3" src="{{ asset('images/services/pic3.png') }}" alt="">
            <br>
        </div>

    </div>
@endsection

@push('custom-js')
    <script>
        $('#edtMainImgBtn').on('click', function() {
            $('#modalMainImg').modal("show");
        });
    </script>
@endpush
