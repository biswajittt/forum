@include('navbar')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Forum</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,100,900);

        html,
        body {
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            height: 100%;
            width: 100%;
            /* background: #FFF; */
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
        }

        .wrapper {
            display: table;
            height: 100%;
            width: 100%;
        }

        .container-fostrap {
            display: table-cell;
            padding: 1em;
            text-align: center;
            vertical-align: middle;
        }

        .fostrap-logo {
            width: 100px;
            margin-bottom: 15px
        }

        h1.heading {
            color: #fff;
            font-size: 1.15em;
            font-weight: 900;
            margin: 0 0 0.5em;
            color: #505050;
        }

        @media (min-width: 450px) {
            h1.heading {
                font-size: 3.55em;
            }
        }

        @media (min-width: 760px) {
            h1.heading {
                font-size: 3.05em;
            }
        }

        @media (min-width: 900px) {
            h1.heading {
                font-size: 3.25em;
                margin: 0 0 0.3em;
            }
        }

        .card {
            display: block;
            margin-bottom: 20px;
            line-height: 1.42857143;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 7px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            transition: box-shadow .25s;
        }

        .card:hover {
            box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .img-card {
            width: 100%;
            height: 200px;
            border-top-left-radius: 2px;
            border-top-right-radius: 2px;
            display: block;
            overflow: hidden;
        }

        .img-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: all .25s ease;
        }

        .card-content {
            padding: 15px;
            text-align: center;
        }

        .card-title {
            margin-top: 0px;
            font-weight: 700;
            font-size: 1.65em;
        }

        .card-title a {
            color: #000;
            text-decoration: none !important;
        }

        .card-read-more {
            border-top: 1px solid #D4D4D4;
        }

        .card-read-more a {
            text-decoration: none !important;
            padding: 10px;
            font-weight: 600;
            text-transform: uppercase
        }
    </style>
</head>

<body>
    @include('popup')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <section class="wrapper">
            <div class="container-fostrap">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <div class="card">
                                    <a class="img-card" href="{{ route('questions') }}?category={{ $categories[0]->category }}">
                                        <img src="{{url('/images/c.jpg')}}" />
                                    </a>
                                    <div class="card-content">
                                        <h4 class="card-title">
                                            <a href="{{ route('questions') }}?category={{ $categories[0]->category }}">
                                                C
                                            </a>
                                        </h4>
                                        <p class="">
                                            {{$categories[0]->category_description}}
                                        </p>
                                    </div>
                                    <div class="card-read-more">
                                        <a href="{{ route('questions') }}?category={{ $categories[0]->category }}" class="btn btn-link btn-block">
                                            EXPLORE
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4">
                                <div class="card">
                                    <a class="img-card" href="{{ route('questions') }}?category={{ $categories[1]->category }}">
                                        <img src="{{url('/images/c-plus-plus.png')}}" />
                                    </a>
                                    <div class="card-content">
                                        <h4 class="card-title">
                                            <a href="{{ route('questions') }}?category={{ $categories[1]->category }}">
                                                C++
                                            </a>
                                        </h4>
                                        <p class="">
                                            {{$categories[1]->category_description}}
                                        </p>
                                    </div>
                                    <div class="card-read-more">
                                        <a href="{{ route('questions') }}?category={{ $categories[1]->category }}" class="btn btn-link btn-block">
                                            EXPLORE
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <div class="card">
                                    <a class="img-card" href="{{ route('questions') }}?category={{ $categories[2]->category }}">
                                        <img src="{{url('/images/java.png')}}" />
                                    </a>
                                    <div class="card-content">
                                        <h4 class="card-title">
                                            <a href="{{ route('questions') }}?category={{ $categories[2]->category }}">
                                                JAVA
                                            </a>
                                        </h4>
                                        <p class="">
                                            {{$categories[2]->category_description}}
                                        </p>
                                    </div>
                                    <div class="card-read-more">
                                        <a href="{{ route('questions') }}?category={{ $categories[2]->category }}" class="btn btn-link btn-block">
                                            EXPLORE
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <div class="card">
                                    <a class="img-card" href="{{ route('questions') }}?category={{ $categories[3]->category }}">
                                        <img src="{{url('/images/html-css-js.jpeg')}}" />
                                    </a>
                                    <div class="card-content">
                                        <h4 class="card-title">
                                            <a href="{{ route('questions') }}?category={{ $categories[3]->category }}">
                                                HTML, CSS & JavaScript
                                            </a>
                                        </h4>
                                        <p class="">
                                            {{$categories[3]->category_description}}
                                        </p>
                                    </div>
                                    <div class="card-read-more">
                                        <a href="{{ route('questions') }}?category={{ $categories[3]->category }}" class="btn btn-link btn-block">
                                            EXPLORE
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <div class="card">
                                    <a class="img-card" href="{{ route('questions') }}?category={{ $categories[4]->category }}">
                                        <img src="{{url('/images/python.png')}}" />
                                    </a>
                                    <div class="card-content">
                                        <h4 class="card-title">
                                            <a href="{{ route('questions') }}?category={{ $categories[4]->category }}">
                                                PYTHON
                                            </a>
                                        </h4>
                                        <p class="">
                                            {{$categories[4]->category_description}}
                                        </p>
                                    </div>
                                    <div class="card-read-more">
                                        <a href="{{ route('questions') }}?category={{ $categories[4]->category }}" class="btn btn-link btn-block">
                                            EXPLORE
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <div class="card">
                                    <a class="img-card" href="{{ route('questions') }}?category={{ $categories[5]->category }}">
                                        <img src="{{url('/images/php.png')}}" />
                                    </a>
                                    <div class="card-content">
                                        <h4 class="card-title">
                                            <a href="{{ route('questions') }}?category={{ $categories[5]->category }}">
                                                PHP
                                            </a>
                                        </h4>
                                        <p class="">
                                            {{$categories[5]->category_description}}
                                        </p>
                                    </div>
                                    <div class="card-read-more">
                                        <a href="{{ route('questions') }}?category={{ $categories[5]->category }}" class="btn btn-link btn-block">
                                            EXPLORE
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</body>

</html>