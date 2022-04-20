@extends('template.template')
@section('content')
    <div class="container">
        <div class="owl-carousel" style="margin-top: 80px;">
            <div> <img src="{{ asset('images/carousel_image/1.jpg') }}" alt=""> </div>
            <div> <img src="{{ asset('images/carousel_image/2.jpg') }}" alt=""> </div>
            <div> <img src="{{ asset('images/carousel_image/3.jpg') }}" alt=""> </div>
        </div>

        <div class="text-center mt-4" id="aboutussection">
            <h3 style="color: #806e4f !important;" class="titlecus">ABOUT US</h3>
        </div>
        <p>Founded by two gentlemen who are very passionate about men's fashion, Kaye Brothers
            wants our customers to become real gentlemen and the best version of themselves. We
            want to fully engage with our customers to make them completely satisfied with all
            aspects of their suits.</p>
        <p>Kaye Brothers is a local men's clothing store based in Jakarta, Indonesia. We provide well
            costume tailored suits and we manufactures our products exclusively for our brand only.</p>


        <div class="text-center mt-5" id="coresection">
            <h3 style="color: #806e4f !important;" class="titlecus">OUR CORE VALUES</h3>
        </div>
        <div class="text-center">
            <div class="row">
                <div class="col padding-0" style="padding-left: 12;">
                    <img src="{{ asset('images/core_values/1.PNG') }}" alt="">
                    <p class="loremz">The key points for a great suit are taking an accurate
                        body measurements and fitting to make them fits perfectly on your body</p>
                </div>
                <div class="col padding-0" style="margin-top: 12px; padding-right: 5; padding-left: 5;">
                    <img src="{{ asset('images/core_values/2.PNG') }}" alt="">
                    <p class="loremz">All the fabrics have been selected to meet your comfort, you shouldn't be
                        conscious of the fact that you're wearing a suit.</p>
                </div>
                <div class="col padding-0">
                    <img src="{{ asset('images/core_values/3.PNG') }}" alt="">
                    <p class="loremz">Perfectly made based on your character and preferences</p>
                </div>
                <div class="col padding-0" style="margin-top: 12px; padding-right: 12; padding-left: 5;">
                    <img src="{{ asset('images/core_values/4.PNG') }}" alt="">
                    <p class="loremz">We always make sure that all our clients are fully satisfied with our
                        exceptional service</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-5" id="servicesection">
            <h3 style="color: #806e4f !important;" class="titlecus">SERVICES</h3>
        </div>
        <div class="text-center">
            <div class="row">
                <div class="col padding-0" style="padding-left: 12;">
                    <a href="/services/suit"><img src="{{ asset('images/services/5.PNG') }}" alt=""></a>
                </div>
                <div class="col padding-0" style="padding-left: 8;">
                    <a href="/services/shirt"><img src="{{ asset('images/services/6.PNG') }}" alt=""></a>
                </div>
                <div class="col padding-0" style="padding-right: 12; padding-left: 8;">
                    <a href="/services/batik"><img src="{{ asset('images/services/7.PNG') }}" alt=""></a>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col padding-0" style="padding-left: 12;">
                    <a href="/services/cheongsam"><img src="{{ asset('images/services/8.PNG') }}" alt=""></a>
                </div>
                <div class="col padding-0" style="padding-left: 8;">
                    <a href="/services/trouser"><img src="{{ asset('images/services/9.PNG') }}" alt=""></a>
                </div>
                <div class="col padding-0" style="padding-right: 12; padding-left: 8;">
                    <a href="/services/alteration"><img src="{{ asset('images/services/10.PNG') }}" alt=""></a>
                </div>
            </div>
        </div>

        <div class="text-center mt-5" id="processsection">
            <h3 style="color: #806e4f !important;" class="titlecus">PROCESS</h3>
        </div>
    </div>
    <div class="text-center">
        <img src="{{ asset('images/process/11.PNG') }}" alt="">
    </div>

    <div class="container">

        <div class="text-center mt-5" id="fabricsection">
            <h3 style="color: #806e4f !important;" class="titlecus">FABRIC CATALOGUE</h3>
        </div>

        <div class="text-center">
            <div class="row">
                <div class="col padding-0" style="padding-left: 12;">
                    <a href="/fabric-catalogue/wool"><img class="mb-3"
                            src="{{ asset('images/fabric_catalogue/wool.PNG') }}" alt=""></a><br>
                    <a class="fabricbtn" href="/fabric-catalogue/wool">Wool</a>
                </div>
                <div class="col padding-0" style="padding-left: 8;">
                    <a href="/fabric-catalogue/semiwool"><img class="mb-3"
                            src="{{ asset('images/fabric_catalogue/semiwool.PNG') }}" alt=""></a><br>
                    <a class="fabricbtn" href="/fabric-catalogue/semiwool">Semi-Wool</a>
                </div>
                <div class="col padding-0" style="padding-right: 12; padding-left: 8;">
                    <a href="/fabric-catalogue/linen"><img class="mb-3"
                            src="{{ asset('images/fabric_catalogue/linen.PNG') }}" alt=""></a><br>
                    <a class="fabricbtn" href="/fabric-catalogue/linen">Linen</a>
                </div>
            </div>
        </div>

        <div class="text-center mt-5" id="lookbooksection">
            <h3 style="color: #806e4f !important;" class="titlecus">LOOK BOOK</h3>
        </div>
        <div class="text-center">
            <div class="row">
                <div class="col padding-0" style="padding-left: 12;">
                    <a href="/lookbook/wedding"><img class="lookbookimg"
                            src="{{ asset('images/look_book/wedding.PNG') }}" alt=""></a>
                </div>
                <div class="col padding-0" style="padding-right: 12; padding-left: 8;">
                    <a href="/lookbook/daily"><img class="lookbookimg" src="{{ asset('images/look_book/daily.PNG') }}"
                            alt=""></a>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col padding-0" style="padding-left: 12;">
                    <a href="/lookbook/casual"><img class="lookbookimg"
                            src="{{ asset('images/look_book/casual.PNG') }}" alt=""></a>
                </div>
                <div class="col padding-0" style="padding-right: 12; padding-left: 8;">
                    <a href="/lookbook/ceremony"><img class="lookbookimg"
                            src="{{ asset('images/look_book/ceremony.PNG') }}" alt=""></a>
                </div>
            </div>
        </div>

        <div class="text-center mt-5" id="contactsection">
            <h3 style="color: #806e4f !important;" class="titlecus">CONTACT US</h3>
        </div>
        <form>
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
        <div class="text-center">
            <div class="row mb-2">
                <div class="col padding-0" style="padding-left: 12;">
                    <img class="mb-2" src="{{ asset('images/blogs/blog1.PNG') }}" alt=""
                        style="border-radius: 15px;"><br>
                    <a href="" class="blogtitle">How To Dress Up According Your Body Type</a>
                    <p class="blogdate">14 March 2022</p>
                    <p class="blogdesc">Founded by two gentlemen who
                        are very passionate about men's
                        fashion.</p>
                </div>
                <div class="col padding-0" style="padding-right: 12; padding-left: 8;">
                    <img class="mb-2" src="{{ asset('images/blogs/blog2.PNG') }}" alt=""
                        style="border-radius: 15px;"><br>
                    <a href="" class="blogtitle">Tips To Take Care Of Your Shoes</a>
                    <p class="blogdate">14 March 2022</p>
                    <p class="blogdesc">Founded by two gentlemen who
                        are very passionate about men's
                        fashion.</p>
                </div>
            </div>
            <a href="" class="seemorebtn">SEE MORE</a>
        </div>
    </div>
@endsection
@push('custom-js')
    <script>
        $(document).ready(function() {
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
