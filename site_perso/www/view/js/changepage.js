$(document).ready(function(){
$("form[name='formulaire']").submit(function(e) {
var formData = new FormData($(this)[0]);
        $.ajax({
        url: "controller/formulaire.php",
        type: "POST",
        data: formData,
        async: false,
        success: function (msg) {
        $("#cadre").html(msg);
        },
        cache: false,
        contentType: false,
        processData: false
        });
e.preventDefault();
});
});
