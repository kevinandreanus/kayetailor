<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaye Brother's Tailor</title>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
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
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

    </style>
    @stack('custom-css')

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
                    <svg>
                        <defs>
                            <filter id="gooeyness">
                                <feGaussianBlur in="SourceGraphic" stdDeviation="2.2" result="blur" />
                                <feColorMatrix in="blur" mode="matrix"
                                    values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 20 -10" result="gooeyness" />
                                <feComposite in="SourceGraphic" in2="gooeyness" operator="atop" />
                            </filter>
                        </defs>
                    </svg>
                    <div class="plate plate1" onclick="this.classList.toggle('active')">
                        <svg class="burger" version="1.1" height="20" width="20" viewBox="0 0 100 100">
                            <path class="line line1" d="M 30,65 H 70" />
                            <path class="line line2"
                                d="M 70,50 H 30 C 30,50 18.644068,50.320751 18.644068,36.016949 C 18.644068,21.712696 24.988973,6.5812347 38.79661,11.016949 C 52.604247,15.452663 46.423729,62.711864 46.423729,62.711864 L 50.423729,49.152542 L 50.423729,16.101695" />
                            <path class="line line3"
                                d="M 30,35 H 70 C 70,35 80.084746,36.737688 80.084746,25.423729 C 80.084746,19.599612 75.882239,9.3123528 64.711864,13.559322 C 53.541489,17.806291 54.423729,62.711864 54.423729,62.711864 L 50.423729,49.152542 V 16.101695" />
                        </svg>
                        <svg class="x" version="1.1" height="20" width="20" viewBox="0 0 100 100">
                            <path class="line" d="M 34,32 L 66,68" />
                            <path class="line" d="M 66,32 L 34,68" />
                        </svg>
                    </div>
                </div>
                <div class="logo-wrapper"><a href="page-home.html" style="color: #806e4f !important;"><img alt=""><img
                            src="logo.PNG" alt=""></a></div>
                <div class="user-profile-wrapper" style="background-color: #1a2b28 !important;"><a
                        style="background-color: #1a2b28 !important;" class="user-profile-trigger-btn" href="#"><img
                            style="width: 25px;" src="{{ asset('images/white_instagram.png') }}" alt=""></a></div>
            </div>
        </div>
    </div>
    @yield('content')
    <div class="container">
        <footer class="text-center text-lg-start text-muted">
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

            </section>
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <div class="row mt-3">

                        <div class="col mb-4">
                            <h6 class="text-uppercase fw-bold mb-4 footertext">
                                CONTACT US
                            </h6>
                            <p><i class="fas fa-phone me-3"></i> 021 5698 3847</p>
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

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
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
