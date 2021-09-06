@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="styles.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<style>
    #proimage {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        background: blue;
        font-size: 35px;
        color: #fff;
        text-align: center;
        line-height: 70px;
    }
</style>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Baloo+2&display=swap");

    body {
        font-family: "Baloo 2", cursive;
        font-size: 16px;
        color: #ffffff;
        text-rendering: optimizeLegibility;
        font-weight: initial;
    }

    .dark {
        background: #110f16;
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
    }

    .postcard.dark {
        background-color: #18151f;
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
    h1,
    p,
    textarea,
    button {
        margin: 2;
        padding: 2;
        color: #000;
        font-size: 1em;
        font-weight: 400;
        font-family: 'Open Sans', sans-serif;
    }

    .com {
        /* width: 600px; */
        margin: 0 auto;
        /* margin-bottom: 50px; */
    }

    .com textarea {
        position: relative;
        margin: auto 45px;
        width: 80%;
        height: 70px;
        padding: 5px;
        outline: none;
        font-size: 80%;
        /* resize: vertical; */
        /* margin-bottom: 20px; */
        border: 1px solid #0EBFE9;
        border-bottom: 4px solid #63D1F4;
    }

    .com p {
        float: left;
        line-height: 30px;
    }

    .com span {
        font-weight: bold;
    }

    .com button {
        border: 0;
        /* width: 30%; */
        color: #fff;
        /* height: 35px; */
        float: right;
        outline: none;
        cursor: pointer;
        font-weight: 700;
        padding: 8px;
        background-color: #0EBFE9;
        /* border-bottom: 3px solid #63D1F4; */
    }

    .com button:hover {
        background-color: #0099CC;
        border-bottom: 3px solid #00688B;
    }

    .com button:disabled {
        background-color: #d3d3d3;
        border-bottom: 3px solid #d3d3d3;
    }

    .com ul {
        margin-top: 60px;
        list-style: none;
        padding-left: 0px;
    }

    .com ul li {
        padding: 10px 10px;
        word-wrap: break-word;
        border-bottom: 3px solid #63D1F4;
    }

    .com ul li:hover {
        border-bottom: 3px solid #00688B;
    }
</style>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap");

    :root {
        --body-bg: hsl(0, 0%, 100%);
        --body-color: hsl(210, 11%, 15%);
        --body-color-hover: hsl(0, 0%, 0%);
        --footer-social-link-hover-bg: hsl(0, 0%, 93%);
        --media-comment-body-color: hsl(210, 11%, 15%);
        --media-comment-name-color: var(--body-color);
        --muted-color: hsla(210, 20%, 2%, 0.51);
        --theme-color-blue: hsl(208, 100%, 92%);
        --theme-color-red: hsl(0, 85%, 95%);
        --theme-color-green: hsl(127, 62%, 90%);
        --theme-color-yellow: hsl(55, 100%, 91%);
        --theme-color-pink: hsl(309, 100%, 92%);
        --theme-color-cyan: hsl(180, 83%, 91%);
        --theme-color-violet: hsl(259, 81%, 94%);
    }

    .comment-body {
        padding: 0 20px;
        padding-left: 28px;
    }


    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
        font-size: 1rem;
        font-family: "Roboto", sans-serif;
        line-height: 1.5;
        color: var(--body-color);
        /* background-color: var(--body-bg); */
        -webkit-text-size-adjust: 100%;
    }

    body .footer {
        margin-top: auto;
    }

    a,
    a:link {
        color: var(--body-color);
        text-decoration: none;
        transition: 0.3s linear;
    }

    a:hover {
        color: var(--body-color-hover);
    }

    a:focus {
        outline: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0;
        font-weight: 500;
        line-height: 1.2;
    }

    h3 {
        font-size: 1.7rem;
        margin-bottom: 0.5rem;
    }

    h5 {
        font-size: 1.1rem;
    }

    .container {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    @media screen and (min-width: 576px) {
        .container {
            max-width: 540px;
        }
    }

    @media screen and (min-width: 768px) {
        .container {
            max-width: 720px;
        }
    }

    @media screen and (min-width: 992px) {
        .container {
            max-width: 960px;
        }
    }

    @media screen and (min-width: 1200px) {
        .container {
            max-width: 1140px;
        }
    }

    .center-block {
        max-width: 45rem;
        /* margin: 0 auto;
            padding: 16px; */
        margin: 10px auto;
    }

    .comment-wrapper {
        padding-top: 5rem;
    }

    .media-comment {
        display: flex;
        align-items: flex-start;
    }

    .media-comment .avatar-content {
        margin-right: 1rem;
    }

    .media-comment .avatar-content .avatar {
        border-radius: 50%;
    }

    .media-comment-body {
        position: relative;
        display: inline-block;
        padding: 1.2rem;
        width: 350px;

        background-color: var(--media-comment-body-bg);
        background-color: #DCDCDC;
        border-radius: 0.8rem;
        padding-right: 3rem;
    }

    @media screen and (max-width:418px) {
        .media-comment-body {
            width: 228px;
        }

    }

    @media screen and (max-width:340px) {
        .media-comment-body {
            width: 170px;
        }

    }

    .media-comment-body .media-comment-data-person {
        margin-bottom: 0.3rem;
    }

    .media-comment-body .media-comment-text {
        color: var(--media-comment-body-color);
    }

    .media-comment-body .media-comment-name {
        color: var(--media-comment-name-color);
        font-size: 1rem;
        font-weight: 600;
        text-transform: inherit;
        line-height: 1.5;
        letter-spacing: 0.0178571em;
        margin-right: 1rem;
    }

    .comment-thread {
        width: 700px;
        max-width: 100%;
        margin: auto;
        padding: 0 30px;
        background-color: #fff;
        border: 1px solid transparent;
        border-radius: 10px;
    }

    .line {
        display: block;
        margin-top: 80px;
        border-style: inset;
        border-width: 1px;
    }

    /* for user avatar */
    .avatar {
        width: 52px;
        height: 52px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #ccc;
        border-radius: 50%;
        font-family: sans-serif;
        color: #fff;
        font-weight: bold;
        font-size: 16px;
    }
</style>

<body>
    <section>

        <div class="con py-2">
            @if(isset($problem))
            <div class="h1 text-center text-dark" id="pageHeaderTitle"></div>
            @foreach ($problem as $prob)
            <article class="postcard light blue">
                <img class="postcard__img" src="https://source.unsplash.com/800x800?coding" alt="Image Title" />
                </a>
                <div class="postcard__text t-dark">
                    <h1 class="postcard__title blue">{{$prob->question_title}}</h1>
                    <div class="postcard__subtitle small">
                        <div>
                            <i class="fas fa-calendar-alt mr-2"></i>Asked by {{$prob->user_name}}
                        </div>
                        <time datetime="2020-05-25 12:00:00">
                            <i class="fas fa-calendar-alt mr-2"></i>{{$prob->created_at}}
                        </time>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">{{$prob->question_description}}
                        @if(!empty($prob->code))
                        <a style="font-weight: bold; cursor:pointer" onclick="document.getElementById('ques_code').style.display='block'" class="postcard__preview-txt">
                            • Code
                        </a>
                        @endif
                    </div>
                </div>
            </article>
            @endforeach

        </div>
        @endif


        <div class="card">
            <div class="container">
                <a onclick="document.getElementById('comment').style.display='block'">
                    <i>
                        <div class="com">
                            <button type="submit" name="action" value="answer">Post Your Answer</button>
                        </div>
                    </i>
                </a>

                <div id="comment" class="modal">
                    <form class="modal-content animate" method="POST">
                        @csrf
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('comment').style.display='none'" class="close" title="Close Modal">&times;</span>
                        </div>

                        <div class="container">

                            <h5 style="text-align: center;">Give a Solution</h5>

                            <div class="com">
                                <label for="question"><b>Comment</b></label>
                                <textarea class="commentBox" id="comment" name="comment" placeholder="Place your comment here" required></textarea>

                            </div>
                            <div class="com">
                                <label for="question"><b>Code</b></label>
                                <textarea class="commentBox" id="code" name="code" placeholder="Place your code here"></textarea>
                            </div>
                            <button type="submit" name="action" value="answer" style="padding: 6px 12px;">Comment</button>

                        </div>
                    </form>
                </div>

                <script>
                    var modal = document.getElementById('comment');
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>

            </div>

            @isset($comment)
            <div class="line"></div>
            <div class="container">
                @forelse ($comment as $com)
                <div class="center-block">
                    <div class="media-comment">
                        <a class="avatar-content">
                            <div class="avatar">{{$com->user_name[0]}}</div>
                        </a>
                        <div class="media-content">

                            <div class="media-comment-body">

                                <div class="media-comment-data-person"><a class="media-comment-name">{{$com->user_name}}</a><span class="text-muted">{{ \Carbon\Carbon::parse($com->commented_at)->format('d/m/Y')}}</span>
                                    @if(!empty($com->code))
                                    <a style="font-weight: bold; cursor:pointer" onclick="document.getElementById('com_code').style.display='block'" style="color: black;">
                                        • Code
                                    </a>
                                    @endif
                                </div>
                                <div class="media-comment-text">{{$com->comment}}</div>

                            </div>
                        </div>
                    </div>
                </div>

                @empty

                <h1 style="margin: auto 35%;">Be the first to answer this question</h1>

                @endforelse
            </div>
            @endif
        </div>



        <div id="ques_code" class="modal">
            <div class="modal-content animate">

                <div class="imgcontainer">
                    <span onclick="document.getElementById('ques_code').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>

                <div class="container">

                    <h5 style="text-align: center;">CODE</h5>
                    @isset($problem)
                    @foreach ($problem as $prob)
                    <div class="card" style="padding: 0 15px;background-color: #f9f9f9;margin:10px">
                        <?php
                        echo nl2br($prob->code);
                        ?>
                    </div>

                    @endforeach
                    @endif

                </div>
            </div>
        </div>

        <script>
            var modal = document.getElementById('ques_code');
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>


        <div id="com_code" class="modal">
            <div class="modal-content animate">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('com_code').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>

                <div class="container">

                    <h5 style="text-align: center;">CODE</h5>
                    <div class="card" style="padding: 0 15px;background-color: #f9f9f9;margin:10px">
                        @isset($comment)
                        @foreach ($comment as $com)
                        <?php
                        echo nl2br($com->code);
                        ?>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <script>
            var modal = document.getElementById('com_code');
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>


    </section>


</body>
<script>
    $(document).ready(function() {});


    const colors = ['#00AA55', '#009FD4', '#B381B3', '#939393', '#E3BC00', '#D47500', '#DC2A2A'];

    function numberFromText(text) {
        const charCodes = text
            .split('')
            .map(char => char.charCodeAt(0))
            .join('');
        return parseInt(charCodes, 10);
    }

    const avatars = document.querySelectorAll('.avatar');

    avatars.forEach(avatar => {
        const text = avatar.innerText;
        avatar.style.backgroundColor = colors[numberFromText(text) % colors.length];
    });
</script>
<script src="myscript.js"></script>

</html>
@endsection