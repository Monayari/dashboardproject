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
                                <hr>
                                <table class="table table-bordered data-table">
                                    <thead>
                                    <tr>
                                        <th>شماره</th>
                                        <th class="th-rol">عنوان</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                                {{ csrf_field() }}
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
    <script>
        $(document).ready(function () {

            fetch_data();

            function fetch_data() {
                $.ajax({
                    url: "/livetable/fetch_data",
                    dataType: "json",
                    success: function (data) {
                        var html = '';
                        html += '<tr>';
                        html += '<td contenteditable id="counter"></td>';
                        html += '<td contenteditable id="tag"></td>';
                        html += '<td><button type="button" class="btn btn-success btn-xs" id="add">Add</button></td></tr>';
                        for (var count = 0; count < data.length; count++) {
                            var tmp = count+1 ;
                            html += '<tr>';
                            html += '<td > '+ tmp +'</td>';
                            html += '<td contenteditable class="column_name" data-column_name="tag" data-id="' + data[count].id + '">' + data[count].tag + '</td>';
                            html += '<td><button type="button" class="btn btn-danger btn-xs delete" id="' + data[count].id + '">Delete</button></td></tr>';
                        }
                        $('tbody').html(html);
                    }
                });
            }

            var _token = $('input[name="_token"]').val();

            $(document).on('click', '#add', function () {
                var tag = $('#tag').text();
                if (tag != '') {
                    $.ajax({
                        url: "{{ route('tcreate') }}",
                        method: "POST",
                        data: {tag: tag, _token: _token},
                        success: function (data) {
                            $('#message').html(data);
                            fetch_data();
                        }
                    });
                } else {
                    $('#message').html("<div class='alert alert-danger'>Both Fields are required</div>");
                }
            });

            $(document).on('blur', '.column_name', function () {
                var column_name = $(this).data("column_name");
                var column_value = $(this).text();
                var id = $(this).data("id");

                if (column_value != '') {
                    $.ajax({
                        url: "{{ route('tupdate') }}",
                        method: "POST",
                        data: {column_name: column_name, column_value: column_value, id: id, _token: _token},
                        success: function (data) {
                            $('#message').html(data);
                        }
                    })
                } else {
                    $('#message').html("<div class='alert alert-danger'>Enter some value</div>");
                }
            });

            $(document).on('click', '.delete', function () {
                var id = $(this).attr("id");
                if (confirm("Are you sure you want to delete this records?")) {
                    $.ajax({
                        url: "{{ route('tdelete') }}",
                        method: "POST",
                        data: {id: id, _token: _token},
                        success: function (data) {
                            $('#message').html(data);
                            fetch_data();
                        }
                    });
                }
            });


        });
    </script>

@endpush
