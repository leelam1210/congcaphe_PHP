function loading(type){
    if(parseInt(type) === 1){
        $('.ajax-loading').show()
    }
    else{
        $('.ajax-loading').hide();
    }
}

$(document).ready(function () {
    $("#register-mail").click(function () {
        loading(1);
        let email = $(this).parent().find("#email-user").val();
        $.ajax({
            url : urlMail,
            type: 'POST',
            data: {email : email},
            success: function (res) {
                loading();
                let data = JSON.parse(res);
                alert(data.message);
            }
        })
    })
})