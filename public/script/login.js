function login_user(){


    var token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        type: "POST",
        url: "/login",
        headers: {
            'X-CSRF-TOKEN': token,

        },
        data: $('form#login_form').serialize(),
        dataType: 'JSON',
        success: function(data) {


            if(data.success == "error"){
                var values = '';
                jQuery.each(data.message, function (key, value) {
                    values += value+"<br>"
                });
                $(".message-result").fadeIn().removeClass('alert-success').addClass('alert-danger').html(values);
                setTimeout(function() {
                    $(".message-result").fadeOut();
                }, 1000);


            }else if(data.success == "failed"){

                $(".message-result").fadeIn().removeClass('alert-success').addClass('alert-danger').html(data.message);
                setTimeout(function() {
                    $(".message-result").fadeOut();
                }, 1000);
            }
            else{
                $(".message-result").removeClass('alert-danger').addClass('alert-success').html(data.message);
                setTimeout(function() {
                    window.location.replace("my-profile");
                }, 1000);
            }

        },
        error: function(xhr) {
            alert(xhr.status);
        }
    });

}
