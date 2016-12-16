# BMT Amanah Payroll Application

## Information
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
