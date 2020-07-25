<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin panel</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/icon.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/ar.css')}}" rel="stylesheet" class="lang_css arabic">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container-fluid">
        <!--Start header-->
        <div class="row header_section">
            <div class="col-sm-3 col-xs-12 logo_area bring_right">
                <h1 class="inline-block"><img src="{{asset('img/logo.png')}}" alt="">لوحة تحكم</h1>
                <span class="glyphicon glyphicon-align-justify bring_left open_close_menu" data-toggle="tooltip" data-placement="right" title="Tooltip on left"></span>
            </div>
            <div class="col-sm-3 col-xs-12 head_buttons_area bring_right hidden-xs">
                <div class="inline-block messages bring_right">
                    <span class="glyphicon glyphicon-envelope" data-toggle="tooltip" data-placement="left" title="الرسائل"><span class="notifications">9</span></span>
                </div>
                <div class="inline-block full_screen bring_right hidden-xs">
                    <span class="glyphicon glyphicon-fullscreen" data-toggle="tooltip" data-placement="left" title="شاشة كاملة"></span>
                </div>
            </div>
            <div class=" col-sm-4 col-xs-12 user_header_area bring_left left_text">
                <a href="index-en.html" class="change_lang bring_left">EN</a>

                <div class="user_info inline-block">
                    <img src="{{asset('img/user.jpg')}}" alt="" class="img-circle">
                    <span class="h4 nomargin user_name">{{auth()->user()->first_name}}</span>
                    <span class="glyphicon glyphicon-cog"></span>
                </div>
            </div>
        </div>
        <!--/End header-->

        <!--Start body container section-->
        <div class="row container_section">

            @include('partials.menu-left')
            @include('partials.menu-right')

            <!--Start Main content container-->
            <div class="main_content_container">
                <div class="main_container  main_menu_open">


                    @if(session('message'))
                    <div class="row mb-2">
                        <div class="col-lg-12">
                            <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                        </div>
                    </div>
                    @endif
                    @if($errors->count() > 0)
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach($errors->all() as $error)
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
    <script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/js.js')}}"></script>
</body>

</html>