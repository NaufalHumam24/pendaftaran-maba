CREATE DATABASE IF NOT EXISTS pendaftaran;

USE pendaftaran;

CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    tanggal_lahir DATE,
    jenis_kelamin ENUM('male', 'female') NOT NULL,
    alamat TEXT,
    email VARCHAR(100) NOT NULL,
    telpon VARCHAR(20) NOT NULL,
    prodi VARCHAR(100)
);
