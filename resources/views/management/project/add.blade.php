@extends('dashboard.layout.master')

@section('pagetitle','ایجاد پروژه')


@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="container z-sub-header z-s-h-min">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card z-card p-2 mt-2 shadow border-0">

                            <h6 class="card-title p-2 text-center mt-2" style="color: #654A6C; font-size: 27px;">افزودن
                                اطلاعات پروژه
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
                                <form action="{{route("projects.create")}}" method="POST" class="myform "
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>عنوان :</strong>
                                            <input type="text" value="{{old('title')}}" name="title"
                                                   class="form-control myinput"
                                                   placeholder="عنوان را وارد کنید">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>مقاله :</strong>
                                            <textarea id="summary-ckeditor" name="article" class="form-control myinput"
                                                      placeholder="مقاله را وارد کنید">{{ old('article') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>فایل :</strong>
                                            <input type="file" id="file" name="file" class="form-control myinput">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>عکس :</strong>
                                            <input type="file" id="banner_img" name="banner_img"
                                                   class="form-control myinput">
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
                                                                {{ is_array(old('cats')) && in_array($category->id, old('cats')) ? "checked" : "" }} value="{{$category->id}}"
                                                                class="filled-in" name="cats[]"
                                                                type="checkbox"/>
                                                            <span>{{$category->name}}</span>
                                                        </label>
                                                    </p>

                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group" id="autocomplete-input">
                                            <strong>تگ :</strong>
                                            {{--                                            <div class="form-group demo-tagsinput-area">--}}
                                            {{--                                                <div class="form-line">--}}
                                            {{--                                                   <input id="name" data-provide="typeahead" type="text" name="tags" class="typeahead form-control" data-role="tagsinput" value="آمستردام,واشنگتن,سیدنی,پکن,قاهره">--}}
{{--                                            <input id="keyword" class="typeahead form-control" autocomplete="off" type="text"/>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}

                                            <div class="grouped-list">
                                                @foreach ($tags as $tag)

                                                    <p>
                                                        <label>
                                                            <input
                                                                {{ is_array(old('tags')) && in_array($tag->id, old('tags')) ? "checked" : "" }} value="{{$tag->id}}"
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
                                                <option {{ old('featured') == 0 ? "selected" : "" }} value=0>عادی
                                                </option>
                                                <option {{ old('featured') == 1 ? "selected" : "" }} value=1>ویژه
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>وضعیت :</strong>
                                            <select name="enabled" class="browser-default">
                                                <option {{ old('enabled') == 1 ? "selected" : "" }} value=1>فعال
                                                </option>
                                                <option {{ old('enabled') == 0 ? "selected" : "" }} value=0>غیرفعال
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>کامنت :</strong>
                                            <select name="comments_enabled" class="browser-default">
                                                <option {{ old('comments_enabled') == 1  ? "selected" : "" }} value=1>
                                                    فعال
                                                </option>
                                                <option {{ old('comments_enabled') == 0 ? "selected" : "" }} value=0>
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

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="{{asset("/js/dashboard/app.min.js")}}"></script>
    <!-- Custom Js -->
    <script src="{{asset("/js/dashboard/admin.js")}}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <script src="{{ asset('js/dashboard/form.min.js') }}"></script>
    <script src="{{ asset('js/dashboard/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('js/dashboard/bootstrap-colorpicker.js') }}"></script>
    <script src="{{ asset('js/dashboard/advanced-form-elements.js') }}"></script>

    <script src="{{asset("/js/dashboard/bootstrap3-typeahead.js")}}"></script>
    {{--    <script src="{{ asset('/js/dashboard/auto.js') }}"></script>--}}


    {{--    <script>--}}
    {{--        $(document).ready(function () {--}}
    {{--            $('#keyword').autocomplete({--}}
    {{--                source: "{{url('/autocomplete-search')}}",--}}
    {{--            })--}}
    {{--        })--}}
    {{--    </script>--}}
    <script type="text/javascript">
        CKEDITOR.replace('summary-ckeditor', {
            filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });

    </script>
{{--    <script>--}}
{{--        var _token = $('input[name="_token"]').val();--}}

{{--        document.getElementById("keyword").addEventListener("keydown", function (e) {--}}
{{--            var input = e.target.value;--}}

{{--            $.ajax({--}}
{{--                url: "/autocomplete-search",--}}
{{--                method: "POST",--}}
{{--                data: {input: input, _token: _token},--}}
{{--                success: function (response) {--}}
{{--                    console.log(response);--}}
{{--                    var element = response.map(value => {--}}
{{--                            var lielement = document.createElement("li");--}}
{{--                            lielement.textContent = value.tag;--}}
{{--                        }--}}
{{--                    )--}}
{{--                    document.getElementById("autocomplete-input").append(element);--}}


{{--                }--}}
{{--            });--}}
{{--        });--}}


{{--    </script>--}}
    {{--    <script>--}}
    {{--        let expanded = false;--}}

    {{--        const showCheckboxes = () => {--}}
    {{--            const checkboxes = document.getElementById("checkboxes");--}}
    {{--            if (!expanded) {--}}
    {{--                checkboxes.style.display = "block";--}}
    {{--                expanded = true;--}}
    {{--            } else {--}}
    {{--                checkboxes.style.display = "none";--}}
    {{--                expanded = false;--}}
    {{--            }--}}
    {{--        }--}}

    {{--        const selectBox = document.querySelector('.selectBox')--}}
    {{--        selectBox.addEventListener('click', showCheckboxes)--}}
    {{--    </script>--}}
    {{--    <script  type="text/javascript">--}}
    {{--        // CSRF Token--}}
    {{--        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');--}}
    {{--        $(document).ready(function(){--}}

    {{--            $( "#employee_search" ).autocomplete({--}}
    {{--                source: function( request, response ) {--}}
    {{--                    // Fetch data--}}
    {{--                    $.ajax({--}}
    {{--                        url:"{{route('employees.getEmployees')}}",--}}
    {{--                        type: 'post',--}}
    {{--                        dataType: "json",--}}
    {{--                        data: {--}}
    {{--                            _token: CSRF_TOKEN,--}}
    {{--                            search: request.term--}}
    {{--                        },--}}
    {{--                        success: function( data ) {--}}
    {{--                            response( data );--}}
    {{--                        }--}}
    {{--                    });--}}
    {{--                },--}}
    {{--                select: function (event, ui) {--}}
    {{--                    // Set selection--}}
    {{--                    $('#employee_search').val(ui.item.label); // display the selected text--}}
    {{--                    $('#employeeid').val(ui.item.value); // save selected id to input--}}
    {{--                    return false;--}}
    {{--                }--}}
    {{--            });--}}

    {{--        });--}}
    {{--        --}}{{--$(document).ready(function() {--}}
    {{--        --}}{{--    $( "#tags" ).autocomplete({--}}

    {{--        --}}{{--        source: function(request, response) {--}}
    {{--        --}}{{--            $.ajax({--}}
    {{--        --}}{{--                url: "{{url('autocomplete-search')}}",--}}
    {{--        --}}{{--                data: {--}}
    {{--        --}}{{--                    term : request.term--}}
    {{--        --}}{{--                },--}}
    {{--        --}}{{--                dataType: "json",--}}
    {{--        --}}{{--                success: function(data){--}}
    {{--        --}}{{--                    var resp = $.map(data,function(obj){--}}
    {{--        --}}{{--                        return obj.name;--}}
    {{--        --}}{{--                    });--}}

    {{--        --}}{{--                    response(resp);--}}
    {{--        --}}{{--                }--}}
    {{--        --}}{{--            });--}}
    {{--        --}}{{--        },--}}
    {{--        --}}{{--        minLength: 2--}}
    {{--        --}}{{--    });--}}
    {{--        --}}{{--});--}}




    {{--        --}}{{--var route = "{{ url('autocomplete-search') }}";--}}
    {{--        --}}{{--$('#tags').typeahead({--}}
    {{--        --}}{{--    source: function (query, process) {--}}
    {{--        --}}{{--        return $.get(route, {--}}
    {{--        --}}{{--            query: query--}}
    {{--        --}}{{--        }, function (data) {--}}
    {{--        --}}{{--            return process(data);--}}
    {{--        --}}{{--        });--}}
    {{--        --}}{{--    }--}}
    {{--        --}}{{--});--}}
    {{--    </script>--}}

    {{--    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>--}}

    {{--    <script type="text/javascript">--}}
    {{--        var route = "{{ url('autocomplete-search') }}";--}}
    {{--        $('input.typeahead').typeahead({--}}
    {{--            source: function (query, process) {--}}
    {{--                return $.get(route, {--}}
    {{--                    query: query--}}
    {{--                }, function (data) {--}}
    {{--                    return process(data);--}}
    {{--                });--}}
    {{--            }--}}
    {{--        });--}}
    {{--    </script>--}}
@endpush
