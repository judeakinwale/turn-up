function showpass() {
    var pswd = document.getElementById("inputPassword")
    var showhide = document.getElementById("show-eye")
    if (pswd.type === "password") {
        pswd.type = "text"
        showhide.className = "fa fa-eye"
    } else {
        pswd.type = "password"
        showhide.className = "fa fa-eye-slash"
    }
}