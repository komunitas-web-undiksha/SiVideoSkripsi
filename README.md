# SiVideoSkripsi

[![N|Solid](https://undiksha.ac.id/wp-content/uploads/2016/10/new-LOGO.png)](https://undiksha.ac.id/)

### Installation

 requires [Composer](https://getcomposer.org/)  to install.


Clone the Project and go to working Directory
```sh
$ git clone https://github.com/komunitas-web-undiksha/SiVideoSkripsi.git
$ cd SiVideoSkripsi
```
 Install the dependencies with composer, make .env file and generate key
```sh
$ composer install
$ cp .env.example .env
$ php artisan key:generate
```
Do migration
```sh
$ php artisan migrate
```

Start the Server
```sh
$ php artisan serve
```
### Status

| Frontend | Backend |PETENJUK |
| ------ | ------ |------ |
| |  | form mahasiswa isi import data |
| |  | form manajemen users |
| |  | form manajemen karya ini add on karya |
| |  | form select karya untuk validasi |
| |  | form antrian validasi yang sedang dipilih untuk petugas |
| |  | form antrian validasi yang sudah dikerjakan untuk petugas |
| |  | form validasi isi pertanyaan untuk finish validasi|
| |  | form select karya untuk edit |
| |  | form antrian edit yang sedang dipilih untuk petugas |
| |  | form antrian edit yang sudah dikerjakan untuk petugas |
| |  | form edit |
| |  | form untuk cek validasi pake qr code |
| |  | form untuk cek urutan upload |



>Coding like poetry should be short and concise

