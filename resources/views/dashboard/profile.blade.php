@extends('dashboard.layout.master')

@section('pagetitle','پروفایل')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">پروفایل</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index_1.html">
                                    <i class="fas fa-home"></i> خانه</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">اضافی</a>
                            </li>
                            <li class="breadcrumb-item active">پروفایل</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Your content goes here  -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="m-b-20">
                            <div class="contact-grid">
                                <div class="profile-header bg-dark">
                                    <div class="user-name">آرش خادملو</div>
                                    <div class="name-center">مهندس نرم افزار</div>
                                </div>
                                <img src="{{asset('/images/dashboard/usrbig3.jpg')}}" class="user-img" alt>
                                <p>
                                    456، خیابان شرقی، منطقه اکتابان،
                                    <br>نیو یورک
                                </p>
                                <div>
                                    <span class="phone">
                                        <i class="material-icons">phone</i>264-625-2583</span>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <h5>564</h5>
                                        <small>دنبال کردن</small>
                                    </div>
                                    <div class="col-4">
                                        <h5>18k</h5>
                                        <small>دنبال کننده</small>
                                    </div>
                                    <div class="col-4">
                                        <h5>565</h5>
                                        <small>پست</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <ul class="nav nav-tabs">
                            <li class="nav-item m-l-10">
                                <a class="nav-link active" data-toggle="tab" href="#about">درباره</a>
                            </li>
                            <li class="nav-item m-l-10">
                                <a class="nav-link" data-toggle="tab" href="#skills">مهارت ها</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane body active" id="about">
                                <p class="text-default">لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است. لورم ایپسوم از سالهای متمادی استاندارد استاندارد صنعت بوده است، زمانی که یک چاپگر ناشناخته با یک نوع کابین از آن استفاده کرد و آن را برای ساختن یک نمونه از نوع نمونه آماده کرد. این نه تنها پنج قرن زنده مانده است، بلکه جهش به شکل گیری الکترونیکی نیز باقی مانده است.</p>
                                <small class="text-muted">آدرس ایمیل: </small>
                                <p>john@gmail.com</p>
                                <hr>
                                <small class="text-muted">تلفن: </small>
                                <p>+91 1234567890</p>
                                <hr>
                            </div>
                            <div class="tab-pane body" id="skills">
                                <ul class="list-unstyled">
                                    <li>
                                        <div>فتوشاپ</div>
                                        <div class="progress skill-progress m-t-20">
                                            <div class="progress-bar l-bg-green width-per-45" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>وردپرس</div>
                                        <div class="progress skill-progress m-b-20">
                                            <div class="progress-bar l-bg-orange width-per-38" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>HTML</div>
                                        <div class="progress skill-progress m-b-20">
                                            <div class="progress-bar l-bg-cyan width-per-39" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>آنگولار</div>
                                        <div class="progress skill-progress m-b-20">
                                            <div class="progress-bar l-bg-purple width-per-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="profile-tab-box">
                            <div class="p-l-20">
                                <ul class="nav ">
                                    <li class="nav-item tab-all">
                                        <a class="nav-link active show" href="#project" data-toggle="tab">درباره من</a>
                                    </li>
                                    <li class="nav-item tab-all p-l-20">
                                        <a class="nav-link" href="#usersettings" data-toggle="tab">تنظیمات</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="project" aria-expanded="true">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card project_widget">
                                        <div class="header">
                                            <h2>درباره</h2>
                                        </div>
                                        <div class="body">
                                            <div class="row">
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>نام کامل</strong>
                                                    <br>
                                                    <p class="text-muted">آرش خادملو</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>موبایل</strong>
                                                    <br>
                                                    <p class="text-muted">(123) 456 7890</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>ایمیل</strong>
                                                    <br>
                                                    <p class="text-muted">johndeo@example.com</p>
                                                </div>
                                                <div class="col-md-3 col-6">
                                                    <strong>موقعیت</strong>
                                                    <br>
                                                    <p class="text-muted">ایران</p>
                                                </div>
                                            </div>
                                            <p class="m-t-30">من فارغ التحصیل شدم در هنر از موسسه شناخته شده و مشهور هند - 2000-01، که به دانشگاه وابسته است. من در آزمون های دانشگاهی از همان دانشگاه از سال 1996 تاکنون رتبه بندی کردم.</p>
                                            <p>من فارغ التحصیل شدم در هنر از موسسه شناخته شده و مشهور هند - 2000-01، که به دانشگاه وابسته است. من در آزمون های دانشگاهی از همان دانشگاه از سال 1996 تاکنون رتبه بندی کردم </p>
                                            <p>من فارغ التحصیل شدم در هنر از موسسه شناخته شده و مشهور هند - 2000-01، که به دانشگاه وابسته است. من در آزمون های دانشگاهی از همان دانشگاه از سال 1996 تاکنون رتبه بندی کردم.</p>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card project_widget">
                                        <div class="header">
                                            <h2>تحصیلات</h2>
                                        </div>
                                        <div class="body">
                                            <ul>
                                                <li>مدرک کارشناسی ارشد کامپیوتر.</li>
                                                <li>مدرک کارشناسی ارشد کامپیوتر.</li>
                                                <li>مدرک کارشناسی ارشد کامپیوتر</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card project_widget">
                                        <div class="header">
                                            <h2>تجربه</h2>
                                        </div>
                                        <div class="body">
                                            <ul>
                                                <li>یک سال تجربه به عنوان کارشناسی ارشد استاد از آوریل 2009 تا مارس 2010 در دانشگاه تهران.</li>
                                                <li>یک سال تجربه به عنوان کارشناسی ارشد استاد از آوریل 2009 تا مارس 2010 در دانشگاه تهران.</li>
                                                <li>یک سال تجربه به عنوان کارشناسی ارشد استاد از آوریل 2009 تا مارس 2010 در دانشگاه تهران
                                                </li>
                                                <li>یک سال تجربه به عنوان کارشناسی ارشد استاد از آوریل 2009 تا مارس 2010 در دانشگاه تهران
                                                </li>
                                                <li>یک سال تجربه به عنوان کارشناسی ارشد استاد از آوریل 2009 تا مارس 2010 در دانشگاه تهران
                                                </li>
                                                <li>یک سال تجربه به عنوان کارشناسی ارشد استاد از آوریل 2009 تا مارس 2010 در دانشگاه تهران
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card project_widget">
                                        <div class="header">
                                            <h2>کنفرانس ها، دوره ها و کارگاه شرکت کردند</h2>
                                        </div>
                                        <div class="body">
                                            <ul>
                                                <li>لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.
                                                </li>
                                                <li>لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است
                                                </li>
                                                <li>لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است
                                                </li>
                                                <li>لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است
                                                </li>
                                                <li>لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است
                                                </li>
                                                <li>لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.
                                                </li>
                                                <li>لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="timeline" aria-expanded="false">
                        </div>
                        <div role="tabpanel" class="tab-pane" id="usersettings" aria-expanded="false">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        <strong>تنظیمات</strong> امنیتی</h2>
                                </div>
                                <div class="body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="نام کاربری">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="رمزعبور فعلی">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="رمزعبور جذید">
                                    </div>
                                    <button class="btn btn-info btn-round">ذخیره تغییرات</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        <strong>تنظیمات</strong> حساب</h2>
                                </div>
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="نام اصلی">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="نام خانوادگی">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="شهر">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="ایمیل">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="کشور">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea rows="4" class="form-control no-resize" placeholder="خط آدرس 1"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-check m-l-10">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" id="checkbox" name="checkbox"> قابلیت مشاهده برای همه
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check m-l-10">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" id="checkbox1" name="checkbox"> اعلان های کار جدید
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check m-l-10">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" id="checkbox2" name="checkbox"> اعلان درخواست دوست جدید
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-primary btn-round">ذخیره تغییرات</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script src="{{asset("/js/dashboard/app.min.js")}}"></script>
    <!-- Custom Js -->
    <script src="{{asset("/js/dashboard/admin.js")}}"></script>

@endpush
