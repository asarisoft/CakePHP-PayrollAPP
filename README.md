# BMT Amanah Payroll Application

## Installation
Project start from 5 Oktober s.d 10 November 2016
Using CakePHP 3.3

## Installation For Windows Using XAMPp

1. Download XAMPP with PHP versiion is higher 5.4 and not greater than 7
2. Install xampp 
3. Read and edit php.ini 'C:/xampp/php/php.ini' and uncomment ;extensionsintl => intl
4. Open Xampp Controll Panel from StartWindows
5. Activate Apache and Mysql
6. Open WebBrowser (Chrome/Mozilla) and go to 'http://localhost/phpmyadmin'
7. Create Database 'bmt_Penggajian"
8. Copy This Project Folder to (C:/xampp/htdocs) and rename folder be ("bmt-pengggajian")
9. Add "C:/xampp/php" to environment variable in control panel windows
10. Open CMD
11. change directori in cmd to : "C:/xampp/htdocs/bmt-penggajian/bin"
12. Run 'cake migrations migrate'
13. Run 'Cake migrations seeds'
14. Open Webbrowser and go to "http://localhost/bmt-penggajian"
15. Login with username = admin password = 'november2016'
