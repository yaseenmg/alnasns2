              <!--MAIN NAVIGATION-->
                <!--===================================================-->
                <nav id="mainnav-container">
                    <!--Brand logo & name-->
                    <!--================================-->
                    <div class="navbar-header">
                        <a href="index.html" class="navbar-brand">

                            <div class="brand-title">


                            <img src="{{asset('assets/admin/img/logo.png')}}" class="logo">
                            </div>
                        </a>
                    </div>
                    <!--================================-->
                    <!--End brand logo & name-->
                    <div id="mainnav">
                        <!--Menu-->
                        <!--================================-->
                        <div id="mainnav-menu-wrap">
                            <div class="nano">
                                <div class="nano-content">
                                    <ul id="mainnav-menu" class="list-group">
                                        <!--Category name-->
                                        <!--Menu list item-->
                                        <!-- <li> <a href="{{route('admin.dashboard')}}"> <i class="fa fa-home"></i> <span class="menu-title"> الرئيسية </span> </a> </li>

                                        </li> -->

                                        <li>
                                             <a href="">
                                             <i class="fa fa-home"></i>
                                                 <span class="menu-title">  الرئيسية</span>
                                                 <i class="arrow"></i>
                                                </a>
                                                <ul class="collapse">
                                                <li><a href="{{route('allLogos')}}"><i class="fa fa-caret-right"></i>اللوجو </a></li>
                                                <li><a href="{{route('addSlider')}}"><i class="fa fa-caret-right"></i>الاسلايدر </a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-briefcase"></i>
                                            <span class="menu-title">مشاريع الملابس</span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="{{route('addProjects')}}"><i class="fa fa-caret-right"></i> اضافة مشروع </a></li>
                                                <li><a href="{{route('allProjects')}}"><i class="fa fa-caret-right"></i>جميع المشاريع </a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <i class="fa-solid fa-video"></i>
                                            <span class="menu-title">فيديوهات الجمعية  </span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="{{route('addVideos')}}"><i class="fa fa-caret-right"></i> اضافة   </a></li>
                                                <li><a href="{{route('allVideos')}}"><i class="fa fa-caret-right"></i>  عرض  </a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#">
                                            <i class="fa fa-file"></i>
                                            <span class="menu-title">الاخبار</span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class="collapse">
                                               <li><a href="{{route('addNews')}}"><i class="fa fa-caret-right"></i> اضافة خبر </a></li>
                                                <li><a href="{{route('allNews')}}"><i class="fa fa-caret-right"></i>جميع الاخبار </a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <i class="fa-solid fa-money-check-dollar"></i>
                                            <span class="menu-title">عن الجمعية </span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="{{route('addAboutUs')}}"><i class="fa fa-caret-right"></i> اضافة   </a></li>
                                                <li><a href="{{route('allAboutUs')}}"><i class="fa fa-caret-right"></i>  عرض  </a></li>
                                                <li><a href="{{route('allOwners')}}"><i class="fa fa-caret-right"></i> مجلس الادارة  </a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="">
                                            <i class="fa fa-phone"></i>
                                            <span class="menu-title">تواصل معنا</span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="{{route('addPhoneNumbers')}}"><i class="fa fa-caret-right"></i> اضافة رقم تليفون </a></li>
                                                <li><a href="{{route('allPhoneNumbers')}}"><i class="fa fa-caret-right"></i>جميع ارقام التليفونات</a></li>
                                                <!-- <li><a href="{{route('addWhatsNum')}}"><i class="fa fa-caret-right"></i> اضافة رقم الواتس اب </a></li> -->
                                                <li><a href="{{route('allWhatsNum')}}"><i class="fa fa-caret-right"></i> رقم الواتس اب</a></li>

                                                <li><a href="{{route('addAddress')}}"><i class="fa fa-caret-right"></i> اضافة عنوان </a></li>
                                                <li><a href="{{route('allAddress')}}"><i class="fa fa-caret-right"></i>جميع العناوين </a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <!--================================-->
                        <!--End menu-->
                    </div>
                </nav>
                <!--===================================================-->
                <!--END MAIN NAVIGATION-->
