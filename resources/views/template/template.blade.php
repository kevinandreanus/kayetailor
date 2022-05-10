<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Kaye Brother's Tailor</title>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/baguetteBox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/rangeslider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vanilla-dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/apexcharts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/floating-wpp.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/owlcarousel/owl.theme.default.min.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;700&family=Montserrat&display=swap');

    </style>
    @stack('custom-css')
    <style>
        p {
            color: white !important;
        }

        .bg-gradient {
            background-color: #1e3430 !important;
        }

        #affanOffcanvas {
            background-color: #1e3430 !important;
            width: 35% !important;
        }

        @media only screen and (max-width: 600px) {
            #affanOffcanvas {
                background-color: #1e3430 !important;
                width: 70% !important;
            }
        }

    </style>
</head>

<body style="background-color: #1e3430 !important;">
    <div class="header-area" id="headerArea">
        <div class="container">
            <!-- Navbar -->
            <div
                class="header-content header-style-three position-relative d-flex align-items-center justify-content-between">
                <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas"
                    data-bs-target="#affanOffcanvas" aria-controls="affanOffcanvas"
                    style="background-color: #1a2b28 !important;">
                    <img src="{{ asset('raw/3.png') }}" alt="" style="width: 30px">
                </div>

                <div class="logo-wrapper"><a href="/" style="color: #806e4f !important;"><img alt=""><img
                            src="{{ asset('raw/1.png') }}" alt=""></a></div>
                <div class="user-profile-wrapper" style="background-color: #1a2b28 !important;">
                    <div class="logocontroller"></div>
                </div>
            </div>

        </div>
    </div>
    @yield('content')
    <div id="myDiv">

    </div>
    <div class="offcanvas offcanvas-start" id="affanOffcanvas" data-bs-scroll="true" tabindex="-1"
        aria-labelledby="affanOffcanvsLabel">
        <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        <div class="offcanvas-body p-0">
            <div class="sidenav-wrapper">
                <div class="sidenav-profile bg-gradient">

                </div>
                <ul class="sidenav-nav ps-0">
                    <li><a class="sideBtn" href="#aboutussection">ABOUT US</a></li>
                    <li><a class="sideBtn" href="#coresection">CORE VALUE</a></li>
                    <li><a class="sideBtn" href="#servicesection">SERVICES</a></li>
                    <li><a class="sideBtn" href="#processsection">PROCESS</a></li>
                    <li><a class="sideBtn" href="#fabricsection">FABRIC CATALOGUE</a></li>
                    <li><a class="sideBtn" href="#lookbooksection">LOOK BOOK</a></li>
                    <li><a class="sideBtn" href="#contactsection">CONTACT US</a></li>
                    <li><a class="sideBtn" href="#blogsection">BLOGS</a></li>
                </ul>
                <a class="sideIG" target="_blank" href="https://www.instagram.com/kayetailor"><img
                        style="width: 25px; height: 25px;" src="{{ asset('raw/4.png') }}" alt="">
                    @kayetailor</a>
            </div>
        </div>
    </div>
    <div class="container">
        <footer class="text-lg-start text-muted">
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

            </section>
            <section class="">
                <div class="container text-md-start mt-5">
                    <div class="row mt-3">

                        <div class="col mb-4">
                            <h6 class="text-uppercase fw-bold mb-4 footertext">
                                CONTACT US
                            </h6>
                            <p><i class="fa fa-whatsapp me-3"></i> 0812 1316 9595</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                kayebrotherstailor@gmail.com
                            </p>
                            <p><i class="fab fa-instagram me-3"></i> @kayetailor</p>
                            <p><i class="fa fa-map-marker me-3"></i> Ruko Theme Park Golf Island, RGIE No.100,
                                PIK</p>
                        </div>
                    </div>
                </div>
            </section>

        </footer>
    </div>

    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/slideToggle.min.js') }}"></script>
    <script src="{{ asset('js/internet-status.js') }}"></script>
    <script src="{{ asset('js/baguetteBox.min.js') }}"></script>
    <script src="{{ asset('js/rangeslider.min.js') }}"></script>
    <script src="{{ asset('js/vanilla-dataTables.min.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/magic-grid.min.js') }}"></script>
    <script src="{{ asset('js/dark-rtl.js') }}"></script>
    <script src="{{ asset('js/active.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/floating-wpp.min.js') }}"></script>
    <script src="{{ asset('library/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://kit.fontawesome.com/1b71a3858f.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(function() {
            $('#myDiv').floatingWhatsApp({
                phone: '6282311115888'
            });


        });
    </script>
    @stack('custom-js')
</body>

</html>
