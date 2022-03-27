<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>hercule construction @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="{{ asset('images/flags/favicon.ico') }}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Raleway:400,400italic,700,700italic,900'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:100,300,400'>
    <link rel='stylesheet' href='{{ asset("css/global.css") }}'>
    <link rel='stylesheet' href='{{ asset("content/architect2/css/structure.css") }}'>
    <link rel='stylesheet' href='{{ asset("content/architect2/css/architect2.css") }}'>
    <link rel='stylesheet' href='{{ asset("content/architect2/css/custom.css") }}'>

</head>

<body class="color-custom style-simple layout-full-width nice-scroll-on mobile-tb-left button-flat if-zoom no-content-padding header-classic header-below header-fw minimalist-header-no sticky-header sticky-white ab-hide subheader-both-center menu-line-below menuo-no-borders menuo-right footer-copy-center">

    <div id="Wrapper">
        <div id="Header_wrapper" class="bg-parallax" data-enllax-ratio="0.3">
            <header id="Header">
                <div class="header_placeholder"></div>
                <div id="Top_bar">
                    <div class="container">
                        <div class="column one">
                            <div class="top_bar_left clearfix">
                                <div class="logo">
                                    <a id="logo" href="/" title="Hercule Construction">
                                        <img class="logo-main scale-with-grid" src="{{ asset('content/architect2/images/architect_2.png') }}" alt="architect2" />
                                        <img class="logo-sticky scale-with-grid" src="{{ asset('content/architect2/images/architect_2.png') }}" alt="architect2" />
                                        <img class="logo-mobile scale-with-grid" src="{{ asset('content/architect2/images/architect_2.png') }}" alt="architect2" />
                                    </a>
                                </div>
                                <div class="menu_wrapper">
                                    @include('partials.nav')
                                    <a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a>
                                </div>
                                <div class="secondary_menu_wrapper"></div>
                                <div class="banner_wrapper"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            @yield('header_partials')
        </div>
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    @include('partials.spot_front')
                    <div class="entry-content">

                        @yield('content')

                        @include('partials.have_a_q')

                    </div>
                </div>
            </div>
        </div>
        @include('partials.footer')
    </div>

    @include('partials.popupcontact')

    <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('js/mfn.menu.js') }}"></script>
    <script src="{{ asset('js/jquery.plugins.js') }}"></script>
    <script src="{{ asset('js/jquery.jplayer.min.js') }}"></script>
    <script src="{{ asset('js/animations/animations.js') }}"></script>
    <script src="{{ asset('js/translate3d.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script id="mfn-dnmc-retina-js">
        jQuery(window).load(function() {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img.logo-main");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "{{ asset('content/architect2/images/retina-architect2.png') }}").width(retinaLogoW).height(retinaLogoH);
                var stickyEl = jQuery("#logo img.logo-sticky");
                var stickyLogoW = stickyEl.width();
                var stickyLogoH = stickyEl.height();
                stickyEl.attr("src", "{{ asset('content/architect2/images/retina-architect2.png') }}").width(stickyLogoW).height(stickyLogoH);
                var mobileEl = jQuery("#logo img.logo-mobile");
                var mobileLogoW = mobileEl.width();
                var mobileLogoH = mobileEl.height();
                mobileEl.attr("src", "{{ asset('content/architect2/images/retina-architect2.png') }}").width(mobileLogoW).height(mobileLogoH);
            }
        });
    </script>
</body>

</html>