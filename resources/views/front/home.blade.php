@extends('front.layouts.app')


@section('title','alnasns')


@section('content')

<!--=====Start Main Slider[Carousel]=====-->
<div class="carousel-container">
<div class="carousel" id="carousel-1" auto-scroll="7000">
@foreach($sliders as $slider)
<section class="carousel-screen">
<img src="{{asset('images/slider/'.$slider->photo)}}" />
<!--
<section class="text-container">
<p class="ptext">شعارنا هو تميزنا وثقتكم هى التى تدفعنا نحو التقدم</p>
</section>
-->
</section>
@endforeach

<!--These are not screens. They will always be on carousel[Point Number]-->
<section class="circle-container">
<!--These 'circles' need to match the number of carousel screens-->
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
</section>

<div class="left-arrow">
<span class="chevron left"></span>
</div>
<div class="right-arrow">
<span class="chevron right"></span>
</div>

</div>
</div>
<!--=====End Main Slider[Carousel]=====-->

<!-- clearfix -->
<div class="clearfix">

<!--=====Start InfoData=====-->
<div class="aid py-4">

<h2 class="H2"> <span class="left"></span> جمعية الإستقامة الخيرية<span class="right"></span></h2>

<div class="container-fluid">
<div class="row align-items-center">
<div class="col-12 col-md-6 animate__animated animate__slideInLeft">
<div class="aid_img">
<img class="img-fluid" style="width: 100%;" src="{{asset('assets/front/Image/imghome/carsoul1.png')}}" alt="donate">
</div>
</div>

<div class="col-12 col-md-6 animate__animated animate__slideInRight">
<div class="aid_info text-right">
<h2 class="my-4 main_h2">
اهلا بكم في جمعيه الاستقامة الخيرية
نستقبل تبرعاتكم العينية من ملابس واثاث واجهزه كهربائيه واواني منزلية
وتقوم الجمعية بتوزيعها على الاسرء المتعففه داخل الكويت وخارجه كي تعود بالحسنات الى متبرعينا الكرام
</h2>
<h2 class="my-4 main_h2">
رقم الترخيص :
خ ٥٠ / ت ج د ٢ / ٢٠٢٢
</h2>
<h2 class="mb-5 main_h2">
مشروع جمع الملابس
<span>(اتصل .. نصل )</span>
</h2>
<div class="donate_contact d-flex justify-content-center">
<button class="btn whats">
<span class="mr-2"><i class="fab fa-whatsapp"></i></span>
<span>
@foreach($whatsNum as $addWhatsNum)
     <a style="color:#FFFFFF;" href="https://wa.me/{{$addWhatsNum -> phone}}">
@endforeach
اضغط هنا للتواصل بالواتساب
</a>
</span>
</button>
<button class="btn phone">
<span class="mr-2"><i class="fas fa-phone-alt"></i></span>
@foreach($phones as $phone)
<span><a style="color:#FFFFFF;" href="tel:{{$phone -> phone}}">
{{$phone -> phone}}</a></span>
@endforeach
</button>
</div>

</div>
</div>
</div>
</div>
</div>
<!-- clearfix -->
<div class="clearfix">

<!--=====Start About Us Home Page=====-->
<section class="donate py-3">

<h2 class="H2"> <span class="left"></span> عن الجمعية<span class="right"></span></h2>

<div class="container-fluid">
<div class="row align-items-center">
@foreach($abouts as $about)
<div class="col-12 col-sm-12 col-md-6 aos-init" data-aos="fade-up" data-aos-duration="2000">
<div class="donate_info">
<h4 style="text-align:justify;direction:rtl;">
{{$about -> details}}
</h4>
</div>
</div>

<div class="col-12 col-sm-12 col-md-6 aos-init" data-aos="fade-down" data-aos-duration="2000">
<div class="donate_img">
<img class="img-fluid" style="width:100%" src="{{asset('images/about/'.$about->photo)}}" alt="donate">
</div>
</div>
@endforeach

</div>
</div>
</section>
<!--=====End About Us=====-->

<!-- clearfix -->
<div class="clearfix">

<!--==========Start Items Production==========-->
<section class="items-production section-padding">
<h2> <span class="left"></span>مشاريع جمع الملابس<span class="right"></span></h2>

<div class="container-fluid">
<div class="row row-flex justify-content-center mt-4">



@foreach($projects as $project)
<div class="col-lg-4 col-md-6">
<div class="item">
<div class="img-item">
<img src="{{asset('images/projects/'.$project->photo)}}" />
</div>
<a href="#" class="new-page-link"></a>
</div>
</div>
@endforeach



</div>
</section>
<!--==========End Items Production==========-->

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
@foreach($whatsNum as $addWhatsNum)
<a id="simple-chat-button--button" href="https://api.whatsapp.com/send?phone={{$addWhatsNum -> phone}}" target="_blank"></a>
@endforeach
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
@foreach($phones as $phone)

<a id="simple-tel-button--button" href="tel:{{$phone -> phone}}" target="_blank"></a>
@endforeach
<span id="simple-tel-button--text">إتصل الأن</span>
</div>
<!--=====End Simple Chat Button Plugin[Button Call Tel]=====-->

<!-- clearfix -->
<div class="clearfix">


      @endsection
