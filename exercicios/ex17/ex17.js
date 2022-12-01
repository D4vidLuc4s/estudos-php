$(document).ready(function(){
    var showMessage = $("#showMessage");
    var helpBlock = $('.help-block');
    var formGroup = $('.form-group');

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
                  showMessage.find('#maior').html(data.maior);
                  showMessage.find('#menor').html(data.menor);
                  showMessage.find('#porcen').html(data.porcen);
                  showMessage.find('#media').html(data.med);
              } else {
                  helpBlock.show();
                  $('#errnums').html(data.errors.num);
                  formGroup.addClass('has-error');
              }
          }
       });
    });
});