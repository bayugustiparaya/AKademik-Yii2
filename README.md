# Akademik-Yii2
#### Bayu Gusti Paraya [1811082018]
#### D4 - TRPL 3A - PNP
#### Web Framework
#### Yii Framework
<br><br>
## ~ Materi Pertemuan 4  (MVC tabel mahasiswa)
1. Membuat database Akademik dan tabel mahasiswa [Menambahkan database](https://github.com/bayugustiparaya/Akademik-Yii2/commit/2be2a0c29db6def2b7a4a4055148ddb8d1fb79dd)
2. [Mengatur config](https://github.com/bayugustiparaya/Akademik-Yii2/commit/15d62b983906de5ece4364c63714b4e709d418cd) database /common/config/main-local.php 
3. [Membuat model Mahasiswa](https://github.com/bayugustiparaya/Akademik-Yii2/commit/a34ca0b276816667db4f20aac532233292c3b71e) /frontend/models/Mahasiswa.php
4. [Membuat Controller Mahasiswa](https://github.com/bayugustiparaya/Akademik-Yii2/commit/0a91332adafca8f861aacbb316d0afd3096afdea)  /frontend/controllers/MahasiswaController.php
5. [Membuat View Mahasiswa](https://github.com/bayugustiparaya/Akademik-Yii2/commit/da8e758c78771285e268ad7a18a1cd157ef84316) berupa list /frontend/views/mahasiswa/index.php
6. [Modifikasi View Mahasiswa](https://github.com/bayugustiparaya/Akademik-Yii2/commit/4aab12f29400501219be12baa879f7434d118e03)  dari list menjadi tabel /frontend/views/mahasiswa/index.php
7. [Menambahkan menu navigasi](https://github.com/bayugustiparaya/Akademik-Yii2/commit/2c5e3f8c84036864b2af461d1ec9812d2c8817cf) mahasiswa , supaya mudah diakses (/frontend/views/layouts/main.php)
<br><br>
## ~ Materi Pertemuan 5  (Beauty URL)
1. [Mengaktifkan .htaccess pada kali linux](http://www.andrianext.web.id/2017/02/mengaktifkan-htaccess-apache-di-linux.html)
2. [membuat view hello - site](https://github.com/bayugustiparaya/Akademik-Yii2/commit/e622d4b54f7b97d77f92719a9a348b12d355e1bc) /frontend/views/site/hello.php untuk menampilkan tujuan link url
3. [actionHello](https://github.com/bayugustiparaya/Akademik-Yii2/commit/daa8946d8bceeffb3de4ddb18b63c63257322e5f) pada SiteController.php (/frontend/controllers/SiteController.php) 
4. [menambahkan menu url di nav](https://github.com/bayugustiparaya/Akademik-Yii2/commit/0f1e2014fc85eea30432d018d6726665c43ff282) /frontend/views/layouts/main.php
5. [pretty url](https://github.com/bayugustiparaya/Akademik-Yii2/commit/3c912ae3260defb78f96ac421bb6106743564c9e) mengatur urlManager pada /common/config/main-local.php
6. [membuat .htaccess](https://github.com/bayugustiparaya/Akademik-Yii2/commit/17b4fe101598eb064b1792982e1b960cacbcc739) pada /backend/web/.htaccess dan /frontend/web/.htaccess untuk menghilangkan index.php pada url
7. Hasil dari pretty url adalah : http://akademik.id/site/hello
8. [membuat model Pesan](https://github.com/bayugustiparaya/Akademik-Yii2/commit/560e0a400628c84d8863232c282bf551a30f800a) /frontend/models/Pesan.php 
9. [menambahkan actionPesan](https://github.com/bayugustiparaya/Akademik-Yii2/commit/ebd3864382de4b2dac1c68c8e7bb106584f7950e) /frontend/controllers/SiteController.php 
10. membuat form pesan [(view pesan)](https://github.com/bayugustiparaya/Akademik-Yii2/commit/0a78711fb82f9700418bf362ea28c9eb8c8e49b9) /frontend/views/site/pesan.php
11. membuat tampilan [hasil pesan](https://github.com/bayugustiparaya/Akademik-Yii2/commit/854571805eb242c128d6456037b075534795922c) /frontend/views/site/hasil-pesan.php
12. Melihat hasil di menu Url -> pilih 'pesan' Atau http://akademik.id/site/pesan
<br><br>
## ~ Materi Pertemuan 6 (membuat view langsung di controller)
1. menambahkan atribut prodi dan kelas pada tabel [akademik.mahasiswa](https://github.com/bayugustiparaya/Akademik-Yii2/commit/03fef4fabd34af2fae9e33b8b17aa3380130f43e) /akademik.sql
2. manambahkan [actionQuery](https://github.com/bayugustiparaya/Akademik-Yii2/commit/b6039e93ddc48d2992cb4c2a05207f093fec919d) pada SiteController untuk menampilkan data /frontend/controllers/SiteController.php
3. Melihat hasil http://akademik.id/site/query
<br><br>
## ~ Materi Pertemuan 7 (Active Record)
1. membuat tabel [akademik.dosen](https://github.com/bayugustiparaya/Akademik-Yii2/commit/47d122514b606718bbcd931dfd7660e46c779d46) (nip, nama, alamat, nohp) dan mengisi beberapa data /akademik.dosen.sql
2. membuat model [Dosen](https://github.com/bayugustiparaya/Akademik-Yii2/commit/f57e6ec050e5ac04363a93a12852242e511cae2a) /frontend/models/Dosen.php menggunakan ActiveRecord func tableName() untuk mendefinisikan nama tabel.
3. [menambahkan actionActiveRecord SiteController](https://github.com/bayugustiparaya/Akademik-Yii2/commit/053d282f1e2af141c823fd5dc0555d325f056406) /frontend/controllers/SiteController.php untuk menampikan data dosen menjadi text
4. [menampilkan data dosen menjadi tabel](https://github.com/bayugustiparaya/Akademik-Yii2/commit/0c1a470e585b5fb0b2e7a9ee5e46d4fe47228518) /frontend/controllers/SiteController.php supaya terlihat rapi
<br><br>
## ~ Materi Pertemuan 8 (Gii Code Generator Yii)
1. [Mencek modul](https://github.com/bayugustiparaya/Akademik-Yii2/commit/313a649a9787c72d879c13852d1638d5d6a87cd5) /frontend/config/main-local.php
2. membuat tabel [akademik.jurusan](https://github.com/bayugustiparaya/Akademik-Yii2/commit/22f84af265e68242b26b71ad33ead480a3cc2d90) (id, nama, keterangan) dan mengisi beberapa data /akademik.jurusan.sql
3. membuat model [Jurusan](https://github.com/bayugustiparaya/Akademik-Yii2/commit/e7cc4b4a6d04d978c31452a9d1b1f1752e177264) digenerate oleh gii /frontend/models/Jurusan.php
4. Generate Crud [Jurusan](https://github.com/bayugustiparaya/Akademik-Yii2/commit/fe8e520ad841f82207abdaf217fe0ef8222bd0b1)  : 
    1. /frontend/controllers/JurusanController.php
    2. /frontend/models/JurusanSearch.php
    3. /frontend/views/jurusan/_form.php
    4. /frontend/views/jurusan/_search.php
    5. /frontend/views/jurusan/create.php
    6. /frontend/views/jurusan/index.php
    7. /frontend/views/jurusan/update.php
    8. /frontend/views/jurusan/view.php
5. [edit namespace Controller, model, search](https://github.com/bayugustiparaya/Akademik-Yii2/commit/c7977c86014845f078c14408f936bf53e078d788) :
    1. /frontend/controllers/JurusanController.php
    2. /frontend/models/Jurusan.php
    3. /frontend/models/JurusanSearch.php
6. [edit eyd views](https://github.com/bayugustiparaya/Akademik-Yii2/commit/7a2b0748450fdbc75541b7db6b17b1c0cd9ee10a) :
    1. /frontend/views/jurusan/create.php
    2. /frontend/views/jurusan/index.php
    3. /frontend/views/jurusan/update.php
    4. /frontend/views/jurusan/view.php
7. [akademik.jurusan](https://github.com/bayugustiparaya/Akademik-Yii2/commit/c08d50fd0b3eb15ecf4347f04ec24115dbb3056f)  setelah diedeit / dimanipulasi datanya /akademik.jurusan.hasil.sql
<br><br><hr><br>
<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Advanced Project Template</h1>
    <br>
</p>

Yii 2 Advanced Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
developing complex Web applications with multiple tiers.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

Documentation is at [docs/guide/README.md](docs/guide/README.md).

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Build Status](https://travis-ci.com/yiisoft/yii2-app-advanced.svg?branch=master)](https://travis-ci.com/yiisoft/yii2-app-advanced)

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```

