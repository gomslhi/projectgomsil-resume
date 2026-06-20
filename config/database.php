<?php
/**
 * Database Configuration for Hostinger
 * 
 * Instructions:
 * 1. Log in to your Hostinger hPanel.
 * 2. Go to Databases -> MySQL Databases.
 * 3. Create a new MySQL Database and User.
 * 4. Fill in the credentials below with your new database details.
 */

$host = 'localhost'; // Biasanya 'localhost' di Hostinger
$dbname = 'your_database_name'; // contoh: 'u123456789_portfolio'
$username = 'your_database_user'; // contoh: 'u123456789_user'
$password = 'Your_Secure_Password_123'; 

try {
    // Membuat koneksi PDO (PHP Data Objects)
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    
    // Mengatur mode error PDO menjadi Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch(PDOException $e) {
    die("Koneksi database gagal: Cek kembali kredensial database Anda.");
}
?>
