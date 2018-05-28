$(function() {
    // this is default options
    $('#contact-us-form').ptmForm(
        {
            'handler': 'php/handler.php',
            'onSuccess' : function() {
                $('#contact-us-form').find('.form-result').removeClass('alert-danger').addClass('alert alert-success');
            },
            'onError' : function() {
                $('#contact-us-form').find('.form-result').removeClass('alert-success').addClass('alert alert-danger');
            },
            'beforeSubmit': function() {
                $('#contact-us-form').find('.form-result').removeClass('alert-success').removeClass('alert-danger');
            }

        }
    )
    
    function setButtonState(e) {
        var checked = $('#agreement').prop('checked');
        $('#contact-us-form').find('[type=submit]').attr('disabled', !checked);
        console.log(checked);
    }

    setButtonState();

    $('#agreement').on('click', setButtonState);
});



$(function() {
    $('.subscribe-form').submit(function (e) {
        e.preventDefault();
        var postdata = $('.subscribe-form').serialize();
        $.ajax({
            type: 'POST',
            url: 'php/subscribe.php',
            data: postdata,
            dataType: 'json',
            success: function (json) {
                if (json.valid == 0) {
                    $('.success-message').hide();
                    $('.error-message').html(json.message).show();
                }
                else {
                    $('.error-message').hide();
                    $('.success-message').hide();
                    $('.subscribe-form').hide();
                    $('.success-message').html(json.message).show();
                }
            }
        });
    })
});