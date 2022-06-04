
var _token = $('input[name="_token"]').val();

$(document).on('click', '.delete', function () {
    var id = $(this).attr("id");

    swal({
            title: "آیا مطمئن هستید ؟",
            type: "error",
            confirmButtonClass: "btn-danger",
            confirmButtonText: "حذف!",
            showCancelButton: true,
        },
        function () {
            $.ajax({
                url: "/dashboard/project/delete",
                method: "POST",
                data: {id: id, _token: _token},
                success: function (response) {
                    $("#project-" + id).remove();
                    Swal.fire(
                        'حذف با موفقیت انجام شد',
                        '',
                        'success'
                    )
                }
            });
        });
});

