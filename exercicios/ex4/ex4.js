$(document).ready(function () {
    var showMessage = $('#showMessage');
    var helpBlock = $('.help-block');
    var formGroup = $('.form-group');

    showMessage.hide();
    helpBlock.hide();
    formGroup.removeClass("has-error");

    $("form").submit(function (event) {
        event.preventDefault();

        helpBlock.removeClass("has-error");
        showMessage.hide();
        helpBlock.hide();

        $.ajax({
            type: "POST",
            url: "message.php",
            data: $('form').serialize(),
            dataType: "JSON",
            success: function (data) {
                console.log(data);

                if (data.success) {
                    showMessage.show();

                    if(Array.isArray(data.order))
                        showMessage.find('#numorder').html(data.order);
                } else {
                    helpBlock.show();
                    $("#errn1").html(data.errors.n1);
                    $("#errn2").html(data.errors.n2);
                    $("#errn3").html(data.errors.n3);
                    formGroup.addClass('has-error');
                }
            }
        });
    });
});