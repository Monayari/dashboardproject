@extends('dashboard.layout.master')

@section('pagetitle','ویرایش پروژه')


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
                                <form action="{{route("projects.update" , ['id' => $project->id])}}" method="POST"
                                      class="myform" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>عنوان :</strong>
                                            <input type="text" value="{{old('title', $project->title)}}" name="title"
                                                   class="form-control myinput"
                                                   placeholder="عنوان را وارد کنید">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>مقاله :</strong>
                                            <textarea id="summary-ckeditor" name="article"
                                                      class="form-control myinput">{{old('article', $project->article)}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>فایل :</strong>
                                            <input type="file" id="file" name="file" class="form-control myinput">
                                            <a href="{{ URL::asset('/storage/files/'.$project->file) }}">{{$project->file}}</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>عکس :</strong>
                                            <input type="file" id="banner_img" name="banner_img"
                                                   class="form-control myinput">
                                            <img src="{{ url('storage/images/'.$project->banner_img) }}" width="200px">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>دسته بندی :</strong>
                                            <div class="grouped-list">
                                                @foreach ($categories as $category)

                                                    <p>
                                                        <label>
                                                            <input
                                                                {{  is_array(old('cats',$project_categories)) && in_array($category->id , old('cats',$project_categories)) ? "checked" : "" }} value="{{$category->id}}"
                                                                class="filled-in"
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
                                                                {{ is_array(old('cats',$project_tags)) && in_array($tag->id, old('tags',$project_tags)) ? "checked" : "" }}  value="{{$tag->id}}"
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
                                            <select name="featured" class="browser-default">
                                                <option
                                                    {{ old('featured', $project->featured) == 0 ? "selected" : "" }} value=0>
                                                    عادی
                                                </option>
                                                <option
                                                    {{ old('featured', $project->featured) == 1 ? "selected" : "" }} value=1>
                                                    ویژه
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>وضعیت :</strong>
                                            <select name="enabled" class="browser-default">
                                                <option
                                                    {{ old('enabled', $project->enabled) == 1 ? "selected" : "" }} value=1>
                                                    فعال
                                                </option>
                                                <option
                                                    {{ old('enabled', $project->enabled) == 0 ? "selected" : "" }} value=0>
                                                    غیرفعال
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>کامنت :</strong>
                                            <select name="comments_enabled" class="browser-default">
                                                <option
                                                    {{ old('comments_enabled', $project->comments_enabled) == 1 ? "selected" : "" }} value=1>
                                                    فعال
                                                </option>
                                                <option
                                                    {{ old('comments_enabled', $project->comments_enabled) == 0 ? "selected" : "" }} value=0>
                                                    غیرفعال
                                                </option>
                                            </select>
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
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.replace('summary-ckeditor', {
            filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>

@endpush
