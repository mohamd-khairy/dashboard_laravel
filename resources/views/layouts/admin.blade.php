<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin panel</title>
    <!-- Favicons -->
    <link href="{{ asset($settings->image ?? '') }}" rel="icon">
    <link href="{{ asset($settings->image ?? '') }}" rel="apple-touch-icon">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ar.css') }}" rel="stylesheet" class="lang_css arabic">


    <link href="{{ asset('select2/dist/css/select2.min.css') }}" rel="stylesheet" />

    <style>
        select option:checked {
            background-color: #4CAF50;
            color: #fff;
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <!--Start header-->
        <div class="row header_section">
            <div class="col-sm-3 col-xs-12 logo_area bring_right">
                <h1 class="inline-block"><img src="{{ asset('assets/img/LOGO PNG-01.png') }}" alt=""> إدارة
                    البيئة والمسطحات</h1>
                <span class="glyphicon glyphicon-align-justify bring_left open_close_menu" data-toggle="tooltip"
                    data-placement="right" title="Tooltip on left"></span>
            </div>
            <div class="col-sm-3 col-xs-12 head_buttons_area bring_left hidden-xs">

                <div class="inline-block full_screen bring_left hidden-xs">
                    <span class="glyphicon glyphicon-fullscreen" data-toggle="tooltip" data-placement="left"
                        title="شاشة كاملة"></span>
                </div>
            </div>
        </div>
        <!--/End header-->

        <!--Start body container section-->
        <div class="row container_section">

            @include('partials.menu-right')

            <!--Start Main content container-->
            <div class="main_content_container">
                <div class="main_container  main_menu_open">



                    @if (session('message'))
                        <div class="row mb-2">
                            <div class="col-lg-12">
                                <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                            </div>
                        </div>
                    @endif
                    @if ($errors->count() > 0)
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @yield('content')

                </div>
                <!--/End Main content container-->

            </div>
            <!--/End body container section-->

        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('select2/dist/js/select2.min.js') }}"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/js.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                placeholder: "اختر عطل",
                tags: true,
                dir: "rtl",
                allowClear: true
            });

            $('.js-example-basic-multiple2').select2({
                placeholder: "اختر سابق صرف",
                tags: true,
                dir: "rtl",
                allowClear: true
            });

            $(".js-example-basic-single").select2({
                placeholder: "اختر سيارة",
                dir: "rtl",
                width: "100%"
            })

            $(".js-example-theme-single").select2({
                theme: "classic",
                dir: "rtl",
            });
        });
    </script>

    @yield('script')



</body>

</html>
