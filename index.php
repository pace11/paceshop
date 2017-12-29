<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kios Jersey | Pace</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

  <div class="header">
    <p>Kios Jersey | PACE</p>
  </div>
  <nav>
    <ul>
      <li><a href="?page=beranda">Beranda</a></li>
      <li><a href="?page=belanja">Belanja</a></li>
      <li><a href="?page=tentang">Tentang</a></li>

      <li class="login">
        <a href="page/login.php">Masuk</a>
      </li>
      <li class="logout">
        <a href="page/login.php">Masuk</a>
      </li>
    </ul>
  </nav>

  <div class="box-title">
      <p>Beranda / lel</p>
  </div>
  <div id="box">
    <?php
      include("content.php")
     ?>
  </div>
  <div class="keranjang-title">
      <p>Keranjang Belanja</p>
  </div>
  <div id="keranjang">
    <p>Belum ada yang dibelanjakan</p>
  </div>
  <div class="footer">
    <p>copyright by | pace</p>
  </div>

  </body>
</html>
