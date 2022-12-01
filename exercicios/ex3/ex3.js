$(document).ready(function () {
    var showMessageSuccess = $('#showMessageSuccess');
    var showMessageWarning = $('#showMessageWarning');
    var helpBlock = $('.help-block');
    var formGroup = $('.form-group');

    showMessageSuccess.hide();
    showMessageWarning.hide();
    helpBlock.hide();
    formGroup.removeClass("has-error");

    $("form").submit(function (event) {
        event.preventDefault();

        helpBlock.removeClass("has-error");
        showMessageSuccess.hide();
        showMessageWarning.hide();
        helpBlock.hide();

        $.ajax({
            type: "POST",
            url: "message.php",
            data: $('form').serialize(),
            dataType: "JSON",
            success: function (data) {
                console.log(data);

                if (data.success) {
                    showMessageSuccess.show();
                        showMessageSuccess.find('#username').html(data.username);
                        showMessageSuccess.find('#status').html(data.status);
                } else if (!data.success) {
                    showMessageWarning.show();
                        showMessageWarning.find('#username').html(data.username);
                        showMessageWarning.find('#status').html(data.status);
                    helpBlock.show();
                    $("#errname").html(data.errors.nome);
                    $("#errage").html(data.errors.idade);
                    $("#errgender").html(data.errors.genero);
                    formGroup.addClass('has-error');
                }
            }
        });
    });
});