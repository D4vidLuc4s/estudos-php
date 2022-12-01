$(document).ready(function(){
   var showMessage = $('#showMessage');
   var helpBlock = $('.help-block');
   var formGroup = $('.form-group');

   showMessage.hide();
   helpBlock.hide();
   formGroup.removeClass("has-error");

   $("form").submit(function (event){
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
                showMessage.find('#time').html(data.time);
            } else {
                helpBlock.show();
                $('#errmassa').html(data.errors.num);
                formGroup.addClass('has-error');
            }
         }
      });
   });
});