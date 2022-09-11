@extends('template.template')

@push('custom-css')
    <style>
        @media screen and (min-width: 800px) {
            #containerdesktop {
                margin-top: 180px;
            }

            .owl-carousel .owl-item img {
                height: 650px;
            }

            .form-control {
                color: white !important;
            }

            #aboutussection,
            #coresection,
            #servicesection,
            #processsection,
            #fabricsection,
            #lookbooksection,
            #contactsection,
            #blogsection {
                margin-top: 100px !important;
            }

            #processdesktop {
                width: 82% !important;
            }

            .servicedesktopni {
                width: 365px;
                height: 365px;
                transition: transform .2s;
            }

            .servicedesktopni:hover,
            .fabricnic:hover,
            .lookbooknich:hover,
            .senddesktop:hover {
                transform: scale(1.1);
            }

            .fabricnic,
            .lookbooknich,
            .senddesktop {
                transition: transform .2s;
            }

            .lookbookmobile {
                /* visibility: hidden !important; */
                display: none !important;
            }

            #contactmobile {
                display: none !important;
            }

            .aboutusdynamic {
                padding-left: 200px;
                padding-right: 200px;
            }

            .fabricbtn {
                color: white;
                border: 1px solid #806e4f;
                font-size: 16px;
                font-weight: 800;
                width: 300px;
                padding: 8px 24px;
                margin-top: 10px;
                text-transform: uppercase;
            }

            #lookbooksection,
            #fabricsection {
                padding-bottom: 28px;
            }
        }

        @media only screen and (max-width: 600px) {
            #lookbookdesktop {
                /* visibility: hidden !important; */
                display: none !important;
            }

            #contactdesktop {
                display: none !important;
            }

            .fabricbtn {
                color: white;
                border: 1px solid #806e4f;
                font-size: 13px;
                font-weight: 800;
                padding: 4px 12px;
            }
        }
    </style>
@endpush

