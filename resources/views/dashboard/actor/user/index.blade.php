@extends('dashboard.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="container z-sub-header z-s-h-min">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card z-card p-2 mt-2 shadow border-0">

                        <h6 class="card-title p-2 text-center mt-2" style="color: #654A6C; font-size: 27px;">
                            نمایش اطلاعات
                        </h6>
                        <div class="card-header">
						  @can('isadmin')
                            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#userModal">Add New user</a>
							@endcan
							
							
                            @can('isadmin')
                            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#userModal">Add New user</a>
                            @endcan
                        </div>
                        <div class="card-body border-0">


                            <table class="table table-bordered data-table" id="usertable">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th class="th-email">Email</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(Auth::user()->role == 'modir'|| Auth::user()->role=='admin')
                                    @foreach($user as $user)
                                    <tr id="user-{{$user->id}}">
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{$user->phone_number }}</td>
                                        <td>{{$user->role}}</td>
                                        <td>
                                            <button onclick="editrecord({{$user->id}})"><i class="material-icons">mode_edit</i></button>

                                            <button onclick="deleterecord({{ $user->id }})"><i class="material-icons">delete_sweep</i></button>
                                            <a href="/dashboard/{{$user->id}}/show-user-profile"><i class="material-icons">visibility</i></a>

                                        </td>

                                    </tr>
                                    @endforeach
                                    @else
                                    <tr id="user-{{$user->id}}">
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{$user->phone_number }}</td>
                                        <td>{{$user->role}}</td>
                                        <td>
                                            <button onclick="editrecord({{$user->id}})"><i class="material-icons">mode_edit</i></button>
                                                <button onclick="deleterecord({{ $user->id }})"><i class="material-icons">delete_sweep</i></button>
                                                <a href="profile/{{$user->id}}/show-user-profile"><i class="material-icons">visibility</i></a>

                                        </td>

                                    </tr>
                                    @endif
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
</section>
<!-- add modal user -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModellable" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModallable">Add New User</h5>
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
    
                <form id="user" action="" autocomplete="off" class="myform">
                    @csrf
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>نام :</strong>
                            <input type="text" name="name" id="name" autocomplete="off" class="form-control myinput" placeholder="Name">

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ایمیل:</strong>
                            <input type="text" name="email" autocomplete="off" id="email" class="form-control myinput" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>رمزعبور:</strong>
                            <input type="password" name="password"  autocomplete="off" id="password" class="form-control myinput" placeholder="Password">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>شماره تماس:</strong>
                            <input type="text" name="phone_number" autocomplete="false" id="phone_number" class="form-control myinput" placeholder="Phone">
                        </div>
                    </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>نوع کاربری:</strong>
   @can('ismodir')
   <select name="role" id=role class="form-control">

<option value="user">user</option>
<option value="modir">modir</option>
<option value="admin">admin</option>
<option value="architect">architect</option>
                            </select>
@endcan


  @can('isadmin')
   <select name="role" id=role class="form-control">

<option value="user">user</option>

<option value="architect">architect</option>
                            </select>
@endcan
                          
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" id="save" onclick="Insertrecord()" class="mybtn">ثبت نام</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- edit modal user -->

<div class="modal fade" id="edituserModal" tabindex="-1" aria-labelledby="exampleModellable" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModallable">UPDATE USER</h5>
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

                <form id="userformedite" action="" class="myform">
                    @csrf

                    <input type="hidden" id="id" name="id">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>نام :</strong>
                            <input type="text" name="name" id="name1" class="form-control myinput" placeholder="Name">

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ایمیل:</strong>
                            <input type="text" name="email" id="email1" class="form-control myinput" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>رمزعبور:</strong>
                            <input type="password" name="password" id="password1" class="form-control myinput" placeholder="Password">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>شماره تماس:</strong>
                            <input type="text" name="phone_number" id="phone_number1" class="form-control myinput" placeholder="Phone">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>نوع کاربری:</strong>
   @can('ismodir')
   <select name="role" id=role class="form-control">

<option value="user">user</option>
<option value="modir">modir</option>
<option value="admin">admin</option>
<option value="architect">architect</option>
                            </select>
@endcan


  @can('isadmin')
   <select name="role" id=role class="form-control">

<option value="user">user</option>

<option value="architect">architect</option>
                            </select>
@endcan
                          
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
<script src="{{asset('/js/dashboard/jquery.validate.min.js')}}"></script>
<script src="{{asset('/js/dashboard/sweetalert2@9.js')}}"></script>
<script src="{{asset('/js/dashboard/user.js')}}"></script>
<script src="{{asset('/js/dashboard/validate.js')}}"></script>
<script src="{{asset('/js/dashboard/app.min.js')}}"></script>
<script src="{{asset('/js/dashboard/admin.js')}}"></script>


@endpush
