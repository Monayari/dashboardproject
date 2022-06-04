@extends('dashboard.layout.master')

@section('pagetitle','ویرایش تگ')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="container z-sub-header z-s-h-min">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card z-card p-2 mt-2 shadow border-0">

                            <h6 class="card-title p-2 text-center mt-2" style="color: #654A6C; font-size: 27px;">ویرایش
                                اطلاعات
                            </h6>
                            @if($errors->any())
                                <div class="alert alert-danger myalert">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="card-body border-0">
                                <form action="{{route("tags.update" , ['id' => $tag->id])}}" method="POST"
                                      class="myform">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>عنوان :</strong>
                                            <input type="text" value="{{$tag->tag}}" name="title"
                                                   class="form-control myinput" placeholder="عنوان را وارد کنید">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary mybtn"> ثبت</button>
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
