<head>
<meta name="PHP_SELF" content="http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']; ?>" />
<meta name="REQUESTURL" content="http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
<meta name="REQUEST_URL" content="<?php echo $_SERVER['REQUEST_URI']; ?>" />
<meta name="anggota_level_alias" content="<?php echo $_SESSION['MM_UserGroup']; ?>" />

<link href="http://senimandigital.com/favicon.ico" rel="icon" type="image/x-icon">
<link href="http://assets.senimandigital.kom/css/style.css" rel="stylesheet" type="text/css" />

<script src="http://assets.senimandigital.kom/jquery/3.3.1.js" type="text/javascript"></script>
<script src="http://assets.senimandigital.com/js/script_header.js" type="text/javascript"  /></script>
</head>
<main>
<article>
<section>
<h3>Selamat datang</h3>
<p role="deskripsi">Terimakasih sudah mencoba menggunakan Popular Framework Starter dari Senimandigital. Ini Adalah alat bantu untuk meng-install dan menjalankan Framework Opensource yang populer di Indonesia.</p>

<p>Dalam mempelajari framework, satuhal yang terpenting adalah tidak berlama-lama untuk mempelajari hal-hal yang terlalu fundamental. Untuk menguasai sebuah framework kita harus menempuh jalur yang benar, banyak teknologi diluar sana yang jauh lebih canggih dari pada apa yang sudah kita buat dan pelajari. Jangan terlalu percaya diri apalagi sampai terlalu merasa puas dengan skill koding yang sudah kita kuasai, kita bisa membuat beberaapa modul kompleks dalam sehari, tetapi orang diluarsana  bisa membuat beberapa aplikasi dalam sehari. Ini buka omong kosong, dan juga bisa di capai oleh semua programmer, selama menggunakan teknologi yang sama baik-nya.</p>

<h4>Clean Repository</h4>
<p>Anda mungkin khawatir dengan menggunakan kode generator, kode program yang dihasilkan menjadi terlalu banyak yang tidak kita butuhkan, tapi tidak demikian dengan fasilitas dari senimandigital ini, karena benar-benar hanya berisi satu file, yaitu file yang sedang anda akses sekarang. file ini berada di lokasi:</p>
<textarea><?php print_r($_SERVER['SCRIPT_FILENAME']); ?></textarea>
<p>File ini bisa anda hapus setelah konfigurasi berhasil dilakukan, atau saat anda tidak lagi butuh fasilitas ini. Sedangkan file lain-nya, seperti javascript dan css serta gambar-gambar kita ambil dari berbagai sumber.</p>
<textarea><?php print_r($_SERVER['SCRIPT_FILENAME']); ?></textarea>
<p>Tidak hanya pada file ini, tapi hasil dari kode generator ini juga akan kami buat sebersih mungkin menggunakan berbagai fasilitas bawaan dari masing-masing Stack Framework yang anda pilih, sehingga tidak dibutuhkan adanya penambahan library sama sekali.</p>
<h3>Konfigurasi Framework</h3>
<p role="deskripsi">Sebelum melangkah lebih jauh, hal pertama yang sebaiknya adalah mengkostumasi domain</p>
<table>
  <tr>
    <td width="200"><label for="framework">Stack Framework</label></td>
    <td>
<table style="all:initial;"><tr>
<td><select url-change-parameter-delimiter="/" name="framework" data-index=[<?php echo $key; ?>] value="<?php echo $value; ?>" data-recursive-option-url="https://raw.githubusercontent.com/senimandigital/senimandigital.github.io/master/Templates/dom/option/framework/index.option">
<option>Stack Baru</option>
    <option value="deno">deno</option>
    <option value="node">node</option>
    <option value="php">php</option>
    <option value="jetstream">jetstream</option>
    <option value="laravel">laravel</option>
    <option value="python">python</option>
  </select>
 </td>
 </tr></table>
      </td>
  </tr>
</table>

<h3>Konfigurasi Proyek</h3>
<form id="form1" name="form1" method="post" action="">
<table>
  <tr>
    <td>Judul Proyek</td>
    <td>
      <label for="project_name"></label>
      <input type="text" name="project_name" value="<?php print_r($_SERVER['HTTP_HOST']); ?>" />
    </td>
  </tr>
  <tr>
    <td><label for="project_location">Lokasi Proyek</label></td>
    <td>
      <input type="text" name="project_location"  value="<?php print_r($_SERVER['SCRIPT_FILENAME']); ?>"/>
    </td>
  </tr>
  <caption align="bottom">
  <input type="submit" value="SIMPAN PEMBAHARUAN DATA" />
  </caption>
</table>
</form>


<h3>Script konfigurasi local Domain Name System</h3>
<textarea><?php print_r($_SERVER['SERVER_ADDR']); ?>     <?php print_r($_SERVER['HTTP_HOST']); ?></textarea>
<h3>Script konfigurasi Webserver</h3>
<textarea><?php print_r($_SERVER['SERVER_ADDR']); ?>     <?php print_r($_SERVER['HTTP_HOST']); ?></textarea>

<textarea><?php print_r($_SERVER); ?></textarea>
</section>
</article>
</main>

<script>

</script> 
<script src="http://assets.senimandigital.kom/js/script_footer.js" type="text/javascript" /></script>
