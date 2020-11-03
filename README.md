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
<br>
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

