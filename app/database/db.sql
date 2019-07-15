DROP DATABASE IF EXISTS skripsipajak;
CREATE DATABASE IF NOT EXISTS skripsipajak;

USE skripsipajak;

CREATE TABLE admin (
    id_admin INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nama_admin VARCHAR(50),
    username_admin VARCHAR(50),
    password_admin VARCHAR(32)
);

INSERT INTO admin VALUES
(NULL, 'Administrator', 'admin', MD5('admin'));

CREATE TABLE penduduk (
    nik_penduduk VARCHAR(16) PRIMARY KEY NOT NULL,
    nama_penduduk VARCHAR(50),
    alamat_penduduk VARCHAR(200),
    status_wajib_pajak_penduduk BOOLEAN
);

INSERT INTO penduduk VALUES
('1234567890123451', 'Penduduk 1', 'Jl. Alamat', 0),
('1234567890123452', 'Penduduk 2', 'Jl. Alamat', 0),
('1234567890123453', 'Penduduk 3', 'Jl. Alamat', 0),
('1234567890123454', 'Penduduk 4', 'Jl. Alamat', 0),
('1234567890123455', 'Penduduk 5', 'Jl. Alamat', 0),

('1234567890123456', 'Penduduk 6', 'Jl. Alamat', 0),
('1234567890123457', 'Penduduk 7', 'Jl. Alamat', 0),
('1234567890123458', 'Penduduk 8', 'Jl. Alamat', 0),
('1234567890123459', 'Penduduk 9', 'Jl. Alamat', 0),
('1234567890123450', 'Penduduk 10', 'Jl. Alamat', 0);

CREATE TABLE wilayah (
    id_wilayah INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nama_wilayah VARCHAR(50)
);

INSERT INTO wilayah VALUES 
(NULL, 'Wilayah 1'),
(NULL, 'Wilayah 2'),
(NULL, 'Wilayah 3'),
(NULL, 'Wilayah 4');

CREATE TABLE kasun (
    id_kasun INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nama_kasun VARCHAR(50),
    alamat_kasun VARCHAR(200),
    id_wilayah INT,
    FOREIGN KEY (id_wilayah) REFERENCES wilayah(id_wilayah)
);

INSERT INTO kasun VALUES
(NULL, 'Kasun 1', 'Jl. Alamat Kasun', 1),
(NULL, 'Kasun 2', 'Jl. Alamat Kasun', 2),
(NULL, 'Kasun 3', 'Jl. Alamat Kasun', 3),
(NULL, 'Kasun 4', 'Jl. Alamat Kasun', 4);

CREATE TABLE pajak (
    nop_pajak VARCHAR(100) NOT NULL PRIMARY KEY,
    nik_penduduk VARCHAR(16),
    blok_pajak VARCHAR(20),
    tanggal_pembayaran_pajak DATE,
    tahun_pajak INT,
    total_pajak INT,
    total_bayar_pajak INT,
    id_kasun_penarik_pajak INT,
    FOREIGN KEY (nik_penduduk) REFERENCES penduduk(nik_penduduk),
    FOREIGN KEY (id_kasun_penarik_pajak) REFERENCES kasun(id_kasun)
);