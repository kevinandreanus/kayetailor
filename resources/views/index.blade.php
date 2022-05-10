@extends('template.template')
@section('content')
    <div class="container">
        <div class="owl-carousel" style="margin-top: 80px;">
        </div>

        <div class="text-center mt-4 mb-4" id="aboutussection">
            <h3 style="color: #806e4f !important;" class="titlecus">ABOUT US</h3>
        </div>
        <div class="aboutusdynamic">
            @foreach ($aboutus as $a)
                <p style="text-align: justify !important">{{ $a->text }}</p>
            @endforeach
        </div>

        <div class="text-center mt-5" id="coresection">
            <h3 style="color: #806e4f !important;" class="titlecus">OUR CORE VALUES</h3>
        </div>
        <div class="text-center">
            <div class="row mt-5">
                <div class="col padding-0 asiap" style="padding-left: 12 !important;">
                    <img src="{{ $corevalue[0]->image_path ?? '' }}" alt="">
                    <p class="loremz">{{ $corevalue[0]->text ?? '' }}</p>
                </div>
                <div class="col padding-0 asiap" style="margin-top: 12px; padding-right: 5; padding-left: 5;">
                    <img src="{{ $corevalue[1]->image_path ?? '' }}" alt="">
                    <p class="loremz">{{ $corevalue[1]->text ?? '' }}</p>
                </div>
                <div class="col padding-0 asiap">
                    <img src="{{ $corevalue[2]->image_path ?? '' }}" alt="">
                    <p class="loremz">{{ $corevalue[2]->text }}</p>
                </div>
                <div class="col padding-0 asiap" style="margin-top: 12px; padding-right: 12 !important;">
                    <img src="{{ $corevalue[3]->image_path ?? '' }}" alt="">
                    <p class="loremz">{{ $corevalue[3]->text ?? '' }}</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-4" id="servicesection">
            <h3 style="color: #806e4f !important;" class="titlecus">SERVICES</h3>
        </div>
        <div class="text-center">
            <div class="row mt-5">
                <div class="col padding-0 asiap" style="padding-left: 12 !important;">
                    <a href="/services/suit"><img src="{{ $services[0]->image_path ?? '' }}" alt=""></a>
                </div>
                <div class="col padding-0 asiap" style="padding-left: 8;">
                    <a href="/services/shirt"><img src="{{ $services[1]->image_path ?? '' }}" alt=""></a>
                </div>
                <div class="col padding-0 asiap" style="padding-right: 12 !important;">
                    <a href="/services/batik"><img src="{{ $services[2]->image_path ?? '' }}" alt=""></a>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col padding-0 asiap" style="padding-left: 12 !important;">
                    <a href="/services/cheongsam"><img src="{{ $services[3]->image_path ?? '' }}" alt=""></a>
                </div>
                <div class="col padding-0 asiap" style="padding-left: 8;">
                    <a href="/services/trouser"><img src="{{ $services[4]->image_path ?? '' }}" alt=""></a>
                </div>
                <div class="col padding-0 asiap" style="padding-right: 12 !important;">
                    <a href="/services/alteration"><img src="{{ $services[5]->image_path ?? '' }}" alt=""></a>
                </div>
            </div>
        </div>

        <div class="text-center mt-5" id="processsection">
            <h3 style="color: #806e4f !important;" class="titlecus">PROCESS</h3>
        </div>
    </div>
    <div class="text-center mt-4">
        <img src="{{ $process->image_path ?? '' }}" alt="">
    </div>

    <div class="container">

        <div class="text-center mt-5" id="fabricsection">
            <h3 style="color: #806e4f !important;" class="titlecus">FABRIC CATALOGUE</h3>
        </div>

        <div class="text-center">
            <div class="row mt-5">
                <div class="col padding-0" style="padding-left: 12;">
                    <a href="/fabric-catalogue/wool"><img class="mb-3" src="{{ $fabric[0]->image_path ?? '' }}"
                            alt=""></a><br>
                    <a class="fabricbtn" href="/fabric-catalogue/wool">{{ $fabric[0]->text ?? '' }}</a>
                </div>
                <div class="col padding-0" style="padding-left: 8;">
                    <a href="/fabric-catalogue/semiwool"><img class="mb-3"
                            src="{{ $fabric[1]->image_path ?? '' }}" alt=""></a><br>
                    <a class="fabricbtn" href="/fabric-catalogue/semiwool">{{ $fabric[1]->text ?? '' }}</a>
                </div>
                <div class="col padding-0" style="padding-right: 12; padding-left: 8;">
                    <a href="/fabric-catalogue/linen"><img class="mb-3"
                            src="{{ $fabric[2]->image_path ?? '' }}" alt=""></a><br>
                    <a class="fabricbtn" href="/fabric-catalogue/linen">{{ $fabric[2]->text ?? '' }}</a>
                </div>
            </div>
        </div>

        <div class="text-center mt-5" id="lookbooksection">
            <h3 style="color: #806e4f !important;" class="titlecus">LOOK BOOK</h3>
        </div>
        <div class="text-center">
            <div class="row mt-5">
                <div class="col padding-0 asiap" style="padding-left: 12 !important;">
                    <a href="/lookbook/wedding"><img class="lookbookimg" src="{{ $lookbook[0]->image_path }}"
                            alt=""></a>
                </div>
                <div class="col padding-0" style="padding-right: 12; padding-left: 8;">
                    <a href="/lookbook/daily"><img class="lookbookimg" src="{{ $lookbook[1]->image_path }}"
                            alt=""></a>
                </div>
            </div>
            <div class="row mt-2">
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
        </div>
        <form class="mt-5">
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Subject">
            </div>
            <div class="form-group">
                <textarea rows="3" class="form-control" placeholder="Message"></textarea>
            </div>
            <button style="float: left;" type="submit" class="sendmsgbtn">SEND MESSAGE</button>
        </form>
        <br>

        <div class="text-center mt-5" id="blogsection">
            <h3 style="color: #806e4f !important;" class="titlecus">BLOGS</h3>
        </div>
        <div class="text-center mt-5 blogcontainer">
            <div class="row mb-2 yaudah">
                @foreach ($blogs2 as $a)
                    <div class="col padding-0 cardnich" style="padding-left: 12;" data-id="{{ $a->id }}">
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
                url: '/admin/blogs/2more',
                data: {
                    data: done
                },
                success: function(result) {
                    if (result.length > 0) {
                        $(`<div class="row mb-2 yaudah"></div`)
                            .insertBefore("#blogseemore");
                    }

                    $.each(result, function(i, v) {
                        $($(".yaudah").last()).append(`
                            <div class="col padding-0 cardnich" style="padding-left: 12;" data-id="` +
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
