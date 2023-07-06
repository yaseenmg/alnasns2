@extends('front.layouts.app')


@section('title','alnasns')


@section('content')



<!-- clearfix -->
<section class="items-production section-padding">
<h2> <span class="left"></span>أخر الأخبار<span class="right"></span></h2>

<div class="container-fluid">
<div class="row row-flex justify-content-center mt-4">
@foreach($news_s as $news)
<div class="col-lg-4 col-md-6">
<div class="item">
<div class="img-item">
<img src="{{asset('images/news/'.$news->photo)}}" />
</div>
<a href="#" class="new-page-link"></a>
</div>
</div>
@endforeach



</div>
</section>

<!-- clearfix -->
<div class="clearfix">

<!--=====Start Simple Chat Button Plugin[Button Whatsapp]=====-->
        <style>
            #simple-chat-button--container {
                position: fixed;
                bottom: 10px;
                right: 20px;
                z-index: 999999999;
            }
            #simple-chat-button--button {
                display: block;
                position: relative;
                text-decoration: none;
                width: 83px;
                height: 76px;
                border-radius: 50%;
                -webkit-transition: all 0.2s ease-in-out;
                transition: all 0.2s ease-in-out;
                -webkit-transform: scale(1);
                transform: scale(1);
                box-shadow: 0 6px 8px 2px rgba(0, 0, 0, .15);
                background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMjU2IiB3aWR0aD0iMjU2IiB2aWV3Qm94PSItMjMgLTIxIDY4MiA2ODIuNjY3IiBmaWxsPSIjZmZmIiB4bWxuczp2PSJodHRwczovL3ZlY3RhLmlvL25hbm8iPjxwYXRoIGQ9Ik01NDQuMzg3IDkzLjAwOEM0ODQuNTEyIDMzLjA2MyA0MDQuODgzLjAzNSAzMjAuMDUxIDAgMTQ1LjI0NiAwIDIuOTggMTQyLjI2MiAyLjkxIDMxNy4xMTNjLS4wMjMgNTUuODk1IDE0LjU3OCAxMTAuNDU3IDQyLjMzMiAxNTguNTUxTC4yNSA2NDBsMTY4LjEyMS00NC4xMDJjNDYuMzI0IDI1LjI3IDk4LjQ3NyAzOC41ODYgMTUxLjU1MSAzOC42MDJoLjEzM2MxNzQuNzg1IDAgMzE3LjA2Ni0xNDIuMjczIDMxNy4xMzMtMzE3LjEzMy4wMzUtODQuNzQyLTMyLjkyMi0xNjQuNDE4LTkyLjgwMS0yMjQuMzU5ek0zMjAuMDUxIDU4MC45NDFoLS4xMDljLTQ3LjI5Ny0uMDItOTMuNjg0LTEyLjczLTEzNC4xNi0zNi43NDJsLTkuNjIxLTUuNzE1LTk5Ljc2NiAyNi4xNzIgMjYuNjI5LTk3LjI3LTYuMjctOS45NzNjLTI2LjM4Ny00MS45NjktNDAuMzItOTAuNDc3LTQwLjI5Ny0xNDAuMjgxLjA1NS0xNDUuMzMyIDExOC4zMDUtMjYzLjU3IDI2My42OTktMjYzLjU3IDcwLjQwNi4wMjMgMTM2LjU5IDI3LjQ3NyAxODYuMzU1IDc3LjMwMXM3Ny4xNTYgMTE2LjA1MSA3Ny4xMzMgMTg2LjQ4NGMtLjA2MiAxNDUuMzQ0LTExOC4zMDUgMjYzLjU5NC0yNjMuNTk0IDI2My41OTR6bTE0NC41ODYtMTk3LjQxOGMtNy45MjItMy45NjktNDYuODgzLTIzLjEzMy01NC4xNDgtMjUuNzgxLTcuMjU4LTIuNjQ1LTEyLjU0Ny0zLjk2MS0xNy44MjQgMy45NjktNS4yODUgNy45My0yMC40NjkgMjUuNzgxLTI1LjA5NCAzMS4wNjZzLTkuMjQyIDUuOTUzLTE3LjE2OCAxLjk4NC0zMy40NTctMTIuMzM2LTYzLjcyNy0zOS4zMzJjLTIzLjU1NS0yMS4wMTItMzkuNDU3LTQ2Ljk2MS00NC4wODItNTQuODkxLTQuNjE3LTcuOTM3LS4wMzktMTEuODEyIDMuNDc3LTE2LjE3MiA4LjU3OC0xMC42NTIgMTcuMTY4LTIxLjgyIDE5LjgwOS0yNy4xMDVzMS4zMi05LjkxOC0uNjY0LTEzLjg4M2MtMS45NzctMy45NjUtMTcuODI0LTQyLjk2OS0yNC40MjYtNTguODQtNi40MzctMTUuNDQ1LTEyLjk2NS0xMy4zNTktMTcuODMyLTEzLjYwMi00LjYxNy0uMjMtOS45MDItLjI3Ny0xNS4xODctLjI3N3MtMTMuODY3IDEuOTgtMjEuMTMzIDkuOTE4LTI3LjczIDI3LjEwMi0yNy43MyA2Ni4xMDUgMjguMzk1IDc2LjY4NCAzMi4zNTUgODEuOTczIDU1Ljg3OSA4NS4zMjggMTM1LjM2NyAxMTkuNjQ4YzE4LjkwNiA4LjE3MiAzMy42NjQgMTMuMDQzIDQ1LjE3NiAxNi42OTUgMTguOTg0IDYuMDMxIDM2LjI1NCA1LjE4IDQ5LjkxIDMuMTQxIDE1LjIyNy0yLjI3NyA0Ni44NzktMTkuMTcyIDUzLjQ4OC0zNy42OCA2LjYwMi0xOC41MTIgNi42MDItMzQuMzc1IDQuNjE3LTM3LjY4NC0xLjk3Ny0zLjMwNS03LjI2Mi01LjI4NS0xNS4xODQtOS4yNTR6bTAgMCIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+") center/44px 44px no-repeat #25D366;
            }
            #simple-chat-button--text {
                display: block;
                position: absolute;
                width: max-content;
                background-color: #fff;
                bottom: 15px;
                right: 85px;
                border-radius: 5px;
                padding: 5px 10px;
                color: #000;
                font-size: 13px;
                font-weight: 700;
                letter-spacing: -0.03em;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                word-break: keep-all;
                line-height: 1em;
                text-overflow: ellipsis;
                vertical-align: middle;
                box-shadow: 0 6px 8px 2px rgba(0, 0, 0, .15);
            }
            #simple-chat-button--button:before {
                content: "";
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                border-radius: 50%;
                -webkit-animation: scb-shockwave-animation 2s 5.3s ease-out infinite;
                animation: scb-shockwave-animation 2s 5.3s ease-out infinite;
                z-index: -1;
            }
            #simple-chat-button--button:hover {
                -webkit-transform: scale(1.06);
                transform: scale(1.06);
                -webkit-transition: all 0.2s ease-in-out;
                transition: all 0.2s ease-in-out;
            }
            @media only screen and (max-width: 1024px) {
                #simple-chat-button--container {
                    bottom: 10px;
                }
            }

            @media only screen and (max-width: 768px) {
                #simple-chat-button--container {
                    bottom: 10px;
                }
            }
            @-webkit-keyframes scb-shockwave-animation {
                0% {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                    box-shadow: 0 0 2px rgba(0, 100, 0, .5), inset 0 0 1px rgba(0, 100, 0, .5);
                }
                95% {
                    box-shadow: 0 0 50px transparent, inset 0 0 30px transparent;
                }
                100% {
                    -webkit-transform: scale(1.2);
                    transform: scale(1.2);
                }
            }
            @keyframes scb-shockwave-animation {
                0% {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                    box-shadow: 0 0 2px rgba(0, 100, 0, .5), inset 0 0 1px rgba(0, 100, 0, .5);
                }
                95% {
                    box-shadow: 0 0 50px transparent, inset 0 0 30px transparent;
                }
                100% {
                    -webkit-transform: scale(1.2);
                    transform: scale(1.2);
                }
            }
        </style>
