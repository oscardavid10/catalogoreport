$(document).ready(function() {

  $("body").on("change", "#fileajax", function (){     
    $(this).upload('../funciones/ajaxupload.php', function(data) {
        $("#preview_document").html(data);        
    });
  });

});