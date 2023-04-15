$(document).ready(function () {
    $("#RegNama").keyup(function () {
        if (cekUsername()) {
            $("#RegNama").css("border", "2px solid green");
            $("#pesannama").html("<p class='text-success'>Username Benar</p>");
        } else {
            $("#RegNama").css("border", "2px solid red");
            $("#pesannama").html(
                "<p class='text-danger'>Harus Menggunakan huruf dan kurang dari 25 karakter</p>"
            );
        }
        tampilkanTombol();
    });
    $("#RegEmail").keyup(function () {
        if (cekEmail()) {
            $("#RegEmail").css("border", "2px solid green");
            $("#PesanEmail").html("<p class='text-success'>Email Benar</p>");
        } else {
            $("#RegEmail").css("border", "2px solid red");
            $("#PesanEmail").html(
                "<p class='text-danger'>Menggunakan standar Email</p>"
            );
        }
        tampilkanTombol();
    });

    $("#RegPass").keyup(function () {
        if (cekPassword()) {
            $("#RegPass").css("border", "2px solid green");
            $("#PesanPass").html("<p class='text-success'>Password Benar</p>");
        } else {
            $("#RegPass").css("border", "2px solid red");
            $("#PesanPass").html(
                "<p class='text-danger'>Password harus terdiri dari 8-12 karakter</p>"
            );
        }
        tampilkanTombol();
    });
    $("#RegTelepon").keyup(function () {
        if (cekTelepon()) {
            $("#RegTelepon").css("border", "2px solid green");
            $("#PesanTelepon").html("<p class='text-success'>Nomer Valid</p>");
        } else {
            $("#RegTelepon").css("border", "2px solid red");
            $("#PesanTelepon").html(
                "<p class='text-danger'>Minimal Nomor harus 12 angka</p>"
            );
        }
        tampilkanTombol();
    });
    $("#RegPass").keyup(function () {
        if (cekPassword()) {
            $("#RegPass").css("border", "2px solid green");
            $("#PesanPass").html("<p class='text-success'>Password Benar</p>");
        } else {
            $("#RegPass").css("border", "2px solid red");
            $("#PesanPass").html(
                "<p class='text-danger'>Password harus terdiri dari 8-12 karakter</p>"
            );
        }
        tampilkanTombol();
    });
    $("#RegPass2").keyup(function () {
        if (confirmPassword()) {
            $("#RegPass2").css("border", "2px solid green");
            $("#PesanPass2").html(
                "<p class='text-success'>Password Sesuai</p>"
            );
        } else {
            $("#RegPass2").css("border", "2px solid red");
            $("#PesanPass2").html("<p class='text-danger'>Password Salah</p>");
        }
        tampilkanTombol();
    });

    function cekUsername() {
        let username = $("#RegNama").val();
        if (isNaN(username) && username.length <= 25) {
            return true;
        } else {
            return false;
        }
    }
    function cekEmail() {
        let email = $("#RegEmail").val();
        let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        if (emailRegex.test(email)) {
            return true;
        } else {
            return false;
        }
    }

    function cekTelepon() {
        let telepon = $("#RegTelepon").val();
        if (telepon.length >= 12 && telepon.length < 15) {
            return true;
        } else {
            return false;
        }
    }
    function cekPassword() {
        let password = $("#RegPass").val();
        if (password.length >= 8 && password.length <= 12) {
            return true;
        } else {
            return false;
        }
    }

    function confirmPassword() {
        let confirm = $("#RegPass2").val();
        let pass = $("#RegPass").val();

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
