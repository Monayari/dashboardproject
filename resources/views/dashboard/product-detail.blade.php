@extends('dashboard.layout.master')

@section('pagetitle','محصولات')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">جزئیات محصول</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index_1.html">
                                    <i class="fas fa-home"></i> خانه</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">فروشگاه</a>
                            </li>
                            <li class="breadcrumb-item active">جزئیات محصول</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="block-header">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <ul class="breadcrumb breadcrumb-style ">
                                            <li class="bcrumb-1">
                                                <a href="index_1.html">خانه</a>
                                            </li>
                                            <li class="bcrumb-2">
                                                <a href="#" onClick="return false;">مبلمان</a>
                                            </li>
                                            <li class="bcrumb-3">
                                                <a href="#" onClick="return false;">صندلی</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body ">
                                <div class="product-store">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <div class="product-gallery">
                                                <div class="product-gallery-thumbnails">
                                                    <ol class="thumbnails-list list-unstyled">
                                                        <li><img src="images/p2.jpg" alt></li>
                                                        <li><img src="images/p3.jpg" alt></li>
                                                        <li><img src="images/p4.jpg" alt></li>
                                                        <li><img src="images/p5.jpg" alt></li>
                                                        <li><img src="images/p6.jpg" alt></li>
                                                    </ol>
                                                </div>
                                                <div class="product-gallery-featured">
                                                    <img src="images/p1.jpg" alt>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <div class="product-payment-details">
                                                <p class="last-sold text-muted"><small>145 مورد فروخته شد</small></p>
                                                <h4 class="product-title mb-2">صندلی متالیک چوبی در چرم سیاه </h4>
                                                <h2 class="product-price display-4">70000 تومان</h2>
                                                <p><i class="fa fa-credit-card text-success"></i> <strong>بدون هزینه انتشار 19165 تومان در ماه</strong></p>
                                                <p><i class="fa fa-swatchbook col-cyan"></i> <strong>بانک ارائه می دهد 10٪ تخفیف فوری در مسترکارت برای اولین پرداخت آنلاین</strong></p>
                                                <p><i class="fa fa-bookmark col-red"></i> <strong>شریک پیشنهاد خرید این لپ تاپ و گرفتن 2 سال گارانتی تمدید @ ₹2999</strong></p>
                                                <p><i class="fa fa-credit-card text-success"></i> <strong>بدون هزینه انتشار 19165 تومان در ماه</strong></p>
                                                <label for="quant">تعداد</label>
                                                <input type="number" name="quantity" min="1" id="quant" class="form-control mb-5 input-lg" placeholder="مقدار را انتخاب کنید">
                                                <button type="button" class="btn btn-warning waves-effect">
                                                    <i class="fas fa-cart-plus"></i>
                                                    <span>افزودن به سبد خرید</span>
                                                </button>
                                                <button type="button" class="btn btn-info waves-effect">
                                                    <i class="fas fa-bolt"></i>
                                                    <span>خرید حالا</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation">
                                    <a href="#home" data-toggle="tab" class="active show">ویژگی ها</a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile" data-toggle="tab">توضیحات</a>
                                </li>
                                <li role="presentation">
                                    <a href="#messages" data-toggle="tab">پرسش و پاسخ</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active show" id="home">
                                    <div class="product-description">
                                        <h2 class="mb-5">ویژگی ها</h2>
                                        <dl class="row mb-5">
                                            <dt class="col-sm-3">برند</dt>
                                            <dd class="col-sm-9">برند خادملو</dd>
                                            <dt class="col-sm-3">ابعاد</dt>
                                            <dd class="col-sm-9">H 32 X W 18 X D 19؛ ارتفاع صندلی 18</dd>
                                            <dt class="col-sm-3">وزن</dt>
                                            <dd class="col-sm-9">5 کیلو </dd>
                                            <dt class="col-sm-3">گارانتی</dt>
                                            <dd class="col-sm-9">24 ماه گارانتی</dd>
                                            <dt class="col-sm-3">جنس</dt>
                                            <dd class="col-sm-9">آهن</dd>
                                            <dt class="col-sm-3">ارتفاع</dt>
                                            <dd class="col-sm-9">32 اینچ</dd>
                                            <dt class="col-sm-3">عرض</dt>
                                            <dd class="col-sm-9">18 اینچ</dd>
                                            <dt class="col-sm-3">عمق</dt>
                                            <dd class="col-sm-9">19 اینچ</dd>
                                        </dl>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile">
                                    <div class="product-description">
                                        <h2 class="mb-5">توضیحات</h2>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
!</p>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="messages">
                                    <b>پرسش و پاسخ</b>
                                    <div class="product-faq mb-5">
                                        <p class="text-muted">چه اطلاعاتی نیاز دارید؟</p>
                                    </div>
                                    <div class="product-comments">
                                        <h5 class="mb-2">یا از فروشگاه دیوید بخواهید</h5>
                                        <form class="form-inline mb-5">
                                            <textarea cols="50" rows="2" class="form-control mr-4" placeholder="یک سوال بنویس"></textarea><button class="btn btn-lg btn-primary">پرسیدن</button>
                                        </form>
                                        <h5 class="mb-5">آخرین سوالات</h5>
                                        <ol class="list-unstyled last-questions-list">
                                            <li><i class="fa fa-comment"></i> <span>سلام دیوید، آیا می توانم با کارت اعتباری پرداخت کنم؟</span></li>
                                            <li><i class="fa fa-comment"></i> <span>آیا می توانم آن را به آدرس دیگری ارسال کنم؟</span></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-body ">
                            <div class="product-store">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <h3 class="mb-5">بیشتر از فروشگاه جان</h3>
                                        <div class="recommended-items card-deck">
                                            <div class="card">
                                                <img src="images/p2.jpg" alt class="card-img-top">
                                                <div class="card-body">
                                                    <h5 class="card-title">55000 تومان</h5>
                                                    <span class="text-muted"><small>صندلی متالیک چوبی</small></span>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <img src="images/p3.jpg" alt class="card-img-top">
                                                <div class="card-body">
                                                    <h5 class="card-title">55000 تومان</h5>
                                                    <span class="text-muted"><small>صندلی متالیک چوبی</small></span>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <img src="images/p4.jpg" alt class="card-img-top">
                                                <div class="card-body">
                                                    <h5 class="card-title">55000 تومان</h5>
                                                    <span class="text-muted"><small>صندلی متالیک چوبی</small></span>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <img src="images/p5.jpg" alt class="card-img-top">
                                                <div class="card-body">
                                                    <h5 class="card-title">55000 تومان</h5>
                                                    <span class="text-muted"><small>صندلی متالیک چوبی</small></span>
                                                </div>
                                            </div>
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
    <script src="js/app.min.js"></script>
    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/product-detail.js"></script>
@endsection
