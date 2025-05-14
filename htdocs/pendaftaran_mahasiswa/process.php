<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pendaftaran";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$telpon = $_POST['telpon']
$prodi = $_POST['prodi'];

$sql = "INSERT INTO mahasiswa (nama, tanggal_lahir, jenis_kelamin, alamat, email, telpon, prodi)
        VALUES ('$nama', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$email', '$telpon', '$prodi')";

if ($conn->query($sql) === TRUE) {
    header("Location: success.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
