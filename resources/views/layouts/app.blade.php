<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.slim.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.js"></script>
    
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
     <style type="text/css" media="screen">
        .bg-custom{
            background-color: #02B1E8;
        }
        <!-- #02B1E8 -->
    </style>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
    @stack('link')
</head>
<body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
    <script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });
    // $('.countrypicker').countrypicker();


    function customf() {
        addThis = '<div class="row my-1 ml-0">\
                        <div class="col-sm-6 ">\
                            <label for="">Company Name</label>\
                            <input type="text" class="form-control" required>\
                        </div>\
                        <div class="col-sm-5 ">\
                            <label for="">Designation</label>\
                            <input type="text" class="form-control" required>\
                        </div>\
\
                        <div class="col-sm-1 m-sm-auto"><br><button class="btn btn-outline-danger btn-sm ml-sm-2" onclick="removeMe(this)"><i class="fa fa-minus"></i></button></div>\
                    </div>\
                </div>';

        $("#expandC").append(addThis);

    }

    function removeMe(i) {
        $(i).parent().parent().remove();
    }


    function addInfo() {
        addThis = '<div class="w-50 p-3">\
                            <label for="">Others <button class="btn btn-sm" onclick="removeMe2(this)" style="padding-bottom: 0px;padding-top: 0.0px;border-top-width: 0px;border-bottom-width: 0px;"><i class="fa fa-window-close text-danger"></i></button></label> \
                            <textarea name="extraContactInfo" id="extraContactInfo" class="form-control" ></textarea>\
                        </div>';

        $("#expandContactInfo").append(addThis);
        $("#add_more_contact").prop("disabled", true);

    }


    function removeMe2(i) {
        $(i).parent().parent().remove();
        $("#add_more_contact").prop("disabled", false);
    }



    

    function closeCompanyDiv(id) {
        $("#field_close" + id).remove();
    }
       $(document).ready(function() {
        $("#paymentSelect").change(function() {
            var selected = $(this).children(":selected").text();
            switch (selected) {
                case "Bank Check":
                    $("#bkash_trnx").hide();
                    $("#check_photo").show();
                    break;
                case "Bkash":
                    $("#check_photo").hide();
                    $("#bkash_trnx").show();
                    break;

                default:
                    $("#check_photo").hide();
                    $("#bkash_trnx").hide();
            }
        });
    });
    </script>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <!--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>-->

                                
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>



</body>
</html>
