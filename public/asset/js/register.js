$(document).ready(function () {
    $("#RegNama").keyup(function () {
        if (cekUsername()) {
            $("#RegNama").css("border", "2px solid green");
            $("#pesannama").html(
                "<small class='text-success'>Username Benar</small>"
            );
        } else {
            $("#RegNama").css("border", "2px solid red");
            $("#pesannama").html(
                "<small class='text-danger'>Harus Menggunakan huruf dan kurang dari 25 karakter</small>"
            );
        }
        tampilkanTombol();
    });
    $("#RegEmail").keyup(function () {
        if (cekEmail()) {
            $("#RegEmail").css("border", "2px solid green");
            $("#PesanEmail").html(
                "<small class='text-success'>Email Benar</small>"
            );
        } else {
            $("#RegEmail").css("border", "2px solid red");
            $("#PesanEmail").html(
                "<small class='text-danger'>Menggunakan standar Email</small>"
            );
        }
        tampilkanTombol();
    });

    $("#RegPass").keyup(function () {
        if (cekPassword()) {
            $("#RegPass").css("border", "2px solid green");
            $("#PesanPass").html(
                "<small class='text-success'>Password Benar</small>"
            );
        } else {
            $("#RegPass").css("border", "2px solid red");
            $("#PesanPass").html(
                "<small class='text-danger'>Password harus terdiri dari 8-12 karakter</small>"
            );
        }
        tampilkanTombol();
    });
    $("#RegTelepon").keyup(function () {
        if (cekTelepon()) {
            $("#RegTelepon").css("border", "2px solid green");
            $("#PesanTelepon").html(
                "<small class='text-success'>Nomer Valid</small>"
            );
        } else {
            $("#RegTelepon").css("border", "2px solid red");
            $("#PesanTelepon").html(
                "<small class='text-danger'>Minimal Nomor harus 12 angka</small>"
            );
        }
        tampilkanTombol();
    });
    $("#RegPass").keyup(function () {
        if (cekPassword()) {
            $("#RegPass").css("border", "2px solid green");
            $("#PesanPass").html(
                "<small class='text-success'>Password Benar</small>"
            );
        } else {
            $("#RegPass").css("border", "2px solid red");
            $("#PesanPass").html(
                "<small class='text-danger'>Password harus terdiri dari 8-12 karakter</small>"
            );
        }
        tampilkanTombol();
    });
    $("#RegPass2").keyup(function () {
        if (confirmPassword()) {
            $("#RegPass2").css("border", "2px solid green");
            $("#PesanPass2").html(
                "<small class='text-success'>Password Sesuai</small>"
            );
        } else {
            $("#RegPass2").css("border", "2px solid red");
            $("#PesanPass2").html(
                "<small class='text-danger'>Password Salah</small>"
            );
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
