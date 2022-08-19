USE KinantiUniversity;
SHOW TABLES;

CREATE TABLE data_daftar(
id_daftar int(4) PRIMARY KEY AUTO_INCREMENT,
nama varchar(100),
nik varchar(20),
tempat_lahir varchar(100),
jk enum('Laki-laki', 'Perempuan'),
kewarganegaraan varchar(50),
agama varchar(50),
nama_wali varchar(100),
email varchar(100),
no_telp varchar(20),
provinsi varchar(100),
kabupaten varchar(100),
kecamatan varchar(100),
pendidikan varchar(20),
sekolah varchar(100),
nilai_raport int(3),
prog1 varchar(30),
prog2 varchar(30));

SELECT * FROM data_daftar;

CREATE TABLE provinsi(
id_prov int(2) PRIMARY KEY AUTO_INCREMENT,
nama_prov varchar(50));

INSERT INTO provinsi (nama_prov) VALUES
('Aceh'), ('Sumatera Utara'), ('Sumatera Barat'), ('Riau'), 
('Jambi'), ('Sumatera Selatan'), ('Bengkulu'), ('Lampung'),
('Kepulauan Bangka Belitung'), ('Kepulauan Riau'),
('DKI Jakarta'), ('Jawa Barat'), ('Jawa Tengah'),
('DI Yogyakarta'), ('Jawa Timur'), ('Banten'),
('Bali'), ('Nusa Tenggara Barat'), ('Nusa Tenggara Timur'),
('Kalimantan Barat'), ('Kalimantan Tengah'),
('Kalimantan Selatan'), ('Kalimantan Timur'),
('Kalimantan Utara'), ('Sulawesi Utara'), ('Papua'), 
('Sulawesi Tengah'), ('Sulawesi Selatan'),
('Sulawesi Tenggara'), ('Gorontalo'), ('Sulawesi Barat'),
('Maluku'), ('Maluku Utara'), ('Papua Barat');

SELECT * FROM provinsi;