<?php
// versi lumayan
if ($_POST) {
    $nama = filter_input(INPUT_GET, "nama", FILTER_SANITIZE_STRING);
    if (empty($nama)) {
    echo "Nama tidak boleh kosong";
    } else {
    echo "Nama saya adalah $nama";
    }
}
?>
<?php
 // versi sederhana
if ($_POST) {
    $nama = $_POST["nama"];
    echo "Nama saya adalah $nama";
}
?>
