<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ableproadmin.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Aug 2023 06:08:42 GMT -->

<head>
    @foreach ($page as $item)
    <title>{{ $item ->web_name }}</title>
    <!-- [Favicon] icon -->
    <link rel="icon" src="{{ Storage::url('public/page/favicon/',$item->favicon) }}" width="200" type="image/x-icon">
    @endforeach
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies." />
    <meta name="keywords"
        content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard" />
    <meta name="author" content="Phoenixcoded" />

    

    <!-- [Page specific CSS] start -->
    <link href="{{ asset('assets/css/plugins/animate.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('../cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <!-- [Page specific CSS] end -->
    <!-- [Font] Family -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/inter/inter.css') }}" id="main-font-link" />

    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link" />
    <link rel="stylesheet" href="{{ asset('assets/css/style-preset.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}" />

    <!-- Gradient Text Animation CSS -->
    <style>
        .hero-text-gradient {
            --bg-size: 400%;
            --color-one: rgb(37, 161, 244);
            --color-two: rgb(249, 31, 169);

            background: linear-gradient(90deg,
                    var(--color-one),
                    var(--color-two),
                    var(--color-one)) 0 0 / var(--bg-size) 100%;
            color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
            animation: move-bg 24s infinite linear;
        }

        @keyframes move-bg {
            to {
                background-position: var(--bg-size) 0;
            }
        }
    </style>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-14K1GBX9FG"></script>
    @include('website.components.script')
</head>

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme_contrast=""
    data-pc-theme="light" class="landing-page">
    <!-- [ Main Content ] start -->
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

