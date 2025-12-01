CREATE TABLE prestasi(
	npm CHAR(10) NOT NULL PRIMARY KEY,
    nama VARCHAR(100),
    nama_prestasi VARCHAR(100),
    tahun_prestasi YEAR
);

INSERT INTO prestasi (npm, nama, nama_prestasi, tahun_prestasi)
VALUES
('5520124014', 'M Rommy Arianugraha', 'Juara 1 OSN bidang Informatika', 2022);