@section('content')
    <div class="owl-carousel" style="margin-top: 80px;">
    </div>
    <div class="container">
        <div class="text-center mt-4 mb-1" id="aboutussection">
            <h3 style="color: #806e4f !important;" class="titlecus">ABOUT US</h3>
        </div>
        <div class="aboutusdynamic pt-4">
            @foreach ($aboutus as $a)
                <p style="text-align: justify !important; line-height: 200%;" class="mt-4">{{ $a->text }}</p>
            @endforeach
        </div>

        <div class="text-center mt-5 mb-4" id="coresection">
            <h3 style="color: #806e4f !important;" class="titlecus">OUR CORE VALUES</h3>
        </div>
        <div class="text-center">
            <div class="d-flex justify-content-center pt-4">
                <div style="margin-right: 5px;">
                    <img src="{{ $corevalue[0]->image_path ?? '' }}" alt="">
                    <p class="loremz">{{ $corevalue[0]->text ?? '' }}</p>
                </div>
                <div style="margin-top: 15px; margin-right: 5px;">
                    <img src="{{ $corevalue[1]->image_path ?? '' }}" alt="">
                    <p class="loremz">{{ $corevalue[1]->text ?? '' }}</p>
                </div>
                <div style="margin-right: 5px;">
                    <img src="{{ $corevalue[2]->image_path ?? '' }}" alt="">
                    <p class="loremz">{{ $corevalue[2]->text }}</p>
                </div>
                <div style="margin-top: 15px;">
                    <img src="{{ $corevalue[3]->image_path ?? '' }}" alt="">
                    <p class="loremz">{{ $corevalue[3]->text ?? '' }}</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-4 mb-4" id="servicesection">
            <h3 style="color: #806e4f !important;" class="titlecus">SERVICES</h3>
        </div>
        <div class="text-center">
            <div class="d-flex justify-content-center pt-4">
                <div style="margin-right: 10px">
                    <a href="/services/suit"><img width="133px" height="133px" class="servicedesktopni"
                            src="{{ $services[0]->image_path ?? '' }}" alt=""></a>
                </div>
                <div style="margin-right: 10px">
                    <a href="/services/shirt"><img width="133px" height="133px" class="servicedesktopni"
                            src="{{ $services[1]->image_path ?? '' }}" alt=""></a>
                </div>
                <div>
                    <a href="/services/batik"><img width="133px" height="133px" class="servicedesktopni"
                            src="{{ $services[2]->image_path ?? '' }}" alt=""></a>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-1">
                <div style="margin-right: 10px">
                    <a href="/services/cheongsam"><img width="133px" height="133px" class="servicedesktopni"
                            src="{{ $services[3]->image_path ?? '' }}" alt=""></a>
                </div>
                <div style="margin-right: 10px">
                    <a href="/services/trouser"><img width="133px" height="133px" class="servicedesktopni"
                            src="{{ $services[4]->image_path ?? '' }}" alt=""></a>
                </div>
                <div>
                    <a href="/services/alteration"><img width="133px" height="133px" class="servicedesktopni"
                            src="{{ $services[5]->image_path ?? '' }}" alt=""></a>
                </div>
            </div>
        </div>

        <div class="text-center mt-5" id="processsection">
            <h3 style="color: #806e4f !important;" class="titlecus">PROCESS</h3>
        </div>
    </div>
    <div class="text-center mt-4">
        <img src="{{ $process->image_path ?? '' }}" alt="" id="processdesktop">
    </div>

    <div class="container">

        <div class="text-center mt-5" id="fabricsection">
            <h3 style="color: #806e4f !important;" class="titlecus">FABRIC CATALOGUE</h3>
        </div>

        <div class="text-center">
            <div class="d-flex justify-content-center pt-4">
                <div style="margin-right: 10px">
                    <a href="/fabric-catalogue/wool"><img style="width: 360px; height: 350px;" class="mb-3 fabricnic"
                            src="{{ $fabric[0]->image_path ?? '' }}" alt=""></a><br>
                    <a class="fabricbtn" href="/fabric-catalogue/wool">{{ $fabric[0]->text ?? '' }}</a>
                </div>
                <div style="margin-right: 10px">
                    <a href="/fabric-catalogue/semiwool"><img style="width: 360px; height: 350px;" class="mb-3 fabricnic"
                            src="{{ $fabric[1]->image_path ?? '' }}" alt=""></a><br>
                    <a class="fabricbtn" href="/fabric-catalogue/semiwool">{{ $fabric[1]->text ?? '' }}</a>
                </div>
                <div>
                    <a href="/fabric-catalogue/linen"><img style="width: 360px; height: 350px;" class="mb-3 fabricnic"
                            src="{{ $fabric[2]->image_path ?? '' }}" alt=""></a><br>
                    <a class="fabricbtn" href="/fabric-catalogue/linen">{{ $fabric[2]->text ?? '' }}</a>
                </div>
            </div>
        </div>

        <div class="text-center mt-5" id="lookbooksection">
            <h3 style="color: #806e4f !important;" class="titlecus">LOOK BOOK</h3>
        </div>
        <div class="text-center">
            <div class="d-flex justify-content-center pt-4" id="lookbookdesktop">
                <div style="margin-right: 10px">
                    <a href="/lookbook/wedding"><img style="width: 360px; height: 320px;"
                            class="lookbookimg lookbooknich" src="{{ $lookbook[0]->image_path }}" alt=""></a>
                </div>
                <div style="margin-right: 10px">
                    <a href="/lookbook/daily"><img style="width: 360px; height: 320px;" class="lookbookimg lookbooknich"
                            src="{{ $lookbook[1]->image_path }}" alt=""></a>
                </div>
                <div style="margin-right: 10px">
                    <a href="/lookbook/casual"><img style="width: 360px; height: 320px;" class="lookbookimg lookbooknich"
                            src="{{ $lookbook[2]->image_path }}" alt=""></a>
                </div>
                <div>
                    <a href="/lookbook/ceremony"><img style="width: 360px; height: 320px;"
                            class="lookbookimg lookbooknich" src="{{ $lookbook[3]->image_path }}" alt=""></a>
                </div>
            </div>
            <div class="row mt-5 lookbookmobile">
                <div class="col padding-0 asiap" style="padding-left: 12 !important;">
                    <a href="/lookbook/wedding"><img class="lookbookimg" src="{{ $lookbook[0]->image_path }}"
                            alt=""></a>
                </div>
                <div class="col padding-0" style="padding-right: 12; padding-left: 8;">
                    <a href="/lookbook/daily"><img class="lookbookimg" src="{{ $lookbook[1]->image_path }}"
                            alt=""></a>
                </div>
            </div>
            <div class="row mt-2 lookbookmobile">
                <div class="col padding-0 asiap" style="padding-left: 12 !important;">
                    <a href="/lookbook/casual"><img class="lookbookimg" src="{{ $lookbook[2]->image_path }}"
                            alt=""></a>
                </div>
                <div class="col padding-0" style="padding-right: 12; padding-left: 8;">
                    <a href="/lookbook/ceremony"><img class="lookbookimg" src="{{ $lookbook[3]->image_path }}"
                            alt=""></a>
                </div>
            </div>
        </div>

        <div class="text-center mt-5" id="contactsection">
            <h3 style="color: #806e4f !important;" class="titlecus">CONTACT US</h3>
            <img src="/images/contactus.png" alt="" width="65px" class="mt-3">
        </div>
        <div id="contactdesktop">
            <div class="row">
                <div class="col">
                    <form class="mt-4" action="{{ route('send-email') }}">
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Name" name="name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Email" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <textarea rows="3" class="form-control" placeholder="Message" name="message" required></textarea>
                        </div>
                        <button style="float: left;" type="submit" class="sendmsgbtn senddesktop">SEND MESSAGE</button>
                    </form>
                </div>
                <div class="col mt-4 ms-5">
                    <p>Ruko Theme Park Golf Island, RGIE No.100, PIK</p>
                    <p><i class="fa fa-whatsapp me-3"></i> 0812 1316 9595</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        kayebrotherstailor@gmail.com
                    </p>
                    <p><i class="fab fa-instagram me-3"></i> @kayetailor</p>
                </div>
            </div>
        </div>
        <div id="contactmobile">
            <form class="mt-4" action="{{ route('send-email') }}">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Name" name="name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Email" name="email" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Subject" name="subject" required>
                </div>
                <div class="form-group">
                    <textarea rows="3" class="form-control" placeholder="Message" name="message" required></textarea>
                </div>
                <button style="float: left;" type="submit" class="sendmsgbtn">SEND MESSAGE</button>
            </form>
        </div>
        <br>

        <div class="text-center mt-5" id="blogsection">
            <h3 style="color: #806e4f !important;" class="titlecus">BLOGS</h3>
        </div>
        <div class="text-center pt-4 blogcontainer">
            <div class="row mb-2 yaudah" style="padding-right: 12 !important">
                @foreach ($blogs2 as $a)
                    <div class="col padding-0 cardnich" style="padding-left: 12 !important;"
                        data-id="{{ $a->id }}">
                        <img class="mb-2" src="{{ $a->front_image_path }}" alt=""
                            style="border-radius: 15px;"><br>
                        <a style="font-family: 'EB Garamond', serif; font-weight: 700" href="/blog/{{ $a->id }}"
                            class="blogtitle">{{ $a->title }}</a>
                        <p class="blogdate">{{ $a->date_string }}</p>
                        <p class="blogdesc">{{ $a->caption }}</p>
                    </div>
                @endforeach
            </div>
            <a href="#" id="blogseemore" class="seemorebtn">SEE MORE</a>
        </div>
    </div>
