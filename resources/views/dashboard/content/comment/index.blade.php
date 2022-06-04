@extends('dashboard.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="container z-sub-header z-s-h-min">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card z-card p-2 mt-2 shadow border-0">

                        <h6 class="card-title p-2 text-center mt-2" style="color: #654A6C; font-size: 27px;">
                            لیست کامنت ها
                        </h6>
                        <div class="card-header">
                            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#userModal">Add New Comment</a>
                        </div>
                        <div class="card-body border-0">


                            <table class="table table-bordered data-table" id="commenttable">

                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th class="th-email">reply</th>
                                        <th class="th-rol">comment</th>
                                        <th>enable</th>
                                        <th>user_id</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($comment as $comment)
                                    <tr id="user-{{$comment->id}}">
                                        <td>{{$comment->id }}</td>
                                        <td>{{$comment->is_replay_to_id }}</td>
                                        <td>{{$comment->comment }}</td>
                                        <td>
                                            @if($comment->enable==1)
                                            فعال

                                            @else

                                            غیرفعال


                                            @endif
                                        </td>
                                        <td>{{$comment->user_id}}</td>
                                        <td>
                                            <button onclick="editrecord({{$comment->id}})"><i class="material-icons">mode_edit</i></button>
                                            <button onclick="deleterecord({{ $comment->id }})"><i class="material-icons">delete_sweep</i></button>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>

                        </div>
</section>
<!-- insert modal comment -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModellable" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModallable">Add New Comment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-lable="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error )
            <li>{{$error}}</li>
            @endforeach
        </ul>
        <div class="alert alert-danger myalert">
        @endif
    </div>
                <form id="commentform" class="myform">
                    @csrf

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>پاسخ :</strong>

                            <input type="text" name="is_replay_to_id" id="is_replay_to_id" class="form-control myinput" placeholder="is_replay_to_id">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>موضوع:</strong>
                            <input type="text" name="comment" id="comment" class="form-control myinput" placeholder="comment">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>وضعیت:</strong>
                            <select name="enable" id="enable" class="form-control ">
                                <option value="1">فعال</option>
                                <option value="0">غیرفعال</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" id="save" onclick="insertcomment()" class="mybtn">ثبت نام</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- update modal comment -->

<div class="modal fade" id="CommentEditModal" tabindex="-1" aria-labelledby="exampleModellable" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModallable">UPDATE COMMENT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-lable="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error )
            <li>{{$error}}</li>
            @endforeach
        </ul>
        <div class="alert alert-danger myalert">
        @endif
    </div>
                <form id="commentformedit" class="myform">
                    @csrf
                    <input type="hidden" id="id" name="id">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>پاسخ :</strong>
                            <input type="text" name="is_replay_to_id" id="is_replay_to_id2" class="form-control myinput" placeholder="is_replay_to_id">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>موضوع:</strong>
                            <input type="text" name="comment" id="comment2" class="form-control myinput" placeholder="comment">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>وضعیت:</strong>
                            <select name="enable" id="enable2" class="form-control ">
                                <option value="1">فعال</option>
                                <option value="0">غیرفعال</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" id="save" onclick="update()" class="mybtn">ثبت نام</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
@push('scripts')

<script src="{{asset('/js/dashboard/sweetalert2@9.js')}}"></script>

<script src="{{asset('/js/dashboard/comment.js')}}"></script>
<script src="{{asset('/js/dashboard/app.min.js')}}"></script>
<script src="{{asset('/js/dashboard/admin.js')}}"></script>
<script src="{{asset('/js/dashboard/validate.js')}}"></script>
@endpush
