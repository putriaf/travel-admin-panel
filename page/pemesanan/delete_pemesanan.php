<?php

    $kode = $_GET['id'];

    $sql = $koneksi->query("delete from tb_pemesanan where kd_pemesanan = '$kode'");

    if ($sql){
        ?>

          <script type="text/javascript">
            alert ("Data Berhasil Dihapus");
            window.location.href="?page=pemesanan";
          </script>

          <?php
      }
?>
