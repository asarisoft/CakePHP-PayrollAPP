# BMT Amanah Payroll Application

## Informasi
Project start from 5 Oktober s.d 10 November 2016
Using CakePHP 3.3

## Cara Install Project di Windows 7
1. Download XAMPP dengan v ersi PHP minimal 5.4 dan jangan lebih dari versi 7
    https://www.apachefriends.org/download.html
2. Install xampp 
3. Edit PHP.ini 'C:/xampp/php/php.ini' dan hilangkan (;) pada bacaan ";extensionsintl"
4. Buka xammp dari start menu lalu Aktifkan apache dan mysql
6. Buka browser (Chrome/Mozilla) dan ketik URL : 'http://localhost/phpmyadmin'
7. Buat database dengan nama 'bmt"
8. Copy project folder ini (C:/xampp/htdocs) dan rename folder menjadi ("bmt-pengggajian")
9. Tambahkan "C:/xampp/php" ke "environment variable" in control panel windows (googling)
10. Buka CMD
11. ketik di CMD : cd C:\xampp\htdocs\bmt-penggajian\bin
12. lalu ketik di CMD : cake migrations migrate, dan tunggu proses generate database
13. lalu ketik di CMD : Cake migrations seed, dan tunggu proses inisialisasi database
14. Buka browser (Mozilla/chrome) dan ketik URL: "http://localhost/bmt-penggajian
15. Login dengan username = admin password = 'november2016'

## Cara Recovery Database Inno DB (frm ibd):
1. Migrations untuk daftar Struktur Tabel
2. Lakukan DISCARD Ke semua Table Dari Database Baru:
	ALTER TABLE allowances DISCARD TABLESPACE;
	ALTER TABLE bpjs DISCARD TABLESPACE;
	ALTER TABLE educations DISCARD TABLESPACE;
	ALTER TABLE deductions DISCARD TABLESPACE;
	ALTER TABLE jobpositions DISCARD TABLESPACE;
	ALTER TABLE marital_statuses DISCARD TABLESPACE;
	ALTER TABLE payrolls DISCARD TABLESPACE;
	ALTER TABLE phinxlog DISCARD TABLESPACE;
	ALTER TABLE salary_allowances DISCARD TABLESPACE;
	ALTER TABLE salary_deductions DISCARD TABLESPACE;
	ALTER TABLE transports DISCARD TABLESPACE;
	ALTER TABLE users DISCARD TABLESPACE;
	ALTER TABLE users_bpjs DISCARD TABLESPACE;
3. Copy IBD File dari File lama:
4. Laukan IMPORT TABLESPACE;
	ALTER TABLE allowances IMPORT TABLESPACE;
	ALTER TABLE bpjs IMPORT TABLESPACE;
	ALTER TABLE educations IMPORT TABLESPACE;
	ALTER TABLE deductions IMPORT TABLESPACE;
	ALTER TABLE jobpositions IMPORT TABLESPACE;
	ALTER TABLE marital_statuses IMPORT TABLESPACE;
	ALTER TABLE payrolls IMPORT TABLESPACE;
	ALTER TABLE phinxlog IMPORT TABLESPACE;
	ALTER TABLE salary_allowances IMPORT TABLESPACE;
	ALTER TABLE salary_deductions IMPORT TABLESPACE;
	ALTER TABLE transports IMPORT TABLESPACE;
	ALTER TABLE users IMPORT TABLESPACE;
	ALTER TABLE users_bpjs IMPORT TABLESPACE;