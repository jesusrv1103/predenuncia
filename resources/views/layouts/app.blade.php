<!DOCTYPE html>

<!-- 
           Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
           Author: KeenThemes
           Website: http://www.keenthemes.com/
           Contact: support@keenthemes.com
           Follow: www.twitter.com/keenthemes
           Dribbble: www.dribbble.com/keenthemes
           Like: www.facebook.com/keenthemes
           Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
           Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
           License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
           -->
<html lang="en">

<!-- begin::Head -->

<head>

    <!--begin::Base Path (base relative path for assets of this page) -->
    <base href="/">

    <!--end::Base Path -->
    <meta charset="utf-8" />
    <title>PREDENUNCIA | Login </title>
    <meta name="description" content="Login ASP">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>

    <script>
        WebFont.load({
                           google: {
                               "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
                           },
                           active: function() {
                               sessionStorage.fonts = true;
                           }
                       });
    </script>

    <!--end::Fonts -->

    <!--begin::Page Custom Styles(used by this page) -->
    <link href="/assets/css/demo1/pages/login/login-3.css" rel="stylesheet" type="text/css" />

    <!--end::Page Custom Styles -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

    <!--end:: Global Mandatory Vendors -->




    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="/assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link href="/assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/demo1/skins/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/demo1/skins/aside/dark.css" rel="stylesheet" type="text/css" />

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="/assets/logos_fiscalia/original180x90.png" />
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body
    class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin" id="kt_login">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor"
                style="background-image: url(/assets/media//bg/bg-10.jpg);">
                <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                    <div class="kt-login__container">
                        <div class="kt-login__logo">
                            <a href="#">
                                <img  style="width= 200px; height:200px;" src="/assets/logos_fiscalia/original180x90.png">
                            </a>
                        </div>

                        @yield('content')


                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Page -->

        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {
                    "colors": {
                        "state": {
                            "brand": "#5d78ff",
                            "dark": "#282a3c",
                            "light": "#ffffff",
                            "primary": "#5867dd",
                            "success": "#34bfa3",
                            "info": "#36a3f7",
                            "warning": "#ffb822",
                            "danger": "#fd3995"
                        },
                        "base": {
                            "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                            "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                        }
                    }
                };
        </script>

        <!-- end::Global Config -->




        <!--end::Global Theme Bundle -->



        <!--end::Page Scripts -->
</body>

<!-- end::Body -->

</html>