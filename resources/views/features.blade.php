@extends('layouts.master')

@section('pagetitle','Chilo -خدمات ما')


<section class="page">
    <!-- ***** Page Top Start ***** -->
    @section('head')

        <h1>خدمات ما</h1>

    @endsection

    @section('text')

        <li class="active">خدمات ما</li>

    @endsection

<!-- ***** Page Top End ***** -->

    <!-- ***** Page Content Start ***** -->

    @section('content')
        <div class="page-bottom">
            <div class="container">
                <div class="row">
                    <x-services-item img="images/1_2.jpg" title="عنوان آزمایشی" href="blue-features-single.html" description=" طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه
                                    شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید." />
                    <x-services-item img="images/2_2.jpg" title="خدمات آزمایشی" href="blue-features-single.html" description=" طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه
                                    شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید." />
                    <x-services-item img="images/3_2.jpg" title="متن ساختگی" href="blue-features-single.html" description=" طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه
                                    شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید." />
                    <x-services-item img="images/4.jpg" title="گزارشات قدرتمند" href="blue-features-single.html" description=" طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه
                                    شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید." />
                    <x-services-item img="images/5.jpg" title="اپلیکیشن موبایل" href="blue-features-single.html" description=" طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه
                                    شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید." />
                    <x-services-item img="images/6.jpg" title="مدیریت بازاریابی" href="blue-features-single.html" description=" طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه
                                    شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید." />
                </div>
            </div>
        </div>
        <!-- ***** Page Content End ***** -->
</section>


<!-- ***** Parallax Start ***** -->
@include('layouts.particals.Parallax')
<!-- ***** Parallax End ***** -->

@endsection
