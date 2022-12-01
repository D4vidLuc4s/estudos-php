$(document).ready(function(){
    var showMessage = $("#showMessage");
    var helpBlock = $(".help-block");
    var formGroup = $(".form-group");

    showMessage.hide();
    helpBlock.hide();
    formGroup.removeClass("has-error");

    $("form").submit(function(event){
        event.preventDefault();

        helpBlock.removeClass("has-error");
        showMessage.hide();
        helpBlock.hide();

        $.ajax({
            type: "POST",
            url: "message.php",
            data: $("form").serialize(),
            dataType: "JSON",
            success: function (data){
                console.log(data);

                if(data.success){
                    showMessage.show();
                    showMessage.find('#incomuns').html(data.incomuns);
                } else {
                    helpBlock.show();
                    $('#errNumUm').html(data.errors.numUm);
                    $('#errNumDois').html(data.errors.numDois);
                    formGroup.addClass('has-error');
                }
            }
        });
    });
});