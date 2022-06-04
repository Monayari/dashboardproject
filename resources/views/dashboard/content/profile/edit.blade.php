@extends('dashboard.layout.master')
<section class="page">

    @section('content')


        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error )
            <li>{{$error}}</li>
            @endforeach
        </ul>
        <div class="alert alert-danger myalert">
        @endif
    </div>

    <div class="fields">

        <form action="/dashboard/profile/{{$profile->id}}/edit" method="POST" enctype="multipart/form-data" class="myform">
            @csrf
            @method('put')
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>نام :</strong>
                    
                    <input type="text" name="first_name" value="{{$profile->first_name}}" class="form-control myinput" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>نام خانوادگی:</strong>
                    <input type="text" name="last_name" value="{{$profile->last_name}}" class="form-control myinput" placeholder="Email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>بیوگرافی:</strong>
                    <input type="text" name="biography" value="{{$profile->biography}}" class="form-control myinput" placeholder="biography">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>علاقه مندی:</strong>
                    <input type="text" name="favoraite" value="{{$profile->favoraite}}" class="form-control myinput" placeholder="favoraite">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>عکس:</strong>
                    <input type="file" name="img" value="{{$profile->img}}" class="form-control" placeholder="image">
                </div>
            </div>

            
                                
            <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>استان:</strong>
                                     <select class="form-control" name="province_id" id="province-drop">
                                         <option value="">انتخاب استان</option>
                                         @foreach($province as $province)
                                         <option  value="{{$province->id}}">{{$province->name}}</option>
                                         @endforeach
</select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>شهر:</strong>
                                     <select class="form-control" name="citie_id" id="city">
                                     </select>
                                    </div>
                                </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="mybtn">ویرایش</button>
            </div>
        </form>
      
    </div>
</section>
@endsection
@push('scripts')

<script>

$(document).ready(function() {
    
    $('#province-drop').on('change', function() {
    var province_id = this.value;
    $("#city").html('');
    $.ajax({
      url: "/dashboard/profile/city",
    type: "POST",
    data: {
    province_id: province_id,
    _token: '{{csrf_token()}}'
    },
    dataType : 'json',
    success: function(result){
    $.each(result.cities,function(key,value){
    $("#city").append('<option value="'+value.id+'">'+value.name+'</option>');
    });
    }
    });
    });
    });
</script>
<script src="{{asset('/js/dashboard/app.min.js')}}"></script>
<script src="{{asset('/js/dashboard/admin.js')}}"></script>

@endpush
