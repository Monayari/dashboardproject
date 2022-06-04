

function deleterecord(id) {
    if (confirm("do you want realy delete record?")) {


        $.ajax({
            url: "/dashboard/user/" + id,
            type: 'DELETE',
            data: {


                 "_token":$('input[name="_token"]').val()
            },
               
                success: function(response) {
                $("#user-" + id).remove();

}

        });
}
}
