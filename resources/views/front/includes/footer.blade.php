<!--=====Start Footer=====-->
<footer class="py-4">
<div class="container">
<div class="row align-items-center footer_wrap">

<div class="col-12 col-sm-6 col-md-5">
<div class="social_links text-center">
<h4 class="text-center mb-4">لنكن اصدقاء</h4>

<ul class="list-unstyled m-0">
<li>
@foreach($whatsNum as $addWhatsNum)
<a href="https://api.whatsapp.com/send?phone={{$addWhatsNum -> phone}}"><i class="fab fa-whatsapp"></i></a>
@endforeach
</li>
<li>
<a href="https://www.facebook.com/%D8%AC%D9%85%D8%B9%D9%8A%D8%A9-%D8%A7%D9%84%D8%A5%D8%B3%D8%AA%D9%82%D8%A7%D9%85%D8%A9-%D8%A7%D9%84%D8%AE%D9%8A%D8%B1%D9%8A%D8%A9-102566599262876" target="_blank"><i class="fab fa-facebook-f"></i></a>
</li>
<li>
<a href="https://www.instagram.com/alnsnskw/" target="_blank"><i class="fab fa-instagram"></i></a>
</li>
<li>
<a href="https://twitter.com/alnsnskw" target="_blank"><i class="fab fa-twitter"></i></a>
</li>
<li>
<a href="https://www.snapchat.com/add/alnsns2022?share_id=1lyYatZsEqY&locale=ar-AE" target="_blank"><i class="fab fa-snapchat"></i></a>
</li>
<li>
<a href="https://www.youtube.com/channel/UC8L-KYIZuMQwkhYSi-aUk7w" target="_blank"><i class="fab fa-youtube"></i></a>
</li>

</ul>
</div>
</div>
<div class="col-12 col-md-2 d-none d-md-block">
<div class="footer_logo">
<img class="img-fluid m-auto d-block" src="{{asset('images/logo/'.$logos[0]->photo)}}" alt="footer logo">
</div>
</div>
<div class="col-12 col-sm-6 col-md-5">
<div class="footer_contact text-center">
<h4 class="mb-3">تواصل معنا</h4>
@foreach($addresses as $address)
<p class="mb-2">
{{$address -> address}}<span class="ml-2"><i class="fas fa-map-marker-alt"></i></span>
</p>
@endforeach
<p>
@foreach($phones as $phone)
<a style="color:#FFFFFF;" href="tel:{{$phone -> phone}}">{{$phone -> phone}} </a>
@endforeach
<span class="ml-2"><i class="fas fa-phone-alt"></i></span>
</p>
</div>
</div>
</div>
</div>
</footer>
<!--=====End Footer=====-->

<!-- clearfix -->
<div class="clearfix">

<!-- side_bar -->
<div class="side_bar">
<div class="side_bar_img mt-5 mb-4">
<span class="close_icon"><i class="fas fa-times"></i></span>
<img src="{{asset('images/logo/'.$logos[0]->photo)}}" alt="logo">
</div>
<ul class="list-unstyled m-0 text-center">


<li>
<a class="active" href="{{route('index')}}">الرئيسية</a>
</li>

<li>
<a href="{{route('aboutUs')}}">عن الجمعية</a>
</li>

<li>
<a href="{{route('videos')}}">فيديوهات الجمعية</a>
</li>
<li>
<a href="{{route('news')}}"> اخبار الجمعية  </a>
</li>

<li>
<a href="{{route('projects')}}"> مشاريعنا  </a>
</li>
<li>
</li>
</ul>
</div>





