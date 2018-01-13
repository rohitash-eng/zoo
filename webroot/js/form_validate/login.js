$(function () {
    $("#loginFormValidate").validate({
        ignore: '',
        errorElement: 'div',
        errorClass: 'error-message error',
        onfocusout: function (element) {
            this.element(element);
        },
        rules: {
            "email": {required: true},
            "password": {required: true}
        },
        errorPlacement: function (error, element) {

            if (element.attr("name") == "is_agree") {
                error.insertAfter($("#br_agreeError"));
            } else {
                error.insertAfter(element);
            }

        },
        messages: {
            password: {
                equalTo: "This field is required!"
            }
        },
        success: function () {

        },
        submitHandler: function (form) {
            $('.loginclass').attr('disabled', 'disabled');
            form.submit();
        },

    });
});


