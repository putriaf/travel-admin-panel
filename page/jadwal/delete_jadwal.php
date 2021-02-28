<?php

    $kode = $_GET['id'];
    $sql = $koneksi->query("delete from tb_jadwal where id_jadwal='$kode'");

    if($sql){
        ?>

          <script type="text/javascript">
           alert ("Data Berhasil Dihapus");
           window.location.href="?page=jadwal";
           </script>

        <?php
    }
    else
?>