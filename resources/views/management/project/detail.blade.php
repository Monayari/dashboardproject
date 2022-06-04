@extends('dashboard.layout.master')

@section('pagetitle','جزئیات پروژه')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="container z-sub-header z-s-h-min">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card z-card p-2 mt-2 shadow border-0">

                            <h6 class="card-title p-2 text-center mt-2" style="color: #654A6C; font-size: 27px;">
                                اطلاعات
                            </h6>
                            <div class="card-body border-0">
                                <form method="POST" class="myform" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>عنوان :</strong>
                                            <input type="text" value="{{$project->title}}" name="title"
                                                   class="form-control myinput"
                                                   placeholder="عنوان را وارد کنید" disabled>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>مقاله :</strong>
                                            <textarea id="summary-ckeditor" name="article"
                                                      class="form-control myinput"
                                                      disabled>{{$project->article}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>فایل :</strong>
                                            <a href="{{ URL::asset('storage/files/'.$project->file) }}">{{$project->file}}</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>عکس :</strong>
                                            <img src="{{ URL::asset('storage/images/'.$project->banner_img) }}" width="200px">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>دسته بندی :</strong>
                                            <div class="grouped-list">
                                                @foreach ($categories as $category)

                                                    <p>
                                                        <label>
                                                            <input checked value="{{$category->id}}" class="filled-in"
                                                                   name="cats[]"
                                                                   type="checkbox"/>
                                                            <span>{{$category->name}}</span>
                                                        </label>
                                                    </p>

                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>تگ :</strong>
                                            <div class="grouped-list">
                                                @foreach ($tags as $tag)
                                                    <p>
                                                        <label>
                                                            <input
                                                                 checked value="{{$tag->id}}"
                                                                class="filled-in" name="tags[]"
                                                                type="checkbox"/>
                                                            <span>{{$tag->tag}}</span>
                                                        </label>
                                                    </p>

                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>رتبه بندی :</strong>
                                            <select name="featured" class="form-control">
                                                @if($project->featured == 0)
                                                    <option value='0'>عادی</option>
                                                @else
                                                    <option value='1'>ویژه</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>وضعیت :</strong>
                                            <select name="enabled" class="form-control">
                                                @if($project->enabled == 0)
                                                    <option value='1'>فعال</option>
                                                @else
                                                    <option value='0'>غیرفعال</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>کامنت :</strong>
                                            <select name="comments_enabled" class="form-control">
                                                @if($project->comments_enabled == 0)
                                                    <option value='1'>فعال</option>
                                                @else
                                                    <option value='0'>غیرفعال</option>
                                                @endif
                                            </select>
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
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('summary-ckeditor');
    </script>

@endpush
