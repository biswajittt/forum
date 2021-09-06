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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff
        }

        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: .25rem
        }

        .card-title {
            margin-bottom: .75rem
        }

        .card-body {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem
        }
    </style>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/min.css') }}" />
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        textarea,
        select {
            margin: 2;
            padding: 2;
            color: #000;
            font-size: 1em;
            font-weight: 400;
            font-family: 'Open Sans', sans-serif;
        }

        textarea[type=text],
        textarea[type=password],
        select {
            position: relative;
            margin: 0px 0;
            width: 100%;
            height: 50px;
            padding: 5px;
            outline: none;
            font-size: 80%;
            border: 1px solid #0EBFE9;
            border-bottom: 4px solid #63D1F4;
        }

        button {
            background-color: #e9ecef;
            color: gray;
            padding: 14px 20px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            opacity: 1;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
            background-color: blue;
            color: white;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }



        span.psw {
            float: right;
            padding-top: 16px;
        }

        textarea {
            resize: none;

        }

        .des {
            margin-top: 13px;
            margin-bottom: 0;
        }

        .line-on-popup-inputarea {
            background-color: #80868b;
            position: relative;
            width: 100%;
            height: 1px;
            bottom: 0;
            left: 0;
        }

        .form-input-bg {
            background-color: #e9ecef;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1050;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 0% auto auto 30%;
            border: 1px solid #888;
            width: 38%;
        }

        @media screen and (max-width:650px) {
            .modal-content {
                margin: 13px auto auto 25px;
                width: 85%;
            }

            .modal {
                padding-top: 0px;
            }
        }

        #textButton {
            background: none;
            border: none;
        }

        #textButton:hover {
            background-color: blue;
        }

        .close {
            position: absolute;
            right: 10px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-3">
        <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light mt-3" style="height: 68px;" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="/">Forum</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        @guest
                        @if (Route::has('login'))
                        <li>
                            <a href="{{ route('login') }} ">{{ __('Login') }}</a>
                        </li>&nbsp; &nbsp;
                        @endif

                        @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        @if (Auth::user()->hasVerifiedEmail())
                        <li>
                            <a href="{{ url('/mydata') }}" class="text-sm text-gray-700 underline"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-emoji-sunglasses" viewBox="0 0 16 16">
                                    <path d="M4.968 9.75a.5.5 0 1 0-.866.5A4.498 4.498 0 0 0 8 12.5a4.5 4.5 0 0 0 3.898-2.25.5.5 0 1 0-.866-.5A3.498 3.498 0 0 1 8 11.5a3.498 3.498 0 0 1-3.032-1.75zM7 5.116V5a1 1 0 0 0-1-1H3.28a1 1 0 0 0-.97 1.243l.311 1.242A2 2 0 0 0 4.561 8H5a2 2 0 0 0 1.994-1.839A2.99 2.99 0 0 1 8 6c.393 0 .74.064 1.006.161A2 2 0 0 0 11 8h.438a2 2 0 0 0 1.94-1.515l.311-1.242A1 1 0 0 0 12.72 4H10a1 1 0 0 0-1 1v.116A4.22 4.22 0 0 0 8 5c-.35 0-.69.04-1 .116z" />
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-1 0A7 7 0 1 0 1 8a7 7 0 0 0 14 0z" />
                                </svg></a>&nbsp; &nbsp;
                            <a onclick="document.getElementById('askquestion').style.display='block'">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                        <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" class="PTH" style="margin-top: 50px;" />
                                    </svg>
                                </i>
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <!-- {{ __('Logout') }} -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                                    <path d="M7.5 1v7h1V1h-1z" />
                                    <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z" />
                                </svg>
                            </a>



                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>



        @if (Auth::check())
        <!-- ask question popup -->
        <div id="askquestion" class="modal">
            <form class="modal-content animate" method="POST">
                @csrf
                <div class="imgcontainer">
                    <span onclick="document.getElementById('askquestion').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>

                <div class="container">

                    <h5 style="text-align: center;">ASK YOUR QUESTION</h5>

                    <fieldset disabled>
                        <label for="uname"><b>Username</b></label>
                        <textarea type="text" class="form-input-bg" id="disabledTextInput" placeholder="{{Auth::user()->name}}" id="creatorname" name="username" required></textarea>

                    </fieldset>



                    <label for="category"><b>Category</b></label>

                    <select class="form-input-bg" style="width: 100%; height:55px; padding:14px;" placeholder="Enter Title" id="category" name="category" required>

                        <div class="line-on-popup-inputarea">
                            <option value="C">C</option>
                            <option value="C++">C++</option>
                            <option value="HTML,CSS & JAVASCRIPT">HTML,CSS & JAVASCRIPT</option>
                            <option value="JAVA">JAVA</option>
                            <option value="PYTHON">PYTHON</option>
                            <option value="PHP">PHP</option>
                        </div>
                    </select>

                    <label for="question"><b>Question</b></label>
                    <textarea type="text" class="form-input-bg" placeholder="Enter Title" id="question" name="question" required></textarea>


                    <label for="description"><b>Description</b></label>
                    <textarea type="text" class="form-input-bg" placeholder="Enter Description" id="description" name="description" required></textarea>


                    <label for="code"><b>Code</b></label>
                    <textarea type="text" class="form-input-bg" placeholder="Enter Code(Optional)" id="code" name="code"></textarea>


                    <button type="submit" name="action" value="ask" style="padding:6px">ASK</button>



                </div>
            </form>
        </div>

        <script>
            var modal = document.getElementById('askquestion');
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
        @endif


    </div>


</body>

</html>