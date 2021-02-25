function add_user(){

    var token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        type: "POST",
        url: "/register",
        headers: {
            'X-CSRF-TOKEN': token,

        },
        data: $('form#register_form').serialize(),
        dataType: 'JSON',
        success: function(data) {
            if(data.status =='error'){
                var values = '';
                jQuery.each(data.message, function (key, value) {
                    values += value+"<br>"
                });
               $(".message-result").removeClass('alert-success').addClass('alert-danger').html(values);
            }else{
                $(".message-result").removeClass('alert-danger').addClass('alert-success').html(data.message);
                setTimeout(function() {
                    window.location.replace("login");
                }, 300);
            }

        },
        error: function(xhr) {
            alert(xhr.status);
        }
    });

}
