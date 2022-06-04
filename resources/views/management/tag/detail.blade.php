@extends('dashboard.layout.master')

@section('pagetitle','جزئیات تگ')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="container z-sub-header z-s-h-min">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card z-card p-2 mt-2 shadow border-0">

                            <h6 class="card-title p-2 text-center mt-2" style="color: #654A6C; font-size: 27px;">جزئیات
                            </h6>
                            <div class="card-body border-0">
                                <form action="" method="POST" class="myform">
                                    @csrf
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>عنوان :</strong>
                                            <input type="text" value="{{$tag->tag}}" name="title" class="form-control myinput" placeholder="عنوان را وارد کنید">
                                        </div>
                                    </div>
                                </form>
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

