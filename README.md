# senimandigital.laravel_bootstrap_jquery_subset_magic
Laravel seperti yang kita ketahui merupakan Framework dengan Arsitektur dan Mekanisme yang kompleks. Menggunakan Laravel untuk membangun aplikasi akan terasa relative mudah tapi mempelajari-nya merupakan kondisi yang berbeda. Melalui Framework Senimandigital Laravel Bootstrap jQuery Subset Magic ini Kami mencoba menghadirkan citarasa pengembangan aplikasi layaknya menggunakan Laravel Fullset. Tapi tentusaja dengan mekanisme yang berbeda dibelakang layar.

Proyek dengan label "Subset" tidak dimaksudkan untuk penggunaan sesungguh-nya meski hal tersebut memang memungkinkan, tapi karena label-nya "Subset" maka jelas itu adalah versi minimalis dari versi fullset, dimana pada subset hanya fokus untuk meng-*handle true condition* yang arti-nya tidak ada penangan error.

Tapi tenang saja, meskipun tidak ada penangan error, bukan berarti itu adalah satu kondisi yang mutlak buruk. Tapi justru tanpa handling (Laporan Error) aplikasi yang kita bangun akan menjadi sangat optimal, to the point dan minimalis serta mudah dipelajari.

Kami tidak akan memberikan banyak dokumentasi untuk proyek ini, karena anda bisa melihat langsung ke dokumentasi Laravel, Bootstrap dan jQuery untuk mempelajari segala sesuatu-nya.

## Structure Database
Dalam proyek ini, kami juga menyertakan contoh aplikasi sehingga anda tidak perlu membuang waktu banyak untuk mempelajari-nya. Perlu anda ketahui bahwa kami hanya memberikan contoh kode terbaik, yaitu dengan menyediakan contoh aplikasi yang mengedepankan implementasi algoritma Recursive, Looping dan Group.

### account
Kami lebih menyukai penamaan table "account" daripada tabel "user", alasan-nya sederhanya, yaitu: kemudahan dalam rename struktur database, jika kita menggunakan penamaan tabel seperti "user" maka kita akan kesulitan dalam bulk replace kode program.

### classification
Kemi lebih menyukai 1 tabel yang digunakan bersama oleh berbagai modul daripada harus membuat tabel masing-masing seperti: "account_level", "article_status", "article_category" dan seterus-nya. menurut kami tabel "group" yang hanya berisi kurang dari 100 dan bahkan kurang dari 1.000 data sama sekali tidak membutuhkan sebuah tabel independen untuk menampung data-nya.
