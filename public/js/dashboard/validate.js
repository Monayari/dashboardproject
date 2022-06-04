$(document).ready(function () {


    $("#user").validate({
        rules: {
            name: {
                // reg: /^[a-zA-Z]{2,20}$/,
                required: true,

                maxlength: 20,
            },

            email: {
                required: true,

                email: true,
                maxlength: 50
            },
            phone_number: {
                required: true,
                //  reg: /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/,

                minlength: 10,
                maxlength: 10,
                number: true
            },
            password: {
                required: true,
                minlength: 8
            },

        },

          messages: {

        // reg: /^(?!\s*$).+/,
        // error: "Message field cannot be empty.",}
             name: {
                 required: "لطفا نام را وارد کنید",
                maxlength: "نام نباید بیش از 20کاراکتر باشد",
             },

             email: {
                required: "ایمیل را وارد کنید",
                 email: "ایمیل تکراری است",
                maxlength: "ایمیل نباید بیشتر از 50 کاراکتر باشد",
            },
             phone_number: {
                required: "شماره تلفن را وارد کنید",
                 minlength: "شماره تلفن باید 10 رقم باشد"
             },
            password: {
                required: "پسورد را وارد کنید",
                 minlength: "پسورد نباید کمتر از 5 کراکتر باشد",
            }

         }

        
      
      /*  highlight: function (input) {
            $(input).parents('.form-group').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-group').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.form-group').append(error);
        }*/

    });

});

;                   //update validation
$(document).ready(function () {

    $("#userformedite").validate({
        rules: {
            name: {
                // reg: /^[a-zA-Z]{2,20}$/,
                required: true,

                maxlength: 20,
            },

            email: {
                required: true,

                email: true,
                maxlength: 50
            },
            phone_number: {
                required: true,
                //                 //  reg: /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/,

                // minlength: 10,
                maxlength: 11,
                number: true
            },
            password: {
                required: true,
                minlength: 8
            },

        },

        messages: {

            name: {
                required: "لطفا نام را وارد کنید",
                maxlength: "طول نباید بیشاز 20 کاراکتر باشد"
            },

            email: {
                required: "لطفا ایمیل را وارد کنید",
                email: "ایمیل تکراری است",
                maxlength: "طول ایمیل نباید بیشتر از 50 کتراکتر باشد",
            },
            phone_number: {
                required: "لطفا شماره تماس را وارد کنید",
                minlength: "شماره تماس باید 10 رقم باشد"
            },
            password: {
                required: "لطفا پسورد را وارد کنید",
                minlength: "طول پسورد باید 8 کراکتر باشد"
            }
        }
    });


});




//comment validate
$(document).ready(function () {

    $("#commentform").validate({
        rules: {
            is_replay_to_id: {
                // reg: /^[a-zA-Z]{2,20}$/,
                required: true,


            },

            comment: {

                required: true,

            },
            enable: {

                required: true,
            },

        },

        messages: {

            is_replay_to_id: {
                required: "لطفا فیلد را پر کنید",
            },

            comment: {
                required: "لطفا کامنت بگذارید",
            },

        }

    });

});


//comment update validate

$(document).ready(function () {

    $("#CommentEditModal").validate({
        rules: {
            is_replay_to_id: {
                
                required: true,


            },

            comment: {

                required: true,

            },
            enable: {

                required: true,
            },

        },

        messages: {

            is_replay_to_id: {
                required: "لطفا فیلد را پر کنید",
            },

            comment: {
                required: "لطفا کامنت بگذارید",
            },

        }

    });

});