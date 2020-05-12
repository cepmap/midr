
function show(){
    $.ajax({
        url: "php/chat.php",
        cache: false,
        success: function (html) {
            $("#messages_field").html(html)
        }
    });
}

$(document).ready(function () {
    show();
    setInterval('show()',500);
});