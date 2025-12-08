CREATE TABLE prestasi(
    id INT AUTO_INCREMENT PRIMARY KEY,
	npm VARCHAR(10) NOT NULL UNIQUE,
    nama VARCHAR(100),
    nama_prestasi VARCHAR(100),
    tahun_prestasi YEAR
);

INSERT INTO prestasi (npm, nama, nama_prestasi, tahun_prestasi)
VALUES
('5520124014', 'M Rommy Arianugraha', 'Juara 1 OSN bidang Informatika', 2022);