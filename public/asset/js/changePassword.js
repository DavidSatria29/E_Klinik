$(document).ready(function () {
    $("#oldEmail").keyup(function () {
        if (cekOldEmail()) {
            $("#oldEmail").css("border", "2px solid green");
            $("#pesanOld").html(
                "<small class='text-success'>Email valid</small>"
            );
        } else {
            $("#oldEmail").css("border", "2px solid red");
            $("#pesanOld").html(
                "<small class='text-danger'>Gunakan standar email valid</small>"
            );
        }
        tampilkanTombol();
    });
    $("#newPassword").keyup(function () {
        if (cekPassword()) {
            $("#newPassword").css("border", "2px solid green");
            $("#pesanNew").html(
                "<small class='text-success'>Password Benar</small>"
            );
        } else {
            $("#newPassword").css("border", "2px solid red");
            $("#pesanNew").html(
                "<small class='text-danger'>Password harus terdiri dari 8-12 karakter</small>"
            );
        }
        tampilkanTombol();
    });
    $("#confirm-password").keyup(function () {
        if (confirmPassword()) {
            $("#confirm-password").css("border", "2px solid green");
            $("#pesanConfirm").html(
                "<small class='text-success'>Password Sesuai</small>"
            );
        } else {
            $("#confirm-password").css("border", "2px solid red");
            $("#pesanConfirm").html(
                "<small class='text-danger'>Password Salah</small>"
            );
        }
        tampilkanTombol();
    });

    function cekOldEmail() {
        let email = $("#oldEmail").val();
        let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        if (emailRegex.test(email)) {
            return true;
        } else {
            return false;
        }
    }

    function cekPassword() {
        let password = $("#newPassword").val();
        if (password.length >= 8 && password.length <= 12) {
            return true;
        } else {
            return false;
        }
    }

    function confirmPassword() {
        let confirm = $("#confirm-password").val();
        let pass = $("#newPassword").val();

        if (confirm === pass) {
            return true;
        } else {
            return false;
        }
    }

    function tampilkanTombol() {
        if (cekPassword() && cekEmail() && confirmPassword()) {
            $("#tombol").show();
        } else {
            $("#tombol").hide();
        }
    }
});
