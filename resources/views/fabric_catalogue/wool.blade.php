@extends('template.template')

@push('custom-css')
    <style>
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

        .top-right-mobile {
            position: absolute;
            top: 8px;
            right: 165px;
        }

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

        input,
        select,
        textarea {
            color: white;
        }

        .form-control {
            color: white !important;
        }
    </style>
@endpush

@section('content')
    @if (Auth::user())
        <input type="text" id="isAdmin" hidden value="1">
    @else
        <input type="text" id="isAdmin" hidden value="0">
    @endif
    <div id="desktopviewz">
        <div class="bannertopz">
            <img src="{{ asset($data->main_image_path) }}" alt="" width="100%" style="height: 650px;">
            <div class="centered">
                <h3 style="color: #ac956d !important; font-size: 40px !important;" class="titlecus">FABRIC CATALOGUE
                </h3>
            </div>

        </div>
        <div class="text-center mt-5 mb-4" style="margin-top: 100px !important;">
            <h3 style="color: white !important;" class="titlecus">{{ strtoupper($data->text) }}</h3>
        </div>
        <div class="container">
            <div class="owl-carousel owl-theme mt-5 aboutusdynamic">
                @foreach ($wool_slider as $i)
                    <div class="item">
                        <img class="carousel-item" src="{{ asset($i->image_path) }}" alt="">
                    </div>
                @endforeach
            </div>
            <div class="aboutusdynamic pt-3 pb-5" id="containerMainss">
                <div id="paragraphContainer">
                    @foreach ($data->paragraphs as $i)
                        <p style="line-height: 200%;" class="mt-4 paragraphEditable" data-id="{{ $i->id }}">
                            {{ $i->paragraph }}
                            @if (Auth::user())
                                <button class="btn btn-secondary btn-sm mb-2 paragraphEditableBtn">Edit</button>
                                <a href="/admin/deleteFabricParagraph/{{ $i->id }}"
                                    class="btn btn-danger btn-sm mb-2 paragraphDeleteBtn"
                                    data-id="{{ $i->id }}">Delete</a>
                            @endif
                        </p>
                    @endforeach
                </div>
                @if (Auth::user())
                    <button id="addParagraphBtn" class="btn btn-primary btn-sm mb-2">Add
                        Paragraph</button>
                @endif
            </div>
        </div>

        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12 col-md-7" style="margin: 0; padding: 5;">
                    @foreach ($desktop_1 as $i)
                        <div class="container-img">
                            <img class="mt-2" data-id="1" src="{{ asset($i->image_path) }}" alt="">
                            @if (Auth::user())
                                <div class="top-right"><button href=""
                                        class="btn btn-secondary btn-sm mt-3 editPhotoDeskt"
                                        data-id="{{ $i->id }}">Edit</button>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="col-sm-6 col-md-5" style="margin: 0; padding: 5;">
                    @foreach ($desktop_2 as $i)
                        <div class="container-img">
                            <img class="mt-2" data-id="3" src="{{ asset($i->image_path) }}" alt="">
                            @if (Auth::user())
                                <div class="top-right"><button href=""
                                        class="btn btn-secondary btn-sm mt-3 editPhotoDeskt"
                                        data-id="{{ $i->id }}">Edit</button>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        @if (Auth::user())
            <hr>
            <div class="text-center">
                <h3 style="color: #ac956d !important; font-size: 40px !important;" class="titlecus">Mobile Image</h3>
                <div class="container">
                    @foreach ($mobile as $key => $i)
                        @if ($key === 0)
                            <div class="container-img">
                                <img class="mt-5" data-id="{{ $i->id }}" src="{{ asset($i->image_path) }}"
                                    alt="">
                                <div class="top-right-mobile"><button href=""
                                        class="btn btn-secondary btn-sm mt-5 edtPhotoMbl"
                                        data-id="{{ $i->id }}">Edit</button>
                                </div>
                            </div>
                        @else
                            <div class="container-img">
                                <img class="mt-3" data-id="{{ $i->id }}" src="{{ asset($i->image_path) }}"
                                    alt="">
                                <div class="top-right-mobile"><button href=""
                                        class="btn btn-secondary btn-sm mt-3 edtPhotoMbl"
                                        data-id="{{ $i->id }}">Edit</button>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
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
                        <form id="formTopBanner" action="/admin/editFabricMainImageInside" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="text" value="1" name="id" hidden>
                            <div class="mb-3">
                                <input name="image" style="height: 37px;" class="form-control formFilez"
                                    type="file" id="formFile">
                                <label class="custom-file-label" for="inputGroupFile02"></label>
                            </div>
                            <hr>
                            <button type="submit" style="float: right" class="btn btn-primary btn-sm">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- End of Modal --}}

        {{-- Modal Edit Photo Desktop --}}
        <div class="modal fade" id="modalEditPhto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Photo</h5>
                    </div>
                    <div class="modal-body">
                        <form id="formTopBanner" action="/admin/editPhotoFabricsDesktop" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="text" value="" id="idPhotoEdt" name="id" hidden>
                            <div class="mb-3 text-center">
                                <input name="image" style="height: 37px;" class="form-control formFilez"
                                    type="file" id="formFilez">
                                <label class="custom-file-label" for="inputGroupFile02"></label>
                            </div>
                            <hr>
                            <button type="submit" style="float: right" class="btn btn-primary btn-sm">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- End of Modal --}}

        {{-- Modal Edit Photo Mobile --}}
        <div class="modal fade" id="modalEditPhtoMbl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Photo</h5>
                    </div>
                    <div class="modal-body">
                        <form id="formTopBanner" action="/admin/editPhotoFabricsDesktop" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="text" value="" id="idPhotoEdtMbl" name="id" hidden>
                            <div class="mb-3 text-center">
                                <input name="image" style="height: 37px;" class="form-control formFilez"
                                    type="file" id="formFilez">
                                <label class="custom-file-label" for="inputGroupFile02"></label>
                            </div>
                            <hr>
                            <button type="submit" style="float: right" class="btn btn-primary btn-sm">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- End of Modal --}}

    </div>

    <div class="container" id="mobileviewz">
        <div class="text-center" style="margin-top: 100px">
            <h3 style="color: #806e4f !important;" class="titlecus">{{ strtoupper($data->text) }}</h3>
            <h3 class="mt-5"
                style="color: white; font-family: 'EB Garamond', serif;font-weight:700;letter-spacing:2px;">
                WOOL</h3>
            <img class="mt-2" style="width: 100%" src="{{ asset($data->main_image_path) }}" alt="">

            <div class="owl-carousel owl-theme mt-5">
                @foreach ($wool_slider as $i)
                    <div class="item">
                        <img class="carousel-item" src="{{ asset($i->image_path) }}" alt="">
                    </div>
                @endforeach
            </div>
            @foreach ($data->paragraphs as $i)
                <p style="text-align: justify" class="mt-5">{{ $i->paragraph }}</p>
            @endforeach
            @foreach ($mobile as $key => $i)
                @if ($key === 0)
                    <img class="mt-5" data-id="{{ $i->id }}" src="{{ asset($i->image_path) }}"
                        alt="">
                @else
                    <img class="mt-3" data-id="{{ $i->id }}" src="{{ asset($i->image_path) }}"
                        alt="">
                @endif
            @endforeach
        </div>

    </div>
