<p align="center"><img src="https://kiceprogramme.com/img/user/core-img/logo.png" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About KICE

Kice merupakan project yang dikerjakan oleh mahasiswa magang dari polinema dengan kurun waktu 1 bulan (jadi harap dimaklumi jika web masih mengalami kendala dalam prosesnya). Beberapa fitur kice diantaranya : 
- [Fitur Register yang menggantikan google form](https://kiceprogramme.com/en/joinus).
- [Fitur Admin yang dapat menampilkan seluruh data Peserta](https://kiceprogramme.com/admin).
- [Fitur konfirmasi Peserta yang telah melakukan Register](https://kiceprogramme.com/admin/data-tables).
Selebihnya diwah ini merupakan template dari laravel :).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Resource Views dan Template

Pada Project ini, dapat kita lihat segala sesuatu yang berhubungan dengan **[Front End]** dapat ditemukan pada bagian **[resource/view]**. Pada halaman tersebut pada folder /user atau /admin yang terdapat pada **[resource/view]** mempunyai **[master.blade]** sendiri, agar header dan footer tetap sama, tinggal kita menambah konten pada halaman baru yang kita buat atau yang sudah ada. kemudian untuk assets gambar, css, js. dapat kita lihat pada **[/public]**. 

Kemudian sesuatu yang berhubungan dengan Backend sebagain besar terdapat pada **[app]** entah itu **[app/Http]**, **[app/Mail]**, etc :).

## KICE Routing

Beberapa Routing (Sedikit info tempat routing terdapat pada **[/routes/web.php]**) seperti halaman Home, Register, Prosedure dapat kita lihat pada Routing berikut.
<!-- 
- **[Halaman Home Dapat Kita Lihat Melalui ](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [OP.GG](https://op.gg) -->

## Clone Project

Beberapa langkah yang diperlukan untuk melakukan clone project dapat dilihat pada link berikut **[here](https://stackoverflow.com/questions/38602321/cloning-laravel-project-from-github)**

## Switch Language

Fitur Switch language dapat kita lihat pada **[resources/lang]** pada idn.json, untuk sementara hanya bisa mempunyai 2 bahasa. Dapat kita lihat pada **[idn.json]**

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
