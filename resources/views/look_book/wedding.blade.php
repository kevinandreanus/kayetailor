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

            .top-right-mobile {
                position: absolute;
                top: 8px;
                right: 165px;
            }

            input,
            select,
            textarea {
                color: white;
            }

            .form-control {
                color: white !important;
            }
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
            @if (Auth::user())
                <div class="top-right-special">
                    <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modalMainImg"
                        id="edtMainImgBtn">Edit</button>
                </div>
            @endif
            <img src="{{ asset($data->main_image_path) }}" alt="" width="100%" style="height: 650px;">
            <div class="centered">
                <h3 style="color: #ac956d !important; font-size: 40px !important;" class="titlecus">LOOKBOOK</h3>
            </div>
            <div class="bottom-right">
                <img src="{{ asset('images/yakk.png') }}" alt="" style="height: 240px">
            </div>

        </div>
        <div id="titleContainer" class="text-center mt-5 mb-4" style="margin-top: 100px !important;">
            @if (Auth::user())
                <h3 style="color: #806e4f !important;" class="titlecus" id="editableContentTitle">
                    {{ strtoupper($data->title) }} <button id="editTitle"
                        class="btn btn-secondary btn-sm mb-2">Edit</button></h3>
            @else
                <h3 style="color: #806e4f !important;" class="titlecus">{{ strtoupper($data->title) }}</h3>
            @endif
        </div>
        <div class="container">
            <div class="aboutusdynamic pt-3 pb-5" id="containerMainss">
                <div id="paragraphContainer">
                    @foreach ($data->paragraphs as $i)
                        <p style="line-height: 200%;" class="mt-4 paragraphEditable" data-id="{{ $i->id }}">
                            {{ $i->paragraph }}
                            @if (Auth::user())
                                <button class="btn btn-secondary btn-sm mb-2 paragraphEditableBtn">Edit</button>
                                <a href="/admin/deleteLookBookParagraph/{{ $i->id }}"
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
                    @foreach ($row_1 as $i)
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
                    @if (Auth::user())
                        <button class="btn btn-primary" id="addRow1Btn">Add Image</button>
                    @endif
                </div>
                <div class="col-sm-6 col-md-5" style="margin: 0; padding: 5;">
                    @foreach ($row_2 as $i)
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
                    @if (Auth::user())
                        <button class="btn btn-primary" id="addRow2Btn">Add Image</button>
                    @endif
                </div>
            </div>
        </div>
        @if (!Auth::user())
            <div class="text-center mt-5">
                <a href="" class="seemorebtn">SEE MORE</a>
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
                        <form id="formTopBanner" action="/admin/editLookBookMainImageInside" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="text" value="1" name="id" hidden>
                            <div class="mb-3">
                                <input name="image" style="height: 37px;" class="form-control formFilez" type="file"
                                    id="formFile">
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
                        <form id="formTopBanner" action="/admin/editPhotoLookBooksDesktop" method="POST"
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
                        <form id="formTopBanner" action="/admin/editPhotoLookBooksDesktop" method="POST"
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
        {{-- Modal Add Photo Row 1 --}}
        <div class="modal fade" id="modalAddRow1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Photo</h5>
                    </div>
                    <div class="modal-body">
                        <form id="formTopBanner" action="/admin/addPhotoLookBookRow1" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="text" value="1" name="id" hidden>
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
        {{-- Modal Add Photo Row 2 --}}
        <div class="modal fade" id="modalAddRow2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Photo</h5>
                    </div>
                    <div class="modal-body">
                        <form id="formTopBanner" action="/admin/addPhotoLookBookRow2" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="text" value="1" name="id" hidden>
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
        {{-- Modal Add Photo Mobile --}}
        <div class="modal fade" id="modalAddMobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Photo</h5>
                    </div>
                    <div class="modal-body">
                        <form id="formTopBanner" action="/admin/addPhotoLookBookMobile" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="text" value="1" name="id" hidden>
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
                    @if (Auth::user())
                        <button class="btn btn-primary" id="addMobileBtn">Add Image</button>
                    @endif
                </div>
            </div>
        @endif
    </div>

    <div class="container" id="mobileviewz">
        <div class="text-center" style="margin-top: 100px">
            <h3 style="color: #806e4f !important;" class="titlecus">LOOK BOOK</h3>
            <img class="mt-3" src="{{ asset($data->main_image_path) }}" alt="">

            <h3 class="mt-5 titlecus" style="color: #806e4f !important;">{{ strtoupper($data->title) }}</h3>
            @foreach ($data->paragraphs as $i)
                <p class="center-justified">{{ $i->paragraph }}</p>
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
            <br>
        </div>
        <div class="text-center mt-5">
            <a href="" class="seemorebtn">SEE MORE</a>
        </div>
    </div>
@endsection
@push('custom-js')
    <script>
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
                url: '/admin/editLookBookTitle',
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
                url: '/admin/editLookBookParagraph',
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
                            `<button class="btn btn-secondary btn-sm mb-2 ms-2 paragraphEditableBtn">Edit</button><a href="/admin/deleteLookBookParagraph/` +
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
                url: '/admin/addLookBookParagraph',
                data: {
                    'look_book_id': 1,
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
                            `<button class="btn btn-secondary btn-sm mb-2 ms-2 paragraphEditableBtn">Edit</button><a href="/admin/deleteLookBookParagraph/` +
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

        $('#addRow1Btn').on('click', function() {
            $('#modalAddRow1').modal("show");
        });
        $('#addRow2Btn').on('click', function() {
            $('#modalAddRow2').modal("show");
        });
        $('#addMobileBtn').on('click', function() {
            $('#modalAddMobile').modal("show");
        });
    </script>
@endpush
