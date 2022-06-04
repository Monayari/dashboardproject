@extends('dashboard.layout.master')

@section('pagetitle','مدیریت پروژه ها')


@section('content')
    <section class="content">
        <div class="container-fluid">

            <div class="container z-sub-header z-s-h-min">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card z-card p-2 mt-2 shadow border-0">

                            <h6 class="card-title p-2 text-center mt-2" style="color: #654A6C; font-size: 27px;"> پروژه
                                ها</h6>

                            <div class="card-body border-0">
                                <hr>
                                <table class="table table-bordered data-table">
                                    <thead>
                                    <tr>
                                        <th>شماره</th>
                                        <th class="th-rol">عنوان</th>
                                        <th class="th-rol">تاریخ</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach($projects as $project)
                                            <tr id="project-{{$project->id}}">
                                            <td>{{$i+1}}</td>
                                            <td><a
                                                    href="{{route("projects.show" , ['id' => $project->id])}}"> {{$project->title}} </a>
                                            </td>
                                                <td>{{$date[$i++]}}</td>
                                            <td>
                                                <a href="{{route("projects.edit" , ['id' => $project->id])}}"> <i class="material-icons"
                                                                                                                  id="{{$project->id}}">
                                                        mode_edit</i></a>

                                               <i class="material-icons fa-2x delete"
                                                              id="{{$project->id}}">
                                                   delete </i>

                                            </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            {{ csrf_field() }}
                                <!-- <div class="pull-right">  -->
                                <a class="btn btn-primary btn-create" href="{{route("projects.add")}}">ایجاد پروژه </a>
                                <!-- </div>  -->

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
    <script src="{{asset("/js/dashboard/dashboard2.js")}}"></script>
    <script src="{{asset("/js/dashboard/project.js")}}"></script>
@endpush
