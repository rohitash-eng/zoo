$(function () {
    $("#signupFormid").validate({
        ignore: '',
        errorElement: 'div',
        errorClass: 'error-message error',
        onfocusout: function (element) {
            this.element(element);
        },
        rules: {
            "password": {required: true, isAlphaNum: true},
            "confirm_password": {required: true, isAlphaNum: true, equalTo: "#confirm-password"}
        },
        errorPlacement: function (error, element) {

            if (element.attr("name") == "is_agree") {
                error.insertAfter($("#br_agreeError"));
            } else {
                error.insertAfter(element);
            }

        },
        messages: {
            confirm_password: {
                equalTo: "Password and confirm password do not match."
            }
        },
        success: function () {

        },
        submitHandler: function (form) {
            $('.signclass').attr('disabled', 'disabled');
            form.submit();
        },

    });
});


