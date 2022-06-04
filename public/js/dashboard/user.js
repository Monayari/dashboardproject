
function deleterecord(id) {
    


swal({

    title:'ایا از حذف مطمئن هستید',
    type:'error',
    confirmButtonClass:"btn-danger",
    confirmButtonText:"حذف",
    showCancelButton:true,

  
},

function(){
        $.ajax({
            url: "/dashboard/user/" + id,
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {

                _token: $('meta[name="csrf-token"]').attr('content'),
            },
        

            success: function (response) {
                $("#user-" + id).remove();
                Swal.fire(
                    'حذف!',
                    'کاربر با موفقیت حذف شد!',
                    'success'
                )
    
            }
        });
        });
    }

// insert record
function Insertrecord() {
    $("#user").submit(function (e) {

        e.preventDefault();

        $("#save").text('ثبت شد')

        let name = $("#name").val();
        let email = $("#email").val();
        let password = $("#password").val();
        let phone_number = $("#phone_number").val();
		let role =$("#role").val();
        let _token = $('meta[name="csrf-token"]').val();


        $.ajax({

            url: "/dashboard/user",
            type: "POST",

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },


            data: {
                name: name,
                email: email,
                phone_number: phone_number,
                password: password,
				role:role,
                _token: $('meta[name="csrf-token"]').attr('content'),


            },
            success: function (response) {

                if (response) {

                    $("#usertable tbody").prepend('<tr id="user-'+response.id+'"><td>' + response.id + '</td><td>' + response.name + '</td><td>' + response.email + '</td><td>' + response.phone_number + '</td><td>' + response.role + '</td><td>  <button onclick="editrecord(' + response.id + ')"><i class="material-icons">mode_edit</i></button><button onclick="deleterecord(' + response.id + ')"><i class="material-icons">delete_sweep</i></button> <a href="/dashboard/' + response.id + '/show-user-profile"><i class="material-icons">visibility</i></a></td></tr>');


                    $("#user")[0].reset();
                    $("#userModal").modal('hide');

                Swal.fire(
                    'ثبت!',
                    'کاربر با موفقیت ثبت شد!',
                    'success'
                )
                }
            }
        });
    });
}


//update record
function editrecord(id) {
    $.get('/dashboard/user/' + id, function (user) {

        $("#id").val(user.id);
        $("#name1").val(user.name);
        $("#email1").val(user.email);
        $("#phone_number1").val(user.phone_number);
        $("#password1").val(user.password);
        $("#role").val(user.role);
        $("#edituserModal").modal('toggle');

    });
}
function update() {
    $("#userformedite").submit(function (e) {

        e.preventDefault();
        let id = $("#id").val();
        let name = $("#name1").val();
        let email = $("#email1").val();
        let password = $("#password1").val();
        let phone_number = $("#phone_number1").val();
      let role = $("#role").val();
    
        // let role = $("#role option:selected").val();
        let _token = $('meta[name="csrf-token"]').val();

        $.ajax({

            url: "/dashboard/user",
            type: "PUT",

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            data: {
                id: id,
                name: name,
                email: email,
                phone_number: phone_number,
                password: password,
              role: role,
                _token: $('meta[name="csrf-token"]').attr('content'),

            },

            success: function (response) {

                $('#user-'+response.id+' td:nth-child(1)').html(response.id);
                $('#user-'+response.id+' td:nth-child(2)').html(response.name);
                $('#user-'+response.id+' td:nth-child(3)').html(response.email);
                $('#user-'+response.id+' td:nth-child(4)').html(response.phone_number);

                $('#user-'+response.id+' td:nth-child(5)').html(response.role);

                $("#edituserModal").modal('hide');
                $("#userformedite")[0].reset();


                Swal.fire(
                    'ویرایش!',
                    'کاربر با موفقیت ویرایش شد!',
                    'success'
                )
            }
        });
    });

}
