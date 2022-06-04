@extends('dashboard.layout.master')

@section('pagetitle','مدیریت تگ ها')


@section('content')
    <section class="content">
        <div class="container-fluid">

            <div class="container z-sub-header z-s-h-min">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card z-card p-2 mt-2 shadow border-0">

                            <h6 class="card-title p-2 text-center mt-2" style="color: #654A6C; font-size: 27px;"> تگ
                                ها</h6>
                            <div class="card-body border-0">
                                <div id="message"></div>
                                <hr>
                                <table class="table table-bordered data-table">
                                    <thead>
                                    <tr>
                                        <th class="th-rol">شماره</th>
                                        <th class="th-rol">عنوان</th>
                                        <th class="th-rol">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="tag-table">
                                    <tr>
                                        <td id="counter"></td>
                                        <td contenteditable id="tag"></td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-xs" id="add">ثبت</button>
                                        </td>
                                    </tr>
                                    @php
                                        $i = 0;
                                    @endphp
                                    <div>
                                        @foreach($tags as $tag)
                                            <tr id="tag-{{$tag->id}}">
                                                <td> {{++$i}}</td>
                                                <td contenteditable><input type="text" class="column_name border-0 m-0"
                                                                           data-column_name="tag"
                                                                           data-id="{{$tag->id}}"
                                                                           value="{{$tag->tag}}"/></td>
                                                <td>
                                                    <i class="material-icons fa-2x delete" id="{{$tag->id}}">delete</i>
{{--                                                    <i class=" ti-trash fa-2x delete red-text"--}}
{{--                                                                  id="{{$tag->id}}">--}}
{{--                                                        </i>--}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </div>
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

    <script src="{{asset("/js/dashboard/tag.js")}}"></script>

@endpush
