

    <header>
<!--=====Start Navbar=====-->
<nav class="d-flex justify-content-between align-items-center container">
<div class="auth">
@foreach($whatsNum as $addWhatsNum)
<a class="regester" href="https://api.whatsapp.com/send?phone={{$addWhatsNum -> phone}}">
@endforeach
تواصل معنا
<span><i class="fas fa-sign-in-alt"></i></span>
</a>
<!--
<a class="login" href="#">
تسجيل الدخول
<span><i class="fas fa-sign-in-alt"></i></span>
</a>
-->
</div>

<div class="links">
<ul class="list-unstyled m-0">


<li>
<a href="{{route('projects')}}"> مشاريعنا  </a>
</li>

<li>
<a href="{{route('news')}}"> اخبار الجمعية  </a>
</li>

<li>
<a href="{{route('videos')}}">فيديوهات الجمعية</a>
</li>

<li>
<a href="{{route('aboutUs')}}">عن الجمعية</a>
</li>

<li>
<a class="active" href="{{route('index')}}">الرئيسية</a>
</li>
</ul>
</div>

<div class="logo">
<img src="{{asset('images/logo/'.$logos[0]->photo)}}" alt="logo">
</div>
<span class="bar_icon">
<i class="fas fa-bars"></i>
</span>
</nav>
<!--=====End Navbar=====-->

<!--=====Start Social Part=====-->
<div class="social_part mt-3">
<div class="container">
<div class="row align-items-center">
<div class="col-12 col-sm-6 col-md-6">
<div class="social_links">
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

<div class="col-12 col-sm-6 col-md-6 d-flex justify-content-end">
<div class="search_bar">
<span class="icon_search"><i class="fas fa-search"></i></span>
<input type="text">
</div>
</div>

</div>
</div>
</div>
<!--=====End Social Part=====-->
</header>