@endsection

@push('custom-js')
    <script>
        $(document).ready(function() {

            $('.owl-carousel').owlCarousel({
                items: 4,
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                slideBy: 'page'
            });

        });

        var isAdmin = $('#isAdmin').val();

        $('#edtMainImgBtn').on('click', function() {
            $('#modalMainImg').modal("show");
        });

        $('#titleContainer').on('click', '#editTitle', function() {
            $(this).html('');

            var text = $('#editableContentTitle').text().trim();
            $('#editableContentTitle').html("<input id='editTitleInput' type='text' value='" +
                text + "'></input>")
        });

        $('#titleContainer').on('focusout', '#editTitleInput', function() {
            var text = $('#editTitleInput').val();

            $.ajax({
                type: "POST",
                url: '/admin/editFabricTitle',
                data: {
                    'id': 1,
                    'text': text
                },
                success: function(res) {
                    $('#editableContentTitle').html(`<h3 style="color: #806e4f !important;" class="titlecus" id="editableContentTitle">
                    ` + text + ` <button id="editTitle"
                        class="btn btn-secondary btn-sm mb-2">Edit</button></h3>`);
                }
            });

        });

        $('#paragraphContainer').on('click', '.paragraphEditableBtn', function() {
            $(this).html('');
            var id = $(this).closest('.paragraphEditable').data('id');
            $('.paragraphDeleteBtn[data-id="' + id + '"]').remove();


            var text = $(this).closest('.paragraphEditable').text().trim();


            $(this).closest('.paragraphEditable').html(
                "<textarea class='form-control editParagraphInput' data-id='" + id +
                "'>" +
                text + "</textarea>");

            $('.paragraphEditable[data-id="' + id + '"]').focus();
        });

        $('#paragraphContainer').on('focusout', '.editParagraphInput', function() {
            var text = $('.editParagraphInput').val();
            var id = $(this).data('id');

            $.ajax({
                type: "POST",
                url: '/admin/editFabricParagraph',
                data: {
                    'id': $(this).data('id'),
                    'text': text
                },
                success: function(res) {
                    if (isAdmin == 1) {
                        $($('.paragraphEditable[data-id="' + id + '"]')).html(
                            `<p style="line-height: 200%;" data-id="` + id +
                            `" class="mt-4 paragraphEditable">` +
                            text +
                            `<button class="btn btn-secondary btn-sm mb-2 ms-2 paragraphEditableBtn">Edit</button><a href="/admin/deleteFabricParagraph/` +
                            id + `"
                                    class="btn btn-danger btn-sm mb-2 paragraphDeleteBtn" data-id="` + id + `">Delete</a>
                    </p>`);
                    } else {
                        $($('.paragraphEditable[data-id="' + id + '"]')).html(
                            `<p style="line-height: 200%;" class="mt-4 paragraphEditable">` +
                            text + `
                    </p>`);
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    console.log(XMLHttpRequest);
                }
            });

        });

        $('#containerMainss').on('click', '#addParagraphBtn', function() {
            $(this).hide();
            $("<textarea class='form-control addParagraphInput'></textarea>").insertBefore($(this));
        });

        $('#containerMainss').on('focusout', '.addParagraphInput', function() {
            var text = $('.addParagraphInput').val();

            $.ajax({
                type: 'POST',
                url: '/admin/addFabricParagraph',
                data: {
                    'fabric_catalogue_id': 1,
                    'text': text
                },
                success: function(res) {
                    $('.addParagraphInput').remove();
                    $('#addParagraphBtn').show();
                    if (isAdmin == 1) {
                        $('#paragraphContainer').append(
                            `<p style="line-height: 200%;" class="mt-4 paragraphEditable" data-id="` +
                            res +
                            `">` + text +
                            `<button class="btn btn-secondary btn-sm mb-2 ms-2 paragraphEditableBtn">Edit</button><a href="/admin/deleteFabricParagraph/` +
                            res + `"
                                    class="btn btn-danger btn-sm mb-2 paragraphDeleteBtn" data-id="` + res +
                            `">Delete</a></p>`
                        );
                    } else {
                        $('#paragraphContainer').append(
                            `<p style="line-height: 200%;" class="mt-4 paragraphEditable" data-id="` +
                            res +
                            `">` + text +
                            `</p>`)
                    }
                }
            });
        });

        $('.editPhotoDeskt').on('click', function() {
            $('#idPhotoEdt').val($(this).data('id'));
            $('#modalEditPhto').modal("show");
        });

        $('.formFilez').on('change', function() {
            //get the file name
            var fileName = $(this).val().replace('C:\\fakepath\\', " ");
            $(this).next('.custom-file-label').html(fileName);
        })

        $('.edtPhotoMbl').on('click', function() {
            $('#idPhotoEdtMbl').val($(this).data('id'));
            $('#modalEditPhtoMbl').modal("show");
        });
    </script>
@endpush
