var _token = $('input[name="_token"]').val();

$(document).on('click', '#add', function () {
    $('#message').html("");
    var name = $('#name').text();
    var enabled = document.getElementById("enabled");
    var letters = new RegExp("^[\u0600-\u06FF0-9 ]+$");

    if (!enabled.checked)
        enabled = 'false';
    else
        enabled = 'true';
    if (name != '' && enabled != '') {
        if (name.match(letters)) {
            $.ajax({
                url: "/dashboard/category/create",
                method: "POST",
                data: {name: name, enabled: enabled, _token: _token},
                success: function (response) {
                    if (response) {
                        var table = document.getElementById("category-table");
                        var table_len = (table.rows.length);
                        if (response.enabled == 1)
                            var enabled = 'checked';
                        else
                            var enabled = '';
                        $("#category-table").append('<tr id="category-' + response.id + '" ><td>' + table_len + '</td><td contentEditable><input type="text" class="column_name border-0 m-0" data-column_name="name" data-id="' + response.id + '" value = "' + response.name + '" /></td> <td contenteditable class="column_name" data-column_name="enabled"\n' +
                            '                                                data-id=' + response.id + '>\n' +
                            '                                                <div class="switch"><label> <input id="enabled-' + response.id + '" type="checkbox" ' + enabled + '> <span\n' +
                            '                                                            class="lever switch-col-green"></span> </label></div>\n' +
                            '\n' +
                            '                                            </td><td><i class=" material-icons fa-2x delete"\n' +
                            '                                                                  id=' + response.id + '>\n' +
                            '                                                       delete </i></td></tr>');
                        $("#name").empty();
                        $("#enabled").prop("checked", false);
                        Swal.fire(
                            'دسته بندی ایجاد شد',
                            '',
                            'success'
                        )

                    }
                }
            });
        } else {
            $('#message').html("<div class='alert alert-danger'>لطفا نام دسته بندی را درست وارد کنید!</div>");
        }
    } else {
        $('#message').html("<div class='alert alert-danger'>نام دسته بندی را وارد کنید!</div>");
    }
});

$(document).on('change', '.column_name', function (event) {
    $('#message').html("");
    var id = $(this).data("id");
    var column_name = $(this).data("column_name");
    var letters = new RegExp("^[\u0600-\u06FF0-9 ]+$");

    if (column_name == 'enabled') {
        var enabled = 'enabled-' + +id;
        var column_value = document.getElementById(enabled);
        if (!column_value.checked)
            column_value = 'false';
        else
            column_value = 'true';
    }
    if(column_name == "name"){
        var column_value = $(this)[0].value;
        if (!column_value.match(letters)) {
            $('#message').html("<div class='alert alert-danger'>لطفا نام دسته بندی را درست وارد کنید!</div>");
            return false;
        }
    }
    if (column_value != '') {
        $.ajax({
            url: "/dashboard/category/update",
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
        $('#message').html("<div class='alert alert-danger'>مقداری را ورد کنید!</div>");
    }
});

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
                url: "/dashboard/category/delete",
                method: "POST",
                data: {id: id, _token: _token},
                success: function (response) {
                    $("#category-" + id).remove();
                    Swal.fire(
                        'حذف با موفقیت انجام شد',
                        '',
                        'success'
                    )
                }
            });
        });
});
