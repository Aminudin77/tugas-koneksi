<?php
$host     = "localhost";
$user     = "root";
$password = ""; // Password MySQL Anda disini
$db       = "uts_312310039"; // Nama database Anda disini

// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $user, $password, $db);

// Memeriksa koneksi
if (mysqli_connect_errno()) {
    // Menampilkan pesan jika koneksi gagal
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    // Anda juga bisa menambahkan kode lain untuk menangani situasi koneksi gagal di sini
    // Misalnya, menghentikan eksekusi skrip dengan die() atau melakukan penanganan khusus lainnya.
    // die(); // Menghentikan eksekusi skrip
} else {
    // Koneksi berhasil, Anda bisa melakukan operasi database lainnya di sini
    // Misalnya, melakukan query, menampilkan data, dll.
    // echo "Connected successfully"; // Pesan koneksi berhasil (opsional)
}
?>
