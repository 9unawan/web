<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->


<!-- Mirrored from ableproadmin.com/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Aug 2023 05:52:23 GMT -->

<head>
    <title>CSIRT</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
    <meta name="keywords"
        content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
    <meta name="author" content="Phoenixcoded">

    {{-- summernote --}}
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.min.js"></script>
        <script>
          $(document).ready(function() {
            $('#summernote1').summernote({
              height: "300px",
              styleWithSpan: false
            });
            $('#summernote2').summernote({
              height: "300px",
              styleWithSpan: false
            });
            $('#summernote3').summernote({
              height: "300px",
              styleWithSpan: false
            });
          }); 
        </script>

    <link rel="icon" href="{{ asset('img/bg/logo/logo-2.png') }}"width="200" type="image/x-icon">
    <!-- [Font] Family -->
   <link rel="stylesheet" href="{{ asset('../assets/fonts/inter/inter.css') }}" id="main-font-link" />
   <!-- [Tabler Icons] https://tablericons.com -->
   <link rel="stylesheet" href="{{ asset('../assets/fonts/tabler-icons.min.css') }}" />
   <!-- [Feather Icons] https://feathericons.com -->
   <link rel="stylesheet" href="{{ asset('../assets/fonts/feather.css')}}" />
   <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
   <link rel="stylesheet" href="{{ asset('../assets/fonts/fontawesome.css') }}" />
   <!-- [Material Icons] https://fonts.google.com/icons -->
   <link rel="stylesheet" href="{{ asset('../assets/fonts/material.css') }}" />
   <!-- [Template CSS Files] -->
   <link rel="stylesheet" href="{{ asset('../assets/css/style.css') }}" id="main-style-link" />
   <link rel="stylesheet" href="{{ asset('../assets/css/style-preset.css') }}" />
   <!-- Google tag (gtag.js) -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-14K1GBX9FG"></script>
   <script>
     window.dataLayer = window.dataLayer || [];
     function gtag() {
       dataLayer.push(arguments);
     }
     gtag('js', new Date());
   
     gtag('config', 'G-14K1GBX9FG');
   </script>
   <!-- WiserNotify -->
   <script>
     !(function () {
       if (window.t4hto4) console.log('WiserNotify pixel installed multiple time in this page');
       else {
         window.t4hto4 = !0;
         var t = document,
           e = window,
           n = function () {
             var e = t.createElement('script');
             (e.type = 'text/javascript'),
               (e.async = !0),
               (e.src = '../../pt.wisernotify.com/pixel6d4c.js?ti=1jclj6jkfc4hhry'),
               document.body.appendChild(e);
           };
         'complete' === t.readyState ? n() : window.attachEvent ? e.attachEvent('onload', n) : e.addEventListener('load', n, !1);
       }
     })();
   </script>
   <!-- Microsoft clarity -->
   <script type="text/javascript">
     (function (c, l, a, r, i, t, y) {
       c[a] =
         c[a] ||
         function () {
           (c[a].q = c[a].q || []).push(arguments);
         };
       t = l.createElement(r);
       t.async = 1;
       t.src = 'https://www.clarity.ms/tag/' + i;
       y = l.getElementsByTagName(r)[0];
       y.parentNode.insertBefore(t, y);
     })(window, document, 'clarity', 'script', 'gkn6wuhrtb');
   </script>
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme_contrast=""
    data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->


    <!--================================ [ Sidebar Menu ]start ===========================-->
    @include('admin.components.sidebar')
    <!-- [ Sidebar Menu ] end -->


    <!--============================== [ Header Topbar ] start ==========================-->
    @include('admin.components.header')


    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pc-container">
        @yield('content')
    </div>
    <!-- [ Main Content ] end -->
  @include('admin.components.footer')

    <div class="pct-c-btn">
        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_pc_layout">
            <svg class="pc-icon">
                <use xlink:href="#custom-setting-2"></use>
            </svg>
        </a>
    </div>
    @include('admin.components.setting')

      <!-- [Page Specific JS] start -->
    <script src="{{ asset('../assets/js/plugins/apexcharts.min.js') }}"></script>
    <script src="{{ asset('../assets/js/pages/dashboard-default.js') }}"></script>
    <!-- [Page Specific JS] end -->
    <!-- Required Js -->
    <script src="{{ asset('../assets/js/plugins/popper.min.js')}}"></script>
    <script src="{{ asset('../assets/js/plugins/simplebar.min.js')}}"></script>
    <script src="{{ asset('../assets/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{ asset('../assets/js/fonts/custom-font.js')}}"></script>
    <script src="{{ asset('../assets/js/pcoded.js')}}"></script>
    <script src="{{ asset('../assets/js/plugins/feather.min.js')}}"></script>

    
    
    
    
    <script>layout_change('light');</script>
    
    
    
    
    <script>layout_sidebar_change('false');</script>
    
    
    
    <script>change_box_container('false');</script>
    
    
    <script>layout_caption_change('true');</script>
    
    
    
    
    <script>layout_rtl_change('false');</script>
    
    
    <script>preset_change("preset-1");</script>
    
</body>
<!-- [Body] end -->

<!-- Mirrored from ableproadmin.com/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Aug 2023 05:54:24 GMT -->

</html>
