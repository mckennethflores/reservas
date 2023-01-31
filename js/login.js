$("#frmAcceso").on('submit', function (e) {
    e.preventDefault();
    email_login = $("#email_login").val();
    password_login = $("#password_login").val();
   // idtienda = $("#idtienda").val();

    $.post( base_url+"/login_fun.php?op=verifyLoginAdminitrator", {
            "email_login": email_login,
            "password_login": password_login
        },
        function (data) {
           /*  console.log(data); return; */
            if (data != "null") {
                $(location).attr("href", "escritorio.php");
            } else {
                bootbox.alert("Usuario y/o Password incorrectos");
            }
        });
});

function init() {

/*     $.post("../ajax/login.php?op=selectTiendas&opselected=selected", function (r) {
        $("#idtienda").html(r);
    }); */

}
init();