<div class="col-lg-4 col-md-12 col-sm-12">
    <aside class="default-aside">
        <div class="sidebar">
            @yield('search')

            <ul>
                <li><a href="#">خدمات ابری <span>23</span></a></li>
                <li class="active"><a href="#">خدمات سازمانی <span>16</span></a></li>
                <li><a href="#">سامانه پشتیبانی <span>8</span></a></li>
                <li><a href="#">خدمات آزمایشی <span>127</span></a></li>
                <li><a href="#">اپلیکیشن موبایل <span>65</span></a></li>
                <li><a href="#">ابر آزمایشی <span>16</span></a></li>
                <li><a href="#">خدمات طراحی <span>48</span></a></li>
                <li><a href="#">میزبانی وب <span>27</span></a></li>
            </ul>

            <a href="#" class="download">
                <div class="icon">
                    <i class="fa fa-file-pdf-o"></i>
                </div>
                <div class="text">دانلود بروشور اپلیکیشن نسخه پی‌دی‌اف</div>
            </a>

            <a href="#" class="download">
                <div class="icon">
                    <i class="fa fa-file-word-o"></i>
                </div>
                <div class="text">دانلود بروشور اپلیکیشن نسخه پی‌دی‌اف</div>
            </a>

            <div class="box">
                <img src="images/1_3.jpg" alt>
                <div class="hovered align-self-center">
                    <p>متن آزمایشی جهت خرید ، نصب و پشتیبانی با ما در تماس باشید</p>
                    <a href="#" class="light-btn active">تماس با ما</a>
                </div>
            </div>
            @if (Request::RouteIs('blog') || Request::RouteIs('blog-single'))

                {{-- @if(Request::RouteIs('edit.bilder')) --}}
                {{-- @if (Route::has('blog')) --}}


                <div class="widget-tags">
                    <a href="#">نام برند</a>
                    <a href="#">اپل</a>
                    <a href="#">اندروید</a>
                    <a href="#">اپلیکیشن</a>
                    <a href="#">طراحی</a>
                    <a href="#">توسعه وب</a>
                    <a href="#">گرافیک</a>
                    <a href="#">فروشگاه</a>
                    <a href="#">کدنویسی</a>
                    <a href="#">فرانت اند</a>
                    <a href="#">رابط کاربری</a>
                    <a href="#">برنامه نویسی</a>
                    <a href="#">پایگاه داده</a>
                </div>




            @endif
        </div>
    </aside>
</div>
</div>

