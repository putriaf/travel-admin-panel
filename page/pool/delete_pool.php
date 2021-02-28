<?php

    $kode = $_GET['id'];

    $sql = $koneksi->query("delete from tb_pool where kd_pool = '$kode'");

    if ($sql){
        ?>

          <script type="text/javascript">
            alert ("Data Berhasil Dihapus");
            window.location.href="?page=pool";
          </script>

          <?php
      }
?>
