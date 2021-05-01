$(document).ready(function () {
    jQuery.validator.addMethod("exactlength", function(value, element, param) {
        return this.optional(element) || value.length == param;
    }, $.validator.format("Vui lòng nhập đúng {0} ký tự."));
    function checkEnterInput(form){
        let buttonSubmit = $(`#${form}`).find('button');
        $(`#${form}`).find('.form-group input').each(function (index, element) {
            $(element).keypress(function (e) {
                let keyCode = e.keyCode ? e.keyCode : '';
                if (keyCode == '13'){
                    buttonSubmit.click();
                }
            })
        });
    }

    $("#form-login-user").validate({
        ignore: [],
        rules: {
            email:{
                required: true,
                email: true
            },
            password:{
                required: true,
                minlength: 6
            }
        },
    });
    $("#form-change-password").validate({
        ignore: [],
        rules: {
            old_password:{
                required: true,
            },
            password:{
                required: true,
                minlength: 6
            }
        },
    });
    $("#form-register").validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
            password:{
                minlength: 6,
                required: true,
            },
            password_confirm: {
                minlength: 6,
                equalTo: "#inputPasswordNew",
                required: true,
            }
        },
    });
    $("#form-forgot").validate({
       rules: {
           email: {
               required: true,
               email: true,
           }
       }
    });
    $("#form-feedback").validate({
       rules: {
           name_customer: {
               required: true,
           },
           phone_number: {
               required: true,
               number: true,
               exactlength: 10,
           },
           email_customer: {
               required: true,
               email: true,
           },
           title_feedback: {
               required: true,
           },
           content_feedback: {
               required: true,
           }
       }
    });

    $("#form-booking").validate({
        rules: {
            name: {
                required: true,
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                exactlength: 10,
            }
        }
    });
    checkEnterInput('form-booking');
    checkEnterInput('form-feedback');
    checkEnterInput('form-forgot');
    checkEnterInput('form-register');
    checkEnterInput( 'form-login-user');
    checkEnterInput('form-change-password');
})