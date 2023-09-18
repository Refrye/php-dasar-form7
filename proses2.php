<?php
if ($_POST) {
    $nama = filter_input(INPUT_POST, "nama", FILTER_SANITIZE_STRING);
    if (empty($nama)) {
    echo "Nama tidak boleh kosong";
    }

    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    if (!$email) {
    echo "Email tidak valid";
    }

    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    if (strlen($password) < 8) {
    echo "Password harus lebih dari 8 karakter";
    }

    if (empty($nama) || empty($email) || empty($password)) {
        echo "Semua field wajib diisi";
        exit;
    }
}