@endsection
@push('custom-js')
    @if ($isMobile == 1)
        <script>
            var urlnya = '/admin/blogs/2more';
        </script>
    @else
        <script>
            var urlnya = '/admin/blogs/4more';
        </script>
    @endif
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/admin/topbanner/list',
            success: function(result) {
                var data = result.data;

                $.each(data, function(index, value) {
                    $('.owl-carousel').append('<div> <img src="' + value.image_path +
                        '" alt=""> </div>');
                });
            }
        }).then(function() {
            $(".owl-carousel").owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                dots: true,
                nav: false
            });
        });

        $('#blogseemore').on('click', function() {
            done = [];
            $.each($('.cardnich'), function(i, v) {
                done.push($(v).data('id'))
            });

            $.ajax({
                method: 'post',
                url: urlnya,
                data: {
                    data: done
                },
                success: function(result) {
                    if (result.length > 0) {
                        $(`<div class="row mb-2 yaudah" style="padding-right: 12 !important"></div`)
                            .insertBefore("#blogseemore");
                    }

                    $.each(result, function(i, v) {
                        $($(".yaudah").last()).append(`
                            <div class="col padding-0 cardnich" style="padding-left: 12 !important;" data-id="` +
                            v.id + `">
                                <img class="mb-2" src="` + v.front_image_path + `" alt=""
                                    style="border-radius: 15px;"><br>
                                <a style="font-family: 'EB Garamond', serif; font-weight: 700" href="/blog/` + v.id + `"
                                    class="blogtitle">` + v.title + `</a>
                                <p class="blogdate">` + v.date_string + `</p>
                                <p class="blogdesc">` + v.caption + `</p>
                            </div>
                        `).hide().fadeIn(500);
                    });
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
@endpush
