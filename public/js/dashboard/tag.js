var _token = $('input[name="_token"]').val();


$(document).on('click', '#add', function () {
    $('#message').html("");
    var tag = $('#tag').text();
    var letters = new RegExp("^[\u0600-\u06FF0-9 ]+$");
    if (tag != '') {
        if (tag.match(letters)) {
            $.ajax({
                url: "/dashboard/tag/create",
                method: "POST",
                data: {tag: tag, _token: _token},
                success: function (response) {
                    if (response) {
                        var table = document.getElementById("tag-table");
                        var table_len = (table.rows.length);
                        $("#tag-table ").append('<tr id="tag-' + response.id + '" ><td>' + table_len + '</td><td contenteditable><input type="text" class="column_name border-0 m-0" data-column_name="tag" data-id="' + response.id +'" value="' + response.tag +'" /></td><td> <i class=" material-icons fa-2x delete"\n' +
                            '                                                                  id=' + response.id + '>\n' +
                            '                                                       delete </i></td></tr>');
                        $("#tag").empty();
                        Swal.fire(
                            'تگ ایجاد شد',
                            '',
                            'success'
                        )
                    }
                }
            });
        } else {
            $('#message').html("<div class='alert alert-danger'>لطفا عنوان تگ را درست وارد کنید</div>");
        }
    } else {
        $('#message').html("<div class='alert alert-danger'>لطفا عنوان تگ را وارد کنید</div>");
    }
});

$(document).on('change', '.column_name', function () {
    $('#message').html("");
    var column_name = $(this).data("column_name");
    var column_value =  $(this)[0].value;

    var letters = new RegExp("^[\u0600-\u06FF0-9]+$");
    var id = $(this).data("id");
    if (column_value != '') {
        if (column_value.match(letters)) {
            $.ajax({
                url: "/dashboard/tag/update",
                method: "PUT",
                data: {column_name: column_name, column_value: column_value, id: id, _token: _token},
                success: function (response) {
                    Swal.fire(
                        'اطلاعات ویرایش شد',
                        '',
                        'success'
                    )
                }
            })
            } else {
                $('#message').html("<div class='alert alert-danger'>لطفا عنوان تگ را درست وارد کنید!</div>");
            }
        } else {
            $('#message').html("<div class='alert alert-danger'>عنوان را وارد کنید!</div>");
        }
    }
);

$(document).on('click', '.delete', function () {
    $('#message').html("");
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
                url: "/dashboard/tag/delete",
                method: "POST",
                data: {id: id, _token: _token},
                success: function (data) {
                    $("#tag-" + id).remove();

                    Swal.fire(
                        'حذف با موفقیت انجام شد',
                        '',
                        'success'
                    )
                }
            });
        });
});