<div id="simple-chat-button--container">
<a id="simple-chat-button--button" href="https://api.whatsapp.com/send?phone=96566920820" target="_blank"></a>
<span id="simple-chat-button--text">واتساب</span>
</div>
<!--=====End Simple Chat Button Plugin[Button Whatsapp]=====-->

<!--=====Start Simple Chat Button Plugin[Button Call Tel]=====-->
        <style>
            #simple-tel-button--container {
                position: fixed;
                bottom: 10px;
                left: 20px;
                z-index: 999999999;
            }
            #simple-tel-button--button {
                display: block;
                position: relative;
                text-decoration: none;
                width: 83px;
                height: 76px;
                border-radius: 50%;
                -webkit-transition: all 0.2s ease-in-out;
                transition: all 0.2s ease-in-out;
                -webkit-transform: scale(1);
                transform: scale(1);
                box-shadow: 0 6px 8px 2px rgba(0, 0, 0, .15);
                background: url(icon/tel.png) center/44px 44px no-repeat #25D366;
            }
            #simple-tel-button--text {
                display: block;
                position: absolute;
                width: max-content;
                background-color: #fff;
                bottom: 15px;
                left: 88px;
                border-radius: 5px;
                padding: 5px 10px;
                color: #000;
                font-size: 13px;
                font-weight: 700;
                letter-spacing: -0.03em;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                word-break: keep-all;
                line-height: 1em;
                text-overflow: ellipsis;
                vertical-align: middle;
                box-shadow: 0 6px 8px 2px rgba(0, 0, 0, .15);
            }
            #simple-tel-button--button:before {
                content: "";
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                border-radius: 50%;
                -webkit-animation: scb-shockwave-animation 2s 5.3s ease-out infinite;
                animation: scb-shockwave-animation 2s 5.3s ease-out infinite;
                z-index: -1;
            }
            #simple-tel-button--button:hover {
                -webkit-transform: scale(1.06);
                transform: scale(1.06);
                -webkit-transition: all 0.2s ease-in-out;
                transition: all 0.2s ease-in-out;
            }
            @media only screen and (max-width: 1024px) {
                #simple-tel-button--container {
                    bottom: 10px;
                }
            }

            @media only screen and (max-width: 768px) {
                #simple-tel-button--container {
                    bottom: 10px;
                }
            }
            @-webkit-keyframes scb-shockwave-animation {
                0% {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                    box-shadow: 0 0 2px rgba(0, 100, 0, .5), inset 0 0 1px rgba(0, 100, 0, .5);
                }
                95% {
                    box-shadow: 0 0 50px transparent, inset 0 0 30px transparent;
                }
                100% {
                    -webkit-transform: scale(1.2);
                    transform: scale(1.2);
                }
            }
            @keyframes scb-shockwave-animation {
                0% {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                    box-shadow: 0 0 2px rgba(0, 100, 0, .5), inset 0 0 1px rgba(0, 100, 0, .5);
                }
                95% {
                    box-shadow: 0 0 50px transparent, inset 0 0 30px transparent;
                }
                100% {
                    -webkit-transform: scale(1.2);
                    transform: scale(1.2);
                }
            }
        </style>
<div id="simple-tel-button--container">
<a id="simple-tel-button--button" href="tel:+96566920820" target="_blank"></a>
<span id="simple-tel-button--text">إتصل الأن</span>
</div>
<!--=====End Simple Chat Button Plugin[Button Call Tel]=====-->

<!-- clearfix -->
<div class="clearfix">


      @endsection