{{-- 
    <style>
        .sec{
            background:linear-gradient( rgba(255, 255, 255, 0.877) , rgba(255, 255, 255, 0.541)), url('{{ asset('img/schot.png') }}')
        }
    </style> --}}
    <!-- [ Header ] start -->
    <!-- <header id="home" style="background-image: url(assets/images/landing/img-headerbg.jpg)"> -->
  
   @yield('content')
    <!-- [ companies apps ] End -->

    <!-- [ footer apps ] start -->
    @include('website.components.footer')
    <!-- [ footer apps ] End -->

    <!-- [ Main Content ] end -->
    <script src="{{ asset('../code.jquery.com/jquery-3.6.1.min.js') }}"></script>
    <!-- Required Js -->
    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/fonts/custom-font.js') }}"></script>
    <script src="{{ asset('assets/js/fonts/custom-font.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.js') }}"></script>

    <!-- [Page Specific JS] start -->
    <script src="{{ asset('assets/js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('../cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('../cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/Jarallax.js')}}"></script>
    <script>
        // Start [ Menu hide/show on scroll ]
        let ost = 0;
        document.addEventListener("scroll", function() {
            let cOst = document.documentElement.scrollTop;
            if (cOst == 0) {
                document.querySelector(".navbar").classList.add("top-nav-collapse");
            } else if (cOst > ost) {
                document.querySelector(".navbar").classList.add("top-nav-collapse");
                document.querySelector(".navbar").classList.remove("default");
            } else {
                document.querySelector(".navbar").classList.add("default");
                document
                    .querySelector(".navbar")
                    .classList.remove("top-nav-collapse");
            }
            ost = cOst;
        });
        // End [ Menu hide/show on scroll ]
        var wow = new WOW({
            animateClass: "animated",
        });
        wow.init();

        // slider start
        $(".screen-slide").owlCarousel({
            loop: true,
            margin: 30,
            center: true,
            nav: false,
            dotsContainer: ".app_dotsContainer",
            URLhashListener: true,
            items: 1,
        });
        $(".workspace-slider").owlCarousel({
            loop: true,
            margin: 30,
            center: true,
            nav: false,
            dotsContainer: ".workspace-card-block",
            URLhashListener: true,
            items: 1.5,
        });
        // slider end
        // marquee start
        $(".marquee").marquee({
            duration: 500000,
            pauseOnHover: true,
            startVisible: true,
            duplicated: true,
        });
        $(".marquee-1").marquee({
            duration: 500000,
            pauseOnHover: true,
            startVisible: true,
            duplicated: true,
            direction: "right",
        });
        // marquee end
    </script>
    <!-- [Page Specific JS] end -->
    <div class="pct-c-btn">
        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_pc_layout">
            <svg class="pc-icon">
                <use xlink:href="#custom-setting-2"></use>
            </svg>
        </a>
    </div>
    <div class="offcanvas border-0 pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Settings</h5>
            <button type="button" class="btn btn-icon btn-link-danger" data-bs-dismiss="offcanvas"
                aria-label="Close">
                <i class="ti ti-x"></i>
            </button>
        </div>
        <div class="pct-body" style="height: calc(100% - 85px)">
            <div class="offcanvas-body py-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="pc-dark">
                            <h6 class="mb-1">Theme Mode</h6>
                            <p class="text-muted text-sm">
                                Choose light or dark mode or Auto
                            </p>
                            <div class="row theme-layout">
                                <div class="col-4">
                                    <div class="d-grid">
                                        <button class="preset-btn btn active" data-value="true"
                                            onclick="layout_change('light');">
                                            <svg class="pc-icon text-warning">
                                                <use xlink:href="#custom-sun-1"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-grid">
                                        <button class="preset-btn btn" data-value="false"
                                            onclick="layout_change('dark');">
                                            <svg class="pc-icon">
                                                <use xlink:href="#custom-moon"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-grid">
                                        <button class="preset-btn btn" data-value="default"
                                            onclick="layout_change_default();">
                                            <svg class="pc-icon">
                                                <use xlink:href="#custom-setting-2"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h6 class="mb-1">Theme Contrast</h6>
                        <p class="text-muted text-sm">Choose theme contrast</p>
                        <div class="row theme-contrast">
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="true"
                                        onclick="layout_sidebar_change('true');">
                                        <svg class="pc-icon">
                                            <use xlink:href="#custom-mask"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn active" data-value="false"
                                        onclick="layout_sidebar_change('false');">
                                        <svg class="pc-icon">
                                            <use xlink:href="#custom-mask-1-outline"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h6 class="mb-1">Custom Theme</h6>
                        <p class="text-muted text-sm">Choose your Primary color</p>
                        <div class="theme-color preset-color">
                            <a href="#!" class="active" data-value="preset-1"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-2"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-3"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-4"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-5"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-6"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-7"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-8"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-9"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-10"><i class="ti ti-check"></i></a>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h6 class="mb-1">Sidebar Caption</h6>
                        <p class="text-muted text-sm">Sidebar Caption Hide/Show</p>
                        <div class="row theme-nav-caption">
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn active" data-value="true"
                                        onclick="layout_caption_change('true');">
                                        <img src="assets/images/customizer/img-caption-1.svg" alt="img"
                                            class="img-fluid" width="70%" />
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="false"
                                        onclick="layout_caption_change('false');">
                                        <img src="assets/images/customizer/img-caption-2.svg" alt="img"
                                            class="img-fluid" width="70%" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="pc-rtl">
                            <h6 class="mb-1">Theme Layout</h6>
                            <p class="text-muted text-sm">LTR/RTL</p>
                            <div class="row theme-direction">
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button class="preset-btn btn active" data-value="false"
                                            onclick="layout_rtl_change('false');">
                                            <img src="assets/images/customizer/img-layout-1.svg" alt="img"
                                                class="img-fluid" width="70%" />
                                        </button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button class="preset-btn btn" data-value="true"
                                            onclick="layout_rtl_change('true');">
                                            <img src="assets/images/customizer/img-layout-2.svg" alt="img"
                                                class="img-fluid" width="70%" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="pc-container-width">
                            <h6 class="mb-1">Layout Width</h6>
                            <p class="text-muted text-sm">
                                Choose Full or Container Layout
                            </p>
                            <div class="row theme-container">
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button class="preset-btn btn active" data-value="false"
                                            onclick="change_box_container('false')">
                                            <img src="assets/images/customizer/img-container-1.svg" alt="img"
                                                class="img-fluid" width="70%" />
                                        </button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button class="preset-btn btn" data-value="true"
                                            onclick="change_box_container('true')">
                                            <img src="assets/images/customizer/img-container-2.svg" alt="img"
                                                class="img-fluid" width="70%" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-grid">
                            <button class="btn btn-light-danger" id="layoutreset">
                                Reset Layout
                            </button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

<!-- Mirrored from ableproadmin.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Aug 2023 06:08:42 GMT -->

</html>
