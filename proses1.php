<?php
if ($_POST) {
$nama = filter_input(INPUT_POST, "nama", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
$gender = filter_input(INPUT_POST, "gender", FILTER_SANITIZE_STRING);
$terms = filter_input(INPUT_POST, "terms", FILTER_SANITIZE_NUMBER_INT);
$country = filter_input(INPUT_POST, "country", FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING);

echo "Nama: $nama";
echo "<br>";
echo "Email: $email";
echo "<br>";
echo "Password: $password";
echo "<br>";
echo "Gender: $gender";
echo "<br>";
echo "Terms: $terms";
echo "<br>";
echo "Country: $country";
echo "<br>";
echo "Message: $message";
}