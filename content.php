<?php

  if (isset($_GET['page'])) $page=$_GET['page'];
  else $page="beranda";
// code by muh iriansyah putra pratama
  if ($page == "beranda") include("page/beranda.php");

  elseif ($page == "tentang") include("page/tentang.php");
  elseif ($page == "login") include("page/login.php");
 //---------------------------- USER ---------------------------
  elseif ($page == "belanja") include("page/user/belanja.php");
  elseif ($page == "belanja_detail") include("page/user/belanja_detail.php");
  elseif ($page == "belanja_detailpro") include("page/user/belanja_detailpro.php");
  elseif ($page == "keranjang_hapus") include("page/user/keranjang_hapus.php");
  elseif ($page == "pesanan") include("page/user/pesanan.php");


//---------------------------- ADMIN ---------------------------
  elseif ($page == "barang") include("page/admin/barang/barang.php");
  elseif ($page == "tambah_barang") include("page/admin/barang/tambah_barang.php");
  elseif ($page == "tambah_barangpro") include("page/admin/barang/tambah_barangpro.php");
  elseif ($page == "edit_barang") include("page/admin/barang/edit_barang.php");
  elseif ($page == "edit_barangpro") include("page/admin/barang/edit_barangpro.php");
  elseif ($page == "hapus_barang") include("page/admin/barang/hapus_barang.php");
  elseif ($page == "transaksi") include("page/admin/transaksi/transaksi.php");
  elseif ($page == "transaksi_detail") include("page/admin/transaksi/transaksi_detail.php");
  elseif ($page == "pesan") include("page/admin/pesan/pesan.php");


// code by muh iriansyah putra pratama
else echo"Konten tidak ada";

?>
