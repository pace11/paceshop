<?php

  if (isset($_GET['page'])) $page=$_GET['page'];
  else $page="beranda";
// code by muh iriansyah putra pratama
  if ($page == "beranda") include("page/beranda.php");

  elseif ($page == "belanja") include("page/belanja.php");
  elseif ($page == "tentang") include("page/tentang.php");
  elseif ($page == "login") include("page/login.php");



// code by muh iriansyah putra pratama
else echo"Konten tidak ada";

?>
