$(document).ready(function (){
   var showMessage = $('#showMessage');

   $.ajax({
      type: "POST",
      url: "message.php",
      dataType: "JSON",
      success: function (data){
         showMessage.show();
         showMessage.find('#time').html(data.time);
      }
   });
});
