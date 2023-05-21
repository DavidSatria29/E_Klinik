$(document).ready(function () {
    $("#LoginEmail").keyup(function () {
        if (cekEmail()) {
            $("#LoginEmail").css("border", "2px solid green");
            $("#pesanEmail").html(
                "<small class='text-success'>Email Sesuai</small>"
            );
        } else {
            $("#LoginEmail").css("border", "2px solid red");
            $("#pesanEmail").html(
                "<small class='text-danger'>Gunakan standar Email!!</small>"
            );
        }
        tampilkanTombol();
    });

    $("#LogPass").keyup(function () {
        if (cekPassword()) {
            $("#LogPass").css("border", "2px solid green");
            $("#PesanPassword").html(
                "<small class='text-success'>Password Sesuai</small>"
            );
        } else {
            $("#LogPass").css("border", "2px solid red");
            $("#PesanPassword").html(
                "<small class='text-danger'>Password harus 8-12 karakter</small>"
            );
        }
        tampilkanTombol();
    });

    function cekPassword() {
        let password = $("#LogPass").val();
        if (password.length >= 8 && password.length <= 12) {
            return true;
        } else {
            return false;
        }
    }
    function cekEmail() {
        let email = $("#LoginEmail").val();
        let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        if (emailRegex.test(email)) {
            return true;
        } else {
            return false;
        }
    }

    function tampilkanTombol() {
        if (cekPassword() && cekEmail()) {
            $("#tombol").show();
        } else {
            $("#tombol").hide();
        }
    }
});
