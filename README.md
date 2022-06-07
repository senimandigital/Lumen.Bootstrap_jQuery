# senimandigital.laravel_bootstrap_jquery_subset_magic
Laravel seperti yang kita ketahui merupakan Framework dengan Arsitektur dan Mekanisme yang kompleks. Menggunakan Laravel untuk membangun aplikasi akan terasa relative mudah tapi mempelajari-nya merupakan kondisi yang berbeda. Melalui Framework Senimandigital Laravel Bootstrap jQuery Subset Magic ini Kami mencoba menghadirkan citarasa pengembangan aplikasi layaknya menggunakan Laravel Fullset. Tapi tentusaja dengan mekanisme yang berbeda dibelakang layar.

Proyek dengan label "Subset" tidak dimaksudkan untuk penggunaan sesungguh-nya meski hal tersebut memang memungkinkan, tapi karena label-nya "Subset" maka jelas itu adalah versi minimalis dari versi fullset, dimana pada subset hanya fokus untuk meng-*handle true condition* yang arti-nya tidak ada penangan error.

Tapi tenang saja, meskipun tidak ada penangan error, bukan berarti itu adalah satu kondisi yang mutlak buruk. Tapi justru tanpa handling (Laporan Error) aplikasi yang kita bangun akan menjadi sangat optimal, to the point dan minimalis serta mudah dipelajari.

Kami tidak akan memberikan banyak dokumentasi untuk proyek ini, karena anda bisa melihat langsung ke dokumentasi Laravel, Bootstrap dan jQuery untuk mempelajari segala sesuatu-nya.

## Arsitektur & Mekanisme
Proyek subset lebih ditujukan untuk mencapai kemudahan dalam belajar sebelum menggunakan Framework Fullset, selain untuk kemudahan dalam belajar proyek subset juga bertujuan untuk mengembangkan aplikasi yang berkinerja secara optimal dengan kecepatan pengambangan aplikasi yang maksimum.

Dengan kata lain proyek subset bertujuan untuk kemudahan dalam pengembangan prototype. Katakanlah, apabila mengembangkan aplikasi menggunakan framework fullset kita akan membutuhkan waktu sekitar 1 Tahun, maka ketika kita mengggunakan Subset prototype akan dapat diselesaikan hanya dalam beberapa hari saja, tergantung seberapa cepat kita menyelesaikan desain database dan menyusun menu didalam aplikasi prototype itu sendiri.

Contoh aplikasi yang kami sertakan didalam proyek ini adalah sebuah code generator, yang artinya anda hanya perlu membuat struktur database untuk menghasilkan aplikasi prototype, disamping menyediakan kode generator yang nantinya bisa anda akses setelah login sebagai "administrator", kami juga menyediakan fasilitas-fasilitas mendasar dari sebuah CMS, yang antara lain: Manajemen Classification, Manajemen Menu, Manajemen Content dan Manajemen Paragraph.

Sedangkan untuk fitur seperti: Komentar, Document, Support, Diskusi, Chatting dan lain sebagai-nya, kami lebih menyarankan anda untuk menggunakan berbagai layanan online yang memang sudah banyak tersedia di Internet dan dapat di-integrasikan kedalam aplikasi, dengan cara itu meskipun proyek kita adalah proyek kecil tetapi data kita bisa bertahan dan tetap online sepanjang masa bahkan setelah website kita expired dan tidak lagi aktif.

## Structure Database
Dalam proyek ini, kami juga menyertakan contoh aplikasi sehingga anda tidak perlu membuang waktu banyak untuk mempelajari-nya. Perlu anda ketahui bahwa kami hanya memberikan contoh kode terbaik, yaitu dengan menyediakan contoh aplikasi yang mengedepankan implementasi algoritma Recursive, Looping dan Group.

### account
Kami lebih menyukai penamaan table "account" daripada tabel "user", alasan-nya sederhanya, yaitu: kemudahan dalam rename struktur database, jika kita menggunakan penamaan tabel seperti "user" maka kita akan kesulitan dalam bulk replace kode program.

### classification
Kami lebih menyukai 1 tabel yang digunakan bersama oleh berbagai modul daripada harus membuat tabel masing-masing seperti: "account_level", "article_status", "article_category" dan seterus-nya. menurut kami tabel "group" yang hanya berisi kurang dari 100 dan bahkan kurang dari 1.000 data sama sekali tidak membutuhkan sebuah tabel independen untuk menampung data-nya.

### website_menu
Kita akan menambahkan prefix "website_" didepan nama tabel menu, sekali lagi harapan-nya adalah kita dapat melakukan bulk replace terhadap tabel "website_menu" ketika saatnya tiba untuk menggunakan program yang kita tulis pada aplikasi lain, semisal aplikasi lain menggunakan penamaan tabel seperti "menu" atau "menus" sehingga kita bisa mereplace seluruh kode program dengan kata kunci "website_menu"  dan tindakan replace ini tidak beresiko merusak algoritma pemrogramman sama sekali.

### website_paragraph
Table paragraph bersifat universal sama halnya dengan tabel classification, didepan nama tabel "paragraph" kita menambahkan prefix "website_" tujuannya adalah sebagai penanda bahwa tabel tersebut merupakan tabel mendasar yang sangat dibutuhkan untuk menjalankan website, yang artinya tanpa tabel ini kemungkinan desain halaman akan berantakan bahka mungkin juga aplikasi tidak akan bisa berjalan.

## Bagaimana Berkonstibusi
Perlu anda ketahui, Proyek ini tidak kami kelola secara aktif karena yang mengelola proyek ini kedepan-nya adalah robot koding yang kami kembangkan. Oleh karena itu ketika anda ingin berkonstribusi maka sebaik-nya anda melakukan-nya melalui website https://senimandigital.com. Pada website kami, semua fasilitas yang dibutuhkan untuk anda yang ingin berkonstribusi sudah kami sediakan. Tidak perlu ragu, dan tidak perlu malu untuk mulai mencoba-nya sekarang, karena tidak akan ada seorangpun yang akan membuli anda disana. Lagipula keseluruhan teknologi yang kami kembangkan adalah memang untuk mewujutkan impian orang-orang seperti anda khususnya didalam upaya praktek pemrograman.
