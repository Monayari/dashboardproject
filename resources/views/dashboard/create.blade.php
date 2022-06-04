@extends('dashboard.layout.master')

@section('pagetitle','ایجاد تگ')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="container z-sub-header z-s-h-min">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card z-card p-2 mt-2 shadow border-0">
                            <h6 class="card-title p-2 text-center mt-2" style="color: #654A6C; font-size: 27px;"> افزودن تگ
                            </h6>
                            <form action="{{route("dashboard.tags.create")}}" method="post"
                                  enctype="multipart/form-data">

                                <div class="row table-bordered border-dark">
                                    <div class="col-lg-4 p-2 text-center border-left border-dark">
                                        ویژگی ها
                                    </div>
                                    <div class="col-lg-8 p-2 text-center">
                                        مقدار ورودی برای هرکدام از ویژگی ها
                                    </div>
                                </div>

                                <div class="row table-bordered border-dark">
                                    <div class="col-lg-4 p-2 text-center border-left border-dark">
                                        عنوان
                                    </div>
                                    <div class="col-lg-8 p-2 text-center">
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                </div>

                                <input type="submit" name="submit" value="ثبت" class="btn px-3 text-white my-4"
                                       style="background-color:#654A6C ">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
