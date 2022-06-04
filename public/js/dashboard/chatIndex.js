
    var _token = $('input[name="_token"]').val();


    $(document).on('click', '#add', function () {
        var tag = $('#tag').text();
        if (tag != '') {
            $.ajax({
                url: "/dashboard/tag/create",
                method: "POST",
                data: {tag: tag, _token: _token},
                success: function (response) {
                    if (response) {
                        var table = document.getElementById("tag-table");
                        var table_len = (table.rows.length);
                        $("#tag-table ").append('<tr id="tag-' + response.id + '" ><td>' + table_len + '</td><td contentEditable class="column_name" data-column_name="tag"  data-id= ' + response.id + '>' + response.tag + '</td><td><button type="button" class="btn btn-danger btn-xs delete" id=' + response.id + '>حذف</button></td></tr>');
                        $("#tag").empty();
                    }
                }
            });
        } else {
            $('#message').html("<div class='alert alert-danger'>لطفا نام تگ را وارد کنید</div>");
        }
    });

    $(document).on('blur', '.column_name', function () {
        var column_name = $(this).data("column_name");
        var column_value = $(this).text();
        var id = $(this).data("id");

        if (column_value != '') {
            $.ajax({
                url: "/dashboard/tag/update",
                method: "PUT",
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
                url: "/dashboard/tag/delete",
                method: "POST",
                data: {id: id, _token: _token},
                success: function (data) {
                    $("#tag-" + id).remove();

                    Swal.fire(
                        'Remind!',
                        'category deleted successfully!',
                        'success'
                    )
                }
            });
        }
    });

