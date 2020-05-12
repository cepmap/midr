function on_click_login() {
    if (document.getElementById("register_form").style.display !== "none"){
        document.getElementById("register_form").style.display = "none";
    }
    var login_form = document.getElementById("login_form");
    if (login_form.style.display !== "none"){
        login_form.style.display = "none"
    }
    else {
        login_form.style.display = "block"
    }
}
function on_click_register() {
    if (document.getElementById("login_form").style.display !== "none"){
        document.getElementById("login_form").style.display = "none";
    }
    var login_form = document.getElementById("register_form");
    if (login_form.style.display !== "none"){
        login_form.style.display = "none"
    }
    else {
        login_form.style.display = "block"
    }
}