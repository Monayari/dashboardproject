@extends('dashboard.layout.master')

@section('pagetitle','مدیریت دسته بندی ها')


@section('content')
    <section class="content">
        <div class="container-fluid">

            <div class="container z-sub-header z-s-h-min">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card z-card p-2 mt-2 shadow border-0">

                            <h6 class="card-title p-2 text-center mt-2" style="color: #654A6C; font-size: 27px;"> دسته
                                بندی
                                ها</h6>

                            <div class="card-body border-0">
                                <div id="message"></div>
                                <hr>
                                <table class="table table-bordered data-table">
                                    <thead>
                                    <tr>
                                        <th>شماره</th>
                                        <th class="th-rol">نام</th>
                                        <th class="th-rol">وضعیت</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="category-table">
                                    <tr>
                                        <td id="counter"></td>
                                        <td contenteditable id="name"></td>
                                        <td contenteditable>
                                            <div class="switch"><label> <input type="checkbox" id="enabled"
                                                                               name="enabled"> <span
                                                        class="lever switch-col-green"></span> </label></div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-xs" id="add">ثبت</button>
                                        </td>
                                    </tr>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach($categories as $category)
                                        @php
                                            if($category->enabled == 1)
                                                $enabled = 'checked';
                                            else
                                                $enabled = '';
                                        @endphp
                                        <tr id="category-{{$category->id}}" >
                                            <td>{{++$i}}</td>
                                            <td contenteditable><input type="text" class="column_name border-0 m-0"
                                                                       id="name_row-{{$category->id}}"
                                                                       data-column_name="name"
                                                                       data-id="{{$category->id}}"
                                                                       value="{{$category->name}}"/></td>

                                            <td contenteditable >
                                                <div class="switch"><label> <input id="enabled-{{$category->id}}"
                                                                                   type="checkbox" {{$enabled}} class="column_name" data-column_name="enabled"
                                                                                   data-id="{{$category->id}}"> <span
                                                            class="lever switch-col-green"></span> </label></div>

                                            </td>
                                            <td>
                                                <i class=" material-icons fa-2x delete"
                                                   id="{{$category->id}}">
                                                delete</i>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ csrf_field() }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script src="{{asset("/vendor/sweetalert/sweetalert.all.js")}}"></script>

    <script src="{{asset("/js/dashboard/app.min.js")}}"></script>
    <!-- Custom Js -->
    <script src="{{asset("/js/dashboard/admin.js")}}"></script>

    <script src="{{asset("/js/dashboard/category.js")}}"></script>

@endpush
