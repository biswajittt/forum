@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Baloo+2&display=swap");

        body {
            font-size: 16px;
            text-rendering: optimizeLegibility;
            font-weight: initial;
        }

        .center {
            margin: 200px 300px;
            width: 60%;
            padding: 10px;
        }

        @media screen and (max-width:1200px) {
            .center {
                margin: 200px 230px;
            }
        }

        @media screen and (max-width:990px) {
            .center {
                margin: 200px 200px;
            }
        }

        @media screen and (max-width:767px) {
            .center {
                margin: 20px 70px;
            }
        }

        @media screen and(max-width:506px) {
            .center {
                margin: 200px 90px;
            }
        }

        .dark {
            background: #110f16;
        }

        .light {
            background: #f3f5f7;
        }

        a,
        a:hover {
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        #pageHeaderTitle {
            text-transform: uppercase;
            text-align: center;
        }

        /* Cards */
        .postcard {
            flex-wrap: wrap;
            max-width: 1200px;
            display: flex;
            box-shadow: 0 4px 21px -12px rgba(0, 0, 0, 0.66);
            border-radius: 10px;
            margin: 20px auto;
            box-sizing: border-box;
            overflow: hidden;
            position: relative;
            color: #ffffff;
            height: 400px;
        }

        .postcard.dark {
            background-color: #18151f;
        }

        .postcard.light {
            background-color: #e1e5ea;
        }

        .postcard .t-dark {
            color: #18151f;
        }

        .postcard a {
            color: inherit;
        }

        .postcard h1,
        .postcard .h1 {
            margin-bottom: 0.5rem;
            font-weight: 500;
            line-height: 1.2;
        }

        .postcard .small {
            font-size: 80%;
        }

        .postcard .postcard__title {
            font-size: 1.75rem;
        }

        .postcard .postcard__img {
            max-height: 180px;
            width: 100%;
            object-fit: cover;
            position: relative;
        }

        .postcard .postcard__img_link {
            display: contents;
        }

        .postcard .postcard__bar {
            width: 50px;
            height: 10px;
            margin: 10px 0;
            border-radius: 5px;
            background-color: #424242;
            transition: width 0.2s ease;
        }

        .postcard .postcard__text {
            padding: 1.5rem;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .postcard .postcard__preview-txt {
            overflow: hidden;
            text-overflow: ellipsis;
            text-align: justify;
            height: 100%;
        }

        .postcard .postcard__tagbox {
            display: flex;
            flex-flow: row wrap;
            font-size: 14px;
            margin: 20px 0 0 0;
            padding: 0;
            justify-content: center;
        }

        .postcard .postcard_tagbox .tag_item {
            display: inline-block;
            background: rgba(83, 83, 83, 0.4);
            border-radius: 3px;
            padding: 2.5px 10px;
            margin: 0 5px 5px 0;
            cursor: default;
            user-select: none;
            transition: background-color 0.3s;
        }

        .postcard .postcard_tagbox .tag_item:hover {
            background: rgba(83, 83, 83, 0.8);
        }

        .postcard:before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-image: linear-gradient(-70deg, #424242, transparent 50%);
            opacity: 1;
            border-radius: 10px;
        }

        .postcard:hover .postcard__bar {
            width: 100px;
        }

        @media screen and (min-width: 769px) {
            .postcard {
                flex-wrap: inherit;
            }

            .postcard .postcard__title {
                font-size: 2rem;
            }

            .postcard .postcard__tagbox {
                justify-content: start;
            }

            .postcard .postcard__img {
                max-width: 300px;
                max-height: 100%;
                transition: transform 0.3s ease;
            }

            .postcard .postcard__text {
                padding: 3rem;
                width: 100%;
            }

            .postcard .media.postcard__text:before {
                content: "";
                position: absolute;
                display: block;
                background: #18151f;
                top: -20%;
                height: 130%;
                width: 55px;
            }

            .postcard:hover .postcard__img {
                transform: scale(1.1);
            }

            .postcard:nth-child(2n+1) {
                flex-direction: row;
            }

            .postcard:nth-child(2n+0) {
                flex-direction: row-reverse;
            }

            .postcard:nth-child(2n+1) .postcard__text::before {
                left: -12px !important;
                transform: rotate(4deg);
            }

            .postcard:nth-child(2n+0) .postcard__text::before {
                right: -12px !important;
                transform: rotate(-4deg);
            }
        }

        @media screen and (min-width: 1024px) {
            .postcard__text {
                padding: 2rem 3.5rem;
            }

            .postcard__text:before {
                content: "";
                position: absolute;
                display: block;
                top: -20%;
                height: 130%;
                width: 55px;
            }

            .postcard.dark .postcard__text:before {
                background: #18151f;
            }

            .postcard.light .postcard__text:before {
                background: #e1e5ea;
            }
        }

        /* COLORS */
        .postcard .postcard__tagbox .green.play:hover {
            background: #79dd09;
            color: black;
        }

        .green .postcard__title:hover {
            color: #79dd09;
        }

        .green .postcard__bar {
            background-color: #79dd09;
        }

        .green::before {
            background-image: linear-gradient(-30deg, rgba(121, 221, 9, 0.1), transparent 50%);
        }

        .green:nth-child(2n)::before {
            background-image: linear-gradient(30deg, rgba(121, 221, 9, 0.1), transparent 50%);
        }

        .postcard .postcard__tagbox .blue.play:hover {
            background: #0076bd;
        }

        .blue .postcard__title:hover {
            color: #0076bd;
        }

        .blue .postcard__bar {
            background-color: #0076bd;
        }

        .blue::before {
            background-image: linear-gradient(-30deg, rgba(0, 118, 189, 0.1), transparent 50%);
        }

        .blue:nth-child(2n)::before {
            background-image: linear-gradient(30deg, rgba(0, 118, 189, 0.1), transparent 50%);
        }

        .postcard .postcard__tagbox .red.play:hover {
            background: #bd150b;
        }

        .red .postcard__title:hover {
            color: #bd150b;
        }

        .red .postcard__bar {
            background-color: #bd150b;
        }

        .red::before {
            background-image: linear-gradient(-30deg, rgba(189, 21, 11, 0.1), transparent 50%);
        }

        .red:nth-child(2n)::before {
            background-image: linear-gradient(30deg, rgba(189, 21, 11, 0.1), transparent 50%);
        }

        .postcard .postcard__tagbox .yellow.play:hover {
            background: #bdbb49;
            color: black;
        }

        .yellow .postcard__title:hover {
            color: #bdbb49;
        }

        .yellow .postcard__bar {
            background-color: #bdbb49;
        }

        .yellow::before {
            background-image: linear-gradient(-30deg, rgba(189, 187, 73, 0.1), transparent 50%);
        }

        .yellow:nth-child(2n)::before {
            background-image: linear-gradient(30deg, rgba(189, 187, 73, 0.1), transparent 50%);
        }

        @media screen and (min-width: 769px) {
            .green::before {
                background-image: linear-gradient(-80deg, rgba(121, 221, 9, 0.1), transparent 50%);
            }

            .green:nth-child(2n)::before {
                background-image: linear-gradient(80deg, rgba(121, 221, 9, 0.1), transparent 50%);
            }

            .blue::before {
                background-image: linear-gradient(-80deg, rgba(0, 118, 189, 0.1), transparent 50%);
            }

            .blue:nth-child(2n)::before {
                background-image: linear-gradient(80deg, rgba(0, 118, 189, 0.1), transparent 50%);
            }

            .red::before {
                background-image: linear-gradient(-80deg, rgba(189, 21, 11, 0.1), transparent 50%);
            }

            .red:nth-child(2n)::before {
                background-image: linear-gradient(80deg, rgba(189, 21, 11, 0.1), transparent 50%);
            }

            .yellow::before {
                background-image: linear-gradient(-80deg, rgba(189, 187, 73, 0.1), transparent 50%);
            }

            .yellow:nth-child(2n)::before {
                background-image: linear-gradient(80deg, rgba(189, 187, 73, 0.1), transparent 50%);
            }
        }

        @media screen and (max-width:1200px) {
            .postcard {
                margin: 2rem;
            }
        }
    </style>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto');

        .ba-we-love-subscribers {
            width: 290px;
            height: 50px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0px 12px 45px rgba(0, 0, 0, .15);
            font-family: 'Roboto', sans-serif;
            text-align: center;
            margin: 0 0 10px 0;
            overflow: hidden;
            opacity: 0;
        }

        .ba-we-love-subscribers.open {
            height: 270px;
            opacity: 1;
        }

        .ba-we-love-subscribers.popup-ani {
            -webkit-transition: all .8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transition: all .8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .ba-we-love-subscribers h1 {
            font-size: 20px;
            color: #757575;
            padding: 25px 0;
            margin: 0;
            font-weight: 400;
            font-family: 'Roboto', sans-serif;

        }

        .ba-we-love-subscribers .love {
            width: 20px;
            height: 20px;
            background-position: 35px 84px;
            display: inline-block;
            margin: 0 6px;
            background-size: 62px;
        }

        .ba-we-love-subscribers .ba-logo {
            width: 65px;
            height: 25px;
            background-position: 0px;
            margin: 0 auto;
            opacity: .5;
            cursor: pointer;
        }

        .ba-we-love-subscribers .ba-logo:hover {
            opacity: 1;
        }

        .logo-ani {
            transition: 0.5s linear;
            -webkit-transition: 0.5s linear;
        }

        .ba-we-love-subscribers input {
            font-size: 14px;
            padding: 12px 15px;
            border-radius: 15px;
            border: 0;
            outline: none;
            margin: 8px 0;
            width: 100%;
            box-sizing: border-box;
            line-height: normal;
            font-family: sans-serif;
        }

        .ba-we-love-subscribers form {
            padding: 5px 30px 0;
            margin-bottom: 15px;
        }

        .ba-we-love-subscribers input[name="email"] {
            background-color: #eee;
        }

        .ba-we-love-subscribers input[name="submit"] {
            background-color: #00aeef;
            cursor: pointer;
            color: #fff;
        }

        .ba-we-love-subscribers input[name="submit"]:hover {
            background-color: #26baf1;
        }


        .ba-we-love-subscribers-fab {
            width: 65px;
            height: 65px;
            background-color: #00aeef;
            border-radius: 30px;
            float: right;
            box-shadow: 0px 12px 45px rgb(0 0 0 / 55%);
            z-index: 5;
            position: relative;
        }

        .ba-we-love-subscribers-fab .img-fab {
            height: 30px;
            width: 30px;
            margin: 15px auto;
            background-position: -1px -53px;
        }

        .ba-we-love-subscribers-fab .wrap {
            transform: rotate(0deg);
            -webkit-transition: all .15s cubic-bezier(0.15, 0.87, 0.45, 1.23);
            transition: all .15s cubic-bezier(0.15, 0.87, 0.45, 1.23);
        }

        .ba-we-love-subscribers-fab .ani {
            transform: rotate(45deg);
            -webkit-transition: all .15s cubic-bezier(0.15, 0.87, 0.45, 1.23);
            transition: all .15s cubic-bezier(0.15, 0.87, 0.45, 1.23);
        }

        .ba-we-love-subscribers-fab .close {
            background-position: -2px 1px;
            transform: rotate(-45deg);
            float: none;
            opacity: 1;
        }

        .ba-we-love-subscribers-wrap {
            position: fixed;
            right: 25px;
            bottom: 25px;
            z-index: 1000;
        }

        .ba-settings {
            position: absolute;
            top: -25px;
            right: 0px;
            padding: 10px 20px;
            background-color: #555;
            border-radius: 5px;
            color: #fff;
        }
    </style>
    <style>
        .avatar {
            width: 65px;
            height: 62px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-family: sans-serif;
            color: #fff;
            font-weight: bold;
            font-size: 30px;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>


    <link href="https://fonts.googleapis.com/css?family=Hind:700" rel="stylesheet">
    <div class="ba-we-love-subscribers-wrap">
        <div class="ba-we-love-subscribers popup-ani">
            <header>
                <h1>Your Data</h1>
            </header>
            <form onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=barreldotim', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" target="popupwindow">
                <div class="card" style="background-color: #f9f9f9;">
                    Name: {{Auth::user()->name}}
                    <br>
                    Email Id: {{Auth::user()->email}}
                    <br>
                    Account Created on: {{ \Carbon\Carbon::parse(Auth::user()->commented_at)->format('d/m/Y')}}
                    <br>
                    @if (Auth::user()->hasVerifiedEmail())
                    Account Status: Verified
                    @endif
                </div>
                <input name="uri" type="hidden" value="barreldotim">
            </form>
            <div class="img ba-logo logo-ani">Forum</div>
        </div>
        <div class="ba-we-love-subscribers-fab">
            <div class="wrap">
                <div class="avatar">{{Auth::user()->name[0]}}</div>
            </div>
        </div>
    </div>

    <section>
        <div class="container py-2">
            @isset($userquestions)
            <div class="h1 text-center text-dark" id="pageHeaderTitle"></div>
            @forelse ($userquestions as $userquestion)
            <article class="postcard light blue">
                <a class="postcard__img_link" href="{{ route('question') }}?questionid={{ $userquestion->question_id }}">
                    <img class="postcard__img" src="https://source.unsplash.com/800x800?coding?{{$userquestion->category}}" alt="Image Title" />

                </a>
                <div class="postcard__text t-dark">
                    <a href='mydata/{{ $userquestion->question_id }}'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                        </svg>
                        <a>

                            <a href="{{ route('question') }}?questionid={{ $userquestion->question_id }}"></a>

                            <h1 class="postcard__title blue"><a href="{{ route('question') }}?questionid={{ $userquestion->question_id }}">{{$userquestion->question_title}}</a></h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i>{{$userquestion->created_at}}
                                </time>
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt"><a href="{{ route('question') }}?questionid={{ $userquestion->question_id }}">{{$userquestion->question_description}}</a></div>

                </div>
            </article>
            @empty
            <div class="center">
                <h1>Ask Your First Question</h1>
                <h1 style="margin: auto 5%;">(Press on '+' button)</h1>
            </div>
            @endforelse

            @endif
        </div>

    </section>

    <script>
        $(".ba-we-love-subscribers-fab").click(function() {
            $('.ba-we-love-subscribers-fab .wrap').toggleClass("ani");
            $('.ba-we-love-subscribers').toggleClass("open");
            $('.img-fab.img').toggleClass("close");
        });
    </script>
</body>

</html>
@endsection